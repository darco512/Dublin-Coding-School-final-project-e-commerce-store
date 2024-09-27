document.addEventListener('DOMContentLoaded', function () {
    const categoryDivs = document.querySelectorAll('.category-div');
    const productListDiv = document.querySelector('.collection-products');

    categoryDivs.forEach(div => {
        div.addEventListener('click', function () {
            categoryDivs.forEach(d => d.classList.remove('active'));
            this.classList.add('active');

            const category = this.id.replace('category-', '');

            fetchProducts(category);
        });
    });

    function fetchProducts(category) {
        fetch(`../php/handleCollectionsFetch.php?category=${category}`)
            .then(response => response.json())
            .then(data => {
                productListDiv.innerHTML = '';
                if (data.length > 0) {
                    data.forEach(product => {
                        const productDiv = document.createElement('div');
                        productDiv.classList.add("collection-product")
                        productDiv.innerHTML = `
                            <a href="/Coding School Final Project/pages/product.php?id=${product.product_id}"><img src="${product.path}"></a>
                            <h3>${product.brand}</h3>
                            <p>${product.type}</p>
                            <h4><s>$ ${product.old_price}</s><span> $ ${product.price}</span></h4>
                        `;
                        productListDiv.appendChild(productDiv);
                    });
                } else {
                    productListDiv.innerHTML = '<p>No products found.</p>';
                }
            })
            .catch(error => console.error('Error fetching products:', error));
    }

    // Trigger click on the default active category
    document.querySelector('.category-div.active').click();
});
