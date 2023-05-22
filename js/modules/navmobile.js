export function openMobile() {
    const burger = document.getElementById('openMenu');
    burger.addEventListener('click', () => {
        var links = document.getElementById('linksMenu');
        var quit = document.getElementById('closeMenu');
        links.style.display = 'flex';
        quit.style.display = 'inline';
    });
}

export function closeMobile() {
    const burger = document.getElementById('closeMenu');
    burger.addEventListener('click', () => {
        var links = document.getElementById('linksMenu');
        var quit = document.getElementById('closeMenu');
        burger.style.padding = '16px 16px 32px 32px';
        links.style.display = 'none';
        quit.style.display = 'none';
    });
}