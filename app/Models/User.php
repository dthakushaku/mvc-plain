<?php
namespace App\Models;

final class User {
  // Tạm trả về mảng cứng để học flow MVC.
  // Sau này bạn thay bằng PDO/MySQL: SELECT * FROM users ...
  public static function all(): array {
    return [
      ['id'=>1,'name'=>'Dang'],
      ['id'=>2,'name'=>'Mai'],
    ];
  }
}

// Model: nơi truy vấn dữ liệu (DB, API, v.v.)
// Bạn học được gì ở đây?
// Model là nơi truy vấn dữ liệu (DB, API, v.v.) và trả về kết quả.
// - all(): trả về mảng cứng để mô phỏng dữ liệu người dùng.    
// - Sau này bạn sẽ thay bằng PDO/MySQL để truy vấn thực tế.
// - Model không chứa logic hiển thị, chỉ tập trung vào dữ liệu.
// - Tách biệt Model giúp dễ bảo trì, mở rộng và kiểm thử.
// - Bạn có thể thêm các phương thức khác như find($id), create($data),
//   update($id, $data), delete($id) để quản lý dữ liệu người dùng.
// - Model nên được đặt trong thư mục app/Models để dễ quản lý.
// - Tên lớp Model thường là danh từ số ít (User, Product, v.v.) để dễ hiểu.
// - Bạn có thể sử dụng ORM như Eloquent hoặc Doctrine để làm việc với DB dễ
//   hơn, nhưng trong ví dụ này ta giữ đơn giản với mảng cứng.
// - Khi làm việc với DB thực tế, nhớ sử dụng prepared statements để tránh SQL injection
//   và bảo mật dữ liệu.
// - Bạn cũng có thể thêm các phương thức để xử lý logic liên quan đến dữ liệu
//   như validate, transform, v.v. để giữ cho Model gọn gàng và dễ hiểu.
// - Cuối cùng, Model nên được kiểm thử độc lập để đảm bảo các phương thức
//   hoạt động đúng với dữ liệu đầu vào và trả về kết quả mong đợi.
// - Bạn có thể sử dụng PHPUnit hoặc các framework kiểm thử khác để viết
//   các bài kiểm thử cho Model.
// - Khi làm việc với nhiều Model, bạn có thể sử dụng Repository Pattern
//   để tách biệt logic truy vấn dữ liệu khỏi Model, giúp dễ dàng thay đổi
//   cách truy vấn mà không ảnh hưởng đến phần còn lại của ứng dụng.
// - Bạn cũng có thể sử dụng các thư viện như Laravel Eloquent hoặc Doctrine
//   để làm việc với DB dễ dàng hơn, nhưng trong ví dụ này ta giữ đơn giản
//   với mảng cứng để tập trung vào flow MVC.
// - Cuối cùng, nhớ rằng Model là phần quan trọng trong kiến trúc MVC,
//   giúp tách biệt logic truy vấn dữ liệu khỏi phần hiển thị và điều khiển.
// - Bạn có thể mở rộng Model để hỗ trợ các tính năng như phân trang, tìm kiếm,
//   lọc dữ liệu, v.v. để đáp ứng nhu cầu của ứng dụng.
// - Khi ứng dụng phát triển, bạn có thể cần thêm các Model khác như Product, Order,
//   Category, v.v. để quản lý các loại dữ liệu khác nhau.
// - Mỗi Model nên có các phương thức rõ ràng để truy vấn và xử lý dữ liệu,
//   giúp dễ dàng bảo trì và mở rộng ứng dụng.
// - Bạn cũng có thể sử dụng các thư viện ORM để làm việc với DB dễ dàng hơn,
//   nhưng trong ví dụ này ta giữ đơn giản với mảng cứng để tập trung
//   vào flow MVC.

// Bạn học được gì ở đây?

// Model chịu trách nhiệm dữ liệu.

// Bước kế tiếp: đổi all() thành truy vấn PDO (chuẩn bị cho thật chiến).