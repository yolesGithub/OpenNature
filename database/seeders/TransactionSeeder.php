<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\transactions;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactionData = [
            [
                'transaction-id' => '0000000001',
                'user-id-fk' => '0000000001',
                'plant-id-fk' => '0000000001',
                'transaction-date' => '2024-09-13 06:53:37',
            ],
        ];
        \DB::beginTransaction();
        try {
            foreach ($transactionData as $data) {
                transactions::create($data);
            }
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollBack();
            throw $e;
        }
    }
}