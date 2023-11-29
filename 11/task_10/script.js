function changePriceAndQuantity() {
    let product = document.getElementById('select_product').value;
    let price = document.getElementById('price').value;
    let quantity = document.getElementById('quantity').value;

    switch(product) {
        case 'writing_desk':
            document.querySelector('#price_writing_desk').innerText = price;
            document.querySelector('#quantity_writing_desk').innerText = quantity;
            document.querySelector('#cost_writing_desk').innerText = price * quantity;
            break;
        case 'kitchen_table':
            document.querySelector('#price_kitchen_table').innerText = price;
            document.querySelector('#quantity_kitchen_table').innerText = quantity;
            document.querySelector('#cost_kitchen_table').innerText = price * quantity;
            break;
    }

    document.querySelector('#total_cost').innerText = parseInt(document.querySelector('#cost_writing_desk').innerText) + parseInt(document.querySelector('#cost_kitchen_table').innerText);
}
