<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'CV - Rifki Alfaris',
            'personalInfo' => [
                'name' => 'Rifki Alfaris',
                'title' => '',
                'email' => 'rifki.alfaris@students.uty.ac.id',
                'phone' => '+62 856 4138 9996',
                'location' => 'Yogyakarta, Indonesia',
                'linkedin' => 'linkedin.com/in/rifki-alfaris',
                'github' => 'github.com/rifkialfaris'
            ],
            'about' => [
                'title' => 'Tentang Saya',
                'description' => 'Mahasiswa Sistem Informasi Universitas Teknologi Yogyakarta yang bersemangat dalam pengembangan web dan teknologi informasi. Memiliki pengalaman dalam mengembangkan aplikasi web menggunakan PHP, JavaScript, dan framework modern seperti Laravel dan Vue.js.'
            ],
            'education' => [
                [
                    'degree' => 'S1 Sistem Informasi',
                    'institution' => 'Universitas Teknologi Yogyakarta',
                    'period' => '2023 - Sekarang',
                    'description' => 'IPK: 3.5, Fokus pada pengembangan web, basis data, dan analisis sistem'
                ],
                [
                    'degree' => 'SMA IPA',
                    'institution' => 'SMAN 4 Magelang',
                    'period' => '2020 - 2023',
                    'description' => 'Lulus dengan predikat baik'
                ]
            ],
            'experience' => [
                [
                    'position' => 'Himpunan Mahasiswa Sistem Informasi',
                    'company' => 'Universitas Teknologi Yogyakarta',
                    'period' => '2024 - 2025',
                    'description' => 'Fokus pada pengembangan soft skill melalui berbagai kegiatan akademik dan non-akademik. Bertanggung jawab dalam perencanaan program kerja, koordinasi antar divisi, dan representasi dalam forum universitas.'
                ],
                [
                    'position' => 'Developer Magang',
                    'company' => 'PT. Teknologi Indonesia',
                    'period' => 'Juni 2024 - Agustus 2024',
                    'description' => 'Mengembangkan aplikasi web internal menggunakan Laravel dan Vue.js, berkolaborasi dengan tim agile development.'
                ]
            ],
            'skills' => [
                'technical' => [
                    ['name' => 'PHP & Laravel', 'level' => 80],
                    ['name' => 'JavaScript & Vue.js', 'level' => 80],
                    ['name' => 'HTML/CSS', 'level' => 90],
                    ['name' => 'MySQL', 'level' => 85],
                    ['name' => 'Git', 'level' => 75],
                    ['name' => 'Python', 'level' => 50]
                ],
                'professional' => [
                    ['name' => 'Komunikasi', 'level' => 85],
                    ['name' => 'Kerja Tim', 'level' => 90],
                    ['name' => 'Problem Solving', 'level' => 85],
                    ['name' => 'Manajemen Waktu', 'level' => 80]
                ]
            ],
            'projects' => [
                [
                    'name' => 'Sistem Pemesanan Tiket Wisata',
                    'description' => 'Aplikasi web untuk pemesanan tiket wisata kolam air hangat dengan fitur pemilihan jadwal dan pembayaran online',
                    'technologies' => ['Laravel', 'MySQL', 'Bootstrap', 'JavaScript'],
                    'link' => '#'
                ],
                [
                    'name' => 'Sistem Transaksi Cuci Kendaraan',
                    'description' => 'Sistem informasi untuk manajemen transaksi cuci motor dan mobil dengan laporan keuangan otomatis',
                    'technologies' => ['PHP', 'MySQL', 'JavaScript', 'Bootstrap'],
                    'link' => '#'
                ],
                [
                    'name' => 'Aplikasi Manajemen Tugas Kuliah',
                    'description' => 'Tools untuk mengorganisir jadwal kuliah dan tugas dengan notifikasi dan sistem prioritas',
                    'technologies' => ['JavaScript', 'Local Storage', 'Bootstrap', 'HTML/CSS'],
                    'link' => '#'
                ]
            ],
            'certifications' => [
                [
                    'name' => 'Laravel Certified Developer',
                    'issuer' => 'Laravel Official Certification',
                    'year' => '2024'
                ],
                [
                    'name' => 'Frontend Web Development',
                    'issuer' => 'Dicoding Indonesia',
                    'year' => '2023'
                ],
                [
                    'name' => 'Database Management',
                    'issuer' => 'Coursera',
                    'year' => '2023'
                ]
            ]
        ];

        return view('cv.index', $data);
    }

    public function download()
    {
        $data = $this->index()->getData();
        return view('cv.download', $data);
    }

    public function print()
    {
        $data = $this->index()->getData();
        return view('cv.print', $data);
    }
}