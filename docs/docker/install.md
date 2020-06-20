# Install docker

## Trên Windows

Xem [ở đây](https://jobs.hybrid-technologies.vn/blog/huong-dan-su-dung-docker-co-ban/#II_Cai_dat)

## Trên Mac

*TBD*

## Trên Linux

* Với CentOS
  ```shell
  sudo yum install -y yum-utils
  sudo yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo
  sudo yum install docker-ce docker-ce-cli containerd.io
  yum list --installed | grep docker
  sudo systemctl enable docker
  sudo chkconfig docker on
  sudo usermod -aG docker $USER
  ```
  Test
  ```shell
  sudo systemctl restart docker.service
  sudo docker run hello-world
  ```