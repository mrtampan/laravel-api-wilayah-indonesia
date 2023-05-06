<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataJson = file_get_contents(database_path('seeders/data-wilayah/districts.json'));

        $districts = json_decode($dataJson);

        foreach ($districts as $dist) {
            DB::table('districts')->insert([
                'id' => $dist->id,
                'regencies_id' => $dist->regencies_id,
                'name' => $dist->name,
            ]);
        }
    }
}
