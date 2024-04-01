const wrapSearch = document.querySelector(".search-btn");
const searchIcon = document.querySelector(".search-btn ion-icon");
const searchInput = document.querySelector(".search-btn input");
let a = 0;
function eventHandle() {
  wrapSearch.addEventListener("click", (a) => {
    a = 1;
    searchHandle(a);
  });
  searchInput.addEventListener("focusout", (a) => {
    a = 2;
    searchHandle(a);
  });
}
function searchHandle(a) {
  if (a == 1) {
    searchInput.classList.add("active");
    searchIcon.classList.add("active");
    wrapSearch.classList.add("search-btn-active");
    searchInput.placeholder = "Search..";
    searchInput.focus();
  }
  if (a == 2) {
    searchInput.classList.remove("active");
    searchIcon.classList.remove("active");
    wrapSearch.classList.remove("search-btn-active");
    searchInput.placeholder = "";
    searchInput.blur();
  }
}
eventHandle();
