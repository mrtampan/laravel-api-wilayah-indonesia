<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataJson = file_get_contents(database_path('seeders/data-wilayah/villages.json'));

        $villages = json_decode($dataJson);

        foreach ($villages as $vill) {
            DB::table('villages')->insert([
                'id' => $vill->id,
                'districts_id' => $vill->districts_id,
                'name' => $vill->name,
            ]);
        }
    }
}
