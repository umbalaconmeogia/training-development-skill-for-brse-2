# Prepare dev environtment

## Run docker environtment

Về docker, các bạn tự tìm hiểu.
Chúng ta đã cài đặt docker trên máy host. Giờ chúng ta chỉ cần biết cách chạy docker để có môi trường chạy dự án.

Mở shell tại thư mục app, chạy lệnh
```shell
docker-compose up -d
```

Đợi một chốc để docker download `image` `yiisoftware/yii2-php:7.1-apache`, tạo `container` `app_vocabulary_php_1` và khởi động nó.
Sau đó, chúng ta chỉ cần access vào URL `http://localhost:18010`.
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