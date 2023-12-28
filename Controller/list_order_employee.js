document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('btnSearch').addEventListener('click', function () {
        var EmployeeCode = document.getElementById('EmployeeCode').value.trim();
        fetchDataFromApi(EmployeeCode);
    });
});

function fetchDataFromApi(EmployeeCode) {
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

    xhr.open('POST', '/MagicPost/backend/api/oder_status/list_oder_an_employee.php', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({ employee_code: EmployeeCode }));
}


function updateTable(data) {
    var tableBody = document.getElementById('OrderTable').getElementsByTagName('tbody')[0];
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