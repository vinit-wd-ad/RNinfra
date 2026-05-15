// ── VIDEO ──
(function () {
    var v = document.getElementById('hv');
    if (!v) return;
    v.addEventListener('load', function () {
        v.classList.add('on');
    });
    setTimeout(function () {
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
    maxZoom: 19,
}).addTo(map);
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_only_labels/{z}/{x}/{y}{r}.png', {
    maxZoom: 19,
    opacity: .9
}).addTo(map);

function mkico(on) {
    var s = on ? 20 : 10;
    return L.divIcon({
        className: '',
        html: '<div style="width:' + s + 'px;height:' + s + 'px;background:' + (on ? '#0cff05' : '#0dff056b') + ';border-radius:50%;border:' + (on ? '2.5px solid #fff' : '1.5px solid rgba(255,255,255,.65)') + ';box-shadow:0 0 ' + (on ? 18 : 8) + 'px rgba(201,164,92,' + (on ? 1 : .55) + ');transition:all .3s"></div>',
        iconSize: [s, s],
        iconAnchor: [s / 2, s / 2]
    });
}
var aid = null,
    mks = {},
    cf = 'all';

function sel(id) {
    var a = areas.find(function (x) {
        return x.id === id;
    });
    if (!a) return;
    if (aid && mks[aid]) mks[aid].setIcon(mkico(false));
    aid = id;
    if (mks[id]) mks[id].setIcon(mkico(true));
    // update list highlight
    var L2 = document.getElementById('alist');
    L2.querySelectorAll('.arow').forEach(function (el) {
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
          <div class="font-serif font-light text-gold text-[1.5rem]">
            ${a.icon} ${a.name}
          </div>
          
          <div class="text-white/45 text-[0.8rem] leading-[1.65] mt-[0.3rem] font-light">
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

var dmapObs = new MutationObserver(function (mutations) {
    mutations.forEach(function (m) {
        m.addedNodes.forEach(function (node) {
            if (node.nodeType === 1) {
                if (node.tagName === 'IMG') {
                    node.setAttribute('alt', "Navigate Dubai's Prime Locations");
                }
                node.querySelectorAll && node.querySelectorAll('img').forEach(function (img) {
                    img.setAttribute('alt', "Navigate Dubai's Prime Locations");
                });
            }
        });
    });
});

dmapObs.observe(document.getElementById('dmap'), {
    childList: true,
    subtree: true
});
document.querySelectorAll('#dmap img').forEach(function (img) {
    img.setAttribute('alt', "Navigate Dubai's Prime Locations");
});

function buildList(fl, q) {
    var el = document.getElementById('alist');
    var f = areas.filter(function (a) {
        return (fl === 'all' || a.filters.indexOf(fl) >= 0) && (!q || a.name.toLowerCase().indexOf((q || '').toLowerCase()) >= 0);
    });

    document.getElementById('zct').textContent = f.length + ' Prime District' + (f.length !== 1 ? 's' : '');

    el.innerHTML = f.map(function (a) {
        // Check if this is the active/selected ID
        const isActive = a.id === aid;
        const activeClass = isActive ? 'bg-gold/10' : 'hover:bg-gold/7';

        return `
      <div class="arow ${activeClass} flex items-start gap-[0.72rem] py-[0.78rem] px-[1.4rem] border-b border-white/5 cursor-pointer transition-colors duration-150" 
           data-id="${a.id}" 
           onclick="sel('${a.id}')">
        
        <!-- Icon Box -->
        <div class="w-[27px] h-[27px] shrink-0 border border-gold/40 text-white/70 flex items-center justify-center text-[0.74rem]">
          ${a.icon}
        </div>
        
        <!-- Content -->
        <div class="flex-1 min-w-0">
          <div class="text-white font-light text-[1rem] truncate">
            ${a.name}
          </div>
          
          <!-- Tags -->
          <div class="flex gap-[0.28rem] flex-wrap mt-[0.22rem]">
            ${a.tags.slice(0, 2).map(function (t) {
            return `
                <span class="text-[0.7rem] tracking-[0.08em] uppercase px-[0.36rem] py-[0.1rem] bg-gold/10 text-gold border border-gold/40">
                  ${t}
                </span>`;
        }).join('')}
          </div>
          
          <!-- Meta Info -->
          <div class="text-white/70 text-[0.7rem] mt-[0.18rem]">
            ${a.from} · ${a.roi} yield
          </div>
        </div>
      </div>`;
    }).join('') || '<div class="p-6 text-white/22 text-[0.73rem]">No areas match.</div>';
}
areas.forEach(function (a) {
    var m = L.marker([a.lat, a.lng], {
        icon: mkico(false),
        title: a.name
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
        .on('click', function () {
            sel(a.id);
        });
    mks[a.id] = m;
});
buildList('all', '');

document.querySelectorAll('.map-fb').forEach(function (b) {
    b.addEventListener('click', function () {
        document.querySelectorAll('.map-fb').forEach(function (x) {
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
    var ft = props.filter(function (p) {
        return f === 'all' || p.tp === f || p.pt === f;
    });

    g.innerHTML = ft.map(function (p) {
        return `
      <div class="group bg-white border border-gold/15 overflow-hidden transition-all duration-400 cursor-pointer hover:-translate-y-[6px] hover:shadow-[0_22px_60px_rgba(13,27,46,0.14)]">
        
        <!-- Image Container -->
        <div class="h-[198px] overflow-hidden relative">
          <img src="${p.img}" alt="${p.nm}" loading="lazy" 
               class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.07]">
          
          <!-- Badge -->
          <div class="absolute top-[0.85rem] left-[0.85rem] bg-navy border border-gold/40 text-white text-[0.68rem] tracking-[0.16em] uppercase px-[0.7rem] py-[0.26rem]">
            ${p.badge}
          </div>
          
          <!-- ROI Tag -->
          <div class="absolute top-[0.85rem] right-[0.85rem] bg-green-700/88 text-white text-[0.8rem] tracking-[0.12em] uppercase px-[0.7rem] py-[0.26rem]">
            ${p.roi}
          </div>
        </div>

        <!-- Content Box -->
        <div class="p-[1.2rem]">
          <div class="text-gold text-[0.8rem] tracking-[0.2em] uppercase mb-[0.3rem] font-normal">
            ${p.dev}
          </div>
          
          <div class="font-serif font-normal text-[#0d1b2e] text-[1.8rem] leading-[1.28] mb-[0.38rem]">
            ${p.nm}
          </div>
          
          <div class="text-[#0d1b2e]/42 text-[0.9rem] font-light">
            ◇ ${p.loc}
          </div>

          <!-- Footer Info -->
          <div class="flex justify-between items-end mt-[0.95rem] pt-[0.95rem] border-t border-gold/10">
            <div>
              <div class="font-serif font-light text-[#0d1b2e] text-[1.3rem]">
                ${p.price}
              </div>
              <div class="text-[#0d1b2e]/38 text-[0.8rem] font-light">
                Starting From
              </div>
            </div>
            
            <a href="${p.link}" target="_blank" 
               class="text-gold text-[0.8rem] tracking-[0.14em] uppercase border-b border-gold/30 pb-[1px] no-underline hover:text-[#0d1b2e] transition-colors">
               Enquire ↗
            </a>
          </div>
        </div>
      </div>`;
    }).join('');
}
rprops('all');
document.querySelectorAll('.prop-fb').forEach(function (b) {
    b.addEventListener('click', function () {
        document.querySelectorAll('.prop-fb').forEach(function (x) {
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

(function () {
    var g = document.getElementById('devgrid');
    g.innerHTML = devs.map(function (d) {
        // Dynamic Font Size logic (same as before)
        var fontSize = d.abbr.length > 8 ? 'text-[.8rem]' : d.abbr.length > 5 ? 'text-[.6rem]' : 'text-[.68rem]';

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
            '<div class="text-navy text-[.8rem] font-medium leading-[1.3] text-center">' +
            d.nm +
            '</div>'
            // Category/City
            +
            '<div class="text-navy/70 text-[.7rem] tracking-[.08em] uppercase mt-[.18rem] text-center font-light">' +
            d.ct +
            '</div>' +
            '</div>';
    }).join('');
})();

// ── SCROLL REVEAL ──
(function () {
    var o = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
            if (e.isIntersecting) {
                e.target.classList.add('vis');
                o.unobserve(e.target);
            }
        });
    }, {
        threshold: .08
    });
    document.querySelectorAll('.rv').forEach(function (el) {
        o.observe(el);
    });
})();