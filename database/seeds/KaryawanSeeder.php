<?php

use Illuminate\Database\Seeder;
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
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('karyawans')->insert([
    			'nama_karyawan' => $faker->name,
    			'jabatan_karyawan' => $faker->jobTitle,
    			'umur_karyawan' => $faker->numberBetween(25,40),
    			'alamat_karyawan' => $faker->address
    		]);
        }
    }
}