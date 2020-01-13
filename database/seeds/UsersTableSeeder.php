<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Type;
use App\Room;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('role_user')->truncate();
        // $adminRole= Role::where('name','admin')->first();
        // $staffRole= Role::where('name','staff')->first();
       

        $admin = User::create([
            'fname'=> 'Admin Firstname',
            'mname'=> 'Admin Middlename',
            'lname'=> 'Admin Lastname',
            'email'=> 'admin@admin.com',
            'type_id' => 3,
            'password'=> Hash::make('password')
        ]);

        $staff = User::create([
            'fname'=> 'Staff FirstName',
            'mname'=> 'Staff MiddleName',
            'lname'=> 'Staff Lastname',
            'email'=> 'staff@staff.com',
            'type_id' => 2,
            'password'=> Hash::make('password')
        ]);
      
   

          User::create([
            'fname'=> 'jay mdeia ',
            'mname'=> 'mid name',
            'lname'=> 'james',
            'email'=> 'tenant1@staff.com',
            'type_id' => 1,
            'phone_no' => 834747474,
            'password'=> Hash::make('password')
        ]);

        
        User::create([
            'fname'=> 'tenant 2',
            'mname'=> 'mid tent',
            'lname'=> 'hello',
            'email'=> 'tenant2@staff.com',
            'phone_no' => 7474929,
            'type_id' => 1,
            'password'=> Hash::make('password')
        ]);

        Room::create([
            'room_name'=> 'room 2',
            'room_type'=> 'single',
            'price'=> "3000",
            'status'=> "vacant",
           
          
        ]);
      
      
   
        // $admin->roles()->attach($adminRole);
        // $staff->roles()->attach($staffRole);
       
        Type::insert([
            [
             'type'=> 'tenant',
            ],
            [
             'type'=> 'staff',
            ],
           [
            'type'=> 'admin',
           ]
         ]);
 
    }
}
