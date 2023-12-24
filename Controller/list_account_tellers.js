document.addEventListener('DOMContentLoaded', function() {
    // Make an AJAX request to API
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                updateTable(response);
            } else {
                console.error('Error:', xhr.statusText);
            }
        }
    };

    xhr.open('GET', 'backend/api/account/list_account_tellers.php', true);
    xhr.send();
});

function updateTable(data) {
    var tableBody = document.getElementById('accountTable').getElementsByTagName('tbody')[0];
    tableBody.innerHTML = '';

    for (var i = 0; i < data.account_staff.length; i++) {
        var row = tableBody.insertRow(i);
        var rowData = data.account_staff[i];

        for (var key in rowData) {
            if (rowData.hasOwnProperty(key)) {
                var cell = row.insertCell();
                cell.innerHTML = rowData[key];
            }
        }
    }
}