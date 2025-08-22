<!doctype html>
<meta charset="utf-8">
<title><?= h($title ?? 'Demo') ?></title>   <!-- dùng h() để an toàn XSS -->
<h1><?= h($title ?? 'Demo') ?></h1>

<?php if (!empty($users)): ?>               <!-- nếu có dữ liệu users -->
  <ul>
    <?php foreach ($users as $u): ?>
      <li>#<?= (int)$u['id'] ?> — <?= h($u['name']) ?></li>
      <!-- (int) ép số ID; h() escape tên -->
    <?php endforeach ?>
  </ul>
  <p><a href="/">Về trang chủ</a></p>
<?php else: ?>                              <!-- không có users: là trang chủ -->
  <p>Trang chủ MVC thuần PHP.</p>
  <p><a href="/users">Xem danh sách users</a></p>
<?php endif; ?>


<!-- Bạn học được gì ở đây?

View chỉ hiển thị. Không kết nối DB, không xử lý nghiệp vụ.

Escape đầu ra mọi chuỗi từ người dùng/DB (h()). -->