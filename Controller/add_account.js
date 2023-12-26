
document.addEventListener("DOMContentLoaded", function() {
    // Bắt sự kiện khi form được nộp
    document.getElementById("addEmployee").addEventListener("submit", function(event) {
        event.preventDefault(); 
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

        // Sự kiện được gọi khi yêu cầu hoàn tất thành công
        xhr.onreadystatechange = function() {
            var messageContainer = document.getElementById("messageContainer");
            if (xhr.status === 200) {
                // Thành công, hiển thị thông báo và tải lại trang
                messageContainer.innerHTML = "Yêu cầu thành công";
                setTimeout(function() {
                    location.reload();
                }, 2000); // Tải lại trang sau 2 giây
            } else {
                // Xảy ra lỗi, hiển thị thông báo lỗi
                messageContainer.innerHTML = "Yêu cầu không thành công. Mã lỗi: " + xhr.status;
            }
        };

        // Sự kiện được gọi khi có lỗi xảy ra trong quá trình gửi yêu cầu
        xhr.onerror = function() {
            var messageContainer = document.getElementById("messageContainer");

            // Hiển thị thông báo lỗi
            messageContainer.innerHTML = "Có lỗi xảy ra trong quá trình gửi yêu cầu.";
        };

        xhr.setRequestHeader("Content-Type", "application/json;");
        // Chuyển đối tượng thành chuỗi JSON và gửi đi
        xhr.send(JSON.stringify(formData));
    });
});   

