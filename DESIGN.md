# Design System & UI/UX Guidelines (DESIGN.md)

**Project:** Kamarul Arifin Muzaffar (Arif) Developer Portfolio  
**Visual Style:** Bright, Fresh, Modern Developer Portfolio  
**Inspiration:** Apple-style minimalism, Linear-style interfaces, modern developer platforms  
**Version:** 1.0.0 (MVP)

---

## 1. Visual Philosophy & Core Principles

The portfolio embodies a **fresh, bright, and highly professional engineering identity**. It avoids dark-mode clichés, cyberpunk neon, or loud gradients. Instead, it relies on disciplined spacing, crisp borders, subtle pastel highlights, and modern typography to deliver a premium feel.

- **Clean & Minimal:** Uncluttered layouts with generous whitespace to let projects and content breathe.
- **Developer-Oriented:** Clean code aesthetic, monospaced tech tags, crisp UI frames, and structural precision.
- **Friendly & Fresh:** Soft pastel tones (Sky Blue, Mint, Lavender, Soft Blue) over a luminous off-white canvas.
- **Accessible & Responsive:** Seamless transitions between small mobile viewports (320px) up to ultra-wide displays.

---

## 2. Color Palette & Semantic Tokens

### 2.1 Base Palette
| Token Name | Hex Code | HSL Equivalent | Usage |
| :--- | :--- | :--- | :--- |
| **Canvas Background** | `#F8FAFC` | `210°, 40%, 98%` | Primary page background |
| **Surface / Card** | `#FFFFFF` | `0°, 0%, 100%` | Cards, modals, floating panels, dropdowns |
| **Primary Text** | `#172033` | `222°, 38%, 15%` | Headings, titles, high-emphasis text |
| **Secondary Text** | `#64748B` | `215°, 16%, 47%` | Descriptions, meta text, subtitles |
| **Muted Text / Hint** | `#94A3B8` | `215°, 20%, 65%` | Placeholders, inactive state, subtle labels |
| **Border / Divider** | `#E2E8F0` | `214°, 32%, 91%` | 1px clean container and card borders |

### 2.2 Accent Pastel System
| Accent Name | Hex Code | Tailwind Token | Strategic Placement |
| :--- | :--- | :--- | :--- |
| **Sky Blue** | `#7DD3FC` | `sky-300` | Primary buttons, active tabs, code card accents |
| **Mint** | `#A7F3D0` | `emerald-200` | Status dot ("Currently learning & building"), success badges |
| **Lavender** | `#C4B5FD` | `violet-300` | Focus cards, project secondary badges, highlights |
| **Soft Blue** | `#DBEAFE` | `blue-100` | Subtle background glows, secondary button fills |

### 2.3 Subtle Gradients
- **Pastel Glow:** `linear-gradient(135deg, rgba(125,211,252,0.12) 0%, rgba(196,181,253,0.10) 50%, rgba(167,243,208,0.12) 100%)`
- **Hero Badge:** `linear-gradient(90deg, #F0F9FF 0%, #F5F3FF 100%)`
- **Contact Card:** `linear-gradient(135deg, #EFF6FF 0%, #F5F3FF 50%, #ECFDF5 100%)`

---

## 3. Typography System

### 3.1 Font Families
- **Display & Headings:** `Space Grotesk` or `Sora`, `sans-serif`  
  *Characteristics: Distinctive geometric curves, modern tech aesthetic, strong typographic presence.*
- **Body & Paragraphs:** `Inter`, `system-ui`, `-apple-system`, `sans-serif`  
  *Characteristics: Optimum legibility at standard sizes, balanced x-height, neutral tone.*
- **Code & Technical Labels:** `JetBrains Mono`, `ui-monospace`, `monospace`  
  *Characteristics: Clear distinction between characters, code card display, badges.*

### 3.2 Scale & Hierarchy
| Level | Font Size | Weight | Tracking | Usage |
| :--- | :--- | :--- | :--- | :--- |
| **Hero Title** | `3.25rem - 4.5rem` (52–72px) | `700 (Bold)` | `-0.03em` | Kamarul Arifin Muzaffar |
| **Section Heading (H2)**| `2rem - 2.5rem` (32–40px) | `700 (Bold)` | `-0.02em` | About, Projects, Experience |
| **Subsection (H3)** | `1.25rem - 1.5rem` (20–24px) | `600 (Semibold)` | `-0.01em` | Project Cards, Organization names |
| **Lead Subtitle** | `1.125rem` (18px) | `500 (Medium)` | `normal` | Hero subtitle & lead copy |
| **Body Standard** | `0.938rem - 1rem` (15–16px) | `400 (Regular)` | `normal` | Descriptions, paragraphs |
| **Badge / Label** | `0.75rem - 0.813rem` (12–13px) | `600 (Semibold)` | `+0.02em` | Tech stack pills, categories |

---

## 4. Layout & Spacing Architecture

