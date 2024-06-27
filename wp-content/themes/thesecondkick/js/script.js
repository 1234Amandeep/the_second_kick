const menuTogglerOpenBtn = document.getElementById("menu-toggler-open");
const menuTogglerCloseBtn = document.getElementById("menu-toggler-close");
const navLinksExpanded = document.getElementById("nav-links-expanded");

// Menu-Nav-Links expansion and contraction handled
menuTogglerOpenBtn.addEventListener("click", (e) => {
  menuTogglerOpenBtn.classList.add("hidden");
  menuTogglerCloseBtn.classList.remove("hidden");
  navLinksExpanded.classList.remove("hidden");
});
menuTogglerCloseBtn.addEventListener("click", (e) => {
  menuTogglerCloseBtn.classList.add("hidden");
  menuTogglerOpenBtn.classList.remove("hidden");
  navLinksExpanded.classList.add("hidden");
});
