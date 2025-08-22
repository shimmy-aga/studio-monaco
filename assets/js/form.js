// START SCRIPT ========================================================== //
// ======================================================================= //



document.addEventListener('input', (e) => {
  if (!e.target.matches('.js-input')) return;
  e.target.classList.toggle('not-empty', e.target.value.trim() !== '');
});

document.querySelectorAll('.js-input').forEach(el => {
  el.classList.toggle('not-empty', el.value.trim() !== '');
});




// END SCRIPT ============================================================ //
// ======================================================================= //