const slides     = [...document.querySelectorAll('.slide')];
const total      = slides.length;
const progressBar = document.getElementById('progressBar');
const counter     = document.getElementById('counter');
let current = 0;

function goTo(n) {
  n = Math.max(0, Math.min(total - 1, n));
  slides[current].classList.remove('active');
  current = n;
  slides[current].classList.add('active');
  progressBar.style.width = ((current + 1) / total * 100) + '%';
  counter.textContent = (current + 1) + ' / ' + total;
  history.replaceState(null, '', '#' + (current + 1));
}
const next = () => goTo(current + 1);
const prev = () => goTo(current - 1);

document.getElementById('next').onclick = next;
document.getElementById('prev').onclick = prev;
document.getElementById('fs').onclick   = toggleFS;

function toggleFS() {
  document.fullscreenElement
    ? document.exitFullscreen()
    : document.documentElement.requestFullscreen();
}

/* Keyboard */
document.addEventListener('keydown', e => {
  switch (e.key) {
    case 'ArrowRight': case 'ArrowDown': case ' ': case 'PageDown':
      e.preventDefault(); next(); break;
    case 'ArrowLeft': case 'ArrowUp': case 'PageUp':
      e.preventDefault(); prev(); break;
    case 'Home': goTo(0); break;
    case 'End':  goTo(total - 1); break;
    case 'f': case 'F': toggleFS(); break;
  }
});

/* Swipe (mobile) */
let startX = null;
document.addEventListener('touchstart', e => startX = e.touches[0].clientX, {passive:true});
document.addEventListener('touchend', e => {
  if (startX === null) return;
  const dx = e.changedTouches[0].clientX - startX;
  if (Math.abs(dx) > 50) dx < 0 ? next() : prev();
  startX = null;
}, {passive:true});

/* Buka slide langsung via URL (#3) */
const hash = parseInt(location.hash.replace('#',''), 10);
goTo(Number.isFinite(hash) ? hash - 1 : 0);