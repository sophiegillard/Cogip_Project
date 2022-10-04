// let button = document.getElementsByClassName('dashboard__header__title__menu')[0];
let burger = document.getElementById('burger');

export function displayMenuPhone() {
    burger.addEventListener("click", (event) => {
        if (burger.style.display == "none") {
            console.log("display");
            // menu.style.display = "block"; 
        } else {
            console.log("none");
            // menu.style.display = "none"; 
        }

    });
    
    // back.addEventListener("click", (event) => {
    //     console.log("back");
    //     menu.style.display = "none"; 
    // });
}
