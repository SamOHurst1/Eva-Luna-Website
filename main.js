window.onload = function () {
    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile_nav');

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    });
}

// function scrolldiv() {
//     var elem = document.getElementById("contact");
//     elem.scrollIntoView();
// }

function scrollToContact() {
    document.querySelector('#contact').scrollIntoView();
  }

//   lisbon link to trips page 
// const lisbon_link = document.querySelector('.lisb');
// lisbon_link.addEventListener('click', function () {}

// document.querySelector('.home').onclick = function () {
//     location.href="../index.html"
// }


//link to lisbon trip page from pic
document.getElementById("lisb").onclick = function () 
   {
    location.href="../trips.html"
   }

//link to cascais trip page from pic
    document.getElementById("cascais").onclick = function () 
   {
    location.href="../cascaistrips.html"
   }

   //link to sesimbra trip page from pic
   document.getElementById("sesimbra").onclick = function () 
   {
    location.href="../sesimbratrips.html"
   }


   //form page JS
document.addEventListener('DOMContentLoaded' , function() {
    document.querySelectorAll('.form__input').forEach(function (input) {
        input.addEventListener('input' , function () {
            input.className = input.className.replace(/form__input--error ?/, '')
        })
    });
});

// country code selector 
  function country_code () {
      var val =document.getElementById("country").value;

      if (val === "select country") {
          document.getElementById("contactNumber").value = "";
      }
      else if (val === "us") {
          document.getElementById("contactNumber").value = "+1"
      }
      else if (val === "uk") {
        document.getElementById("contactNumber").value = "+44"
    }
    else if (val === "br") {
        document.getElementById("contactNumber").value = "+55"
    }
    else if (val === "be") {
        document.getElementById("contactNumber").value = "+32"
    }
    else if (val === "pt") {
        document.getElementById("contactNumber").value = "+351"
    }
    else if (val === "es") {
        document.getElementById("contactNumber").value = "+34"
    }
  }

//   Review section 
// var swiper = new Swiper(".mySwiper", {
//     spaceBetween: 20,
//     loop:true,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     breakpoints: {
//         640:{
//             slidesPerView: 1,
//         },
//         768:{
//             slidesPerView: 1,
//         },
//         640:{
//             slidesPerView: 2,
//         },
//         1024:{
//             slidesPerView: 3,
//         },
//     },
// });

var swiper = new Swiper(".mySwiper", {});
