const loginForm = document.querySelector(".login-form");
const input = loginForm.querySelectorAll(".input");
const loginBtn = document.querySelector(".login-btn");
const data = JSON.parse(localStorage.getItem("onlyFansAccount"));
const saveData = JSON.parse(localStorage.getItem("onlyFansSaveAccount"));
const account = data ? data : [];
const saveBtn = document.querySelector(".remember-input");
const listAccount = saveData ? saveData : [];
let inputValue = {
  userName: false,
  password: false,
};
let saveAccount = {
  userName: "",
  password: "",
};
input.forEach((item, index) => {
  item.addEventListener("focusout", () => {
    if (checkEmpty(item)) {
      if (index == 0 && checkAccount(item, account)[0]) {
        showSuccess(item);
        inputValue.userName = checkAccount(item, account)[0];
      }
      if (
        index == 1 &&
        checkAccount(input[0], account)[0] &&
        checkPasswd(item, checkAccount(input[0], account)[1])
      ) {
        showSuccess(item);
        inputValue.password = checkPasswd(
          item,
          checkAccount(input[0], account)[1]
        );
      }
    }
  });
});
loginBtn.addEventListener("click", () => {
  if (inputValue.userName && inputValue.password) {
    saveAccount = {
      userName: input[0].value,
      password: input[1].value,
    };
    if (saveBtn.checked) {
      listAccount.push(saveAccount);
      localStorage.setItem("onlyFansSaveAccount", JSON.stringify(listAccount));
    }
    input[0].value = "";
    loginForm.onsubmit = function () {
      return true;
    };
  } else {
    input.forEach((item) => {
      checkEmpty(item);
    });
  }
});
