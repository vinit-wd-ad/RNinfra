'use strict';

function scrollTo(id) {
    const el = document.getElementById(id);
    if (el) el.scrollIntoView({
        behavior: 'smooth'
    });
}

/* Parallax hero */
const heroBg = document.getElementById('heroBg');
let ticking = false;
window.addEventListener('scroll', () => {
    if (!ticking) {
        requestAnimationFrame(() => {
            if (heroBg) heroBg.style.transform = `translateY(${window.scrollY * 0.34}px)`;
            ticking = false;
        });
        ticking = true;
    }
}, {
    passive: true
});

/* Scroll reveal */
const revealObs = new IntersectionObserver(
    entries => entries.forEach(e => {
        if (e.isIntersecting) e.target.classList.add('in');
    }), {
    threshold: 0.07
}
);
document.querySelectorAll('.fade-up').forEach(el => revealObs.observe(el));

/* AQI Slider */
(function () {
    const wrap = document.getElementById('aqiWrap');
    const left = document.getElementById('aqiLeft');
    const haze = document.getElementById('aqiHaze');
    const div = document.getElementById('aqiDiv');
    const hint = document.getElementById('aqiHint');
    if (!wrap || !left || !div) return;
    let dragging = false,
        pct = 50;

    function apply(p) {
        pct = Math.max(3, Math.min(97, p));
        div.style.left = pct + '%';
        left.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
        if (haze) haze.style.clipPath = `inset(0 ${100 - pct}% 0 0)`;
    }

    function pctFromX(clientX) {
        const r = wrap.getBoundingClientRect();
        return ((clientX - r.left) / r.width) * 100;
    }
    wrap.addEventListener('mousedown', e => {
        dragging = true;
        apply(pctFromX(e.clientX));
        if (hint) hint.style.opacity = '0';
    });
    window.addEventListener('mousemove', e => {
        if (dragging) apply(pctFromX(e.clientX));
    });
    window.addEventListener('mouseup', () => {
        dragging = false;
    });
    wrap.addEventListener('touchstart', e => {
        dragging = true;
        apply(pctFromX(e.touches[0].clientX));
        if (hint) hint.style.opacity = '0';
        e.preventDefault();
    }, {
        passive: false
    });
    window.addEventListener('touchmove', e => {
        if (dragging) apply(pctFromX(e.touches[0].clientX));
    }, {
        passive: true
    });
    window.addEventListener('touchend', () => {
        dragging = false;
    });
    apply(50);
    setTimeout(() => {
        if (hint) hint.style.opacity = '0';
    }, 4000);
})();

/* Proximity map sidebar */
(function () {
    const toast = document.getElementById('distToast');
    const toastName = document.getElementById('toastName');
    const toastKm = document.getElementById('toastKm');
    const toastRoute = document.getElementById('toastRoute');
    const toastClose = document.getElementById('toastClose');
    const buttons = document.querySelectorAll('.loc-btn');

    function showToast(name, km, routeUrl) {
        toastName.textContent = name;
        toastKm.textContent = km;
        toastRoute.href = routeUrl;
        toast.classList.add('show');
    }

    function hideToast() {
        toast.classList.remove('show');
        buttons.forEach(b => b.classList.remove('active'));
    }
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            if (btn.classList.contains('active')) {
                hideToast();
                return;
            }
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            showToast(btn.dataset.name, btn.dataset.km, btn.dataset.route);
        });
    });
    if (toastClose) toastClose.addEventListener('click', hideToast);
})();

/* Floor plan tab switcher */
function switchTab(id) {
    const keys = ['b3', 'b2', 'b1'];
    keys.forEach(k => {
        const tab = document.getElementById('tab-' + k);
        const panel = document.getElementById('panel-' + k);
        if (!tab || !panel) return;
        const isTarget = (k === id);
        // Panel
        panel.classList.toggle('active', isTarget);
        panel.style.display = isTarget ? '' : 'none';
        // Tab styling
        if (isTarget && k !== 'b1') {
            tab.classList.add('bg-navy', 'border-t-gold');
            tab.classList.remove('bg-rsrf', 'border-t-transparent');
            tab.querySelectorAll('[class*="text-navy"],[class*="text-rmuted"],[class*="text-gold"]').forEach(el => {
                if (el.dataset.label) {
                    el.textContent = el.dataset.label;
                }
            });
        } else if (k !== 'b1') {
            tab.classList.remove('bg-navy', 'border-t-gold');
            tab.classList.add('bg-rsrf', 'border-t-transparent');
        }
        tab.setAttribute('aria-selected', isTarget ? 'true' : 'false');
    });
}
document.querySelectorAll('.p-tab').forEach(tab => {
    tab.addEventListener('keydown', e => {
        if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            tab.click();
        }
    });
});

