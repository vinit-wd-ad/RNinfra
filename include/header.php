  <!-- ════════════════════════════════════════════════════════════════════════
     FLOATING ACTION BUTTONS
  ════════════════════════════════════════════════════════════════════════════ -->
  <div class="fixed bottom-7 right-6 z-[600] flex flex-col gap-[.7rem] items-end md:visible invisible" aria-label="Quick contact">

      <!-- Book Site Visit -->
      <a href="#contact" aria-label="Jump to Contact section on home page"
          class="flex items-center gap-[.6rem] px-5 py-[.7rem] font-bold text-[.8rem] tracking-[.1em] uppercase text-navy shadow-[0_4px_22px_rgba(0,0,0,.22)] transition-transform duration-200 hover:-translate-x-1"
          style="background:linear-gradient(135deg,#B08840,#E8C97A)" onclick="scrollTo('vip-form')"
          aria-label="Book a site visit">
          <svg class="w-[18px] h-[18px] flex-shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2.2" aria-hidden="true">
              <rect x="3" y="4" width="18" height="18" rx="2" />
              <line x1="16" y1="2" x2="16" y2="6" />
              <line x1="8" y1="2" x2="8" y2="6" />
              <line x1="3" y1="10" x2="21" y2="10" />
          </svg>
          Book Site Visit
      </a>
  </div>

  <nav x-data="{ mobileMenuOpen: false, dotsOpen: false }"
      class="fixed top-0 left-0 right-0 w-full z-[600] bg-white/95 backdrop-blur-md border-b border-rbdr shadow-[0_1px_24px_rgba(13,27,62,.06)]">

      <div class="flex items-center justify-between px-5 md:px-14 py-[1rem] min-w-0">

          <a href="./" class="flex flex-col no-underline">
              <span
                  class="font-serif text-[1.1rem] md:text-[1.4rem] font-semibold tracking-[.07em] text-navy uppercase">
                  <img src="assets/images/logos/logo1.png" class="w-14 md:w-20" alt="RisingNegusInfra Logo">
              </span>
          </a>

          <ul class="hidden lg:flex items-center gap-[.1rem] list-none" id="desktopNav">
              <li class="relative" x-data="{open:false, timeout:null}" @mouseenter="clearTimeout(timeout); open=true"
                  @mouseleave="timeout=setTimeout(()=>open=false, 200)">
                  <button @click="open=!open"
                      class="flex items-center gap-1 text-[.7rem] tracking-[.13em] uppercase text-rtxt2 hover:text-rmid px-[.9rem] py-2 bg-transparent border-none cursor-pointer font-sans transition-colors duration-200">
                      About
                      <svg class="w-2 h-2 transition-transform duration-200" :class="open?'rotate-180':''"
                          viewBox="0 0 8 5" fill="currentColor">
                          <path d="M0 0l4 5 4-5z" />
                      </svg>
                  </button>
                  <div class="dropdown-panel" x-show="open" x-cloak x-transition>
                      <a href="./#about" aria-label="Jump to About section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors"><span>🏛</span>Our Story</a>
                      <a href="./#team" aria-label="Jump to Leadership section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors"><span>👥</span>Our Leadership</a>
                  </div>
              </li>

              <li class="relative" x-data="{open:false, timeout:null}" @mouseenter="clearTimeout(timeout); open=true"
                  @mouseleave="timeout=setTimeout(()=>open=false, 200)">
                  <button @click="open=!open"
                      class="flex items-center gap-1 text-[.7rem] tracking-[.13em] uppercase text-rtxt2 hover:text-rmid px-[.9rem] py-2 bg-transparent border-none cursor-pointer font-sans transition-colors duration-200">
                      Services
                      <svg class="w-2 h-2 transition-transform duration-200" :class="open?'rotate-180':''"
                          viewBox="0 0 8 5" fill="currentColor">
                          <path d="M0 0l4 5 4-5z" />
                      </svg>
                  </button>
                  <div class="dropdown-panel" x-show="open" x-cloak x-transition>
                      <a href="./#services" aria-label="Jump to Service section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors"><span>🏗</span>Real
                          Estate</a>
                      <a href="./#services" aria-label="Jump to Service section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors"><span>⚡</span>Energy
                          Sector</a>
                      <a href="./#services" aria-label="Jump to Service section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span>🖥</span>Data Centers</a>
                      <a href="./#contact" aria-label="Jump to Contact section on home page"
                          class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span>🤝</span>Investment Opportunities</a>
                  </div>
              </li>

              <li class="relative" x-data="{open:false, timeout:null}" @mouseenter="clearTimeout(timeout); open=true"
                  @mouseleave="timeout=setTimeout(()=>open=false, 200)">
                  <button @click="open=!open"
                      class="flex items-center gap-1 text-[.7rem] tracking-[.13em] uppercase text-rtxt2 hover:text-rmid px-[.9rem] py-2 bg-transparent border-none cursor-pointer font-sans transition-colors duration-200">
                      Projects
                      <svg class="w-2 h-2 transition-transform duration-200" :class="open?'rotate-180':''"
                          viewBox="0 0 8 5" fill="currentColor">
                          <path d="M0 0l4 5 4-5z" />
                      </svg>
                  </button>
                  <ul class="dropdown-panel" x-show="open" x-cloak x-transition>
                      <li>
                          <a href="dholera"
                              class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                              <span>🌿</span>Dholera Smart City</a>
                      </li>
                      <li>
                          <a href="harison-barog"
                              class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                              <span>🏔</span>Barog, Himachal Pradesh</a>
                      </li>
                      <li>
                          <a href="dubai"
                              class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                              <span>🏙</span>Dubai Real Estate</a>
                      </li>
                      <li>
                          <a href="energy-data"
                              class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                              <span>🔮</span>Energy &amp; Data (Upcoming)</a>
                      </li>
                      <li>
                          <a href="./#projects" aria-label="Jump to Project section on home page"
                              class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 hover:bg-rlt hover:text-rblue no-underline transition-colors">
                              <span>📂</span>All Projects</a>
                      </li>
                  </ul>
              </li>

              <li class="relative">
                  <a href="./#contact" aria-label="Jump to Contact section on home page"
                      class="flex items-center gap-3 px-5 py-3 text-[.68rem] tracking-[.1em] uppercase text-rtxt2 hover:bg-rlt hover:text-rblue no-underline transition-colors">Contact</a>
              </li>
          </ul>

          <div class="flex items-center gap-1 md:gap-4 flex-shrink-0">
              <a href="#contact" aria-label="Jump to Contact section"
                  class="hidden sm:block text-[.7rem] md:text-[.65rem] tracking-[.16em] uppercase bg-white text-black px-[1rem] md:px-[1.3rem] py-[.58rem] no-underline hover:border-gold border-[1.5px] hover:text-navy transition-colors duration-200 font-medium">
                  Enquire Now
              </a>

              <div class="relative hidden md:block" id="dotsWrapper">
                  <button @click="dotsOpen=!dotsOpen" aria-label="Open More Menu"
                      class="w-9 h-9 flex flex-col items-center justify-center gap-[4px] border border-rbds bg-transparent cursor-pointer hover:border-navy transition-colors">
                      <span class="w-1 h-1 rounded-full bg-rmuted" :class="dotsOpen?'bg-navy':''"></span>
                      <span class="w-1 h-1 rounded-full bg-rmuted" :class="dotsOpen?'bg-navy':''"></span>
                      <span class="w-1 h-1 rounded-full bg-rmuted" :class="dotsOpen?'bg-navy':''"></span>
                  </button>
                  <div class="dots-panel" x-show="dotsOpen" x-cloak x-transition @click.away="dotsOpen = false">
                      <div
                          class="px-5 py-[.6rem] text-[.52rem] tracking-[.28em] uppercase text-rblue border-b border-rbdr font-semibold">
                          Quick Links</div>
                      <a href="./" @click="dotsOpen=false"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">🏠</span>Home</a>
                      <a href="./#contact" aria-label="Jump to Contact section on home page" @click="dotsOpen=false"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">✉️</span>Contact Us</a>
                      <div class="text-[.47rem] tracking-[.24em] uppercase text-rmuted bg-rs2 px-5 py-[.42rem]">
                          Connect With Us</div>
                      <a href="https://wa.me/919910587006" aria-label="Follow Us on Whatsapp" target="_blank"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-green-500" viewBox="0 0 24 24">
                                  <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.937 3.659 1.432 5.631 1.433h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                              </svg>
                          </span>WhatsApp Us</a>
                      <a href="https://www.instagram.com/risingnexusinfra.official/" aria-label="Follow Us on Instagram" target="_blank"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-pink-600" viewBox="0 0 24 24">
                                  <path d="M11.997 18a6.005 6.005 0 01-6-6c0-3.309 2.691-6 6-6s6 2.691 6 6-2.691 6-6 6zm0-10c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm4.958-2.813a.997.997 0 101.414-1.414.997.997 0 00-1.414 1.414zm5.042 4.713c-.046-1.035-.207-2.046-.586-3.03-.378-.985-.923-1.859-1.64-2.574-.715-.715-1.589-1.261-2.574-1.64-.984-.378-1.995-.539-3.03-.586C13.162 2.012 12.834 2 12 2s-1.162.012-2.167.058c-1.035.046-2.046.207-3.03.586-.985.378-1.859.923-2.574 1.64-.715.715-1.261 1.589-1.64 2.574-.378.984-.539 1.995-.586 3.03C2.012 10.838 2 11.166 2 12s.012 1.162.058 2.167c.046 1.035.207 2.046.586 3.03.378.985.923 1.859 1.64 2.574.715.715 1.589 1.261 2.574 1.64.984.378 1.995.539 3.03.586 1.005.046 1.333.058 2.167.058s1.162-.012 2.167-.058c1.035-.046 2.046-.207 3.03-.586.985-.378 1.859-.923 2.574-1.64.715-.715 1.261-1.589 1.64-2.574.378-.984.539-1.995.586-3.03.046-1.005.058-1.333.058-2.167s-.012-1.162-.058-2.167zm-2 4.417c-.042.912-.182 1.558-.394 2.103-.22.56-.515 1.036-.973 1.494-.458.458-.934.754-1.494.974-.545.211-1.191.352-2.103.394C12.949 19.974 12.651 20 12 20s-.949-.026-2.041-.076c-.912-.042-1.558-.182-2.103-.394-.56-.22-1.036-.515-1.494-.974-.458-.458-.754-.934-.974-1.494-.211-.545-.352-1.191-.394-2.103-.05-1.092-.063-1.39-.063-2.041s.013-.949.063-2.041c.042-.912.182-1.558.394-2.103.22-.56.515-1.036.973-1.494.458-.458.934-.754 1.494-.974.545-.211 1.191-.352 2.103-.394C11.051 4.026 11.349 4 12 4s.949.026 2.041.076c.912.042 1.558.182 2.103.394.56.22 1.036.515 1.494.974.458.458.754.934.974 1.494.211.545.352 1.191.394 2.103.05 1.092.063 1.39.063 2.041s-.013.949-.063 2.041z" />
                              </svg>
                          </span>Instagram</a>
                      <a href="https://www.facebook.com/risingnexusinfra.official" aria-label="Follow Us on Facebook" target="_blank"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-blue-700" viewBox="0 0 24 24">
                                  <path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12.001h2.773l-.443 2.891h-2.33v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z" />
                              </svg>
                          </span>Facebook</a>
                      <a href="https://www.linkedin.com/in/vast-tyagi/" aria-label="Follow Us on LinkedIn" target="_blank"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-blue-600" viewBox="0 0 24 24">
                                  <circle cx="4.983" cy="5.009" r="2.188" />
                                  <path d="M9.237 8.855v12.139h3.761v-6.54c0-1.724.312-3.392 2.45-3.392 2.105 0 2.132 1.969 2.132 3.503v6.429H21.4V14.13c0-3.619-.78-6.429-5.006-6.429-2.031 0-3.39 1.114-3.948 2.176h-.055V8.855H9.237zM2.871 20.994h4.223V8.855H2.871v12.139z" />
                              </svg>
                          </span>LinkedIn</a>
                      <a href="https://www.youtube.com/@RishngNexusInfra" aria-label="Follow Us on YouTube" target="_blank"
                          class="flex items-center gap-3 px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue no-underline transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">
                              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current text-red-600" viewBox="0 0 24 24">
                                  <path d="M21.593 7.203a2.506 2.506 0 00-1.762-1.766C18.265 5.007 12 5.007 12 5.007s-6.265 0-7.831.43a2.506 2.506 0 00-1.762 1.766C2 8.769 2 12.002 2 12.002s0 3.233.407 4.799a2.506 2.506 0 001.762 1.766c1.566.43 7.831.43 7.831.43s6.265 0 7.831-.43a2.506 2.506 0 001.762-1.766c.407-1.566.407-4.799.407-4.799s0-3.233-.407-4.799zM9.75 15.002V9.003l5.625 3z" />
                              </svg>
                          </span>YouTube</a>
                      <div class="text-[.47rem] tracking-[.24em] uppercase text-rmuted bg-rs2 px-5 py-[.42rem]">
                          Resources</div>
                      <button @click="downloadBrochure()"
                          class="flex items-center gap-3 w-full px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 border-b border-rbdr hover:bg-rlt hover:text-rblue bg-transparent border-l-0 border-r-0 border-t-0 cursor-pointer font-sans text-left transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">📄</span>Download Brochure</button>
                      <button @click="sharePage()"
                          class="flex items-center gap-3 w-full px-5 py-[.7rem] text-[.65rem] tracking-[.08em] uppercase text-rtxt2 hover:bg-rlt hover:text-rblue bg-transparent border-none cursor-pointer font-sans text-left transition-colors">
                          <span class="w-[18px] text-center text-[.9rem]">↗</span>Share This Page</button>
                  </div>
              </div>

              <button @click="mobileMenuOpen = !mobileMenuOpen"
                  class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-[5px] border border-rbdr bg-transparent cursor-pointer">
                  <span class="w-5 h-[2px] bg-navy transition-all"
                      :class="mobileMenuOpen ? 'rotate-45 translate-y-[7px]' : ''"></span>
                  <span class="w-5 h-[2px] bg-navy transition-all" :class="mobileMenuOpen ? 'opacity-0' : ''"></span>
                  <span class="w-5 h-[2px] bg-navy transition-all"
                      :class="mobileMenuOpen ? '-rotate-45 -translate-y-[7px]' : ''"></span>
              </button>
          </div>
      </div>

      <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false"
          x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-4"
          x-transition:enter-end="opacity-100 translate-y-0"
          class="lg:hidden bg-white border-b border-rbdr absolute w-full left-0 shadow-xl overflow-y-auto max-h-[80vh]">

          <div class="flex flex-col p-6 space-y-4">
              <div class="text-[.55rem] tracking-[.2em] text-rmuted uppercase border-b border-gray-100 pb-2">Menu
              </div>
              <a href="./#about" aria-label="Jump to About section on home page" @click="mobileMenuOpen = false"
                  class="text-[.75rem] tracking-[.12em] uppercase text-navy no-underline py-1">About Us</a>
              <a href="./#services" aria-label="Jump to Service section on home page" @click="mobileMenuOpen = false"
                  class="text-[.75rem] tracking-[.12em] uppercase text-navy no-underline py-1">Services</a>
              <a href="./#projects" aria-label="Jump to Project section on home page" @click="mobileMenuOpen = false"
                  class="text-[.75rem] tracking-[.12em] uppercase text-navy no-underline py-1">Projects</a>
              <a href="./#contact" aria-label="Jump to Contact section on home page" @click="mobileMenuOpen = false"
                  class="text-[.75rem] tracking-[.12em] uppercase text-navy no-underline py-1">Contact</a>

              <div class="pt-4">
                  <a href="./#contact" aria-label="Jump to Contact section on home page" @click="mobileMenuOpen = false"
                      class="block text-center text-[.7rem] tracking-[.15em] uppercase bg-navy text-white py-3 no-underline">Enquire
                      Now</a>
              </div>
          </div>
      </div>
  </nav>