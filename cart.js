function toggleMenu() {
    let hamburgerNavBar = document.getElementById("hamburger-navBar");
    if (hamburgerNavBar.style.display === "none" || hamburgerNavBar.style.display === "") {
        hamburgerNavBar.style.display = "block";
    } else {
        hamburgerNavBar.style.display = "none";
    }
}

function populateCartTable() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTable = document.getElementById('shopping-cart-table');

    cart.forEach(item => {
        const row = cartTable.insertRow(-1);
        row.insertCell(0).textContent = item.quantity;
        row.insertCell(1).textContent = item.title;
        row.insertCell(2).textContent = `£${item.price}`;
        const removeBtnCell = row.insertCell(3);
        const removeBtn = document.createElement('button');
        removeBtn.textContent = 'Remove';
        removeBtn.onclick = function() {
        };
    });
}

function populateProductIds() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const productIds = cart.map(item => item.id).join(',');
    document.getElementById('product-ids').value = productIds;

    return true;
}

document.addEventListener('DOMContentLoaded', function() {
    toggleMenu();
    populateCartTable();
    document.getElementById('process-payment-button').addEventListener('click', populateProductIds);
});
