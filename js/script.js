// Плавный скроллинг вверх
document.querySelector('.scroll-to-top a').addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth',
    });
});