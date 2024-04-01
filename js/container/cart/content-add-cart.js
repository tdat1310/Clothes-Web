const contentAddCartHandle = () => {
  const colorSelect = document.querySelectorAll(".color-content .color-type");
  const sizeSelect = document.querySelectorAll(".size-content .size-type");
  const desBtn = document.querySelectorAll(".des-btn");
  const ascBtn = document.querySelectorAll(".asc-btn");
  const colorHandle = () => {
    colorSelect.forEach((a) => {
      a.addEventListener("click", () => {
        a.classList.add("active");
        a.parentElement.previousElementSibling.innerHTML = a.id;
        colorSelect.forEach((b) => {
          if (b.parentElement.className == "color-content active" && b != a) {
            b.classList.remove("active");
          }
        });
      });
    });
  };
  const sizeHandle = () => {
    sizeSelect.forEach((a) => {
      a.addEventListener("click", () => {
        a.classList.add("active");
        a.parentElement.previousElementSibling.innerHTML = a.id;
        sizeSelect.forEach((b) => {
          if (b.parentElement.className == "size-content active" && b != a) {
            b.classList.remove("active");
          }
        });
      });
    });
  };
  const quantityHandle = () => {
    desBtn.forEach((a) => {
      a.addEventListener("click", () => {
        index = productActiveIndex();
        if (a.parentElement.previousElementSibling.value > 1) {
          a.parentElement.previousElementSibling.value = String(
            Number(a.parentElement.previousElementSibling.value) - 1
          );
        }
      });
    });
    ascBtn.forEach((b) => {
      b.addEventListener("click", () => {
        index = productActiveIndex();
        b.parentElement.previousElementSibling.value = String(
          Number(b.parentElement.previousElementSibling.value) + 1
        );
      });
    });
  };
  quantityHandle();
  colorHandle();
  sizeHandle();
}
contentAddCartHandle();
