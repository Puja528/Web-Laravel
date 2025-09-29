<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pageData = [
            'title' => 'Toko Jus Segar - Home',
            'about' => [
                'description' => 'Menyajikan jus segar dan sehat sejak 2010 untuk Anda dan keluarga.',
                'story' => [
                    [
                        'title' => 'Awal Mula',
                        'content' => 'Kami mulai dari kecintaan akan jus segar dan ingin berbagi manfaatnya.'
                    ],
                    [
                        'title' => 'Bahan Berkualitas',
                        'content' => 'Hanya menggunakan buah segar dan bahan-bahan dari petani lokal terpercaya.'
                    ]
                ],
                'innovation' => [
                    'title' => 'Inovasi Rasa',
                    'content' => 'Menciptakan kombinasi jus yang lezat dan menyegarkan setiap hari.'
                ],
                'values' => [
                    'title' => 'Nilai Kami',
                    'content' => 'Kami berkomitmen untuk memberikan yang terbaik untuk kesehatan Anda dengan menggunakan bahan-bahan alami tanpa pengawet.'
                ]
            ],
            'juices' => [
                [
                    'name' => 'Jus Jeruk Segar',
                    'description' => 'Dibuat dari jeruk pilihan yang segar dan manis.',
                    'price' => 15000
                ],
                [
                    'name' => 'Jus Stroberi',
                    'description' => 'Perpaduan stroberi segar dan yoghurt.',
                    'price' => 18000
                ],
                [
                    'name' => 'Jus Mangga',
                    'description' => 'Mangga manis pilihan dengan tekstur yang lembut.',
                    'price' => 16000
                ],
                [
                    'name' => 'Jus Alpukat',
                    'description' => 'Alpukat creamy dengan susu dan gula aren.',
                    'price' => 17000
                ]
            ]
        ];

        return view('halaman-jus-home', $pageData);
    }
}
