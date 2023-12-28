document.getElementById("OderToGatheringPoint").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = {
        "oder_code":document.getElementById("oder_code").value,
        "status":document.getElementById("status").value,
        "employee_code":document.getElementById("employee_code").value,
        "receipt_time":document.getElementById("receipt_time").value,
        "response_time":document.getElementById("response_time").value
    };

    fetch("/MagicPost/backend/api/oder_status/new_status.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
    })
    .then(response => {
        if (response.ok) {
            // Xử lý khi yêu cầu thành công
            alert("Yêu cầu thành công");
            location.reload();
        } else {
            alert("Yêu cầu không thành công");
        }
    })
    .catch(error => {
        // Xử lý khi có lỗi
        console.log("Fetch error:", error);
        alert("Yêu cầu không thành công");
    });
});
