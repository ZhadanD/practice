if(localStorage.getItem('from') && localStorage.getItem('before') && localStorage.getItem('step') && localStorage.getItem('func')) {
    let from = localStorage.getItem('from');
    let before = localStorage.getItem('before');
    let step = localStorage.getItem('step');
    let func = localStorage.getItem('func');

    let tableBody = document.getElementById('table-body');

    switch(func) {
        case 'sinus':
            document.getElementById('used_function').innerText = 'sin';
            for (let i = parseInt(from); i <= parseInt(before); i += parseInt(step)) {
                tableBody.innerHTML += `<tr>
                                        <td>${i}</td>
                                        <td>${i * Math.PI / 180}</td>
                                        <td>${Math.sin(i * Math.PI / 180)}</td>
                                        </tr>`;
            }
            break;
        case 'kosinus':
            document.getElementById('used_function').innerText = 'cos';
            for (let i = parseInt(from); i <= parseInt(before); i += parseInt(step)) {
                tableBody.innerHTML += `<tr>
                                        <td>${i}</td>
                                        <td>${i * Math.PI / 180}</td>
                                        <td>${Math.cos(i * Math.PI / 180)}</td>
                                        </tr>`;
            }
            break;
        case 'tangens':
            document.getElementById('used_function').innerText = 'tan';
            for (let i = parseInt(from); i <= parseInt(before); i += parseInt(step)) {
                tableBody.innerHTML += `<tr>
                                        <td>${i}</td>
                                        <td>${i * Math.PI / 180}</td>
                                        <td>${Math.tan(i * Math.PI / 180)}</td>
                                        </tr>`;
            }
            break;
    }
}
