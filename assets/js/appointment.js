document.addEventListener("DOMContentLoaded", () => {
  const pages = document.querySelectorAll(".appointment-form-page");
  const nextButtons = document.querySelectorAll(".btn.btn-primary.forward");
  const backButtons = document.querySelectorAll(".btn.btn-primary.back");
  let currentIndex = 0;

  pages[currentIndex].classList.add("active");

  function go(toIndex) {
    if (toIndex === currentIndex || toIndex < 0 || toIndex >= pages.length) return;

    const from = pages[currentIndex];
    const to = pages[toIndex];

    const onEnd = (e) => {
      // Only react to this page's opacity transition
      if (e.target !== from || e.propertyName !== "opacity") return;

      from.classList.remove("active", "fade-out");
      to.classList.add("active");
      currentIndex = toIndex;
      window.scrollTo({ top: 0, behavior: "smooth" });
    };

    from.addEventListener("transitionend", onEnd, { once: true });
    // start fading out the current page
    requestAnimationFrame(() => from.classList.add("fade-out"));

    // Fallback in case transitionend is missed
    setTimeout(() => {
      if (!to.classList.contains("active")) {
        from.classList.remove("active", "fade-out");
        to.classList.add("active");
        currentIndex = toIndex;
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    }, 700); //
  }

  nextButtons.forEach(btn =>
    btn.addEventListener("click", e => {
      e.preventDefault();
      go(currentIndex + 1);
    })
  );

  backButtons.forEach(btn =>
    btn.addEventListener("click", e => {
      e.preventDefault();
      go(currentIndex - 1);
    })
  );
});



document.addEventListener("DOMContentLoaded", () => {
  const selects = document.querySelectorAll(".selects .select");

  selects.forEach(select => {
    select.addEventListener("click", () => {
      // remove active from all
      selects.forEach(s => s.classList.remove("active"));
      // add to clicked
      select.classList.add("active");
    });
  });
});