<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Tutor;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tutors = [
            [
                'name' => 'Dimas Ramadhan',
                'email' => 'dimas.ramadhan@example.com',
                'occupation' => 'Senior Data Analyst',
                'description' => 'Saya adalah seorang analis data dengan pengalaman lebih dari 10 tahun di berbagai industri, mulai dari perbankan hingga teknologi. Saya senang mengolah data kompleks menjadi informasi yang bisa digunakan untuk membuat keputusan yang tepat. Dalam mengajar, saya selalu berusaha menyampaikan konsep-konsep analitik dengan cara yang praktis dan mudah dipahami, agar peserta bisa langsung menerapkannya di dunia kerja.',
                'image' => 'profile_picture/Tutor1.jpg',
            ],
            [
                'name' => 'Ayu Lestari',
                'email' => 'ayu.lestari@example.com',
                'occupation' => 'UX Designer & Researcher',
                'description' => 'Saya adalah seorang desainer UX yang percaya bahwa desain terbaik adalah yang lahir dari empati dan pemahaman mendalam terhadap pengguna. Dengan pengalaman lebih dari 7 tahun, saya telah merancang berbagai produk digital yang digunakan oleh ribuan orang. Saya senang berbagi ilmu tentang bagaimana membuat desain yang tidak hanya cantik, tapi juga fungsional dan inklusif.',
                'image' => 'profile_picture/Tutor2.jpg',
            ],
            [
                'name' => 'Bima Santosa',
                'email' => 'bima.santosa@example.com',
                'occupation' => 'Full-Stack Web Developer',
                'description' => 'Saya seorang full-stack developer yang menyukai tantangan dalam membangun aplikasi web dari awal hingga selesai. Dengan latar belakang teknis yang kuat dan pengalaman di banyak proyek, saya percaya bahwa pengembangan web harus efisien, terstruktur, dan solutif. Saat mengajar, saya fokus pada praktik nyata agar peserta dapat langsung memahami dan menerapkan konsep yang diajarkan.',
                'image' => 'profile_picture/Tutor3.jpg',
            ],
            [
                'name' => 'Intan Maheswari',
                'email' => 'intan.maheswari@example.com',
                'occupation' => 'Digital Marketing Strategist',
                'description' => 'Sebagai digital marketer, saya senang membantu brand untuk tumbuh melalui strategi yang tepat dan kreatif. Saya sudah bekerja dengan berbagai klien dari skala UMKM hingga perusahaan besar, dan saya percaya bahwa pemasaran digital harus selalu berorientasi pada hasil. Saya suka membagikan pengalaman dan pendekatan yang saya gunakan agar peserta bisa langsung mengaplikasikannya ke bisnis mereka sendiri.',
                'image' => 'profile_picture/Tutor4.jpg',
            ],
        ];

        foreach ($tutors as $data) {
            $tutor = Tutor::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'occupation' => $data['occupation'],
                'password' => Hash::make('password'),
                'description' => $data['description'],
                'image' => $data['image'],
            ]);
        }
    }
}
