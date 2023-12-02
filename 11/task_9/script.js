function validation() {
    let from = document.getElementById('from').value;
    let before = document.getElementById('before').value;
    let step = document.getElementById('step').value;
    let func = document.getElementById('function').value;

    if(from === '' || before === '' || step === '' || func === '') {
        alert('Введите пожалуйста все данные!');
    } else {
        localStorage.setItem('from', from);
        localStorage.setItem('before', before);
        localStorage.setItem('step', step);
        localStorage.setItem('func', func);

        open('table.html');
    }
}
