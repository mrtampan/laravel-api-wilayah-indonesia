<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataJson = file_get_contents(database_path('seeders/data-wilayah/province.json'));

        $province = json_decode($dataJson);

        foreach ($province as $prov) {
            DB::table('province')->insert([
                'id' => $prov->id,
                'name' => $prov->name,
            ]);
        }
    }
}
