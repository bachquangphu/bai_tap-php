# 📝 Bài Tập PHP: Quản Lý Upload Ảnh

## 🎯 Mục tiêu
Thực hành các kỹ năng lập trình PHP cơ bản thông qua việc:

- Tạo form upload ảnh
- Sử dụng các hàm kiểm tra và xử lý file upload
- Thao tác với mảng để hiển thị danh sách file ảnh đã upload
- Kiểm tra và xử lý phần mở rộng file
- Đặt tên file theo định dạng ngày tháng
- Hiển thị thông tin file ảnh một cách trực quan

---

## 📌 Yêu cầu

### 1. Tạo form upload ảnh

Tạo một file `upload-form.html` chứa một biểu mẫu HTML để người dùng có thể chọn ảnh và upload lên máy chủ.

- Sử dụng phương thức `POST`
- Gửi dữ liệu dưới dạng `multipart/form-data`
- Chỉ cho phép chọn file hình ảnh (`jpg`, `jpeg`, `png`, `gif`)

> 📂 File cần tạo: `upload-form.html`

---

### 2. Xử lý upload và lưu ảnh

Tạo file `quan-ly-anh.php` để xử lý quá trình upload file.

- Kiểm tra file có được gửi lên không
- Chỉ chấp nhận các ảnh có phần mở rộng hợp lệ (`jpg`, `jpeg`, `png`, `gif`)
- Tạo thư mục `uploads/` nếu chưa có
- Để tránh bị trùng tên, đặt tên lại file theo định dạng: `img_YYYYMMDD_HHiiss_rand.ext`
  - Ví dụ: `img_20250630_144512_9823.jpg`
- Lưu file vào thư mục `uploads/`
- Ghi lại thông tin các ảnh đã upload thành công thành từng dòng vào file "list-images.txt"

> 📂 File cần tạo: `quan-ly-anh.php`

---

### 3. Hiển thị danh sách ảnh đã upload

Sau khi xử lý xong việc upload, trong file `quan-ly-anh.php`, hãy hiển thị danh sách ảnh đã upload bao gồm các thông tin:

- Tên file
- Dung lượng file (đơn vị KB)
- Thời gian upload (theo định dạng `d/m/Y H:i:s`)
