<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Role::where(['name'=>'Admin'])->first()){
            $adminRole = Role::where(['name'=>'Admin'])->first();
        }
        else{
            $adminRole = Role::create(['name' => 'Admin']);
        }
        if(!Role::where(['name'=>'Guest'])->first())
            Role::create(['name' => 'Guest']);

        if(Permission::where(['name'=> 'manage tasks'])->first()){
            $permission =  Permission::where(['name'=> 'manage tasks'])->first();
        }
        else{
            $permission = Permission::create(['name' => 'manage tasks']);
        }
        $permission->assignRole($adminRole);

        $adminUser = User::factory()->create([
            'name' => 'admin',
            'email' => 'iheanyi.uko@helivesempowermentfoundation.org',
            'password' => bcrypt('Uheroempower_412_227'),
        ]);
        $adminUser->assignRole('Admin');
    }
}
