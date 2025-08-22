<?php

declare(strict_types=1);                             // ép kiểu chặt — giúp hạn chế lỗi "mơ hồ"
require __DIR__ . '/../app/helpers.php';            // nạp autoload + helpers

use App\Controllers\HomeController;                 // dùng controller

// Lấy PATH từ URL (bỏ phần query ?a=b)
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

// Bảng định tuyến (router): METHOD + PATH => [Class, method]
// - Làm nhỏ gọn để bạn hiểu concept.
// - Mai sau có thể thay bằng FastRoute hoặc Laravel Router.
$routes = [
    'GET /'      => [HomeController::class, 'index'], // GET /  -> HomeController@index
    'GET /users' => [HomeController::class, 'users'], // GET /users -> HomeController@users
];

// Chuẩn hóa key tra cứu route
$method   = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$normPath = rtrim($path, '/');                       // bỏ dấu "/" cuối
if ($normPath === '') $normPath = '/';              // root vẫn là "/"
$key = $method . ' ' . $normPath;

// Không có route? trả 404
if (!isset($routes[$key])) {
    http_response_code(404);
    echo '404 Not Found';
    exit;
}

// Có route: tách Class & method rồi gọi
[$class, $method] = $routes[$key];
$controller = new $class();                          // new App\Controllers\HomeController()
$controller->$method();                              // gọi hàm tương ứng (index() hoặc users())




// Front Controller + Router tối giản

// Bạn học được gì ở đây?

// Front Controller: mọi request đều qua 1 cửa, giúp kiểm soát chung (auth, log, error).

// Router: ánh xạ URL → Controller method (đơn giản mà hiệu quả).

// Chuẩn hóa path: tránh lỗi “/users/” vs “/users”.