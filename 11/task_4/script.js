function validation(corner, func) {
    if(corner === '' || func === '') {
        alert('Введите пожалуйста все данные!');
        return false;
    } else if(corner <= 0 || corner >= 90) {
        alert('Угол должен быть больше нуля и меньше 90 градусов!');
        return false;
    }

    return true;
}

function calculate() {
    let corner = document.getElementById('corner').value;
    let func = document.getElementById('function').value;

    if(validation(corner, func)) {
        let result = 0;
        switch(func) {
            case 'sinus':
                result = Math.sin(corner * Math.PI / 180);
                break;
            case 'kosinus':
                result = Math.cos(corner * Math.PI / 180);
                break;
            case 'tangens':
                result = Math.tan(corner * Math.PI / 180);
                break;
        }

        alert('Результат = ' + result);
    }
}
