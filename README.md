# Kamarul Arifin Muzaffar — Personal Developer Portfolio (MVP)

> Modern, bright, and professional personal developer portfolio for **Kamarul Arifin Muzaffar (Arif)** — Student Developer from Pati, Indonesia, studying Computer and Telecommunication Network Engineering (TJKT) at SMK Tunas Harapan Pati (2024–2027).

---

## 🛠️ Tech Stack & Architecture

- **Backend Framework:** [Laravel 12 (PHP 8.5)](https://laravel.com)
- **Database Engine:** MySQL 8.0 (Database: `21kamarul`)
- **Frontend / Styling:** [Tailwind CSS v4](https://tailwindcss.com) + [Vite](https://vitejs.dev)
- **Typography:** Space Grotesk (Headings), Inter (Body), JetBrains Mono (Code/Labels)
- **Design Inspiration:** Apple-style minimalism, Linear-style interfaces, clean developer portfolios

---

## 📄 Key Project Documentation

- [PRD.md](file:///c:/21%20KAMARUL%20SKILL%20PASPORT%20MAM%20NUR/PRD.md) — Comprehensive Product Requirements Document for the MVP.
- [DESIGN.md](file:///c:/21%20KAMARUL%20SKILL%20PASPORT%20MAM%20NUR/DESIGN.md) — Design system specifications, color tokens, typography scales, responsive breakpoints, and UI guidelines.

---

## 🚀 Core MVP Sections Implemented

1. **Navbar (`ARIF.DEV`):** Sticky, backdrop-blur, smooth anchor links, Download CV button, and accessible mobile drawer navigation.
2. **Hero:** Greeting badge, bold title, student developer subtitle, "Currently learning & building" status, and lightweight abstract developer code window visual.
3. **About Me:** Authentic student biography and 4 focus cards (Web Development, AI & Programming, IoT, Networking).
4. **Tech Stack / Skills:** Data-driven skills grouped into Programming, Web Development, Database, Tools, and Networking fetched from MySQL (no progress bars).
5. **Featured Projects:** Showcases **ATLAS MBG**, **WasteBank2026**, and **Journey to Logic** with roles, feature checklists, technology pills, and interactive detail modals.
6. **Experience:** Vertical timeline documenting verified project and systems practicum milestones.
7. **Organizations:** Verified leadership timeline (OSIS SMPN 1 Margoyoso, OSIS BATHARA SMK Tunas Harapan Pati, and FOSKAP Kabupaten Pati).
8. **Education:** SMK Tunas Harapan Pati (TJKT, 2024–2027) with core focus domain badges.
9. **Certifications:** Verified credentials from Dicoding, RevoU, and Google Developer Program.
10. **Contact & CTA:** Pastel banner with direct email/GitHub/LinkedIn buttons and a working contact form storing inquiries directly into MySQL `contact_messages`.
11. **Footer:** Minimalist branding, quick links, and copyright notice.

---

## ⚙️ Quick Start Guide

### 1. Requirements
- PHP 8.2 or higher (PHP 8.5 installed)
- Composer
- Node.js (v18+) & npm
- MySQL Server (Port 3306)

### 2. Environment Configuration
Verify your `.env` contains the database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=21kamarul
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Database Migration & Seeding
Run migrations and seed verified portfolio data:
```bash
php artisan migrate:fresh --seed
```

### 4. Build Frontend Assets
Compile Tailwind CSS and JS assets via Vite:
```bash
npm run build
```
*(Or run `npm run dev` during active development)*

### 5. Start the Application
Run the local Laravel server:
```bash
php artisan serve --port=8000
```
Then visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

### 6. Run Automated Tests
```bash
php artisan test
```
All feature and database tests will run and validate the MVP.

---

## 👨‍💻 Author & Attribution

- **Developer:** Kamarul Arifin Muzaffar (Arif)
- **School:** SMK Tunas Harapan Pati
- **Location:** Pati, Central Java, Indonesia
- **Copyright:** © 2026 Kamarul Arifin Muzaffar
