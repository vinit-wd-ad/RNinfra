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