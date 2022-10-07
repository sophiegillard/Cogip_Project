let loginBtn = document.getElementById('login');
let loginModal = document.getElementsByClassName('login')[0];
let loginInput = document.getElementsByClassName('login__form__input');

export function displayLogin() {
    loginBtn.addEventListener("click", (event)=>{
        if (loginModal.style.display == "block") {
        
            loginModal.style.display = "none";

            for (let input of loginInput) {
                input.value="";
            }
            
            loginBtn.style.color = "#000000";
            loginBtn.style.borderBottom = "0";
            loginBtn.style.borderTop = "0";



        } else {
            console.log("click");
            loginModal.style.display = "block";
            
            loginBtn.style.color = "#FFFFFF";
            loginBtn.style.borderBottom = "2px solid #ffffff";
            loginBtn.style.borderTop = "2px solid #ffffff";
        }
    })
}

export function hoverActived() {
    if (loginModal.style.display == "block") {
        loginBtn.style.color = "white";
        console.log("hello");
    }
}