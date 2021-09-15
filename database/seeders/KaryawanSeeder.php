<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 20; $i++){
        // insert data ke table karyawan dengan faker
        \DB::table('karyawanpdfs')->insert([
        	'id' => $faker->id,
        	'nama' => $faker->name,
        	'alamat' => $faker->adress,
        	'jabatan' => $faker->position,
            'no telepon' => $faker->phone,
            'gaji' => 'Rp 2000000' 
        ]);
        }
    }
}
