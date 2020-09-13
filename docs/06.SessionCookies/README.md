# Login

Nội dung của bài hôm nay
* Học về cookies và session
* Tính năng login

Tài liệu tham khảo: https://www.yiiframework.com/doc/guide/2.0/en/runtime-sessions-cookies

## Session

Lưu thông tin trên server.

Web browser không thể access vào thông tin session.

Chỉ có chương trình PHP chạy trên server mới access (đọc) được vào session.

Demo: đọc và ghi session bằng chương trình trên server sử dụng `Yii::$app->session`.

## Cookies

Lưu thông tin trên browser.

Web browser có thể access vào cookies qua javascript.

Chương trình trên server cũng có thể access vào cookies.

Vài nguyên tắc:
* Không lưu nhiều thông tin trên cookies (giới hạn dung lượng, hoặc do security).
* Về cơ bản thì các web site khác domain không access được cookies của nhau.

Demo: Đọc và ghi session bằng chương trình trên server.
* Sử dụng $_COOKIES để đọc (cũng có thể dùng [Yii::$app->request->cookies](https://www.yiiframework.com/doc/guide/2.0/en/runtime-sessions-cookies#reading-cookies))
* Sử dụng [Yii::$app->response->cookies](https://www.yiiframework.com/doc/guide/2.0/en/runtime-sessions-cookies#sending-cookies) để lưu cookies.
* Đọc cookies trên browser.
* Ghi cookies trên browser.

## Sử dụng kết hợp cookies và session

HTTP là stateless protocol. Tức là mỗi lần access vào web server là một access độc lập, không có sự liên kết giữa các lần access.

Để duy trì sự liên kết (chia sẻ data giữa các lần access), chúng ta lưu thông tin đó vào session. Chương trình server sẽ đọc và ghi session này.

Để kết nối giữa các lần access, ta lưu session ID vào trong cookie. Nhờ có session ID lưu trong cookies mà ta liên kết được các lần access với nhau.

Một trong những ứng dụng quan trọng nhất của việc kết hợp này là tính năng login. Chúng ta sẽ nói về login vào bài sau (vì muốn giải thích cơ chế phức tạp của login nên cần nhiều thời gian).

![Login](https://techbriefers.com/wp-content/uploads/2019/10/cookie-and-session-management-process-in-codeigniter.jpg)

Thông tin linh tinh:
* PHP sử dụng key PHPSSID để lưu session ID trong cookies.
* Ngày xưa, các điện thoại feature phone của docomo không support cookies. Người ta phải dùng mánh là truyền tham số PHPSSID (hoặc với ngôn ngữ/framework khác thì là key khác) vào URL GET parameter.