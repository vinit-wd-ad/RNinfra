<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include "include/head.php" ?>  

  <title>Dubai Real Estate | Rising Nexus Infra</title>
</head>

<body class="font-sans font-light bg-cream" style="color:#0d1b2e" x-data="{mob:false}">

  <!-- ══ NAV ══ -->
  <nav id="nav"
    class="fixed top-0 left-0 right-0 z-[3000] flex items-center justify-between px-6 py-4 md:px-14 md:py-4 bg-navy/95 backdrop-blur-[20px] border-b border-gold/15 transition-all duration-400">

    <!-- Logo Section -->
    <a href="https://www.risingnexusinfra.com" class="flex items-center gap-3 no-underline">
      <div
        class="w-[38px] h-[38px] border border-gold flex items-center justify-center font-serif text-[1.05rem] text-gold">
        RN
      </div>
      <div>
        <div class="text-white text-[0.72rem] tracking-[0.14em] uppercase font-normal leading-[1.4]">
          Rising Nexus Infra
        </div>
        <div class="text-gold text-[0.56rem] tracking-[0.24em] uppercase font-light">
          Dubai Real Estate
        </div>
      </div>
    </a>

    <!-- Desktop Navigation -->
    <div class="hidden lg:flex items-center gap-7">
      <a href="#market"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Market</a>
      <a href="#dubaisouth"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Dubai
        South</a>
      <a href="#visa"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Visa
        2026</a>
      <a href="#explore"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Map</a>
      <a href="#yields"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Yields</a>
      <a href="#why"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Why
        Dubai</a>
      <a href="#services"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Services</a>
      <a href="#contact"
        class="text-white/55 text-[0.65rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">Contact</a>
    </div>

    <!-- Right Actions (CTA & Mobile Toggle) -->
    <div class="flex items-center gap-3">
      <a href="https://wa.me/919910587006"
        class="hidden sm:block px-[1.35rem] py-[0.48rem] border border-gold text-gold text-[0.65rem] tracking-[0.18em] uppercase no-underline transition-all duration-200 hover:bg-gold hover:text-navy">
        Enquire Now
      </a>

      <button @click="mob=!mob" class="lg:hidden flex flex-col gap-[5px] bg-transparent border-none cursor-pointer p-1">
        <span :class="mob ? 'rotate-45 translate-y-[7px]' : ''"
          class="block w-[22px] h-[1px] bg-gold transition-transform duration-300"></span>
        <span :class="mob ? 'opacity-0' : ''"
          class="block w-[22px] h-[1px] bg-gold transition-opacity duration-300"></span>
        <span :class="mob ? '-rotate-45 -translate-y-[7px]' : ''"
          class="block w-[22px] h-[1px] bg-gold transition-transform duration-300"></span>
      </button>
    </div>
  </nav>
  <!-- Mobile menu -->
  <!-- Mobile Drawer -->
  <div x-show="mob" x-transition
    class="fixed inset-y-0 left-0 w-[280px] bg-n2 z-[2999] border-r border-gold/15 pt-24 px-8 pb-8 flex flex-col gap-5">

    <a href="#market" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Market Intelligence
    </a>
    <a href="#dubaisouth" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Dubai South Focus
    </a>
    <a href="#visa" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Visa Rules 2026
    </a>
    <a href="#explore" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Map Explorer
    </a>
    <a href="#yields" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Yield Table
    </a>
    <a href="#why" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Why Dubai
    </a>
    <a href="#services" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Our Services
    </a>
    <a href="#contact" @click="mob=false"
      class="text-white/65 text-[0.85rem] tracking-[0.14em] uppercase no-underline hover:text-gold transition-colors">
      Contact
    </a>

    <!-- Contact Info Section -->
    <div class="border-t border-gold/15 mt-2 pt-4 flex flex-col gap-[0.6rem]">
      <a href="tel:+919910587006" class="text-gold/70 text-[0.75rem] no-underline">
        India: +91 99105 87006
      </a>
      <a href="tel:+971585787006" class="text-gold/70 text-[0.75rem] no-underline">
        Dubai: +971 58 578 7006
      </a>
    </div>
  </div>

  <!-- Backdrop Overlay -->
  <div x-show="mob" @click="mob=false" class="fixed inset-0 bg-black/40 z-[2998]">
  </div>

  <!-- ══ HERO ══ -->
  <section id="home" class="min-h-screen relative overflow-hidden flex items-end pb-12 md:pb-24">

    <!-- Background Layers -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-navy">
      <!-- Fallback Dubai skyline image -->
      <div
        class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=1920&q=90')] bg-[center_60%] bg-cover bg-no-repeat">
      </div>

      <!-- YouTube video layer -->
      <iframe
        id="hv"
        class="hvid"
        src="https://www.youtube.com/embed/-1VRwXKzm0U?autoplay=1&mute=1&loop=1&playlist=-1VRwXKzm0U&controls=0&showinfo=0&rel=0&playsinline=1"
        allow="autoplay; encrypted-media"
        allowfullscreen>
      </iframe>
    </div>

    <!-- Strong Dark Gradient Overlay -->
    <div
      class="absolute inset-0 z-[1] bg-[linear-gradient(168deg,rgba(13,27,46,0.92)_0%,rgba(13,27,46,0.65)_48%,rgba(13,27,46,0.95)_100%)]">
    </div>

    <!-- Subtle Grid Pattern Overlay -->
    <div
      class="absolute inset-0 z-[1] pointer-events-none bg-[linear-gradient(rgba(201,164,92,0.022)_1px,transparent_1px),linear-gradient(90deg,rgba(201,164,92,0.022)_1px,transparent_1px)] bg-[length:80px_80px]">
    </div>

    <!-- Content Container -->
    <div class="relative z-[2] w-full max-w-[1240px] mx-auto px-6 md:px-14">

      <!-- Badge -->
      <div class="inline-flex items-center gap-3 border border-gold/30 px-5 py-2 mb-8">
        <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
        <span class="text-gold text-[0.6rem] tracking-[0.32em] uppercase font-normal">
          Exclusive Partnership · HOD Real Estate, Dubai
        </span>
      </div>

      <!-- Main Heading -->
      <h1
        class="font-serif font-light text-white leading-[1.05] mb-7 tracking-tight text-[3.2rem] md:text-[5.5vw] lg:text-[5.8rem]">
        Own a Piece of<br>
        <em class="not-italic bg-gradient-to-br from-gold to-gold-lt bg-clip-text text-transparent">
          Dubai's Golden Future
        </em>
      </h1>

      <!-- Description -->
      <p class="text-white/60 text-[0.9rem] leading-[1.88] max-w-[490px] mb-10 font-light">
        Your complete gateway to Dubai — every developer, every district, every off-plan launch. Plus end-to-end visa,
        business setup and relocation support, managed entirely from India.
      </p>

      <!-- CTA Buttons -->
      <div class="flex flex-wrap gap-4 items-center">
        <!-- Gradient Button (Class 'gbtn' assumes you have custom CSS for it, keeping it for style) -->
        <a href="#explore"
          class="gbtn bg-gold px-9 py-3.5 text-navy font-sans text-[0.68rem] tracking-[0.22em] uppercase font-semibold no-underline inline-block hover:brightness-110 transition-all">
          Explore Dubai Areas
        </a>

        <a href="#dubaisouth"
          class="px-9 py-3.5 border border-white/25 text-white/80 font-sans text-[0.68rem] tracking-[0.22em] uppercase no-underline inline-block transition-all hover:border-gold hover:text-gold">
          Dubai South Spotlight
        </a>

        <a href="#visa"
          class="px-9 py-3.5 border border-white/25 text-white/80 font-sans text-[0.68rem] tracking-[0.22em] uppercase no-underline inline-block transition-all hover:border-gold hover:text-gold">
          New Visa Rules 2026
        </a>
      </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 right-6 md:right-14 z-[2] flex flex-col items-center gap-2">
      <span class="text-white/30 text-[0.55rem] tracking-[0.22em] uppercase [writing-mode:vertical-rl]">
        Scroll
      </span>
      <div class="sl w-[1px] h-12 bg-gradient-to-b from-gold/50 to-transparent"></div>
    </div>

  </section>

  <!-- ══ TICKER ══ -->
  <div class="bg-gold overflow-hidden py-2" aria-hidden="true">
    <!-- Animation 'tkrun' aapke global CSS mein honi chahiye -->
    <div class="tkrun flex whitespace-nowrap">
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 214,000+ Transactions in 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ AED 682B+ Total Market Value 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Dubai South: World's Largest Airport by 2030 — Al Maktoum International
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 2-Year Investor Visa: No Minimum — April 2026
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Golden Visa: 50% Upfront Rule Removed — Feb 2026
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Q1 2026: AED 138.7B across 44,150 Deals — +21.2% YoY
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ International City: Up to 10% Gross Yield — Bayut 2025
      </span>
      <span class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 shrink-0">
        ◆ DSO: +29% Price Growth 2025 — Metro Blue Line Effect
      </span>

      <!-- Duplicate (Infinite loop ke liye) -->
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 214,000+ Transactions in 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.63rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ AED 682B+ Total Market Value 2025 — DLD
      </span>
    </div>
  </div>

  <!-- ══ STATS ══ -->
  <div class="bg-n2 border-b border-gold/12 py-8 md:py-10 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-8 gap-x-4">

      <!-- Stat 1 -->
      <div class="text-center px-5 border-r-0 md:border-r border-gold/10 last:border-r-0">
        <div class="font-serif font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          214K+
        </div>
        <div class="text-white/40 text-[0.58rem] tracking-[0.18em] uppercase mt-1.5">
          Transactions 2025
        </div>
        <div class="text-gold/40 text-[0.5rem] uppercase tracking-wider mt-1">
          DLD
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="text-center px-5 border-r-0 lg:border-r border-gold/10 last:border-r-0">
        <div class="font-serif font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          AED 682B
        </div>
        <div class="text-white/40 text-[0.58rem] tracking-[0.18em] uppercase mt-1.5">
          Market Value 2025
        </div>
        <div class="text-gold/40 text-[0.5rem] uppercase tracking-wider mt-1">
          DLD / DXB Interact
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="text-center px-5 border-r-0 md:border-r border-gold/10 last:border-r-0">
        <div class="font-serif font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          6.8%
        </div>
        <div class="text-white/40 text-[0.58rem] tracking-[0.18em] uppercase mt-1.5">
          Avg Gross Yield 2025
        </div>
        <div class="text-gold/40 text-[0.5rem] uppercase tracking-wider mt-1">
          Bayut / Cavendish Maxwell
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="text-center px-5 border-r-0 lg:border-r border-gold/10 last:border-r-0">
        <div class="font-serif font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          94,700
        </div>
        <div class="text-white/40 text-[0.58rem] tracking-[0.18em] uppercase mt-1.5">
          New Investors H1 2025
        </div>
        <div class="text-gold/40 text-[0.5rem] uppercase tracking-wider mt-1">
          Dubai Land Dept
        </div>
      </div>

      <!-- Stat 5 -->
      <div class="text-center px-5 last:border-r-0 col-span-2 md:col-span-1">
        <div class="font-serif font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          131,504
        </div>
        <div class="text-white/40 text-[0.58rem] tracking-[0.18em] uppercase mt-1.5">
          Units Launched 2025
        </div>
        <div class="text-gold/40 text-[0.5rem] uppercase tracking-wider mt-1">
          Property Monitor
        </div>
      </div>

    </div>
  </div>

  <!-- ══ MARKET INTELLIGENCE ══ -->
  <section id="market" class="bg-n2 py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.62rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Live Market Intelligence · H1 2026
        </div>

        <h2 class="font-serif font-light text-white leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[2.9rem]">
          What Every Investor <em class="not-italic text-gold italic">Needs to Know</em>
        </h2>

        <p class="text-white/60 text-[0.87rem] leading-[1.82] max-w-[550px] font-light">
          Cross-referenced from Dubai Land Department, Bayut Annual Report 2025, Knight Frank Q1 2025, Cavendish Maxwell
          H1 2025.
        </p>

        <div class="inline-flex items-center gap-2 border border-gold/20 px-3 py-1 mt-3 text-gold/60 text-[0.55rem] tracking-widest uppercase">
          Sources: DLD · Bayut 2025 · Knight Frank · Cavendish Maxwell · Property Monitor DPI
        </div>
      </div>

      <!-- Intelligence Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-gold/10 border border-gold/10 mt-10 md:mt-12">

        <!-- Card 1 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d1">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            Full Year 2025 · DLD
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            Record 214,000+ Transactions
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            Dubai closed 2025 with <strong class="text-gold font-normal">214,000+ transactions worth AED 682B+</strong>
            — 18.82% YoY surge. Q1 2025 alone: 45,000 sales worth AED 142B. Off-plan reached <strong class="text-gold font-normal">65–72% of all deals</strong>, powered by post-handover payment plans.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d2">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            Q1 2026 · DLD / Khaleej Times
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            2026 Momentum Accelerating
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            Q1 2026 delivered <strong class="text-gold font-normal">AED 138.7B across 44,150 deals</strong> — +21.2% value YoY.
            Average deal size grew to AED 3.3M. January 2026 alone: <strong class="text-gold font-normal">AED 53.6B across 16,000+ transactions</strong> — a historic monthly record.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d3">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            2025 · Bayut Annual Report
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            Price Appreciation — All Tiers
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            Apartment prices surged <strong class="text-gold font-normal">up to 29% in 2025</strong>. Dubai Silicon Oasis led (+29%, Metro Blue Line). Affordable villa prices climbed <strong class="text-gold font-normal">up to 28%</strong>. DAMAC Hills: <strong class="text-gold font-normal">+20.7% villa transaction growth</strong> per DLD.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d1">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            H1 2025 · Bayut / DLD
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            World-Class Rental Yields
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            City-wide average: <strong class="text-gold font-normal">~6.8% in 2025</strong>. Top zones: International City <strong class="text-gold font-normal">9–10%</strong>, Discovery Gardens 9.47%, Dubai South 7.5–8%. Dubai Hills villa rents: <strong class="text-gold font-normal">+79.5%</strong> H1 2025 on critically tight supply.
          </p>
        </div>

        <!-- Card 5 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d2">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            H1 2025 · DLD
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            Indians Lead All Nationalities
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            DLD: <strong class="text-gold font-normal">94,700 investors H1 2025</strong> (+26%). 59,000 were new buyers.
            <strong class="text-gold font-normal">Indians consistently top-3 nationalities</strong>. 87% of 2025 transactions were cash. Off-plan ROI averaged <strong class="text-gold font-normal">8–12% annually</strong>.
          </p>
        </div>

        <!-- Card 6 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d3">
          <span class="inline-block border border-gold/20 text-gold/60 text-[0.52rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            2026 Outlook · Knight Frank
          </span>
          <h3 class="font-serif font-light text-white text-[1.06rem] mb-2.5">
            Sustainable Growth Through 2027
          </h3>
          <p class="text-white/60 text-[0.76rem] leading-[1.78] font-light">
            Analysts forecast <strong class="text-gold font-normal">5–8% annual appreciation</strong> through 2026–27. D33 Agenda targets <strong class="text-gold font-normal">AED 1 trillion annual transactions by 2033</strong>. Al Maktoum Airport expansion secures multi-decade demand.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ══ DUBAI SOUTH SPOTLIGHT ══ -->
  <section id="dubaisouth" class="bg-[#f8f4ee] py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv text-left">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.62rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Dubai's Hottest Investment Corridor · 2025–2030
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[2.9rem]">
          Dubai South & <em class="not-italic text-gold italic">Al Maktoum International Airport</em>
        </h2>

        <p class="text-navy/60 text-[0.9rem] leading-[1.82] max-w-[620px] font-light">
          The single biggest infrastructure-driven property opportunity of this decade — a 145 sq km mega-city built
          around the world's largest airport. Entry prices are still affordable. Appreciation potential is exceptional.
        </p>
      </div>

      <!-- Main Grid Content -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mt-11">

        <!-- Left Column: Key Facts (Dark Card) -->
        <div class="bg-navy p-8 md:p-10 border border-gold/20 rv d1">
          <h3 class="font-serif font-light text-gold text-[1.4rem] mb-6">
            Al Maktoum Airport — The Facts
          </h3>

          <div class="flex flex-col gap-6 md:gap-8">
            <!-- Fact 1 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[0.8rem] shrink-0 mt-1">✈</div>
              <div>
                <div class="text-white text-[0.82rem] font-normal mb-1">World's Largest Airport — When Complete</div>
                <div class="text-white/50 text-[0.74rem] leading-relaxed font-light">
                  Al Maktoum International will handle 260 million passengers/year — surpassing Dubai International (DXB)
                  which currently handles ~90M. Phased completion targeted through 2030.
                </div>
              </div>
            </div>

            <!-- Fact 2 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[0.8rem] shrink-0 mt-1">🏗</div>
              <div>
                <div class="text-white text-[0.82rem] font-normal mb-1">AED 128 Billion Investment</div>
                <div class="text-white/50 text-[0.74rem] leading-relaxed font-light">
                  The UAE government is committing AED 128B to airport development — the largest single infrastructure
                  investment in UAE history. This directly underpins all surrounding property values.
                </div>
              </div>
            </div>

            <!-- Fact 3 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[0.8rem] shrink-0 mt-1">🏘</div>
              <div>
                <div class="text-white text-[0.82rem] font-normal mb-1">Expo City — Legacy of Expo 2020</div>
                <div class="text-white/50 text-[0.74rem] leading-relaxed font-light">
                  The Expo site has transformed into Expo City — a thriving mixed-use hub with residential,
                  commercial, and tourism infrastructure already operational.
                </div>
              </div>
            </div>

            <!-- Fact 4 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[0.8rem] shrink-0 mt-1">📈</div>
              <div>
                <div class="text-white text-[0.82rem] font-normal mb-1">Affordable Entry — Now</div>
                <div class="text-white/50 text-[0.74rem] leading-relaxed font-light">
                  Apartments from AED 500K. Villas from AED 800K. DAMAC Hills 2 (Akoya) — most popular affordable villa
                  community in Dubai 2025. These prices will not last as airport phases complete.
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Stats & CTA -->
        <div class="flex flex-col gap-5 rv d2">

          <!-- Stat Box 1 -->
          <div class="bg-white border border-gold/18 p-6 border-l-4 border-l-gold shadow-sm">
            <div class="font-serif font-light text-gold text-[1.85rem] md:text-3xl lg:text-[1.85rem] leading-none">
              7.5–8%
            </div>
            <div class="text-navy/50 text-[0.6rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Current Gross Yield (Bayut 2025)
            </div>
            <p class="text-navy/62 text-[0.76rem] leading-relaxed mt-2.5 font-light">
              Gross rental yield in Dubai South is already competitive — and set to rise as the airport brings 150,000+
              daily passengers and 50,000+ permanent staff to the area by 2030.
            </p>
          </div>

          <!-- Stat Box 2 -->
          <div class="bg-white border border-gold/18 p-6 border-l-4 border-l-gold shadow-sm">
            <div class="font-serif font-light text-gold text-[1.85rem] md:text-3xl lg:text-[1.85rem] leading-none">
              AED 500K+
            </div>
            <div class="text-navy/50 text-[0.6rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Entry Price — Apartments
            </div>
            <p class="text-navy/62 text-[0.76rem] leading-relaxed mt-2.5 font-light">
              Lowest entry point in Dubai for a new property near a major transport hub. Compare: properties near
              Heathrow (London) sell at £800K+. This is the equivalent opportunity — at a fraction of the cost.
            </p>
          </div>

          <!-- Stat Box 3 -->
          <div class="bg-white border border-gold/18 p-6 border-l-4 border-l-gold shadow-sm">
            <div class="font-serif font-light text-gold text-[1.85rem] md:text-3xl lg:text-[1.85rem] leading-none">
              145 sq km
            </div>
            <div class="text-navy/50 text-[0.6rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Dubai South Masterplan Area
            </div>
            <p class="text-navy/62 text-[0.76rem] leading-relaxed mt-2.5 font-light">
              Designed to house 1 million residents. The Residential District is expanding rapidly with Emaar,
              DAMAC, and Sobha all active on major project launches.
            </p>
          </div>

          <!-- CTA Button -->
          <a href="https://wa.me/919910587006"
            class="gbtn bg-gold px-8 py-3.5 text-navy font-sans text-[0.68rem] tracking-[0.2em] uppercase font-semibold text-center no-underline block hover:brightness-105 transition-all mt-2">
            Enquire About Dubai South →
          </a>

        </div>
      </div>
    </div>
  </section>

  <!-- ══ VISA RULES 2026 ══ -->
  <section id="visa" class="bg-[#f8f4ee] py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv text-left">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.62rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Updated April 2026 · Official UAE Rules
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[2.9rem]">
          Residency by <em class="not-italic text-gold italic">Property Investment</em>
        </h2>

        <p class="text-navy/60 text-[0.87rem] leading-[1.82] max-w-[550px] font-light">
          Three official UAE visa pathways — with landmark 2026 changes making Dubai property ownership more accessible
          than ever for Indian and global investors.
        </p>
      </div>

      <!-- Visa Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-11">

        <!-- Card 1: 2-Year Investor Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/10 rv d1">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/40 text-[0.55rem] tracking-[0.22em] uppercase mb-2">Entry-Level Residency</div>
          <h3 class="font-serif font-light text-navy text-[1.5rem] leading-tight mb-4">2-Year Investor Visa</h3>

          <div class="font-serif font-light text-gold text-[2.3rem] leading-none">Any Value</div>
          <span class="inline-block bg-green-500/10 text-green-600 border border-green-500/25 text-[0.5rem] tracking-widest uppercase px-2 py-1 mt-1.5">
            New — Apr 2026
          </span>

          <div class="text-navy/40 text-[0.72rem] font-light mt-1.5 mb-4">No minimum property value for sole owners</div>
          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">Rule changed April 2026:</strong> AED 750K minimum fully eliminated for sole owners</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Joint owners: each share must be AED 400,000+</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Apply via DLD Cube Centre digital portal</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Renewable every 2 years; family not included</span>
            </li>
          </ul>
        </div>

        <!-- Card 2: 5-Year Retirement Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/10 rv d2">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/40 text-[0.55rem] tracking-[0.22em] uppercase mb-2">Retirement Pathway</div>
          <h3 class="font-serif font-light text-navy text-[1.5rem] leading-tight mb-4">5-Year Retirement Visa</h3>

          <div class="font-serif font-light text-gold text-[2.3rem] leading-none">AED 1M+</div>
          <div class="text-navy/40 text-[0.72rem] font-light mt-2.5 mb-4">Minimum property value</div>

          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>For retirees aged 55+</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>AED 1M+ property — or AED 1M savings — or AED 20K/month income</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Family sponsorship included</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>No requirement to reside full-time in UAE</span>
            </li>
          </ul>
        </div>

        <!-- Card 3: 10-Year Golden Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/10 rv d3">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/40 text-[0.55rem] tracking-[0.22em] uppercase mb-2">Premium Long-Term</div>
          <h3 class="font-serif font-light text-navy text-[1.5rem] leading-tight mb-3">10-Year Golden Visa</h3>

          <div class="font-serif font-light text-gold text-[2.3rem] leading-none">AED 2M+</div>
          <span class="inline-block bg-green-500/10 text-green-600 border border-green-500/25 text-[0.5rem] tracking-widest uppercase px-2 py-1 mt-1.5">
            2 Rule Changes 2026
          </span>

          <div class="text-navy/40 text-[0.72rem] font-light mt-1.5 mb-4">50% upfront requirement removed — Feb 2026</div>
          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">50% down payment REMOVED (Feb 2026)</strong> — DLD valuation of AED 2M+ only</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Off-plan, mortgaged & combined deeds all qualify</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">GDRFA + DLD unified portal (April 2026)</strong></span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.75rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>10-year residency for investor + family (Cost approx. AED 4,710)</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Bottom Info Box -->
      <div class="bg-navy border border-gold/20 p-8 mt-6 rv">
        <p class="text-white/60 text-[0.78rem] leading-loose font-light">
          <strong class="text-gold font-normal">Rising Nexus End-to-End Visa Support:</strong> We manage the complete
          Golden Visa process — DLD valuation, biometrics, Emirates ID, family sponsorship — plus the new 2-Year
          Investor Visa with no minimum. All handled through our Dubai office via HOD Real Estate.
          <strong class="text-gold font-normal">200+ Indian investors guided through UAE residency — talk to us
            today.</strong>
        </p>
      </div>

    </div>
  </section>

  <!-- ══ MAP EXPLORER ══ -->
  <section id="explore" class="bg-white py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.62rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Live Satellite Map
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[2.9rem]">
          Navigate <em class="not-italic text-gold italic">Dubai's</em> Prime Locations
        </h2>

        <p class="text-navy/60 text-[0.87rem] leading-[1.82] max-w-[550px] font-light mb-7">
          Click any gold pin on the satellite map or choose from the panel. Investment data and ROI insights update
          instantly for each of Dubai's 31 districts.
        </p>
      </div>

      <!-- Filter Bar -->
      <div class="flex flex-wrap gap-2 mb-5 items-center rv d1">
        <span class="text-navy/40 text-[0.58rem] tracking-widest uppercase mr-1">Filter:</span>

        <button
          class="map-fb fbon px-3.5 py-1.5 border border-gold text-gold text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200"
          data-f="all">
          All (31)
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="luxury">
          Luxury
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="offplan">
          Off-Plan
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="community">
          Community
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="waterfront">
          Waterfront
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="highyield">
          High Yield
        </button>
      </div>

      <!-- Map Shell -->
      <div
        class="grid grid-cols-1 lg:grid-cols-[1fr_370px] border border-gold/20 h-auto lg:h-[660px] overflow-hidden shadow-2xl shadow-navy/15 rv d2">

        <!-- Map Area -->
        <div id="dmap" class="h-[400px] lg:h-full w-full bg-navy/5"></div>

        <!-- Sidebar Info -->
        <div
          class="bg-[#112032] flex flex-col h-[500px] lg:h-full border-t lg:border-t-0 lg:border-l border-gold/20 overflow-hidden">

          <!-- Sidebar Header -->
          <div class="p-5 border-bottom border-gold/15 shrink-0">
            <div class="font-serif font-light text-white text-[0.98rem]">Dubai Investment Zones</div>
            <div id="zct" class="text-white/30 text-[0.55rem] tracking-widest uppercase mt-1">
              31 Prime Districts
            </div>
          </div>

          <!-- Search Box -->
          <div class="px-5 py-3 border-b border-gold/10 shrink-0">
            <input id="asrch" type="text" placeholder="Search areas…" oninput="buildList(cf,this.value)"
              class="w-full bg-white/5 border border-gold/20 text-white font-sans text-[0.74rem] font-light px-3 py-2 outline-none transition-colors duration-200 focus:border-gold placeholder:text-white/20">
          </div>

          <!-- Area List (Scrollable) -->
          <div id="alist" class="mpl flex-1 overflow-y-auto">
            <!-- JS will populate this -->
          </div>

          <!-- Detail Panel (Fixed Bottom) -->
          <div id="adet"
            class="bg-white/5 border-t border-gold/20 p-5 shrink-0 min-h-[115px] flex flex-col justify-center">
            <div class="font-serif font-light text-gold text-[1rem]">Select an area to explore</div>
            <div class="text-white/40 text-[0.7rem] leading-relaxed mt-1 font-light">
              Click any gold pin on the satellite map or choose from the list above to view investment metrics and ROI
              insights instantly.
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ══ PROPERTIES ══ -->
  <section id="props" class="bg-[#f0e9da] py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header -->
      <div class="rv">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.62rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Featured Listings
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[2.9rem]">
          Curated <em class="not-italic text-gold italic">Properties</em>
        </h2>
      </div>

      <!-- Filter Bar -->
      <div class="flex flex-wrap gap-2 my-6 md:my-7 items-center rv d1">
        <span class="text-navy/40 text-[0.58rem] tracking-widest uppercase mr-1">Type:</span>

        <button
          class="prop-fb fbon px-4 py-1.5 border border-gold text-gold text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200"
          data-pf="all">
          All
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="offplan">
          Off-Plan
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="ready">
          Ready
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="apartment">
          Apartments
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/55 bg-transparent text-[0.58rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="villa">
          Villas
        </button>
      </div>

      <!-- Property Grid (JS Generated) -->
      <div id="pgrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Your JS 'render' function will inject cards here -->
      </div>

    </div>
  </section>

  <!-- ══ YIELD TABLE — dark navy, white text ══ -->
  <section id="yields" class="bg-n2 py-[5.5rem] px-[3.5rem]">
    <div class="max-w-[1240px] mx-auto">
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Bayut Annual Report 2025
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Dubai Areas by <em class="italic text-gold">Investment Return</em>
        </h2>
        <p class="text-white/55 text-[.87rem] leading-[1.82] max-w-[550px] font-light">
          Gross yields before service charges. Source: Bayut 2025 Annual Report, DLD Smart Rental Index, Cavendish
          Maxwell H1 2025.
        </p>
        <p class="text-gold/55 text-[.65rem] italic mt-[.6rem]">
          💡 Budget zones = max cash flow &nbsp;|&nbsp; Luxury zones = max capital appreciation
        </p>
      </div>

      <div class="overflow-x-auto mt-8 rv d1">
        <table class="w-full border-collapse">
          <thead>
            <tr class="border-b border-gold/20">
              <th class="text-white/40 text-[.58rem] tracking-[.18em] uppercase font-normal text-left p-[.85rem_1rem]">
                Area</th>
              <th class="text-white/40 text-[.58rem] tracking-[.18em] uppercase font-normal text-left p-[.85rem_1rem]">
                Segment</th>
              <th class="text-white/40 text-[.58rem] tracking-[.18em] uppercase font-normal text-left p-[.85rem_1rem]">
                Gross Yield 2025</th>
              <th class="text-white/40 text-[.58rem] tracking-[.18em] uppercase font-normal text-left p-[.85rem_1rem]">
                From</th>
              <th class="text-white/40 text-[.58rem] tracking-[.18em] uppercase font-normal text-left p-[.85rem_1rem]">
                Best For</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Dubai Investment Park (DIP)</span><br>
                <span class="text-white/35 text-[.66rem]">Studios / 1BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">9.9%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 330K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Max
                  Cash Flow</span>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">International City</span><br>
                <span class="text-white/35 text-[.66rem]">Studios / 1BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">9–10%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 280K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Max
                  Cash Flow</span>
              </td>
            </tr>
            <!-- Row 3 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Discovery Gardens</span><br>
                <span class="text-white/35 text-[.66rem]">1-2BR Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">9.47%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 350K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">High
                  Yield</span>
              </td>
            </tr>
            <!-- Row 4 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Al Furjan</span><br>
                <span class="text-white/35 text-[.66rem]">Studios / Villas</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">7.72–8.51%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 550K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Metro
                  Access</span>
              </td>
            </tr>
            <!-- Row 5 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Jumeirah Village Circle (JVC)</span><br>
                <span class="text-white/35 text-[.66rem]">Studios – 3BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">7.5–8.5%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 450K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Yield
                  + Growth</span>
              </td>
            </tr>
            <!-- Row 6 (Featured) -->
            <tr class="border-b border-white/5 bg-gold/5 hover:bg-gold/10 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-gold-lt font-medium text-[.78rem]">✈ Dubai South / Expo City</span><br>
                <span class="text-white/35 text-[.66rem]">Apartments / Townhouses / Villas</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">7.5–8%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 500K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/40 text-gold-lt font-medium text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Airport
                  Upside</span>
              </td>
            </tr>
            <!-- Row 7 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Dubai Silicon Oasis</span><br>
                <span class="text-white/35 text-[.66rem]">Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-green-400 text-base">7–8.5%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 400K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Metro
                  Blue Line</span>
              </td>
            </tr>
            <!-- Row 8 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">DAMAC Hills</span><br>
                <span class="text-white/35 text-[.66rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-gold text-base">7.62–7.86%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 700K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Golf
                  + Yield</span>
              </td>
            </tr>
            <!-- Row 9 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Business Bay</span><br>
                <span class="text-white/35 text-[.66rem]">Studios – 2BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Mid-Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-gold text-base">6.5–7.92%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 700K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Canal
                  Views</span>
              </td>
            </tr>
            <!-- Row 10 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Dubai Marina</span><br>
                <span class="text-white/35 text-[.66rem]">1-2BR Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-gold text-base">6–7%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 800K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Short-Term
                  Lets</span>
              </td>
            </tr>
            <!-- Row 11 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Dubai Hills Estate</span><br>
                <span class="text-white/35 text-[.66rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-gold text-base">5.2–8%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 1.5M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Family
                  Luxury</span>
              </td>
            </tr>
            <!-- Row 12 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Downtown Dubai</span><br>
                <span class="text-white/35 text-[.66rem]">Apartments / Penthouses</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-gold text-base">5–6.5%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 1.5M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Prestige
                  + Growth</span>
              </td>
            </tr>
            <!-- Row 13 -->
            <tr class="hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.78rem]">Palm Jumeirah</span><br>
                <span class="text-white/35 text-[.66rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.74rem]">Ultra-Luxury</td>
              <td class="p-[.85rem_1rem] font-serif font-light text-white/50 text-base">4.5–6%</td>
              <td class="p-[.85rem_1rem] text-white/40 text-[.72rem]">AED 3M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.55rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Capital
                  Gain</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <p class="text-white/20 text-[.57rem] text-right mt-[1.25rem] italic">
        Data: Bayut Annual Report 2025 · DLD Smart Rental Index · Cavendish Maxwell H1 2025 · Knight Frank Dubai Q1
        2025. Gross estimates before service charges.
      </p>
    </div>
  </section>

  <!-- ══ WHY DUBAI — solid navy bg, guaranteed white text ══ -->
  <section id="why" class="bg-navy py-[5.5rem] px-6 md:px-[3.5rem]">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Investment Advantages
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Why <em class="italic text-gold">Dubai</em> Stands Apart
        </h2>
      </div>

      <!-- Grid Layout: 1 col on mobile, 2 on tablet, 4 on desktop -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[1.2rem] mt-10">

        <!-- Card 01 -->
        <div
          class="rv d1 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">01</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">Zero Tax Environment</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            No income, capital gains, or inheritance tax. Your <strong class="text-gold font-normal">gross yield is your
              net yield</strong>. UK taxes at 20–45%, India at 30%+. Dubai lets you keep every dirham earned.
          </p>
        </div>

        <!-- Card 02 -->
        <div
          class="rv d2 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">02</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">World-Beating Yields</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            Dubai 2025 avg: <strong class="text-gold font-normal">6.8%</strong>. Select zones hit <strong
              class="text-gold font-normal">9–10%</strong>. London 3%, Singapore 3.5%, New York 2.5–4%. No global city
            combines quality and yield like Dubai.
          </p>
        </div>

        <!-- Card 03 -->
        <div
          class="rv d3 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">03</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">New Golden Visa Rules</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">50% upfront removed Feb 2026.</strong> AED 2M DLD valuation qualifies
            — off-plan, mortgaged & combined deeds eligible. Unified GDRFA-DLD portal for faster processing.
          </p>
        </div>

        <!-- Card 04 -->
        <div
          class="rv d4 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">04</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">2-Year Visa — Any Property</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">AED 750K minimum eliminated April 2026.</strong> Any fully-owned Dubai
            property qualifies for UAE residency. Joint owners need AED 400K share each.
          </p>
        </div>

        <!-- Card 05 -->
        <div
          class="rv d1 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">05</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">Better Value Per Dollar</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">$1M buys ~1,000 sq ft in Dubai</strong> vs 172 sq ft in Monaco, 345 sq
            ft in London, 420 sq ft in Hong Kong. Indian investors get 2–4× more space per dollar.
          </p>
        </div>

        <!-- Card 06 -->
        <div
          class="rv d2 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">06</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">Strong Appreciation</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            Apartments up <strong class="text-gold font-normal">to 29% in 2025</strong>. DSO +29% on Metro Blue Line.
            DAMAC Hills villas +20.7%. Affordable and mid-tier communities record sharpest gains city-wide.
          </p>
        </div>

        <!-- Card 07 -->
        <div
          class="rv d3 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">07</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">RERA 100% Escrow</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            All off-plan funds in escrow — released at construction milestones only. <strong
              class="text-gold font-normal">DLD registers every transaction on blockchain.</strong> AI-powered Smart
            Rental Index launched 2025.
          </p>
        </div>

        <!-- Card 08 -->
        <div
          class="rv d4 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/20 text-[1.85rem] leading-none mb-[.95rem]">08</div>
          <h4 class="font-serif font-light text-white text-base mb-[.62rem]">Al Maktoum Airport Boom</h4>
          <p class="text-white/60 text-[.74rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">World's largest airport by 2030.</strong> AED 128B investment. Dubai
            Creek Tower, Metro Blue Line, D33 targeting AED 1T annual transactions. Population to 7.8M by 2040.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ══ SERVICES — solid dark bg, guaranteed white text ══ -->
  <section id="services" class="bg-[#112032] py-[5.5rem] px-6 md:px-[3.5rem]">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          End-to-End Solutions
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Beyond Property — <em class="italic text-gold">Complete Dubai Setup</em>
        </h2>
        <p class="text-white/55 text-[.87rem] leading-[1.82] max-w-[550px] font-light">
          Rising Nexus handles everything — property to Golden Visa, business licensing and family relocation — all from
          India through one trusted team.
        </p>
      </div>

      <!-- Grid Layout: 1 col on mobile, 2 on tablet, 3 on desktop -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-gold/10 border border-gold/10 mt-10">

        <!-- Service 01: Property -->
        <div class="rv d1 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🏠</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">Property Investment</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Shortlisting across all developers &
              budgets
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Pre-launch & off-market via HOD Real
              Estate
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>SPA review, DLD registration & Title
              Deed
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Property management & rental setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Portfolio review, resale & exit
              advisory
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Start Property Search →
          </a>
        </div>

        <!-- Service 02: Visa -->
        <div class="rv d2 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🪪</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">UAE Residency & Visa</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>10-Year Golden Visa (AED 2M) —
              end-to-end
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>2-Year Investor Visa — no minimum
              (April 2026)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>5-Year Retirement Visa processing
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Emirates ID & biometrics coordination
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Family sponsorship: spouse, children,
              parents
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Get Visa Support →
          </a>
        </div>

        <!-- Service 03: Business -->
        <div class="rv d3 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🏢</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">Business Setup in Dubai</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Mainland company registration (DED)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Free Zone formation (DMCC, JAFZA, DIFC)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Trade license applications & renewals
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Corporate bank account opening support
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>PRO services & government liaison
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Setup Your Business →
          </a>
        </div>

        <!-- Service 04: NRI Support -->
        <div class="rv d1 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">📋</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">NRI & Indian Investor Support</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>RBI / FEMA compliance for property
              purchase
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Repatriation of rental income to India
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>India-UAE DTAA advisory
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Power of Attorney for remote purchase
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] line-height-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>No UAE visit required for entire
              purchase
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            NRI Enquiry →
          </a>
        </div>

        <!-- Service 05: Relocation -->
        <div class="rv d2 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">💼</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">Relocation & Lifestyle</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>School admissions for children
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Healthcare registration & insurance
              setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>DEWA utility connections & setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Furnished rental sourcing during
              construction
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Concierge support in Dubai on arrival
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Plan Your Move →
          </a>
        </div>

        <!-- Service 06: Advisory -->
        <div class="rv d3 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">📊</div>
          <h4 class="font-serif font-light text-white text-[1.04rem] mb-[.72rem]">Investment Advisory</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Free portfolio strategy & ROI modelling
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Off-plan vs ready property analysis
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Developer credibility & due diligence
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Mortgage & financing guidance
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 text-[.74rem] leading-[1.55] font-light">
              <span class="text-gold text-[.62rem] mt-[.06rem] shrink-0">→</span>Exit strategy & resale market advisory
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.62rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Free Advisory Call →
          </a>
        </div>

      </div>

      <!-- Bottom CTA Bar -->
      <div
        class="rv bg-gold/10 border border-gold/20 p-8 md:p-[2rem_2.5rem] mt-6 flex flex-wrap items-center justify-between gap-8">
        <div>
          <h4 class="font-serif font-light text-white text-[1.18rem] mb-[.32rem]">
            One Point of Contact. Complete Dubai Solutions.
          </h4>
          <p class="text-white/50 text-[.76rem] leading-[1.7] font-light max-w-[560px]">
            From investment decision to keys in hand, Golden Visa, registered office, or landing with your family —
            Rising Nexus Infra is your single trusted partner.
          </p>
        </div>
        <a href="https://wa.me/919910587006"
          class="gbtn shrink-0 px-9 py-3.5 bg-gold text-[#0d1b2e] font-sans text-[.68rem] tracking-[.22em] uppercase font-semibold no-underline inline-block whitespace-nowrap">
          WhatsApp Us Now
        </a>
      </div>

    </div>
  </section>

  <!-- ══ DEVELOPERS — solid light bg, guaranteed navy text ══ -->
  <section id="devs" class="bg-[#f8f4ee] py-[5.5rem] px-6 md:px-[3.5rem]">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Developer Network
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Every Leading <em class="italic text-gold">UAE Developer</em>
        </h2>
        <p class="text-navy/60 text-[.87rem] leading-[1.82] max-w-[550px] font-light">
          Through HOD Real Estate, Rising Nexus clients access Dubai's complete developer ecosystem — including
          pre-launch allocations unavailable to the general market.
        </p>
      </div>

      <!-- Developer Grid: 2 cols on mobile, 3 on tablet, 5 on desktop -->
      <!-- Note: Empty div maintained for your JS injection if logos are loaded via script -->
      <div id="devgrid" class="rv d1 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-[1.25rem] mt-10">
      </div>

    </div>
  </section>

  <!-- ══ PROCESS ══ -->
  <section id="process" class="bg-[#f8f4ee] py-[5.5rem] px-6 md:px-[3.5rem] border-t border-gold/10">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          How It Works
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Your <em class="italic text-gold">Dubai Journey</em>
        </h2>
        <p class="text-navy/60 text-[.87rem] leading-[1.82] max-w-[550px] font-light">
          From your first enquiry in India to keys in Dubai — managed entirely by our team.
        </p>
      </div>

      <!-- Process Steps Grid -->
      <div class="relative grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-8 mt-12">

        <!-- Connecting Line (Desktop Only) -->
        <div class="hidden lg:block absolute top-[21px] left-[10%] right-[10%] h-px bg-gold/20"></div>

        <!-- Step 01 -->
        <div class="rv d1 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            1
          </div>
          <h5 class="text-navy text-[.75rem] font-medium mb-[.35rem]">Free Consultation</h5>
          <p class="text-navy/55 text-[.69rem] leading-[1.65] font-light">
            Share budget, goals and timeline. We advise on areas, developers, timing and visa strategy.
          </p>
        </div>

        <!-- Step 02 -->
        <div class="rv d2 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            2
          </div>
          <h5 class="text-navy text-[.75rem] font-medium mb-[.35rem]">Curated Shortlist</h5>
          <p class="text-navy/55 text-[.69rem] leading-[1.65] font-light">
            Hand-picked properties including pre-launch allocations. ROI projections provided.
          </p>
        </div>

        <!-- Step 03 -->
        <div class="rv d3 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            3
          </div>
          <h5 class="text-navy text-[.75rem] font-medium mb-[.35rem]">Developer Meeting</h5>
          <p class="text-navy/55 text-[.69rem] leading-[1.65] font-light">
            Direct introductions to developer teams. Virtual or in-person Dubai site tours at no cost.
          </p>
        </div>

        <!-- Step 04 -->
        <div class="rv d4 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            4
          </div>
          <h5 class="text-navy text-[.75rem] font-medium mb-[.35rem]">Transaction & DLD</h5>
          <p class="text-navy/55 text-[.69rem] leading-[1.65] font-light">
            SPA, DLD registration, escrow, payment plan and all documentation end-to-end.
          </p>
        </div>

        <!-- Step 05 -->
        <div class="rv d1 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            5
          </div>
          <h5 class="text-navy text-[.75rem] font-medium mb-[.35rem]">Visa & Beyond</h5>
          <p class="text-navy/55 text-[.69rem] leading-[1.65] font-light">
            Golden Visa, business setup, rental management — we stay with you long after handover.
          </p>
        </div>

      </div>
    </div>
  </section>

  <!-- ══ CONTACT ══ -->
  <section id="contact" class="bg-white py-[5.5rem] px-6 md:px-[3.5rem]">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv">
        <div
          class="inline-flex items-center gap-[.65rem] text-gold text-[.62rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Get in Touch
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,2.9rem)] leading-[1.16] mb-[.85rem]">
          Begin Your <em class="italic text-gold">Dubai</em> Journey
        </h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.15fr] gap-12 lg:gap-20 mt-11">

        <!-- Left Column: Info -->
        <div class="rv">
          <p class="text-navy/60 text-[.87rem] leading-[1.87] font-light mb-8">
            Whether you're investing for the first time or expanding a portfolio, our advisory team — backed by 5+ years
            on-ground Dubai experience — guides every step through our HOD Real Estate partnership.
          </p>

          <div class="flex flex-col gap-4">
            <!-- India Office -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">🇮🇳
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/40 font-normal">India Office</div>
                <div class="text-[.84rem] text-navy font-light mt-[.18rem]">B-743, Tower B, IThum, Sector 62, Noida, UP
                </div>
              </div>
            </div>

            <!-- Dubai Office -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">🇦🇪
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/40 font-normal">Dubai Office</div>
                <div class="text-[.84rem] text-navy font-light mt-[.18rem]">Dubai, UAE — HOD Real Estate Partnership
                </div>
              </div>
            </div>

            <!-- Phone India -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">📞
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/40 font-normal">India — Phone / WhatsApp
                </div>
                <div class="text-[.84rem] text-navy font-light mt-[.18rem]">
                  <a href="tel:+919910587006" class="hover:text-gold transition-colors">+91 99105 87006</a>
                </div>
              </div>
            </div>

            <!-- Phone Dubai -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">📞
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/40 font-normal">Dubai — Direct Line</div>
                <div class="text-[.84rem] text-navy font-light mt-[.18rem]">
                  <a href="tel:+971585787006" class="hover:text-gold transition-colors">+971 58 578 7006</a>
                </div>
              </div>
            </div>

            <!-- Email -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">✉</div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/40 font-normal">Email</div>
                <div class="text-[.84rem] text-navy font-light mt-[.18rem]">
                  <a href="mailto:sales@risingnexusinfra.com"
                    class="hover:text-gold transition-colors">sales@risingnexusinfra.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Form -->
        <div class="rv d2">
          <form id="cform" class="flex flex-col gap-[.8rem]">

            <div class="grid grid-cols-2 gap-[.8rem]">
              <div>
                <label class="ff-lbl">Salutation</label>
                <select class="ff-sel w-full">
                  <option>Mr.</option>
                  <option>Mrs.</option>
                  <option>Ms.</option>
                  <option>Dr.</option>
                  <option>Prof.</option>
                </select>
              </div>
              <div>
                <label class="ff-lbl">Country</label>
                <select class="ff-sel w-full">
                  <option>India</option>
                  <option>UAE</option>
                  <option>United Kingdom</option>
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Australia</option>
                  <option>Singapore</option>
                  <option>Saudi Arabia</option>
                  <option>Other</option>
                </select>
              </div>
            </div>

            <div>
              <label class="ff-lbl">Full Name *</label>
              <input type="text" required placeholder="Your full name"
                class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label class="ff-lbl">Phone / WhatsApp *</label>
                <input type="tel" required placeholder="+91 or +971…"
                  class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
              </div>
              <div>
                <label class="ff-lbl">Email Address</label>
                <input type="email" placeholder="your@email.com"
                  class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label class="ff-lbl">Interested In</label>
                <select class="ff-sel w-full">
                  <option value="">Select service</option>
                  <option>Buying Property</option>
                  <option>10-Year Golden Visa</option>
                  <option>2-Year Investor Visa</option>
                  <option>Business Setup</option>
                  <option>NRI Advisory</option>
                  <option>Relocation</option>
                  <option>All of the Above</option>
                </select>
              </div>
              <div>
                <label class="ff-lbl">Investor Type</label>
                <select class="ff-sel w-full">
                  <option value="">Select type</option>
                  <option>First-Time Dubai Buyer</option>
                  <option>NRI / Overseas Indian</option>
                  <option>Existing Dubai Investor</option>
                  <option>Own Residence</option>
                  <option>Golden Visa Seeker</option>
                  <option>Business Owner</option>
                </select>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label class="ff-lbl">Property Type</label>
                <select class="ff-sel w-full">
                  <option value="">Select type</option>
                  <option>Apartment — Studio</option>
                  <option>Apartment — 1BR</option>
                  <option>Apartment — 2BR</option>
                  <option>Apartment — 3BR+</option>
                  <option>Penthouse</option>
                  <option>Villa</option>
                  <option>Townhouse</option>
                  <option>Commercial / Office</option>
                </select>
              </div>
              <div>
                <label class="ff-lbl">Budget (AED)</label>
                <select class="ff-sel w-full">
                  <option value="">Select budget</option>
                  <option>Under AED 500K</option>
                  <option>AED 500K – 1M</option>
                  <option>AED 1M – 2M</option>
                  <option>AED 2M – 3M</option>
                  <option>AED 3M – 5M</option>
                  <option>AED 5M – 10M</option>
                  <option>AED 10M+</option>
                </select>
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label class="ff-lbl">Investment Purpose</label>
                <select class="ff-sel w-full">
                  <option value="">Select purpose</option>
                  <option>Rental Income</option>
                  <option>Capital Appreciation</option>
                  <option>Both Rental + Growth</option>
                  <option>Own Residence</option>
                  <option>Holiday Home</option>
                  <option>Golden Visa</option>
                </select>
              </div>
              <div>
                <label class="ff-lbl">Timeline</label>
                <select class="ff-sel w-full">
                  <option value="">Select timeline</option>
                  <option>Within 1 month</option>
                  <option>1–3 months</option>
                  <option>3–6 months</option>
                  <option>6–12 months</option>
                  <option>Just exploring</option>
                </select>
              </div>
            </div>

            <div>
              <label class="ff-lbl">Preferred Area / Community</label>
              <select class="ff-sel w-full">
                <option value="">Select preferred area</option>
                <optgroup label="── Downtown & Central ──">
                  <option>Downtown Dubai</option>
                  <option>Business Bay</option>
                  <option>DIFC</option>
                </optgroup>
                <!-- ... other optgroups stay exactly same ... -->
                <option value="open">Open to Advisor Recommendation</option>
              </select>
            </div>

            <div>
              <label class="ff-lbl">Message / Specific Requirements</label>
              <textarea rows="4" placeholder="E.g. off-plan only, specific developer, Golden Visa..."
                class="ff-ta w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none"></textarea>
            </div>

            <button type="submit"
              class="gbtn self-start px-9 py-[.84rem] bg-gold text-navy font-sans text-[.7rem] tracking-[.22em] uppercase font-semibold border-none cursor-pointer hover:opacity-90 transition-opacity">
              Send Enquiry →
            </button>

            <div id="fok"
              class="hidden border border-gold/30 bg-gold/10 text-navy text-[.78rem] p-[.85rem_1.1rem] font-light">
              ✓ Thank you — our Dubai advisory team will contact you within 24 hours.
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- ══ FOOTER ══ -->
  <footer class="bg-[#0d1b2e] border-t border-gold/12 py-14 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[2fr_1fr_1fr] gap-12 lg:gap-16">

      <!-- Brand Section -->
      <div>
        <a href="https://www.risingnexusinfra.com" class="flex items-center gap-3 no-underline group">
          <div
            class="w-[38px] h-[38px] border border-gold flex items-center justify-center font-serif text-[1.05rem] text-gold transition-colors group-hover:bg-gold/10">
            RN
          </div>
          <div>
            <div class="text-white text-[0.72rem] tracking-[.14em] uppercase font-normal">
              Rising Nexus Infra
            </div>
            <div class="text-gold text-[0.56rem] tracking-[.24em] uppercase font-light">
              Where Infra Connects Future & Growth
            </div>
          </div>
        </a>
        <p class="text-white/30 text-[0.72rem] line-height-[1.76] mt-4 max-w-[265px] font-light">
          Dubai Real Estate, Residency & Business Setup advisory in exclusive partnership with HOD Real Estate, UAE.
        </p>
      </div>

      <!-- Navigate Section -->
      <div>
        <h4 class="text-gold text-[0.58rem] tracking-[.22em] uppercase mb-[1.1rem] font-normal">
          Navigate
        </h4>
        <div class="flex flex-col gap-[0.6rem]">
          <a href="#market"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Market
            Intelligence</a>
          <a href="#dubaisouth"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Dubai South
            Focus</a>
          <a href="#visa"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Visa Rules
            2026</a>
          <a href="#explore"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Area
            Explorer</a>
          <a href="#yields"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Yield
            Table</a>
          <a href="#why"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Why Dubai</a>
          <a href="#contact"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Contact</a>
        </div>
      </div>

      <!-- Contact Section -->
      <div>
        <h4 class="text-gold text-[0.58rem] tracking-[.22em] uppercase mb-[1.1rem] font-normal">
          Contact
        </h4>
        <div class="flex flex-col gap-[0.6rem]">
          <a href="tel:+919910587006"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">India: +91
            99105 87006</a>
          <a href="tel:+971585787006"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Dubai: +971
            58 578 7006</a>
          <a href="mailto:sales@risingnexusinfra.com"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">sales@risingnexusinfra.com</a>
          <a href="https://hodrealestates.com" target="_blank"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">HOD Real
            Estate Dubai ↗</a>
          <a href="https://www.risingnexusinfra.com/dholera"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Dholera Smart
            City</a>
          <a href="https://www.risingnexusinfra.com"
            class="text-white/35 text-[0.72rem] no-underline font-light hover:text-gold transition-colors">Rising Nexus
            Home ↗</a>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div
      class="max-w-[1240px] mx-auto mt-9 pt-6 border-t border-gold/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-left">
      <p class="text-white/20 text-[0.58rem] font-light">
        © 2025 Rising Nexus Infra. All rights reserved.
      </p>
      <p class="text-white/20 text-[0.58rem] font-light">
        Data: DLD · Bayut 2025 · Knight Frank · Cavendish Maxwell · Property Monitor
      </p>
    </div>
  </footer>

  <!-- WA FAB (WhatsApp Floating Button) -->
  <a href="https://wa.me/919910587006" target="_blank" title="WhatsApp"
    class="fixed bottom-8 right-8 z-[999] w-[52px] h-[52px] bg-[#25d366] rounded-full flex items-center justify-center no-underline shadow-[0_4px_22px_rgba(37,211,102,0.45)] transition-transform duration-250 hover:scale-110 active:scale-95">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="white">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
    </svg>
  </a>

  <!-- ═══════════════════ JAVASCRIPT ═══════════════════ -->
  <script>
    // ── NAV ──
    window.addEventListener('scroll', function() {
      var n = document.getElementById('nav');
      n.style.padding = scrollY > 60 ? '.72rem 3.5rem' : '1rem 3.5rem';
    });

    // ── VIDEO ──
    (function() {
      var v = document.getElementById('hv');
      if (!v) return;
      v.addEventListener('load', function() {
        v.classList.add('on');
      });
      setTimeout(function() {
        if (!v.classList.contains('on')) v.style.display = 'none';
      }, 5000);
    })();

    // ══ AREAS DATA — 31 verified coords ══
    var areas = [{
        id: 'downtown',
        name: 'Downtown Dubai',
        icon: '🏙',
        lat: 25.1975,
        lng: 55.2796,
        tags: ['luxury', 'landmark'],
        types: ['Apartments', 'Penthouses'],
        from: 'AED 1.5M+',
        roi: '5–6.5%',
        desc: 'Heart of modern Dubai — Burj Khalifa, Dubai Mall, Dubai Opera. Prices up 5–13% in 2025. Strong short-term rental performance. HNWI demand consistent year-round.',
        filters: ['luxury']
      },
      {
        id: 'marina',
        name: 'Dubai Marina',
        icon: '⛵',
        lat: 25.0808,
        lng: 55.1425,
        tags: ['waterfront', 'luxury'],
        types: ['Apartments', 'Studios'],
        from: 'AED 800K+',
        roi: '6–7%',
        desc: '3.5km waterfront promenade, yacht clubs and fine dining. Prices up 4% H1 2025. Excellent short-term rental market. Metro and tram connected throughout.',
        filters: ['luxury', 'waterfront']
      },
      {
        id: 'palm',
        name: 'Palm Jumeirah',
        icon: '🌴',
        lat: 25.1005,
        lng: 55.1400,
        tags: ['waterfront', 'ultra-luxury'],
        types: ['Villas', 'Penthouses', 'Apartments'],
        from: 'AED 3M+',
        roi: '4.5–6%',
        desc: "World's most iconic man-made island. Residential fronds with branded villas and apartments. HNWI demand consistently strong. Flagship wealth-preservation trophy asset.",
        filters: ['luxury', 'waterfront']
      },
      {
        id: 'businessbay',
        name: 'Business Bay',
        icon: '🏢',
        lat: 25.1888,
        lng: 55.2630,
        tags: ['commercial', 'off-plan'],
        types: ['Apartments', 'Offices'],
        from: 'AED 700K+',
        roi: '6.5–7.92%',
        desc: "Dubai's canal-side business district adjacent to Downtown. Studios yield 7.92%. Top transaction zone in 2025. Strong professional tenant demand year-round.",
        filters: ['offplan', 'highyield']
      },
      {
        id: 'jvc',
        name: 'JVC',
        icon: '🏘',
        lat: 25.0609,
        lng: 55.2100,
        tags: ['community', 'high-yield'],
        types: ['Apartments', 'Townhouses', 'Villas'],
        from: 'AED 450K+',
        roi: '7.5–8.5%',
        desc: "Most-searched investment community in 2025 (Bayut Annual Report). Mid-tier villa prices up 17–28%. Dubai's best yield-value sweet spot — family-friendly and fast-appreciating.",
        filters: ['community', 'offplan', 'highyield']
      },
      {
        id: 'dubaiHills',
        name: 'Dubai Hills Estate',
        icon: '⛳',
        lat: 25.1100,
        lng: 55.2500,
        tags: ['community', 'golf'],
        types: ['Villas', 'Apartments', 'Townhouses'],
        from: 'AED 1.5M+',
        roi: '5.2–8%',
        desc: "Emaar's 18-hole golf community. 5-bed villa rents surged 79.5% H1 2025 on tight supply. Dubai Hills Mall, premium schools and hospital all within community.",
        filters: ['community', 'luxury']
      },
      {
        id: 'damacLagoons',
        name: 'DAMAC Lagoons',
        icon: '🏊',
        lat: 25.0130,
        lng: 55.2120,
        tags: ['community', 'off-plan'],
        types: ['Villas', 'Townhouses'],
        from: 'AED 1.2M+',
        roi: '6–8%',
        desc: 'Mediterranean-inspired resort community with crystal lagoons (Portofino, Marbella, Morocco clusters). Most demanded off-plan family address in Dubai 2025.',
        filters: ['offplan', 'community']
      },
      {
        id: 'creekharbour',
        name: 'Dubai Creek Harbour',
        icon: '🌊',
        lat: 25.2002,
        lng: 55.3600,
        tags: ['waterfront', 'off-plan'],
        types: ['Apartments', 'Penthouses'],
        from: 'AED 900K+',
        roi: '6–7%',
        desc: "Emaar's flagship eco-waterfront city. Future Dubai Creek Tower set to surpass Burj Khalifa. Long-term appreciation with Emaar's full infrastructure backing.",
        filters: ['waterfront', 'offplan']
      },
      {
        id: 'jlt',
        name: 'JLT',
        icon: '🏗',
        lat: 25.0700,
        lng: 55.1400,
        tags: ['community', 'commercial'],
        types: ['Apartments', 'Offices'],
        from: 'AED 500K+',
        roi: '7–8%',
        desc: '80+ towers around four man-made lakes next to Marina. Metro-connected, very liquid secondary market. Affordable entry vs Marina. Popular with young professionals.',
        filters: ['community', 'highyield']
      },
      {
        id: 'meydan',
        name: 'Meydan / Sobha Hartland',
        icon: '🐎',
        lat: 25.1744,
        lng: 55.3040,
        tags: ['community', 'luxury'],
        types: ['Villas', 'Apartments'],
        from: 'AED 1.8M+',
        roi: '5–7%',
        desc: 'Meydan Racecourse and Sobha Hartland forest villas minutes from Downtown. MBR City villa prices up 5.62–40.2% in 2025 (DLD). Outstanding long-term appreciation.',
        filters: ['luxury', 'community']
      },
      {
        id: 'motorcity',
        name: 'Motor City',
        icon: '🏎',
        lat: 25.0520,
        lng: 55.2305,
        tags: ['community', 'mid-market'],
        types: ['Apartments', 'Villas'],
        from: 'AED 600K+',
        roi: '7–8%',
        desc: 'Self-contained community around Dubai Autodrome. Affordable with strong yields. Well-established amenities and growing family population.',
        filters: ['community', 'highyield']
      },
      {
        id: 'dubaisouth',
        name: 'Dubai South / Expo City',
        icon: '✈',
        lat: 24.9749,
        lng: 55.1738,
        tags: ['off-plan', 'mega-project'],
        types: ['Apartments', 'Villas', 'Townhouses'],
        from: 'AED 500K+',
        roi: '7.5–8%',
        desc: "Dubai's fastest-rising corridor. Al Maktoum International Airport: world's largest by 2030 (AED 128B investment). Best 5-year capital appreciation play at still-affordable entry prices.",
        filters: ['offplan', 'highyield']
      },
      {
        id: 'arabiranches',
        name: 'Arabian Ranches 1/2/3',
        icon: '🌵',
        lat: 25.0510,
        lng: 55.2680,
        tags: ['community', 'villas'],
        types: ['Villas', 'Townhouses'],
        from: 'AED 2.5M+',
        roi: '5–6%',
        desc: "Most popular luxury villa community per Bayut 2025. Price-per-sqft up 11.1–15.7%. Emaar's award-winning trilogy — established, leafy, and family-oriented.",
        filters: ['community', 'luxury']
      },
      {
        id: 'albarsha',
        name: 'Al Barsha',
        icon: '🌆',
        lat: 25.1122,
        lng: 55.1981,
        tags: ['established', 'central'],
        types: ['Apartments', 'Villas'],
        from: 'AED 550K+',
        roi: '6–7.5%',
        desc: 'Established central area next to Mall of the Emirates with metro access. Consistent professional tenant demand. Strong school options and community amenities.',
        filters: ['community']
      },
      {
        id: 'deira',
        name: 'Deira / Old Dubai',
        icon: '🕌',
        lat: 25.2697,
        lng: 55.3248,
        tags: ['heritage', 'high-yield'],
        types: ['Apartments', 'Commercial'],
        from: 'AED 320K+',
        roi: '7.5–9%',
        desc: "Dubai's historic heart — gold and spice souks. Government-backed Deira Waterfront regeneration underway. Slight rent dip in 2025 creates buy-low window with long-term upside.",
        filters: ['highyield']
      },
      {
        id: 'bluewater',
        name: 'Bluewaters Island',
        icon: '🎡',
        lat: 25.0773,
        lng: 55.1217,
        tags: ['waterfront', 'ultra-luxury'],
        types: ['Apartments', 'Penthouses'],
        from: 'AED 2M+',
        roi: '5–6.5%',
        desc: "Ultra-premium island off JBR — home to Ain Dubai (world's largest observation wheel). Limited supply ensures exclusivity. Direct beach access and branded amenities.",
        filters: ['luxury', 'waterfront']
      },
      {
        id: 'dso',
        name: 'Dubai Silicon Oasis',
        icon: '💻',
        lat: 25.1178,
        lng: 55.3800,
        tags: ['tech-zone', 'high-yield'],
        types: ['Apartments', 'Villas'],
        from: 'AED 400K+',
        roi: '7–8.5%',
        desc: "2025's top price growth story — up 29% on Metro Blue Line announcement (Bayut Annual Report). Government-backed tech free zone. Growing expat population drives strong rental demand.",
        filters: ['community', 'highyield']
      },
      {
        id: 'intlcity',
        name: 'International City',
        icon: '🌏',
        lat: 25.1659,
        lng: 55.4143,
        tags: ['budget', 'ultra-yield'],
        types: ['Studios', 'Apartments'],
        from: 'AED 280K+',
        roi: '9–10%',
        desc: "Dubai's highest gross yield zone — 9-10% in 2025 per Bayut Annual Report. Country-themed clusters. Prices up 9–29% in affordable segment. Maximum cash-flow for investors.",
        filters: ['highyield']
      },
      {
        id: 'jvt',
        name: 'JVT',
        icon: '🔺',
        lat: 25.0505,
        lng: 55.1993,
        tags: ['community', 'value'],
        types: ['Apartments', 'Villas', 'Townhouses'],
        from: 'AED 500K+',
        roi: '7–8%',
        desc: 'Quieter, more affordable neighbour to JVC. Strong villa supply and competitive yields. Ideal for family-sized units at lower entry prices.',
        filters: ['community', 'highyield']
      },
      {
        id: 'alfurjan',
        name: 'Al Furjan',
        icon: '🏡',
        lat: 25.0230,
        lng: 55.1550,
        tags: ['community', 'value'],
        types: ['Apartments', 'Villas', 'Townhouses'],
        from: 'AED 550K+',
        roi: '7.72–8.51%',
        desc: 'Most popular mid-tier villa area H1 2025 per Bayut. Studios yield 8.51%. Metro-connected. Mid-tier villa prices up 17–28%. Strong secondary market activity.',
        filters: ['community', 'highyield']
      },
      {
        id: 'sportscity',
        name: 'Dubai Sports City',
        icon: '🏟',
        lat: 25.0376,
        lng: 55.2210,
        tags: ['community', 'mid-market'],
        types: ['Apartments', 'Villas'],
        from: 'AED 500K+',
        roi: '7–8%',
        desc: 'Community around ICC Academy and Els Club golf. Affordable with strong professional tenant demand. Good connectivity and consistently stable rental zone.',
        filters: ['community', 'highyield']
      },
      {
        id: 'damachills',
        name: 'DAMAC Hills',
        icon: '⛳',
        lat: 25.0347,
        lng: 55.2461,
        tags: ['community', 'golf'],
        types: ['Villas', 'Townhouses', 'Apartments'],
        from: 'AED 700K+',
        roi: '7.62–7.86%',
        desc: 'Trump International Golf Club community. Villas up 20.7% per DLD 2025. Luxury apt yield 7.62%; Green Community 7.86% per Bayut 2025. Active secondary market.',
        filters: ['community']
      },
      {
        id: 'townsquare',
        name: 'Town Square Dubai',
        icon: '🏙',
        lat: 25.0200,
        lng: 55.2403,
        tags: ['community', 'affordable'],
        types: ['Apartments', 'Townhouses', 'Villas'],
        from: 'AED 400K+',
        roi: '7–8%',
        desc: "Nshama's master community on one of the region's largest parks. Mid-tier villa yield 8% (Bayut 2025). 3–11% affordable villa rental surge. Excellent family value.",
        filters: ['community', 'highyield']
      },
      {
        id: 'mbrcity',
        name: 'MBR City / District One',
        icon: '🏆',
        lat: 25.1650,
        lng: 55.2770,
        tags: ['luxury', 'off-plan'],
        types: ['Villas', 'Mansions'],
        from: 'AED 5M+',
        roi: '5–7%',
        desc: "Villa transactions up 5.62–40.2% in 2025 per DLD. District One: world's largest crystal lagoon. Limited supply, strong HNWI demand. Robust capital appreciation trajectory.",
        filters: ['luxury', 'offplan']
      },
      {
        id: 'sobha2',
        name: 'Sobha Hartland 2',
        icon: '🌿',
        lat: 25.1939,
        lng: 55.3186,
        tags: ['luxury', 'waterfront'],
        types: ['Apartments', 'Villas'],
        from: 'AED 1.5M+',
        roi: '5.5–7%',
        desc: "Sobha Realty's premium waterfront expansion next to Ras Al Khor. Forest villas and luxury apartments. Renowned for Sobha's exceptional build quality.",
        filters: ['luxury', 'offplan', 'waterfront']
      },
      {
        id: 'emirateshills',
        name: 'Emirates Hills',
        icon: '👑',
        lat: 25.0843,
        lng: 55.1680,
        tags: ['ultra-luxury', 'exclusive'],
        types: ['Mansions', 'Villas'],
        from: 'AED 25M+',
        roi: '3–5%',
        desc: "Dubai's most prestigious gated enclave — the 'Beverly Hills of Dubai'. Custom-built mansions on championship golf. Home to royalty and billionaires.",
        filters: ['luxury']
      },
      {
        id: 'jbr',
        name: 'JBR / The Walk',
        icon: '🏖',
        lat: 25.0810,
        lng: 55.1356,
        tags: ['waterfront', 'tourist'],
        types: ['Apartments', 'Hotels'],
        from: 'AED 1.2M+',
        roi: '5.5–7%',
        desc: "1.7km promenade, 300+ restaurants, direct beach access. Exceptional short-term rental yields. Strong year-round tourist and expat demand. Tram-connected.",
        filters: ['waterfront', 'luxury']
      },
      {
        id: 'difc',
        name: 'DIFC',
        icon: '🏦',
        lat: 25.2122,
        lng: 55.2797,
        tags: ['luxury', 'commercial'],
        types: ['Apartments', 'Offices'],
        from: 'AED 1.8M+',
        roi: '5–6.5%',
        desc: "Dubai International Financial Centre — MENA hub for global banks and law firms. Gate Avenue residences command premium rents from senior finance professionals.",
        filters: ['luxury']
      },
      {
        id: 'arjan',
        name: 'Arjan / Dubailand',
        icon: '🌺',
        lat: 25.0556,
        lng: 55.2170,
        tags: ['community', 'off-plan'],
        types: ['Apartments', 'Studios'],
        from: 'AED 400K+',
        roi: '7.5–8.5%',
        desc: 'Key off-plan zone: Samana, Ellington, Reportage, Binghatti all active here. Prices up 9–29% in 2025. Near Miracle Garden. Strong off-plan ROI potential.',
        filters: ['offplan', 'community', 'highyield']
      },
      {
        id: 'tilalalghaf',
        name: 'Tilal Al Ghaf',
        icon: '🌊',
        lat: 25.0222,
        lng: 55.2361,
        tags: ['community', 'off-plan'],
        types: ['Villas', 'Townhouses'],
        from: 'AED 2M+',
        roi: '5.5–7%',
        desc: "Majid Al Futtaim's flagship lagoon community with 70,000 sq m recreational lagoon. Halo and Aura residences — Dubai's most sought-after off-plan products in 2025.",
        filters: ['community', 'offplan']
      },
      {
        id: 'greens',
        name: 'The Greens / The Views',
        icon: '🌳',
        lat: 25.0921,
        lng: 55.1705,
        tags: ['established', 'community'],
        types: ['Apartments'],
        from: 'AED 650K+',
        roi: '6–7.5%',
        desc: 'Mature, leafy communities adjacent to Media City. Low-rise park-facing apartments with metro access. Popular with media/tech professionals. Stable, consistent rental zone.',
        filters: ['community']
      },
    ];

    // ── MAP ──
    var map = L.map('dmap', {
      center: [25.13, 55.22],
      zoom: 11,
      zoomControl: true,
      attributionControl: false
    });
    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
      maxZoom: 19
    }).addTo(map);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/light_only_labels/{z}/{x}/{y}{r}.png', {
      maxZoom: 19,
      opacity: .9
    }).addTo(map);

    function mkico(on) {
      var s = on ? 16 : 10;
      return L.divIcon({
        className: '',
        html: '<div style="width:' + s + 'px;height:' + s + 'px;background:' + (on ? '#c9a45c' : 'rgba(201,164,92,.88)') + ';border-radius:50%;border:' + (on ? '2.5px solid #fff' : '1.5px solid rgba(255,255,255,.65)') + ';box-shadow:0 0 ' + (on ? 18 : 8) + 'px rgba(201,164,92,' + (on ? 1 : .55) + ');transition:all .3s"></div>',
        iconSize: [s, s],
        iconAnchor: [s / 2, s / 2]
      });
    }
    var aid = null,
      mks = {},
      cf = 'all';

    function sel(id) {
      var a = areas.find(function(x) {
        return x.id === id;
      });
      if (!a) return;
      if (aid && mks[aid]) mks[aid].setIcon(mkico(false));
      aid = id;
      if (mks[id]) mks[id].setIcon(mkico(true));
      // update list highlight
      var L2 = document.getElementById('alist');
      L2.querySelectorAll('.arow').forEach(function(el) {
        var isOn = el.getAttribute('data-id') === id;
        el.style.background = isOn ? 'rgba(201,164,92,.13)' : '';
        el.style.borderLeft = isOn ? '2px solid #c9a45c' : '';
      });
      // ✅ SCROLL — getBoundingClientRect, always reliable
      var ae = L2.querySelector('[data-id="' + id + '"]');
      if (ae) {
        var lr = L2.getBoundingClientRect(),
          ir = ae.getBoundingClientRect();
        L2.scrollTo({
          top: L2.scrollTop + (ir.top - lr.top) - (L2.clientHeight / 2) + (ae.clientHeight / 2),
          behavior: 'smooth'
        });
      }
      // detail panel
      document.getElementById('adet').innerHTML = `
          <div class="font-serif font-light text-gold text-[1rem]">
            ${a.icon} ${a.name}
          </div>
          
          <div class="text-white/45 text-[0.7rem] leading-[1.65] mt-[0.3rem] font-light">
            ${a.desc}
          </div>
          
          <div class="flex gap-[1.2rem] mt-[0.62rem]">
            <!-- Starting Price -->
            <div>
              <span class="block text-white font-normal text-[0.8rem]">${a.from}</span>
              <span class="block text-white/28 text-[0.52rem] uppercase tracking-[0.1em] mt-[0.2rem]">
                Starting From
              </span>
            </div>
            
            <!-- ROI -->
            <div>
              <span class="block text-white font-normal text-[0.8rem]">${a.roi}</span>
              <span class="block text-white/28 text-[0.52rem] uppercase tracking-[0.1em] mt-[0.2rem]">
                Gross ROI
              </span>
            </div>
            
            <!-- Property Types -->
            <div>
              <span class="block text-white font-normal text-[0.8rem]">${a.types.join(' / ')}</span>
              <span class="block text-white/28 text-[0.52rem] uppercase tracking-[0.1em] mt-[0.2rem]">
                Property Types
              </span>
            </div>
          </div>
        `;
      // ✅ fly at zoom 13 — avoids showing mostly sea
      map.flyTo([a.lat, a.lng], 13, {
        animate: true,
        duration: 1.3,
        easeLinearity: .5
      });
    }
    window.sel = sel;

    function buildList(fl, q) {
      var el = document.getElementById('alist');
      var f = areas.filter(function(a) {
        return (fl === 'all' || a.filters.indexOf(fl) >= 0) && (!q || a.name.toLowerCase().indexOf((q || '').toLowerCase()) >= 0);
      });

      document.getElementById('zct').textContent = f.length + ' Prime District' + (f.length !== 1 ? 's' : '');

      el.innerHTML = f.map(function(a) {
        // Check if this is the active/selected ID
        const isActive = a.id === aid;
        const activeClass = isActive ? 'bg-gold/10' : 'hover:bg-gold/7';

        return `
      <div class="arow ${activeClass} flex items-start gap-[0.72rem] py-[0.78rem] px-[1.4rem] border-b border-white/5 cursor-pointer transition-colors duration-150" 
           data-id="${a.id}" 
           onclick="sel('${a.id}')">
        
        <!-- Icon Box -->
        <div class="w-[27px] h-[27px] shrink-0 border border-gold/20 flex items-center justify-center text-[0.74rem]">
          ${a.icon}
        </div>
        
        <!-- Content -->
        <div class="flex-1 min-w-0">
          <div class="text-white font-normal text-[0.76rem] truncate">
            ${a.name}
          </div>
          
          <!-- Tags -->
          <div class="flex gap-[0.28rem] flex-wrap mt-[0.22rem]">
            ${a.tags.slice(0, 2).map(function (t) {
          return `
                <span class="text-[0.52rem] tracking-[0.08em] uppercase px-[0.36rem] py-[0.1rem] bg-gold/10 text-gold border border-gold/18">
                  ${t}
                </span>`;
        }).join('')}
          </div>
          
          <!-- Meta Info -->
          <div class="text-white/30 text-[0.6rem] mt-[0.18rem]">
            ${a.from} · ${a.roi} yield
          </div>
        </div>
      </div>`;
      }).join('') || '<div class="p-6 text-white/22 text-[0.73rem]">No areas match.</div>';
    }
    areas.forEach(function(a) {
      var m = L.marker([a.lat, a.lng], {
          icon: mkico(false)
        }).addTo(map)
        .bindPopup(`
      <div class="font-serif text-gold text-[0.95rem] mb-[0.28rem] font-light">
        ${a.icon} ${a.name}
      </div>
      <div class="text-white/52 text-[0.74rem]">
        ${a.types.join(' · ')}
      </div>
      <div class="text-green-400 text-[0.68rem] mt-[0.28rem] font-normal">
        Yield: ${a.roi} · ${a.from}
      </div>
    `, {
          maxWidth: 240
        })
        .on('click', function() {
          sel(a.id);
        });
      mks[a.id] = m;
    });
    buildList('all', '');
    document.querySelectorAll('.map-fb').forEach(function(b) {
      b.addEventListener('click', function() {
        document.querySelectorAll('.map-fb').forEach(function(x) {
          x.classList.remove('fbon');
          x.style.background = '';
          x.style.color = 'rgba(13,27,46,.55)';
          x.style.borderColor = 'rgba(201,164,92,.28)';
        });
        b.classList.add('fbon');
        cf = b.getAttribute('data-f');
        buildList(cf, document.getElementById('asrch').value);
      });
    });

    // ── PROPERTIES ──
    var props = [{
        nm: 'Binghatti Luxuria',
        dev: 'Binghatti',
        loc: 'JVC, Dubai',
        tp: 'offplan',
        pt: 'apartment',
        price: 'AED 649K',
        badge: 'Off-Plan',
        roi: '7.8% ROI',
        img: 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
      {
        nm: 'Bayz 102',
        dev: 'Danube Properties',
        loc: 'Business Bay',
        tp: 'offplan',
        pt: 'apartment',
        price: 'AED 895K',
        badge: 'Off-Plan',
        roi: '7.2% ROI',
        img: 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
      {
        nm: 'DAMAC Bay 2',
        dev: 'DAMAC Group',
        loc: 'Dubai Harbour',
        tp: 'offplan',
        pt: 'apartment',
        price: 'AED 1.75M',
        badge: 'Off-Plan',
        roi: '6.5% ROI',
        img: 'https://images.unsplash.com/photo-1560448204-603b3fc33ddc?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
      {
        nm: 'Safa Gate',
        dev: 'DAMAC Group',
        loc: 'Al Safa, Dubai',
        tp: 'ready',
        pt: 'apartment',
        price: 'AED 1.1M',
        badge: 'Ready',
        roi: '5.9% ROI',
        img: 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
      {
        nm: 'Sobha Sanctuary',
        dev: 'Sobha Realty',
        loc: 'Sobha Hartland 2',
        tp: 'offplan',
        pt: 'villa',
        price: 'AED 4.5M',
        badge: 'Off-Plan',
        roi: '6.1% ROI',
        img: 'https://images.unsplash.com/photo-1523217582562-09d0def993a6?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
      {
        nm: 'Samana Ibiza',
        dev: 'Samana Developers',
        loc: 'Arjan, Dubailand',
        tp: 'offplan',
        pt: 'apartment',
        price: 'AED 549K',
        badge: 'Off-Plan',
        roi: '8.2% ROI',
        img: 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=600&q=80',
        link: 'https://hodrealestates.com'
      },
    ];

    function rprops(f) {
      var g = document.getElementById('pgrid');
      var ft = props.filter(function(p) {
        return f === 'all' || p.tp === f || p.pt === f;
      });

      g.innerHTML = ft.map(function(p) {
        return `
      <div class="group bg-white border border-gold/15 overflow-hidden transition-all duration-400 cursor-pointer hover:-translate-y-[6px] hover:shadow-[0_22px_60px_rgba(13,27,46,0.14)]">
        
        <!-- Image Container -->
        <div class="h-[198px] overflow-hidden relative">
          <img src="${p.img}" alt="${p.nm}" loading="lazy" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.07]">
          
          <!-- Badge -->
          <div class="absolute top-[0.85rem] left-[0.85rem] bg-[#0d1b2e] border border-gold/28 text-gold text-[0.54rem] tracking-[0.16em] uppercase px-[0.7rem] py-[0.26rem]">
            ${p.badge}
          </div>
          
          <!-- ROI Tag -->
          <div class="absolute top-[0.85rem] right-[0.85rem] bg-green-700/88 text-white text-[0.54rem] tracking-[0.12em] uppercase px-[0.7rem] py-[0.26rem]">
            ${p.roi}
          </div>
        </div>

        <!-- Content Box -->
        <div class="p-[1.2rem]">
          <div class="text-gold text-[0.56rem] tracking-[0.2em] uppercase mb-[0.3rem] font-normal">
            ${p.dev}
          </div>
          
          <div class="font-serif font-light text-[#0d1b2e] text-[1.12rem] leading-[1.28] mb-[0.38rem]">
            ${p.nm}
          </div>
          
          <div class="text-[#0d1b2e]/42 text-[0.7rem] font-light">
            ◇ ${p.loc}
          </div>

          <!-- Footer Info -->
          <div class="flex justify-between items-end mt-[0.95rem] pt-[0.95rem] border-t border-gold/10">
            <div>
              <div class="font-serif font-light text-[#0d1b2e] text-[1.18rem]">
                ${p.price}
              </div>
              <div class="text-[#0d1b2e]/38 text-[0.58rem] font-light">
                Starting From
              </div>
            </div>
            
            <a href="${p.link}" target="_blank" 
               class="text-gold text-[0.6rem] tracking-[0.14em] uppercase border-b border-gold/25 pb-[1px] no-underline hover:text-[#0d1b2e] transition-colors">
               Enquire ↗
            </a>
          </div>
        </div>
      </div>`;
      }).join('');
    }
    rprops('all');
    document.querySelectorAll('.prop-fb').forEach(function(b) {
      b.addEventListener('click', function() {
        document.querySelectorAll('.prop-fb').forEach(function(x) {
          x.classList.remove('fbon');
          x.style.background = '';
          x.style.color = 'rgba(13,27,46,.55)';
          x.style.borderColor = 'rgba(201,164,92,.28)';
        });
        b.classList.add('fbon');
        rprops(b.getAttribute('data-pf'));
      });
    });

    // ══ DEVELOPERS — inline SVG text logos (always work, no external deps) ══
    var devs = [
      // Brand-colored text logos matching each developer's identity
      {
        nm: 'Emaar Properties',
        ct: 'Master Developer',
        col: '#0060AC',
        txt: '#fff',
        abbr: 'EMAAR'
      },
      {
        nm: 'DAMAC Group',
        ct: 'Luxury Specialist',
        col: '#8B1A22',
        txt: '#fff',
        abbr: 'DAMAC'
      },
      {
        nm: 'Sobha Realty',
        ct: 'Premium Quality',
        col: '#4A1E1E',
        txt: '#fff',
        abbr: 'SOBHA'
      },
      {
        nm: 'Nakheel',
        ct: 'Iconic Communities',
        col: '#006A8E',
        txt: '#fff',
        abbr: 'NAKHEEL'
      },
      {
        nm: 'Aldar Properties',
        ct: 'UAE Leader',
        col: '#003087',
        txt: '#fff',
        abbr: 'ALDAR'
      },
      {
        nm: 'Meraas',
        ct: 'Lifestyle Developer',
        col: '#1A1A2E',
        txt: '#c9a45c',
        abbr: 'MERAAS'
      },
      {
        nm: 'Binghatti',
        ct: 'Architectural Icons',
        col: '#C8963C',
        txt: '#fff',
        abbr: 'BINGHATTI'
      },
      {
        nm: 'Danube Properties',
        ct: 'Affordable Luxury',
        col: '#C41E3A',
        txt: '#fff',
        abbr: 'DANUBE'
      },
      {
        nm: 'Samana Developers',
        ct: 'Resort-Style Living',
        col: '#2D5F5D',
        txt: '#fff',
        abbr: 'SAMANA'
      },
      {
        nm: 'Ellington Properties',
        ct: 'Design-Led Homes',
        col: '#2C2C3E',
        txt: '#c9a45c',
        abbr: 'ELLINGTON'
      },
      {
        nm: 'Omniyat',
        ct: 'Ultra-Luxury',
        col: '#0D1B2E',
        txt: '#c9a45c',
        abbr: 'OMNIYAT'
      },
      {
        nm: 'Azizi Developments',
        ct: 'Diverse Portfolio',
        col: '#B8860B',
        txt: '#fff',
        abbr: 'AZIZI'
      },
      {
        nm: 'MAG Group',
        ct: 'Wellness Living',
        col: '#1C5B7A',
        txt: '#fff',
        abbr: 'MAG'
      },
      {
        nm: 'Deyaar',
        ct: 'Trusted Developer',
        col: '#002B5C',
        txt: '#fff',
        abbr: 'DEYAAR'
      },
      {
        nm: 'Dubai Properties',
        ct: 'Govt-Backed',
        col: '#006F62',
        txt: '#fff',
        abbr: 'DPG'
      },
      {
        nm: 'Select Group',
        ct: 'Waterfront Towers',
        col: '#2B5F3A',
        txt: '#fff',
        abbr: 'SELECT'
      },
      {
        nm: 'Nshama',
        ct: 'Town Communities',
        col: '#7A4A2A',
        txt: '#fff',
        abbr: 'NSHAMA'
      },
      {
        nm: 'Vincitore',
        ct: 'Italian-Inspired',
        col: '#7A1A3A',
        txt: '#fff',
        abbr: 'VINCITORE'
      },
      {
        nm: 'Imtiaz Developments',
        ct: 'Boutique Projects',
        col: '#1A3A5C',
        txt: '#fff',
        abbr: 'IMTIAZ'
      },
      {
        nm: 'Object1',
        ct: 'Design Forward',
        col: '#1A1A2E',
        txt: '#e8c87a',
        abbr: 'OBJ1'
      },
      {
        nm: 'Reportage Properties',
        ct: 'High-ROI Focus',
        col: '#3A2A1A',
        txt: '#c9a45c',
        abbr: 'REPORTAGE'
      },
      {
        nm: 'Tiger Group',
        ct: 'Commercial & Resi',
        col: '#FF6B00',
        txt: '#fff',
        abbr: 'TIGER'
      },
      {
        nm: 'Iman Developers',
        ct: 'Boutique Luxury',
        col: '#1A5A3A',
        txt: '#fff',
        abbr: 'IMAN'
      },
      {
        nm: 'Prescott',
        ct: 'Prime Locations',
        col: '#2E1A5A',
        txt: '#fff',
        abbr: 'PRESCOTT'
      },
      {
        nm: 'Wasl Properties',
        ct: 'Mixed-Use',
        col: '#008080',
        txt: '#fff',
        abbr: 'WASL'
      },
      {
        nm: 'Majid Al Futtaim',
        ct: 'Lifestyle Leader',
        col: '#003087',
        txt: '#fff',
        abbr: 'MAF'
      },
      {
        nm: 'Darglobal',
        ct: 'Ultra-Premium',
        col: '#0D1B2E',
        txt: '#c9a45c',
        abbr: 'DARGLOBAL'
      },
      {
        nm: 'Dugasta Properties',
        ct: 'Off-Plan Leader',
        col: '#1A2A5A',
        txt: '#fff',
        abbr: 'DUGASTA'
      },
      {
        nm: 'Levante Properties',
        ct: 'Mediterranean Style',
        col: '#2A5A2A',
        txt: '#fff',
        abbr: 'LEVANTE'
      },
      {
        nm: 'Refine Development',
        ct: 'Bespoke Homes',
        col: '#1A3A3A',
        txt: '#c9a45c',
        abbr: 'REFINE'
      },
    ];

    (function() {
      var g = document.getElementById('devgrid');
      g.innerHTML = devs.map(function(d) {
        // Dynamic Font Size logic (same as before)
        var fontSize = d.abbr.length > 7 ? 'text-[.52rem]' : d.abbr.length > 5 ? 'text-[.6rem]' : 'text-[.68rem]';

        return '<div class="dev-card">'
          // Brand-colored Box
          +
          '<div class="w-full h-[52px] flex items-center justify-center mb-[.65rem] px-2 rounded-[3px]" style="background:' + d.col + '">' +
          '<span class="' + fontSize + ' font-sans font-semibold tracking-[.12em] uppercase text-center leading-[1.3]" style="color:' + d.txt + '">' +
          d.abbr +
          '</span>' +
          '</div>'
          // Developer Name
          +
          '<div class="text-navy text-[.72rem] font-medium leading-[1.3] text-center">' +
          d.nm +
          '</div>'
          // Category/City
          +
          '<div class="text-navy/40 text-[.54rem] tracking-[.08em] uppercase mt-[.18rem] text-center font-light">' +
          d.ct +
          '</div>' +
          '</div>';
      }).join('');
    })();

    // ── FORM ──
    document.getElementById('cform').addEventListener('submit', function(e) {
      e.preventDefault();
      document.getElementById('fok').style.display = 'block';
      this.querySelector('button[type=submit]').disabled = true;
      this.querySelector('button[type=submit]').textContent = 'Sent ✓';
    });

    // ── SCROLL REVEAL ──
    (function() {
      var o = new IntersectionObserver(function(entries) {
        entries.forEach(function(e) {
          if (e.isIntersecting) {
            e.target.classList.add('vis');
            o.unobserve(e.target);
          }
        });
      }, {
        threshold: .08
      });
      document.querySelectorAll('.rv').forEach(function(el) {
        o.observe(el);
      });
    })();
  </script>
</body>

</html>