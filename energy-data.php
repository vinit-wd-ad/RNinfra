<!DOCTYPE html>
<html lang="en" x-data="dholeraApp()" x-init="init()">

<head>
    <?php include "include/head.php" ?>
    <title>Dholera Smart City Investment | Rising Nexus Infra</title>
</head>

<body class="font-sans">

    <!-- ══════════════════════════════════════════════════════════ NAV ══ -->
    <?php include "include/header.php" ?>

    <!-- ══════════════════════════════════════════════════════ HERO ══ -->
    <!-- ══════════════════════════════════════════════════════════ COMING SOON ══ -->
    <section id="coming-soon" class="relative overflow-hidden bg-navy py-0 mt-20" style="min-height:92vh;display:flex;flex-direction:column;align-items:center;justify-content:center;">

        <!-- Background grid -->
        <div class="absolute inset-0 pointer-events-none" style="background-image:linear-gradient(rgba(180,148,72,0.045) 1px,transparent 1px),linear-gradient(90deg,rgba(180,148,72,0.045) 1px,transparent 1px);background-size:60px 60px;"></div>

        <!-- Glow blobs -->
        <div class="absolute pointer-events-none" style="top:-10%;left:-15%;width:55%;height:70%;background:radial-gradient(ellipse,rgba(180,148,72,0.07) 0%,transparent 70%);"></div>
        <div class="absolute pointer-events-none" style="bottom:-10%;right:-10%;width:45%;height:60%;background:radial-gradient(ellipse,rgba(26,77,179,0.09) 0%,transparent 70%);"></div>

        <!-- Gold top line -->
        <div class="absolute top-0 left-0 right-0" style="height:2px;background:linear-gradient(90deg,transparent,#B49448,#E8C97A,#B49448,transparent);"></div>
        <div class="absolute bottom-0 left-0 right-0" style="height:1px;background:linear-gradient(90deg,transparent,rgba(180,148,72,0.4),transparent);"></div>

        <!-- Corner accents -->
        <div class="absolute" style="top:18px;left:18px;width:48px;height:48px;">
            <svg viewBox="0 0 48 48" fill="none">
                <path d="M2 46 L2 2 L46 2" stroke="#B49448" stroke-width="1" opacity="0.5" />
            </svg>
        </div>
        <div class="absolute" style="top:18px;right:18px;width:48px;height:48px;transform:scaleX(-1);">
            <svg viewBox="0 0 48 48" fill="none">
                <path d="M2 46 L2 2 L46 2" stroke="#B49448" stroke-width="1" opacity="0.5" />
            </svg>
        </div>
        <div class="absolute" style="bottom:18px;left:18px;width:48px;height:48px;transform:scaleY(-1);">
            <svg viewBox="0 0 48 48" fill="none">
                <path d="M2 46 L2 2 L46 2" stroke="#B49448" stroke-width="1" opacity="0.5" />
            </svg>
        </div>
        <div class="absolute" style="bottom:18px;right:18px;width:48px;height:48px;transform:scale(-1);">
            <svg viewBox="0 0 48 48" fill="none">
                <path d="M2 46 L2 2 L46 2" stroke="#B49448" stroke-width="1" opacity="0.5" />
            </svg>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-6 md:px-8 max-w-[860px] w-full mx-auto fade-up" style="padding-top:4rem;padding-bottom:5rem;">

            <!-- Eyebrow -->
            <div class="flex items-center justify-center gap-3 mb-6">
                <span class="block h-px w-8 md:w-10" style="background:linear-gradient(90deg,transparent,#B49448);"></span>
                <span class="text-[.6rem] md:text-[.65rem] tracking-[.32em] uppercase font-sans" style="color:#B49448;">Real Estate · Infrastructure · Innovation</span>
                <span class="block h-px w-8 md:w-10" style="background:linear-gradient(90deg,#B49448,transparent);"></span>
            </div>

            <!-- Headline -->
            <h2 class="font-sans font-light text-white leading-[1.08] mb-3" style="font-size:clamp(2.6rem,6.5vw,4.8rem);letter-spacing:.01em;">
                Something <em class="not-italic" style="color:#E8C97A;">Extraordinary</em><br class="hidden md:block"> Is Being Built
            </h2>
            <p class="font-sans font-light mb-8" style="font-size:clamp(1.1rem,2.8vw,1.7rem);color:rgba(255,255,255,0.38);letter-spacing:.04em;">A new landmark in Indian real estate</p>

            <!-- Divider -->
            <div class="flex items-center justify-center gap-3 mb-5">
                <div class="h-px w-20" style="background:linear-gradient(90deg,transparent,rgba(180,148,72,0.5));"></div>
                <div style="width:6px;height:6px;background:#B49448;transform:rotate(45deg);flex-shrink:0;"></div>
                <div class="h-px w-20" style="background:linear-gradient(90deg,rgba(180,148,72,0.5),transparent);"></div>
            </div>

            <p class="font-sans mb-10" style="font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;color:rgba(255,255,255,0.28);">RisingNexusInfra · Official Launch Approaching</p>

            <!-- Status pill -->
            <div class="inline-flex items-center gap-2 font-sans" style="border:1px solid rgba(180,148,72,0.35);padding:10px 26px;font-size:.65rem;letter-spacing:.22em;text-transform:uppercase;color:#B49448;">
                <span style="width:6px;height:6px;border-radius:50%;background:#4ade80;box-shadow:0 0 6px rgba(74,222,128,0.7);animation:csPulse 2s infinite;flex-shrink:0;"></span>
                Pre-launch · Exclusive Preview Coming Soon
            </div>

            <!-- CTA buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="./#projects" class="w-full sm:w-auto text-[.7rem] tracking-[.18em] uppercase bg-gold text-white px-10 py-4 font-medium border-[1.5px] border-gold hover:bg-white hover:text-navy transition-colors duration-200 no-underline text-center">
                    Explore Projects
                </a>
            </div>

        </div>

    </section>

    <style>
        @keyframes csPulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.35;
            }
        }
    </style>

    <script>
        (function() {
            var target = new Date('2025-12-31T00:00:00');

            function tick() {
                var now = new Date();
                var diff = target - now;
                if (diff <= 0) {
                    diff = 0;
                }
                var d = Math.floor(diff / 864e5);
                var h = Math.floor((diff % 864e5) / 36e5);
                var m = Math.floor((diff % 36e5) / 6e4);
                var s = Math.floor((diff % 6e4) / 1e3);
                document.getElementById('csDay').textContent = String(d).padStart(2, '0');
                document.getElementById('csHr').textContent = String(h).padStart(2, '0');
                document.getElementById('csMin').textContent = String(m).padStart(2, '0');
                document.getElementById('csSec').textContent = String(s).padStart(2, '0');
            }
            tick();
            setInterval(tick, 1000);
        })();
    </script>

    <!-- ══════════════════════════════════════════════════════ FOOTER BAR ══ -->
    <?php include "include/footer.php"; ?>

    <a href="https://wa.me/+919910587006" target="_blank"
        class="fixed bottom-8 right-8 z-50 flex items-center justify-center w-14 h-14 bg-[#25D366] rounded-full shadow-lg hover:bg-[#20ba5a] hover:-translate-y-1 transition-all duration-300 group">

        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.938 3.659 1.435 5.63 1.435h.008c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>

        <span
            class="absolute right-16 bg-white text-gray-800 px-3 py-1 rounded-lg shadow-md text-sm font-medium opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none">
            Chat with us
        </span>
    </a>

    <!-- ══════════════════════════════════════════════════════ LEAFLET + ALPINE ══ -->
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.js"></script>
    <script>
        // ─── Alpine component ────────────────────────────────────────────────────
        function dholeraApp() {
            return {
                init() {
                    // Scroll-reveal
                    const obs = new IntersectionObserver(entries => {
                        entries.forEach(e => {
                            if (e.isIntersecting) e.target.classList.add('visible');
                        });
                    }, {
                        threshold: 0.07
                    });
                    document.querySelectorAll('.fade-up').forEach(el => obs.observe(el));

                    // Init map after DOM ready
                    this.$nextTick(() => initMap());
                }
            };
        }
    </script>


</body>

</html>