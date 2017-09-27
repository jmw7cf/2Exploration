<?php

if(!$_POST['page']) die("0");
echo $_POST['page'];

$page = $_POST['page'];

echo $page;

if(file_exists('pages/'.$page.'.html'))
echo file_get_contents('pages/'.$page.'.html');

else echo 'There is no such page!';
?>
