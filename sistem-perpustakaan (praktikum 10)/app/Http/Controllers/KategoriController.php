<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_list = [
            ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding', 'jumlah_buku' => 25],
            ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku basis data dan SQL', 'jumlah_buku' => 15],
            ['id' => 3, 'nama' => 'Networking', 'deskripsi' => 'Buku jaringan komputer', 'jumlah_buku' => 10],
            ['id' => 4, 'nama' => 'Design', 'deskripsi' => 'Buku desain grafis dan UI/UX', 'jumlah_buku' => 20],
            ['id' => 5, 'nama' => 'Security', 'deskripsi' => 'Buku keamanan sistem dan jaringan', 'jumlah_buku' => 12],
        ];
        return view('kategori.index', compact('kategori_list'));
    }

    public function show($id)
    {
        $kategori_list = [
            1 => ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding', 'jumlah_buku' => 25],
            2 => ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku basis data dan SQL', 'jumlah_buku' => 15],
            3 => ['id' => 3, 'nama' => 'Networking', 'deskripsi' => 'Buku jaringan komputer', 'jumlah_buku' => 10],
            4 => ['id' => 4, 'nama' => 'Design', 'deskripsi' => 'Buku desain grafis dan UI/UX', 'jumlah_buku' => 20],
            5 => ['id' => 5, 'nama' => 'Security', 'deskripsi' => 'Buku keamanan sistem dan jaringan', 'jumlah_buku' => 12],
        ];

        if (!isset($kategori_list[$id])) abort(404);
        $kategori = $kategori_list[$id];

        $buku_list = [
            1 => [
                ['judul' => 'Laravel Framework', 'pengarang' => 'Andi Nugroho', 'tahun' => 2024],
                ['judul' => 'Pemrograman PHP', 'pengarang' => 'Budi Raharjo', 'tahun' => 2023],
                ['judul' => 'Python for Beginner', 'pengarang' => 'Siti Aminah', 'tahun' => 2023],
            ],
            2 => [
                ['judul' => 'MySQL Database', 'pengarang' => 'Dedi Santoso', 'tahun' => 2023],
                ['judul' => 'PostgreSQL Advanced', 'pengarang' => 'Rina Wijaya', 'tahun' => 2024],
            ],
            3 => [
                ['judul' => 'Cisco Networking', 'pengarang' => 'Ahmad Fauzi', 'tahun' => 2023],
                ['judul' => 'TCP/IP Protocol', 'pengarang' => 'Budi Santoso', 'tahun' => 2022],
            ],
            4 => [
                ['judul' => 'UI/UX Design', 'pengarang' => 'Dewi Lestari', 'tahun' => 2024],
                ['judul' => 'Figma Masterclass', 'pengarang' => 'Rizky Pratama', 'tahun' => 2023],
            ],
            5 => [
                ['judul' => 'Ethical Hacking', 'pengarang' => 'Kevin Mitnick', 'tahun' => 2023],
                ['judul' => 'Cybersecurity Basics', 'pengarang' => 'Bruce Schneier', 'tahun' => 2024],
            ],
        ];

        $buku_in_kategori = $buku_list[$id] ?? [];
        return view('kategori.show', compact('kategori', 'buku_in_kategori'));
    }

    public function search($keyword)
    {
        $kategori_list = [
            ['id' => 1, 'nama' => 'Programming', 'deskripsi' => 'Buku pemrograman dan coding', 'jumlah_buku' => 25],
            ['id' => 2, 'nama' => 'Database', 'deskripsi' => 'Buku basis data dan SQL', 'jumlah_buku' => 15],
            ['id' => 3, 'nama' => 'Networking', 'deskripsi' => 'Buku jaringan komputer', 'jumlah_buku' => 10],
            ['id' => 4, 'nama' => 'Design', 'deskripsi' => 'Buku desain grafis dan UI/UX', 'jumlah_buku' => 20],
            ['id' => 5, 'nama' => 'Security', 'deskripsi' => 'Buku keamanan sistem dan jaringan', 'jumlah_buku' => 12],
        ];

        $hasil = array_filter($kategori_list, function ($item) use ($keyword) {
            return stripos($item['nama'], $keyword) !== false ||
                   stripos($item['deskripsi'], $keyword) !== false;
        });

        return view('kategori.search', compact('hasil', 'keyword'));
    }
}