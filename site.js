function dataHandler(resp) {
    console.log(resp);
    $('#result').append(resp);
}

function getData() {
    // Builds a Fusion Tables SQL query and hands the result to  dataHandler
    var queryUrlHead = 'https://www.googleapis.com/fusiontables/v1/query?sql=';
    var queryUrlTail = '&key=AIzaSyDvIDIFzVoVMZVntp9Zsno5zi8H0h89EFE';
    var tableId = '1rs0F5J6uh1CX5-TZvIsFIKD9IZYro_ESzDdkqGKE';

    // write your SQL as normal, then encode it
    var query = "DESCRIBE " + tableId ;
    var queryurl = encodeURI(queryUrlHead + query + queryUrlTail);

    var jqxhr = $.get(queryurl, dataHandler, "jsonp");
}

getData();