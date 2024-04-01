const productActiveIndex = () => {
  const product = document.querySelectorAll('.view-add-cart.active')[0];
  return product.parentElement.nextElementSibling.nextElementSibling.value;   
}
const OpenCloseViewCart = () => {
  const viewAddCartBtn = document.querySelectorAll(".view-add-cart-btn");
  const colorContent = document.querySelectorAll(".color-content");
  const sizeContent = document.querySelectorAll(".size-content");
  const viewAddCart = document.querySelectorAll(".view-add-cart");
  const closeViewAddCartBtn = document.querySelectorAll(".vac-close-btn");
  const openViewAddCart = () => {
    viewAddCartBtn.forEach((a, index) => {
      a.addEventListener("click", () => {
        viewAddCart[index].classList.add("active");
        colorContent[index].classList.add("active");
        sizeContent[index].classList.add("active");
        viewAddCart.forEach((b) => {
          if (b != viewAddCart[index]) {
            b.classList.remove("active");
          }
        });
        colorContent.forEach((c) => {
          if (c != colorContent[index]) {
            c.classList.remove("active");
          }
        });
        sizeContent.forEach((d) => {
          if (d != sizeContent[index]) {
            d.classList.remove("active");
          }
        });
      });
    });
  };
  const closeViewAddCart = () => {
    closeViewAddCartBtn.forEach((a, index) => {
      a.addEventListener("click", () => {
        viewAddCart[index].classList.remove("active");
        colorContent[index].classList.remove("active");
        sizeContent[index].classList.remove("active");
      });
    });
  };
  openViewAddCart();
  closeViewAddCart();
};
const priceViewHandle = () => {
  const priceAddCart = document.querySelectorAll(".price-view .price");
  const price = document.querySelectorAll(".product-price .price");
  price.forEach((a, indexA) => {
    priceAddCart.forEach((b, indexB) => {
      if (indexB == indexA) b.innerHTML = a.innerHTML;
    });
  });
};
priceViewHandle();
OpenCloseViewCart();

