document.getElementById("clientOrderForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = {
        "name_item":document.getElementById("name_item").value,
        "oder_code":document.getElementById("oder_code").value,
        "sender":document.getElementById("sender").value,
        "user_code":document.getElementById("user_code").value,
        "sender_phone":document.getElementById("sender_phone").value,
        "sender_address":document.getElementById("sender_address").value,
        "sender_zip_code":document.getElementById("sender_zip_code").value,
        "receiver":document.getElementById("receiver").value,
        "receiver_phone":document.getElementById("receiver_phone").value,
        "receiver_address":document.getElementById("receiver_address").value,
        "receiver_zip_code":document.getElementById("receiver_zip_code").value,
        "type":document.getElementById("type").value,
        "instruction":document.getElementById("instruction").value,
        "note":document.getElementById("note").value,
        "rates":document.getElementById("rates").value,
        "COD":document.getElementById("COD").value,
        "mass":document.getElementById("mass").value,
        "sending_time":document.getElementById("sending_time").value,
        "completion_time":document.getElementById("completion_time").value,
        "management":document.getElementById("management").value
    };

    fetch("/MagicPost/backend/api/oder/new_oder.php", {
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
