# Login

Nội dung của bài hôm nay
* Học về cookies và session
* Tính năng login

Tài liệu tham khảo: https://www.yiiframework.com/doc/guide/2.0/en/runtime-sessions-cookies

## Session

Lưu thông tin trên server.

Web browser không thể access vào thông tin session.

## Cookies

Lưu thông tin trên browser.

Web browser có thể access vào cookies qua javascript.

Chương trình trên server cũng có thể access vào cookies.

Demo
* Đọc session bằng chương trình.
* Ghi session bằng chương trình.
* Đọc cookies trên browser.
* Ghi cookies trên browser.

## Sử dụng kết hợp cookies và session
HTTP là stateless protocol. Tức là mỗi lần access vào web server là một access độc lập, không có sự liên kết giữa các lần access.

Để duy trì sự liên kết (chia sẻ data giữa các lần access), chúng ta lưu thông tin đó vào session. Chương trình server sẽ đọc và ghi session này.

Để kết nối giữa các lần access, ta lưu session ID vào trong cookie. Nhờ có session ID lưu trong cookies mà ta liên kết được các lần access với nhau.

## Login