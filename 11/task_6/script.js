function change_ellipse() {
    let majorAxis = document.getElementById("majorAxis").value;
    let minorAxis = document.getElementById("minorAxis").value;

    document.getElementById("ellipse").style.width = majorAxis + "px";
    document.getElementById("ellipse").style.height = minorAxis + "px";
}