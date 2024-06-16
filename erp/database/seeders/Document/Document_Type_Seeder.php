<?php

namespace Database\Seeders\Document;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Document_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_types')->insert([
            ['name' => 'Purchase Order', 'slug' => 'purchase-order'],
            ['name' => 'Sales Quotation', 'slug' => 'sales-quotation'],
            ['name' => 'Sales Order', 'slug' => 'sales-order'],
            ['name' => 'Customer Invoice', 'slug' => 'customer-invoice'],
        ]);
    }
}
