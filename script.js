// MODALS LOGIC 
const loginModal = document.getElementById("loginModal");
const signupModal = document.getElementById("signupModal");

const loginBtn = document.getElementById("loginBtn");
const signupBtn = document.getElementById("signupBtn");

const closeLogin = document.getElementById("closeLogin");
const closeSignup = document.getElementById("closeSignup");

// Modal Connexion
if(loginBtn) {
    loginBtn.addEventListener("click", () => {
        loginModal.style.display = "block";
    });
}

// Modal Inscription
if(signupBtn) {
    signupBtn.addEventListener("click", () => {
        signupModal.style.display = "block";
    });
}

// Fermer Modal Connexion lorsque cliqui sur (X)
closeLogin.addEventListener("click", () => {
    loginModal.style.display = "none";
});

// Fermer Modal Inscription lorsque cliqui sur (X)
closeSignup.addEventListener("click", () => {
    signupModal.style.display = "none";
});

// fermer le modal lorsque l'utilisateur clique en dehors du modal
window.addEventListener("click", (e) => {
    if (e.target === loginModal) {
        loginModal.style.display = "none";
    }
    if (e.target === signupModal) {
        signupModal.style.display = "none";
    }
});
// Search bar logic
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

// Contact modal logic
const contactModal = document.getElementById("contactModal");
const contactBtn = document.getElementById("contactBtn");
const closeContact = document.getElementById("closeContact");

// Ouvrir modal Contact
if(contactBtn) {
    contactBtn.addEventListener("click", (e) => {
        e.preventDefault();
        contactModal.style.display = "block";
    });
}

// Fermer modal Contact
closeContact.addEventListener("click", () => {
    contactModal.style.display = "none";
});

// Fermer si clic en dehors
window.addEventListener("click", (e) => {
    if (e.target === contactModal) {
        contactModal.style.display = "none";
    }
});

// selectionner tous les sliders
document.querySelectorAll(".slider").forEach(sliderWrapper => {
  const slider = sliderWrapper.querySelector(".slider-container");
  const next = sliderWrapper.querySelector(".next");
  const prev = sliderWrapper.querySelector(".prev");
  const visibleWidth = sliderWrapper.clientWidth;
  next.addEventListener("click", () => {
    slider.scrollBy({ left: visibleWidth, behavior: "smooth" });
  });
// ajouter un event listener pour le bouton prev
  prev.addEventListener("click", () => {
    slider.scrollBy({ left: -visibleWidth, behavior: "smooth" });
  });
});

function ouvrirCours(titre, lien) {
    document.getElementById("courseTitle").innerText = titre;
    document.getElementById("videoFrame").src = lien;
    document.getElementById("video-course").style.display = "block";
    document.querySelector(".courses").style.display = "none";
}

function fermerCours() {
    document.getElementById("video-course").style.display = "none";
    document.querySelector(".courses").style.display = "block";
    document.getElementById("videoFrame").src = "";
}
