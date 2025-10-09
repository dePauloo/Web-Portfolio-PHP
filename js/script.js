const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
      // Hapus 'active' dari semua link
      navLinks.forEach(l => l.classList.remove('active'));
      // Tambahkan 'active' hanya ke link yang diklik
      link.classList.add('active');
    });
  });


// -------------------- ScrollSpy + Scroll Bawah ke Contact --------------------
window.addEventListener("scroll", () => {
  const sections = document.querySelectorAll("section, div[id]");
  const scrollPos = window.scrollY + 150; // offset agar aktif di tengah layar
  const navLinks = document.querySelectorAll("nav ul li a");

  let foundActive = false;

  sections.forEach((section) => {
    if (!section.id) return;
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;

    if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
      navLinks.forEach((link) => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${section.id}`) {
          link.classList.add("active");
          foundActive = true;
        }
      });
    }
  });

  
  // Jika sudah scroll mentok paling bawah, paksa active ke #contact
  if (
    window.innerHeight + window.scrollY >= document.body.offsetHeight - 10
  ) {
    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#Contact") {
        link.classList.add("active");
      }
    });
  } else if (!foundActive) {
    // Jika belum ada section terdeteksi, reset
    navLinks.forEach((link) => link.classList.remove("active"));
  }
});

// -------------------- Tab Control --------------------
var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname) {
  for (let tablink of tablinks) tablink.classList.remove("active-link");
  for (let tabcontent of tabcontents) tabcontent.classList.remove("active-tab");
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabname).classList.add("active-tab");

  // Tampilkan chart saat tab graphic dibuka
  if (tabname === "graphic" && !window.chartInitialized) {
    initChart();
    window.chartInitialized = true;
  }
}

// -------------------- Menu Mobile --------------------
var sidemeu = document.getElementById("sidemenu");

function openmenu() {
  sidemeu.style.right = "0";
}
function closemenu() {
  sidemeu.style.right = "-200px";
}

// -------------------- Google Sheet Form (W3Schools Example) --------------------
/*const scriptURL =
  "https://script.google.com/macros/s/AKfycbwu7_lHRLxnEcCCCkfv8osN0tiSZl62_iuFyg5RKG-rzHarX4mhY2-gJgDYtVVKXa_e/exec";
const form = document.forms["submit-to-google-sheet"];*/
const form = document.getElementById("contact-form");
const msg = document.getElementById("msg");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  fetch("contact.php", {
    method: "POST",
    body: new FormData(form),
  })
    .then((response) => response.text())
    .then((data) => {
      if (data.trim() === "success") {
        msg.innerHTML = "Message sent successfully ✅";
        msg.style.color = "lightgreen";
        form.reset();
      } else {
        msg.innerHTML = "Error sending message ❌";
        msg.style.color = "red";
      }
      setTimeout(() => (msg.innerHTML = ""), 5000);
    })
    .catch((error) => {
      msg.innerHTML = "Error sending message ❌";
      msg.style.color = "red";
    });
});

// -------------------- Chart Radar Initialization -------------------- //
const CHART_DATA_URL = 'chart-data.php';
const POLL_INTERVAL_MS = 100;

let radarChart = null;
let lastLabels = [];
let lastValues = [];

function arraysEqual(a, b) {
  if (!Array.isArray(a) || !Array.isArray(b)) return false;
  if (a.length !== b.length) return false;
  for (let i = 0; i < a.length; i++) {
    if (a[i] !== b[i]) return false;
  }
  return true;
}

async function fetchChartData() {
  try {
    const res = await fetch(CHART_DATA_URL, { cache: 'no-store' });
    if (!res.ok) {
      console.error('Failed to fetch chart data', res.status);
      return null;
    }
    const json = await res.json();
    if (!json || !Array.isArray(json.labels) || !Array.isArray(json.values)) {
      console.error('Invalid chart data format', json);
      return null;
    }
    return { labels: json.labels, values: json.values };
  } catch (err) {
    console.error('Error fetching chart data', err);
    return null;
  }
}

function createRadarChart(ctx, labels, values) {
  if (!ctx) return;
  const config = {
    type: 'radar',
    data: {
      labels: labels,
      datasets: [{
        //label: 'Skill Level',
        data: values,
        fill: true,
        backgroundColor: 'rgba(255, 0, 79, 0.2)',
        borderColor: '#ff004f',
        pointBackgroundColor: '#ff004f',
        borderWidth: 2
      }]
    },
    options: {
      animations: false,
      responsive: true,
      // maintainAspectRatio: false,
      /*scales: {
        r: {
          angleLines: { color: '#444' },
          grid: { color: '#666' },
          pointLabels: { color: '#fff', font: { size: 14 } },
          suggestedMin: 0,
          suggestedMax: 100
        }
      },*/
      scales: {
        r: {
          angleLines: { color: '#444' },
          grid: { color: '#666' },
          pointLabels: { color: '#fff', font: { size: 14 } },
          suggestedMin: 0,
          suggestedMax: 100,
          ticks: {
            display: false
          }
        }
      },     
      plugins: {
        legend: {
          display: false
          //labels: { color: '#fff' }
        }
      }
    }
  };

  return new Chart(ctx, config);
}

async function initPolling() {
  const canvas = document.getElementById('skillRadarChart');
  if (!canvas) {
    console.error('Canvas #skillRadarChart not found in DOM.');
    return;
  }
  const ctx = canvas.getContext('2d');

  const initial = await fetchChartData();
  const initialLabels = initial ? initial.labels : ['CAD','CAM','Electrical Maintenance','Programming','Electrical Drawing'];
  const initialValues = initial ? initial.values : [90,90,85,60,80];

  radarChart = createRadarChart(ctx, initialLabels, initialValues);
  lastLabels = Array.from(initialLabels);
  lastValues = Array.from(initialValues);

  setInterval(async () => {
    const data = await fetchChartData();
    if (!data) return;

    const { labels, values } = data;

    if (arraysEqual(labels, lastLabels) && arraysEqual(values, lastValues)) {
      return;
    }

    radarChart.data.labels = labels;
    radarChart.data.datasets[0].data = values;

    try {
      radarChart.update('none');
    } catch (e) {
      radarChart.update({ duration: 0, lazy: false });
    }

    lastLabels = Array.from(labels);
    lastValues = Array.from(values);
  }, POLL_INTERVAL_MS);
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initPolling);
} else {
  initPolling();
}