<?php


include_once('..\config\connection.php');

$stmt = $conectar->prepare("INSERT INTO posts (title, description, data, image) VALUES (:title, :description, :data, :image)");

$title = $_POST['title'];
$description = $_POST['description'];
$data = $_POST['data'];

echo $title."<br>";
echo $description."<br>";
echo $data."<br>";

//import php page?

?>








