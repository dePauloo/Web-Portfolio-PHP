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
const scriptURL =
  "https://script.google.com/macros/s/AKfycbwu7_lHRLxnEcCCCkfv8osN0tiSZl62_iuFyg5RKG-rzHarX4mhY2-gJgDYtVVKXa_e/exec";
const form = document.forms["submit-to-google-sheet"];
const msg = document.getElementById("msg");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => {
      msg.innerHTML = "Message sent successfully ✅";
      msg.style.color = "lightgreen";
      setTimeout(() => (msg.innerHTML = ""), 5000);
      form.reset();
    })
    .catch((error) => {
      msg.innerHTML = "Error sending message ❌";
      msg.style.color = "red";
    });
});

// -------------------- Chart Radar Initialization --------------------
function initChart() {
  const ctx = document.getElementById("skillRadarChart");
  new Chart(ctx, {
    type: "radar",
    data: {
      labels: ["CAD", "CAM", "Electrical Maintenance", "Programming", "Electrical Drawing"],
      datasets: [
        {
          label: "Skill Level",
          data: [90, 90, 85, 60, 80],
          fill: true,
          backgroundColor: "rgba(255, 0, 79, 0.2)",
          borderColor: "#ff004f",
          pointBackgroundColor: "#ff004f",
          borderWidth: 2,
        },
      ],
    },
    options: {
      scales: {
        r: {
          angleLines: { color: "#444" },
          grid: { color: "#666" },
          pointLabels: { color: "#fff", font: { size: 14 } },
          suggestedMin: 0,
          suggestedMax: 100,
        },
      },
      plugins: {
        legend: {
          labels: { color: "#fff" },
        },
      },
    },
  });
}