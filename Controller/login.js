document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = {
        "user_name":document.getElementById("user_name").value,
        "password":document.getElementById("password").value
    };

    fetch("/MagicPost/backend/api/login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify(formData),
    })
    .then(response => response.json())

    .then(data => {
        console.log(data);
        if(data == "đăng nhập quản lý tập kết thành công") {
            window.location.href = "index-GatheringPointLeader.php";
        } 
        else if (data == "đăng nhập quản lý giao dịch thành công") {
            window.location.href = "index-TransactionPointLeader.php";
        } 
        else if (data == "đăng nhập nhân viên giao dịch thành công") {
            window.location.href = "index-teller.php";
        } 
        else if (data == "đăng nhập nhân viên tập kết thành công") {
            window.location.href = "index-GatheringEmployee.php";
        }
        else if (data == "đăng nhập tài khoản chủ tịch thành công") {
            window.location.href = "index-leader.php";
        }
    })
    .catch(error => {
        // Xử lý khi có lỗi
        console.log("Fetch error:", error);
        alert("Yêu cầu không thành công");
    });
});
