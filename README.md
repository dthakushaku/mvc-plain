# mvc-plain

Một ứng dụng PHP thuần theo mô hình **MVC (Model – View – Controller)**.  
Mục tiêu: học tập và thực hành cách tổ chức code PHP rõ ràng, có cấu trúc, dễ bảo trì.

---

## 🚀 Tính năng chính
- Kiến trúc **MVC** tối giản: `Controllers`, `Models`, `Views`, `Core`.
- **Front Controller** (`public/index.php`) xử lý toàn bộ request.
- **Router** cơ bản cho GET/POST.
- Cấu hình tách riêng trong thư mục `config/`.
- Hỗ trợ **.env** để quản lý biến môi trường.
- Thư mục `storage/` chứa logs & cache, tách biệt khỏi source code.

---

## 📂 Cấu trúc thư mục
```
mvc-plain/
├── app/
│   ├── Controllers/     # Controller xử lý request
│   ├── Models/          # Model kết nối DB, xử lý dữ liệu
│   ├── Views/           # Giao diện hiển thị
│   └── Core/            # Router, lớp cơ sở, helper
├── config/
│   ├── config.php       # Config chung (đọc từ .env)
│   └── routes.php       # Định nghĩa route
├── public/
│   ├── index.php        # Front Controller (điểm vào chính)
│   └── .htaccess        # Rewrite rule về index.php
├── storage/             # Logs, cache (KHÔNG commit)
├── vendor/              # Composer (nếu có dùng)
├── .env                 # Biến môi trường (KHÔNG commit)
├── .env.example         # Mẫu file .env
├── .gitignore
└── README.md
```

---

## ⚙️ Cài đặt & chạy local

### Yêu cầu
- PHP >= 8.0
- MySQL/MariaDB (nếu dùng DB)
- Composer (nếu quản lý dependency)

### Bước 1: Clone repo
```bash
git clone https://github.com/dthakushaku/mvc-plain.git
cd mvc-plain
```

### Bước 2: Tạo file `.env`
```bash
cp .env.example .env
```
Chỉnh sửa thông tin DB, APP_URL, APP_DEBUG… trong `.env`.

### Bước 3: Cài dependency (nếu dùng Composer)
```bash
composer install
```

### Bước 4: Chạy server PHP built-in
```bash
php -S localhost:8000 -t public
```
Mở trình duyệt: [http://localhost:8000](http://localhost:8000)

---

## 🛠️ Ví dụ routes & controllers
`config/routes.php`
```php
$router->get('/', [HomeController::class, 'index']);
```

`app/Controllers/HomeController.php`
```php
class HomeController {
    public function index() {
        echo "Hello MVC!";
    }
}
```

---

## 📦 Deploy
1. Trỏ DocumentRoot của Apache/Nginx vào thư mục `public/`.  
2. Bật `mod_rewrite` (Apache) hoặc cấu hình rewrite (Nginx).  
3. Copy `.env` phù hợp cho môi trường production.  
4. Chạy:
```bash
composer install --no-dev --optimize-autoloader
```

---

## 📜 Giấy phép
Dự án mang tính học tập & thử nghiệm. Bạn có thể sử dụng, chỉnh sửa và mở rộng tùy ý.

---
