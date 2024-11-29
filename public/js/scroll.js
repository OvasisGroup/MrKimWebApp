// Select the button
const scrollToTopBtn = document.getElementById("scrollToTop");

// Show/hide button based on scroll position
window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    scrollToTopBtn.classList.add("visible");
  } else {
    scrollToTopBtn.classList.remove("visible");
  }
});

// Scroll to the top when button is clicked
scrollToTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});
