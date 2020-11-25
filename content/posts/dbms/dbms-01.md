+++
title = "Lab 1. Tải và cài đặt SQL Server trên máy cục bộ"
date = "2020-11-03"
author = "doanhmaple"
authorTwitter = "" #do not include @
cover = ""
tags = ["sql-server", "dbms"]
keywords = ["", ""]
description = ""
categories = "Hệ quản trị Cơ Sở Dữ Liệu"
showFullContent = false
+++

---

### 1. Giới thiệu về SQL Server

- SQL Server hiện có nhiều phiên bản khác nhau. Dưới đây là danh sách các phiên bản cùng với tính năng của từng phiên bản.

| Loại | Mô tả |  
|:---|:---------------|
|  Enterprise  | Nản cao cấp nhất với đầy đủ tính năng  |
|  Standard | ít tính năng hơn Enterprise, sử dụng khi không cần dùng tới các tính năng nâng cao  |
|  Workgroup | Phù hợp cho các công ty lớn với nhiều văn phòng làm việc từ xa  |
| Web | Thiết kế riêng cho các ứng dụng web |
| Developer | Tương tự như Enterprise nhưng chỉ cấp quyền cho một người dùng duy nhất để phát triển, thử nghiệm, demo. Có thể dễ dàng nâng cấp lên bản Enterprise mà không cần cài lại |
| Express | Phiên bản này chỉ dùng được ở mức độ đơn giản, tối đa 1 CPU và bộ nhớ 1GB, kích thước tối đa của cơ sở dữ liệu là 10GB (miễn phí, nhẹ, phù hợp để học) |
| Compact | Nhúng miễn phí vào các môi trường phát triển ứng dụng Web. Kích thước tối đa của cơ sở dữ liệu là 4GB |
| Datacenter | Thay đổi lớn trên SQL Server 2008 R2 chính là phiên bản Datacenter Edition. Không giới hạn bộ nhớ và hỗ trợ hơn 25 bản cài. |
| Business Intelligence	 | Business Intelligence Edition mới được giới thiệu trên SQL Server 2012. Phiên bản này có các tính năng của bản Standard và hỗ trợ một số tính năng nâng cao về BI như Power View và PowerPivot nhưng không hỗ trợ những tính năng nâng cao về mức độ sẵn sàng như AlwaysOn Availability Groups… |
| Enterprise Evaluation	| Phiên bản SQL Server Evaluation Edition là lựa chọn tuyệt vời để dùng được mọi tính năng và có được bản cài miễn phí của SQL Server để học tập và phát triển. Phiên bản này có hạn dùng là 6 tháng từ ngày cài đặt vào máy. |

### 2. Cài đặt SQL Server

- {{< figure src="/img/heqtcsdl/lab1/lab1_1.png" title="Lab1_1" >}}