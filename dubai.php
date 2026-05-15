<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <?php include "include/head.php" ?>
  <link rel="canonical" href="https://risingnexusinfra.com/dubai" />
  <title>Dubai Real Estate | Rising Nexus Infra</title>
  <meta name="description" content="Explore premium real estate and investment opportunities in Dubai with Rising Nexus Infra. We provide trusted property and infrastructure solutions." />
</head>

<body class="font-sans font-light bg-cream" style="color:#0d1b2e" x-data="{mob:false}">

  <!-- ══ NAV ══ -->
  <?php include "include/header.php" ?>

  <!-- Backdrop Overlay -->
  <div x-show="mob" @click="mob=false" class="fixed inset-0 bg-black/40 z-[2998]">
  </div>

  <!-- ══ HERO ══ -->
  <section id="home" class="min-h-screen relative overflow-hidden flex items-end pb-12 md:pb-24">

    <!-- Background Layers -->
    <div class="absolute inset-0 z-0 overflow-hidden bg-navy">
      <!-- Fallback Dubai skyline image -->
      <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=1920&q=90')] bg-[center_60%] bg-cover bg-no-repeat">
      </div>

      <!-- Local Video Layer -->
      <video
        autoplay
        muted
        loop
        playsinline
        class="absolute inset-0 w-full h-full object-cover">
        <source src="assets/images/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
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
      <div class="inline-flex items-center gap-3 border border-gold/40 px-5 py-2 mb-8">
        <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
        <span class="text-gold text-[0.8rem] tracking-[0.32em] uppercase font-bold">
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
      <p class="text-white/60 text-[1rem] leading-[1.88] max-w-[490px] mb-10 font-light">
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
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 214,000+ Transactions in 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ AED 682B+ Total Market Value 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Dubai South: World's Largest Airport by 2030 — Al Maktoum International
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 2-Year Investor Visa: No Minimum — April 2026
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Golden Visa: 50% Upfront Rule Removed — Feb 2026
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ Q1 2026: AED 138.7B across 44,150 Deals — +21.2% YoY
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ International City: Up to 10% Gross Yield — Bayut 2025
      </span>
      <span class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 shrink-0">
        ◆ DSO: +29% Price Growth 2025 — Metro Blue Line Effect
      </span>

      <!-- Duplicate (Infinite loop ke liye) -->
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ 214,000+ Transactions in 2025 — DLD
      </span>
      <span
        class="text-navy text-[0.8rem] tracking-[0.17em] uppercase font-semibold px-10 border-r border-navy/12 shrink-0">
        ◆ AED 682B+ Total Market Value 2025 — DLD
      </span>
    </div>
  </div>

  <!-- ══ STATS ══ -->
  <div class="bg-n2 border-b border-gold/40 py-8 md:py-10 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-8 gap-x-4">

      <!-- Stat 1 -->
      <div class="text-center px-5 border-r-0 md:border-r border-gold/10 last:border-r-0">
        <div class="font-sans font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          214K+
        </div>
        <div class="text-white/70 text-[0.7rem] tracking-[0.18em] uppercase mt-1.5">
          Transactions 2025
        </div>
        <div class="text-gold text-[0.6rem] uppercase tracking-wider mt-1">
          DLD
        </div>
      </div>

      <!-- Stat 2 -->
      <div class="text-center px-5 border-r-0 lg:border-r border-gold/10 last:border-r-0">
        <div class="font-sans font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          AED 682B
        </div>
        <div class="text-white/70 text-[0.7rem] tracking-[0.18em] uppercase mt-1.5">
          Market Value 2025
        </div>
        <div class="text-gold text-[0.6rem] uppercase tracking-wider mt-1">
          DLD / DXB Interact
        </div>
      </div>

      <!-- Stat 3 -->
      <div class="text-center px-5 border-r-0 md:border-r border-gold/10 last:border-r-0">
        <div class="font-sans font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          6.8%
        </div>
        <div class="text-white/70 text-[0.7rem] tracking-[0.18em] uppercase mt-1.5">
          Avg Gross Yield 2025
        </div>
        <div class="text-gold text-[0.6rem] uppercase tracking-wider mt-1">
          Bayut / Cavendish Maxwell
        </div>
      </div>

      <!-- Stat 4 -->
      <div class="text-center px-5 border-r-0 lg:border-r border-gold/10 last:border-r-0">
        <div class="font-sans font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          94,700
        </div>
        <div class="text-white/70 text-[0.7rem] tracking-[0.18em] uppercase mt-1.5">
          New Investors H1 2025
        </div>
        <div class="text-gold text-[0.6rem] uppercase tracking-wider mt-1">
          Dubai Land Dept
        </div>
      </div>

      <!-- Stat 5 -->
      <div class="text-center px-5 last:border-r-0 col-span-2 md:col-span-1">
        <div class="font-sans font-light text-gold text-2xl md:text-3xl lg:text-[2rem] leading-none">
          131,504
        </div>
        <div class="text-white/70 text-[0.7rem] tracking-[0.18em] uppercase mt-1.5">
          Units Launched 2025
        </div>
        <div class="text-gold text-[0.6rem] uppercase tracking-wider mt-1">
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
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.9rem] text-semibold tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Live Market Intelligence · H1 2026
        </div>

        <h2 class="font-serif font-light text-white leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[3rem]">
          What Every Investor <em class="text-gold italic">Needs to Know</em>
        </h2>

        <p class="text-white/60 text-[1rem] leading-[1.82] max-w-[550px] font-light">
          Cross-referenced from Dubai Land Department, Bayut Annual Report 2025, Knight Frank Q1 2025, Cavendish Maxwell
          H1 2025.
        </p>

        <div class="inline-flex items-center gap-2 border border-gold/40 px-3 py-1 mt-3 text-gold text-[0.7rem] tracking-widest uppercase">
          Sources: DLD · Bayut 2025 · Knight Frank · Cavendish Maxwell · Property Monitor DPI
        </div>
      </div>

      <!-- Intelligence Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-gold/10 border border-gold/10 mt-10 md:mt-12">

        <!-- Card 1 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d1">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            Full Year 2025 · DLD
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            Record 214,000+ Transactions
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
            Dubai closed 2025 with <strong class="text-gold font-normal">214,000+ transactions worth AED 682B+</strong>
            — 18.82% YoY surge. Q1 2025 alone: 45,000 sales worth AED 142B. Off-plan reached <strong class="text-gold font-normal">65–72% of all deals</strong>, powered by post-handover payment plans.
          </p>
        </div>

        <!-- Card 2 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d2">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            Q1 2026 · DLD / Khaleej Times
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            2026 Momentum Accelerating
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
            Q1 2026 delivered <strong class="text-gold font-normal">AED 138.7B across 44,150 deals</strong> — +21.2% value YoY.
            Average deal size grew to AED 3.3M. January 2026 alone: <strong class="text-gold font-normal">AED 53.6B across 16,000+ transactions</strong> — a historic monthly record.
          </p>
        </div>

        <!-- Card 3 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d3">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            2025 · Bayut Annual Report
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            Price Appreciation — All Tiers
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
            Apartment prices surged <strong class="text-gold font-normal">up to 29% in 2025</strong>. Dubai Silicon Oasis led (+29%, Metro Blue Line). Affordable villa prices climbed <strong class="text-gold font-normal">up to 28%</strong>. DAMAC Hills: <strong class="text-gold font-normal">+20.7% villa transaction growth</strong> per DLD.
          </p>
        </div>

        <!-- Card 4 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d1">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            H1 2025 · Bayut / DLD
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            World-Class Rental Yields
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
            City-wide average: <strong class="text-gold font-normal">~6.8% in 2025</strong>. Top zones: International City <strong class="text-gold font-normal">9–10%</strong>, Discovery Gardens 9.47%, Dubai South 7.5–8%. Dubai Hills villa rents: <strong class="text-gold font-normal">+79.5%</strong> H1 2025 on critically tight supply.
          </p>
        </div>

        <!-- Card 5 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d2">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            H1 2025 · DLD
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            Indians Lead All Nationalities
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
            DLD: <strong class="text-gold font-normal">94,700 investors H1 2025</strong> (+26%). 59,000 were new buyers.
            <strong class="text-gold font-normal">Indians consistently top-3 nationalities</strong>. 87% of 2025 transactions were cash. Off-plan ROI averaged <strong class="text-gold font-normal">8–12% annually</strong>.
          </p>
        </div>

        <!-- Card 6 -->
        <div class="group bg-n2 p-8 transition-colors duration-300 hover:bg-n3 rv d3">
          <span class="inline-block border border-gold/40 text-gold text-[0.7rem] tracking-widest uppercase px-2.5 py-1 mb-3.5">
            2026 Outlook · Knight Frank
          </span>
          <h3 class="font-serif font-light text-white text-[2rem] mb-2.5">
            Sustainable Growth Through 2027
          </h3>
          <p class="text-white/60 text-[1rem] leading-[1.78] font-light">
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
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.9rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Dubai's Hottest Investment Corridor · 2025–2030
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[3rem]">
          Dubai South & <em class="not-italic text-gold italic">Al Maktoum International Airport</em>
        </h2>

        <p class="text-navy/60 text-[1rem] leading-[1.82] max-w-[620px] font-light">
          The single biggest infrastructure-driven property opportunity of this decade — a 145 sq km mega-city built
          around the world's largest airport. Entry prices are still affordable. Appreciation potential is exceptional.
        </p>
      </div>

      <!-- Main Grid Content -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mt-11">

        <!-- Left Column: Key Facts (Dark Card) -->
        <div class="bg-navy p-8 md:p-10 border border-gold/20 rv d1">
          <h3 class="font-serif font-normal text-gold text-[2rem] mb-6">
            Al Maktoum Airport — The Facts
          </h3>

          <div class="flex flex-col gap-6 md:gap-8">
            <!-- Fact 1 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[1rem] shrink-0 mt-1">✈</div>
              <div>
                <div class="text-white text-[1rem] font-normal mb-1">World's Largest Airport — When Complete</div>
                <div class="text-white/50 text-[0.9rem] leading-relaxed font-light">
                  Al Maktoum International will handle 260 million passengers/year — surpassing Dubai International (DXB)
                  which currently handles ~90M. Phased completion targeted through 2030.
                </div>
              </div>
            </div>

            <!-- Fact 2 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[1rem] shrink-0 mt-1">🏗</div>
              <div>
                <div class="text-white text-[1rem] font-normal mb-1">AED 128 Billion Investment</div>
                <div class="text-white/50 text-[0.9rem] leading-relaxed font-light">
                  The UAE government is committing AED 128B to airport development — the largest single infrastructure
                  investment in UAE history. This directly underpins all surrounding property values.
                </div>
              </div>
            </div>

            <!-- Fact 3 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[1rem] shrink-0 mt-1">🏘</div>
              <div>
                <div class="text-white text-[1rem] font-normal mb-1">Expo City — Legacy of Expo 2020</div>
                <div class="text-white/50 text-[0.9rem] leading-relaxed font-light">
                  The Expo site has transformed into Expo City — a thriving mixed-use hub with residential,
                  commercial, and tourism infrastructure already operational.
                </div>
              </div>
            </div>

            <!-- Fact 4 -->
            <div class="flex gap-4 items-start">
              <div class="text-gold text-[1rem] shrink-0 mt-1">📈</div>
              <div>
                <div class="text-white text-[1rem] font-normal mb-1">Affordable Entry — Now</div>
                <div class="text-white/50 text-[0.9rem] leading-relaxed font-light">
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
            <div class="font-serif text-gold text-[2rem] md:text-3xl lg:text-[1.85rem] leading-none">
              7.5–8%
            </div>
            <div class="text-navy/70 text-[0.7rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Current Gross Yield (Bayut 2025)
            </div>
            <p class="text-navy/62 text-[0.9rem] leading-relaxed mt-2.5 font-light">
              Gross rental yield in Dubai South is already competitive — and set to rise as the airport brings 150,000+
              daily passengers and 50,000+ permanent staff to the area by 2030.
            </p>
          </div>

          <!-- Stat Box 2 -->
          <div class="bg-white border border-gold/18 p-6 border-l-4 border-l-gold shadow-sm">
            <div class="font-serif font-light text-gold text-[2rem] md:text-3xl lg:text-[1.85rem] leading-none">
              AED 500K+
            </div>
            <div class="text-navy/70 text-[0.7rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Entry Price — Apartments
            </div>
            <p class="text-navy/62 text-[0.9rem] leading-relaxed mt-2.5 font-light">
              Lowest entry point in Dubai for a new property near a major transport hub. Compare: properties near
              Heathrow (London) sell at £800K+. This is the equivalent opportunity — at a fraction of the cost.
            </p>
          </div>

          <!-- Stat Box 3 -->
          <div class="bg-white border border-gold/18 p-6 border-l-4 border-l-gold shadow-sm">
            <div class="font-serif font-light text-gold text-[2rem] md:text-3xl lg:text-[1.85rem] leading-none">
              145 sq km
            </div>
            <div class="text-navy/70 text-[0.7rem] tracking-[0.15em] uppercase mt-1 font-normal">
              Dubai South Masterplan Area
            </div>
            <p class="text-navy/62 text-[0.9rem] leading-relaxed mt-2.5 font-light">
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
  <section id="visa" class="bg-white py-20 md:py-24 px-6 md:px-14">
    <div class="max-w-[1240px] mx-auto">

      <!-- Header Section -->
      <div class="rv text-left">
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.9rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Updated April 2026 · Official UAE Rules
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[3rem]">
          Residency by <em class="not-italic text-gold italic">Property Investment</em>
        </h2>

        <p class="text-navy/60 text-[1rem] leading-[1.82] max-w-[550px] font-light">
          Three official UAE visa pathways — with landmark 2026 changes making Dubai property ownership more accessible
          than ever for Indian and global investors.
        </p>
      </div>

      <!-- Visa Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-11">

        <!-- Card 1: 2-Year Investor Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/20 rv d1">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/70 text-[0.7rem] tracking-[0.22em] uppercase mb-2">Entry-Level Residency</div>
          <h3 class="font-serif font-normal text-navy text-[2rem] leading-tight mb-4"><span class="font-fair">2-</span>Year Investor Visa</h3>

          <div class="font-serif font-light text-gold text-[2.5rem] leading-none">Any Value</div>
          <span class="inline-block bg-green-500/10 text-green-600 border border-green-500/25 text-[0.6rem] tracking-widest uppercase px-2 py-1 mt-1.5">
            New — Apr 2026
          </span>

          <div class="text-navy/70 text-[0.8rem] font-light mt-1.5 mb-4">No minimum property value for sole owners</div>
          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">Rule changed April 2026:</strong> AED 750K minimum fully eliminated for sole owners</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Joint owners: each share must be AED 400,000+</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Apply via DLD Cube Centre digital portal</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Renewable every 2 years; family not included</span>
            </li>
          </ul>
        </div>

        <!-- Card 2: 5-Year Retirement Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/20 rv d2">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/70 text-[0.7rem] tracking-[0.22em] uppercase mb-2">Retirement Pathway</div>
          <h3 class="font-serif font-light text-navy text-[2rem] leading-tight mb-4"><span class="font-fair">5-</span>Year Retirement Visa</h3>

          <div class="font-serif font-light text-gold text-[2.5rem] leading-none">AED <span class="font-fair">1</span>M+</div>
          <div class="text-navy/70 text-[0.8rem] font-light mt-2.5 mb-4">Minimum property value</div>

          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>For retirees aged 55+</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>AED 1M+ property — or AED 1M savings — or AED 20K/month income</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Family sponsorship included</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>No requirement to reside full-time in UAE</span>
            </li>
          </ul>
        </div>

        <!-- Card 3: 10-Year Golden Visa -->
        <div class="group relative bg-white border border-gold/18 p-8 md:p-9 overflow-hidden transition-all duration-300 hover:-translate-y-1.5 hover:shadow-2xl hover:shadow-navy/20 rv d3">
          <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-[#9f7c3b] via-gold to-[#e8c87a]"></div>

          <div class="text-navy/70 text-[0.7rem] tracking-[0.22em] uppercase mb-2">Premium Long-Term</div>
          <h3 class="font-serif font-light text-navy text-[2rem] leading-tight mb-3"><span class="font-fair">10-</span>Year Golden Visa</h3>

          <div class="font-serif font-light text-gold text-[2.5rem] leading-none">AED <span class="font-fair">2</span>M+</div>
          <span class="inline-block bg-green-500/10 text-green-600 border border-green-500/25 text-[0.6rem] tracking-widest uppercase px-2 py-1 mt-1.5">
            2 Rule Changes 2026
          </span>

          <div class="text-navy/70 text-[0.8rem] font-light mt-1.5 mb-4">50% upfront requirement removed — Feb 2026</div>
          <div class="w-6.5 h-px bg-gold/30 my-4"></div>

          <ul class="flex flex-col gap-2.5">
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">50% down payment REMOVED (Feb 2026)</strong> — DLD valuation of AED 2M+ only</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>Off-plan, mortgaged & combined deeds all qualify</span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span><strong class="text-navy font-medium">GDRFA + DLD unified portal (April 2026)</strong></span>
            </li>
            <li class="flex gap-2.5 items-start text-navy/65 text-[0.9rem] leading-relaxed font-light">
              <span class="text-gold text-[0.4rem] mt-1.5 shrink-0">◆</span>
              <span>10-year residency for investor + family (Cost approx. AED 4,710)</span>
            </li>
          </ul>
        </div>

      </div>

      <!-- Bottom Info Box -->
      <div class="bg-navy border border-gold/20 p-8 mt-6 rv">
        <p class="text-white/60 text-[0.9rem] leading-loose font-light">
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
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.9rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Live Satellite Map
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[3rem]">
          Navigate <em class="not-italic text-gold italic">Dubai's</em> Prime Locations
        </h2>

        <p class="text-navy/60 text-[1rem] leading-[1.82] max-w-[550px] font-light mb-7">
          Click any gold pin on the satellite map or choose from the panel. Investment data and ROI insights update
          instantly for each of Dubai's 31 districts.
        </p>
      </div>

      <!-- Filter Bar -->
      <div class="flex flex-wrap gap-2 mb-5 items-center rv d1">
        <span class="text-navy/70 text-[0.7rem] tracking-widest uppercase mr-1">Filter:</span>

        <button
          class="map-fb fbon px-3.5 py-1.5 border border-gold text-gold text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200"
          data-f="all">
          All (31)
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="luxury">
          Luxury
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="offplan">
          Off-Plan
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="community">
          Community
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-f="waterfront">
          Waterfront
        </button>

        <button
          class="map-fb px-3.5 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.7rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
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
            <div class="font-serif text-white text-[1.5rem]">Dubai Investment Zones</div>
            <div id="zct" class="text-white/70 text-[0.8rem] tracking-widest uppercase mt-1">
              31 Prime Districts
            </div>
          </div>

          <!-- Search Box -->
          <div class="px-5 py-3 border-b border-gold/10 shrink-0">
            <input id="asrch" type="text" placeholder="Search areas…" oninput="buildList(cf,this.value)"
              class="w-full bg-white/5 border border-gold/20 text-white font-sans text-[0.8rem] font-light px-3 py-2 outline-none transition-colors duration-200 focus:border-gold placeholder:text-white/20">
          </div>

          <!-- Area List (Scrollable) -->
          <div id="alist" class="mpl flex-1 overflow-y-auto">
            <!-- JS will populate this -->
          </div>

          <!-- Detail Panel (Fixed Bottom) -->
          <div id="adet"
            class="bg-white/5 border-t border-gold/20 p-5 shrink-0 min-h-[115px] flex flex-col justify-center">
            <div class="font-serif text-gold text-[1.5rem]">Select an area to explore</div>
            <div class="text-white/40 text-[0.9rem] leading-relaxed mt-1 font-light">
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
        <div class="inline-flex items-center gap-2.5 text-gold text-[0.9rem] tracking-[0.28em] uppercase mb-3.5">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Featured Listings
        </div>

        <h2 class="font-serif font-light text-navy leading-[1.16] mb-3.5 text-[2rem] md:text-[3.4vw] lg:text-[3rem]">
          Curated <em class="not-italic text-gold italic">Properties</em>
        </h2>
      </div>

      <!-- Filter Bar -->
      <div class="flex flex-wrap gap-2 my-6 md:my-7 items-center rv d1">
        <span class="text-navy/70 text-[0.8rem] tracking-widest uppercase mr-1">Type:</span>

        <button
          class="prop-fb fbon px-4 py-1.5 border border-go70 text-gold text-[0.8rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200"
          data-pf="all">
          All
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.8rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="offplan">
          Off-Plan
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.8rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="ready">
          Ready
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.8rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
          data-pf="apartment">
          Apartments
        </button>

        <button
          class="prop-fb px-4 py-1.5 border border-gold/30 text-navy/70 bg-transparent text-[0.8rem] tracking-widest uppercase cursor-pointer font-sans transition-all duration-200 hover:border-gold hover:text-gold"
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Bayut Annual Report 2025
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Dubai Areas by <em class="italic text-gold">Investment Return</em>
        </h2>
        <p class="text-white/55 text-[1rem] leading-[1.82] max-w-[550px] font-light">
          Gross yields before service charges. Source: Bayut 2025 Annual Report, DLD Smart Rental Index, Cavendish
          Maxwell H1 2025.
        </p>
        <p class="text-gold/80 border border-gold/40 inline px-2 py-1 text-[.9rem] italic mt-[.6rem]">
          💡 Budget zones = max cash flow &nbsp;|&nbsp; Luxury zones = max capital appreciation
        </p>
      </div>

      <div class="overflow-x-auto mt-8 rv d1">
        <table class="w-full border-collapse">
          <thead>
            <tr class="border-b border-gold/20">
              <th class="text-white/50 text-[.8rem] tracking-[.18em] uppercase font-semibold text-left p-[.85rem_1rem]">
                Area</th>
              <th class="text-white/50 text-[.8rem] tracking-[.18em] uppercase font-semibold text-left p-[.85rem_1rem]">
                Segment</th>
              <th class="text-white/50 text-[.8rem] tracking-[.18em] uppercase font-semibold text-left p-[.85rem_1rem]">
                Gross Yield 2025</th>
              <th class="text-white/50 text-[.8rem] tracking-[.18em] uppercase font-semibold text-left p-[.85rem_1rem]">
                From</th>
              <th class="text-white/50 text-[.8rem] tracking-[.18em] uppercase font-semibold text-left p-[.85rem_1rem]">
                Best For</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Dubai Investment Park (DIP)</span><br>
                <span class="text-white/55 text-[.85rem]">Studios / 1BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">9.9%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 330K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Max
                  Cash Flow</span>
              </td>
            </tr>
            <!-- Row 2 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">International City</span><br>
                <span class="text-white/55 text-[.85rem]">Studios / 1BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">9–10%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 280K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Max
                  Cash Flow</span>
              </td>
            </tr>
            <!-- Row 3 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Discovery Gardens</span><br>
                <span class="text-white/55 text-[.85rem]">1-2BR Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Affordable</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">9.47%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 350K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">High
                  Yield</span>
              </td>
            </tr>
            <!-- Row 4 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Al Furjan</span><br>
                <span class="text-white/55 text-[.85rem]">Studios / Villas</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">7.72–8.51%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 550K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Metro
                  Access</span>
              </td>
            </tr>
            <!-- Row 5 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Jumeirah Village Circle (JVC)</span><br>
                <span class="text-white/55 text-[.85rem]">Studios – 3BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">7.5–8.5%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 450K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Yield
                  + Growth</span>
              </td>
            </tr>
            <!-- Row 6 (Featured) -->
            <tr class="border-b border-white/5 bg-gold/5 hover:bg-gold/10 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-gold-lt font-medium text-[.85rem]">✈ Dubai South / Expo City</span><br>
                <span class="text-white/55 text-[.85rem]">Apartments / Townhouses / Villas</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">7.5–8%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 500K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/40 text-gold-lt font-medium text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Airport
                  Upside</span>
              </td>
            </tr>
            <!-- Row 7 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Dubai Silicon Oasis</span><br>
                <span class="text-white/55 text-[.85rem]">Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Tier</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-green-400 text-base">7–8.5%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 400K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Metro
                  Blue Line</span>
              </td>
            </tr>
            <!-- Row 8 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">DAMAC Hills</span><br>
                <span class="text-white/55 text-[.85rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-gold text-base">7.62–7.86%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 700K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Golf
                  + Yield</span>
              </td>
            </tr>
            <!-- Row 9 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Business Bay</span><br>
                <span class="text-white/55 text-[.85rem]">Studios – 2BR</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Mid-Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-gold text-base">6.5–7.92%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 700K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Canal
                  Views</span>
              </td>
            </tr>
            <!-- Row 10 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Dubai Marina</span><br>
                <span class="text-white/55 text-[.85rem]">1-2BR Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-gold text-base">6–7%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 800K+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Short-Term
                  Lets</span>
              </td>
            </tr>
            <!-- Row 11 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Dubai Hills Estate</span><br>
                <span class="text-white/55 text-[.85rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-gold text-base">5.2–8%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 1.5M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Family
                  Luxury</span>
              </td>
            </tr>
            <!-- Row 12 -->
            <tr class="border-b border-white/5 hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Downtown Dubai</span><br>
                <span class="text-white/55 text-[.85rem]">Apartments / Penthouses</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-gold text-base">5–6.5%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 1.5M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Prestige
                  + Growth</span>
              </td>
            </tr>
            <!-- Row 13 -->
            <tr class="hover:bg-gold/5 transition-colors">
              <td class="p-[.85rem_1rem]">
                <span class="text-white font-normal text-[.85rem]">Palm Jumeirah</span><br>
                <span class="text-white/55 text-[.85rem]">Villas / Apartments</span>
              </td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.9rem]">Ultra-Luxury</td>
              <td class="p-[.85rem_1rem] font-fair font-light text-white/50 text-base">4.5–6%</td>
              <td class="p-[.85rem_1rem] text-white/60 text-[.78rem]">AED 3M+</td>
              <td class="p-[.85rem_1rem]">
                <span
                  class="border border-gold/20 text-gold text-[.7rem] tracking-wider uppercase px-[.46rem] py-[.15rem]">Capital
                  Gain</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <p class="text-white/50 text-[.85rem] text-right mt-[1.25rem] italic">
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Investment Advantages
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Why <em class="italic text-gold">Dubai</em> Stands Apart
        </h2>
      </div>

      <!-- Grid Layout: 1 col on mobile, 2 on tablet, 4 on desktop -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[1.2rem] mt-10">

        <!-- Card 01 -->
        <div
          class="rv d1 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">01</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">Zero Tax Environment</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            No income, capital gains, or inheritance tax. Your <strong class="text-gold font-normal">gross yield is your
              net yield</strong>. UK taxes at 20–45%, India at 30%+. Dubai lets you keep every dirham earned.
          </p>
        </div>

        <!-- Card 02 -->
        <div
          class="rv d2 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">02</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">World-Beating Yields</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            Dubai 2025 avg: <strong class="text-gold font-normal">6.8%</strong>. Select zones hit <strong
              class="text-gold font-normal">9–10%</strong>. London 3%, Singapore 3.5%, New York 2.5–4%. No global city
            combines quality and yield like Dubai.
          </p>
        </div>

        <!-- Card 03 -->
        <div
          class="rv d3 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">03</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">New Golden Visa Rules</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">50% upfront removed Feb 2026.</strong> AED 2M DLD valuation qualifies
            — off-plan, mortgaged & combined deeds eligible. Unified GDRFA-DLD portal for faster processing.
          </p>
        </div>

        <!-- Card 04 -->
        <div
          class="rv d4 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">04</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]"><span class="font-fair">2</span>-Year Visa — Any Property</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">AED 750K minimum eliminated April 2026.</strong> Any fully-owned Dubai
            property qualifies for UAE residency. Joint owners need AED 400K share each.
          </p>
        </div>

        <!-- Card 05 -->
        <div
          class="rv d1 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">05</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">Better Value Per Dollar</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            <strong class="text-gold font-normal">$1M buys ~1,000 sq ft in Dubai</strong> vs 172 sq ft in Monaco, 345 sq
            ft in London, 420 sq ft in Hong Kong. Indian investors get 2–4× more space per dollar.
          </p>
        </div>

        <!-- Card 06 -->
        <div
          class="rv d2 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">06</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">Strong Appreciation</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            Apartments up <strong class="text-gold font-normal">to 29% in 2025</strong>. DSO +29% on Metro Blue Line.
            DAMAC Hills villas +20.7%. Affordable and mid-tier communities record sharpest gains city-wide.
          </p>
        </div>

        <!-- Card 07 -->
        <div
          class="rv d3 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">07</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">RERA <span class="font-fair">100</span>% Escrow</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
            All off-plan funds in escrow — released at construction milestones only. <strong
              class="text-gold font-normal">DLD registers every transaction on blockchain.</strong> AI-powered Smart
            Rental Index launched 2025.
          </p>
        </div>

        <!-- Card 08 -->
        <div
          class="rv d4 bg-white/5 border border-gold/20 p-[1.8rem_1.45rem] transition-all duration-300 hover:bg-white/10 hover:border-gold/40">
          <div class="font-serif font-light text-gold/80 text-[1.85rem] leading-none mb-[.95rem]">08</div>
          <h4 class="font-serif font-light text-white text-[1.5rem] mb-[.62rem]">Al Maktoum Airport Boom</h4>
          <p class="text-white/60 text-[1rem] leading-[1.76] font-light">
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          End-to-End Solutions
        </div>
        <h2 class="font-serif font-light text-white text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Beyond Property — <em class="italic text-gold">Complete Dubai Setup</em>
        </h2>
        <p class="text-white/55 text-[1rem] leading-[1.82] max-w-[550px] font-light">
          Rising Nexus handles everything — property to Golden Visa, business licensing and family relocation — all from
          India through one trusted team.
        </p>
      </div>

      <!-- Grid Layout: 1 col on mobile, 2 on tablet, 3 on desktop -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-px bg-gold/10 border border-gold/10 mt-10">

        <!-- Service 01: Property -->
        <div class="rv d1 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🏠</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">Property Investment</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[0.85rem] mt-[.06rem] shrink-0">→</span>Shortlisting across all developers &
              budgets
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[0.85rem] mt-[.06rem] shrink-0">→</span>Pre-launch & off-market via HOD Real
              Estate
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[0.85rem] mt-[.06rem] shrink-0">→</span>SPA review, DLD registration & Title
              Deed
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[0.85rem] mt-[.06rem] shrink-0">→</span>Property management & rental setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[0.85rem] mt-[.06rem] shrink-0">→</span>Portfolio review, resale & exit
              advisory
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Start Property Search →
          </a>
        </div>

        <!-- Service 02: Visa -->
        <div class="rv d2 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🪪</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">UAE Residency & Visa</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>10-Year Golden Visa (AED 2M) —
              end-to-end
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>2-Year Investor Visa — no minimum
              (April 2026)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>5-Year Retirement Visa processing
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Emirates ID & biometrics coordination
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Family sponsorship: spouse, children,
              parents
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Get Visa Support →
          </a>
        </div>

        <!-- Service 03: Business -->
        <div class="rv d3 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">🏢</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">Business Setup in Dubai</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Mainland company registration (DED)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Free Zone formation (DMCC, JAFZA, DIFC)
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Trade license applications & renewals
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Corporate bank account opening support
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>PRO services & government liaison
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Setup Your Business →
          </a>
        </div>

        <!-- Service 04: NRI Support -->
        <div class="rv d1 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">📋</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">NRI & Indian Investor Support</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>RBI / FEMA compliance for property
              purchase
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Repatriation of rental income to India
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>India-UAE DTAA advisory
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Power of Attorney for remote purchase
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 line-height-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>No UAE visit required for entire
              purchase
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            NRI Enquiry →
          </a>
        </div>

        <!-- Service 05: Relocation -->
        <div class="rv d2 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">💼</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">Relocation & Lifestyle</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>School admissions for children
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Healthcare registration & insurance
              setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>DEWA utility connections & setup
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Furnished rental sourcing during
              construction
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Concierge support in Dubai on arrival
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Plan Your Move →
          </a>
        </div>

        <!-- Service 06: Advisory -->
        <div class="rv d3 bg-[#112032] p-[2rem_1.65rem] transition-colors duration-300 hover:bg-[#172d43]">
          <div class="text-[1.45rem] mb-4">📊</div>
          <h4 class="font-serif font-light text-white text-[1.9rem] mb-[.72rem]">Investment Advisory</h4>
          <ul class="list-none flex flex-col gap-[.42rem]">
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Free portfolio strategy & ROI modelling
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Off-plan vs ready property analysis
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Developer credibility & due diligence
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Mortgage & financing guidance
            </li>
            <li class="flex gap-[.52rem] items-start text-white/55 leading-[1.55] font-light">
              <span class="text-gold text-[.85rem] mt-[.06rem] shrink-0">→</span>Exit strategy & resale market advisory
            </li>
          </ul>
          <a href="https://wa.me/919910587006"
            class="inline-flex items-center gap-[.38rem] mt-[1.2rem] text-gold text-[.7rem] tracking-[.15em] uppercase no-underline border-b border-gold/25 pb-[2px]">
            Free Advisory Call →
          </a>
        </div>

      </div>

      <!-- Bottom CTA Bar -->
      <div
        class="rv bg-gold/10 border border-gold/20 p-8 md:p-[2rem_2.5rem] mt-6 flex flex-wrap items-center justify-between gap-8">
        <div>
          <h4 class="font-serif font-light text-white text-[1.8rem] mb-[.32rem]">
            One Point of Contact. Complete Dubai Solutions.
          </h4>
          <p class="text-white/50 text-[.9rem] leading-[1.7] font-light max-w-[560px]">
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Developer Network
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Every Leading <em class="italic text-gold">UAE Developer</em>
        </h2>
        <p class="text-navy/60 text-[1rem] leading-[1.82] max-w-[550px] font-light">
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          How It Works
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Your <em class="italic text-gold">Dubai Journey</em>
        </h2>
        <p class="text-navy/60 text-[1rem] leading-[1.82] max-w-[550px] font-light">
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
          <h5 class="text-navy text-[1rem] font-medium mb-[.35rem]">Free Consultation</h5>
          <p class="text-navy/55 text-[.9rem] leading-[1.65] font-light">
            Share budget, goals and timeline. We advise on areas, developers, timing and visa strategy.
          </p>
        </div>

        <!-- Step 02 -->
        <div class="rv d2 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            2
          </div>
          <h5 class="text-navy text-[1rem] font-medium mb-[.35rem]">Curated Shortlist</h5>
          <p class="text-navy/55 text-[.9rem] leading-[1.65] font-light">
            Hand-picked properties including pre-launch allocations. ROI projections provided.
          </p>
        </div>

        <!-- Step 03 -->
        <div class="rv d3 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            3
          </div>
          <h5 class="text-navy text-[1rem] font-medium mb-[.35rem]">Developer Meeting</h5>
          <p class="text-navy/55 text-[.9rem] leading-[1.65] font-light">
            Direct introductions to developer teams. Virtual or in-person Dubai site tours at no cost.
          </p>
        </div>

        <!-- Step 04 -->
        <div class="rv d4 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            4
          </div>
          <h5 class="text-navy text-[1rem] font-medium mb-[.35rem]">Transaction & DLD</h5>
          <p class="text-navy/55 text-[.9rem] leading-[1.65] font-light">
            SPA, DLD registration, escrow, payment plan and all documentation end-to-end.
          </p>
        </div>

        <!-- Step 05 -->
        <div class="rv d1 text-center group">
          <div
            class="w-[42px] h-[42px] border border-gold rounded-full flex items-center justify-center font-serif text-gold mx-auto mb-4 bg-[#f8f4ee] relative z-10 transition-transform duration-300 group-hover:scale-110">
            5
          </div>
          <h5 class="text-navy text-[1rem] font-medium mb-[.35rem]">Visa & Beyond</h5>
          <p class="text-navy/55 text-[.9rem] leading-[1.65] font-light">
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
          class="inline-flex items-center gap-[.65rem] text-gold text-[.9rem] tracking-[.28em] uppercase mb-[.85rem]">
          <span class="w-[18px] h-[1px] bg-gold inline-block"></span>
          Get in Touch
        </div>
        <h2 class="font-serif font-light text-navy text-[clamp(2rem,3.4vw,3rem)] leading-[1.16] mb-[.85rem]">
          Begin Your <em class="italic text-gold">Dubai</em> Journey
        </h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.15fr] gap-12 lg:gap-20 mt-11">

        <!-- Left Column: Info -->
        <div class="rv">
          <p class="text-navy/60 text-[1rem] leading-[1.87] font-light mb-8">
            Whether you're investing for the first time or expanding a portfolio, our advisory team — backed by 5+ years
            on-ground Dubai experience — guides every step through our HOD Real Estate partnership.
          </p>

          <div class="flex flex-col gap-4">
            <!-- India Office -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">🇮🇳
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/80 font-normal">India Office</div>
                <div class="text-[.9rem] text-navy font-light mt-[.18rem]">B-743, Tower B, IThum, Sector 62, Noida, UP
                </div>
              </div>
            </div>

            <!-- Dubai Office -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">🇦🇪
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/80 font-normal">Dubai Office</div>
                <div class="text-[.9rem] text-navy font-light mt-[.18rem]">Building 11 - 606 - Business Bay - Bay Square - Dubai - United Arab Emirates
                </div>
              </div>
            </div>

            <!-- Phone India -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">📞
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/80 font-normal">India — Phone / WhatsApp
                </div>
                <div class="text-[.9rem] text-navy font-light mt-[.18rem]">
                  <a href="tel:+919910587006" class="hover:text-gold transition-colors">+91 99105 87006</a>
                </div>
              </div>
            </div>

            <!-- Phone Dubai -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">📞
              </div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/80 font-normal">Dubai — Direct Line</div>
                <div class="text-[.9rem] text-navy font-light mt-[.18rem]">
                  <a href="tel:+971585787006" class="hover:text-gold transition-colors">+971 58 578 7006</a>
                </div>
              </div>
            </div>

            <!-- Email -->
            <div class="flex items-start gap-[.85rem]">
              <div class="w-8 h-8 border border-gold/30 flex items-center justify-center text-[.68rem] shrink-0">✉</div>
              <div>
                <div class="text-[.58rem] tracking-[.14em] uppercase text-navy/80 font-normal">Email</div>
                <div class="text-[.9rem] text-navy font-light mt-[.18rem]">
                  <a href="mailto:sales@risingnexusinfra.com"
                    class="hover:text-gold transition-colors">sales@risingnexusinfra.com</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Column: Form -->
        <div class="rv d2">
          <form id="cform" class="flex flex-col gap-[.8rem]" action="mailer/contact-message.php" method="POST">
            <input type="hidden" name="sub" value="Dubai Real Estate !">
            <input type="hidden" name="redirect_url" value="<?= BASE_URL . 'dubai' ?>">
            <div class="grid grid-cols-2 gap-[.8rem]">
              <div>
                <label for="name_prefix" class="ff-lbl">Salutation</label>
                <select class="ff-sel w-full" name="nameprefix" id="name_prefix">
                  <option>Mr.</option>
                  <option>Mrs.</option>
                  <option>Ms.</option>
                  <option>Dr.</option>
                  <option>Prof.</option>
                </select>
              </div>
              <div>
                <label for="user_counter" class="ff-lbl">Country</label>
                <select name="counter" id="user_counter" class="ff-sel w-full">
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
              <label for="full_name" class="ff-lbl">Full Name *</label>
              <input type="text" required placeholder="Your full name" id="full_name" name="name"
                class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label for="user_phone" class="ff-lbl">Phone / WhatsApp *</label>
                <input type="tel" required placeholder="+91 or +971…" name="phone" id="user_phone"
                  class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
              </div>
              <div>
                <label for="user_email" class="ff-lbl">Email Address</label>
                <input type="email" placeholder="your@email.com" name="email" id="user_email"
                  class="ff-in w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-[.8rem]">
              <div>
                <label for="user_interest" class="ff-lbl">Interested In</label>
                <select class="ff-sel w-full" id="user_interest" name="interested_IN">
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
                <label for="inverstor_type" class="ff-lbl">Investor Type</label>
                <select class="ff-sel w-full" id="inverstor_type" name="inverstor_type">
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
                <label for="property_type" class="ff-lbl">Property Type</label>
                <select class="ff-sel w-full" id="property_type" name="Propertyies">
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
                <label for="user_budget" class="ff-lbl">Budget (AED)</label>
                <select class="ff-sel w-full" id="user_budget" name="user_budget">
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
                <label for="investment_purpose" class="ff-lbl">Investment Purpose</label>
                <select class="ff-sel w-full" id="investment_purpose" name="investment">
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
                <label for="timeline" class="ff-lbl">Timeline</label>
                <select class="ff-sel w-full" id="timeline" name="timeline">
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
              <label for="area_comunity" class="ff-lbl">Preferred Area / Community</label>
              <select class="ff-sel w-full" id="area_comunity" name="area_comunity">
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
              <label for="user_message" class="ff-lbl">Message / Specific Requirements</label>
              <textarea rows="4" id="user_message" name="message" placeholder="E.g. off-plan only, specific developer, Golden Visa..."
                class="ff-ta w-full text-navy bg-[#f0e9da] border-gold/20 focus:border-gold focus:bg-white transition-all outline-none"></textarea>
            </div>

            <button type="submit"
              class="gbtn self-start px-9 py-[.84rem] bg-gold text-navy font-sans text-[.7rem] tracking-[.22em] uppercase font-semibold border-none cursor-pointer hover:opacity-90 transition-opacity">
              Send Enquiry →
            </button>
          </form>
        </div>

      </div>
    </div>
  </section>

  <!-- ══ FOOTER ══ -->
  <?php include "include/footer.php"; ?>

  <!-- ═══════════════════ JAVASCRIPT ═══════════════════ -->
  <script src="assets/js/home.js"></script>
  <script src="assets/js/dubai.js"></script>
</body>

</html>