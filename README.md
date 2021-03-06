# Training development skill for BrSE

## Mục đích khóa học

Đây là khóa học để bổ sung kiến thức cơ bản về phát triển phần mềm cho Bridge System  Engineer, bao gồm 2 phần (được tiến hành đào tạo song song).
1. Quy trình xây dựng hệ thống phần mềm.
2. Kỹ năng lập trình.

## Mục tiêu

Sau 15 tuần học (mỗi tuần gồm 1 tiếng học online, và sau đó là tự học, làm bài tập), học viên có thể xây dựng một hệ thống có thể sử dụng trong thực tế (*Hệ thống từ điển cho các dự án outsourcing*)

Học viên sẽ được thực hành các kiến thức về
1. Quy trình phát triển
    1. Lên kế hoạch cho dự án.
    2. Thiết kế.
    3. Phát triển hệ thống.
    4. Test.
    5. Release.
    6. Update và release.
2. Kỹ năng lập trình
    1. Xây dựng môi trường phát triển.
    2. Quản lý source code.
    3. Sử dụng yii framework.
    4. Coding convention.
    5. Coding skill (OOP, i18n...)
    6. Performance and security.

## Cách làm việc

1. The lesson takes one hour everyday, after that you must learn by yourself.
2. Discuss with other member actively.
3. You must complete the tasks, no matter what you are busy or not take part in the lesson offline.

*Tôn chỉ hoạt động*
1. Chúng ta học được nhiều hơn từ thất bại chứ không phải từ thành công. Do đó đừng ngại khi bạn làm không đúng, hãy mạnh dạn chia sẻ vấn đề với mọi người.
2. Nội dung học tập không do người hướng dẫn thiết kế hoàn toàn, mà mong muốn bản thân học viên cũng tự tìm hiểu và cùng hoàn thiện nội dung.

## Chương trình học

| No. | Chủ đề | Dev process | SE skill | Code | Video |
|---|---|---|---|---|---|
| 0 | [Mở đầu](docs/00.Lesson.Introduction/README.md) | | [Prerequisites](docs/00.Prerequisites.se/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b00) |
| 1 | [Kiếm được dự án](docs/01.WeFoundAProject/README.md) | [Request for proposal](docs/01.WeFoundAProject/process.md) | [Using git](docs/01.WeFoundAProject/se.git.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b01) |
| 2 | [Start dự án](docs/02.ProjectPlan/README.md) | [Project plan](docs/02.ProjectPlan/kickoff.md) | [Prepare dev environment](docs/02.ProjectPlan/devEnv.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b02) |
| 3 | [Requirement definition](docs/03.RequirementDefinition/README.md) | [Requirement definition](docs/03.RequirementDefinition/process.rd.md) | [Kiến trúc MVC](docs/03.RequirementDefinition/se.mvc.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b03) |
| 3.2 | Working with forms | | [Working with forms](docs/03.RequirementDefinition/se.form.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b03.2) |
| 4 | [Basic design](docs/04.BasicDesign/README.md) | BD::Use cases, business flow |  |
| 5 | [Thiết kế database](docs/05.DatabaseDesign/README.md) | [BD::Database design](docs/05.DatabaseDesign/process.dbdesign.md) | [DB migration](docs/05.DatabaseDesign/se.dbmigration.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b05) |
| 5.1 | Tạo MVC cho table | | [Generating code with Gii](docs/05.1.Gii/se.gii.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b05.1) |
| 5.2 | ActiveRecord | | [Relation, searching](docs/05.2.AR/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b05.2) |
| 5.3 | ActiveRecord | | [Query performance](docs/05.3.QueryingData/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b05.3) |
| 6 | Session and Cookies | | [Session and Cookies](docs/06.SessionCookies/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b06) |
| 7 | Login | | [Login](docs/07.Login/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b07) | [Video](https://www.youtube.com/watch?v=V6m5XSS3e0M) |
| 7.1 | Implement login | | [Implement Login](docs/07.1.ImplementLogin/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b07.1) | [Video](https://www.youtube.com/watch?v=oyHtiGEO2gk) |
| 7.2 | Login with Google | | [Login with Google](docs/07.2.OAuth2/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b07.2) | [Video](https://www.youtube.com/watch?v=tworqlYcbZo) |
| 8 | Logging | | [Logging](docs/08.Logging/README.md) | [Code](https://github.com/umbalaconmeogia/training-development-skill-for-brse-2/tree/b08) |
| 9 | Function design | BD::Functional design | |
| 10 | Non-functional design | BD::Non-functional design | |
| 11 | Detail classes | DD:Design classes | |
| 12 | Process sequence | DD::Sequence | |
| 13 | Test | Test case, bug | Logging |
| 14 | Prepare for customer | User manual | Test server |
| 15 | UAT | UAT | Bug management |
| 16 | Prepare release | Release decision | Test report |
| 17 | Release plan | Release plan, release, confirm | Release steps |
| 18 | Update function | Contigency plan | Branch, pull request, merge, tag |

## External coding skill

* Console command
* I18n
* More about performance
* Module
* Testing
* Security
  * File should not managed on git.
  * XSS, CSRF
  * RBAC
  * Pen test

## External business knowledge

* Address in Japan
* Estimation https://www.tutorialspoint.com/estimation_techniques/index.htm