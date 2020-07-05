# Using git

## Khái niệm về git

![git introduction](material/git.png)
* Lưu version (để có thể tìm lại phiên bản cũ, xem sự khác biệt của mỗi *commit*)
* Working directory: Thư mục tài liệu chúng ta đang làm việc trên máy tính.
* Repository (local): Nơi lưu trữ từng version trên máy tính mỗi khi commit.
* Repository (server): Nơi lưu trữ trên server, do mọi người đẩy từ repository (local) lên.

Ở đây, chúng ta chỉ giới thiệu vài tính năng cơ bản của git (dùng UI).

## Các lệnh cơ bản

### Download dự án từ repository về máy local (clone)

1. Get clone URL
    <details>
      <summary>Get URL on github</summary>

    ![clone url](material/cloneUrl.png)
    </details>

2. Run clone command
    ```shell
    git clone https://github.com/umbalaconmeogia/training-development-skill-for-brse-2.git
    ```
    <details>
      <summary>Clone result</summary>

      ![clone url](material/cloneSample.png)
    </details>

### Xác nhận code đã sửa đổi cần được commit (diff)

<details>
  <summary>Diff</summary>

  ![git diff](material/sourcetreeDiff.png)
</details>
<details>
  <summary>Stage</summary>

  ![git add](material/sourcetreeStage.png)
</details>
<details>
  <summary>Stage again</summary>

  ![git stage again](material/sourcetreeStageAgain.png)
</details>

### Commit code (commit)

### Đẩy lên repository (push)

### Kéo về (pull)

<hr />
Sau này sẽ học dần dần

### Phát hiện code được update (fetch)
Tham khảo trên [viblo](https://viblo.asia/p/nhung-dieu-khong-phai-ai-cung-noi-cho-ban-ve-git-part-1-1VgZvwkYlAw)

### Merge code (merge)

## Branch

### Create branch

### Checkout

## Release

### Create pull request

### Merge branch

## Tài liệu tham khảo

Lưu trữ ở đây để nghiên cứu dần dần, chứ không có nghĩa là tài liệu tôi đã chọn lọc.
* https://backlog.com/git-tutorial/vn/reference/
* https://viblo.asia/p/nhung-dieu-khong-phai-ai-cung-noi-cho-ban-ve-git-part-2-GrLZDXrBZk0