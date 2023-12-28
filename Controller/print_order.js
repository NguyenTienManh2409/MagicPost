
document.getElementById("clientOrderForm").addEventListener("submit", function(event) {
    event.preventDefault();

    const name_item = document.getElementById("name_item").value;
    const oder_code = document.getElementById("oder_code").value;
    const sender = document.getElementById("sender").value;
    const user_code = document.getElementById("user_code").value;
    const sender_phone = document.getElementById("sender_phone").value;
    const sender_address = document.getElementById("sender_address").value;
    const sender_zip_code = document.getElementById("sender_zip_code").value;
    const receiver = document.getElementById("receiver").value;
    const receiver_phone = document.getElementById("receiver_phone").value;
    const receiver_address = document.getElementById("receiver_address").value;
    const receiver_zip_code = document.getElementById("receiver_zip_code").value;
    const type = document.getElementById("type").value;
    const instruction= document.getElementById("instruction").value;
    const note = document.getElementById("note").value;
    const rates = document.getElementById("rates").value;
    const COD = document.getElementById("COD").value;
    const mass = document.getElementById("mass").value;
    const sending_time = document.getElementById("sending_time").value;
    const completion_time = document.getElementById("completion_time").value;
    const management = document.getElementById("management").value;
    // Tạo một cửa sổ mới để hiển thị nội dung HTML
    const newWindow = window.open("", "_blank");

    // Lấy nội dung HTML của biểu mẫu
    const htmlContent = document.getElementById("clientOrderForm").outerHTML;

    // Hiển thị nội dung HTML trong cửa sổ mới
    newWindow.document.write(`
    <html>
      <head>

        <title>Biên nhận đơn hàng</title>
        <style>
          body {
            font-family: 'Arial', sans-serif;
          }

          @media print {    
            /* Định dạng lại trang in */
            #clientOrderForm {
                width: 60%;
                margin: 0 auto;
                margin-top: 20px;
            }

            input {
              border: none;
              border-bottom: 1px solid #000;
              margin-bottom: 10px;
            }

            label {
              font-weight: bold;
              margin-right: 30px;
              display: inline-block;
            }
          }
        </style>
      </head>
      <body>
        <img id="logo" src="/MagicPost/assets/img/logo.png" alt="Logo" width="50" height="50">
        <h2>Client Order Form</h2>
        <label>Tên mặt hàng: </label>${name_item}<br>
        <label>Mã đơn hàng: </label>${oder_code}<br>
        <label>Người gửi: </label>${sender}<br>
        <label>Mã khách hàng: </label>${user_code}<br>
        <label>Sdt người gửi: </label>${sender_phone}<br>
        <label>MĐịa chỉ gửi: </label>${sender_address}<br>
        <label>Mã bưu chính gửi: </label>${sender_zip_code}<br>
        <label>Người nhận: </label>${receiver}<br>
        <label>Số điện thoại người nhận: </label>${receiver_phone}<br>
        <label>Địa chỉ nhận: </label>${receiver_address}<br>
        <label>Mã bưu chính nhận: </label>${receiver_zip_code}<br>
        <label>Loại hàng: </label>${type}<br>
        <label>Chỉ dẫn: </label>${instruction}<br>
        <label>Ghi chú: </label>${note}<br>
        <label>Cước phí: </label>${rates}<br>
        <label>COD: </label>${COD}<br>
        <label>Khối lượng: </label>${mass}<br>
        <label>Thời gian gửi: </label>${sending_time}<br>
        <label>Thời gian hoàn thành: </label>${completion_time}<br>
        <label>Quản lý công ty: </label>${management}<br>
        <script>
          window.print();
        </script>
      </body>
    </html>
    `);

    setTimeout(() => {
        // Sử dụng API in để chuyển đổi cửa sổ thành tệp PDF
        newWindow.print();
        newWindow.onafterprint = function() {
          // Đóng cửa sổ sau khi in hoàn tất
          newWindow.close();
        };
      }, 1000);
});