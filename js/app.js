function sendRequest(name, type) {
    var info = name;
    var trabajo = type;
    console.log(info);
    var object = new XMLHttpRequest();
    object.open('POST', './views/show_documents.php', true);
    object.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    object.send('investigacion=' + info + '&tipo=' + trabajo);
    object.onreadystatechange = function () {
        document.getElementById('Documentos').innerHTML = object.responseText;
    }
}