/* Form submission */
function handleSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('vipForm');
    const success = document.getElementById('formSuccess');
    const name = document.getElementById('f-name').value.trim();
    const wa = document.getElementById('f-wa').value.trim();
    const interest = document.getElementById('f-interest').value;
    if (!name) {
        alert('Please enter your name.');
        return;
    }
    if (!wa) {
        alert('Please enter your WhatsApp number.');
        return;
    }
    if (!interest) {
        alert('Please select your area of interest.');
        return;
    }
    form.style.display = 'none';
    success.classList.remove('hidden');
    success.classList.add('block');
    success.scrollIntoView({
        behavior: 'smooth',
        block: 'center'
    });
}


function switchTab(tabId) {
    // 1. Sabhi tabs se 'active' class hatayein aur default colors restore karein
    document.querySelectorAll('.p-tab').forEach(tab => {
        tab.classList.remove('active', 'bg-navy', 'border-t-gold');
        tab.classList.add('bg-rsrf', 'border-t-transparent');

        // Text colors reset (Inactive styles)
        const label = tab.querySelector('div:nth-child(1)');
        const sqft = tab.querySelector('div:nth-child(2)');

        if (!tab.classList.contains('locked')) {
            label.style.color = 'var(--rmuted)'; // ya #6b7280
            sqft.style.color = 'var(--navy)'; // ya #0d1b3e
        }
    });

    // 2. Clicked tab ko active banayein
    const activeTab = document.getElementById('tab-' + tabId);
    if (activeTab && !activeTab.classList.contains('locked')) {
        activeTab.classList.add('active', 'bg-navy', 'border-t-gold');
        activeTab.classList.remove('bg-rsrf', 'border-t-transparent');

        // Active text colors set karein
        activeTab.querySelector('div:nth-child(1)').style.color = 'rgba(255,255,255,0.5)';
        activeTab.querySelector('div:nth-child(2)').style.color = 'white';
    }

    // 3. Panels switch karne ka logic yahan rahega...
    document.querySelectorAll('.plan-panel').forEach(panel => {
        panel.classList.remove('active');
        panel.style.display = 'none';
    });
    const activePanel = document.getElementById('panel-' + tabId);
    activePanel.classList.add('active');
    activePanel.style.display = 'grid';
}

function site() {
    return {
        activeModal: null,
        dotsOpen: false,
        formSent: false,

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

            // ESC closes modal
            document.addEventListener('keydown', e => {
                if (e.key === 'Escape') this.closeModal();
            });
        },

        openModal(key) {
            this.dotsOpen = false;
            this.activeModal = key;
            document.body.style.overflow = 'hidden';
        },

        closeModal() {
            this.activeModal = null;
            document.body.style.overflow = '';
        },

        closeOtherDropdowns(current) {
            // Alpine handles each dropdown's own open state independently
            // This is a no-op hook for future use
        },

        handleOutsideClick(e) {
            if (!e.target.closest('#dotsWrapper')) {
                this.dotsOpen = false;
            }
        },

        handleSubmit() {
            this.formSent = true;
            setTimeout(() => {
                this.formSent = false;
            }, 5000);
        },

        downloadBrochure() {
            this.dotsOpen = false;
            alert('Brochure download coming soon.\nPlease visit www.risingnexusinfra.com for the latest materials.');
        },

        sharePage() {
            this.dotsOpen = false;
            if (navigator.share) {
                navigator.share({
                    title: 'Rising Nexus Infra',
                    text: 'Where Infra Connects Future & Growth',
                    url: 'https://www.risingnexusinfra.com'
                });
            } else {
                navigator.clipboard.writeText('https://www.risingnexusinfra.com')
                    .then(() => alert('Link copied to clipboard!'));
            }
        }
    };
}