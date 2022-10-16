<!-- Code chức năng cho trang web -->

Git sẽ chia công việc ra thành các nhánh
Khi đưa git vào 1 thư mục thì mặc định 1 nhánh gốc sẽ được tạo ra

        master / main
          |
         /|
        / |\
Tạo mới   | \ Danh sách user



Có 2 chiều làm việc: Github <====> Thư mục ở local (git local)

Các công đoạn làm việc với git
1. Code ở trên 1 nhánh nào đó
2. Kiểm tra sự thay đổi ở trên phần mềm github desktop
3. Đóng gói code lại và dán nhãn (commit)
4. Public repository (Tạo thư mục trên github bằng github desktop) và đẩy phần code vừa rồi lên


Nếu tạo thư mục code mới và muốn đẩy lên git
1. Thực hiện code bình thường
2. Vào github desktop chọn File -> Add local repository -> Chọn thư mục đang code
3. Bấm vào chữ nhỏ "create a repository" để git biết là mình muốn quản lý thư mục này
4. Github desktop sẽ tự đóng gói code đang có vào 1 commit "Initial commit"
5. Public repository: tạo tên thư mục muốn lưu ở github sau đó bấm -> có code trên github


Nếu là thành viên tiếp theo kéo code về để làm tiếp
1. Vào github desktop: Ấn vào current repository -> Add -> Clone
2. Copy link github của bạn A vào và lựa chọn thư mục muốn tải về
3. Bấm clone và bắt đầu vào code
4. Tạo 1 nhánh mới để làm việc tránh làm đè vào cùng 1 nhánh (nhánh vừa tạo được rẽ từ nhánh gốc là nhánh main)

Khi code đã được đẩy lên và muốn được gộp vào nhánh gốc
1. Bấm Compare & pull request
2. Kiểm tra lại code so sánh giữa 2 nhánh (Split để chia đôi màn hình)
3. Bấm Create pull request
4. Thành viên phụ trách công việc kiểm tra code sẽ xem và bấm Merge
5. Các thành viên về github desktop -> quay về nhánh main -> Bấm Fetch orgin & Pull origin để có code mới nhất
6. Làm việc tiếp ở nhánh mới


Khi C sửa file index.php nhưng trước đó B cũng đã sửa nhưng
thời điểm C làm thì chưa có code của B -> C và B sẽ bị đè code nhau (conflict)

Khi B đụng vào file này sau đó đẩy code lên,
và C cũng đụng vào file này nhưng lúc C đụng vào thì nhánh main chưa có code của B

