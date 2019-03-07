<?php
class Menu {
  // 子クラスからオーバーライドを許可するためprotectedにしている
  protected $name;
  protected $price;
  protected $image;
  // $orederCountはPOSTでユーザーデータを受け取るだけなのでprivateにしている
  private $orderCount = 0;
  // 商品の数を定義。インスタンスでなくクラスが持つプロパティのためstaticにしている
  protected static $count = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    self::$count++;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.10);
  }
  
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->orderCount;
  }
  
  public function getReviews($reviews) {
    $reviewsForMenu = array();
    foreach ($reviews as $review) {
      if ($review->getMenuName() == $this->name) {
        $reviewsForMenu[] = $review;
      }
    }
    return $reviewsForMenu;
  }
  
  public static function getCount() {
    return self::$count;
  }
  
  public static function findByName($menus, $name) {
    foreach ($menus as $menu) {
      if ($menu->getName() == $name) {
        return $menu;
      }
    }
  }
  
}
?>