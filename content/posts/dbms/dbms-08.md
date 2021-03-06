+++
title = "Lab 8. Tạo 10 mẫu tin (nhập dữ liệu) cho 10 sinh viên. Sau đó thực hiện các thao tác CRUD (Create, Read, Update, Delete) trên dữ liệu mẫu"
date = "2020-11-08"
author = "doanhmaple"
authorTwitter = "" #do not include @
cover = ""
tags = ["crud", "dbms"]
keywords = ["", ""]
description = ""
categories = "Hệ quản trị Cơ Sở Dữ Liệu"
showFullContent = false
+++

---

### 1. SQL Server

- C (Create): Tạo 10 mẫu tin cho 10 sinh viên:

```sql
insert into SinhVien values ('1710289', N'Phan Quốc Trung', 1999, 8, 9, 9, '1710289@dlu.edu.vn', '0349981228');
insert into SinhVien values ('1710233', N'Đặng Trần Hữu Nhân', 1999, 5, 5, 5, '1710233@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710196', N'Nguyễn Đăng Khoa', 1999, 7, 9, 9, '1710196@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1714234', N'Hứa Đình Doanh', 1999, 7, 9, 9, '1714234@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710264', N'Huỳnh Lê Hữu Thành', 1999, 8, 9, 9, '1710264@dlu.edu.vn', '0345547878');

insert into SinhVien values ('1710144', N'Nguyễn Đức Đề', 1999, 8, 9, 9, '1710144@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710156', N'Phạm Bá Xuân Duy', 1999, 8, 9, 9, '1710156@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710204', N'Bùi Đức Hoàng Lâm', 1999, 8, 9, 9, '1710204@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710303', N'Phạm Hoàng Việt', 1999, 8, 9, 9, '1710303@dlu.edu.vn', '0345547878');
insert into SinhVien values ('1710285', N'Lê Anh Trí', 1999, 8, 9, 9, '1710285@dlu.edu.vn', '0345547878');
```

{{< linebreak >}}

- R (Read): Đọc dữ liệu sinh viên
```sql
select * from dbo.SinhVien
```
- {{< figure src="/img/dbms/dbms-08/Lab08_1.png" title="lab8" >}}
{{< linebreak >}}
- U (Update): Cập nhật điểm sinh viên
```sql
update dbo.SinhVien
set DiemMon1=8.5
where MSSV='1714234'
```
- {{< figure src="/img/heqtcsdl/lab8/lab8_3.png" title="lab8" >}}
{{< linebreak >}}
- D (Delete): Xoá 1 sinh viên nào đó
```sql
delete from dbo.SinhVien where MSSV='1714234'
```
- {{< figure src="/img/heqtcsdl/lab8/lab8_4.png" title="lab8" >}}
{{< linebreak >}}
### 2. Mongo
- C (Create): Tạo 10 mẫu tin cho 10 sinh viên:
```json
db.getCollection('SinhVien').insertMany([{ 
  MSSV: '1710289', Hoten: 'Phan Quốc Trung', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710289@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710233', Hoten: 'Đặng Trần Hữu Nhân', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710233@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710196', Hoten: 'Nguyễn Đăng Khoa', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710196@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1714234', Hoten: 'Hứa Đình Doanh', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1714234@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710264', Hoten: 'Huỳnh Lê Hữu Thành', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710264@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710144', Hoten: 'Nguyễn Đức Đề', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710144@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710156', Hoten: 'Phạm Bá Xuân Duy', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710156@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710204', Hoten: 'Bùi Đức Hoàng Lâm', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710204@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710303', Hoten: 'Phạm Hoàng Việt', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710303@dlu.edu.vn', DienThoai: '0349981228'
}, {
  MSSV: '1710285', Hoten: 'Lê Anh Trí', Namsinh: 1999, DiemMon1: 8, DiemMon2: 7, DiemMon3: 10, Email: '1710289@dlu.edu.vn', DienThoai: '0349981228'
}])
```
{{< linebreak >}}
- R (Read): Đọc dữ liệu sinh viên
```js
use quanlysinhvien;
db.getCollection('SinhVien').find({});
```
- {{< figure src="/img/dbms/dbms-08/Lab08_5.png" title="lab8" >}}

{{< linebreak >}}
- U(Update): cập nhật điểm sinh viên
```ts
use quanlysinhvien;
db.getCollection('SinhVien').updateOne(
  { MSSV: '1714234' }, // query parameter
  $set: {
    DiemMon1: 10,
    DiemMon2: 9,
    DiemMon3: 10
  }
)
```
- {{< figure src="/img/heqtcsdl/lab8/lab8_6.png" title="lab8" >}}

{{< linebreak >}}
- D (Delete): Xoá 1 sinh viên nào đó
```ts
db.getCollection('SinhVien').remove({
  MSSV: '1714234'
})
```
- {{< figure src="/img/heqtcsdl/lab8/lab8_7.png" title="lab8" >}}

{{< linebreak >}}
### 3. MySQL
- C (Create): Tạo 10 mẫu tin cho 10 sinh viên:
```sql
insert into SinhVien values ('1710289', 'Phan Quốc Trung', 1999, 8, 9, 9, '1710289@dlu.edu.vn', '0349981228');
insert into SinhVien values ('1710233', 'Đặng Trần Hữu Nhân', 1999, 5, 5, 5, '1710233@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710196', 'Nguyễn Đăng Khoa', 1999, 7, 9, 9, '1710196@dlu.edu.vn', '035547878');
insert into SinhVien values ('1714234', 'Hứa Đình Doanh', 1999, 7, 9, 9, '1714234@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710264', 'Huỳnh Lê Hữu Thành', 1999, 8, 9, 9, '1710264@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710144', 'Nguyễn Đức Đề', 1999, 8, 9, 9, '1710144@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710156', 'Phạm Bá Xuân Duy', 1999, 8, 9, 9, '1710156@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710204', 'Bùi Đức Hoàng Lâm', 1999, 8, 9, 9, '1710204@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710303', 'Phạm Hoàng Việt', 1999, 8, 9, 9, '1710303@dlu.edu.vn', '035547878');
insert into SinhVien values ('1710285', 'Lê Anh Trí', 1999, 8, 9, 9, '1710285@dlu.edu.vn', '035547878');
```
{{< linebreak >}}

- R (Read): Đọc dữ liệu sinh viên
```sql
select * from SinhVien
```
- {{< figure src="/img/heqtcsdl/lab8/lab8_8.png" title="lab8" >}}

{{< linebreak >}}
- U (Update): Cập nhật điểm sinh viên
```sql
update SinhVien
set DiemMon1=8.5
where MSSV='1714234'
```

{{< linebreak >}}
- D (Delete): Xoá 1 sinh viên nào đó
```sql
delete from dbo.SinhVien where MSSV='1714234'
```