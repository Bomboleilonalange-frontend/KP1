let quantity = 0; // Задай начальное значение для переменной quantity
let products = [];
let xhr = new XMLHttpRequest();
xhr.open('GET', 'php/addtocart.php');
xhr.onload = function() {
    if (xhr.status === 200) {
        products = JSON.parse(xhr.responseText);
    }
};
xhr.send();
let cart = [];
document.querySelectorAll('.Set .click').forEach(function(button) {
    button.addEventListener('click', function() {
        let id = this.closest('.Set').getAttribute('id');
        let product = SomeProducts.find(function(p) {
            return p.id == id;
        });
        if (product) {
            let quantity = parseInt(this.closest('.Set').querySelector('.Quantity').textContent);
            document.querySelector('.Backet_quentity').textContent = quantity;
            cart.push(product);
            updateCart();
        }
    });
});

document.querySelectorAll('.Set .click-minus').forEach(function(button) {
    button.addEventListener('click', function() {
        let id = this.closest('.Set').getAttribute('id');
        let productIndex = cart.findIndex(function(p) {
            return p.id == id;
        });
        if (productIndex !== -1) {
            let quantity = parseInt(this.closest('.Set').querySelector('.Quantity').textContent);
            if (quantity > 1) {
                document.querySelector('.Backet_quentity').textContent = quantity - 1;
                this.closest('.Set').querySelector('.Quantity').textContent = quantity - 1;
                updateCart();
            } else {
                cart.splice(productIndex, 1);
                updateCart();
            }
        }
    });
});

document.querySelectorAll('.Set .click-plus').forEach(function(button) {
    button.addEventListener('click', function() {
        let id = this.closest('.Set').getAttribute('id');
        let productIndex = cart.findIndex(function(p) {
            return p.id == id;
        });
        if (productIndex !== -1) {
            let quantity = parseInt(this.closest('.Set').querySelector('.Quantity').textContent);
            document.querySelector('.Backet_quentity').textContent = quantity + 1;
            this.closest('.Set').querySelector('.Quantity').textContent = quantity + 1;
            updateCart();
        }
    });
});

function updateCart() {
    let cartContainer = document.querySelector('.Backet');
    cartContainer.innerHTML = '';
    let totalPrice = 0;
    cart.forEach(function(product, index) {
        let item = document.createElement('div');
        item.classList.add('item');
        item.innerHTML = `
            <div class="item-description">
                <img src="${product.image}" class="item-img" alt="item-image">
                <h3 class="item-product-description">${product.large_text}</h3>
            </div>
            <div class="item-price">${product.price} р / шт</div>
            <div class="item-quantity">
                <div class="">
                    <input class="quantity-counter" type="number" value="${quantity}">
                </div>
            </div>
            <div class="item-total-price">${product.price * quantity} р/ шт</div>
            <img class="trash" src="img/Main-boxes/trash.svg" alt="delete-icon">
        `;
        item.querySelector('.trash').addEventListener('click', function() {
            cart.splice(index, 1);
            updateCart();
        });
        item.querySelector('.quantity-counter').addEventListener('change', function() {
            if (this.value == 0) {
                cart.splice(index, 1);
                updateCart();
            } else {
                item.querySelector('.item-total-price').textContent = `${product.price * this.value} р/ шт`;
                updateTotalPrice();
            }
        });
        cartContainer.appendChild(item);
        totalPrice += product.price * quantity;
    });
    updateTotalPrice();
}

function updateTotalPrice() {
    let totalPrice = 0;
    document.querySelectorAll('.item-total-price').forEach(function(item) {
        totalPrice += parseInt(item.textContent);
    });
    document.querySelector('.total-price').textContent = `Итоговая цена: ${totalPrice} р/ шт`;
}