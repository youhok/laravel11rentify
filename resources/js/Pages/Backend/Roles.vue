<template>
  <AuthenticatedLayout>
    <div class="flex justify-between">
      <h3 class="text-3xl font-medium text-gray-700">Admin Set Role</h3>
      <div>
        <Button
          label="Add Role"
          icon="pi pi-arrow-down"
          @click="() => openPosition('top')"
          severity="contrast"
          style="min-width: 5rem"
        />
      </div>
    </div>

    <div class="container mt-9">
      <div class="row">
        <div class="col-12">
          <DataTable :value="roles" tableStyle="min-width: 50rem">
            <Column field="name" header="Name"></Column>
            <Column field="permissions" header="Permissions"></Column>
            <Column header="Actions">
                <template #body="slotProps">
                <Button
                  icon="pi pi-pencil"
                  outlined
                  rounded
                  class="mr-2"
                  @click="editRole(slotProps.data)"
                />
                <Button
                  icon="pi pi-trash"
                  outlined
                  rounded
                  severity="danger"
                  @click="confirmDeleteRole(slotProps.data)"
                />
                </template>
            </Column>
          </DataTable>
        </div>
      </div>
    </div>

    <Dialog
      v-model:visible="visible"
      header="Add Role"
      :style="{ width: '30rem' }"
      :position="position"
      :modal="true"
      :draggable="false"
    >
      <span class="text-surface-500 dark:text-surface-400 block mb-8"
        >Update or Add your information.</span
      >
      <div class="flex items-center gap-4 mb-4">
        <label for="Name" class="font-semibold w-24">Name</label>
        <InputText
          id="name"
          class="flex-auto"
          v-model="roleData.name"
          autocomplete="off"
        />
      </div>
      <div class="flex items-center gap-4 mb-8">
        <label for="Permissions" class="font-semibold w-24">Permissions</label>
        <MultiSelect
          v-model="roleData.permissions"
          :options="role"
          optionLabel="name"
          filter
          placeholder="Select permissions"
          :maxSelectedLabels="4"
          class="flex-auto"
        />
      </div>
      <div class="flex justify-end gap-2">
        <Button
          type="button"
          label="Cancel"
          severity="secondary"
          @click="visible = false"
        ></Button>
        <Button
          type="button"
          severity="contrast"
          label="Save"
          @click="saveRole"
        ></Button>
      </div>
    </Dialog>
  </AuthenticatedLayout>
</template>

<script setup>
import { ref } from "vue";
import { useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { useToast } from "primevue/usetoast";

const toast = useToast();
const visible = ref(false);
const position = ref("center");

defineProps({
    roles:Object
})

const role = [
  { name: "update" },
  { name: "create" },
  { name: "delete" },
  { name: "read" },
];

const roleData = useForm({
  id: null,
  name: "",
  permissions: [],
});

function openPosition(pos) {
  position.value = pos;
  visible.value = true;
}

function editRole(role) {
  roleData.id = role.id;
  roleData.name = role.name;
  roleData.permissions = role.permissions.map(permission => ({ name: permission }));
  visible.value = true;
}

function saveRole() {
  const payload = {
    name: roleData.name,
    permissions: roleData.permissions.map((permission) => permission.name),
  };

  if (roleData.id) {
    roleData
      .transform((data) => payload)
      .put(route("roles.update", roleData.id), {
        onSuccess: () => {
          visible.value = false;
          showSuccessToast("Role Updated");
          roleData.reset();
        },
        onError: (errors) => {
          console.log(errors);
        },
      });
  } else {
    roleData
      .transform((data) => payload)
      .post(route("roles.create"), {
        onSuccess: () => {
          visible.value = false;
          showSuccessToast("Role Added");
          roleData.reset();
        },
        onError: (errors) => {
          console.log(errors);
        },
      });
  }
}

function confirmDeleteRole(role) {
  if (confirm(`Are you sure you want to delete the role: ${role.name}?`)) {
    roleData.delete(route("roles.delete", role.id)).then(() => {
      showSuccessToast("Role Deleted");
    }).catch((errors) => {
      console.log(errors);
    });
  }
}

function showSuccessToast(message) {
  toast.add({
    severity: "success",
    summary: message,
    detail: `The role has been successfully ${message.toLowerCase()}.`,
    life: 3000
  });
}
</script>

<style scoped>
</style>
