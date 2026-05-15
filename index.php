<!DOCTYPE html>
<html lang="en" x-data="site()" x-init="init()">

<head>
    <?php include "include/head.php" ?>
    <link rel="canonical" href="https://risingnexusinfra.com/" />
    <title>Rising Nexus Infra | Where Infra Connects Future &amp; Growth</title>
    <meta name="description" content="Rising Nexus Infra provides reliable infrastructure, construction, and real estate solutions with quality workmanship and modern development services." />

</head>

<body class="font-sans" @click="handleOutsideClick($event)">

    <!-- ══════════════════════════════════════════════════════════ NAV ══ -->
    <?php include "include/header.php" ?>

    <!-- ══════════════════════════════════════════════════════════ HERO ══ -->
    <section id="home" class="min-h-[calc(100vh-5rem)] flex items-center justify-center relative overflow-hidden bg-white pt-24 md:pt-20">

        <div class="absolute inset-0 pointer-events-none"
            style="background:linear-gradient(135deg,#EAF0FF 0%,#fff 52%,#F5F8EE 100%)"></div>
        <div class="absolute inset-0 grid-overlay opacity-[.042] pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-[620px] h-[620px] rounded-full pointer-events-none"
            style="background:radial-gradient(circle at 70% 30%,rgba(26,77,179,.07) 0%,transparent 65%)"></div>
        <div class="absolute bottom-[-60px] left-[-60px] w-[480px] h-[480px] rounded-full pointer-events-none"
            style="background:radial-gradient(circle,rgba(176,136,64,.06) 0%,transparent 65%)"></div>

        <div class="relative z-10 max-w-[980px] px-6 md:px-8 text-center fade-up">
            <div class="flex items-center justify-center gap-3 md:gap-5 mb-6 md:mb-8">
                <span class="block w-6 md:w-10 h-px bg-goldlt"></span>
                <span
                    class="text-[.6rem] md:text-[.7rem] tracking-[.2em] md:tracking-[.38em] uppercase text-gold font-sans">Infrastructure
                    • Investment • Innovation</span>
                <span class="block w-6 md:w-10 h-px bg-goldlt"></span>
            </div>

            <h1
                class="font-sans font-light leading-[1.1] md:leading-[1.04] tracking-[.01em] text-navy mb-6 text-[2.8rem] sm:text-[3.5rem] md:text-[5rem] lg:text-[6rem]">
                Building the <em class="not-italic text-gold">Infrastructure</em> <br class="hidden md:block"> of
                Tomorrow
            </h1>

            <p
                class="text-[.75rem] md:text-[.88rem] tracking-[.15em] md:tracking-[.22em] uppercase text-rmuted mb-5 font-sans">
                Where Infra Connects Future & Growth</p>

            <div class="w-16 md:w-20 h-[3px] accent-rule mx-auto mb-8 md:mb-10"></div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#projects"
                    class="w-full sm:w-auto text-[.7rem] tracking-[.18em] uppercase bg-gold text-white px-10 py-4 font-medium hover:bg-white hover:bg-gold hover:text-navy hover:border-gold border-[1.5px] transition-colors duration-200 no-underline text-center">
                    Explore Projects
                </a>
                <a href="#contact"
                    class="w-full sm:w-auto text-[.7rem] tracking-[.18em] uppercase border-[1.5px] border-gold text-navy px-10 py-4 hover:bg-gold hover:text-white transition-all duration-200 no-underline text-center">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <style>
        @keyframes fadeUpIn {
            from {
                opacity: 0;
                transform: translateY(28px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>

    <!-- ══════════════════════════════════════════════════════════ ABOUT ══ -->
    <section id="about" class="bg-white py-[5rem] px-5 md:px-16">
        <div class="max-w-[1240px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-[6rem] items-center">

            <!-- Left: Text -->
            <div class="about-text">
                <!-- Section label -->
                <div class="flex items-center gap-3 mb-4">
                    <span class="sec-label-line"></span>
                    <span class="text-[.65rem] tracking-[.35em] uppercase text-rblue font-semibold">About Us</span>
                </div>
                <h2 class="font-sans font-light leading-[1.08] text-navy mb-5"
                    style="font-size:clamp(2.4rem,4vw,3.6rem)">
                    A Vision Built on<br><em class="not-italic text-gold">Enduring Foundations</em>
                </h2>
                <div class="w-14 h-[2px] accent-rule mb-7"></div>

                <div class="space-y-5 text-[1.02rem] leading-[1.95] text-rtxt2">
                    <p><strong class="text-navy font-semibold">Rising Nexus Infra</strong> is a forward-thinking
                        infrastructure development firm operating across India's most strategically significant growth
                        corridors, with an active international presence in Dubai's real estate market.</p>
                    <p>From transformative real estate in Dholera's greenfield smart city and the scenic highlands of
                        Himachal Pradesh, to a thriving Dubai property portfolio, and future ambitions in energy and
                        data center infrastructure — we build where it matters most.</p>
                    <p>Our leadership team's collective expertise spans decades across real estate, logistics, energy,
                        sales, and global consulting — giving Rising Nexus Infra a uniquely multi-dimensional edge. Over
                        the years, we have cultivated a quiet but far-reaching network of relationships across
                        industries, institutions, and geographies that few organisations of our size can claim.</p>
                    <!-- Subtle co-investment note -->
                </div>
            </div>

            <!-- Right: Stats grid -->
            <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                <div
                    class="stat-card border border-rbdr bg-white p-4 md:p-8 relative overflow-hidden cursor-default fade-up">
                    <div class="stat-top absolute top-0 left-0 right-0 h-[3px]"></div>
                    <div class="font-sans font-light text-[2rem] md:text-[3rem] text-navy leading-[1] mb-2">3+</div>
                    <div class="text-[.65rem] tracking-[.2em] uppercase text-rmuted">Active Sectors</div>
                </div>
                <div
                    class="stat-card border border-rbdr bg-white p-4 md:p-8 relative overflow-hidden cursor-default fade-up">
                    <div class="stat-top absolute top-0 left-0 right-0 h-[3px]"></div>
                    <div class="font-sans font-light text-[2rem] md:text-[3rem] text-navy leading-[1] mb-2">2</div>
                    <div class="text-[.65rem] tracking-[.2em] uppercase text-rmuted">Markets — India &amp; Dubai</div>
                </div>
                <div
                    class="stat-card border border-rbdr bg-white p-4 md:p-8 relative overflow-hidden cursor-default fade-up">
                    <div class="stat-top absolute top-0 left-0 right-0 h-[3px]"></div>
                    <div class="font-sans font-light text-[2rem] md:text-[3rem] text-navy leading-[1] mb-2">10+</div>
                    <div class="text-[.65rem] tracking-[.2em] uppercase text-rmuted">Years in Real Estate</div>
                </div>
                <div
                    class="stat-card border border-rbdr bg-white p-4 md:p-8 relative overflow-hidden cursor-default fade-up">
                    <div class="stat-top absolute top-0 left-0 right-0 h-[3px]"></div>
                    <div class="font-sans font-light text-[2rem] md:text-[3rem] text-navy leading-[1] mb-2">60+</div>
                    <div class="text-[.65rem] tracking-[.2em] uppercase text-rmuted">Combined Years of Expertise</div>
                </div>

                <div class="col-span-2">
                    <p class="text-[.92rem] text-rmuted leading-[1.9] border-l-2 border-rbds pl-5 mt-4">
                        We are equally open to growing alongside the right people — whether through co-investment,
                        strategic partnership, or backing new ideas that align with our long-term vision. If you see an
                        opportunity where our combined strengths can create something exceptional, we would like to hear
                        about it.
                    </p>
                    <!-- Address block -->
                    <div class="mt-8 pl-5 py-5 pr-5 border-l-[3px] border-gold bg-goldpal">
                        <p class="text-[.92rem] leading-[1.85] text-rtxt2 m-0">
                            <strong class="text-navy font-semibold block mb-1">Corporate Office</strong>
                            B-743, Tower B, IThum<br>
                            Sector 62, Noida, Uttar Pradesh, India
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════ LEADERSHIP ══ -->
    <section id="team" class="bg-rs2 py-[5rem] px-5 md:px-16">
        <div class="max-w-[1240px] mx-auto">

            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <span class="sec-label-line"></span>
                    <span class="text-[.65rem] tracking-[.35em] uppercase text-rblue font-semibold">Our People</span>
                </div>
                <h2 class="font-sans font-light leading-[1.08] text-navy" style="font-size:clamp(2.4rem,4vw,3.6rem)">
                    Leadership &amp; <em class="not-italic text-gold">Expertise</em>
                </h2>
                <div class="w-14 h-[2px] accent-rule mt-6"></div>
            </div>

            <!-- Unified narrative block -->
            <div class="bg-white border border-rbdr border-t-[3px] border-t-navy fade-up">

                <!-- Narrative text -->
                <div x-data="{ expanded: false }"
                    class="p-5 md:p-8 md:px-10 text-justify border-b border-rbdr space-y-3 text-[1rem] leading-[1.95] text-rtxt2">
                    <p>
                        Rising Nexus Infra is led by a founding team whose combined professional experience spans well
                        over six decades — across real estate, logistics, sales, energy, and global consulting. Rather
                        than operate as specialists in silos, our leadership functions as a unified force: each domain
                        of expertise informing and amplifying the others, creating a firm that is genuinely capable
                        across the full spectrum of infrastructure investment and development.
                    </p>

                    <p>
                        In real estate, our active presence in India's growth corridors dates to 2014, with an
                        additional five-plus years of direct market experience in Dubai — including working
                        relationships with
                        every significant developer in the UAE. In logistics and operations, our leadership brings
                        more
                        than two decades of understanding how physical networks are built, how they move, and how
                        they
                        create lasting asset value. In sales and business development, twenty-plus years of
                        high-level
                        commercial engagement has resulted in an unusually broad reach across industries,
                        institutions,
                        and decision-makers. And in energy and global strategy, our consulting expertise — earned
                        advising large corporations on cross-border transactions and high-value mergers and
                        acquisitions
                        — anchors our ambitions in the sectors that will define the next generation of
                        infrastructure.
                    </p>

                    <div x-show="expanded" x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0" class="space-y-6">

                        <p>
                            What unifies this team, beyond credentials, is a network that has been carefully built
                            over many years across multiple industries and geographies. Our relationships extend to
                            senior
                            business leaders, institutional decision-makers, sovereign-level stakeholders, and a wider
                            community of high-net-worth individuals who trust us with their interests across markets.
                            This
                            network is not incidental to what we do — it is integral to how we identify opportunity,
                            structure
                            deals, and deliver outcomes that most firms simply cannot.
                        </p>

                        <p class="text-rmuted text-[.93rem] leading-[1.9] italic">
                            Collectively, the team is equipped not just to develop infrastructure assets — but to
                            connect
                            people, capital, and opportunity in ways that create compounding value over time.
                        </p>
                    </div>

                    <div class="flex items-center gap-6 pt-4 border-t border-gray-50">
                        <button x-show="!expanded" @click="expanded = true"
                            class="flex items-center gap-2 text-[.7rem] tracking-[.2em] uppercase text-rblue font-bold bg-transparent border-none cursor-pointer group">
                            <span>Read More</span>
                            <span class="text-[1.2rem] transition-transform group-hover:translate-x-1">+</span>
                        </button>

                        <button x-show="expanded" @click="expanded = false"
                            class="flex items-center gap-2 text-[.7rem] tracking-[.2em] uppercase text-rmuted font-bold bg-transparent border-none cursor-pointer opacity-70 hover:opacity-100">
                            <span>View Less</span>
                            <span class="text-[1.2rem]">-</span>
                        </button>
                    </div>

                </div>

                <!-- Domain pillars strip -->
                <div class="grid grid-cols-2 md:grid-cols-4">
                    <div class="team-pillar flex items-start gap-3 p-4 md:-6 border-r border-rbdr cursor-default">
                        <span class="text-[1.4rem] mt-[2px] flex-shrink-0">🏙️</span>
                        <div>
                            <div class="text-[.78rem] font-semibold text-navy leading-[1.4]">Real Estate</div>
                            <div class="text-[.62rem] text-rmuted mt-[3px]">India &amp; Dubai • 10+ Yrs</div>
                        </div>
                    </div>
                    <div class="team-pillar flex items-start gap-3 p-4 md:-6 border-r border-rbdr cursor-default">
                        <span class="text-[1.4rem] mt-[2px] flex-shrink-0">🚚</span>
                        <div>
                            <div class="text-[.78rem] font-semibold text-navy leading-[1.4]">Logistics &amp; Ops</div>
                            <div class="text-[.62rem] text-rmuted mt-[3px]">20+ Years</div>
                        </div>
                    </div>
                    <div class="team-pillar flex items-start gap-3 p-4 md:-6 border-r border-rbdr cursor-default">
                        <span class="text-[1.4rem] mt-[2px] flex-shrink-0">📈</span>
                        <div>
                            <div class="text-[.78rem] font-semibold text-navy leading-[1.4]">Sales &amp; Growth</div>
                            <div class="text-[.62rem] text-rmuted mt-[3px]">20+ Years</div>
                        </div>
                    </div>
                    <div class="team-pillar flex items-start gap-3 p-4 md:-6 cursor-default">
                        <span class="text-[1.4rem] mt-[2px] flex-shrink-0">⚡</span>
                        <div>
                            <div class="text-[.78rem] font-semibold text-navy leading-[1.4]">Energy &amp; Global
                                Strategy</div>
                            <div class="text-[.62rem] text-rmuted mt-[3px]">Billion-Dollar M&amp;A</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════ SERVICES ══ -->
    <section id="services" class="bg-white py-[5rem] px-5 md:px-16">
        <div class="max-w-[1240px] mx-auto">

            <!-- Header -->
            <div class="text-center mb-8 md:mb-16">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <span class="sec-label-line"></span>
                    <span class="text-[.65rem] tracking-[.35em] uppercase text-rblue font-semibold">What We Do</span>
                    <span class="sec-label-line"></span>
                </div>
                <h2 class="font-sans font-light leading-[1.08] text-navy" style="font-size:clamp(2.4rem,4vw,3.6rem)">
                    Our Core <em class="not-italic text-gold">Sectors</em>
                </h2>
            </div>

            <!-- 3-col grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-[2px] bg-rbdr">

                <!-- Card 01 -->
                <div
                    class="svc-card bg-white p-5 md:p-10 relative overflow-hidden hover:bg-[#fdfdfd85] transition-colors duration-300 fade-up">
                    <div class="svc-bar absolute bottom-0 left-0 right-0 h-[2px]"></div>
                    <div
                        class="absolute top-5 right-7 font-serif text-[4.5rem] font-light leading-[1] text-navy/[.05] select-none">
                        01</div>
                    <div class="text-[1.9rem] mb-5">🏛️</div>
                    <h3 class="font-sans text-[1.80rem] font-normal text-navy leading-[1.2] mb-4">Real Estate
                        Development</h3>
                    <p class="text-[.95rem] leading-[1.9] text-rtxt2">Strategic land and property development across
                        India's fastest-growing investment corridors and Dubai's world-class real estate market. From
                        Dholera's greenfield smart city to Himachal Pradesh's hills — and across Dubai's skyline — we
                        identify and develop premium assets positioned at the forefront of the next growth wave.</p>
                    <span
                        class="inline-block mt-6 text-[.6rem] tracking-[.22em] uppercase text-rblue border border-rblue/25 bg-rlt px-[.85rem] py-[.34rem]">India
                        • Dubai • Residential • Commercial</span>
                </div>

                <!-- Card 02 -->
                <div
                    class="svc-card bg-white p-5 md:p-10 relative overflow-hidden hover:bg-[#fdfdfd85] transition-colors duration-300 fade-up">
                    <div class="svc-bar absolute bottom-0 left-0 right-0 h-[2px]"></div>
                    <div
                        class="absolute top-5 right-7 font-serif text-[4.5rem] font-light leading-[1] text-navy/[.05] select-none">
                        02</div>
                    <div class="text-[1.9rem] mb-5">⚡</div>
                    <h3 class="font-sans text-[1.80rem] font-normal text-navy leading-[1.2] mb-4">Energy Sector</h3>
                    <p class="text-[.95rem] leading-[1.9] text-rtxt2">Building India's energy future. Our energy
                        vertical — anchored by world-class consulting and deal-making experience — focuses on
                        sustainable power infrastructure, renewable integration, and energy-efficient assets aligned
                        with India's net-zero commitments and surging power demand.</p>
                    <span
                        class="inline-block mt-6 text-[.6rem] tracking-[.22em] uppercase text-rblue border border-rblue/25 bg-rlt px-[.85rem] py-[.34rem]">Renewable
                        • Sustainable • Future-ready</span>
                </div>

                <!-- Card 03 -->
                <div
                    class="svc-card bg-white p-5 md:p-10 relative overflow-hidden hover:bg-[#fdfdfd85] transition-colors duration-300 fade-up">
                    <div class="svc-bar absolute bottom-0 left-0 right-0 h-[2px]"></div>
                    <div
                        class="absolute top-5 right-7 font-serif text-[4.5rem] font-light leading-[1] text-navy/[.05] select-none">
                        03</div>
                    <div class="text-[1.9rem] mb-5">🖥️</div>
                    <h3 class="font-sans text-[1.80rem] font-normal text-navy leading-[1.2] mb-4">Data Centers</h3>
                    <p class="text-[.95rem] leading-[1.9] text-rtxt2">Engineering the digital backbone of tomorrow. As
                        demand for cloud computing, AI infrastructure, and data sovereignty surges across India, Rising
                        Nexus Infra is positioning itself at the heart of this revolution — with scalable,
                        energy-efficient, and high-availability data center facilities.</p>
                    <span
                        class="inline-block mt-6 text-[.6rem] tracking-[.22em] uppercase text-rblue border border-rblue/25 bg-rlt px-[.85rem] py-[.34rem]">Cloud
                        • Colocation • AI-Ready</span>
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════ PROJECTS ══ -->
    <section id="projects" class="bg-yellow-50 py-[5rem] px-5 md:px-16">
        <div class="max-w-[1240px] mx-auto">

            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <span class="sec-label-line"></span>
                    <span class="text-[.65rem] tracking-[.35em] uppercase text-rblue font-semibold">Portfolio</span>
                </div>
                <h2 class="font-sans font-light leading-[1.08] text-navy" style="font-size:clamp(2.4rem,4vw,3.6rem)">
                    Featured <em class="not-italic text-goldlt">Projects</em>
                </h2>
            </div>

            <!-- Projects grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7">

                <!-- Dubai — WIDE -->
                <div class="col-span-1 md:col-span-2 grid grid-cols-1 md:grid-cols-2 proj-card bg-white border border-rbdr cursor-pointer"
                    @click="window.location='dubai'">
                    <div class="relative overflow-hidden min-h-[240px]"
                        style="background:url('assets/images/projects/dubai-image.jpg') no-repeat center / cover;">
                        <!-- <img src="assets/images/projects/dubai-image.jpg" alt="" class="w-100 p-0 m-0"> -->
                        <div class="geo-grid"></div>
                        <span
                            class="absolute top-4 left-4 z-10 text-[.57rem] tracking-[.18em] uppercase bg-white/85 text-navy border border-rbdr px-3 py-[5px]">Real
                            Estate • Dubai, UAE</span>
                        <span
                            class="absolute bottom-4 right-4 z-10 text-[.57rem] tracking-[.15em] uppercase bg-white/70 text-rtxt2 px-2 py-1">Dubai,
                            UAE</span>
                    </div>
                    <div class="p-9 flex flex-col justify-center">
                        <h3 class="font-sans text-[1.65rem] font-normal text-navy mb-3">Dubai Real Estate</h3>
                        <p class="text-[.94rem] leading-[1.85] text-rtxt2 mb-4 hidden lg:block">Through our exclusive
                            Dubai partnership
                            with HOD Real Estate, we offer direct access to all of the UAE's most prominent developers.
                            A gateway for Indian and global investors seeking to participate in one of the world's most
                            dynamic property markets — from luxury off-plan to prime commercial.</p>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="w-[7px] h-[7px] rounded-full bg-rmid"
                                style="box-shadow:0 0 7px rgba(37,99,235,.4)"></span>
                            <span class="text-[.63rem] tracking-[.15em] uppercase text-rmid">Active • Partnership Office
                                in Dubai</span>
                        </div>
                        <div class="flex items-center gap-2 py-[.7rem] px-3 bg-goldpal border border-goldlt/60">
                            <span class="text-[.72rem] text-rtxt2">🤝 In association with <strong class="text-gold">HOD
                                    Real Estate, Dubai</strong> — connected to every leading UAE developer</span>
                        </div>
                        <button
                            class="mt-4 flex items-center gap-2 text-[.6rem] tracking-[.18em] uppercase text-rblue bg-transparent border-none p-0 cursor-pointer font-sans hover:gap-4 transition-all duration-200">View
                            Project Details →</button>
                    </div>
                </div>

                <!-- Dholera -->
                <div class="col-span-1 proj-card bg-white border border-rbdr overflow-hidden cursor-pointer fade-up"
                    @click="window.location='dholera'">
                    <div class="relative h-[200px] overflow-hidden"
                        style="background:url('assets/images/projects/dholera-smart-city.jpg') no-repeat center / cover;">
                        <div class="geo-grid"></div>
                        <span
                            class="absolute top-4 left-4 z-10 text-[.57rem] tracking-[.18em] uppercase bg-white/85 text-navy border border-rbdr px-3 py-[5px]">Real
                            Estate • India</span>
                        <span
                            class="absolute bottom-4 right-4 z-10 text-[.57rem] tracking-[.15em] uppercase bg-white/70 text-rtxt2 px-2 py-1">Gujarat,
                            India</span>
                    </div>
                    <div class="p-8">
                        <h3 class="font-sans text-[1.6rem] font-normal text-navy mb-3">Dholera Smart City</h3>
                        <p class="text-[.93rem] leading-[1.85] text-rtxt2 mb-4 hidden lg:block">A landmark development
                            within India's
                            first greenfield smart city and Special Investment Region, along the Delhi-Mumbai Industrial
                            Corridor.</p>
                        <div class="flex items-center gap-2">
                            <span class="w-[7px] h-[7px] rounded-full bg-rgreen status-pulse-dot"></span>
                            <span class="text-[.63rem] tracking-[.15em] uppercase text-rgreen">Active Development</span>
                        </div>
                        <button
                            class="mt-3 flex items-center gap-2 text-[.6rem] tracking-[.18em] uppercase text-rblue bg-transparent border-none p-0 cursor-pointer font-sans hover:gap-4 transition-all duration-200">View
                            Project Details →</button>
                    </div>
                </div>

                <!-- Barog -->
                <div class="col-span-1 proj-card bg-white border border-rbdr overflow-hidden cursor-pointer fade-up"
                    @click="window.location='harison-barog'">
                    <div class="relative h-[200px] overflow-hidden"
                        style="background:url('assets/images/projects/barog.jpg') no-repeat center / cover;">
                        <div class="geo-grid"></div>
                        <span
                            class="absolute top-4 left-4 z-10 text-[.57rem] tracking-[.18em] uppercase bg-white/85 text-navy border border-rbdr px-3 py-[5px]">Real
                            Estate • India</span>
                        <span
                            class="absolute bottom-4 right-4 z-10 text-[.57rem] tracking-[.15em] uppercase bg-white/70 text-rtxt2 px-2 py-1">Himachal
                            Pradesh, India</span>
                    </div>
                    <div class="p-8">
                        <h3 class="font-sans text-[1.6rem] font-normal text-navy mb-3">Barog, Near Solan</h3>
                        <p class="text-[.93rem] leading-[1.85] text-rtxt2 mb-4 hidden lg:block">Premium development in
                            the serene hills
                            of Barog, near Solan — combining Himalayan natural beauty with modern infrastructure for
                            residential and hospitality use.</p>
                        <div class="flex items-center gap-2">
                            <span class="w-[7px] h-[7px] rounded-full bg-rgreen status-pulse-dot"></span>
                            <span class="text-[.63rem] tracking-[.15em] uppercase text-rgreen">Active Development</span>
                        </div>
                        <button
                            class="mt-3 flex items-center gap-2 text-[.6rem] tracking-[.18em] uppercase text-rblue bg-transparent border-none p-0 cursor-pointer font-sans hover:gap-4 transition-all duration-200">View
                            Project Details →</button>
                    </div>
                </div>

                <!-- Energy & Data — WIDE -->
                <div class="col-span-1 md:col-span-2 grid grid-cols-1 md:grid-cols-2 proj-card bg-white border border-rbdr cursor-pointer fade-up"
                    @click="openModal('future')">
                    <div class="relative overflow-hidden min-h-[200px]"
                        style="background:url('assets/images/projects/energy-data.jpg') no-repeat center / cover;">
                        <div class="geo-grid"></div>
                        <span
                            class="absolute top-4 left-4 z-10 text-[.57rem] tracking-[.18em] uppercase bg-white/85 text-navy border border-rbdr px-3 py-[5px]">Energy
                            • Data Centers</span>
                        <span
                            class="absolute bottom-4 right-4 z-10 text-[.57rem] tracking-[.15em] uppercase bg-white/70 text-rtxt2 px-2 py-1">Pan
                            India</span>
                    </div>
                    <div class="p-9 flex flex-col justify-center">
                        <h3 class="font-sans text-[1.65rem] font-normal text-navy mb-3">Energy &amp; Data
                            Infrastructure</h3>
                        <p class="text-[.94rem] leading-[1.85] text-rtxt2 mb-4 hidden lg:block">Our upcoming pipeline in
                            renewable
                            energy and data center development — the next frontier of Rising Nexus Infra's expansion,
                            anchored by world-class expertise, powerful industry networks, and strategic site selection
                            across India.</p>
                        <div class="flex items-center gap-2">
                            <span class="w-[7px] h-[7px] rounded-full bg-ramber"
                                style="box-shadow:0 0 7px rgba(217,119,6,.4)"></span>
                            <span class="text-[.63rem] tracking-[.15em] uppercase text-ramber">Coming Soon — Register
                                Interest</span>
                        </div>
                        <button
                            class="mt-3 flex items-center gap-2 text-[.6rem] tracking-[.18em] uppercase text-rblue bg-transparent border-none p-0 cursor-pointer font-sans hover:gap-4 transition-all duration-200">View
                            Project Details →</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════ CONTACT ══ -->
    <section id="contact" class="bg-white py-[5rem] px-5 md:px-16">
        <div class="max-w-[1240px] mx-auto grid grid-cols-1 lg:grid-cols-[1fr_1fr] gap-[5.5rem] items-start">

            <!-- Left: Info -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="sec-label-line"></span>
                    <span class="text-[.65rem] tracking-[.35em] uppercase text-rblue font-semibold">Get in Touch</span>
                </div>
                <h2 class="font-sans font-light leading-[1.08] text-navy mb-5"
                    style="font-size:clamp(2.2rem,3.8vw,3.4rem)">
                    Let's Build <em class="not-italic text-gold">Together</em>
                </h2>
                <div class="w-14 h-[2px] accent-rule mb-8"></div>
                <p class="text-[1rem] leading-[1.9] text-rmuted mb-5">Whether you're an investor seeking high-growth
                    opportunities, a partner with a complementary vision, or a buyer looking for premium assets in India
                    or Dubai — we'd like to hear from you.</p>
                <p class="text-[.88rem] leading-[1.9] text-rmuted border-l-2 border-rbds pl-4 mb-8 italic">We are also
                    open to co-investment and joint ventures — in new ventures or existing businesses where the right
                    partnership can accelerate growth for everyone involved. If you believe there's a fit, the
                    conversation starts here.</p>

                <!-- Office chips -->
                <div class="flex flex-col gap-3">
                    <div class="flex items-center gap-3 p-[.82rem] border border-rbdr bg-rs2">
                        <span class="text-[1.1rem] flex-shrink-0">🇮🇳</span>
                        <div>
                            <span class="block text-[.52rem] tracking-[.2em] uppercase text-rblue mb-[2px]">Corporate
                                Office</span>
                            <span class="text-[.82rem] text-rtxt2">B-743, Tower B, IThum, Sector 62, Noida</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-[.82rem] border border-rbdr bg-rs2">
                        <span class="text-[1.1rem] flex-shrink-0">🇦🇪</span>
                        <div>
                            <span class="block text-[.52rem] tracking-[.2em] uppercase text-rblue mb-[2px]">Dubai
                                Office</span>
                            <span class="text-[.82rem] text-rtxt2">Building 11 - 606 - Business Bay - Bay Square - Dubai - United Arab Emirates</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-10 p-[.82rem] border border-rbdr bg-rs2">
                        <div class="flex gap-3">
                            <span class="text-[1.1rem] flex-shrink-0">&#128231</span>
                            <div>
                                <span class="block text-[.52rem] tracking-[.2em] uppercase text-rblue mb-[2px]">Email
                                    Id</span>
                                <span class="text-[.82rem] text-rtxt2"><a
                                        href="mailto:sales@risingnexusinfra.com">sales@risingnexusinfra.com</a></span>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-[1.1rem] flex-shrink-0">&#128222;</span>
                            <div>
                                <span class="block text-[.52rem] tracking-[.2em] uppercase text-rblue mb-[2px]">Contact
                                    No.</span>
                                <span class="text-[.82rem] text-rtxt2"><a href="tel:+919910587006">+91
                                        9910587006</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <form  action="mailer/contact-message.php" method="POST" class="flex flex-col gap-5">
                <input type="hidden" name="sub" value="Contact Form !">
                <input type="hidden" name="redirect_url" value="<?= BASE_URL . '#contact' ?>">
                <div class="grid grid-cols-2 gap-x-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="user_name" class="text-[.6rem] tracking-[.2em] uppercase text-rmuted font-semibold">Full Name</label>
                        <input type="text" name="name" id="user_name" placeholder="Your name" required
                            class="bg-rg border border-rbdr text-rtxt text-[.95rem] px-4 py-[.9rem] outline-none focus:border-rmid focus:bg-white transition-colors duration-200 placeholder-rmuted/60" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="user_email" class="text-[.6rem] tracking-[.2em] uppercase text-rmuted font-semibold">Email Address</label>
                        <input type="email" name="email" id="user_email" placeholder="your@email.com" required
                            class="bg-rg border border-rbdr text-rtxt text-[.95rem] px-4 py-[.9rem] outline-none focus:border-rmid focus:bg-white transition-colors duration-200 placeholder-rmuted/60" />
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-x-2 gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="user_phone" class="text-[.6rem] tracking-[.2em] uppercase text-rmuted font-semibold">Phone Number</label>
                        <input type="tel" name="phone" id="user_phone" placeholder="+91 / +971 XXXXX XXXXX"
                            class="bg-rg border border-rbdr text-rtxt text-[.95rem] px-4 py-[.9rem] outline-none focus:border-rmid focus:bg-white transition-colors duration-200 placeholder-rmuted/60" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="area_of_interest" class="text-[.6rem] tracking-[.2em] uppercase text-rmuted font-semibold">Area of Interest</label>
                        <select name="area_of_interest" id="area_of_interest"
                            class="bg-rg border border-rbdr text-rtxt2 text-[.93rem] px-4 py-[.9rem] outline-none focus:border-rmid focus:bg-white transition-colors duration-200 appearance-none cursor-pointer">
                            <option value="">Select sector / purpose</option>
                            <option>Real Estate — Dholera, India</option>
                            <option>Real Estate — Barog, Himachal Pradesh</option>
                            <option>Real Estate — Dubai, UAE</option>
                            <option>Energy Sector</option>
                            <option>Data Centers</option>
                            <option>Investment Partnership</option>
                            <option>Co-Investment / Joint Venture</option>
                            <option>General Enquiry</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="user_message" class="text-[.6rem] tracking-[.2em] uppercase text-rmuted font-semibold">Message</label>
                    <textarea rows="5" name="messgae" id="user_message" placeholder="Tell us about your interest or requirement…"
                        class="bg-rg border border-rbdr text-rtxt text-[.95rem] px-4 py-[.9rem] outline-none focus:border-rmid focus:bg-white transition-colors duration-200 resize-y placeholder-rmuted/60"></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="text-[.7rem] tracking-[.2em] uppercase bg-gold text-white px-11 py-4 font-medium hover:bg-white hover:bg-gold hover:text-navy hover:border-gold border-[1.5px] transition-colors duration-200 cursor-pointer font-sans">
                        Send Enquiry →
                    </button>
                    <p x-show="formSent" x-cloak class="mt-3 text-[.85rem] text-rgreen tracking-[.06em]">✓ Thank you.
                        We'll be in touch shortly.</p>
                </div>
            </form>

        </div>
    </section>

    <!-- ══════════════════════════════════════════════════════════ FOOTER ══ -->
    <?php include "include/footer.php" ?>

    <!-- ══════════════════════════════════════════════════════════ MODALS ══ -->


    <!-- Modal: Future -->
    <div x-show="activeModal==='future'" x-cloak class="modal-overlay" @click.self="closeModal()"
        @keydown.escape.window="closeModal()">
        <div class="modal-box" :class="activeModal==='future'?'shown':''">
            <div class="relative h-[220px] flex items-end p-9"
                style="background:url('assets/images/projects/energy-data.jpg') no-repeat center / cover;">
                <div class="geo-grid"></div>
                <span
                    class="absolute top-5 left-9 text-[.53rem] tracking-[.2em] uppercase bg-white/85 text-navy border border-rbdr px-3 py-[5px] z-10">Energy
                    • Data Centers • Upcoming</span>
                <button @click="closeModal()"
                    class="absolute top-4 right-4 w-9 h-9 flex items-center justify-center bg-white/80 border border-rbdr text-rtxt2 text-[1rem] hover:bg-navy hover:text-white transition-all cursor-pointer z-10">✕</button>
                <div class="relative z-10">
                    <div class="text-[.6rem] tracking-[.22em] uppercase text-rblue mb-1"><span class="bg-white p-1">Pan
                            India</span></div>
                    <p class="font-sans font-light text-[2.2rem] text-white leading-[1.1]">Energy &amp; Data
                        Infrastructure</p>
                </div>
            </div>
            <div class="p-11">
                <div class="text-[.6rem] tracking-[.28em] uppercase text-rblue border-b border-rbdr pb-2 mb-4">Future
                    Pipeline</div>
                <p class="text-[.97rem] leading-[1.95] text-rtxt2 mb-8">Rising Nexus Infra is expanding into two of
                    India's fastest-growing infrastructure sectors: renewable energy and data center development. Our
                    energy and consulting expertise — spanning global advisory for some of the world's largest
                    corporations and billion-dollar transactions — gives us a unique edge in identifying, structuring,
                    and executing high-value infrastructure opportunities in this space.</p>
                <div class="grid grid-cols-2 gap-3 mb-8">
                    <div class="bg-rs2 border border-rbdr p-4">
                        <div class="text-[.52rem] tracking-[.22em] uppercase text-rmuted mb-1">Sectors</div>
                        <div class="text-[.88rem] text-navy font-medium">Energy + Data Centers</div>
                    </div>
                    <div class="bg-rs2 border border-rbdr p-4">
                        <div class="text-[.52rem] tracking-[.22em] uppercase text-rmuted mb-1">Geography</div>
                        <div class="text-[.88rem] text-navy font-medium">Pan India</div>
                    </div>
                    <div class="bg-rs2 border border-rbdr p-4">
                        <div class="text-[.52rem] tracking-[.22em] uppercase text-rmuted mb-1">Advisory Depth</div>
                        <div class="text-[.88rem] text-navy font-medium">Global • Billion-Dollar M&amp;A</div>
                    </div>
                    <div class="bg-rs2 border border-rbdr p-4">
                        <div class="text-[.52rem] tracking-[.22em] uppercase text-rmuted mb-1">Status</div>
                        <div class="text-[.88rem] font-medium text-gold">Upcoming Announcement</div>
                    </div>
                </div>
                <div class="text-[.6rem] tracking-[.28em] uppercase text-rblue border-b border-rbdr pb-2 mb-4">Planned
                    Focus Areas</div>
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3 text-[.93rem] text-rtxt2 leading-[1.7]"><span
                            class="w-[7px] h-[7px] rounded-full bg-rmid mt-[.45rem] flex-shrink-0"></span>Renewable
                        energy infrastructure — solar, wind, and hybrid power generation across India's fastest-growing
                        energy corridors</li>
                    <li class="flex items-start gap-3 text-[.93rem] text-rtxt2 leading-[1.7]"><span
                            class="w-[7px] h-[7px] rounded-full bg-rmid mt-[.45rem] flex-shrink-0"></span>Hyperscale and
                        edge data center development for India's surging cloud, AI, and digital sovereignty demand</li>
                    <li class="flex items-start gap-3 text-[.93rem] text-rtxt2 leading-[1.7]"><span
                            class="w-[7px] h-[7px] rounded-full bg-rmid mt-[.45rem] flex-shrink-0"></span>Energy-efficient,
                        green-certified facilities aligned with India's 2030 net-zero commitments</li>
                    <li class="flex items-start gap-3 text-[.93rem] text-rtxt2 leading-[1.7]"><span
                            class="w-[7px] h-[7px] rounded-full bg-rmid mt-[.45rem] flex-shrink-0"></span>Strategic
                        partnerships with global technology companies, cloud providers, energy utilities, and government
                        bodies</li>
                    <li class="flex items-start gap-3 text-[.93rem] text-rtxt2 leading-[1.7]"><span
                            class="w-[7px] h-[7px] rounded-full bg-rmid mt-[.45rem] flex-shrink-0"></span>World-class
                        advisory experience in international energy transactions informing every investment decision
                    </li>
                </ul>
                <a href="#contact" @click="closeModal()"
                    class="inline-block text-[.66rem] tracking-[.18em] uppercase bg-gold hover:bg-white hover:bg-gold hover:text-navy hover:border-gold border-[1.5px] text-white px-9 py-4 font-medium transition-colors duration-200 no-underline">Register
                    Your Interest →</a>
            </div>
        </div>
    </div>

    <!-- ══════════════════════════════════════════════════════════ ALPINE + JS ══ -->
    <script src="assets/js/home.js"></script>

</body>

</html>