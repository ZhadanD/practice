function chooseBrand() {
    let url = 'server.php?brand=' + document.getElementById('brand').value;

    let xhr = new XMLHttpRequest();
    xhr.onload = () => {
        document.getElementById('models').innerText = xhr.response;
    }
    xhr.open('GET', url, true);
    xhr.send();
}
