function handleNavbar() {
    let posY = window.scrollY;
    let breakNavbar = document.querySelector('.hero').getBoundingClientRect().height;

    if (posY < 10) {
        document.querySelector('header').classList.add('top');
        document.querySelector('header').classList.remove('transfluent');
    } else if (posY > breakNavbar) {
        document.querySelector('header').classList.add('transfluent');
        document.querySelector('header').classList.remove('top');
    } else if (posY < breakNavbar) {
        document.querySelector('header').classList.remove('transfluent');
        document.querySelector('header').classList.remove('top');
    }
}
function setupNavbar() {
    handleNavbar();
    document.addEventListener('scroll', handleNavbar);
}
window.addEventListener('DOMContentLoaded', (event) => {
    setupNavbar();
});