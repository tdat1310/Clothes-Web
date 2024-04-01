const placeholderInput = () => {
  const input = document.querySelectorAll(".input");
  input.forEach((item) => {
    item.addEventListener("focus", () => {
      item.placeholder = "";
    });
  });
};
placeholderInput();
const showError = (input, text) => {
  input.classList.add("error");
  input.placeholder = text;
};

const showSuccess = (input) => {
  console.log(`${input.name} đúng`);
  input.classList.add("success");
  input.classList.remove("error");
};
const checkEmpty = (input) => {
  if (input.value.trim() == "") {
    showError(input, "Empty");
    console.log("rỗng");
    return false;
  }
  return true;
};
const checkLength = (input, min, max) => {
  if (input.value.length < min) {
    input.value = "";
    showError(input, `At least ${min} characters`);
    console.log("quá ngắn");
    return false;
  } else if (input.value.length > max) {
    input.value = "";
    showError(input, `Not over ${max} characters`);
    console.log("quá dài");
    return false;
  }
  return true;
};
const checkPhoneNum = (input) => {
  const regex = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;
  if (!regex.test(input.value)) {
    input.value = "";
    showError(input, "Invalid phone number");
    console.log("sai số điện thoại");
    return false;
  }
  return true;
};
const checkEmail = (input) => {
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!regex.test(input.value)) {
    input.value = "";
    showError(input, "Invalid email");
    console.log("sai số email");
    return false;
  }
  return true;
};
const checkMatchPasswd = (input_1, input_2) => {
  if (input_2.value != input_1.value) {
    input_2.value = "";
    showError(input_2, "Password does not match");
    console.log("không khớp pass");
    return false;
  }
  return true;
};
const checkAccount = (input_1, listAccount) => {
  const account = listAccount.filter((input_2) => {
    return input_1.value == input_2.username;
  });
  if (account.length == 0) {
    input_1.value = "";
    showError(input_1, "Username does not exit !");
    return false;
  }
  return [true, account[0]];
};
const checkPasswd = (input, account) => {
  if (input.value != account.password) {
    input.value = "";
    console.log(input);
    showError(input, "Wrong password !");
    return false;
  }
  return true;
};
