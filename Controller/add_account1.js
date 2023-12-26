document.getElementById("addEmployee").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = {
        "type":document.getElementById("type").value,
        "full_name":document.getElementById("full_name").value,
        "phone_number":document.getElementById("phone_number").value,
        "address":document.getElementById("address").value,
        "employee_code":document.getElementById("employee_code").value,
        "user_name":document.getElementById("user_name").value,
        "email":document.getElementById("email").value,
        "password":document.getElementById("password").value,
        "company_code":document.getElementById("company_code").value
    };

    fetch("backend/api/account/new_account.php", {
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
