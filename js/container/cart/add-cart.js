const cartHandle = () => {
  const cartItemHandle = () => {
    const checkCartInput = document.querySelectorAll(".checked-cart");
    const desBtn = document.querySelectorAll(".des-cart-btn");
    const ascBtn = document.querySelectorAll(".asc-cart-btn");
    const sumPrice = document.querySelector(".sum-price");
    const CheckCartHandle = () => {
      checkCartInput.forEach((itemCheck) => {
        itemCheck.addEventListener("click", () => {
          if (itemCheck.checked) {
            itemCheck.nextElementSibling.classList.add("active");
            console.log(1);
          } else itemCheck.nextElementSibling.classList.remove("active");
        });
      });
    };
    // const updateCartItemQuantityHandle = () => {
    //   productQuantity.innerHTML = productCartCount.childElementCount;
    // };
    const cartItemQuantityHandle = () => {
      desBtn.forEach((des) => {
        des.addEventListener("click", () => {
          if (des.parentElement.previousElementSibling.value > 0) {
            let cartPrice =
              des.parentElement.parentElement.parentElement.querySelector(
                ".cart-price span:nth-child(1)"
              ).innerHTML;
            des.parentElement.previousElementSibling.value = String(
              Number(des.parentElement.previousElementSibling.value) - 1
            );
            sumPrice.innerHTML = Number(sumPrice.innerHTML) - Number(cartPrice);
            updateTotalPrice();
            console.log("gọi lúc giảm số lượng");
          }
        });
      });
      ascBtn.forEach((asc) => {
        asc.addEventListener("click", () => {
          if (asc.parentElement.previousElementSibling.value >= 0) {
            let cartPrice =
              asc.parentElement.parentElement.parentElement.querySelector(
                ".cart-price span:nth-child(1)"
              ).innerHTML;
            asc.parentElement.previousElementSibling.value = String(
              Number(asc.parentElement.previousElementSibling.value) + 1
            );
            sumPrice.innerHTML = Number(sumPrice.innerHTML) + Number(cartPrice);
            updateTotalPrice();
            console.log("gọi lúc tăng số lượng");
          }
        });
      });
    };
    const updateTotalPrice = () => {
      checkCartInput.forEach((check) => {
        const quantity = Number(
          check.parentElement.querySelector(".quantity-cart-number").value
        );
        const cartPrice = Number(
          check.parentElement.querySelector(".cart-price span:nth-child(1)")
            .innerHTML
        );
        const sumTotalPrice = check.parentElement.querySelector(
          ".total-price-cart .price"
        );
        sumTotalPrice.innerHTML = String(cartPrice * quantity);
      });
    };
    const checkUpdateSumTotalPrice = () => {
      checkCartInput.forEach((check) => {
        check.addEventListener("click", () => {
          const sumTotalPrice = check.parentElement.querySelector(
            ".total-price-cart .price"
          );
          if (check.checked) {
            sumPrice.innerHTML = String(
              Number(sumPrice.innerHTML) + Number(sumTotalPrice.innerHTML)
            );
            console.log("gọi lúc mở check");
          }
        });
      });
    };
    const UnCheckUpdateSumTotalPrice = () => {
      checkCartInput.forEach((check) => {
        check.addEventListener("click", () => {
          const sumTotalPrice = check.parentElement.querySelector(
            ".total-price-cart .price"
          );
          if (!check.checked) {
            sumPrice.innerHTML = String(
              Number(sumPrice.innerHTML) - Number(sumTotalPrice.innerHTML)
            );
            console.log("gọi lúc tắt check");
          }
        });
      });
    };
    updateTotalPrice();
    checkUpdateSumTotalPrice();
    UnCheckUpdateSumTotalPrice();
    cartItemQuantityHandle();
    CheckCartHandle();
  };
  const getValueProduct = (product) => {
    let size = product.querySelector(".size-type.active");
    let color = product.querySelector(".color-type.active");
    const valueProduct = {
      productName: product.querySelector(".product-name").innerHTML,
      productPrice: product.querySelector(".price-view .price").innerHTML,
      productImg: product.querySelector(".main-pic").src,
      productColor: color ? (color = color.id) : (color = ""),
      productSize: size ? (size = size.innerHTML) : (size = ""),
      productQuantity: product.querySelector(".quantity-number").value,
      productId: product.querySelector(".id-product").value,
    };
    return valueProduct;
  };
  const checkEmptySelect = (productValue, product) => {
    const emptyAlertColor = product.querySelector(".empty-alert-color");
    const emptyAlertSize = product.querySelector(".empty-alert-size");
    productValue.productColor == ""
      ? emptyAlertColor.classList.add("active")
      : productValue.productColor;
    productValue.productSize == ""
      ? emptyAlertSize.classList.add("active")
      : productValue.productSize;
    setTimeout(() => {
      emptyAlertColor.classList.remove("active");
      emptyAlertSize.classList.remove("active");
    }, 3000);
  };
  const dataCart = JSON.parse(localStorage.getItem("dataCart"));
  const addCartBtn = document.querySelectorAll(".add-cart-btn");
  const productItem = document.querySelectorAll(".product-item");
  const sumPrice = document.querySelector(".sum-price");
  let dataProduct = dataCart ? dataCart : [];
  const updateCartItemQuantityHandle = () => {
    const productQuantity = document.querySelector(".number-product");
    productQuantity.innerHTML = dataProduct.length;
  };
  const dataHandle = () => {
    const cartItem = document.querySelectorAll(
      ".body-cart-container .cart-item"
    );
    cartItem.forEach((items) => {
      items.remove();
    });
    dataProduct.forEach((item) => {
      renderCartItem(item);
    });
    removeCart();
    cartItemHandle();
    updateCartItemQuantityHandle();
  };
  const addCart = () => {
    addCartBtn.forEach((item) => {
      item.addEventListener("click", () => {
        const index = productActiveIndex();
        const productValue = getValueProduct(productItem[index]);
        const checkSame = checkSameId(Number(productValue.productId));
        checkEmptySelect(productValue, productItem[index]);
        if (checkSame) {
          dataProduct.push(productValue);
          sumPrice.innerHTML = 0;
          localStorage.setItem("dataCart", JSON.stringify(dataProduct));
          bodyCartShow();
          dataHandle();
        }
      });
    });
  };
  const checkSameId = (id) => {
    let a = [];
    let b = true;
    a.length = dataProduct.length;
    for (let i = 0; i < a.length; i++) {
      a[i] = dataProduct[i].productId;
      console.log(dataProduct[i].productId);
    }
    for (let i = 0; i < a.length; i++) {
      if (a[i] == id) b = false;
    }
    return b;
  };
  const bodyCartShow = () => {
    const cartActive = document.querySelector(".body-cart-wrapper");
    const cartPopUp = document.querySelector(".body-cart");
    cartActive.classList.add("active-cart");
    cartPopUp.classList.remove("close-down-cart");
    cartPopUp.classList.add("open-up-cart");
  };
  const removeCart = () => {
    const removeBtn = document.querySelectorAll(".remove-cart-btn");
    removeBtn.forEach((remove) => {
      remove.addEventListener("click", () => {
        const idCart = remove.parentElement.lastElementChild.value;
        console.log(
          remove.previousElementSibling.lastElementChild.firstElementChild
            .innerHTML
        );
        // sumPrice.innerHTML = String(
        //   Number(sumPrice.innerHTML) -
        //     Number(
        //       remove.previousElementSibling.lastElementChild.firstElementChild
        //         .innerHTML
        //     )
        // );
        sumPrice.innerHTML = 0;
        let newData = dataProduct.filter((a) => {
          return a.productId != idCart;
        });
        dataProduct = newData;
        localStorage.setItem("dataCart", JSON.stringify(dataProduct));
        dataHandle();
      });
    });
  };
  dataHandle();
  addCart();
  function renderCartItem(value) {
    const listCartItem = document.querySelector(".body-cart-container");
    const wrap = document.createElement("div");
    wrap.className = "cart-item";
    const content = `
      <div class="cart-left-content">
      <img src="${value.productImg}" alt="">     
  </div>
  <div class="cart-right-content">
      <div class="cart-name">${value.productName}</div>
      <div class="cart-price">
      Price : <span>${value.productPrice}</span><span> VND</span>
      </div>
      <div class="cart-color">
      Color : <span>${value.productColor}</span>
      </div>
      <div class="cart-size">
      Size : <span>${value.productSize}</span>
      </div>
      <div class="cart-quantity-adjust">
          <input class="quantity-cart-number" value="${value.productQuantity}" min="1"
                      type="text">
                  <div class="adjust-cart-btn">
                      <div class="des-cart-btn">
                          <ion-icon name="remove-outline"><ion-icon>
                      </div>
                      <div class="asc-cart-btn">
                          <ion-icon name="add-outline"></ion-icon>
                      </div>
                  </div> 
              </div>             
              <div class="total-price-cart">Total :
              <span class="price">0</span>
              <span>VND</span>
             </div>          
  </div>
    <div class="remove-cart-btn"><ion-icon name="trash-outline"></ion-icon></div>
  <input type="checkbox" class="checked-cart">
  <div class="opacity-layer"></div>
  <input value="${value.productId}" type="hidden" class="id-cart-items">
                  `;
    wrap.innerHTML = content;
    listCartItem.prepend(wrap);
  }
};
cartHandle();

