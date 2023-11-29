function validation(product, material, counter) {
    let form = document.getElementById('my_form');

    if(product === '' || material === '' || counter === '') {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
        })
        alert('Введите пожалуйста все данные!');
    } else {
        form.submit();
    }
}

function order() {
    let product = document.getElementById('product').value;
    let material = document.getElementById('material').value;
    let counter = document.getElementById('counter').value;

    validation(product, material, counter);
}
