let swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  function darkmode(){
    const body = document.body
    let ul = document.querySelector('.ul')
    let header = document.querySelector('.header')
    let reg = document.getElementById('reg')
    let avtor = document.getElementById('avt')
    const wasDarkmode = localStorage.getItem('darkmode')=== 'true'

    localStorage.setItem('darkmode', !wasDarkmode)
    body.classList.toggle('dark_mode', !wasDarkmode)
    ul.classList.toggle('dark_modes', !wasDarkmode)
    reg.classList.toggle('dark_modes', !wasDarkmode)
    avtor.classList.toggle('dark_modes', !wasDarkmode)
    header.classList.toggle('dark_modes', !wasDarkmode)
  }
  document.querySelector('.btn').addEventListener('click', darkmode);

  // function form(){
  //   const body = document.body
  //   let ul = document.querySelector('.ul')
  //   let button = document.querySelector('.left_header')
  //   const wasDarkmode = localStorage.getItem('darkmode')=== 'true'

  //   localStorage.setItem('darkmode', !wasDarkmode)
  //   body.classList.toggle('dark_mode', !wasDarkmode)
  //   ul.classList.toggle('dark_modes', !wasDarkmode)
  //   button.classList.toggle('dark_modes', !wasDarkmode)
  // }
  let form = document.querySelector('form')
  let reg = document.getElementById('reg')
  let avtor = document.getElementById('avt')
  let body = document.body
  let div = document.getElementById('div')
  let con = document.querySelector('.container')
  let info = document.querySelector('.info')
function opens(){
  reg.style.visibility ='visible';
  div.classList.add('blure');
  
  avtor.style.visibility = 'hidden';
  info.style.visibility = 'visible';
}
function closes(){
  form.style.visibility = 'hidden';
  avtor.style.visibility = 'hidden';
  reg.style.visibility = 'hidden';
  div.classList.remove('blure');
  info.style.visibility = 'hidden';
}
function avt(){
  avtor.style.visibility ='visible';
  reg.style.visibility = 'hidden';
  info.style.visibility = 'visible';
  div.classList.add('blure');
}
const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const slides = Array.from(slider.querySelectorAll('div'));
const slideCount = slides.length;
let slideIndex = 0;

prevButton.addEventListener('click', showPreviousSlide);
nextButton.addEventListener('click', showNextSlide);

function showPreviousSlide() {
  slideIndex = (slideIndex - 1 + slideCount) % slideCount;
  updateSlider();
}

function showNextSlide() {
  slideIndex = (slideIndex + 1) % slideCount;
  updateSlider();
}
function updateSlider() {
  slides.forEach((slide, index) => {
    if (index === slideIndex) {
      slide.style.display = 'block';
    } else {
      slide.style.display = 'none';
    }
  });
}


