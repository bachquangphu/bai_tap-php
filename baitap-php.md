### Bài tập 1: Tính toán và Phân loại Điểm số

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo ba biến `$diemToan`, `$diemVan`, `$diemAnh` với các giá trị điểm số bất kỳ (kiểu số thực, ví dụ: `7.5`, `8.0`, `6.5`).
2.  Tính **điểm trung bình** của ba môn học này và lưu vào biến `$diemTrungBinh`.
3.  Sử dụng cấu trúc **`if-else if-else`** để phân loại học lực dựa trên `$diemTrungBinh` theo quy tắc sau:
    - `>= 8.5`: "Giỏi"
    - `>= 7.0`: "Khá"
    - `>= 5.0`: "Trung bình"
    - `< 5.0`: "Yếu"
4.  In ra màn hình điểm trung bình và học lực tương ứng.

---

### Bài tập 2: Xử lý Tháng trong Năm

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo một biến `$thang` kiểu số nguyên, gán một giá trị bất kỳ từ 1 đến 12 (ví dụ: `3` cho tháng 3).
2.  Sử dụng cấu trúc **`switch`** để hiển thị tên của tháng tương ứng với giá trị của biến `$thang`.
    - Ví dụ: Nếu `$thang = 1`, in ra "Tháng Một".
    - Nếu giá trị không nằm trong khoảng 1-12, in ra "Giá trị tháng không hợp lệ."
3.  Sau đó, sử dụng cấu trúc **`if-else`** để kiểm tra xem `$thang` có phải là tháng của quý 2 (tháng 4, 5, 6) hay không. Nếu có, in ra "Đây là tháng thuộc quý 2." Ngược lại, in ra "Đây không phải tháng thuộc quý 2."

---

### Bài tập 3: Thao tác với Mảng Số nguyên

**Yêu cầu:** Viết một đoạn mã PHP thực hiện các bước sau:

1.  Khai báo một **mảng** `$soNguyen` chứa ít nhất 5 số nguyên bất kỳ (ví dụ: `[10, 5, 20, 15, 8]`).
2.  Sử dụng vòng lặp **`for`** để in ra các số chẵn trong mảng.
3.  Sử dụng vòng lặp **`foreach`** để tính **tổng** của tất cả các số trong mảng.
4.  Sau khi tính tổng, sử dụng **toán tử `%` (modulo)** để kiểm tra xem tổng đó là số chẵn hay số lẻ. In ra kết quả tương ứng (ví dụ: "Tổng là số chẵn." hoặc "Tổng là số lẻ.").
5.  Tìm số lớn nhất trong mảng
