<?php

namespace Database\Seeders;

use App\Models\Resources\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [

            [
                'question' => 'aaaaaaaaaa',
                'answer' => 'bbbbbbbbbbbbbbbb'
            ],

            [
                'question' => 'cccccccccccccc',
                'answer' => 'ddddddddddddddd'
            ]
        ];

        foreach ($faqs as $faq){
            Faq::create($faq);
        }
    }
}
