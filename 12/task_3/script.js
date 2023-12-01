let regions;

function chooseCountry() {
    let url = 'server.php?country=' + document.getElementById('country').value;

    let xhr = new XMLHttpRequest();

    xhr.onload = () => {
        let objectRegions = JSON.parse(xhr.response);
        regions = objectRegions;

        let regionsInHTML = `<h1>Выбор региона</h1><select onclick="chooseRegion()" name="select_region" id="select_region" class="form-select">`
        for (const region of Object.keys(objectRegions)) {
            regionsInHTML += `<option>${region}</option>`;
        }
        regionsInHTML += '</select><br/><div id="city"></div>';

        document.getElementById('region').innerHTML = regionsInHTML;
    }
    xhr.open('GET', url, true);
    xhr.send();
}

function chooseRegion() {
    let region = document.getElementById('select_region').value;

    let citiesInHTML = `<h1>Выбор города</h1><select name="city" id="city" class="form-select">`
    for (const city of regions[region]) {
        citiesInHTML += `<option>${city}</option>`;
    }
    citiesInHTML += '</select>';

    document.getElementById('city').innerHTML = citiesInHTML;
}
