<?php

namespace Database\Seeders;

use App\Models\Certification;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Organization;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Skills
        Skill::query()->delete();

        $skills = [
            // Kecerdasan Buatan (AI)
            ['name' => 'Google Gemini API', 'category' => 'Kecerdasan Buatan (AI)', 'sort_order' => 1],
            ['name' => 'RAG Architecture', 'category' => 'Kecerdasan Buatan (AI)', 'sort_order' => 2],
            ['name' => 'ChromaDB', 'category' => 'Kecerdasan Buatan (AI)', 'sort_order' => 3],
            ['name' => 'Streamlit', 'category' => 'Kecerdasan Buatan (AI)', 'sort_order' => 4],
            ['name' => 'Prompt Engineering', 'category' => 'Kecerdasan Buatan (AI)', 'sort_order' => 5],

            // Pengembangan Web & Mobile
            ['name' => 'Laravel', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 6],
            ['name' => 'PHP', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 7],
            ['name' => 'Tailwind CSS', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 8],
            ['name' => 'JavaScript', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 9],
            ['name' => 'HTML5 / CSS3', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 10],
            ['name' => 'RESTful API', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 11],
            ['name' => 'MySQL', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 12],
            ['name' => 'Android Studio', 'category' => 'Pengembangan Web & Mobile', 'sort_order' => 13],

            // Bahasa Pemrograman
            ['name' => 'Python', 'category' => 'Bahasa Pemrograman', 'sort_order' => 14],
            ['name' => 'C', 'category' => 'Bahasa Pemrograman', 'sort_order' => 15],
            ['name' => 'C#', 'category' => 'Bahasa Pemrograman', 'sort_order' => 16],
            ['name' => 'PHP', 'category' => 'Bahasa Pemrograman', 'sort_order' => 17],
            ['name' => 'JavaScript', 'category' => 'Bahasa Pemrograman', 'sort_order' => 18],

            // Jaringan & IoT
            ['name' => 'Jaringan Komputer', 'category' => 'Jaringan & IoT', 'sort_order' => 19],
            ['name' => 'TCP/IP', 'category' => 'Jaringan & IoT', 'sort_order' => 20],
            ['name' => 'MikroTik RouterOS', 'category' => 'Jaringan & IoT', 'sort_order' => 21],
            ['name' => 'Linux OS', 'category' => 'Jaringan & IoT', 'sort_order' => 22],
            ['name' => 'VirtualBox', 'category' => 'Jaringan & IoT', 'sort_order' => 23],
            ['name' => 'Internet of Things (IoT)', 'category' => 'Jaringan & IoT', 'sort_order' => 24],

            // Perangkat Lunak & Alat
            ['name' => 'VS Code', 'category' => 'Alat & Workflow', 'sort_order' => 25],
            ['name' => 'Visual Studio', 'category' => 'Alat & Workflow', 'sort_order' => 26],
            ['name' => 'GitHub', 'category' => 'Alat & Workflow', 'sort_order' => 27],
            ['name' => 'Git', 'category' => 'Alat & Workflow', 'sort_order' => 28],
            ['name' => 'Unity', 'category' => 'Alat & Workflow', 'sort_order' => 29],
            ['name' => 'Postman', 'category' => 'Alat & Workflow', 'sort_order' => 30],
            ['name' => 'Figma', 'category' => 'Alat & Workflow', 'sort_order' => 31],

            // Kemampuan Non-Teknis (Soft Skills)
            ['name' => 'Problem Solving', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 32],
            ['name' => 'Berpikir Kritis', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 33],
            ['name' => 'Kepemimpinan', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 34],
            ['name' => 'Kerja Sama Tim', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 35],
            ['name' => 'Komunikasi Efektif', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 36],
            ['name' => 'Manajemen Waktu', 'category' => 'Keahlian Non-Teknis', 'sort_order' => 37],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // 2. Seed Projects
        Project::query()->delete();

        Project::create([
            'title' => 'ATLAS MBG',
            'subtitle' => 'Aplikasi Tracking dan Layanan Asupan Siswa',
            'description' => 'Aplikasi berbasis web untuk mendukung pengelolaan dan pelacakan Program Makan Bergizi Gratis (MBG). Merancang antarmuka pengguna yang responsif agar aplikasi mudah digunakan oleh siswa dan pihak pengelola.',
            'role' => 'Ketua Tim Pengembang',
            'technologies' => ['Laravel', 'MySQL', 'Tailwind CSS', 'PHP', 'REST API'],
            'features' => [
                'Pelacakan & distribusi asupan makanan siswa',
                'Manajemen kontainer & logistik makanan',
                'Dashboard analitik & rekapitulasi data',
                'Antarmuka responsif ramah pengguna',
                'Sistem otentikasi & manajemen hak akses'
            ],
            'group_name' => 'Ketua Tim',
            'demo_url' => 'https://github.com/zaffourth-dev',
            'github_url' => 'https://github.com/zaffourth-dev',
            'image_path' => null,
            'sort_order' => 1,
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'LERES-AI',
            'subtitle' => 'Layanan E-Government Rekomendasi & Edukasi Smart - AI',
            'description' => 'Chatbot cerdas berbasis Artificial Intelligence sebagai layanan informasi publik yang cepat dan akurat. Mengimplementasikan teknologi Retrieval-Augmented Generation (RAG), Google Gemini API, dan ChromaDB.',
            'role' => 'Anggota Tim Pengembang',
            'technologies' => ['Python', 'Google Gemini API', 'RAG', 'ChromaDB', 'Streamlit'],
            'features' => [
                'Chatbot AI interaktif layanan publik',
                'Implementasi arsitektur RAG (Retrieval-Augmented Generation)',
                'Integrasi Google Gemini API',
                'Basis data vektor ChromaDB berkecepatan tinggi',
                'Antarmuka pengguna responsif berbasis Streamlit'
            ],
            'group_name' => 'AI Developer',
            'demo_url' => 'https://github.com/zaffourth-dev',
            'github_url' => 'https://github.com/zaffourth-dev',
            'image_path' => null,
            'sort_order' => 2,
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'Journey to Logic',
            'subtitle' => 'Game Edukasi Logika & Pemrograman',
            'description' => 'Game edukasi interaktif berbasis Unity untuk melatih kemampuan logika dan pemecahan masalah (problem solving). Merancang alur teka-teki logika gerbang boolean dan mekanisme kontrol permainan yang dinamis.',
            'role' => 'Ketua Tim Pengembang',
            'technologies' => ['Unity', 'C#', 'Game Logic', 'UI/UX Design'],
            'group_name' => 'Ketua Tim',
            'features' => [
                'Simulasi gerbang logika (OR, XOR, NOT)',
                'Mekanika percabangan & perulangan edukatif',
                'Sistem kontrol pergerakan karakter & kamera dinamis',
                'Tantangan teka-teki logika berjenjang'
            ],
            'demo_url' => 'https://github.com/zaffourth-dev',
            'github_url' => 'https://github.com/zaffourth-dev',
            'image_path' => null,
            'sort_order' => 3,
            'is_featured' => true,
        ]);

        // 3. Seed Experiences
        Experience::query()->delete();

        Experience::create([
            'title' => 'Pengembang Web | ATLAS MBG',
            'role' => 'Ketua Tim Pengembang',
            'period' => '2026',
            'description' => 'Memimpin tim pengembang dalam perancangan dan implementasi aplikasi web tracking Program Makan Bergizi Gratis (MBG). Bertanggung jawab atas arsitektur database MySQL, logika backend Laravel, serta desain antarmuka pengguna yang responsif.',
            'sort_order' => 1,
        ]);

        Experience::create([
            'title' => 'Pengembang Game | Journey to Logic',
            'role' => 'Ketua Tim Pengembang',
            'period' => '2026',
            'description' => 'Memimpin pengembangan game edukasi berbasis Unity untuk mengasah kemampuan berpikir logis dan pemecahan masalah. Merancang alur mekanik puzzle, implementasi script logika C#, dan interaksi visual game.',
            'sort_order' => 2,
        ]);

        Experience::create([
            'title' => 'Pengembang AI | LERES-AI',
            'role' => 'Anggota Tim Pengembang',
            'period' => '2025 — 2026',
            'description' => 'Mengembangkan chatbot kecerdasan buatan untuk layanan informasi publik berbasis e-government. Mengintegrasikan teknologi Retrieval-Augmented Generation (RAG), Google Gemini API, dan ChromaDB untuk memberikan respon akurat.',
            'sort_order' => 3,
        ]);

        // 4. Seed Organizations (FOSKAP & OSIS BATHARA - OSIS SMP dihapus sesuai permintaan)
        Organization::query()->delete();

        Organization::create([
            'name' => 'Forum OSIS Kabupaten Pati (FOSKAP)',
            'institution' => 'Forum OSIS Kabupaten Pati',
            'period' => '2024 — 2026',
            'division' => 'Divisi Ekonomi Kreatif dan Kewirausahaan',
            'description' => 'Mengelola program kerja FOSKALA (FOSKAP Skala) melalui kegiatan kewirausahaan kreatif untuk mendukung pendanaan mandiri dan kemajuan organisasi pelajar se-Kabupaten Pati.',
            'sort_order' => 1,
        ]);

        Organization::create([
            'name' => 'OSIS BATHARA SMK Tunas Harapan Pati',
            'institution' => 'SMK Tunas Harapan Pati',
            'period' => '2024 — 2026',
            'division' => 'Bendahara 1',
            'description' => 'Mengelola tata kelola administrasi keuangan organisasi, menyusun laporan pembukuan kas berkala secara transparan, serta menyusun Lembar Pertanggungjawaban (LPJ) keuangan untuk setiap kegiatan sekolah.',
            'sort_order' => 2,
        ]);

        // 5. Seed Education
        Education::query()->delete();

        Education::create([
            'institution' => 'SMK Tunas Harapan Pati',
            'major' => 'Teknik Jaringan Komputer dan Telekomunikasi (TJKT)',
            'period' => '2024 — 2027',
            'location' => 'Pati, Jawa Tengah, Indonesia',
            'focus_areas' => [
                'Kecerdasan Buatan (AI)',
                'Pengembangan Web & Mobile',
                'Internet of Things (IoT)',
                'Jaringan Komputer & Telekomunikasi',
                'Pemrograman Python, C, C# & PHP',
                'Nilai Akhir: 88,79'
            ],
            'sort_order' => 1,
        ]);

        // 6. Seed Certifications
        Certification::query()->delete();

        $certifications = [
            [
                'title' => 'Pemrograman C (Memulai Pemrograman dengan C)',
                'issuer' => 'Dicoding Indonesia',
                'credential_url' => 'https://www.dicoding.com',
                'sort_order' => 1,
            ],
            [
                'title' => 'Software Engineering (Rekayasa Perangkat Lunak)',
                'issuer' => 'RevoU Tech Academy',
                'credential_url' => 'https://www.revou.co',
                'sort_order' => 2,
            ],
            [
                'title' => 'Pemrograman Python (Dasar & Penerapan Python)',
                'issuer' => 'BISA AI Academy',
                'credential_url' => 'https://bisa.ai',
                'sort_order' => 3,
            ],
        ];

        foreach ($certifications as $cert) {
            Certification::create($cert);
        }
    }
}
