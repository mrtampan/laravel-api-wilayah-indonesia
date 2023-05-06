<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegenciesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataJson = file_get_contents(database_path('seeders/data-wilayah/regencies.json'));

        $regencies = json_decode($dataJson);

        foreach ($regencies as $regen) {
            DB::table('regencies')->insert([
                'id' => $regen->id,
                'province_id' => $regen->province_id,
                'name' => $regen->name,
            ]);
        }
    }
}
