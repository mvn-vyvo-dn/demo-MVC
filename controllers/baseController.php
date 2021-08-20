<?php

class BaseController
{
  protected $folder;
  
  // show view
  function render($file, $data = array())
  {
    $view_file = '/var/www/MVC/views/' . $this->folder . '/' . $file . '.php';
    if (is_file($view_file)) {
      // tạo ra các biến chứa giá trị truyền vào lúc gọi hàm render ở controller
      extract($data);
      // lưu giá trị trả về khi chạy file view template với các dữ liệu đó vào 1 biến chứ chưa hiển thị luôn ra trình duyệt
      ob_start();
      require_once($view_file);
      // show in application.php
      $content = ob_get_clean();
      require_once('/var/www/MVC/views/application.php');
    } else {
      header('Location: index.php?controller=pages&action=error');
    }
  }
}