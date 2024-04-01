const signUpHandle = () => {
  const signUpBtn = document.querySelector(".sign-up-btn");
  const data = JSON.parse(localStorage.getItem("onlyFansAccount"));
  const input = document.querySelectorAll(".sign-up-form .input");
  const agreeCheck = document.querySelector(".sign-up-form .agree-check input");
  const account = data ? data : [];
  let inputValue = {
    userName: false,
    phoneNum: false,
    email: false,
    password: false,
    confirmPasswd: false,
  };
  input.forEach((item, index) => {
    item.addEventListener("focusout", () => {
      if (checkEmpty(item)) {
        if (index == 0 && checkLength(item, 4, 10)) {
          inputValue.userName = checkLength(item, 4, 10);
          showSuccess(item);
        }
        if (index == 1 && checkPhoneNum(item)) {
          inputValue.phoneNum = checkPhoneNum(item);
          showSuccess(item);
        }
        if (index == 2 && checkEmail(item)) {
          inputValue.email = checkEmail(item);
          showSuccess(item);
        }
        if (index == 3 && checkLength(item, 8, 20)) {
          inputValue.password = checkLength(item, 8, 20);
          showSuccess(item);
        }
        if (index == 4 && checkMatchPasswd(input[3], item)) {
          inputValue.confirmPasswd = checkMatchPasswd(input[3], item);
          showSuccess(item);
        }
      }
    });
  });
  signUpBtn.addEventListener("click", () => {
    if (
      inputValue.userName &&
      inputValue.phoneNum &&
      inputValue.email &&
      inputValue.password &&
      inputValue.confirmPasswd &&
      agreeCheck.checked
    ) {
      input.forEach((item) => {
        showSuccess(item);
      });
      let accountValue = {
        username: input[0].value,
        phoneNum: input[1].value,
        email: input[2].value,
        password: input[3].value,
      };
      account.push(accountValue);
      localStorage.setItem("onlyFansAccount", JSON.stringify(account));
      document.querySelector(".sign-up-form").onsubmit = function () {
        return true;
      };
    } else {
      input.forEach((item) => {
        checkEmpty(item);
      });
    }
  });
};
signUpHandle();
