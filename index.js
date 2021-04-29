const formSection = document.querySelector("form");
const formSectionMain = document.querySelector(".form-section");
const contactLink = document.querySelector("#contact-link");
const cancelBtn = document.querySelector("#icon");
const spanid  = document.querySelector("#submit-data");

const clickHandler = (e) => {
  console.log(e);
  formSectionMain.classList.add("form-section-new");
  formSection.classList.add("anime-1");
  formSection.classList.add("form-new");
  if (formSection.classList.contains("anime-2")) {
    formSection.classList.remove("anime-2");
  }
};

const cancelHandler = (e) => {
  formSection.classList.add("anime-2");
  e.stopImmediatePropagation();
  setTimeout(() => {
    formSectionMain.classList.remove("form-section-new");
    formSection.classList.remove("anime-1");
    formSection.classList.remove("form-new");
  }, 1000);
};


contactLink.addEventListener("click", clickHandler);
cancelBtn.addEventListener("click", cancelHandler);


