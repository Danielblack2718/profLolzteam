const input = document.querySelector('input[name="input"]');
const output = document.querySelector('input[name="output"]');
input.addEventListener("input", () => {
  if (input.value != "" && isNaN(input.value)) {
    input.value = 100;
  }
  output.value = input.value * 2;
});
output.addEventListener("input", () => {
  if (output.value != "" && isNaN(output.value)) {
    output.value = 200;
  }
  input.value = output.value / 2;
});
const prices = document.querySelectorAll(".prices li");
const currency = document.querySelector(".currency");

prices.forEach((price) => {
  price.addEventListener("click", () => {
    if (price.dataset.price.includes("R")) {
      output.value = price.dataset.price.split(" ")[0];
      input.value = price.dataset.price.split(" ")[0] / 2;
    } else {
      input.value = price.dataset.price;
      output.value = price.dataset.price * 2;
    }
  });
});
