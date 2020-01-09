<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->truncate();
        $adminRole= Role::where('name','admin')->first();
        $staffRole= Role::where('name','staff')->first();
       

        $admin = User::create([
            'fname'=> 'Admin Firstname',
            'mname'=> 'Admin Middlename',
            'lname'=> 'Admin Lastname',
            'email'=> 'admin@admin.com',
            'password'=> Hash::make('password')
        ]);

        $staff = User::create([
            'fname'=> 'Staff FirstName',
            'mname'=> 'Staff MiddleName',
            'lname'=> 'Staff Lastname',
            'email'=> 'staff@staff.com',
            'password'=> Hash::make('password')
        ]);
      

        $admin->roles()->attach($adminRole);
        $staff->roles()->attach($staffRole);
       
    }
}
