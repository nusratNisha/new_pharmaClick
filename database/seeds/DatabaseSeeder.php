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
            'matric_id' => '12345',
            'status' => 'approved',
        ]);
        User::create([
            'name' => 'Nusrat Nisha ',
            'email' => 'nusrat.nisha101@gmail.com',
            'password' => bcrypt('Abcde101'),
            'role' => 'super_admin',
            'phone' => '01162332606',
            'matric_id' => '123456',
            'status' => 'approved',
        ]);
        User::create([
            'name' => 'test ',
            'email' => 'test@test.test',
            'password' => bcrypt('password'),
            'role' => 'patient',
            'phone' => '0116233245',
            'matric_id' => '123',
            'status' => 'pending',
        ]);




        //  Role::insert($roles);
        //  // Property::factory(20)->recycle($users)->create();
        //  // Property::factory(20)->create();

        //  // Call the RegionsTableSeeder

        //  $this->call(RegionsTableSeeder::class);



    }
}
