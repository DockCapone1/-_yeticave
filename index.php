<?php
require_once ('functions.php');

$list_category =a;

$list_name =b;

$page_content =p;
$page_content = conpile_template('index.php',
    ['list_category'=> a,
        'list_name' => b
    ]);
$is_auth =c;
$user_avatar =d;
$user_name =i;
$layout_content = conpile_template('layout.php', [
    'page_title'=> 'Главная страница',
    'is_auth'=> c ,
    'user_avatar'=> d,
    'user_name'=> i,
    'page_content'=> p,
    'list_category'=> a]);

print($layout_content);

?>
