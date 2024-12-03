// Menambahkan animasi smooth scroll untuk navigasi
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Menambahkan interaksi popup saat klik menu
const menuItems = document.querySelectorAll('.menu-item');
menuItems.forEach(item => {
    item.addEventListener('click', () => {
        alert('Anda telah memilih menu: ' + item.querySelector('h2').textContent);
    });
});

// Animasi header saat di-scroll
window.addEventListener('scroll', () => {
    let header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Menambahkan efek pada header saat di-scroll
document.querySelector('header').style.transition = 'all 0.3s ease';

document.addEventListener("DOMContentLoaded", function() {
    // Menambahkan animasi saat menu-item muncul
    const menuItems = document.querySelectorAll('.menu-item');
    
    menuItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.opacity = 1;
            item.style.transform = 'translateY(0)';
        }, index * 300); // Muncul satu per satu dengan delay
    });
});
