# Hiểu về requirement definition

# Overview

Requirement defition là tài liệu về những thứ cần làm, đứng từ góc nhìn của khách hàng (user).

Tài liệu này do đội phát triển viết ra, bằng cách đi nói chuyện với những người sẽ là người dùng hệ thống (PIC các bộ phận nghiệp vụ của khách hàng), hoặc ít nhất, là người nắm trách nhiệm định nghĩa yêu cầu người dùng (PIC phụ trách dự án phía khách hàng).

Chú ý: tài liệu này phải đứng trên cách nhìn của user, nhìn theo quan điểm mô tả nghiệp vụ, tránh cách nhìn của kỹ thuật/hệ thống.

Tài liệu này cần mô tả được
* Flow nghiệp vụ.
* Các tính năng nghiệp vụ mà hệ thống cần thực hiện (scope của hệ thống).
* Các loại thông tin chạy giữa luồng nghiệp vụ (bảng biểu, file Excel, định dạng các loại dữ liệu).
* Các đặc thù của từng xử lý nghiệp vụ (input là gì, output là gì).

Khi làm tài liệu RD, có thể dùng các UML diagram sau:
1. [Use cases diagram](../uml/UseCasesDiagram.md) (để mô tả cách người dùng sẽ sử dụng hệ thống (cho các tác vụ nào)).
2. Activity diagram (để mô tả flow nghiệp vụ, cũng như khoanh vùng scope hệ thống).