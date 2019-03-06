<?php
require_once('drink.php');
require_once('food.php');
require_once('review.php');
require_once('user.php');

$juice = new Drink('JUICE',   600, 'images/juice.png', 'アイス');
$coffee = new Drink('COFFEE', 500, 'images/coffee.png', 'ホット');
$curry = new Food('CURRY',    900, 'images/curry.png', 3);
$pasta = new Food('PASTA',   1200, 'images/pasta.png', 1);

$menus = array($juice, $coffee, $curry, $pasta);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato',   'male');

$users = array($user1, $user2, $user3, $user4);

$review1 = new Review($juice->getName(), $user1->getId(), '果肉たっぷりのオレンジジュースです！');
$review2 = new Review($curry->getName(), $user1->getId(), '具がゴロゴロしていてとてもおいしいです');
$review3 = new Review($coffee->getName(), $user2->getId(), '眠気がぶっ飛びました！');
$review4 = new Review($pasta->getName(), $user2->getId(), 'シェフにボ〜ノと伝えておいて！');
$review5 = new Review($juice->getName(), $user3->getId(), 'これはすごいぷりっぷりのオレンジね！');
$review6 = new Review($curry->getName(), $user3->getId(), '辛さ抑えめのマイルドでおいしかった');
$review7 = new Review($coffee->getName(), $user4->getId(), '苦味がちょうどよくて、おすすめです');
$review8 = new Review($pasta->getName(), $user4->getId(), 'トマトが赤くていい感じでした');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8);

?>
