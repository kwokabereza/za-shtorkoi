document.addEventListener("DOMContentLoaded",function(){const e=document.querySelectorAll(".navbar-burger"),t=document.querySelectorAll(".navbar-menu");e.forEach(function(n,r){n.addEventListener("click",function(){t[r].classList.toggle("hidden")})});const c=document.querySelectorAll(".navbar-close"),l=document.querySelectorAll(".navbar-backdrop");function o(){t.forEach(function(n){n.classList.toggle("hidden")})}c.forEach(function(n){n.addEventListener("click",o)}),l.forEach(function(n){n.addEventListener("click",o)})});document.querySelectorAll(".consultation").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-consultation").classList.toggle("active")})});document.querySelectorAll(".modal_area").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-consultation").classList.remove("active")})});document.querySelectorAll(".modal_close").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-consultation").classList.remove("active")})});document.querySelectorAll(".measurement").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-measurement").classList.toggle("active")})});document.querySelectorAll(".modal_area").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-measurement").classList.remove("active")})});document.querySelectorAll(".modal_close").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-measurement").classList.remove("active")})});document.querySelectorAll(".application").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-application").classList.toggle("active")})});document.querySelectorAll(".modal_area").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-application").classList.remove("active")})});document.querySelectorAll(".modal_close").forEach(function(e){e.addEventListener("click",function(){document.querySelector(".modal-application").classList.remove("active")})});function a(e){e.forEach(t=>{t.isIntersecting&&t.target.classList.add("element-show")})}let i={threshold:[.5]},s=new IntersectionObserver(a,i),u=document.querySelectorAll(".element-animation");for(let e of u)s.observe(e);function d(e){e.forEach(t=>{t.isIntersecting?t.target.classList.add("element-show"):t.target.classList.remove("element-show")})}let m={threshold:[.5]},f=new IntersectionObserver(d,m),v=document.querySelectorAll(".animate-heading");for(let e of v)f.observe(e);new Swiper(".services-slider",{pagination:{el:".services-pagination",clickable:!0,dynamicBullets:!0},slidesPerView:1,watchOverflow:!0,autoplayDisableOnInteraction:!1,loop:!0});
