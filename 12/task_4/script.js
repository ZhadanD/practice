function sendFile() {
    let xhr = new XMLHttpRequest();
    let formData = new FormData();
    let file = document.getElementById('file').files[0];

    xhr.open('POST', 'server.php');

    formData.append('file', file);

    xhr.send(formData);
}
