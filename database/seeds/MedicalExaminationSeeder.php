<?php

use Illuminate\Database\Seeder;

class MedicalExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('medical_examination')->insert([
            'doctor_name' => Str::random(20),
            'patient_name'=> Str::random(20),
            'medical_remedy' => Str::random(20),

            $medical_examination->save();
    }
}
