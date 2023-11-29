function changeImage() {
    let selectImage = document.getElementById('select_image').value;
    let image = document.querySelector('#image');

    switch(selectImage) {
        case 'furniture':
            image.src = 'img/furniture.png';
            break;
        case 'funny_cat':
            image.src = 'img/cat.png';
            break;
        case 'cute_cat':
            image.src = 'img/cat2.png';
            break;
    }
}