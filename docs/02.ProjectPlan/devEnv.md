# Prepare dev environtment

## Run docker environtment

Về docker, các bạn tự tìm hiểu.

Chúng ta đã cài đặt docker trên máy host.
Giờ chúng ta chỉ cần biết cách chạy docker để có môi trường chạy dự án.

Mở shell tại thư mục app, chạy lệnh
```shell
docker-compose up -d
```

Đợi một chốc để docker download `image` `yiisoftware/yii2-php:7.1-apache`, tạo `container` `app_vocabulary_php_1` và khởi động nó.

Sau đó, chúng ta chỉ cần access vào URL http://localhost:18010

Tất cả những điều này được thực hiện do docker làm việc theo thiết lập trong [docker-compose.yml](../../src/app/docker-compose.yml)
```xml
version: '2'
services:
  vocabulary_php:
    image: yiisoftware/yii2-php:7.1-apache
    volumes:
      - ~/.composer-docker/cache:/root/.composer/cache:delegated
      - ./:/app:delegated
    ports:
      - '18010:80'
```

Khai báo này khiến docker tạo ra một kiến trúc như sau:

![docker](material/ProjectPlan.png)

Reference: https://www.yiiframework.com/doc/guide/2.0/en/tutorial-docker

Ban đầu, chương trình sẽ bị báo lỗi do ta không set `cookieValidationKey`. Mở file `app/config/web.php` và set một giá trị bất kỳ cho nó.

Lúc này chương trình sẽ chạy, và cái ta nhìn thấy đầu tiên là

![first screen](material/firstScreen.png)

## Hãy thử nghịch một chút với yii2 application

### Màn hình responsive

* Thu nhỏ kích thước web browser, nó sẽ chuyển sang chế độ cho smartphone.
* Dùng web browser debugger (bấm phím F12), rồi chọn chế độ màn hình smartphone.
![responsive screen](material/responsiveScreen.png)

### Đổi tên application

Tên mặc định là `My Application`
* Đổi tên trong `config/web.php`
* Đổi text trong footer.

### Thay đổi menu trong file `app/views/layout/main.php`

### Đổi nội dung trang top trong `app/views/site/index.php`