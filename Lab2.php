<!-- <?php


echo "- - - Bài 1 Khởi tạo chuỗi st1 gồm 8 ký tự dạng ddmmyyyy. Viết chương trình hiển thị chuỗi st1 dưới dạng dd/mm/yyyy.";
$st1 = "12/08/2004";
$day = substr($st1, 0, 2);
$month = substr($st1, 3, 2);
$year = substr($st1, 6, 4);
echo "$day/$month/$year";


echo "\n- - - Bài 2: Khởi tạo chuỗi st2. Cho biết chuỗi st2 có phải là chuỗi đối xứng hay không?\n";
$st2 = "ABDBA";
if ($st2 === strrev($st2)) {
  echo "$st2 là chuỗi đối xứng.";
} else {
  echo "$st2 không phải là chuỗi đối xứng.";
}


echo "\n- - - Bài 3: Khởi tạo chuỗi st3 dạng địa chỉ email. Hiển thị username và tên miền.\n";
$st3 = "daoduykhanh@husc.edu.vn";
$parts = explode("@", $st3);
$username = $parts[0];
$domain = $parts[1];
echo "Username: $username\n";
echo "Tên miền: $domain\n";
echo "\n- - - Bài 4: Khởi tạo chuỗi st4 là địa chỉ đầy đủ của một trang web.\n";


$st4 = "https://w3schools.com/web/learn_php/index.php";
$lastPart = basename($st4);


echo "\n- - - Bài 5: Nén một chuỗi bằng cách đếm số ký tự lặp lại liên tiếp.\n";
$st5 = "aaaaaaaabcccccaaa";
$compressed = "";
$length = strlen($st5);
$count = 1;
for ($i = 0; $i < $length; $i++) {
  if ($i + 1 < $length && $st5[$i] == $st5[$i + 1]) {
    $count++;
  } else {
    $compressed .= $st5[$i] . $count;
    $count = 1;
  }
}
echo "Chuỗi sau khi nén: $compressed\n";

?> -->

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Bài tập PHP - Chuỗi</title>
</head>
<body>
  <h1>Bài tập PHP - Chuỗi</h1>

  <?php
  // Bài 1
  echo "<h2>Bài 1</h2>";
  echo "<p><strong>Mô tả:</strong> Khởi tạo chuỗi st1 gồm 8 ký tự dạng ddmmyyyy. Hiển thị dạng dd/mm/yyyy.</p>";

  $st1 = "12/08/2004";
  $day = substr($st1, 0, 2);
  $month = substr($st1, 3, 2);
  $year = substr($st1, 6, 4);

  echo "<p><strong>Input:</strong> $st1</p>";
  echo "<p><strong>Output:</strong> $day/$month/$year</p>";


  // Bài 2
  echo "<h2>Bài 2</h2>";
  echo "<p><strong>Mô tả:</strong> Khởi tạo chuỗi st2. Kiểm tra xem chuỗi có phải đối xứng hay không.</p>";

  $st2 = "ABDBA";
  echo "<p><strong>Input:</strong> $st2</p>";

  if ($st2 === strrev($st2)) {
    echo "<p><strong>Output:</strong> $st2 là chuỗi đối xứng.</p>";
  } else {
    echo "<p><strong>Output:</strong> $st2 không phải là chuỗi đối xứng.</p>";
  }


  // Bài 3
  echo "<h2>Bài 3</h2>";
  echo "<p><strong>Mô tả:</strong> Khởi tạo chuỗi st3 dạng địa chỉ email. Hiển thị username và tên miền.</p>";

  $st3 = "daoduykhanh@husc.edu.vn";
  $parts = explode("@", $st3);
  $username = $parts[0];
  $domain = $parts[1];

  echo "<p><strong>Input:</strong> $st3</p>";
  echo "<p><strong>Output:</strong></p>";
  echo "<ul>";
  echo "<li>Username: $username</li>";
  echo "<li>Tên miền: $domain</li>";
  echo "</ul>";


  // Bài 4
  echo "<h2>Bài 4</h2>";
  echo "<p><strong>Mô tả:</strong> Khởi tạo chuỗi st4 là địa chỉ đầy đủ của một trang web và lấy tên file cuối cùng.</p>";

  $st4 = "https://classroom.google.com/u/1/c/ODA1OTAzMTc1NTg1";
  $lastPart = basename($st4);

  echo "<p><strong>Input:</strong> $st4</p>";
  echo "<p><strong>Output:</strong> $lastPart</p>";


  // Bài 5
  echo "<h2>Bài 5</h2>";
  echo "<p><strong>Mô tả:</strong> Nén một chuỗi bằng cách đếm số ký tự lặp lại liên tiếp.</p>";

  $st5 = "kkkkkkkkkkkkkkkkkkkhhhhhhhhhhhhhhhhhhhhhhaaaaaaaaaaaaaaaaaaaaaannnnnnnnnnnnnnnnnnnnnhhhhhhhhhhhhhhssssssssssssssssssss";
  $compressed = "";
  $length = strlen($st5);
  $count = 1;

  for ($i = 0; $i < $length; $i++) {
    if ($i + 1 < $length && $st5[$i] == $st5[$i + 1]) {
      $count++;
    } else {
      $compressed .= $st5[$i] . $count;
      $count = 1;
    }
  }

  echo "<p><strong>Input:</strong> $st5</p>";
  echo "<p><strong>Output:</strong> $compressed</p>";
  ?>
</body>
</html>
