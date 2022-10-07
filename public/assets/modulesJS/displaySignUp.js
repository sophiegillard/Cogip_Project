let signUpBtn = document.getElementById('signUp');
let signUpModal = document.getElementsByClassName('signUp')[0];
let signUpInput = document.getElementsByClassName('signUp__form__input');

export function displaySignUp() {
    signUpBtn.addEventListener("click", (event)=>{
        if (signUpModal.style.display == "block") {
        
            signUpModal.style.display = "none";
            signUpBackground.style.display = "none";

            for (let input of signUpInput) {
                input.value="";
            }
        } else {
            signUpModal.style.display = "block";
            signUpBackground.style.display = "block";
        }
    })
}

let signUpBackground = document.getElementsByClassName('signUpbackground')[0];

export function CloseSignUpBackground() {
    signUpBackground.addEventListener("click", (event)=>{
        if (signUpModal.style.display == "block") {
            signUpModal.style.display = "none";
            signUpBackground.style.display = "none";
            for (let input of signUpInput) {
                input.value="";
            }
        }
    })
}