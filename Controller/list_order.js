document.addEventListener('DOMContentLoaded', function() {
    // Make an AJAX request to API
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                updateTable(response);
                console.log("12312413");

            } else {
                console.error('Error:', xhr.statusText);
            }
        }
    };

    xhr.open('GET', 'backend/api/oder/list_oder.php', true);
    xhr.send();
});

function updateTable(data) {
    var tableBody = document.getElementById('accountTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = '';

    for (var i = 0; i < data.oder_info.length; i++) {
        var row = tableBody.insertRow(i);
        var rowData = data.oder_info[i];

        for (var key in rowData) {
            if (rowData.hasOwnProperty(key)) {
                var cell = row.insertCell();
                cell.innerHTML = rowData[key];
            }
        }
    }
}