<?php
namespace App\Controllers;
use App\Models\User;                                 // Controller có thể gọi Model

final class HomeController {
  // Trang chủ
  public function index(): void {
    $title = 'Hello MVC (Pure PHP)';                // Dữ liệu view
    view('home', compact('title'));                 // render app/Views/home.php
  }

  // Trang danh sách users
  public function users(): void {
    $users = User::all();                           // Lấy dữ liệu từ Model (tạm giả lập)
    view('home', ['title' => 'Users', 'users' => $users]); // render cùng view, truyền thêm $users
  }
}

// Điều phối logic

// Bạn học được gì ở đây?   
// Controller là nơi xử lý logic, gọi Model và render View.
// - index(): trang chủ, hiển thị tiêu đề.
// - users(): lấy danh sách người dùng từ Model và hiển thị.
// View được render với dữ liệu từ Controller, giúp tách biệt logic và giao diện.
// - Sử dụng view() để nạp giao diện với dữ liệu cần thiết.
// - Dữ liệu được truyền dưới dạng mảng, có thể dùng compact() để gọn hơn.


// Bạn học được gì ở đây?
// Controller “mảnh mai”: nhận request → gọi Model → chọn View.

// Không truy vấn DB trực tiếp trong View — giữ ranh giới rõ ràng.
