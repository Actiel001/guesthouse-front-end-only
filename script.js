
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() {
  if(document.documentElement.scrollTop > 20){
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }else{
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }

}


let body = document.querySelector("body");
let navBar = document.querySelector(".navbar");
let menuBtn = document.querySelector(".menu-btn");
let cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = function(){
  navBar.classList.add("active");
  menuBtn.style.opacity = "0";
  menuBtn.style.pointerEvents = "none";
  body.style.overflow = "hidden";
  scrollBtn.style.pointerEvents = "none";
}
cancelBtn.onclick = function(){
  navBar.classList.remove("active");
  menuBtn.style.opacity = "1";
  menuBtn.style.pointerEvents = "auto";
  body.style.overflow = "auto";
  scrollBtn.style.pointerEvents = "auto";
}

 let navLinks = document.querySelectorAll(".menu li a");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
  });
}

let searchBar = document.querySelector(".search-bar");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 20) {
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
    searchBar.style.display = "none"; 
  } else {
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
    searchBar.style.display = "block"; 
  }
};

window.addEventListener('scroll', function() {
  const formContainer = document.querySelector('.search-container');
  
  if (window.scrollY > 100) {
    formContainer.classList.add('scroll-inactive');  
  } else {
    formContainer.classList.remove('scroll-inactive');  
  }
});


/*particlesJS("particles-js", {
  "particles": {
      "number": {
          "value": 80,
          "density": {
              "enable": true,
              "value_area": 800
          }
      },
      "color": {
          "value": "#4CAF50"
      },
      "shape": {                                                                              //iki partikel js styles js 
          "type": "circle",
          "stroke": {
              "width": 0,
              "color": "#4CAF50"
          },
      },
      "opacity": {
          "value": 0.5,
          "random": false
      },
      "size": {
          "value": 3,
          "random": true
      },
      "line_linked": {
          "enable": true,
          "distance": 150,
          "color": "#4CAF50",
          "opacity": 0.4,
          "width": 1
      },
      "move": {
          "enable": true,
          "speed": 6,
          "direction": "none",
          "random": false,
          "straight": false
      }
  },
  "interactivity": {
      "events": {
          "onhover": {
              "enable": true,
              "mode": "repulse"
          },
          "onclick": {
              "enable": true,
              "mode": "push"
          }
      }
  },
  "retina_detect": true
});

//console.log('Hello World!');


let slider = document.querySelector('.slider');
let slides = document.querySelector('.slides');
let slide = document.querySelectorAll('.slide');
let totalSlides = slide.length;
let slideWidth = slide[0].clientWidth;

// klonning loop 
let firstClone = slides.innerHTML;
slides.innerHTML += firstClone;  // copy slide e

let currentIndex = 0;

// geser kanan
function moveRight() {
  currentIndex++;
  slides.style.transition = 'transform 0.5s ease-in-out';
  slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;

  if (currentIndex === totalSlides) {
      setTimeout(() => {
          slides.style.transition = 'none';
          currentIndex = 0;
          slides.style.transform = `translateX(0px)`;
      }, 500); // transisi
  }
}

// geser kiri
function moveLeft() {
  if (currentIndex === 0) {
      slides.style.transition = 'none';
      currentIndex = totalSlides;
      slides.style.transform = `translateX(${-slideWidth * totalSlides}px)`;
      setTimeout(() => {
          slides.style.transition = 'transform 0.5s ease-in-out';
          currentIndex--;
          slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
      }, 0);
  } else {
      currentIndex--;
      slides.style.transition = 'transform 0.5s ease-in-out';
      slides.style.transform = `translateX(${-slideWidth * currentIndex}px)`;
  }
}

// auto
setInterval(moveRight, 3000);

*/

// Data
/*const rumah = [
  { house: 'apartemen', location: 'jakarta', price: 'low', imageUrl: 'b/b1.jpg', link: 'halaman1.html' },
  { house: 'rumah', location: 'surabaya', price: 'high', imageUrl: 'a/b2.jpg', link: 'halaman2.html' },
  { house: 'kost', location: 'bandung', price: 'mid', imageUrl: 'a/b2.jpg', link: 'halaman3.html' },
];*/

const rumah = [
  { house: 'Guesthouse', location: 'Purwokerto', price: 'murah', imageUrl: 'b/b1.jpg', link: 'halaman1.html' },
  { house: 'Hotel', location: 'Purwokerto', price: 'mahal', imageUrl: 'a/b2.jpg', link: 'halaman2.html' },
  { house: 'Villa', location: 'Banyumas', price: 'sedang', imageUrl: 'a/b2.jpg', link: 'halaman3.html' },
  { house: 'Guesthouse', location: 'Banyumas', price: 'murah', imageUrl: 'b/b1.jpg', link: 'halaman1.html' },
  { house: 'Hotel', location: 'Purwokerto', price: 'sedang', imageUrl: 'a/b2.jpg', link: 'halaman3.html' },
  { house: 'Villa', location: 'Banyumas', price: 'mahal', imageUrl: 'a/b2.jpg', link: 'halaman3.html' },
];

const locationSelect = document.getElementById('location');
const houseSelect = document.getElementById('house');
const priceSelect = document.getElementById('price');
const searchBtn = document.getElementById('search-btn');
const results = document.getElementById('results');

function displayRumah(data) {
  results.innerHTML = '';
  if (data.length === 0) {
    results.innerHTML = `
      <div class="no-results">
        <i class="fas fa-search"></i> <!-- Ikon pencarian -->
        <p>Tidak ada hasil yang ditemukan.</p>
      </div>
    `;
    return;
  }
  data.forEach(item => {
    const card = document.createElement('div');
    card.className = 'card'; 

    const additionalText = item.price === 'mahal' ? ' ya ada harga ada kualitas kaleee' : item.price === 'sedang' ? ' tapi worth it bre' : ' tetapi ekonomis cuy, cuma 100rb/malam';
    
    
    const link = document.createElement('a');
    link.href = item.link;
    link.className = 'r-details';
    link.innerHTML = `
      <img src="${item.imageUrl}" alt="${item.house}">
      <h3>${item.house}</h3>
      <p>Lokasi: ${item.location}</p>
      <p>Harga: ${item.price}${additionalText}</p> <!-- Menambahkan additionalText -->
    `;
    card.appendChild(link);
    results.appendChild(card); 
  });
}



function filterRumah() {
  const selectedLocation = locationSelect.value;
  const selectedHouse = houseSelect.value;
  const selectedPrice = priceSelect.value;

  const filteredData = rumah.filter(item => {
    const matchLocation = selectedLocation === 'all' || item.location === selectedLocation;
    const matchHouse = selectedHouse === 'all' || item.house === selectedHouse;
    const matchPrice = selectedPrice === 'all' || item.price === selectedPrice;
    return matchLocation && matchHouse && matchPrice;
  });

  displayRumah(filteredData);
}

searchBtn.addEventListener('click', (e) => {
  e.preventDefault(); // Mencegah reload halaman
  console.log("Tombol Cari diklik");
  filterRumah();
});

// Menampilkan semua data rumah pada awalnya
displayRumah(rumah);
