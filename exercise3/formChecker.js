var total = 0;
var numItems = 0;

function checker() {
  let email = document.getElementById('email');
  let passWord = document.getElementById('password');
  let shipping = document.querySelectorAll('input[type="radio"]:checked');
   if(email.value.length < 1 || passWord.value.length < 1 || shipping.length < 1) {
    window.alert('Please provide valid input for email, password and shipping');
    return false;
  }
  return true;
}
function addComputer() {
  let numComputer = document.getElementById("numComputer");
  total += ((numComputer.value)*2000);
  numItems = (Number(numComputer.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numComputer").value = numComputer.value;
}
function addPhone() {
  let numPhone = document.getElementById("numPhone");
  total += ((numPhone.value)*1000);
  numItems = (Number(numPhone.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numPhone").value = numPhone.value;
}
function addPS5() {
  let numPS5 = document.getElementById("numPS5");
  total += ((numPS5.value)*500);
  numItems = (Number(numPS5.value)) + numItems;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
  document.getElementById("numPS5").value = numPS5.value;
}
function renew() {
  total =0;
  numItems =0;
  numComputer = 0;
  numPhone = 0;
  numPS5 = 0;
  document.getElementById("numComputer").value = numA;
  document.getElementById("numPhone").value = numB;
  document.getElementById("numPS5").value = numC;
  document.getElementById("totalCost").innerHTML = "Total: $" + total;
  document.getElementById("numItems").innerHTML = "Items: " + numItems;
}
