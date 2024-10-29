<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NewsletterSubscribers;

class NewsletterSubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscribersRecords = [
            ['id' => 1, 'email' => 'mdpranajaya@gmail.com', 'status' => 1],
            ['id' => 2, 'email' => 'mdpranajaya@gmail.com', 'status' => 1],
        ];

        NewsletterSubscribers::insert($subscribersRecords);
    }
}
