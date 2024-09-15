<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plants;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plantData = [
            [
                'plant-id' => '0000000001',
                'plant-name' => 'Kembang Sepatu',
                'plant-image' => '1.jpg',
                'plant-price' =>  35,
            ],
            [
                'plant-id' => '0000000002',
                'plant-name' => 'Poppy',
                'plant-image' => '2.jpg',
                'plant-price' => 28,
            ],
            [
                'plant-id' => '0000000003',
                'plant-name' => 'Tulip',
                'plant-image' => '3.jpg',
                'plant-price' => 20,
            ],
            [
                'plant-id' => '0000000004',
                'plant-name' => 'Aster',
                'plant-image' => '4.jpg',
                'plant-price' => 125,
            ],
            [
                'plant-id' => '0000000005',
                'plant-name' => 'Lavender',
                'plant-image' => '5.jpg',
                'plant-price' => 18,
            ],
            [
                'plant-id' => '0000000006',
                'plant-name' => 'Buttercup',
                'plant-image' => '6.jpg',
                'plant-price' => 20,
            ],
            [
                'plant-id' => '0000000007',
                'plant-name' => 'Cabai',
                'plant-image' => '7.jpg',
                'plant-price' => 10,
            ],
            [
                'plant-id' => '0000000008',
                'plant-name' => 'Daisy Ungu',
                'plant-image' => '8.jpg',
                'plant-price' => 15,
            ],
            [
                'plant-id' => '0000000009',
                'plant-name' => 'Lily of the Valley',
                'plant-image' => '9.jpg',
                'plant-price' => 16,
            ],
            [
                'plant-id' => '0000000010',
                'plant-name' => 'Anthurium',
                'plant-image' => '10.jpg',
                'plant-price' => 30,
            ],
            [
                'plant-id' => '0000000011',
                'plant-name' => 'Cosmos',
                'plant-image' => '11.jpg',
                'plant-price' => 10,
            ],
            [
                'plant-id' => '0000000012',
                'plant-name' => 'Mawar',
                'plant-image' => '12.jpg',
                'plant-price' => 20,
            ],
            [
                'plant-id' => '0000000013',
                'plant-name' => 'Tulip',
                'plant-image' => '13.jpg',
                'plant-price' => 25,
            ],
            [
                'plant-id' => '0000000014',
                'plant-name' => 'Forsythia',
                'plant-image' => '14.jpg',
                'plant-price' => 50,
            ],
            [
                'plant-id' => '0000000015',
                'plant-name' => 'Dahlia',
                'plant-image' => '15.jpg',
                'plant-price' => 185,
            ],
            [
                'plant-id' => '0000000016',
                'plant-name' => 'Rose',
                'plant-image' => '16.jpg',
                'plant-price' => 120,
            ],
            [
                'plant-id' => '0000000017',
                'plant-name' => 'Rose',
                'plant-image' => '17.jpg',
                'plant-price' => 12,
            ],
            [
                'plant-id' => '0000000018',
                'plant-name' => 'Amongus',
                'plant-image' => '18.jpg',
                'plant-price' => 600613,
            ],
            [
                'plant-id' => '0000000019',
                'plant-name' => 'Hibiscus',
                'plant-image' => '19.jpg',
                'plant-price' => 60,
            ],
            [
                'plant-id' => '0000000020',
                'plant-name' => 'Sunflower',
                'plant-image' => '20.jpg',
                'plant-price' => 75,
            ],
        ];
        \DB::beginTransaction();
        try {
            foreach ($plantData as $data) {
                plants::create($data);
            }
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }
}
