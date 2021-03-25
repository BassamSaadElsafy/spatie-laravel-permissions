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
        //roles and permission

        //role may contains one or more permissions
        //permission may be assigned to one or more roles
        ///////////////////////////////////////////////////////

        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'delete post']);
        // $role = Role::find(1);
        // $permission = Permission::find(3);
        // $role->givePermissionTo($permission);               //assign single permission to role 
       
        // $role->syncPermissions($permissions);                   //assign multi permision for role (did not try it)


        // $role = Role::find(1);

        // $permission =  Permission::find(3);

        // $role->revokePermissionTo($permission);               //remove permission from role

        $permission = Permission::find(3);

        // auth()->user()->givePermissionTo($permission);               //give permission to user


        // auth()->user()->assignRole('admin');                        //assign role to admin
        auth()->user()->removeRole('admin');                           //remove role from admin


        // $user->syncPermissions(['edit articles', 'delete articles']);   //give multi permission to user
        // auth()->user()->revokePermissionTo($permission);                //remove permission from user

        // dd(auth()->user()->hasPermissionTo($permission));               //check if a user has a permission


        // auth()->user()->givePermissionTo($permission);                 //give role to user

        // auth()->user()->hasAnyPermission(['edit articles', 'publish articles', 'unpublish articles']);   //check if a user has Any of an array of permissions

        // auth()->user()->hasAllPermissions(['edit articles', 'publish articles', 'unpublish articles']);       //if a user has All of an array of permissions


        // It is generally best to code your app around permissions only. That way you can always use the native Laravel @can and can() directives everywhere in your app.


        //============Note**====================//
        // users have roles, and roles have permissions, and your app always checks for permissions, not roles.
        //======================================//



        return view('home');
    }
}