- **Max Container Width:** `max-w-6xl` (`1152px`) centered horizontally with `px-4 sm:px-6 lg:px-8`.
- **Vertical Section Spacing:** `py-16 sm:py-24 lg:py-28`.
- **Card Spacing:** `p-6 sm:p-8` with `gap-6` or `gap-8`.
- **Border Radius Standards:**
  - Badges / Small Pills: `rounded-full` (`9999px`)
  - Buttons: `rounded-xl` (`12px`) or `rounded-full`
  - Cards & Containers: `rounded-2xl` (`16px`)
  - Hero Abstract Visual: `rounded-3xl` (`24px`)

---

## 5. Component Design Specifications

### 5.1 Sticky Navbar (`ARIF.DEV`)
- **Container:** Height `68px`, fixed top with `backdrop-blur-md bg-white/80 border-b border-slate-200/80`.
- **Brand Logo:** `ARIF.DEV` rendered in `Space Grotesk`, bold with a subtle sky-blue dot accent.
- **Nav Links:** Sleek `text-slate-600 hover:text-slate-900 transition-colors font-medium text-sm`.
- **Download CV Button:** Subtle pastel button (`bg-slate-900 text-white hover:bg-slate-800` or `bg-sky-50 text-sky-800 border border-sky-200`).
- **Mobile Menu:** Accessible slide-down / drawer with smooth backdrop and large tap targets (minimum 44x44px).

### 5.2 Hero Section & Developer Visual
- **Left Column:**
  - Status pill: `"● Currently learning & building"` with animated soft green pulse dot.
  - Greeting tag: `"HELLO, I'M ARIF 👋"`.
  - Main title: `"KAMARUL ARIFIN MUZAFFAR"` in 2 lines with tight line-height.
  - Subtitle: `"Student Developer · Web · AI · IoT · Networking"`.
  - Actions: Primary `"Explore Projects ↗"` and Secondary `"Download CV"`.
- **Right Column (Abstract Developer Visual):**
  - Lightweight interactive floating card styled like a sleek macOS code editor.
  - Top header with 3 window control dots (`red-400`, `amber-400`, `emerald-400`).
  - Active file tab: `arif.config.ts` or `Developer.php`.
  - Clean syntax-highlighted code block detailing Arif's core focus, location, and passions.
  - Gentle CSS floating animation (`@keyframes float`).

### 5.3 About & Focus Cards
- Short, authentic narrative.
- 4 grid cards with soft pastel icon backgrounds:
  1. **Web Development** (Sky blue icon badge)
  2. **AI & Programming** (Lavender icon badge)
  3. **IoT** (Mint icon badge)
  4. **Networking** (Soft blue icon badge)

### 5.4 Skills / Tech Stack Grid
- Organized into clear category cards:
  - Programming
  - Web Development
  - Database
  - Tools
  - Networking
- Each skill rendered as a clean pill badge with an SVG icon, crisp border, and subtle scale-up on hover.
- Zero percentage/progress bars.

### 5.5 Featured Projects
- 3 primary showcase cards with structured layout:
  - Header: Role badge (`Web Developer`, `UI/UX`, `Game Developer`) + Title & Subtitle.
  - Body: Concise, factual description.
  - Feature checklist with checkmark icons.
  - Tech stack tag row (`JetBrains Mono` pills).
  - Footer actions: `"View Project"`, `"Source Code"`, or modal trigger.
- Clean placeholder banners with tailored pastel gradient patterns and system diagrams.

### 5.6 Vertical Timelines (Experience, Organizations, Education)
- Single continuous vertical border line (`border-l-2 border-slate-200`).
- Timeline dots with pastel rings (`ring-4 ring-sky-100 bg-sky-500`).
- Clear date badges (`2024–2027`, `2025–2026`).

### 5.7 Contact Section
- Banner with soft pastel gradient background.
- Headline: `"LET'S BUILD SOMETHING GREAT."`.
- Two-column layout:
  - Left: Connect links (Email, GitHub, LinkedIn, Location).
  - Right: Clean contact form (Name, Email, Subject, Message, Send Button) posting to Laravel backend.

---

## 6. Micro-Interactions & Animation Guidelines

1. **Scroll Anchors:** Smooth native CSS behavior (`scroll-behavior: smooth`).
2. **Hover Elevations:** `transition-all duration-200 ease-out hover:-translate-y-1 hover:shadow-lg hover:shadow-slate-200/50`.
3. **Hero Card Float:**
   ```css
   @keyframes float {
     0%, 100% { transform: translateY(0px); }
     50% { transform: translateY(-8px); }
   }
   ```
4. **Reduced Motion Support:**
   ```css
   @media (prefers-reduced-motion: reduce) {
     * {
       animation-duration: 0.01ms !important;
       animation-iteration-count: 1 !important;
       transition-duration: 0.01ms !important;
       scroll-behavior: auto !important;
     }
   }
   ```

---

## 7. Responsiveness & Breakpoint System

- **xs (320px – 374px):** Single column, condensed padding (`px-4`), font size scale adapted so headings never overflow.
- **sm (375px – 639px):** Full mobile view with responsive drawer navigation.
- **md (640px – 767px):** 2-column grids for skills, about cards, and projects.
- **lg (1024px+):** Full desktop layout with 2-column hero, side-by-side contact, and horizontal navigation bar.
