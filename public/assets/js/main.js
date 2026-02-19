window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

// document.querySelectorAll(".nav-link").forEach((link) => {
//   link.addEventListener("click", function (e) {
//     e.preventDefault();
//     document
//       .querySelectorAll(".nav-link")
//       .forEach((l) => l.classList.remove("active"));
//     this.classList.add("active");
//   });
// });

// Mobile menu toggle

// button for language switcher

function toggleLang(btn) {
  const textElement = btn.querySelector(".lang-text");
  const flagElement = btn.querySelector(".flag-icon");

  if (textElement) {
    if (textElement.textContent.includes("العربية")) {
      textElement.textContent = textElement.textContent
        .replace("العربية", "English")
        .replace("عربي", "EN");
      if (flagElement) flagElement.textContent = "🇬🇧";
    } else {
      textElement.textContent = textElement.textContent.includes("EN")
        ? "عربي | EN"
        : "العربية / English";
      if (flagElement) flagElement.textContent = "🇸🇦";
    }
  }

  // Add pulse animation
  btn.style.animation = "pulse 0.3s ease";
  setTimeout(() => (btn.style.animation = ""), 300);
}

function toggleSwitch(container) {
  const options = container.querySelectorAll(".lang-option");
  options.forEach((opt) => opt.classList.toggle("active"));
}

AOS.init({
  once: false,
  mirror: true,
});



document.addEventListener("DOMContentLoaded", function () {
  console.log("DOM loaded - Starting initialization");

  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  console.log("Found nav links:", navLinks.length);

  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      console.log("Nav link clicked:", href);

      if (href.startsWith("#")) {
        e.preventDefault();

        const targetId = href;
        const targetSection = document.querySelector(targetId);

        if (targetSection) {
          const navbar = document.querySelector(".navbar");
          const navbarHeight = navbar ? navbar.offsetHeight : 0;
          const targetPosition = targetSection.offsetTop - navbarHeight;

          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });

          const navbarCollapse = document.querySelector(".navbar-collapse");
          if (navbarCollapse && navbarCollapse.classList.contains("show")) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
              toggle: true,
            });
          }

          navLinks.forEach((nav) => nav.classList.remove("active"));
          this.classList.add("active");
        } else {
          console.warn("Section not found:", targetId);
        }
      }
    });
  });

  window.addEventListener("scroll", function () {
    let current = "";
    const sections = document.querySelectorAll("section[id]");
    const navbar = document.querySelector(".navbar");
    const navbarHeight = navbar ? navbar.offsetHeight : 0;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - navbarHeight - 100;
      const sectionHeight = section.offsetHeight;

      if (
        window.pageYOffset >= sectionTop &&
        window.pageYOffset < sectionTop + sectionHeight
      ) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === `#${current}`) {
        link.classList.add("active");
      }
    });
  });

  const bookBtns = document.querySelectorAll(
    ".btn-book, .btn-primary ,.btn-orange"
  );
  const bookingModal = document.getElementById("bookingModal");
  const successModal = document.getElementById("successModal");
  const closeBooking = document.getElementById("closeBooking");
  const closeSuccess = document.getElementById("closeSuccess");
  const bookingForm = document.getElementById("bookingForm");

  console.log("Found booking buttons:", bookBtns.length);
  console.log("Booking modal:", bookingModal);
  console.log("Success modal:", successModal);

  bookBtns.forEach((btn, index) => {
    console.log("Adding listener to button", index + 1);
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      console.log("Booking button clicked!", index + 1);
      if (bookingModal) {
        bookingModal.classList.add("show");
        document.body.style.overflow = "hidden";
      }
    });
  });

  if (closeBooking) {
    closeBooking.addEventListener("click", function () {
      console.log("Close booking clicked");
      bookingModal.classList.remove("show");
      document.body.style.overflow = "auto";
    });
  }

  if (closeSuccess) {
    closeSuccess.addEventListener("click", function () {
      console.log("Close success clicked");
      successModal.classList.remove("show");
      document.body.style.overflow = "auto";
    });
  }

  if (bookingForm) {
    bookingForm.addEventListener("submit", function (e) {
      e.preventDefault();
      console.log("Form submitted");

      const name = document.getElementById("name").value;
      const phone = document.getElementById("phone").value;
      const comment = document.getElementById("comment").value;

      console.log("Booking Data:", { name, phone, comment });

      bookingModal.classList.remove("show");
      successModal.classList.add("show");

      bookingForm.reset();

      setTimeout(function () {
        successModal.classList.remove("show");
        document.body.style.overflow = "auto";
      }, 3000);
    });
  }

  window.addEventListener("click", function (e) {
    if (e.target === bookingModal) {
      bookingModal.classList.remove("show");
      document.body.style.overflow = "auto";
    }
    if (e.target === successModal) {
      successModal.classList.remove("show");
      document.body.style.overflow = "auto";
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      if (bookingModal) bookingModal.classList.remove("show");
      if (successModal) successModal.classList.remove("show");
      document.body.style.overflow = "auto";
    }
  });

  console.log("All event listeners initialized successfully");
});

// myVideo (only on home page - safe when elements are missing)
(function initVideo() {
  const video = document.getElementById("myVideo");
  const playPauseBtn = document.getElementById("playPauseBtn");
  const muteBtn = document.getElementById("muteBtn");
  const playIcon = playPauseBtn && playPauseBtn.querySelector("i");
  const muteIcon = muteBtn && muteBtn.querySelector("i");

  if (!video || !playPauseBtn || !muteBtn || !playIcon || !muteIcon) return;

  // Play / Pause
  playPauseBtn.addEventListener("click", () => {
    if (video.paused) {
      video.play();
      playIcon.className = "fa-solid fa-pause";
    } else {
      video.pause();
      playIcon.className = "fa-solid fa-play";
    }
  });

  // Mute / Unmute
  muteBtn.addEventListener("click", () => {
    video.muted = !video.muted;
    muteIcon.className = video.muted ? "fa-solid fa-volume-xmark" : "fa-solid fa-volume-high";
  });
})();
