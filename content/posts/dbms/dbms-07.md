+++
title = "Lab 7. Sử dụng DDL định nghĩa dữ liệu cho đối tượng Sinh Viên"
date = "2020-11-07"
author = "doanhmaple"
authorTwitter = "" #do not include @
cover = ""
tags = ["", "dbms"]
keywords = ["", ""]
description = ""
categories = "Hệ quản trị Cơ Sở Dữ Liệu"
showFullContent = false
+++

---

### Định nghĩa dữ liệu cho đối tượng Sinh Viên trong SQL Server, My SQL và MongoDB.
- Ví dụ: đối tượng Sinh Viên gồm các thông tin sau: MSSV, Họ Tên, Năm Sinh, Điểm môn 1, Điểm môn 2, Điểm môn 3, Email, Điện thoại.

#### 1. SQLServer

```sql
create table SinhVien (
  MSSV char(8) primary key,
  Hoten nvarchar(30) not null,
  Namsinh int,
  DiemMon1 float,
  DiemMon2 float,
  DiemMon3 float,
  Email char(30),
  Dienthoai char(11)
)
```
- {{< figure src="/img/dbms/dbms-07/Lab07_1.png" title="lab7" >}}


{{< linebreak >}}
#### 2. MongoDB
- Ta chỉ có thể định nghĩa đối tượng Sinh viên cho mongodb thông qua schema của mongoose (thư viện npm trong nodejs)
```ts
import mongoose from 'mongoose';
const { Schema } = mongoose;

const SinhVienSchema = new Schema({
  MSSV: String,
  Hoten: String,
  Namsinh: Number,
  DiemMon1: Number,
  DiemMon2: Number,
  DiemMon3: Number,
  Email: String,
  Dienthoat: String
});
```

```js
use quanlysinhvien;
db.createCollection("SinhVien");
```
{{< linebreak >}}
#### 3. MySQL
```sql
create table SinhVien (
  MSSV char(8) primary key,
  Hoten varchar(30) not null,
  Namsinh int,
  DiemMon1 float,
  DiemMon2 float,
  DiemMon3 float,
  Email char(30),
  Dienthoai char(11)
)
```
- {{< figure src="/img/dbms/dbms-07/Lab07_2.png" title="lab7" >}}