<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurCommitment;
use Illuminate\Support\Facades\DB;

class CommitmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('our_commitment')->insert([
            [
                'image' => 'images/SVG/quality.svg',
                'title' => 'High-Quality Standards',
                'body' => 'We take pride in providing meticulous and thorough cleaning services. Our team is trained to meet the highest standards of cleanliness and hygiene, ensuring every corner of your office is spotless.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/SVG/personalization.svg',
                'title' => 'Personalized Service',
                'body' => 'We tailor our cleaning services to fit the specific needs of your office. Whether you require daily maintenance or periodic deep cleaning, we customize our approach to meet your expectations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'images/SVG/reliability.svg',
                'title' => 'Attention to Detail',
                'body' => 'We believe in the power of details. Our staff is dedicated to delivering a detailed and comprehensive clean, addressing every surface and area with care and precision.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
