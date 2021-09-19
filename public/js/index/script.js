const navLiElements = document.querySelectorAll("aside nav li");
const sliderItemsContainer = document.querySelector("#slider-items");
const sliderLiElement = document.querySelectorAll("#slider-items ul li");
const sliderImageElement = document.querySelector("#slide-image");
const navSelectedItem = document.querySelector("#nav-selected-item");

/* control nav bar */
navLiElements.forEach((value) => {
  value.addEventListener("click", controlNavBar);
});

let clickedElement;
function controlNavBar() {
  let element = this;
  unfocusedControl();
  focusControl(element);
}

focusControl(navLiElements[0]);
function focusControl(element) {
  navSelectedItem.textContent = element.children[1].children[2].textContent;
  element.style.backgroundColor = "#fff";
  let border = element.children[0];
  border.style.display = "inline-block";
  border.style.animationName = "nav-border-animation";
  border.style.animationDirection = "alternate";
  let filledIcon = element.children[1].children[1];
  let regularIcon = element.children[1].children[0];
  regularIcon.style.display = "none";
  filledIcon.style.display = "inline-block";
  clickedElement = element;
}

function unfocusedControl() {
  if (clickedElement !== undefined) {
    clickedElement.style.backgroundColor = "transparent";
    clickedElement.children[0].style.display = "none";
    let filledIcon = clickedElement.children[1].children[1];
    let regularIcon = clickedElement.children[1].children[0];
    regularIcon.style.display = "inline-block";
    filledIcon.style.display = "none";
  }
}
/* --end-- */

/* control slider */
let sliderItemsTitrs = [
  "Microsoft 365",
  "Entertainment apps",
  "Reddit",
  "Own it today",
  "Among Us",
  "Racing Game",
];
let map = new Map();
map.set(
  sliderItemsTitrs[0],
  "http://127.0.0.1:8000/images/microsoft-stage.jpg"
);
map.set(
  sliderItemsTitrs[1],
  "http://127.0.0.1:8000/images/entertainment.webp"
);
map.set(
  sliderItemsTitrs[2],
  "http://127.0.0.1:8000/images/reddit.png"
);
map.set(
  sliderItemsTitrs[3],
  "http://127.0.0.1:8000/images/fast.jpg"
);
map.set(
  sliderItemsTitrs[4],
  "http://127.0.0.1:8000/images/among-us.png"
);
map.set(
  sliderItemsTitrs[5],
  "http://127.0.0.1:8000/images/asphalt-slider.jpg"
);

sliderLiElement.forEach((value) => {
  value.addEventListener("click", changeSliderImage);
});
function changeSliderImage() {
  let elementText = this.children[1].textContent;
  sliderImageElement.style.backgroundImage = `url(${map.get(elementText)})`;
}
let index = 1,
  perviousIndex = 0;
buildBorder(0);
setInterval(() => {
  sliderLiElement[perviousIndex].style.border = "5px solid #fff0";
  sliderImageElement.style.backgroundImage = `url(${map.get(
    sliderItemsTitrs[index]
  )})`;
  sliderImageElement.children[1].children[0].textContent =
    sliderItemsTitrs[index];
  buildBorder(index);
  sliderItemsContainer.scrollTo({
    behavior: "smooth",
    left: sliderLiElement[index].getClientRects()[0].left - 100,
  });
  perviousIndex = index;
  index++;
  if (index === sliderLiElement.length) index = 0;
}, 5000);
function buildBorder(index) {
  sliderLiElement[index].style.border = "5px solid #1d6978";
}
/* --end-- */
