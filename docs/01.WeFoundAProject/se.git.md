# Using git

## Khái niệm về git

![git introduction](material/git.png)
* Lưu version (để có thể tìm lại phiên bản cũ, xem sự khác biệt của mỗi *commit*)
* Working directory: Thư mục tài liệu chúng ta đang làm việc trên máy tính.
* Repository (local): Nơi lưu trữ từng version trên máy tính mỗi khi commit.
* Repository (server): Nơi lưu trữ trên server, do mọi người đẩy từ repository (local) lên.

Buổi hôm nay, chỉ học khái niệm về các thao tác cơ bản (và dùng sourcetree UI)
* clone: Lần đầu tiên, kéo từ server về máy PC local.
* diff, stage: Đánh dấu các thay đổi sẽ được commit.
* commit: Lưu thay đổi vào repository (local).
* push: Đẩy thay đổi từ repository (local) lên repository (server).
* pull: Kéo thay đổi từ trên server về local.

## Các lệnh cơ bản

### Download dự án từ repository về máy local (clone)

1. Get clone URL
    <details>
      <summary>Get URL on github</summary>

    ![clone url](material/cloneUrl.png)
    </details>
2. Clone by sourcetree
    <details>
      <summary>Clone by sourcetree</summary>

      ![clone url](material/sourcetreeClone.png)
    </details>
3. Run clone command
    ```shell
    git clone https://github.com/umbalaconmeogia/training-development-skill-for-brse-2.git
    ```
    <details>
      <summary>Clone result</summary>

      ![clone url](material/cloneSample.png)
    </details>

### Đánh dấu các thay đổi sẽ được commit (diff, add)

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

<details>
  <summary>Commit</summary>

  ![git commit](material/sourcetreeCommit.png)
</details>
<details>
  <summary>After commit</summary>

  ![git commit history](material/sourcetreeCommitHistory.png)
</details>
<details>
  <summary>Chỉ commit trên local repository, trên server chưa thay đổi</summary>

  ![git commit history](material/gitCommitLocalNoServerChange.png)
</details>

### Đẩy lên repository (push)

<details>
  <summary>Push lên server</summary>

  ![git commit history](material/gitCommitPush.png)
</details>
<details>
  <summary>Trong history có đánh dấu đã đẩy lên server</summary>

  ![git commit history](material/gitCommitPushHistory.png)
</details>
<details>
  <summary>Trên server có sự thay đổi</summary>

  ![git commit history](material/gitCommitPushServerChanged.png)
</details>

### Kéo về (pull)

<details>
  <summary>Trên server có sự thay đổi</summary>

  ![git commit history](material/gitMakeChangeOnServer.png)
  Trên local không đổi.
  ![git commit history](material/gitMakeChangeOnServerNoChangeLocal.png)
</details>
<details>
  <summary>Pull from server</summary>

  ![git commit history](material/gitMakeChangeOnServerPull.png)
</details>
<details>
  <summary>Change on local after pull</summary>

  ![git commit history](material/gitMakeChangeOnServerAfterPull.png)
</details>


<hr />
Sau này sẽ học dần dần

### Phát hiện code được update (fetch)
Tham khảo trên [viblo](https://viblo.asia/p/nhung-dieu-khong-phai-ai-cung-noi-cho-ban-ve-git-part-1-1VgZvwkYlAw)

### Merge code (merge)

## Branch

### Khái niệm
![branch introduction](material/branches.png)
Có 2 loại branch:
1) master: là src code chính để release.
2) khác master: dùng cho các mục đích khác, VD như:
* up src code theo mục đích riêng, khác với master. VD: up lên branch "mac-docker", còn master là docker cho win.
* mỗi DEVs sau khi edit src code sẽ up lên branch riêng của mình. Cần merge branch nào vô master để release thì DEV đó sẽ click "Pull request".

### Lệnh Git
Để biết đang thao tác Git ở branch nào thì dùng lệnh:
```shell
    git branch
```
sẽ out ra KQ (VD dưới đây là đang ở branch "OptimizeSrcCode")
```shell
  * OptimizeSrcCode
  master
```

### Branch: master

#### Git push
Ban đầu khi "git init" rồi "git push" thì default sẽ up lên master (của remote repo).
Hoặc câu lệnh git đầy đủ là:
```shell
    git push -u origin master
```

#### Git pull
Đang thao tác ở branch khác master mà muốn pull src code của branch đó -> master thì gõ:
```shell
    git pull origin master
```

### Branch: khác master

#### *Create branch & checkout
Lệnh git vừa create vừa checkout 1 branch mới (VD: "OptimizeSrcCode") là:
```shell
    git checkout -b OptimizeSrcCode
```

#### *Git push
Lệnh git up src code từ local lên branch "OptimizeSrcCode" (của remote repo):
```shell
    git push --set-upstream origin OptimizeSrcCode
```

## Release

### Create pull request
![pull request](material/pullRequest.png)
Cần merge branch nào vô master để release thì DEV đó sẽ click "Pull request".
Sau đó cần admin Git approve "Pull request" đó. 

### Merge branch

## Tài liệu tham khảo

Lưu trữ ở đây để nghiên cứu dần dần, chứ không có nghĩa là tài liệu tôi đã chọn lọc.
* https://backlog.com/git-tutorial/vn/reference/
* https://viblo.asia/p/nhung-dieu-khong-phai-ai-cung-noi-cho-ban-ve-git-part-2-GrLZDXrBZk0
