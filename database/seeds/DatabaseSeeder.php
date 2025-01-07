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

        //patient
        User::create([
            'name' => 'studen ',
            'email' => 'test1@test.test',
            'password' => bcrypt('password'),
            'role' => 'patient',
            'phone' => '0116233245',
            'matric_id' => '1233',
            'status' => 'approved',
        ]);

        //patient pending 
        User::create([
            'name' => 'test ',
            'email' => 'test@test.test',
            'password' => bcrypt('password'),
            'role' => 'patient',
            'phone' => '0116233245',
            'matric_id' => '123',
            'status' => 'pending',
        ]);

        //Doctors
        User::create([
            'name' => 'Dr. Khairul Salleh Bin Abdul Basit',
            'email' => 'khairulsalleh@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '101234',
            'status' => 'approved',
            'photo' => 'Dr.KhairulSalleh.jpg'
        ]);


        User::create([
            'name' => 'Dr. Norhilda Binti Abdul Karim',
            'email' => 'norhilda@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '123890',
            'status' => 'approved',
            'photo' => 'Dr.NorhildaBinti.jpg'
        ]);

        User::create([
            'name' => 'Dr. Erwina Nussyaheera Binti Sulaiman ',
            'email' => 'erwinasyaheera@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '345690',
            'status' => 'approved',
            'photo' => 'Dr.ErwinaNussyaheera.jpg'
        ]);


        User::create([
            'name' => 'Dr. Syed Anas Bin Syed Ismail',
            'email' => 'syedanas@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '234098',
            'status' => 'approved',
            'photo' => 'Dr.SyedAnas.jpg'
        ]);


        User::create([
            'name' => 'Dr. Noor Aina Binti Abdullah ',
            'email' => 'noorainabdullah@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '143289',
            'status' => 'approved',
            'photo' => 'Dr.NoorAinaBinti.jpg'
        ]);


        User::create([
            'name' => 'Dr. Nur Azmma Aziana Binti Azman',
            'email' => 'nurazma@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '145890',
            'status' => 'approved',
            'photo' => 'Dr.NurAzmma.jpg'
        ]);


        User::create([
            'name' => 'Dr. Mohammad Hazwan Hafizuddin Bin Hashim',
            'email' => 'mhazwanh@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'doctor',
            'phone' => '0116233245',
            'matric_id' => '1897324',
            'status' => 'approved',
            'photo' => 'Dr.MohammadHazwan.jpg'
        ]);


        //dentist
        User::create([
            'name' => 'Dr. Mohammad Syarbini Bin Saudi',
            'email' => 'syarbini@umpsa.edu.my',
            'password' => bcrypt('password'),
            'role' => 'dentist',
            'phone' => '0116233245',
            'matric_id' => '128567',
            'status' => 'approved',
            'photo' => 'Dr.MohammadSyarbini.jpg'
        ]);




        // Seeding Doctor data using the factory
        // This will generate 10 doctor records
        Doctor::factory(5)->create();
        Medicine::factory(5)->create();



        //  Role::insert($roles);
        //  // Property::factory(20)->recycle($users)->create();
        //  // Property::factory(20)->create();

        //  // Call the RegionsTableSeeder


    }
}
