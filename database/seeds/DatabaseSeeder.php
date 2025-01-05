<?php

use App\Doctor;
use App\Medicine;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Seeding Doctor data using the factory
        // This will generate 10 doctor records
        Doctor::factory(10)->create();
        Medicine::factory(10)->create();



        User::create([
            'name' => 'Mohammed Abdullah',
            'email' => 'mohammedbakhadher@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'super_admin',
            'phone' => '01162332606',
            'matric_id' => '1315487',
            'status' => 'Approved',
        ]);
        User::create([
            'name' => 'Nusrat Nisha ',
            'email' => 'nusrat.nisha101@gmail.com',
            'password' => bcrypt('Abcde101'),
            'role' => 'super_admin',
            'phone' => '01162332606',
            'matric_id' => '1315488',
            'status' => 'Approved',
        ]);




        //  Role::insert($roles);
        //  // Property::factory(20)->recycle($users)->create();
        //  // Property::factory(20)->create();

        //  // Call the RegionsTableSeeder

        //  $this->call(RegionsTableSeeder::class);



    }
}
