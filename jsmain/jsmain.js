


function onSelectChange() {
    var value = document.getElementById("category").value;
    if ( (value == 'Clothing and Accessories') || (value == 'Bags and Accessories')) {
        document.getElementById('gender').style.display = 'block';
    } else {
        document.getElementById('gender').style.display = 'none';
    }
}

