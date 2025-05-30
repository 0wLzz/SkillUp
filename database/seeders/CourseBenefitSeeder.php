<?php

namespace Database\Seeders;

use App\Models\CourseBenefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = [
            // course_id 1
            [
                'Prinsip-prinsip inti kepemimpinan yang efektif di berbagai lingkungan',
                'Teknik untuk menginspirasi, memengaruhi, dan memotivasi tim',
                'Cara mengelola konflik dan membuat keputusan yang tegas serta etis',
                'Strategi untuk mengembangkan kecerdasan emosional dan ketangguhan diri',
                'Membangun gaya dan visi kepemimpinan yang personal',
            ],
            // course_id 2
            [
                'Teknik analisis masalah secara sistematis dan terstruktur',
                'Strategi kreatif untuk menemukan solusi inovatif',
                'Cara mengidentifikasi akar permasalahan dengan metode seperti 5 Whys dan Fishbone Diagram',
                'Pendekatan pengambilan keputusan berbasis data dan logika',
                'Meningkatkan kemampuan berpikir kritis dan adaptif dalam menghadapi tantangan kompleks',
            ],
            // course_id 3
            [
                'Teknik komunikasi verbal dan non-verbal yang efektif',
                'Strategi membangun kepercayaan dan koneksi dengan audiens',
                'Cara menyampaikan ide dengan percaya diri dan meyakinkan',
                'Keterampilan mendengarkan aktif dan memahami lawan bicara',
                'Tips menghadapi percakapan sulit dan memberikan feedback konstruktif',
            ],
            // course_id 4
            [
                'Teknik manajemen waktu yang terbukti efektif untuk meningkatkan produktivitas',
                'Cara menyusun prioritas dan menetapkan tujuan yang jelas',
                'Strategi menghindari prokrastinasi dan gangguan',
                'Penggunaan tools dan metode seperti Pomodoro, Eisenhower Matrix, dan time blocking',
                'Menciptakan rutinitas harian yang seimbang dan berkelanjutan',
            ],
            // course_id 5
            [
                'Memahami dan mengelola emosi diri sendiri dan orang lain',
                'Meningkatkan empati dalam interaksi sosial dan profesional',
                'Membangun hubungan interpersonal yang sehat dan efektif',
                'Mengelola stres dan konflik secara bijak',
                'Meningkatkan kesadaran diri untuk pertumbuhan pribadi',
            ],
            // course_id 6
            [
                'Berpikir analitis dalam menghadapi masalah kompleks',
                'Menghindari bias kognitif dalam pengambilan keputusan',
                'Mengevaluasi informasi secara objektif dan logis',
                'Meningkatkan ketajaman dalam menyaring ide dan argumen',
                'Menerapkan pemikiran kritis dalam situasi sehari-hari',
            ],
            // course_id 7
            [
                'Menyesuaikan diri dengan cepat terhadap perubahan dan tantangan',
                'Membangun mindset pertumbuhan (growth mindset)',
                'Meningkatkan fleksibilitas dalam bekerja di lingkungan yang dinamis',
                'Mengelola ketidakpastian dengan sikap positif',
                'Mengembangkan resiliensi dan ketahanan mental',
            ],
            // course_id 8
            [
                'Teknik mengenali dan memahami konflik sejak dini',
                'Membangun komunikasi yang solutif dan non-konfrontatif',
                'Menjadi penengah yang efektif dalam tim atau organisasi',
                'Mengelola emosi saat konflik terjadi',
                'Menciptakan solusi win-win dalam situasi sulit',
            ],
            // course_id 9
            [
                'Mengembangkan pola pikir terbuka terhadap tantangan dan kesalahan',
                'Menjadikan kegagalan sebagai bagian dari proses belajar',
                'Meningkatkan motivasi belajar jangka panjang',
                'Mengidentifikasi dan menumbuhkan potensi diri',
                'Membangun kebiasaan belajar mandiri dan terus-menerus',
            ],
            // course_id 10
            [
                'Meningkatkan efektivitas dalam bekerja tim',
                'Menyelaraskan tujuan individu dan tim',
                'Mengembangkan komunikasi terbuka dan kepercayaan antaranggota',
                'Mengenali peran dan dinamika dalam kelompok',
                'Meningkatkan hasil kerja melalui sinergi',
            ],
            // course_id 11
            [
                'Membangun dan memelihara relasi profesional dengan percaya diri',
                'Menyampaikan personal branding yang kuat',
                'Etika berjejaring di dunia kerja dan media sosial',
                'Menciptakan peluang karier melalui relasi yang strategis',
                'Meningkatkan visibilitas dalam komunitas profesional',
            ],
            // course_id 12
            [
                'Meningkatkan kemampuan memengaruhi secara etis dan efektif',
                'Merancang pesan yang meyakinkan dan jelas',
                'Menggunakan storytelling dalam menyampaikan ide',
                'Membangun kredibilitas dan kepercayaan audiens',
                'Menghadapi keberatan dan menanggapi dengan tepat',
            ],
        ];

        foreach ($benefits as $index => $courseBenefits) {
            $courseId = $index + 1;

            foreach ($courseBenefits as $benefit) {
                CourseBenefit::create([
                    'course_id' => $courseId,
                    'benefit' => $benefit,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
