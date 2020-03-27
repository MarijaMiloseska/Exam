<?php

use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'patent_name' => Str::random(20),
            'patient_surname'=> Str::random(20),
            'EMBR' => Int::random(20),
            'family_doctor' => Str::random(20)

            $patient->save();
    }
}
