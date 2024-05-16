const BacketIcon1 = document.querySelector("#Bact1");
const BacketIcon2 = document.querySelector("#Bact2");
const BacketWrapper = document.querySelector(".Backet-wrapper");
const BacketClose = document.querySelector(".Continue");

BacketIcon1.addEventListener("click", () => {
  BacketWrapper.style.display = "flex";
});

BacketIcon2.addEventListener("click", () => {
  BacketWrapper.style.display = "flex";
});

BacketClose.addEventListener("click", () => {
  BacketWrapper.style.display = "none";
});



