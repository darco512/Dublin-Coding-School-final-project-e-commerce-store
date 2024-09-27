const wrapper = document.querySelector(".product-images-carousel-wrapper");
const carousel = document.querySelector(".product-images-carousel");
const countOfCarouselSlides = carousel.querySelectorAll('.main-picture').length;
const arrowBtns = document.querySelectorAll(".product-images-carousel-wrapper button");
const firstCardWidth = carousel.querySelector(".main-picture").offsetWidth;
const firstCard = carousel.querySelector(".main-picture");
const lastCard = carousel.querySelector(".main-picture:last-child");
const thumbnails = document.getElementsByClassName("thumbnail");
const thumbnailCarousel = document.querySelector(".product-thumbnail");
const firstThumbnailHeight = thumbnailCarousel.querySelector(".thumbnail-image").offsetHeight;
const mainCarouselGap =  parseInt(window.getComputedStyle(carousel).getPropertyValue('gap'), 10);
const thumbnailCarouselGap = parseInt(window.getComputedStyle(thumbnailCarousel).getPropertyValue('gap'), 10);
let isDraggingX = false;
let imageIndex = 1;
let startX;
let startScrollLeft;
let isDraggingY= false;
let startY;
let startScrollTop;
let wasDragging = false;



//             Scrollable thumbnail


const dragStrartY = (e) => {
  isDraggingY = true;
  thumbnailCarousel.classList.add("dragging");
  //Save vertical posotion of your cursor
  startY = e.pageY || e.touches[0].pageY;
  //Save position of top of the thumbnail image carousel
  startScrollTop = thumbnailCarousel.scrollTop;
}


const draggingY = (e) => {
  if(!isDraggingY) return;
  // Get current vertical position of cursor when draging picture
  const y = e.pageY || e.touches[0].pageY;
  // Get distance between starting vertical postion of the cursor and current
  const walk = (y - startY);
  // Moving top of your thumbnail carousel depends on distance between starting postion of the cursor and current
  thumbnailCarousel.scrollTop = startScrollTop  - walk;
  // Prevent setImage function firing
  wasDragging = true;
}

const dragStopY = () => {
  if(!isDraggingY) return;
  isDraggingY = false;
  thumbnailCarousel.classList.remove("dragging");
}


thumbnailCarousel.addEventListener("mousedown", dragStrartY);
thumbnailCarousel.addEventListener("mousemove", draggingY);
document.addEventListener("mouseup", dragStopY);

//Draging for touchscreen devices
thumbnailCarousel.addEventListener("touchstart", dragStrartY);
thumbnailCarousel.addEventListener("touchmove", draggingY);
thumbnailCarousel.addEventListener("touchend", dragStopY);


// set Main image when click on thumbnail image
function setImage(index){
  if(wasDragging){
    wasDragging = false;
    return
  }
  //Scrolling Image of main carousel to postion of it depends on recieved index of pictore
  carousel.scrollTo({
    left: (index * (firstCardWidth + mainCarouselGap)),
    behavior: 'smooth'
  })
  imageIndex = index + 1;
  setThumbnailImage(imageIndex);
}


// Highlight thumblain picture of main image
function setThumbnailImage(imageIndex){
  if(thumbnailCarousel.scrollTop > (imageIndex-1) * (firstThumbnailHeight + thumbnailCarouselGap)){
    thumbnailCarousel.scrollTo({
      top: ((firstThumbnailHeight + thumbnailCarouselGap) * (imageIndex - 1)),
      behavior: 'smooth'
    })
  } else if((thumbnailCarousel.scrollTop + thumbnailCarousel.offsetHeight) < (((imageIndex-1) * (firstThumbnailHeight + thumbnailCarouselGap)) + (firstThumbnailHeight + thumbnailCarouselGap))){
    thumbnailCarousel.scrollTo({
      top: (((firstThumbnailHeight + thumbnailCarouselGap) * imageIndex) - thumbnailCarousel.offsetHeight),
      behavior: 'smooth'
    })
  }
  //Make less opacity for all thumbnain images
  Array.prototype.forEach.call(thumbnails, (thumbnail) => {
    thumbnail.className = thumbnail.className.replace(" active", "");
  });
  //Make current picture 100% opacity
  thumbnails[imageIndex-1].className += " active";
  
}


