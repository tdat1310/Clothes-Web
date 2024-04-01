const stickyHeaderHandle = () => {
  const mainHeader = document.querySelector(".main-header");
  const topHeader = document.querySelector(".top-header");
  const headerHeight = mainHeader.offsetHeight + topHeader.offsetHeight;
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > headerHeight)
      mainHeader.classList.add("sticky-header");
    else mainHeader.classList.remove("sticky-header");
  });
};
stickyHeaderHandle();
