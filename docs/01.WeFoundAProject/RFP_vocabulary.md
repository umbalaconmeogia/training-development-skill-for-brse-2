# Request for Proposal

## Table of contents
1. [Tên dự án mời thầu](#projectName)
2. [Tổng quan về công việc](#taskOverview)
    1. [Mục đích](#purpose)
    2. [Nghiệp vụ quản lý từ vựng cho dự án](#businessOverview)
    3. [Phạm vi phát triển hệ thống](#developmentScope)
    4. [Schedule](#schedule)
3. [Về tổ chức xây dựng hệ thống](#taskOrgnization)
    1. [Phương châm](#policy)
    2. [Đề xuất lịch phát triển](#proposeSchedule)
    3. [Đề xuất tổ chức của đội phát triển](#proposeOrganization)
    4. [Về việc thay đổi người chịu trách nhiệm](#changePIC)
    5. [Về việc trả lời câu hỏi từ HT](#inquiryFromHT)
    6. [Quy thuộc trách nhiệm](#responsibility)
    7. [Về quyền sở hữu và quyền tác giả](#ownershipAndCopyright)
    8. [Nghĩa vụ bảo mật](#confidentiality)
    9. [Tuân thủ luật pháp](#compliance)
    10. [Thông tin liên hệ](#inquiryCounter)
4. Quy định về nội dung công việc và sản phẩm
    1. Nội dung công việc
    2. Sản phẩm
5. Yêu cầu về hệ thống
    1. Yêu cầu tính năng
    2. Yêu cầu màn hình
    3. Yêu cầu về report
    4. Yêu cầu về data
    5. Yêu cầu về khả năng mở rộng
6. [Yêu cầu về bảo mật](#securityRequirement)
    1. Chính sách bảo mật
    2. QUản lý bảo mật
7. Yêu cầu về network
8. Môi trường vận hành
    1. Nơi đặt hệ thống
    2. Yêu cầu về môi trường server
    3. Yêu cầu về môi trường của người dùng
9. [Data migration](#migrationRequirement)
10. [Bảo trì và vận hành](#maintenanceRequirement)
    1. Đội ngũ vận hành
    2. Bảo trì định kỳ
    3. Giải đáp thắc mắc
    4. Giám sát hệ thống
    5. Đối ứng trouble
    6. Quản lý server/network
11. Các điều kiện khác
    1. Xuất data

## 1. Tên dự án mời thầu <a name="projectName"></a>

Xây dựng và vận hành hệ thống quản lý từ vựng cho các dự án outsourceing.

## 2. Tổng quan về công việc <a name="taskOverview"></a>

### 2.1 Mục đích <a name="purpose"></a>

Công ty HyTech (gọi tắt là HT) là công ty chuyên làm outsourcing trong lĩnh vực phát triển phần mềm cho các khách hàng nước ngoài. Các khách hàng của công ty nằm ở nhiều nơi trên thế giới, sử dụng nhiều ngôn ngữ khác nhau như tiếng Anh, Nhật...

Các tài liệu nhận từ phía khách hàng thường là tiếng nước ngoài, trong đó có nhiều từ chuyên môn có ý nghĩa đặc biệt khác với nghĩa thông thường, mà ngay cả người nước sở tại, nếu không được giải thích cũng sẽ không hiểu chính xác. Điều này sẽ gây khó khăn cho đội ngũ BrSE và Comtor trong việc hiểu và dịch đúng nội dung tài liệu dự án.

Để giải quyết vấn đề này, các dự án thường lập danh sách từ vựng trong đó giải thích nghĩa của từ chuyên môn. Danh sách này thường được lưu trong tài liệu dự án, dưới dạng file Word hoặc Excel.

Tuy nhiên quản lý từ vựng theo file khiến việc tham khảo thông tin từ vựng không được tiện lợi, không phản ánh kịp thời khi danh sách có sự cập nhật (mất tính realtime). Việc quản lý danh sách ở nhiều nơi, nhiều hình dạng cũng khiến cho các dự án không dược kế thừa và chia sẻ những kiến thức chung (ví dụ, các dự án trong cùng một ngành sẽ chia sẻ chung nhiều thuật ngữ chuyên môn).

"Hệ thống quản lý từ vựng cho các dự án outsourcing" (gọi tắt là VocabularySystem) này ra đời để giúp cho việc lưu trữ, truy xuất và chia sẻ các từ vựng chuyên môn trong các dự án trong công ty được hiệu quả hơn.

### 2.2 Nghiệp vụ quản lý từ vựng cho dự án <a name="businessOverview"></a>

Trong quá trình làm dự án, đội dự án (bao gồm khách hàng và bên phát triển) đưa ra danh sách các thuật ngữ chuyên môn bằng tiếng nước ngoài (có kèm giải thích bằng chính ngoại ngữ đó).
BrSE hoặc Comtor sẽ dịch thuật ngữ và giải thích này sang tiếng Việt.
Ngoài ra, khi có các từ ngữ nằm ngoài danh sách thuật ngữ trên, nhưng BrSE hoặc Comtor thấy nó cũng là từ ngữ đáng chú ý, thì cũng có thể đăng ký vào danh sách thuật ngữ (cả phần ngoại ngữ và phần được dịch sang tiếng Việt). Danh sách này lưu hành nội bộ bên phát triển, được phân biệt với danh sách thuật ngữ do khách hàng đưa ra.
Tất cả thành viên dự án có thể tham khảo danh sách thuật ngữ.

### 2.3. Phạm vi phát triển hệ thống <a name="developmentScope"></a>

Toàn bộ nghiệp vụ được miêu tả ở trên thuộc phạm vi được hệ thống hóa.
Ngoài ra, cần lưu ý là các dự án thuộc cùng một lĩnh vực giống nhau, thì có thể có tập từ vựng giống nhau, do đó nên có biện pháp để chia sẻ nguồn từ vựng giữa các dự án, để đỡ công phải nhập dữ liệu.

### 2.4. Schedule <a name="schedule"></a>

Hệ thống được phát triển và vận hành theo lịch như sau:
1. Thiết kế hệ thống: 2020/07/05 ~ 2020/07/18.
2. Phát triển: 2020/07/19 ~ 2020/07/18.
3. Test: 2020/08/03 ~ 2020/08/15.
4. Release: 2020/08/16 ~ 2020/07/29.
5. Bảo trì và vận hành: 2020/09/01 ~ 2021/08/30.

![RFP_Schedule](material/RFP_Schedule.png)

## 3. Về tổ chức xây dựng hệ thống <a name="taskOrgnization"></a>

### 3.1. Phương châm <a name="policy"></a>

việc xây dựng và đưa hệ thống vào vận hành, do bên nhận thầu lãnh toàn bộ trách nhiệm thực hiện.

### Đề xuất lịch phát triển <a name="proposeSchedule"></a>

1 tuần sau khi trúng thầu, bên nhận thầu phải đưa ra lịch phát triển hệ thống, và được quản lý của HT chấp nhận.

### Báo cáo tổ chức của đội phát triển <a name="proposeOrganization"></a>

1 tuần sau khi trúng thầu, bên nhận thầu phải đưa ra tổ chức của team phát triển, trong đó ghi rõ tên của những người chịu trách nhiệm chính.

### Về việc thay đổi người chịu trách nhiệm <a name="changePIC"></a>

Trong những trường hợp sau đây, nếu HT yêu cầu đổi người chịu trách nhiệm dự án, đội phát triển phải đưa ra người thay thế trong vòng 1 tuần khi có yêu cầu (và người thay thể phải được chấp thuận bởi HT).
1. Lịch phát triển bị chậm tiến độ 1 tuần trở lên, và sau đó 1 tuần không thể khắc phục (trừ trường hợp bất khả kháng như tai nạn hay yếu tố bên ngoài).
2. HT phát hiện vấn đề, yêu cầu khắc phục nhưng không được xử lý thỏa đáng.

### Về việc trả lời câu hỏi từ HT <a name="inquiryFromHT"></a>

Đội phát triển phải trả lời những câu hỏi do người đại diện bên HT đưa ra.

### Quy thuộc trách nhiệm <a name="responsibility"></a>

Bên trúng thầu là người chịu mọi trách nhiệm cuối cùng bất kể người đứng ra phát triển hệ thống là ai.

### Về quyền sở hữu và quyền tác giả <a name="ownershipAndCopyright"></a>

Khi phát triển hệ thống, cần chú ý các điểm sau

1. Quyền sở hữu
    Nếu sử dụng những sản phẩm có quyền sở hữu trí tuệ thuộc bên thứ 3, thì bên trúng thầu chịu mọi trách nhiệm đàm phán liên quan.
2. Quyền tác giả
    1. HT nắm quyền tác giả các bản thiết kế và code của hệ thống.
    2. Nếu trong hệ thống có sử dụng những phần do người khác nắm quyền tác giả, bên trúng thầu có trách nhiệm đàm phán và trả các chi phí liên quan. Trong trường hợp này, bên trúng thầu phải báo trước thông tin và được sự chấp thuận của HT.

### Nghĩa vụ bảo mật <a name="confidentiality"></a>

Bên trúng thầu phải bảo mật mọi thông tin thu được trong quá trình làm dự án, không được để lộ với bên thứ 3.

### Tuân thủ luật pháp <a name="compliance"></a>

Bên trúng thầu phải tuân thủ mọi pháp luật liên quan đến nhận thầu dự án.

### Thông tin liên hệ <a name="inquiryCounter"></a>

Mọi hỏi đáp liên quan đến việc đấu thầu, liên hệ Phòng mua bán công ty HT.

## Quy định về nội dung công việc và sản phẩm

### Nội dung công việc

Nội dung công việc của gói thầu như mô tả dưới đây

1. Quản lý dự án
    Lập Project Plan, và quản lý việc thực hiện theo Project Plan.
    Để đảm bảo tiến độ và chất lượng của dự án, cần có tài liệu định nghĩa rõ ràng mục tiêu của từng phase và thực hiện theo các mục tiêu đó.
2.  Thiết kế và phát triển
    * Cần làm Requirement Definition xác định yêu cầu của hệ thống.
    * Dựa trên RD, cần làm Basic Design định nghĩa các tính năng và phương thức thực hiện.
    * Dựa trên BD, cần làm Detail Design, làm cơ sở cho việc phát triển và unit test.
3. Test
    * Đội phát triển cần thực hiện Intergration Testing, System Testing dể đảm bảo tính năng chạy đúng.
    * Cần hỗ trợ khi HT thực hiện User Acceptance Testing.
4. Release
    * User training: Cần thực hiện training cho user và quản lý.
    * Data migration: Trước khi đưa hệ thống vào vận hành, cần nhập danh sách thuật ngữ của các dự án có sẵn.
5. Vận hành và bảo trì
    * Cần thực hiện việc vận hành bảo trì để đảm bảo hệ thống hoạt động ổn định.
    * Báo cáo tình hình hoạt động của hệ thống, tình hình sử dụng của user theo định kỳ hàng tháng.

### Sản phẩm

Hiện tại, dự kiến sản phẩm bàn giao gồm có những thành phần dưới đây.
Sau khi quyết định công ty trúng thầu, cần bàn bạc kỹ hơn về danh sách sản phẩm, thời hạn bàn giao, hình thức bàn giao sản phầm...

TBD

## Yêu cầu hệ thống

### Yêu cầu tính năng

### Yêu cầu màn hình

### Yêu cầu về report

### Yêu cầu về data

### Yêu cầu về khả năng mở rộng

## 6. Yêu cầu về bảo mật <a name="securityRequirement"></a>

### Chính sách bảo mật

Cần thực hiện các biện pháp bảo mật để thông tin tích trữ trong hệ thống không bị lọt ra bên ngoài. Ngoài ra, hệ thống cần áp dụng SSL để đảm bảo an toàn trong việc truyền thông tin.

### QUản lý bảo mật

Để đảm bảo duy trì security, hệ thống cần được update các security patch định kỳ.
* Cần update các security patch dành cho OS, network firmware.
* Cần thiết lập firewall để ngăn chặn xâm nhập.
* DB chỉ được phép access từ local server. Có các biện pháp phòng chống virus, và thông báo cho các biên liên quan trong trường hợp bị nhiễm virus.

## Yêu cầu về network

* Cần sử dụng đường truyền đảm bảo tốc độ từ 2Mbps trở lên.

## Môi trường vận hành

Yêu cầu về server và môi trường network như sau.

### Nơi đặt hệ thống

Hệ thống được đặt ở data center bên ngoài công ty HT, cần được thiết lập các biện pháp bảo đảm an toàn security. Ngoài ra có các biện pháp đảm bảo hệ thống vẫn hoạt động trong trường hợp xảy ra động đất, hỏa hoạn hay các tai nạn khác.

### Yêu cầu về môi trường server

Server cần có cấu hình đảm bảo hoạt động ổn định theo yêu cầu tính năng đề ra.

### Yêu cầu về môi trường của người dùng

Hệ thống bị giới hạn truy cập từ các IP address của các văn phòng của công ty HT.

Hệ thống hoạt động trên môi trường web như sau:
* Browser: Chrome, Safari.
* Device: PC và smartphone.

## Data migration <a name="migrationRequirement"></a>

Trước khi đưa hệ thống vào vận hành, cần import danh sách thuật ngữ của các dự án đang có dưới định dạng file Excel. Có khoảng 20 dự án, mỗi dự án có khoảng 50 thuật ngữ.

## Bảo trì và vận hành <a name="maintenanceRequirement"></a>

Hệ thống cần đảm bảo hoạt động từ 6h tới 17:30 (giờ Việt Nam) các ngày trong tuần.
Bên vận hành, bảo trì cần báo cáo các thông tin như sau:

### Đội ngũ vận hành

1. Cần lập danh sách thành viên trong đội đối ứng khi có sự cố xảy ra, được HT chấp thuận.
2. Cần có thông tin chi tiết về tên của người chịu trách nhiệm và key member, thông tin về kinh nghiệm của PIC.
3. Người chịu trách nhiệm phải nắm rõ nghiệp vụ và máy móc của hệ thống này, có kinh nghiệm phát triển hệ thống từ 2 năm trở lên.
4. Khi có thay đổi người chịu trách nhiệm hoặc key member, phải báo cáo trước 1 tháng và được sự chấp thuận của HT.
5. Người chịu trách nhiệm và key member phải giao tiếp được bằng tiếng Nhật hoặc Anh.
6. Khi hệ thống software, firmware có vấn đề nghiêm trọng về security, phải đối ứng như là một phần công việc của bảo trì.

### Bảo trì định kỳ

1. Việc bảo trì định kỳ server, network phải tiến hành vào ngày nghỉ.
2. Phải giảm thiểu ảnh hưởng tới công việc của user ở mức thấp nhất khi tiến hành bảo trì định kỳ server, network.
3. 1 năm phải tiến hành update security patch cho software, firmware 2 lần trở lên.

### Giải đáp thắc mắc

Cần giải đáp mọi thắc mắc liên quan đến vận hành, bảo trì từ người phụ trách của HT.

### Giám sát hệ thống

Cần thực hiện các biện pháp giám sát server, network cần thiết.
Khi có vấn đề xảy ra, cần liên lạc báo cáo tình hình cho người phụ trách của HT trong khi tiến hành đối ứng.

### Đối ứng trouble

* Khi xảy ra trouble, cần báo cáo tình hình thường xuyên trong quá trình đối ứng vấn đề. Sau khi giải quyết xong vấn đề, cần có báo cáo bằng văn bản.
* Báo cáo bằng văn bản phải ghi rõ việc điều tra nguyên nhân, phương pháp xử lý, và cần được chấp nhận của người phụ trách của HT.

### Quản lý server/network

1. Quản lý sự cố
    1. Cần phân tích các event được monitoring, từ đó tìm ra các sự cố có khả năng phát sinh, báo cáo/bàn bạc với người phụ trách của HT về các biện pháp xử lý và thực hiện chúng.
    2. Khi có vấn đề xảy ra, có thể thực hiện việc phục hồi hệ thống từ xa.
2. Quản lý thời gian
    Thời gian trên server, network, cũng như lịch vận hành của hệ thống được định nghĩa theo múi giờ Việt Nam.
3. Backup
    1. Cần có backup để có thể phục hồi hệ thống khi có sự cố.
    2. Việc backup phải đảm bảo không làm ngừng hoạt động của hệ thống.
    3. Cần có lịch cho việc backup.
    4. Nếu backup thất bại, cần điều tra nguyên nhân và báo cáo cho HT.
    5. Cường độ backup data.
        * Full backup mỗi tuần 1 lần. Hàng ngày chỉ cần backup phần phát sinh mới.
        * Bản backup được lưu trong 3 tháng.
4. Backup access log
    1. Backup access log theo từng ngày, lưu trên server.
    2. Access log được lưu tối thiểu 1 tháng trên server, 1 năm phải được backup sang media khác tối thiểu 1 lần, và lưu trữ trong 3 năm.
    3. Access log được lưu từ lúc bắt đầu vận hành hệ thống tới khi chấm dứt hợp đồng vận hành.
    4. Kết quả phân tích log của server cần được xuất ra dưới dạng bảng biểu (Excel hoặc CSV).
5. Restore
    1. Cần có biện pháp phục hồi hệ thống dễ dàng từ file backup bất kỳ.
    2. Khi nhận được yêu cầu phục hổi hệ thống từ backup, cần hoàn thành trong vòng 1 ngày (tới 18h ngày hôm sau). Trong trường hợp việc phục hồi hệ thống mất thời gian (ví dụ khôi phục phần cứng) thì cần báo cáo cho người phụ trách bên HT và được sự chấp thuận.

## Các điều kiện khác

### Xuất data

Khi có yêu cầu từ HT về việc xuất data (ví dụ để chuyển sang phiên bản mới), cần phải xuất toàn bộ data ở dạng CSV và việc này không tính thêm chi phí. Cần phải kèm theo giải thích cho các hạng mục data được xuất ra.