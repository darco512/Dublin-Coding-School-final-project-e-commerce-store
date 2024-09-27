const button = document.getElementById('burger-icon');
let isClicked = false;
button.addEventListener('click', function(){
    const mobileNavMenu = document.querySelector('.mobile-nav');
    if(!isClicked){
        mobileNavMenu.style.display = 'flex';
        isClicked = true;
    } else {
        mobileNavMenu.style.display = 'none';
        isClicked = false;
    }
})