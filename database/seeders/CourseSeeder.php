<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'thumbnail' => 'thumbnails/Course1.jpg',
                'title' => 'Mastering Leadership',
                'subtitle' => 'Menjadi pemimpin yang menginspirasi dan tangguh',
                'description' => 'Menjadi pemimpin yang hebat bukan hanya soal memimpin, tetapi bagaimana menginspirasi orang lain untuk mengikuti. Dalam kursus ini, Anda akan mempelajari prinsip-prinsip dasar kepemimpinan, dari membangun kepercayaan hingga memimpin dalam situasi penuh tekanan. Melalui studi kasus, simulasi nyata, dan pendekatan reflektif, peserta akan dibekali dengan keterampilan interpersonal, strategi komunikasi, serta teknik pengambilan keputusan yang kuat. Anda juga akan memahami pentingnya kecerdasan emosional dalam memimpin tim serta cara membentuk gaya kepemimpinan yang otentik dan berkelanjutan.'
            ],
            [
                'thumbnail' => 'thumbnails/Course2.png',
                'title' => 'Think Smart: Strategic Problem Solving',
                'subtitle' => 'Teknik kreatif dan terstruktur untuk menyelesaikan masalah',
                'description' => 'Kemampuan memecahkan masalah adalah keterampilan penting di dunia kerja modern. Dalam kursus ini, Anda akan mempelajari pendekatan-pendekatan terstruktur dan kreatif untuk menyelesaikan berbagai jenis permasalahan, baik secara individu maupun tim. Peserta akan dibimbing melalui berbagai metode seperti pemetaan masalah, brainstorming, analisis akar penyebab, hingga pengambilan keputusan berbasis logika dan data. Kursus ini dirancang untuk membantu Anda menjadi pemecah masalah yang efektif, berpikir kritis di bawah tekanan, serta menghasilkan solusi yang berdampak nyata.'
            ],
            [
                'thumbnail' => 'thumbnails/Course3.png',
                'title' => 'Speak with Impact: Communication Mastery',
                'subtitle' => 'Menguasai komunikasi efektif dalam berbagai situasi',
                'description' => 'Komunikasi yang kuat adalah kunci keberhasilan dalam karier dan hubungan sosial. Kursus ini dirancang untuk membantu Anda meningkatkan kemampuan berbicara di depan umum, berdiskusi secara efektif, serta menyampaikan pesan dengan jelas dan berpengaruh. Anda akan belajar berbagai teknik komunikasi interpersonal, mendengarkan aktif, membaca bahasa tubuh, hingga menangani percakapan sulit. Dengan latihan langsung dan simulasi praktis, Anda akan mampu membangun kepercayaan, meningkatkan kepercayaan diri, dan menjadi komunikator yang lebih persuasif dan profesional.'
            ],
            [
                'thumbnail' => 'thumbnails/Course4.png',
                'title' => 'Time Mastery: Take Control of Your Day',
                'subtitle' => 'Strategi manajemen waktu yang praktis dan efektif',
                'description' => 'Waktu adalah aset yang paling berharga, dan cara Anda mengelolanya menentukan keberhasilan pribadi maupun profesional. Kursus ini akan membekali Anda dengan keterampilan untuk mengelola waktu secara efektif, menetapkan prioritas, serta menciptakan rutinitas yang membantu Anda mencapai lebih banyak hal dengan tekanan yang lebih sedikit. Anda akan mempelajari berbagai teknik populer seperti time blocking, Pomodoro Technique, serta cara menggunakan kalender dan to-do list secara optimal. Dengan pendekatan yang praktis dan aplikatif, Anda akan mampu mengendalikan hari Anda, bukan sebaliknya.'
            ],
            [
                'thumbnail' => 'thumbnails/Course5.png',
                'title' => 'Emotional Intelligence Essentials',
                'subtitle' => 'Meningkatkan kesadaran emosional dan empati',
                'description' => 'Emotional Intelligence (EQ) memainkan peran penting dalam kesuksesan karier dan hubungan sosial. Kursus ini membantu Anda mengenali, memahami, dan mengelola emosi dengan lebih baik. Anda akan belajar cara berempati, merespons konflik secara positif, serta membina hubungan yang sehat dan bermakna. EQ yang tinggi akan membuat Anda lebih tangguh, responsif, dan kolaboratif dalam berbagai situasi kehidupan.'
            ],
            [
                'thumbnail' => 'thumbnails/Course6.jpg',
                'title' => 'Critical Thinking Toolkit',
                'subtitle' => 'Berpikir jernih dan objektif dalam pengambilan keputusan',
                'description' => 'Kemampuan berpikir kritis memungkinkan Anda mengambil keputusan dengan lebih baik di dunia yang penuh informasi dan kompleksitas. Di kursus ini, Anda akan mempelajari teknik berpikir sistematis, menganalisis argumen, serta mengenali bias logika. Anda juga akan dilatih melalui studi kasus untuk mempertajam intuisi intelektual dalam pekerjaan maupun kehidupan pribadi.'
            ],
            [
                'thumbnail' => 'thumbnails/Course7.jpg',
                'title' => 'Adaptability in the Modern Workplace',
                'subtitle' => 'Tetap tangguh dan fleksibel dalam perubahan',
                'description' => 'Dunia kerja saat ini berubah sangat cepat. Kemampuan beradaptasi bukan lagi pilihan, melainkan keharusan. Kursus ini membantu Anda membangun ketahanan diri, menerima perubahan dengan lebih terbuka, dan tetap produktif di tengah ketidakpastian. Anda akan belajar strategi untuk tetap tenang, fleksibel, dan siap menghadapi tantangan baru.'
            ],
            [
                'thumbnail' => 'thumbnails/Course8.png',
                'title' => 'Conflict Resolution Skills',
                'subtitle' => 'Mengelola konflik secara konstruktif dan bijak',
                'description' => 'Konflik adalah hal yang wajar dalam interaksi manusia. Yang penting adalah bagaimana Anda menanganinya. Dalam kursus ini, Anda akan mempelajari cara merespons konflik secara konstruktif, berbicara dengan asertif, dan menjaga hubungan tetap positif. Anda juga akan belajar menjadi jembatan solusi di tengah perbedaan.'
            ],
            [
                'thumbnail' => 'thumbnails/Course9.jpg',
                'title' => 'Growth Mindset for Lifelong Learning',
                'subtitle' => 'Bangun mentalitas belajar seumur hidup',
                'description' => 'Growth mindset adalah fondasi bagi pembelajar sejati. Kursus ini membantu Anda membentuk cara pikir yang mendorong pertumbuhan dan pembelajaran tanpa henti. Anda akan diajak merefleksikan pengalaman pribadi, menetapkan tujuan pengembangan diri, dan membangun mentalitas yang tahan banting di tengah tantangan.'
            ],
            [
                'thumbnail' => 'thumbnails/Course10.jpg',
                'title' => 'Collaboration & Team Dynamics',
                'subtitle' => 'Kerja sama yang produktif dan harmonis dalam tim',
                'description' => 'Kerja tim bukan sekadar bekerja bersama, tapi menciptakan nilai bersama. Kursus ini dirancang untuk membangun kolaborasi yang sehat, memahami perbedaan antar anggota tim, dan mencapai tujuan bersama secara harmonis. Anda akan belajar praktik terbaik dalam komunikasi, distribusi tugas, dan membangun kultur kerja sama yang kuat.'
            ],
            [
                'thumbnail' => 'thumbnails/Course11.png',
                'title' => 'Professional Networking Skills',
                'subtitle' => 'Bangun koneksi yang berarti dan strategis',
                'description' => 'Networking bukan hanya soal "kenal siapa", tetapi tentang membangun koneksi yang bermakna. Kursus ini akan membekali Anda dengan strategi berjejaring yang elegan, sopan, dan efektif—baik secara langsung maupun online. Anda akan belajar bagaimana membangun kepercayaan, berkomunikasi dengan nilai, dan membuka jalan untuk peluang masa depan.'
            ],
            [
                'thumbnail' => 'thumbnails/Course12.jpg',
                'title' => 'Persuasive Communication Strategies',
                'subtitle' => 'Sampaikan ide dan pengaruh dengan percaya diri',
                'description' => 'Meyakinkan orang lain adalah seni dan ilmu. Dalam kursus ini, Anda akan mempelajari teknik komunikasi persuasif yang digunakan dalam presentasi, negosiasi, hingga percakapan sehari-hari. Anda akan belajar membangun argumen, menggunakan emosi secara tepat, dan menyusun pesan yang kuat serta relevan untuk audiens Anda.'
            ]
        ];

        foreach ($courses as $data) {
            Course::create(array_merge($data, [
                'category_id' => rand(1, 3),
                'tutor_id' => fake()->numberBetween(1, 4),
                'price' => fake()->numberBetween(500000, 1500000),
                'rating' => fake()->numberBetween(3, 5),
                'views' => fake()->numberBetween(100, 10000),
                'is_featured' => fake()->boolean(),
            ]));
        }
    }
}
