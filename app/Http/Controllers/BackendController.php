<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Roles;

class BackendController extends Controller
{
    public function Role() {
        return Inertia::render('Backend/Roles', [
            'roles' => Roles::all()->map(function($role) {
                return [
                    'id' => $role->id,
                    'name' => $role->name,
                    'permissions' => json_decode($role->permissions, true), // Decode the JSON string
                ];
            })
        ]);
    }
    public function Table(){
        return Inertia::render('Backend/Table');
    }
}
