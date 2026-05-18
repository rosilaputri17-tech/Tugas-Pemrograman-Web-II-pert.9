<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ],

            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 12
            ],

            [
                'id' => 4,
                'nama' => 'Desain',
                'deskripsi' => 'Buku desain grafis',
                'jumlah_buku' => 10
            ],

            [
                'id' => 5,
                'nama' => 'Cyber Security',
                'deskripsi' => 'Buku keamanan sistem',
                'jumlah_buku' => 8
            ]

        ];

        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori = [
            'id' => $id,
            'nama' => 'Programming',
            'deskripsi' => 'Buku pemrograman dan coding',
            'jumlah_buku' => 3
        ];

        $buku_list = [

            [
                'judul' => 'Belajar Laravel',
                'pengarang' => 'Budi Raharjo',
                'tahun' => 2023
            ],

            [
                'judul' => 'PHP Dasar',
                'pengarang' => 'Andi Wijaya',
                'tahun' => 2022
            ],

            [
                'judul' => 'Mastering Bootstrap',
                'pengarang' => 'Dewi Lestari',
                'tahun' => 2021
            ]

        ];

        return view('kategori.show',
            compact('kategori', 'buku_list'));
    }

    public function search($keyword)
    {
        $kategori_list = [

            [
                'id' => 1,
                'nama' => 'Programming',
                'deskripsi' => 'Buku pemrograman dan coding',
                'jumlah_buku' => 25
            ],

            [
                'id' => 2,
                'nama' => 'Database',
                'deskripsi' => 'Buku database dan SQL',
                'jumlah_buku' => 18
            ],

            [
                'id' => 3,
                'nama' => 'Jaringan',
                'deskripsi' => 'Buku jaringan komputer',
                'jumlah_buku' => 12
            ]

        ];

        $hasil = array_filter($kategori_list, function ($kategori) use ($keyword) {

            return stripos($kategori['nama'], $keyword) !== false;

        });

        return view('kategori.search',
            compact('hasil', 'keyword'));
    }
}