///////////////////// Get the button to scroll page up
let mybutton = document.getElementById("scrollToTopBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}

mybutton.onclick = function() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}




////////////////////// Make hovered picture of assortment part appear in center

const images = document.querySelectorAll('.assortment-img');
const hoveredImageContainer = document.getElementById('hovered-item-container');
let activeImage = null;

images.forEach(image => {
    image.addEventListener('mouseover', () => {
        
        if (activeImage) {
            return; 
        }
        console.log("hovering");
        activeImage = image;
        const clone = activeImage.cloneNode(true);
        clone.classList.add('hovered');
        hoveredImageContainer.innerHTML = '';
        hoveredImageContainer.appendChild(clone);
        hoveredImageContainer.style.display = 'flex';

        setTimeout(() => {
            hoveredImageContainer.style.transform = 'translate(-50%, -50%) scale(1)';
         }, 10);
         isHoveredImageShown = true;
    });

    image.addEventListener('mouseleave', (event) => {
        if (hoveredImageContainer.contains(event.relatedTarget)) return; 
        hideHoveredImage();
    });
});

hoveredImageContainer.addEventListener('mouseover', () => {
    activeImage = null;
});

hoveredImageContainer.addEventListener('mouseleave', (event) => {
    if (hoveredImageContainer.contains(event.relatedTarget)) return; 
    hideHoveredImage();
});

function hideHoveredImage() {
    hoveredImageContainer.style.transform = 'translate(-50%, -50%) scale(0)';
    setTimeout(() => {
        hoveredImageContainer.style.display = 'none';
        activeImage = null;
    }, ); 
    
}





///////////////////////////// Carousel


const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const arrowBtns = document.querySelectorAll(".wrapper button");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const carouselChildrens = [...carousel.children];
const slideSpeed = 2;


let isDragging = false;
let startX;
let startScrollLeft;
let timeoutId;
let delayTimeoutId;


//Get the number of cards that can fit in the carousel at once 
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
})

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
})

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        carousel.style.scrollSnapType = "x mandatory"; // To scroll full picture
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
        carousel.style.scrollSnapType = ""; // To make possible sliding animation againg
    })
})

const dragStrart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}


const dragging = (e) => {
    if(!isDragging) return;
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const autoPlay = () => {
    timeoutId = setTimeout(() => carousel.scrollLeft += slideSpeed, 10);
}

const infiniteScroll = () => {
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition")
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition")
    } else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition")
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition")
    }

    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

carousel.addEventListener("mousedown", dragStrart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => {
    clearTimeout(timeoutId);
    clearTimeout(delayTimeoutId);
});
wrapper.addEventListener("mouseleave",() => {
    delayTimeoutId = setTimeout(autoPlay, 2500); 
});

// Use IntersectionObserver to start autoplay when the carousel appears on screen
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            delayTimeoutId = setTimeout(autoPlay, 2500);
        } else {
            clearTimeout(timeoutId);
            clearTimeout(delayTimeoutId);
        }
    });
}, { threshold: 0.1 });

observer.observe(wrapper);