// Add picture slide on buttons

arrowBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      // Add class to make full picture scroll
      carousel.style.scrollSnapType = "x mandatory";
      // On button clinking make dicrese current caousel position or increase
      if(btn.id === "product-carousel-left"){
        carousel.scrollLeft -= firstCardWidth;
        if(imageIndex > 1 ){
          imageIndex--;
        }
        setThumbnailImage(imageIndex);
      } else {
        carousel.scrollLeft += firstCardWidth;
        if(imageIndex < Array.from(carousel.children).length ){
          imageIndex++;
        }
        setThumbnailImage(imageIndex);
      }
      carousel.style.scrollSnapType = ""; 
    });
});

// add draggable changing of main imange

const dragStart = (e) => {
    isDraggingX = true;
    carousel.classList.add("dragging");
    // Save horizontal position of cursor
    startX = e.pageX || e.touches[0].pageX;
    // Save postion of image carousel
    startScrollLeft = carousel.scrollLeft;
};

let startOveflowX;

const dragging = (e) => {
    if (!isDraggingX) return;
    // Get current horizontal postion of cursor
    const x = e.pageX || e.touches[0].pageX;
    // Get difference between start and current horizontal postion
    const walk = (x - startX);
    // Move postion of image carousel
    carousel.scrollLeft = startScrollLeft - walk;


    // IF we hit first or last picture of carousel add bounce effect maximum for 40% width of picture
    if(carousel.scrollLeft === 0 && walk < (firstCardWidth * 0.4)){
      firstCard.style.transform = `translateX(${walk}px)`;
    }
    if(carousel.scrollLeft === carousel.scrollWidth- firstCardWidth && walk > - (firstCardWidth * 0.4)){
      lastCard.style.transform = `translateX(${walk}px)`;
    }
      
};

const dragStop = () => {
    if(!isDraggingX) return;
    isDraggingX = false;
    carousel.classList.remove("dragging");

    // Put first and last picture on right postion when you stop draging (bounce effect)
    firstCard.style.transform = `translateX(0px)`;
    lastCard.style.transform = `translateX(0px)`;

    // Align carousel to be visible 1 full picture


    //Get postion of carousel when stop dargging
    const scrollLeft = carousel.scrollLeft;

    // Get postion of left side of the picture
    const scrollWidth = carousel.scrollWidth - carousel.clientWidth;

    // Find postion of picture start and finsh
    const snapPoints = Array.from(carousel.children).map((child, index) => index * (firstCardWidth + mainCarouselGap));
    
    // Find the closest snap point to the current scroll position
    const closestSnap = snapPoints.reduce((prev, curr) => {
        return Math.abs(curr - scrollLeft) < Math.abs(prev - scrollLeft) ? curr : prev;
    });

    // Scroll to the closest snap point
    carousel.scrollTo({
        left: Math.min(closestSnap, scrollWidth),
        behavior: 'smooth'
    });
    imageIndex = (closestSnap / (firstCardWidth + mainCarouselGap)) +1;
    setThumbnailImage(imageIndex);
};

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);

carousel.addEventListener("touchstart", dragStart);
carousel.addEventListener("touchmove", dragging);
carousel.addEventListener("touchend", dragStop);


document.querySelector('.product-cart').addEventListener('submit', function(event) {
  const size = document.getElementById('sizes');
  const sizeError = document.querySelector('.error-size');
  console.log(size);
  if (size.value === "") {
      sizeError.style.display = 'block';
      event.preventDefault();
  } else {
      sizeError.style.display = 'none';
  }

})


window.onload = setThumbnailImage(imageIndex);

function confirmDelete() {
  const isConfirmed = confirm("Are you sure you want to delete this item?");
  if (isConfirmed) {
      document.getElementById('deleteForm').submit();
  }
}