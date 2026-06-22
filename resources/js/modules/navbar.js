export default function initNavbar() {

    const btn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');
    const overlay = document.getElementById('mobile-overlay');
    const links = document.querySelectorAll('.mobile-link');

    if (!btn || !menu || !overlay) return;

    function openMenu() {

        menu.classList.remove('hidden');
        overlay.classList.remove('hidden');

        btn.classList.add('active');

        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {

        menu.classList.add('hidden');
        overlay.classList.add('hidden');

        btn.classList.remove('active');

        document.body.style.overflow = '';
    }

    btn.addEventListener('click', () => {

        if (btn.classList.contains('active')) {
            closeMenu();
        } else {
            openMenu();
        }

    });

    overlay.addEventListener('click', closeMenu);

    links.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

}