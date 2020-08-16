# Database migration

## 1. Tại sao dùng migration

* Sử dụng PHP code để chạy lệnh SQL => không đòi hỏi phải biết sâu về SQL.
  Điều này rất quan trọng để giúp developer tạo môi trường phát triển trên máy local.
* Các developer có thể dễ dàng update môi trường khi có sự thay đổi schema.
* Tương thích với nhiều loại database (trong một giới hạn cho phép).

## 2. Access to docker bash

```shell
docker exec -it project_term_web bash
```

For Windows
```shell
winpty docker exec -it project_term_web bash
```

## 3. migrate/create

```shell
php yii migrate/create create_user_table
php yii migrate/create create_project_table
php yii migrate/create create_term_table
```

## 4. Log

* Xem log sql
* Config log
```php
'log' => [
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning', 'info', 'trace'],
            'logVars' => [],
            'except' => ['yii\db\*'],
        ],
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning', 'info', 'trace'],
            'logVars' => [],
            'categories' => ['yii\db\*'],
        ],
    ],
],
```

## 5. Connect to PostgreSQL from local

* Connect to localhost:5462

## 6. migrate/up

```shell
php yii migrate/up
```

## 7. migrate/down

```shell
php yii migrate/down
```
