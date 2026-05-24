<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_kategori' => 'Programming',
                'deskripsi'     => 'Buku tentang pemrograman',
                'icon'          => 'code-slash',
                'warna'         => 'primary',
            ],
            [
                'nama_kategori' => 'Database',
                'deskripsi'     => 'Buku tentang database',
                'icon'          => 'database',
                'warna'         => 'success',
            ],
            [
                'nama_kategori' => 'Web Design',
                'deskripsi'     => 'Buku tentang desain web',
                'icon'          => 'palette',
                'warna'         => 'info',
            ],
            [
                'nama_kategori' => 'Networking',
                'deskripsi'     => 'Buku tentang jaringan komputer',
                'icon'          => 'wifi',
                'warna'         => 'warning',
            ],
            [
                'nama_kategori' => 'Data Science',
                'deskripsi'     => 'Buku tentang ilmu data',
                'icon'          => 'graph-up',
                'warna'         => 'danger',
            ],
        ];

        foreach ($data as $item) {
            Kategori::create($item);
        }
    }
}