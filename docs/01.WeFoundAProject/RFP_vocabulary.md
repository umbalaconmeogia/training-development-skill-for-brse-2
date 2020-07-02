# Request for Proposal

## Table of contents
1. [Tên dự án mời thầu](#projectName)
2. [Giới thiệu về nghiệp vụ](#businessOverview)
    1 Mục đích
    2 Nghiệp vụ quản lý từ vựng cho dự án
    3. Phạm vi phát triển hệ thống
    4. Schedule
3. Về tổ chức xây dựng hệ thống
    1. Phương châm
    2. Đề xuất lịch phát triển
    3. Báo cáo tổ chức của đội phát triển
    4. Về việc thay đổi người chịu trách nhiệm
    5. Về việc trả lời câu hỏi từ HT
    6. Quy thuộc trách nhiệm
    7. Về quyền sở hữu và quyền tác giả
    8. Bảo mật
    9. Tuân thủ luật pháp
    10. Thông tin liên hệ
4. Quy định về nội dung công việc và sản phẩm
    1. Nội dung công việc
    2. Sản phẩm
5. Yêu cầu về hệ thống
    1. Yêu cầu tính năng
    2. Yêu cầu màn hình
    3. Yêu cầu về report
    4. Yêu cầu về data
    5. Yêu cầu về khả năng mở rộng
6. Yêu cầu về bảo mật
    1. Chính sách bảo mật
    2. QUản lý bảo mật
7. Yêu cầu về network
8. Môi trường vận hành
    1. Nơi đặt hệ thống
    2. Yêu cầu về môi trường server
    3. Yêu cầu về môi trường của người dùng
9. Release
10. Bảo trì và vận hành
    1. Đội ngũ vận hành
    2. Bảo trì định kỳ
    3. Liên lạc
    4. Giám sát
    5. Đối ứng trouble
    6. Quản lý server/network
11. Các điều kiện khác
    1. Xuất data

## 1. Tên dự án mời thầu <a name"projectName"></a>

Xây dựng và vận hành hệ thống quản lý từ vựng cho các dự án outsourceing.

## 2. Giới thiệu về nghiệp vụ <a name="businessOverview"></a>

### 2.1 Mục đích

Công ty HyTech (gọi tắt là HT) là công ty chuyên làm outsourcing trong lĩnh vực phát triển phần mềm cho các khách hàng nước ngoài. Các khách hàng của công ty nằm ở nhiều nơi trên thế giới, sử dụng nhiều ngôn ngữ khác nhau như tiếng Anh, Nhật...

Các tài liệu nhận từ phía khách hàng thường là tiếng nước ngoài, trong đó có nhiều từ chuyên môn có ý nghĩa đặc biệt khác với nghĩa thông thường, mà ngay cả người nước sở tại, nếu không được giải thích cũng sẽ không hiểu chính xác. Điều này sẽ gây khó khăn cho đội ngũ BrSE và Comtor trong việc hiểu và dịch đúng nội dung tài liệu dự án.

Để giải quyết vấn đề này, các dự án thường lập danh sách từ vựng trong đó giải thích nghĩa của từ chuyên môn. Danh sách này thường được lưu trong tài liệu dự án, dưới dạng file Word hoặc Excel.

Tuy nhiên quản lý từ vựng theo file khiến việc tham khảo thông tin từ vựng không được tiện lợi, không phản ánh kịp thời khi danh sách có sự cập nhật (mất tính realtime). Việc quản lý danh sách ở nhiều nơi, nhiều hình dạng cũng khiến cho các dự án không dược kế thừa và chia sẻ những kiến thức chung (ví dụ, các dự án trong cùng một ngành sẽ chia sẻ chung nhiều thuật ngữ chuyên môn).

"Hệ thống quản lý từ vựng cho các dự án outsourcing" (gọi tắt là VocabularySystem) này ra đời để giúp cho việc lưu trữ, truy xuất và chia sẻ các từ vựng chuyên môn trong các dự án trong công ty được hiệu quả hơn.

### 2.2 Nghiệp vụ quản lý từ vựng cho dự án

Trong quá trình làm dự án, đội dự án (bao gồm khách hàng và bên phát triển) đưa ra danh sách các thuật ngữ chuyên môn bằng tiếng nước ngoài (có kèm giải thích bằng chính ngoại ngữ đó).
BrSE hoặc Comtor sẽ dịch thuật ngữ và giải thích này sang tiếng Việt.
Ngoài ra, khi có các từ ngữ nằm ngoài danh sách thuật ngữ trên, nhưng BrSE hoặc Comtor thấy nó cũng là từ ngữ đáng chú ý, thì cũng có thể đăng ký vào danh sách thuật ngữ (cả phần ngoại ngữ và phần được dịch sang tiếng Việt). Danh sách này lưu hành nội bộ bên phát triển, được phân biệt với danh sách thuật ngữ do khách hàng đưa ra.
Tất cả thành viên dự án có thể tham khảo danh sách thuật ngữ.

### 2.3. Phạm vi phát triển hệ thống

Toàn bộ nghiệp vụ được miêu tả ở trên thuộc phạm vi được hệ thống hóa.
Ngoài ra, cần lưu ý là các dự án thuộc cùng một lĩnh vực giống nhau, thì có thể có tập từ vựng giống nhau, do đó nên có biện pháp để chia sẻ nguồn từ vựng giữa các dự án, để đỡ công phải nhập dữ liệu.

### 2.4. Schedule

Hệ thống được phát triển và vận hành theo lịch như sau:
1. Thiết kế hệ thống: 2020/07/05 ~ 2020/07/18.
2. Phát triển: 2020/07/19 ~ 2020/07/18.
3. Test: 2020/08/03 ~ 2020/08/15.
4. Release: 2020/08/16 ~ 2020/07/29.
5. Bảo trì và vận hành: 2020/09/01 ~ 2021/08/30.

![RFP_Schedule](material/RFP_Schedule.png)

## 3. Về tổ chức xây dựng hệ thống

### 3.1. Phương châm

việc xây dựng và đưa hệ thống vào vận hành, do bên nhận thầu lãnh toàn bộ trách nhiệm thực hiện.

### Đề xuất lịch phát triển

1 tuần sau khi trúng thầu, bên nhận thầu phải đưa ra lịch phát triển hệ thống, và được quản lý của HT chấp nhận.

### Báo cáo tổ chức của đội phát triển

1 tuần sau khi trúng thầu, bên nhận thầu phải đưa ra tổ chức của team phát triển, trong đó ghi rõ tên của những người chịu trách nhiệm chính.

### Về việc thay đổi người chịu trách nhiệm

Trong những trường hợp sau đây, nếu HT yêu cầu đổi người chịu trách nhiệm dự án, đội phát triển phải đưa ra người thay thế trong vòng 1 tuần khi có yêu cầu (và người thay thể phải được chấp thuận bởi HT).
1. Lịch phát triển bị chậm tiến độ 1 tuần trở lên, và sau đó 1 tuần không thể khắc phục (trừ trường hợp bất khả kháng như tai nạn hay yếu tố bên ngoài).
2. HT phát hiện vấn đề, yêu cầu khắc phục nhưng không được xử lý thỏa đáng.

### Về việc trả lời câu hỏi từ HT

Đội phát triển phải trả lời những câu hỏi do người đại diện bên HT đưa ra.

### Quy thuộc trách nhiệm

Bên trúng thầu là người chịu mọi trách nhiệm cuối cùng bất kể người đứng ra phát triển hệ thống là ai.


### Về quyền sở hữu và quyền tác giả

Khi phát triển hệ thống, cần chú ý các điểm sau

1. Quyền sở hữu
    Nếu sử dụng những sản phẩm có quyền sở hữu trí tuệ thuộc bên thứ 3, thì bên trúng thầu chịu mọi trách nhiệm đàm phán liên quan.
2. Quyền tác giả
    1. HT nắm quyền tác giả các bản thiết kế và code của hệ thống.
    2. Nếu trong hệ thống có sử dụng những phần do người khác nắm quyền tác giả, bên trúng thầu có trách nhiệm đàm phán và trả các chi phí liên quan. Trong trường hợp này, bên trúng thầu phải báo trước thông tin và được sự chấp thuận của HT.

### Bảo mật

Bên trúng thầu phải bảo mật mọi thông tin thu được trong quá trình làm dự án, không được để lộ với bên thứ 3.

### Tuân thủ luật pháp

Bên trúng thầu phải tuân thủ mọi pháp luật liên quan đến nhận thầu dự án.

### Thông tin liên hệ

Mọi hỏi đáp liên quan đến việc đấu thầu, liên hệ Phòng mua bán công ty HT.

## Quy định về nội dung công việc và sản phẩm

### Nội dung công việc
### Sản phẩm

## Yêu cầu về hệ thống

### Yêu cầu tính năng

### Yêu cầu màn hình

### Yêu cầu về report

### Yêu cầu về data

### Yêu cầu về khả năng mở rộng

## Yêu cầu về bảo mật

### Chính sách bảo mật

### QUản lý bảo mật

## Yêu cầu về network

## Môi trường vận hành

### Nơi đặt hệ thống

### Yêu cầu về môi trường server

### Yêu cầu về môi trường của người dùng

## Release

## Bảo trì và vận hành

### Đội ngũ vận hành

### Bảo trì định kỳ

### Liên lạc

### Giám sát

### Đối ứng trouble

### Quản lý server/network

## Các điều kiện khác

### Xuất data