+++
title = "Lab 2. Tải và cài đặt SQL Server trên Docker	"
date = "2020-11-05"
author = "doanhmaple"
authorTwitter = "" #do not include @
cover = ""
tags = ["sql-server", "dbms"]
keywords = ["", ""]
description = ""
showFullContent = false
+++

### Tải và cài đặt SQL Server trên Docker.

- Đầu tiên ta phải tạo volume để chứa ánh xạ
```cmd
docker volume create sqlserver
```

- Tiếp theo tạo/chạy container với lệnh sau:
```cmd
docker run -e 'ACCEPT_EULA=Y' --name sqlserver -e 'SA_PASSWORD=Password789' -p 1433:1433 -v vmssql:/var/opt/mssql -d mcr.microsoft.com/mssql/server:2019-latest
```

- Để sử dụng mysql trên terminal
```cmd
docker exec -it sqlserver bash
```

- Thực hiện kết nối SQL Server
```cmd
/opt/mssql-tools/bin/sqlcmd -S localhost -U SA -P 'Password789'
```

- {{< figure src="/img/dbms/dbms-02/Lab02_1.png" title="lab2_1" >}}

- Sử dụng Azure Data Studio để quản lý SQL Server trên docker dễ dàng
- Chọn new Connection, tiếp tục điền các thông tin cần thiếtthiết
- {{< figure src="/img/heqtcsdl/lab4/lab2_2.png" title="lab2_2" >}}

- 'SA_PASSWORD=Password789' => username: SA, password=Password789
- {{< figure src="/img/heqtcsdl/lab4/lab2_3.png" title="lab2_3" >}}