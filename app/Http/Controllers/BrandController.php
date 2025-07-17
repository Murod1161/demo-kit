<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $logos = [
            ['file' => 'jacmotors.jpg',        'alt' => 'JAC Motors'],
            ['file' => 'jysk.jpg',             'alt' => 'Jysk'],
            ['file' => 'honai-man.png',        'alt' => 'Хонаи ман'],
            ['file' => 'arvis.jpg',            'alt' => 'Arvis'],
            ['file' => 'belinda.png',          'alt' => 'Belinda'],
            ['file' => 'byd.png',              'alt' => 'BYD'],
            ['file' => 'chery.png',            'alt' => 'CHERY'],
            ['file' => 'evar.png',             'alt' => 'Ёвар'],
            ['file' => 'koinotauto.png',       'alt' => 'Коинот Авто', 'bg' => 'bg-white'],
            ['file' => 'marmari.jpg',          'alt' => 'Мармари'],
            ['file' => 'salomat.png',          'alt' => 'Саломат', 'bg' => 'bg-white'],
            ['file' => 'siyoma.jpg',           'alt' => 'Сиёма'],
            ['file' => 'tajiksgem.jpg',        'alt' => 'Таджик СГЭМ'],
            ['file' => 'tgem.png',             'alt' => 'ТГЭМ'],
            ['file' => 'vegapharm.png',        'alt' => 'Vegapharm'],
            ['file' => 'avesto.jpg',           'alt' => 'Авесто'],
            ['file' => 'auto-tajikistan.png',  'alt' => 'Auto Tajikistan'],
            ['file' => 'city-service.png',     'alt' => 'City Service'],
            ['file' => 'dusti-farma.png',      'alt' => 'Дусти Фарма'],
            ['file' => 'barki-tojik.jpg',      'alt' => 'Барки Точик'],
        ];

        return view('pages.home', compact('logos'));
    }
}
