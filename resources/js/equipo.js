document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.equipo-card').forEach(card => {
    console.log('equipo.js cargado');

    const color = card.getAttribute('data-overlay');
    const overlay = card.querySelector('.overlay');

    card.addEventListener('mouseenter', () => {
      overlay.style.backgroundColor = color;
    });

    card.addEventListener('mouseleave', () => {
      overlay.style.backgroundColor = 'transparent';
    });
  });
});
