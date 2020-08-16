# Database design

## Tầm quan trọng của tài liệu input

* Do không có tài liệu RD chuẩn, nên đã gặp khó khăn khi thiết kế DB.
* Không có căn cứ để tạo tables, relations...
* Không có căn cứ để review/check.

## Một vài quan điểm về thiết kế DB

* Data key
  * Luôn dùng field *id* làm primary key.
  * Luôn là integer với RDBMS.
* Luôn có data status (active or deleted), create/update people, create/update datetime.