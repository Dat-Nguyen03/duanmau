<?php
require_once ('database.php');
class m_hang_hoa extends database {
  public function doc_hang_hoa() {
    $sql = 'SELECT * FROM hang_hoa';
    $this->setQuery($sql);
    //Lấy dữ liệu nhiều dòng
    return $this->loadAllRows();
  }
}