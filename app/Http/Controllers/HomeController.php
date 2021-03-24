<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'delete post']);
        // $role = Role::find(1);
        // $permission = Permission::find(3);
        // $role->givePermissionTo($permission);               //assign single permission to role 
       
        // $role->syncPermissions($permissions);                   //assign multi permision for role 


        $role = Role::find(1);

        $permission =  Permission::find(3);

        $role->revokePermissionTo($permission);

        return view('home');
    }
}
