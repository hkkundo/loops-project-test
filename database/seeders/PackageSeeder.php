<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = array(
            [
                'name' => 'Basic',
                'prefix' => 'basic',
                'period' => '30',
                'price' => 50000
            ],
            [
                'name' => 'Middle',
                'prefix' => 'middle',
                'period' => '60',
                'price' => 130000
            ],
            [
                'name' => 'Advance',
                'prefix' => 'advance',
                'period' => '90',
                'price' => 250000
            ]
        );

        foreach ($datas as $data) {
            Package::firstOrCreate([
                'prefix' => $data['prefix']
            ], [
                'name' => $data['name'],
                'prefix' => $data['prefix'],
                'period' => $data['period'],
                'price' => $data['price'],
            ]);
        }
    }
}
