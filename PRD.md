# Product Requirements Document (PRD) — Portfolio MVP

**Project Name:** Kamarul Arifin Muzaffar (Arif) Developer Portfolio  
**Target Delivery:** MVP (Minimum Viable Product)  
**Target Platform:** Web (Desktop, Tablet, Mobile)  
**Primary Stack:** Laravel 11/12, MySQL, Tailwind CSS, Vite, Vanilla JavaScript  
**Author:** Kamarul Arifin Muzaffar & Antigravity  
**Version:** 1.0.0 (MVP)

---

## 1. Executive Summary & Objective

The goal of this project is to build an MVP personal developer portfolio website for **Kamarul Arifin Muzaffar (Arif)** — a Student Developer based in Pati, Indonesia, studying Computer and Telecommunication Network Engineering (TJKT) at SMK Tunas Harapan Pati (2024–2027).

The portfolio presents Arif's technical identity, featured engineering projects, verified skills across Web, AI, IoT, and Networking, organizational leadership, and formal certifications. The system is architected on **Laravel with a MySQL database** to ensure clean, data-driven content management and robust inquiry capture.

---

## 2. Key Personas & Target Audience

1. **Tech Recruiters & Internship Coordinators:**
   - Goal: Quickly evaluate Arif's core tech stack, education, verified projects, and contact channels.
   - Requirement: High readability, clear roles in projects, verifiable credentials, responsive mobile view.
2. **Peers & Open Source Collaborators:**
   - Goal: Explore Arif's technical capabilities in Web, IoT, AI, and Networking.
   - Requirement: Clean code aesthetics, project links, GitHub profiles, and interactive preview cards.
3. **Clients / Organization Partners:**
   - Goal: Inquire about digital solutions or partnership (e.g. FOSKAP, student meal tracking, waste management).
   - Requirement: Easy contact form, fast response time, reliable message storage in MySQL.

---

## 3. Scope & Feature Prioritization (MVP vs Future)

### 3.1 In-Scope (MVP Core Requirements)
1. **Navbar:**
   - Sticky header with brand logo `ARIF.DEV`.
   - Links: About, Skills, Projects, Experience, Organizations, Education, Certifications, Contact.
   - "Download CV" action button.
   - Fully accessible mobile hamburger navigation drawer.
2. **Hero Section:**
   - Greeting badge: `"HELLO, I'M ARIF 👋"`.
   - Heading: `"KAMARUL ARIFIN MUZAFFAR"`.
   - Subtitle: `"Student Developer · Web · AI · IoT · Networking"`.
   - Bio punchline: `"I build practical digital experiences through code, creativity, and curiosity."`.
   - Actions: `"Explore Projects ↗"`, `"Download CV"`.
   - Status badge: `"● Currently learning & building"`.
   - Visual: Lightweight abstract developer visual with floating code card & soft pastel accents.
3. **About Section:**
   - Focused biography highlighting engineering mindset and curiosity.
   - 4 Core Focus Cards: Web Development, AI & Programming, IoT, Networking.
4. **Skills / Tech Stack:**
   - Data-driven categories fetched from MySQL:
     - **Programming:** C, C#, Python, JavaScript, PHP, Kotlin.
     - **Web Development:** HTML, CSS, JavaScript, Laravel, Vue, Vite.
     - **Database:** MySQL, PostgreSQL, Supabase.
     - **Tools:** Git, GitHub, VS Code, Figma, Postman.
     - **Networking:** Linux, MikroTik, VirtualBox, TCP/IP.
   - Interactive badge/card display with subtle micro-hover animations (no artificial percentage bars).
