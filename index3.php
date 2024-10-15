<?php 
session_start();

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;
if($_SESSION['count'] % 3 === 0) {
    header('Location: http://localhost:8000/index4.php');
}
echo 'Количество открытий страницы' . $_SESSION['count']; 
