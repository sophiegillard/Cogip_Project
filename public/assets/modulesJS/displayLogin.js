let loginBtn = document.getElementById('login');
let loginModal = document.getElementsByClassName('login')[0];

export function displayLogin() {
    loginBtn.addEventListener("click", (event)=>{
        if (loginModal.style.display == "block") {
            console.log("none");
        loginModal.style.display = "none";
        } else {
            console.log("click");
        loginModal.style.display = "block";
        }
    })
}