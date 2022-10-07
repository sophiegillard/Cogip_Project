let loginBtn = document.getElementById('login');
let loginModal = document.getElementsByClassName('login')[0];
let loginInput = document.getElementsByClassName('login__form__input');

export function displayLogin() {
    loginBtn.addEventListener("click", (event)=>{
        if (loginModal.style.display == "block") {
        
            loginModal.style.display = "none";
            LoginBackground.style.display = "none";

            for (let input of loginInput) {
                input.value="";
            }
        } else {
            console.log("click");
            loginModal.style.display = "block";
            LoginBackground.style.display = "block";
        }
    })
}

let LoginBackground = document.getElementsByClassName('loginbackground')[0];

export function CloseLoginBackground() {
    LoginBackground.addEventListener("click", (event)=>{
        console.log("back");
        if (loginModal.style.display == "block") {
            loginModal.style.display = "none";
            LoginBackground.style.display = "none";
            for (let input of loginInput) {
                input.value="";
            }
        }
    })
}