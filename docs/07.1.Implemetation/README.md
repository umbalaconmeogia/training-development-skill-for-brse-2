# Login

Bài hôm nay sẽ trình bày cách implement một số cách implement tính năng login.
* Lưu thông tin login vào DB
* OAuth2

## Ôn lại bài cũ

Ở [bài trước](../07.Login/README.md) chúng ta đã thử với tính năng login bằng username và password.

Với code đầu tiên của model class *User*, chúng ta có 2 vấn đề:
1. Password lưu dưới dạng plain text.
2. Password được hard coding vào trong class User.

Chúng ta đã khắc phục vấn đề 1 bằng cách thay vì lưu plain password, thì chuyển sang lưu pasword hash.

Vấn đề 2 cũng có thể được khắc phục bằng cách chuyển thông tin về user vào một file nằm ngoài thư mục chương trình.

Tuy nhiên, cách này cũng sẽ khó cho việc vận hành.

Hôm nay chúng ta sẽ cải tiến phương pháp login bằng cách:
1. Lưu thông tin login vào DB.
2. Học thêm cách sử dụng hệ thống login bên ngoài (cụ thể là google ID).

## Lưu thông tin login vào DB

Trong DB migration, chúng ta đã tạo table user, dùng để lưu thông tin login (username, password hash). Tuy nhiên vẫn chưa sử dụng đến nó.

Hôm nay ta sẽ tạo model class SystemUser tương ứng với table này.

Ta đã có model class *User*. Ta có thể xóa nội dung cũ của file này đi, ghi đè nội dung mới vào. Tuy nhiên để tiện lưu lại cho các bạn tham khảo sau này (và có lí do để học thêm vài kỹ năng khác), chúng ta sẽ không xóa class User cũ. Thay vào đó, chúng ta sẽ:
1. Đổi tên table *user* trong database thành *system_user*.
2. Tạo model class *SystemUser*.
3. Tạo CRUD cho SystemUser (dùng để quản lý SystemUser).

Trong qúa trình implement class *SystemUser*, chúng ta sẽ có cơ hội ôn lại vài khái niệm đã học
1. Config một component.
2. Implement interface.
3. Getter và setter.

### Đổi tên table *user* thành *system_user*

Tạo file migration
```shell
php yii migrate/create rename_table_user_to_system_user
```

<details>
  <summary>Nội dung file migration</summary>

  ```php
    class m201011_083305_rename_table_user_to_system_user extends Migration
    {
        public function safeUp()
        {
            $this->renameTable('user', 'system_user');
        }

        public function safeDown()
        {
            $this->renameTable('system_user', 'user');
        }
    }
  ```
</details>

Run migration
```shell
php yii migrate
```

### Tạo CRUD cho SystemUser