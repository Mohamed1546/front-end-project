<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([
            'firstname' => 'mostafa', 
            'lastname' => 'elgamal',
            'email' => 'mostafa@eraasoft.com',
            'password' => bcrypt('123456789'),
            'status'=>'1',
            'type'=>'admin',
            'code'=>mt_rand(1000000, 9999999)
        ]);
        $role = Role::create(['name' => 'Admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
