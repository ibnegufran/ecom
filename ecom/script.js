let accountBox=document.querySelector(".account-box");
document.querySelector("#user-btn").onclick=()=>{
    accountBox.classList.toggle("active");
}

let menuBtn=document.querySelector("#menu-btn");
menuBtn.addEventListener("click",()=>{
    document.querySelector(".menu_con").classList.toggle("nav-active");
})
// document.querySelector("#menu-btn").onclick=()=>{
//     navbar
// }