HƯỚNG DẪN SỬ DỤNG DEMO DEVOPS & CI/CD (PHP)

1.	MỤC ĐÍCH CỦA DEMO
•	Demo này được xây dựng nhằm minh họa cách DevOps và CI/CD hoạt động trong thực tế.
•	Mục đích chính không phải là xây dựng một phần mềm phức tạp mà là thể hiện quy trình:
•	viết code → kiểm tra → tự động kiểm tra khi cập nhật.
2. CHẠY ỨNG DỤNG PHP TRÊN MÁY CÁ NHÂN
•	Bước 1: Mở VS Code và mở Terminal tại thư mục project.
•	Bước 2: Chạy lệnh: php -S localhost:8000
•	Bước 3: Mở trình duyệt và truy cập http://localhost:8000
•	Mục đích: Kiểm tra ứng dụng có chạy đúng hay không.
3. CHẠY TEST TRÊN MÁY CÁ NHÂN (GIẢ LẬP CI)
•	Bước 1: Dừng server bằng Ctrl + C.
•	Bước 2: Chạy lệnh: php test.php
Kết quả:
- ALL TESTS PASSED: code đúng
- TEST FAIL: code sai
=> Mục đích: Phát hiện lỗi sớm trước khi push code.
4. SỬ DỤNG CI/CD TRÊN GITHUB
•	Bước 1: git add .
•	Bước 2: git commit -m "Update code"
•	Bước 3: git push
Kết quả: GitHub Actions tự động chạy.
5. XEM KẾT QUẢ CI/CD
Vào repository GitHub → tab Actions.
- Màu xanh: thành công
- Màu đỏ: thất bại
6. DEMO SAI VÀ SỬA LỖI
•	Sửa message trong index.php cho khác giá trị mong đợi để CI fail.
•	Sau đó sửa lại đúng để CI pass.
7. CÁCH LÀM GITHUB ACTIONS CHẠY MÀU ĐỎ
•	Bước 1: Mở file index.php
Tìm đoạn:
"message" => "Hello DevOps"
•	Bước 2: Sửa thành KHÁC ĐI (chỉ cần khác 1 ký tự)
"message" => "Hello DevOpps"
(Thêm 1 chữ p)
	 Đây là “sai” vì test.php đang kiểm tra đúng y chang "Hello DevOps".
•	Bước 3: Commit & Push
git add .
git commit -m "Make CI fail"
git push
Kết quả:
1.	Vào GitHub → tab Action
2.	Workflow sẽ chạy
3.	Kết quả MÀU ĐỎ (FAIL) 🔴
8. KẾT LUẬN
Demo giúp hiểu rõ cách CI/CD hỗ trợ DevOps, phát hiện lỗi sớm và giảm thao tác thủ công.




