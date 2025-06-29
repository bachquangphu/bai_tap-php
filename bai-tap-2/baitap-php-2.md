### Bài tập: Xác thực và xử lý Thông tin liên hệ

**Mô tả:** Tạo một biểu mẫu liên hệ đơn giản (HTML) và một script PHP để nhận dữ liệu từ biểu mẫu đó, sau đó kiểm tra và xử lý chuỗi nhập vào.

**Yêu cầu:**

**Phần 1: File HTML (Ví dụ: `index.html`)**

1.  Tạo một file HTML (ví dụ: `index.html`) chứa một form HTML cơ bản.
2.  Form cần có các trường sau:
    * **Tên của bạn:** `text input` với `name="ho_ten"`
    * **Email:** `email input` với `name="email"`
    * **Tiêu đề:** `text input` với `name="tieu_de"`
    * **Nội dung tin nhắn:** `textarea` với `name="noi_dung"`
    * Một nút **Gửi** (`submit button`).
3.  Đảm bảo `form` có `method="POST"` và `action="xu-ly-lien-he.php"`.

**Phần 2: File PHP (Ví dụ: `xu-ly-lien-he.php`)**

1.  Tạo một file PHP (ví dụ: `xu-ly-lien-he.php`) sẽ nhận và xử lý dữ liệu từ form.
2.  **Kiểm tra dữ liệu POST:**
	* Tạo một mảng `$errors` để lưu trữ các thông báo lỗi.
    * Sử dụng **`isset()`** để kiểm tra xem các biến POST (`$_POST['ho_ten']`, `$_POST['email']`, `$_POST['tieu_de']`, `$_POST['noi_dung']`) có tồn tại không. Nếu không, hiển thị thông báo lỗi.
3.  **Xác thực và xử lý chuỗi:**
    * **`ho_ten`**:
        * Kiểm tra xem tên có rỗng sau khi loại bỏ khoảng trắng thừa không. Nếu rỗng, thêm lỗi vào `$errors`.
        * Đảm bảo `ho_ten` là một chuỗi bằng **`is_string()`**.
		* Sử dụng **`strlen()`** để giới hạn độ dài tiêu đề (tối đa 50 ký tự). Nếu quá dài, thêm lỗi.
    * **`email`**:
        * Kiểm tra `empty()` và `trim()` tương tự như `ho_ten`.
        * Sử dụng **`filter_var($email, FILTER_VALIDATE_EMAIL)`** để xác thực định dạng email. Nếu không hợp lệ, thêm lỗi.
    * **`tieu_de`**:
        * Kiểm tra xem chuỗi có rỗng sau khi loại bỏ khoảng trắng thừa không. Nếu rỗng, thêm lỗi vào `$errors`.
        * Sử dụng **`strlen()`** để giới hạn độ dài tiêu đề (tối đa 100 ký tự). Nếu quá dài, thêm lỗi.
    * **`noi_dung`**:
        * Kiểm tra `empty()` và `trim()`.
        * Sử dụng **`nl2br()`** để chuyển đổi ký tự xuống dòng trong phần nội dung thành `<br>` khi hiển thị, và **`htmlspecialchars()`** để ngăn chặn XSS khi hiển thị ra trình duyệt.

4.  **Hiển thị kết quả:**
    * Nếu mảng `$errors` không có phần tử, hiển thị thông báo "Tin nhắn của bạn đã được gửi thành công!" cùng với các thông tin đã nhập (Họ tên, Email, Tiêu đề, Nội dung).
    * Nếu có lỗi, sử dụng vòng lặp để hiển thị tất cả các lỗi đã thu thập được cho người dùng.
