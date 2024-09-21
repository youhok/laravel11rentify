import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import PrimeVue from "primevue/config";
import Aura from '@primevue/themes/aura';
import Button from 'primevue/button';
import SpeedDial from 'primevue/speeddial';
import SplitButton from 'primevue/splitbutton';
import InputText from 'primevue/inputtext';
import Select from 'primevue/select';
import DataView from 'primevue/dataview';
import Card from 'primevue/card';
import ScrollPanel from 'primevue/scrollpanel';
import InputNumber from 'primevue/inputnumber';
import MultiSelect from 'primevue/multiselect';
import Password from 'primevue/password';
import RadioButton from 'primevue/radiobutton';
import Toast from 'primevue/toast';
import ToastService from 'primevue/toastservice';
import Dialog from 'primevue/dialog';
import FileUpload from 'primevue/fileupload';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Listbox from 'primevue/listbox';
import 'aos/dist/aos.css';

import 'primeicons/primeicons.css'



const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(PrimeVue,{
            theme: {
                preset: Aura,
                options: {
                    darkModeSelector: '.my-app-light',
                }
            },
        })
        .use(ToastService)
        .component('Listbox', Listbox)
        .component('DataTable', DataTable)
        .component('Column', Column)
        .component('Button' , Button)
        .component('SpeedDial' , SpeedDial)
        .component('SplitButton' , SplitButton)
        .component('InputText' , InputText)
        .component('Select' , Select)
        .component('DataView' , DataView)
        .component('Card' , Card)
        .component('ScrollPanel' , ScrollPanel)
        .component('InputNumber' , InputNumber)
        .component('MultiSelect' , MultiSelect)
        .component('Password' , Password)
        .component('RadioButton' , RadioButton)
        .component('Toast' , Toast)
        .component('Dialog' , Dialog)
        .component('FileUpload' , FileUpload)
        .use(ZiggyVue)
        .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
