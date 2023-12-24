document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('btnSearch').addEventListener('click', function () {
        var companyCode = document.getElementById('companyCode').value.trim();
        fetchDataFromApi(companyCode);
    });
});

function fetchDataFromApi(companyCode) {
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

    xhr.open('POST', 'backend/api/oder_status/list_oder_in_workplace.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({ company_code: companyCode }));
}


function updateTable(data) {
    var tableBody = document.getElementById('accountTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = '';

    for (var i = 0; i < data.list_oder_status.length; i++) {
        var row = tableBody.insertRow(i);
        var rowData = data.list_oder_status[i];

        for (var key in rowData) {
            if (rowData.hasOwnProperty(key)) {
                var cell = row.insertCell();
                cell.innerHTML = rowData[key];
            }
        }
    }
}