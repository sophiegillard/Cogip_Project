let button = document.getElementsByClassName("dashboard__header__title__menu")[0];
let back = document.getElementsByClassName("dashboard__menu__profil__return")[0];
let menu = document.getElementsByClassName("dashboard__menu")[0];

  button.addEventListener("click", (event) => {
    console.log("display");
    menu.style.display = "grid";
  });

  back.addEventListener("click", (event) => {
    console.log("back");
    menu.style.display = "none";
  });
