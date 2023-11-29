function calculateCoordinates(radius, t) {
    let x = radius * Math.cos(t);
    let y = radius * Math.sin(t);
    return { x: x, y: y };
}

function moveSquare() {
    let container = document.getElementById("container");
    let square = document.getElementById("square");
    let radius = 50;
    let speed = 0.1;

    requestAnimationFrame(moveSquare);

    let t = performance.now() * speed / 1000;
    let coordinates = calculateCoordinates(radius, t);

    square.style.left = (container.offsetWidth / 2 + coordinates.x - square.offsetWidth / 2) + "px";
    square.style.top = (container.offsetHeight / 2 + coordinates.y - square.offsetHeight / 2) + "px";
}

window.onload = () => moveSquare();
