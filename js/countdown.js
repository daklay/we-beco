const days = document.getElementsByClassName("days")[0];
const hours = document.getElementsByClassName("hours")[0];
const min = document.getElementsByClassName("min")[0];
const sec = document.getElementsByClassName("sec")[0];

// const currentDate = new Date().getFullYear();
const thedate = new Date("july 25 2022 00:00:00");

function updateCountdowntime(){
    const currentTime = new Date();
    const diff = thedate - currentTime; 
    const d = Math.floor(diff/1000/60/60/24);
    const h = Math.floor(diff/1000/60/60) % 24;
    const m = Math.floor(diff/1000/60) % 60;
    const s = Math.floor(diff/1000) % 60;
    days.innerHTML = d + " <span>DAYS</span>";
    hours.innerHTML = h + " <span>HRS</span>";
    min.innerHTML = m + " <span>MIN</span>";
    sec.innerHTML = s + " <span>SEC</span>";
}
setInterval(updateCountdowntime, 1000)
