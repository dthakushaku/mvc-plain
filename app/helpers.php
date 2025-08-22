<?php
// ===============================
// Autoload PSR-4 tối giản cho namespace App\*
// Mục tiêu: khi bạn gọi new App\Controllers\HomeController,
// PHP tự tìm file app/Controllers/HomeController.php để require.
// ===============================
spl_autoload_register(function ($class) {
  $prefix = 'App\\';                                // Tên không gian lớp do bạn định nghĩa
  $base = __DIR__ . DIRECTORY_SEPARATOR;            // Thư mục gốc của "App\" là app/

  // Nếu class KHÔNG bắt đầu bằng "App\", bỏ qua autoload này
  if (strncmp($prefix, $class, strlen($prefix)) !== 0) return;

  // Lấy phần còn lại sau "App\" và đổi "\" trong namespace thành "/"
  $rel = str_replace('\\', DIRECTORY_SEPARATOR, substr($class, strlen($prefix)));

  // Ghép thành đường dẫn thực tế tới file .php
  $file = $base . $rel . '.php';

  // Tồn tại file thì require nó
  if (is_file($file)) require $file;
});

// ===============================
// view(): render file giao diện ở app/Views/{tpl}.php
// - extract($data) biến mảng ['title'=>'...'] thành biến $title trong view.
// ===============================
function view(string $tpl, array $data = []): void {
  extract($data, EXTR_SKIP);                        // EXTR_SKIP: nếu trùng biến thì bỏ qua (an toàn hơn)
  require __DIR__ . "/Views/{$tpl}.php";            // Nạp giao diện
}

// ===============================
// h(): escape an toàn để tránh XSS khi in ra HTML
// ===============================
function h(string $s): string {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); // đổi < > " ' thành entities an toàn
}



// Autoload + helpers (view, escape)
// Bạn học được gì ở đây?

// Autoload giúp code gọn, không cần require lặt vặt.

// View chỉ nhận dữ liệu và hiển thị (không chứa logic nặng).

// h() là thói quen “vàng” để tránh XSS.