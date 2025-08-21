const date = document.querySelector(".date"),
  daysContainer = document.querySelector(".days"),
  prev = document.querySelector(".prev"),
  next = document.querySelector(".next"),
  todayBtn = document.querySelector(".today-btn"),
  eventDay = document.querySelector(".event-day"),
  eventDate = document.querySelector(".event-date");

let today = new Date();
let month = today.getMonth();
let year = today.getFullYear();

const months = [
  "januari","februari","maart","april","mei","juni",
  "juli","augustus","september","oktober","november","december",
];

const eventsArr = [];
getEvents();

function initCalendar() {
  const firstDay = new Date(year, month, 1);
  const lastDay = new Date(year, month + 1, 0);
  const prevLastDay = new Date(year, month, 0);

  const prevDays = prevLastDay.getDate();
  const lastDate = lastDay.getDate();
  const day = firstDay.getDay();                 
  const nextDays = 7 - lastDay.getDay() - 1;     

  date.textContent = `${months[month]} ${year}`;

  // cache "now" once so comparisons below match your original behavior
  const now = new Date();
  const nowY = now.getFullYear();
  const nowM = now.getMonth();
  const nowD = now.getDate();

  let days = "";

  // leading days (previous month)
  for (let x = day; x > 0; x--) {
    days += `<div class="day prev-date">${prevDays - x + 1}</div>`;
  }

  // current month
  for (let i = 1; i <= lastDate; i++) {
    let hasEvent = false;
    for (const e of eventsArr) {
      if (e.day === i && e.month === month + 1 && e.year === year) {
        hasEvent = true;
        break;
      }
    }

    if (i === nowD && year === nowY && month === nowM) {
      getActiveDay(i);
      days += `<div class="day today active${hasEvent ? " event" : ""}">${i}</div>`;
    } else {
      days += `<div class="day${hasEvent ? " event" : ""}">${i}</div>`;
    }
  }

  // trailing days (next month)
  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="day next-date">${j}</div>`;
  }

  daysContainer.innerHTML = days;
  addListner(); // keep same function name for compatibility
}

// prev/next month
function prevMonth() {
  month--;
  if (month < 0) {
    month = 11;
    year--;
  }
  initCalendar();
}

function nextMonth() {
  month++;
  if (month > 11) {
    month = 0;
    year++;
  }
  initCalendar();
}

prev.addEventListener("click", prevMonth);
next.addEventListener("click", nextMonth);

initCalendar();

// add active on day (kept logic so clicked prev/next-date behaves the same)
function addListner() {
  const days = document.querySelectorAll(".day");
  days.forEach((d) => {
    d.addEventListener("click", (e) => {
      const clicked = e.target;
      const value = clicked.innerHTML;

      getActiveDay(Number(value));

      // remove active
      days.forEach((el) => el.classList.remove("active"));

      // keep original setTimeout-based re-apply to match rendering timing
      if (clicked.classList.contains("prev-date")) {
        prevMonth();
        setTimeout(() => {
          document.querySelectorAll(".day").forEach((el) => {
            if (!el.classList.contains("prev-date") && el.innerHTML === value) {
              el.classList.add("active");
            }
          });
        }, 100);
      } else if (clicked.classList.contains("next-date")) {
        nextMonth();
        setTimeout(() => {
          document.querySelectorAll(".day").forEach((el) => {
            if (!el.classList.contains("next-date") && el.innerHTML === value) {
              el.classList.add("active");
            }
          });
        }, 100);
      } else {
        clicked.classList.add("active");
      }
    });
  });
}

todayBtn.addEventListener("click", () => {
  today = new Date();
  month = today.getMonth();
  year = today.getFullYear();
  initCalendar();
});

// active day label + date (unchanged except minor safety)
function getActiveDay(dateNum) {
  const d = new Date(year, month, dateNum);
  const dayName = new Intl.DateTimeFormat("nl-NL", { weekday: "short" })
    .format(d)
    .replace(".", "");
  if (eventDay) eventDay.textContent = dayName;
  if (eventDate) eventDate.textContent = `${dateNum} ${months[month]} ${year}`;
}

// load events from localStorage (unchanged)
function getEvents() {
  const stored = localStorage.getItem("events");
  if (!stored) return;
  eventsArr.push(...JSON.parse(stored));
}
