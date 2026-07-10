const loginModal = document.getElementById("loginModal");
const signupModal = document.getElementById("signupModal");

const loginBtn = document.getElementById("loginBtn");
const signupBtn = document.getElementById("signupBtn");

const closeLogin = document.getElementById("closeLogin");
const closeSignup = document.getElementById("closeSignup");

if(loginBtn) {
    loginBtn.addEventListener("click", () => {
        loginModal.style.display = "block";
    });
}

if(signupBtn) {
    signupBtn.addEventListener("click", () => {
        signupModal.style.display = "block";
    });
}

closeLogin.addEventListener("click", () => {
    loginModal.style.display = "none";
});

closeSignup.addEventListener("click", () => {
    signupModal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target === loginModal) {
        loginModal.style.display = "none";
    }
    if (e.target === signupModal) {
        signupModal.style.display = "none";
    }
});

const searchInput = document.querySelector(".search-bar input");
searchInput.addEventListener("input", function() {
    const searchValue = this.value.toLowerCase();
    const courses = document.querySelectorAll(".course-card");
    courses.forEach(function(course) {       
        const title = course.querySelector("h3")
                            .textContent
                            .toLowerCase();
        if(title.includes(searchValue)) {
            course.style.display = "block";
        } else {
            course.style.display = "none";
        }

    });

});

const contactModal = document.getElementById("contactModal");
const contactBtn = document.getElementById("contactBtn");
const closeContact = document.getElementById("closeContact");


if(contactBtn) {
    contactBtn.addEventListener("click", (e) => {
        e.preventDefault();
        contactModal.style.display = "block";
    });
}

closeContact.addEventListener("click", () => {
    contactModal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target === contactModal) {
        contactModal.style.display = "none";
    }
});

document.querySelectorAll(".slider").forEach(sliderWrapper => {
  const slider = sliderWrapper.querySelector(".slider-container");
  const next = sliderWrapper.querySelector(".next");
  const prev = sliderWrapper.querySelector(".prev");
  const visibleWidth = sliderWrapper.clientWidth;
  next.addEventListener("click", () => {
    slider.scrollBy({ left: visibleWidth, behavior: "smooth" });
  });

  prev.addEventListener("click", () => {
    slider.scrollBy({ left: -visibleWidth, behavior: "smooth" });
  });
});



