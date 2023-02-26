<?php

$fName = $_POST['f_name'];
$lName = $_POST['l_name'];
$id = $_POST['id'];
$father = $_POST['father'];
$birthday = $_POST['birthday'];

$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فرم مشخصات دانش آموزی</title>
    <style>
        body {
            direction: rtl;
        }
        table, th, td{
            border: 1px solid #3d3d3d;
            padding: 10px;
            font-size: larger;
        }

    </style>
</head>
<body>
<h2 align="center">دانش آموز با مشخصات زیر در سیستم ثبت خواهد شد :</h2>
<div align="center">
    <img src="<?= $target_file ?>" alt="" width="250">
</div>
<br>
<table align="center">
    <tr>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>کد ملی</th>
        <th>نام پدر</th>
        <th>تاریخ تولد</th>
    </tr>
    <tr>
        <td><?= $fName ?></td>
        <td><?= $lName ?></td>
        <td><?= $id ?></td>
        <td><?= $father ?></td>
        <td><?= $birthday ?></td>
    </tr>
</table>
</body>
</html>
