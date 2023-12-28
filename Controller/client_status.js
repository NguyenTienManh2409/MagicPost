document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('btnSearch').addEventListener('click', function () {
        var oder_code = document.getElementById('oder_code').value.trim();
        fetchDataFromApi(oder_code);
    });
});

function fetchDataFromApi(oder_code) {
    // Make an AJAX request to API
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                updateTable(response);
            } else {
                console.error('Error:', xhr.statusText);
            }
        }
    };

    xhr.open('POST', '/MagicPost/backend/api/oder_status/status_one_oder.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({ oder_code: oder_code }));
}


function updateTable(data) {
    var tableBody = document.getElementById('OrderTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = '';

    for (var i = 0; i < data.status_list.length; i++) {
        var row = tableBody.insertRow(i);
        var rowData = data.status_list[i];

        for (var key in rowData) {
            if (rowData.hasOwnProperty(key)) {
                var cell = row.insertCell();
                cell.innerHTML = rowData[key];
            }
        }
    }
}