<meta charset="utf-8">

<?php

$name = $_POST["name"];
$gender = $_POST["gender"];
$school = $_POST["school"];
$grade = $_POST["grade"];
$birth = $_POST["birth"];
$id = $_POST["id"];
$homenum = $_POST["homenum"];
$phonenum = $_POST["phonenum"];
$email = $_POST["email"];
$emgname = $_POST["emgname"];
$emgnum = $_POST["emgnum"];
$emg = $_POST["emg"];
$size = $_POST["size"];
$course = $_POST["course"];
$like = $_POST["like"];
$other = $_POST["other"];

echo  "你的名字：" , $name , "<br/>";
echo  "你的性別：" , $gender , "<br/>";
echo  "你的學校：" , $school , "<br/>";
echo  "你的年級：" , $grade , "<br/>";
echo  "你的生日：" , $birth , "<br/>";
echo  "你的身分證字號：" , $id , "<br/>";
echo  "你的電話（住家）：" , $homenum , "<br/>";
echo  "你的電話（行動）：" , $phonenum , "<br/>";
echo  "你的EMAIL：" , $email , "<br/>";
echo  "你的緊急聯絡人姓名：" , $emgname , "<br/>";
echo  "你的緊急聯絡人電話：" , $emgnum , "<br/>";
echo  "你的緊急聯絡人關係：" , $emg , "<br/>";
echo  "你的營服尺寸：" , $size , "<br/>";
echo "感興趣的課程：" , implode("," , $like) , "<br/>";
echo  "你的備註：" , nl2br(htmlspecialchars($other)) , "<br/>";
htmlspecialchars

?>