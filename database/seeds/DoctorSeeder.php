<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('doctors')->insert([
            'name' => Str::random(10),
            'surname'=> Str::random(20),
            'EMBR' => Int::random(13),
            'medical_licence' = Str::random(10),

            $doctor->save();
    }
}
