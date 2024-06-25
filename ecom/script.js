let accountBox=document.querySelector(".account-box");
document.querySelector("#user-btn").onclick=()=>{
    accountBox.classList.toggle("active");
    document.querySelector(".menu_con").classList.remove("nav-active");


}

let menuBtn=document.querySelector("#menu-btn");
menuBtn.addEventListener("click",()=>{
    document.querySelector(".menu_con").classList.toggle("nav-active");
    accountBox.classList.remove("active");

})


window.onscroll=()=>{
    document.querySelector(".menu_con").classList.remove("nav-active");
    accountBox.classList.remove("active");

if(window.scrollY >60){
	document.querySelector("header .header2").classList.add("active");

}else{
	document.querySelector("header .header2").classList.remove("active");

}


}
// document.querySelector("#menu-btn").onclick=()=>{
//     navbar
// }