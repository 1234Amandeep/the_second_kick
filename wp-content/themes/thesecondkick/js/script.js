const menuTogglerOpenBtn = document.getElementById("menu-toggler-open");
const menuTogglerCloseBtn = document.getElementById("menu-toggler-close");
const navLinksExpanded = document.getElementById("nav-links-expanded");

// Menu-Nav-Links expansion and contraction handled
menuTogglerOpenBtn.addEventListener("click", (e) => {
  menuTogglerOpenBtn.classList.toggle("hidden");
  menuTogglerCloseBtn.classList.toggle("hidden");
  navLinksExpanded.classList.toggle("hidden");
});
menuTogglerCloseBtn.addEventListener("click", (e) => {
  menuTogglerCloseBtn.classList.toggle("hidden");
  menuTogglerOpenBtn.classList.toggle("hidden");
  navLinksExpanded.classList.toggle("hidden");
});

// toggle Accordion
const accordionQuestions = document.querySelectorAll(".faq-question");
const accordionAnswers = document.querySelectorAll(".faq-answer");
const accordionOpenToggleBtns = document.querySelectorAll(".open-accordion");
const accordionCloseToggleBtns = document.querySelectorAll(".close-accordion");

accordionQuestions.forEach((question, index) => {
  question.addEventListener("click", () => {
    accordionAnswers[index].classList.toggle("hidden");
    accordionOpenToggleBtns[index].classList.toggle("hidden");
    accordionCloseToggleBtns[index].classList.toggle("hidden");
  });
});
