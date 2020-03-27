<?php

use Illuminate\Database\Seeder;

class DoctorPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_patient')->insert([
            'doctor_id' => Str::random(10),
            'patient_id'=> Str::random(10),

            $doctor_patient->save();
}
