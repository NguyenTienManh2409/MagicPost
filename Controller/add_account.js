
document.addEventListener("DOMContentLoaded", function() {
    // Bắt sự kiện khi form được nộp
    document.getElementById("addEmployee").addEventListener("submit", function(e) {
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "backend/api/account/new_account.php", true);


        // Tạo đối tượng chứa dữ liệu từ form
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

        xhr.setRequestHeader("Content-Type", "application/json;");

        console.log(JSON.stringify(formData));

        // Chuyển đối tượng thành chuỗi JSON và gửi đi
        xhr.send(JSON.stringify(formData));
    });
});   

