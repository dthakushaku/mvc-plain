<?php 


// function xinChao() {
//     echo "Hello world";
// }

// $fn = "xinChao";
// $fn();  // gọi hello()

// class Test {
//     public function sayHi() {
//         echo "Xin chào các bạn";
//     }
// }

// $obj = new Test();
// $method = "sayHi";
// // $obj.$method();   // nối 2 chuỗi ->  không đúng
// $obj -> $method();   // gọi $obj->sayHi()

require __DIR__.'/../test/helpers.php';
require __DIR__ . '/Controllers/A_Controller.php';

// output ngay: helpers loaded

use Test\Controllers\A_Controller;
$c = new A_Controller(); 
// lúc này mới in: autoload: App\Controllers\HomeController