5. **Featured Projects (3 Polished MVP Showcases):**
   - **Project 1 — ATLAS MBG:** Tracking & Logistics Management System for meal distribution and container management (Laravel, Vue, REST API, PostgreSQL).
   - **Project 2 — WasteBank2026:** Digital Waste Management Platform (Web, UI/UX, Figma, API).
   - **Project 3 — Journey to Logic:** Educational Logic Game by Ratsel Meister (Unity, C#).
   - Dynamic project modal/detail drawer for exploring full feature lists.
6. **Experience Section:**
   - Clean vertical timeline documenting verified student developer journey and practical project milestones.
7. **Organizations Section:**
   - Verified leadership timeline:
     - OSIS SMP Negeri 1 Margoyoso (2021–2023)
     - OSIS BATHARA — SMK Tunas Harapan Pati (2024–2025)
     - FOSKAP — Forum OSIS Kabupaten Pati (2025–2026) | Division: Ekonomi Kreatif.
8. **Education Section:**
   - SMK Tunas Harapan Pati — Computer and Telecommunication Network Engineering (TJKT), 2024–2027.
   - Core focus domains: Programming, Web Development, Mobile Development, Computer Networking, IoT, AI.
9. **Certifications Section:**
   - Verified achievements: Dicoding (C), Dicoding (SOLID), RevoU 1 Week, Google Developer Program, Google Skills.
10. **Contact Section & Database Submission:**
    - High-impact pastel CTA: `"LET'S BUILD SOMETHING GREAT."`.
    - Direct social links: Email, GitHub, LinkedIn.
    - Working contact message form storing inquiries directly into MySQL `contact_messages` table with validation and feedback.
11. **Footer:**
    - Minimalist footer with `ARIF.DEV` branding, quote, social links, and copyright `© 2026 Kamarul Arifin Muzaffar`.

### 3.2 Out-of-Scope (Deferred to Phase 2 / Phase 3)
- Command Palette (Quick switcher)
- Personal Blog / Article Engine
- Changelog page
- Easter Eggs / 3D canvas / heavy Three.js shaders
- Complex project filter engines
- Third-party live GitHub API scraping
- Full Authentication/Admin CMS dashboard (Content seeded via Laravel Seeders & Database Migrations for MVP)

---

## 4. Technical Architecture & Database Design

### 4.1 System Components
- **Framework:** Laravel (PHP 8.5)
- **Database Engine:** MySQL 8.0 (Database name: `21kamarul` or `kamarul_portfolio`)
- **Styling:** Tailwind CSS with custom palette configured in `tailwind.config.js`
- **Build Tool:** Vite for asset compilation and instant HMR
- **Templating:** Laravel Blade with reusable partials and clean vanilla JavaScript micro-interactions

### 4.2 MySQL Relational Schema
```sql
-- 1. Skills Table
CREATE TABLE skills (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL, -- 'programming', 'web', 'database', 'tools', 'networking'
    icon VARCHAR(100) NULL,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- 2. Projects Table
CREATE TABLE projects (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    subtitle VARCHAR(200) NOT NULL,
    description TEXT NOT NULL,
    role VARCHAR(100) NOT NULL,
    technologies JSON NOT NULL,
    features JSON NOT NULL,
    group_name VARCHAR(100) NULL,
    demo_url VARCHAR(255) NULL,
    github_url VARCHAR(255) NULL,
    image_path VARCHAR(255) NULL,
    sort_order INT DEFAULT 0,
    is_featured BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- 3. Experiences Table
CREATE TABLE experiences (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    role VARCHAR(100) NOT NULL,
    period VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- 4. Organizations Table
CREATE TABLE organizations (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    period VARCHAR(50) NOT NULL,
    institution VARCHAR(150) NULL,
    division VARCHAR(100) NULL,
    description TEXT NULL,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- 5. Certifications Table
CREATE TABLE certifications (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    issuer VARCHAR(150) NOT NULL,
    credential_url VARCHAR(255) NULL,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- 6. Contact Messages Table (For Inquiries)
CREATE TABLE contact_messages (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NULL,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NULL,
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);
```

---

## 5. Non-Functional Requirements (NFRs)

1. **Performance:**
   - Lightweight initial load: < 200KB initial payload.
   - SVG icons rendered inline, zero render-blocking unnecessary scripts.
2. **Accessibility (a11y):**
   - WCAG 2.1 AA conformance.
   - Logical tab indices and visible focus ring (`ring-2 ring-sky-400`).
   - `prefers-reduced-motion` media queries respected for all floating and scroll animations.
3. **Responsiveness:**
   - Fully optimized layouts tested across 320px, 375px, 430px, 768px, 1024px, and 1440px.
4. **Security & Reliability:**
   - CSRF protection enabled on contact submission.
   - Input sanitization and email validation.
   - Rate limiting on contact form endpoints.

---

## 6. Definition of Done (DoD)

- [x] All 11 core sections implemented and rendered via Laravel Blade.
- [x] MySQL migrations and seeders execute smoothly without errors.
- [x] All data is fetched dynamically from the database.
- [x] Working responsive navbar with mobile drawer and smooth anchor navigation.
- [x] Contact message form validates and stores records directly in MySQL.
- [x] No invented personal facts, awards, or false employment claims.
- [x] Polished aesthetic matching the light, pastel-accented modern design guidelines.
