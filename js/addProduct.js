// Handle uploading images preview and deleting

document.addEventListener('DOMContentLoaded', function() {
    const mainImagePreview = document.getElementById('main-image-preview');
    const thumbnailsContainer = document.getElementById('thumbnails-container');
    const thumbnailInput = document.getElementById('images');

    const dataTransfer = new DataTransfer();

    thumbnailInput.addEventListener('change', function(event) {
        const files = event.target.files;

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            dataTransfer.items.add(file);

            const reader = new FileReader();

            reader.onload = function(e) {
                const imageContainer = document.createElement('div');
                imageContainer.classList.add('image-container');

                const deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-btn');
                deleteButton.setAttribute('id', 'val');
                deleteButton.innerHTML = "&times";

                const thumbnailImg = document.createElement('img');
                thumbnailImg.src = e.target.result;
                thumbnailImg.dataset.fileName = file.name;  

                deleteButton.addEventListener('click', function() {

                    for (let j = 0; j < dataTransfer.files.length; j++) {
                        if (dataTransfer.files[j].name === thumbnailImg.dataset.fileName) {
                            dataTransfer.items.remove(j); 
                            break;
                        }
                    }

                    thumbnailInput.files = dataTransfer.files; 
                    imageContainer.remove(); 
                    updateMainImage();
                });

                imageContainer.appendChild(thumbnailImg);
                imageContainer.appendChild(deleteButton);

                thumbnailImg.addEventListener('click', function() {
                    mainImagePreview.src = thumbnailImg.src;
                });

                thumbnailsContainer.appendChild(imageContainer);
            };

            reader.readAsDataURL(file);
        }

        thumbnailInput.files = dataTransfer.files;
        updateMainImage();
    });

    function updateMainImage() {
        if (dataTransfer.files.length > 0) {
            mainImagePreview.src = URL.createObjectURL(dataTransfer.files[0]);
        } else {
            mainImagePreview.src = '../images/no-image.png'; 
        }
    }
});

//Add sizes row and deleting

document.getElementById('add-size').addEventListener('click', function(event) {
    event.preventDefault();
    
    const sizeContainer = document.createElement('div');
    sizeContainer.classList.add('add-sizes-row');

    const sizeInput = document.createElement('input');
    sizeInput.type = 'text';
    sizeInput.name = 'sizes[]';
    sizeInput.required = true;

    const quantityInput = document.createElement('input');
    quantityInput.type = 'number';
    quantityInput.name = 'quantities[]';
    quantityInput.required = true;

    const deteleButton = document.createElement('button');
    deteleButton.classList.add('delete-btn');
    deteleButton.innerHTML +="&times";
    deteleButton.addEventListener('click', function(){
        sizeContainer.remove();
    })

    sizeContainer.appendChild(sizeInput);
    sizeContainer.appendChild(quantityInput);
    sizeContainer.appendChild(deteleButton);

    const sizeInputsContainer = document.querySelector('.size-inputs-container');
    sizeInputsContainer.appendChild(sizeContainer);
});



// Check that user select any category


document.querySelector('.add-product').addEventListener('submit', function(event) {
    const select = document.getElementById('add-category');
    const categoryErrorMessage = document.getElementById('error-category');
    const imagesErrorMeassage = document.getElementById('error-images');
    const images = document.getElementById('images');

    if(images.files.length === 0){
        imagesErrorMeassage.style.display = 'block';
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }else {
        imagesErrorMeassage.style.display = 'none';
    }

    if (select.value === "") {
        categoryErrorMessage.style.display = 'block';
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    } else {
        categoryErrorMessage.style.display = 'none';
    }




});
