# Working with form

## Overview

Hôm nay chúng ta học về kiến trúc MVC trên yii2.

Chú ý là hôm nay chưa động gì đến database.

## Model-View-Controller pattern.

MVC là một software design pattern.
Ngoài MVC còn có nhiều loại pattern khác, ví dụ như [Model-view-viewmodel](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93viewmodel).

![mvc structure](material/mvc.png)
Source: [Wikipedia](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

Chúng ta cần tuân theo quy tắc sau:
1. Model là nơi xử lý các business logic. Mọi business logic cần được đưa vào các model class.
2. View là nơi hiển thị/xuất output.
  View hoàn toàn có thể chưa *view* logic (code).
  Có thể viết PHP code ở đây, miễn nó phục vụ cho việc hiển thị data chứ không phải là xử lý nghiệp vụ.
3. Controller làm nhiệm vụ xử lý đầu vào từ bên ngoài,  gọi các model và view liên quan. Không nhét xử lý nghiệp vụ vào controller (dễ mắc lỗi này).

MVC là concept, không phải là cách phân chia code.
Với yii2, thì model có thể bao gồm luôn tính năng truy xuất database.
Nhiều framework khác phân chia chi tiết hơn, ví dụ Spring framework chia thành các layer Controller -> Service -> Dao/Bean.

Application structure in yii2
![application structure](material/application-structure.png)

## Working with form in yii2.

Ở đây, chúng ta sẽ mổ xẻ tính năng login của yii2, để tìm hiểu cách hoạt động của Model-View-Controller.

* Controller: [controllers/SiteController](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/blob/master/src/app/controllers/SiteController.php#L72), action: actionLogin
* Model: [models/LoginForm](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/blob/master/src/app/models/LoginForm.php)
* View: [views/site/login](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/blob/master/src/app/views/site/login.php)

### Controller

Controller là nơi nhận thông tin đầu vào (input từ người dùng, hoặc trạng thái của hệ thống khi người dùng access vào action này - ví dụ như đã login hay chưa login).
Controller sẽ quyết định nó cần gọi xử lý nghiệp vụ nào, và sẽ gọi các model tương ứng.
Sau đó, controller sẽ quyết định output như thế nào (có thể là redirect tới một trang khác, hoặc hiển thị một file view nào đó).

### Model

Model về cơ bản sẽ gồm các thành phần sau:
1. Các attribute hay property (tạm hiểu là instance variable trong model class - thực ra nó còn hơn là instance variable)
2. Function rules(), định nghĩa các validation.
  Ngoài ra còn có các function behaviors.
3. Các function do developer viết thêm, để định nghĩa các xử lý logic bất kỳ.

## Validation and massive assign

Function [rules()](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/blob/master/src/app/models/LoginForm.php#L26) là nơi định nghĩa validation.
Nó mô tả các điều kiện attribute phải thỏa mãn.

Khi gọi tới model->validate() function, nó sẽ căn cứ vào rules() để check các điều kiện attribute phải thỏa mãn. Nếu không thỏa mãn, nó sẽ báo lỗi (trả về kết quả hàm validate() là false).

Thử một vài [core validate](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-core-validators)
* required
* email
* string ['username', 'string', 'length' => [4, 24]]

Ngoài các core validator, developer có thể đinh nghĩa thêm các vadidator khác.
Ví dụ như [LoginForm#validatePassword()](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/blob/master/src/app/models/LoginForm.php#L34)

Massive assign
Khi một attribute được xem là safe, thì nó có thể được gán bằng massige assign.
Chẳng hạn như dùng trong lệnh model->load()
