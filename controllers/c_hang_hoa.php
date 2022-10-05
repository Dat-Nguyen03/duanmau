<?php
class c_hang_hoa {
  public function index(){
    include ('models/m_hang_hoa.php');
    $m_hang_hoa = new m_hang_hoa();
    $hang_hoas = $m_hang_hoa->doc_hang_hoa();
    //mảng dữ liệu hàng hóa

    //Gọi đường dẫn view vào đây
    $view = 'views/hang_hoa/v_hang_hoa.php';//Đường dẫn sẽ thay đổi theo views

    //
    include('templates/front-end/layout.php');
  }
}