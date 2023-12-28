
  document.getElementById('clientOrderForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Tạo một cửa sổ mới để hiển thị nội dung HTML
    const newWindow = window.open('', '_blank');

    // Lấy nội dung HTML của biểu mẫu
    const htmlContent = document.getElementById('clientOrderForm').outerHTML;

    // Hiển thị nội dung HTML trong cửa sổ mới
    newWindow.document.write(`
      <html>
        <head>
          <title>Client Order Form</title>
        </head>
        <body>
          ${htmlContent}
        </body>
      </html>
    `);

    // Chờ một khoảng thời gian ngắn để đảm bảo nội dung được tải đầy đủ
    setTimeout(() => {
      // Sử dụng API in để chuyển đổi cửa sổ thành tệp PDF
      newWindow.print();
      newWindow.onafterprint = function() {
        // Đóng cửa sổ sau khi in hoàn tất
        newWindow.close();
      };
    }, 1000);
  });

