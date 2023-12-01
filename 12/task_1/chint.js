function GetXmlHttpObject() {
    let xmlHttp = null;
    try {
        xmlHttp = new XMLHttpRequest();
    } catch(e) {
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (e) {
            xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
    }

    return xmlHttp;
}

let xmlHttp;

function showHint(str) {
    if(str.length === 0) {
        document.getElementById('txtHint').innerHTML = "";
        return;
    }

    xmlHttp = GetXmlHttpObject();
    if(xmlHttp===null) {
        alert("Your browser does not support AJAX!");
        return;
    }

    let url = "ghint.php";
    url += "?q=" + str;
    url += "&sid=" + Math.random();
    xmlHttp.open("GET", url, true);
    xmlHttp.onload = () => {
        document.getElementById('txtHint').innerText = xmlHttp.response;
    }
    xmlHttp.send(null);
}
