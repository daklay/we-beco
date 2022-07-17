/* global bootstrap: false */
(() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()

function showme(classs){
  let hidearr = document.getElementsByClassName('formusers');
  [...hidearr].forEach(el=>{
    if(el.classList.contains(classs)){
      el.style.display = 'flex';
    }
    else{
      el.style.display = 'none';
    }
  })
}
function sidebar(classs){
  let sidebarr = document.getElementsByClassName('nav-link');
  [...sidebarr].forEach(el=>{
    if(el.classList.contains(classs)){
      el.classList.add("active");
    }
    else{
      el.classList.remove("active");
    }
  })
}