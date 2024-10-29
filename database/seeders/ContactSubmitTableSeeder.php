<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactSubmit;

class ContactSubmitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactsubmitRecords = [
            ['id' => 1, 'name' => 'Made Pranajaya Dibyacita', 'phone' => '081234567890', 'email' => 'mdpranajaya@gmail.com', 'subject' => 'Complain', 'message' => 'Hello World!'],
            ['id' => 2, 'name' => 'John Doe', 'phone' => '081234567890', 'email' => 'test123@gmail.co', 'subject' => 'Happy', 'message' => 'Thank You! I am happy here!'],
        ];

        ContactSubmit::insert($contactsubmitRecords);
    }
}
