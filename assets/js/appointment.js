document.addEventListener("DOMContentLoaded", () => {

// START SCRIPT ========================================================== //
// ======================================================================= //




// Navigating form pages /////////////////////////////
//////////////////////////////////////////////////////

const pages = document.querySelectorAll(".appointment-form-page");
const nextButtons = document.querySelectorAll(".btn.btn-primary.forward");
const backButtons = document.querySelectorAll(".btn.btn-primary.back");
let currentIndex = 0;

if (pages.length === 0) return;

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

const selects = document.querySelectorAll(".selects .select");

selects.forEach(select => {
  select.addEventListener("click", () => {
    // remove active from all
    selects.forEach(s => s.classList.remove("active"));
    // add to clicked
    select.classList.add("active");
  });
});



// Rendering form calendar ///////////////////////////
//////////////////////////////////////////////////////

// ---- scope: only the appointment form calendar ----
const root = document.querySelector(".appointment-form-page");
if (!root) return;

const cal  = root.querySelector(".calendar");
if (!cal) return;

const daysContainer = cal.querySelector(".days");
const dateEl = cal.querySelector(".date");
const prev = cal.querySelector(".prev");
const next = cal.querySelector(".next");
const eventDay  = root.querySelector(".event-day");   // optional
const eventDate = root.querySelector(".event-date");  // optional

const months = ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"];

const today = new Date();
const todayY = today.getFullYear();
const todayM = today.getMonth();
const todayD = today.getDate();

let month = todayM;
let year  = todayY;

// Persisted selection — starts as "today"
let selected = { y: todayY, m: todayM, d: todayD };

const eventsArr = [];
try {
  const s = localStorage.getItem("events");
  if (s) eventsArr.push(...JSON.parse(s));
} catch {}

function initCalendar() {
  const firstDay = new Date(year, month, 1);
  const lastDay  = new Date(year, month + 1, 0);
  const prevLast = new Date(year, month, 0);

  const prevDaysCount = prevLast.getDate();
  const lastDate      = lastDay.getDate();
  const startWeekday  = firstDay.getDay();
  const trailing      = (7 - lastDay.getDay() - 1 + 7) % 7;

  if (dateEl) dateEl.textContent = `${months[month]} ${year}`;

  const frag = document.createDocumentFragment();

  // leading
  for (let x = startWeekday; x > 0; x--) {
    frag.appendChild(makeDay(new Date(year, month - 1, prevDaysCount - x + 1), "prev-date"));
  }
  // current month
  for (let i = 1; i <= lastDate; i++) {
    const d = new Date(year, month, i);
    const el = makeDay(d);

    // mark real today (no auto .active here)
    if (i === todayD && year === todayY && month === todayM) {
      el.classList.add("today");
    }

    // mark days with events
    for (const e of eventsArr) {
      if (e.day === i && e.month === month + 1 && e.year === year) { el.classList.add("event"); break; }
    }
    frag.appendChild(el);
  }
  // trailing
  for (let j = 1; j <= trailing; j++) {
    frag.appendChild(makeDay(new Date(year, month + 1, j), "next-date"));
  }

  daysContainer.innerHTML = "";
  daysContainer.appendChild(frag);

  requestAnimationFrame(() => {
    // Restore selection if it exists in this view; else default to today visually
    if (selected && selected.y === year && selected.m === month) {
      const sel = queryDay(selected.y, selected.m, selected.d);
      if (sel) setActive(sel, { focusEl: false });
    } else if (year === todayY && month === todayM) {
      const todayEl = daysContainer.querySelector(".day.today");
      if (todayEl) setActive(todayEl, { focusEl: false });
    }

    // Initial scroll position for this month:
    // - If this is today's month => center real today
    // - Otherwise => jump to the beginning of the month (left)
    setInitialScrollPosition();
  });
}

function makeDay(d, extra = "") {
  const el = document.createElement("div");
  el.className = "day" + (extra ? " " + extra : "");
  el.dataset.year  = d.getFullYear();
  el.dataset.month = d.getMonth() + 1; // 1-based
  el.dataset.day   = d.getDate();

  // accessibility + keyboard
  el.setAttribute("role", "gridcell");
  el.setAttribute("aria-selected", "false");
  el.tabIndex = -1;

  const dow = new Intl.DateTimeFormat("nl-NL", { weekday: "short" }).format(d).replace(".", "");
  el.innerHTML = `<span class="dow">${dow}</span><span class="num">${d.getDate()}</span>`;
  return el;
}

function setLabels(d) {
  if (eventDay)  eventDay.textContent  = new Intl.DateTimeFormat("nl-NL", { weekday: "long" }).format(d);
  if (eventDate) eventDate.textContent = `${d.getDate()} ${months[d.getMonth()]} ${d.getFullYear()}`;
}

function setActive(el, { focusEl = true } = {}) {
  daysContainer.querySelectorAll(".day").forEach(d => {
    d.classList.remove("active");
    d.setAttribute("aria-selected", "false");
    d.tabIndex = -1;
  });

  el.classList.add("active");
  el.setAttribute("aria-selected", "true");
  el.tabIndex = 0;
  if (focusEl) el.focus({ preventScroll: true });

  selected = {
    y: +el.dataset.year,
    m: (+el.dataset.month) - 1,
    d: +el.dataset.day
  };

  const d = new Date(selected.y, selected.m, selected.d);
  setLabels(d);
}

function queryDay(y, m0, d) {
  return daysContainer.querySelector(`.day[data-year="${y}"][data-month="${m0+1}"][data-day="${d}"]`);
}

// ---- month nav (scoped) ----
prev?.addEventListener("click", () => {
  month--;
  if (month < 0) { month = 11; year--; }
  initCalendar();
});

next?.addEventListener("click", () => {
  month++;
  if (month > 11) { month = 0; year++; }
  initCalendar();
});

// ---- drag-only + click delegation (robust) ----
(function dragOnlyWithDelegation() {
  let isDown = false;
  let startX = 0;
  let startLeft = 0;
  let dragged = false;
  const THRESHOLD = 6;
  let lastDragAt = 0;

  // block native wheel/keys inside the strip
  daysContainer.addEventListener("wheel", (e) => e.preventDefault(), { passive: false });
  daysContainer.addEventListener("keydown", (e) => {
    if (["ArrowLeft","ArrowRight","ArrowUp","ArrowDown"," ","PageUp","PageDown","Home","End"].includes(e.key)) e.preventDefault();
  });

  daysContainer.addEventListener("pointerdown", (e) => {
    isDown = true;
    dragged = false;
    startX = e.clientX;
    startLeft = daysContainer.scrollLeft;
    daysContainer.classList.add("dragging");
  });

  daysContainer.addEventListener("pointermove", (e) => {
    if (!isDown) return;
    const dx = e.clientX - startX;
    if (!dragged && Math.abs(dx) >= THRESHOLD) dragged = true;
    if (dragged) {
      daysContainer.scrollLeft = startLeft - dx;
      e.preventDefault();
    }
  }, { passive: false });

  function endDrag() {
    if (!isDown) return;
    isDown = false;
    daysContainer.classList.remove("dragging");
    if (dragged) lastDragAt = performance.now();
  }
  daysContainer.addEventListener("pointerup", endDrag);
  daysContainer.addEventListener("pointercancel", endDrag);
  daysContainer.addEventListener("pointerleave", endDrag);

  // delegated click
  daysContainer.addEventListener("click", (e) => {
    if (performance.now() - lastDragAt < 150) return;

    const dayEl = (e.target instanceof Element) ? e.target.closest(".day") : null;
    if (!dayEl || !daysContainer.contains(dayEl)) return;

    const y  = +dayEl.dataset.year;
    const m0 = (+dayEl.dataset.month) - 1;
    const d  = +dayEl.dataset.day;

    if (y !== year || m0 !== month) {
      year = y; month = m0;
      initCalendar();
      requestAnimationFrame(() => {
        const again = queryDay(y, m0, d);
        if (again) setActive(again); // no centering on selection
      });
    } else {
      setActive(dayEl); // no centering on selection
    }
  });
})();

// ---- scroll positioning helpers ----
function setInitialScrollPosition() {
  if (year === todayY && month === todayM) {
    const todayEl = daysContainer.querySelector(".day.today");
    if (todayEl) centerDay(todayEl);
  } else {
    // start at the beginning of the month (left-most)
    daysContainer.scrollLeft = 0;
  }
}

function centerDay(dayEl) {
  const wrap = daysContainer;
  const elCenter = dayEl.offsetLeft + dayEl.offsetWidth / 2;
  const left = Math.max(0, elCenter - wrap.clientWidth / 2);
  wrap.scrollLeft = left; // instant
}

// initial render
initCalendar();




// END SCRIPT ============================================================ //
// ======================================================================= //

});