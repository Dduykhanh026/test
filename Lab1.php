<?php
$so_nguyen = 42;
$so_thuc = 3.14;
$chuoi = "Xin chào PHP!";
$logic = true;

echo "Giá trị và kiểu dữ liệu:\n";
var_dump($so_nguyen);
var_dump($so_thuc);
var_dump($chuoi);
var_dump($logic);

echo "Hoặc cách khác"; 

echo "1. \$so_nguyen : $so_nguyen ";
echo " : " . gettype($so_nguyen) . "\n";
echo "2. \$so_thuc : $so_thuc ";
echo " : " . gettype($so_thuc) . "\n";
echo "3. \$chuoi : $chuoi ";
echo " : " . gettype($chuoi) . "\n";
echo "4. \$logic :  $logic";
echo " : " . gettype($logic) . "\n";

?>
