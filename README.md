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

| No. | Chủ đề | Dev process | SE skill |
|---|---|---|---|
| 0 | [Mở đầu](docs/00.Lesson.Introduction/README.md) | | [Prerequisites](docs/00.Prerequisites.se/README.md) |
| 1 | [Kiếm được dự án](docs/01.WeFoundAProject/README.md) | [Request for proposal](docs/01.WeFoundAProject/process.md) | [Using git](docs/01.WeFoundAProject/se.git.md) |
| 2 | [Start dự án](docs/02.ProjectPlan/README.md) | [Project plan](docs/02.ProjectPlan/kickoff.md) | [Prepare dev environment](docs/02.ProjectPlan/devEnv.md) |
| 3 | [Requirement definition](docs/03.RequirementDefinition/README.md) | [Requirement definition](docs/03.RequirementDefinition/process.rd.md) | [Kiến trúc MVC](docs/03.RequirementDefinition/se.mvc.md) |
| 3.2 | Working with forms | | [Working with forms](docs/03.RequirementDefinition/se.form.md) |
| 4 | [Basic design](docs/04.BasicDesign/README.md) | BD::Use cases, business flow |  |
| 5 | Thiết kế database | BD::Database design | DB migration |
| 6 | Function design | BD::Functional design | Generating code with Gii |
| 7 | Non-functional design | BD::Non-functional design | Active Record and validation |
| 8 | Detail classes | DD:Design classes | AR relation, searching and deleting |
| 9 | Process sequence | DD::Sequence | Login |
| 10 | Test | Test case, bug | Logging |
| 11 | Prepare for customer | User manual | Test server |
| 12 | UAT | UAT | Bug management |
| 13 | Prepare release | Release decision | Test report |
| 14 | Release plan | Release plan, release, confirm | Release steps |
| 15 | Update function | Contigency plan | Branch, pull request, merge, tag |

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