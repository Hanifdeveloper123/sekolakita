       
feather.replace();

// let img = document.getElementById("img");
// let img1 = document.getElementById("img1");
// let img2 = document.getElementById("img2");
// let img3 = document.getElementById("img3");

// window.addEventListener("scroll", function () {
//   let value = window.scrollY;
//   img.style.top = value * 0.75 + "px";
//   img1.style.top = value * 0.55 + "px";
//   img2.style.top = value * 0.10 + "px";
//   img3.style.top = value * 0.25 + "px";
// });

    
    //toggle class akyif untuk navbar
    const navbarNav = document.querySelector('.navbar-nav');
    document.querySelector('#hamburger-menu').onclick = (e) => {
        navbarNav.classList.toggle('active');
    };


//togle class aktif unutk shoping card



// togle class aktif untuk search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');


document.querySelector('#search-button').onclick = () => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
};

const hm = document.querySelector('#hamburger-menu');
const sb = document.querySelector('#search-button');
const sc = document.querySelector('#shopping-cart-button')

document.addEventListener('click', function(e){
    if(!hm.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove('active')
    }
    if(!sb.contains(e.target) && !searchForm.contains(e.target)) {
        searchForm.classList.remove('active')
    }
});

//modal box

const itemDetailModal = document.querySelector('#item-detail-modal');
const itemDetailButton = document.querySelectorAll('.item-detail-button');


itemDetailButton.forEach((btn) => {
    btn.onclick = (e) => {
    itemDetailModal.style.display = 'flex';
    e.preventDefault();
};
});
    


const modal = document.querySelector('#item-detail-modal');
window.onclick = (e) => {
    if (e.target == modal){
        modal.style.display = 'none';
        e.preventDefault();
    };
};


// function redirect1(e) {
//   if (e.ctrlKey && 85 == e.which)
//     return window.location.replace("index.html"), !1;
// }
// function redirect2(e) {
//   if (3 == e.which) return window.location.replace("index.html"), !1;
// }
// (document.onkeydown = redirect1), (document.oncontextmenu = redirect2);
