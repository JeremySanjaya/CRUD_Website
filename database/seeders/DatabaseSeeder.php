<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
use App\Models\Grade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Student::factory(100)->create();

        Grade::factory()->createMany([
            ['name' => '10 PPLG 1'],
            ['name' => '10 PPLG 2'],
            ['name' => '10 ANIMASI 1'],
            ['name' => '10 ANIMASI 2'],
            ['name' => '10 ANIMASI 3'],
            ['name' => '10 ANIMASI 4'],
            ['name' => '10 ANIMASI 5'],
            ['name' => '10 DKV 1'],
            ['name' => '10 DKV 2'],
            ['name' => '10 DKV 3'],
            ['name' => '10 DKV 4'],
            ['name' => '11 PPLG 1'],
            ['name' => '11 PPLG 2'],
            ['name' => '11 ANIMASI 1'],
            ['name' => '11 ANIMASI 2'],
            ['name' => '11 ANIMASI 3'],
            ['name' => '11 ANIMASI 4'],
            ['name' => '11 ANIMASI 5'],
            ['name' => '11 DKV 1'],
            ['name' => '11 DKV 2'],
            ['name' => '11 DKV 3'],
            ['name' => '11 DKV 4'],
            ['name' => '11 DKV 5'],
            ['name' => '12 PPLG 1'],
            ['name' => '12 PPLG 2'],
            ['name' => '12 ANIMASI 1'],
            ['name' => '12 ANIMASI 2'],
            ['name' => '12 ANIMASI 3'],
            ['name' => '12 ANIMASI 4'],
            ['name' => '12 ANIMASI 5'],
            ['name' => '12 DKV 1'],
            ['name' => '12 DKV 2'],
            ['name' => '12 DKV 3'],
            ['name' => '12 DKV 4'],
            ['name' => '12 DKV 5'],
        ]);


        Department::factory()->create([
            'name' => 'Perkembangan Perangkat Lunak dan Gim',
            'desc' => 'Bidang yang berfokus pada pengembangan perangkat lunak dan pembuatan gim. Program ini mempelajari cara merancang, mengembangkan, dan mengelola perangkat lunak, termasuk aplikasi mobile, website, dan gim. Dalam PPLG, siswa mempelajari bahasa pemrograman, logika, dan algoritma untuk membangun aplikasi yang berguna dan inovatif.'
        ]);

        Department::factory()->create([
            'name' => 'Animasi 2D',
            'desc' => 'Teknik pembuatan animasi dalam dua dimensi, yaitu panjang dan lebar. Biasanya, animasi 2D digunakan dalam kartun, video edukasi, dan gim sederhana. Proses ini melibatkan gambar-gambar yang ditampilkan secara berurutan untuk menciptakan ilusi gerakan. Teknologi seperti Adobe Animate atau Toon Boom Harmony sering digunakan untuk membuat animasi 2D.'
        ]);

        Department::factory()->create([
            'name' => 'Animasi 3D',
            'desc' => 'Teknik pembuatan animasi dalam tiga dimensi (panjang, lebar, dan tinggi), yang memberikan kesan mendalam dan lebih realistis. Teknik ini sering digunakan dalam film, gim, dan simulasi karena detail dan visual yang lebih menarik. Prosesnya melibatkan pemodelan, rigging, tekstur, pencahayaan, dan rendering, dengan perangkat lunak populer seperti Blender, Maya, dan 3ds Max.'
        ]);

        Department::factory()->create([
            'name' => 'Desain Komunikasi Visual: Desain Grafika',
            'desc' => 'Berfokus pada penciptaan elemen-elemen visual yang menarik dan komunikatif untuk media cetak, digital, maupun promosi. Ini mencakup dasar-dasar desain seperti tipografi, komposisi, warna, dan ilustrasi untuk menyampaikan pesan visual yang kuat. Desainer grafika membuat poster, logo, brosur, dan berbagai materi visual lainnya yang berfungsi untuk keperluan komunikasi.'
        ]);

        Department::factory()->create([
            'name' => 'Desain Komunikasi Visual: Teknik Grafika',
            'desc' => 'Lebih fokus pada aspek teknis dalam produksi grafis, seperti persiapan untuk percetakan, pemilihan material, hingga teknik pencetakan yang digunakan. Bidang ini mengajarkan cara mengelola elemen desain untuk dicetak dengan kualitas yang baik dan memahami teknik cetak seperti offset, digital, dan sablon.'
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
