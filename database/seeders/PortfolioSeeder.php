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
        Skill::truncate();

        $skills = [
            // Programming
            ['name' => 'C', 'category' => 'Programming', 'sort_order' => 1],
            ['name' => 'C#', 'category' => 'Programming', 'sort_order' => 2],
            ['name' => 'Python', 'category' => 'Programming', 'sort_order' => 3],
            ['name' => 'JavaScript', 'category' => 'Programming', 'sort_order' => 4],
            ['name' => 'PHP', 'category' => 'Programming', 'sort_order' => 5],
            ['name' => 'Kotlin', 'category' => 'Programming', 'sort_order' => 6],

            // Web Development
            ['name' => 'HTML', 'category' => 'Web Development', 'sort_order' => 7],
            ['name' => 'CSS', 'category' => 'Web Development', 'sort_order' => 8],
            ['name' => 'JavaScript', 'category' => 'Web Development', 'sort_order' => 9],
            ['name' => 'Laravel', 'category' => 'Web Development', 'sort_order' => 10],
            ['name' => 'Vue', 'category' => 'Web Development', 'sort_order' => 11],
            ['name' => 'Vite', 'category' => 'Web Development', 'sort_order' => 12],

            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'sort_order' => 13],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'sort_order' => 14],
            ['name' => 'Supabase', 'category' => 'Database', 'sort_order' => 15],

            // Tools
            ['name' => 'Git', 'category' => 'Tools', 'sort_order' => 16],
            ['name' => 'GitHub', 'category' => 'Tools', 'sort_order' => 17],
            ['name' => 'VS Code', 'category' => 'Tools', 'sort_order' => 18],
            ['name' => 'Figma', 'category' => 'Tools', 'sort_order' => 19],
            ['name' => 'Postman', 'category' => 'Tools', 'sort_order' => 20],

            // Networking
            ['name' => 'Linux', 'category' => 'Networking', 'sort_order' => 21],
            ['name' => 'MikroTik', 'category' => 'Networking', 'sort_order' => 22],
            ['name' => 'VirtualBox', 'category' => 'Networking', 'sort_order' => 23],
            ['name' => 'TCP/IP', 'category' => 'Networking', 'sort_order' => 24],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // 2. Seed Projects
        Project::truncate();

        Project::create([
            'title' => 'ATLAS MBG',
            'subtitle' => 'Tracking & Logistics Management System',
            'description' => 'A web-based system for monitoring student meal distribution, attendance, container management, and logistics.',
            'role' => 'Web Developer',
            'technologies' => ['Laravel', 'Vue', 'REST API', 'PostgreSQL'],
            'features' => [
                'Authentication',
                'Student management',
                'Distribution tracking',
                'Container return tracking',
                'PDF/Excel export',
                'API integration'
            ],
            'group_name' => null,
            'demo_url' => '#',
            'github_url' => 'https://github.com/kamarularifin',
            'image_path' => null,
            'sort_order' => 1,
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'WasteBank2026',
            'subtitle' => 'Digital Waste Management Platform',
            'description' => 'A digital platform designed to support waste-bank activities, waste category information, pickup requests, subscriptions, and recycling education.',
            'role' => 'UI/UX & Frontend Developer',
            'technologies' => ['Web', 'UI/UX', 'Figma', 'API'],
            'features' => [
                'Waste category catalog',
                'Pickup request workflow',
                'Subscription system',
                'Recycling education guide'
            ],
            'group_name' => null,
            'demo_url' => '#',
            'github_url' => 'https://github.com/kamarularifin',
            'image_path' => null,
            'sort_order' => 2,
            'is_featured' => true,
        ]);

        Project::create([
            'title' => 'Journey to Logic',
            'subtitle' => 'Educational Logic Game',
            'description' => 'An educational game designed to introduce programming logic concepts such as OR, XOR, NOT, loops, branching, movement, and camera systems.',
            'role' => 'Game Logic Programmer',
            'technologies' => ['Unity', 'C#'],
            'group_name' => 'Ratsel Meister',
            'features' => [
                'Logic gates (OR, XOR, NOT)',
                'Branching & loop mechanics',
                'Character movement system',
                'Dynamic camera controls'
            ],
            'demo_url' => '#',
            'github_url' => 'https://github.com/kamarularifin',
            'image_path' => null,
            'sort_order' => 3,
            'is_featured' => true,
        ]);

        // 3. Seed Experiences
        Experience::truncate();

        Experience::create([
            'title' => 'Student Developer & Project Collaborator',
            'role' => 'Full-Stack & Logic Development',
            'period' => '2024 — Present',
            'description' => 'Architecting and developing full-stack web platforms and logic-oriented projects. Actively experimenting with modern technologies including Laravel, Vue, REST APIs, and database design to solve practical school and community challenges.',
            'sort_order' => 1,
        ]);

        Experience::create([
            'title' => 'Network & Systems Engineering Practicum',
            'role' => 'TJKT Student Specialist',
            'period' => '2024 — Present',
            'description' => 'Configuring enterprise networking hardware, MikroTik routing topologies, Linux server environments, virtualization with VirtualBox, and TCP/IP packet transmission protocols at SMK Tunas Harapan Pati.',
            'sort_order' => 2,
        ]);

        // 4. Seed Organizations
        Organization::truncate();

        Organization::create([
            'name' => 'FOSKAP',
            'institution' => 'Forum OSIS Kabupaten Pati',
            'period' => '2025–2026',
            'division' => 'Ekonomi Kreatif',
            'description' => 'Engaged in regional student council initiatives fostering youth creativity and strategic collaboration across schools in Pati Regency.',
            'sort_order' => 1,
        ]);

        Organization::create([
            'name' => 'OSIS BATHARA',
            'institution' => 'SMK Tunas Harapan Pati',
            'period' => '2024–2025',
            'division' => 'Pengurus Organisasi Siswa',
            'description' => 'Active student council leadership contributing to institutional programs, student coordination, and event execution.',
            'sort_order' => 2,
        ]);

        Organization::create([
            'name' => 'OSIS SMP Negeri 1 Margoyoso',
            'institution' => 'SMP Negeri 1 Margoyoso',
            'period' => '2021–2023',
            'division' => 'Pengurus OSIS',
            'description' => 'Served in junior high school student council, organizing school assemblies, student welfare activities, and leadership development.',
            'sort_order' => 3,
        ]);

        // 5. Seed Education
        Education::truncate();

        Education::create([
            'institution' => 'SMK Tunas Harapan Pati',
            'major' => 'Computer and Telecommunication Network Engineering (TJKT)',
            'period' => '2024–2027',
            'location' => 'Pati, Central Java, Indonesia',
            'focus_areas' => [
                'Programming',
                'Web Development',
                'Mobile Development',
                'Computer Networking',
                'IoT',
                'AI'
            ],
            'sort_order' => 1,
        ]);

        // 6. Seed Certifications
        Certification::truncate();

        $certifications = [
            [
                'title' => 'Memulai Pemrograman Dengan C',
                'issuer' => 'Dicoding',
                'credential_url' => null,
                'sort_order' => 1,
            ],
            [
                'title' => 'Prinsip Desain Software SOLID',
                'issuer' => 'Dicoding',
                'credential_url' => null,
                'sort_order' => 2,
            ],
            [
                'title' => '1-Week Technology & Software Exploration',
                'issuer' => 'RevoU',
                'credential_url' => null,
                'sort_order' => 3,
            ],
            [
                'title' => 'Google Developer Program Member',
                'issuer' => 'Google Developer Program',
                'credential_url' => null,
                'sort_order' => 4,
            ],
            [
                'title' => 'Google Skills Recognition',
                'issuer' => 'Google Skills',
                'credential_url' => null,
                'sort_order' => 5,
            ],
        ];

        foreach ($certifications as $cert) {
            Certification::create($cert);
        }
    }
}
