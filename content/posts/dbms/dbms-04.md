+++
title = "Lab 4. Tải và cài đặt MySQL trên Docker"
date = "2020-11-05"
author = "doanhmaple"
authorTwitter = "" #do not include @
cover = ""
tags = ["mysql", "dbms"]
keywords = ["", ""]
description = ""
categories = "Hệ quản trị Cơ Sở Dữ Liệu"
showFullContent = false
+++

---

### Tải và cài đặt MySQL trên Docker
- Tải image mysql
```
docker pull mysql
```

- Chạy docker container
```
docker run --name=mysqldb -e MYSQL_ROOT_PASSWORD=123456 -e MYSQL_DATABASE=quanlysinhvien -d --publish=3305:3306 mysql
```
- 
  - Hostname: 127.0.0.1
  - Username: root
  - Port: 3305
  - Password: 123456
  - Default Schema: quanlysinhvien

- Thử kết nối với MySQLWorkbench

---

- {{< figure src="/img/dbms/dbms-04/Lab04_1.png" title="Lab4_1" >}}
- {{< figure src="/img/dbms/dbms-04/Lab04_2.png" title="Lab4_2" >}}
- {{< figure src="/img/dbms/dbms-04/Lab04_3.png" title="Lab4_3" >}}