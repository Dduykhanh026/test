
# DANH SÁCH LỆNH PHP CƠ BẢN VÀ NÂNG CAO

## 1. Lệnh cơ bản trong PHP
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `echo` | In ra màn hình | `echo "Hello World!";` |
| `print` | Tương tự `echo`, trả về 1 | `print "Xin chào";` |
| `var_dump()` | In kiểu dữ liệu và giá trị | `var_dump($a);` |
| `isset()` | Kiểm tra biến có tồn tại và khác null | `isset($x)` |
| `unset()` | Hủy biến | `unset($x);` |
| `empty()` | Kiểm tra biến rỗng | `empty($str)` |
| `die()` hoặc `exit()` | Dừng chương trình | `die("Lỗi kết nối DB");` |
| `include` | Nhúng file, lỗi sẽ cảnh báo | `include 'header.php';` |
| `require` | Nhúng file, lỗi sẽ dừng chương trình | `require 'config.php';` |
| `include_once` | Nhúng file 1 lần duy nhất | `include_once 'menu.php';` |
| `require_once` | Nhúng file 1 lần duy nhất | `require_once 'db.php';` |

## 2. Lệnh điều khiển luồng
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `if` / `else` / `elseif` | Điều kiện | `if($a > 5) { echo "OK"; }` |
| `switch` / `case` | Chọn nhiều trường hợp | `switch($x) { case 1: echo "Một"; break; default: echo "Khác"; }` |
| `for` | Lặp với biến đếm | `for($i=0;$i<5;$i++){ echo $i; }` |
| `while` | Lặp khi điều kiện đúng | `while($a<10){ $a++; }` |
| `do...while` | Lặp ít nhất 1 lần | `do { echo $a; } while($a<5);` |
| `foreach` | Duyệt mảng | `foreach($arr as $value){ echo $value; }` |
| `break` | Thoát vòng lặp/switch | `break;` |
| `continue` | Bỏ qua 1 lần lặp | `continue;` |

## 3. Lệnh thao tác biến và kiểu dữ liệu
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `$var = value` | Khai báo biến | `$name = "Khánh";` |
| `define()` | Định nghĩa hằng số | `define("PI", 3.14);` |
| `const` | Định nghĩa hằng số kiểu OOP | `const VERSION = "1.0";` |
| `gettype()` | Lấy kiểu dữ liệu | `gettype($a);` |
| `settype()` | Chuyển kiểu dữ liệu | `settype($x, "integer");` |
| `is_array()` | Kiểm tra có phải mảng không | `is_array($arr)` |
| `is_string()` | Kiểm tra có phải chuỗi không | `is_string($str)` |
| `is_numeric()` | Kiểm tra có phải số không | `is_numeric($num)` |

## 4. Lệnh thao tác chuỗi
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `strlen()` | Độ dài chuỗi | `strlen("Hello") // 5` |
| `strtoupper()` | Chuỗi → chữ hoa | `strtoupper("abc") // ABC` |
| `strtolower()` | Chuỗi → chữ thường | `strtolower("HELLO") // hello` |
| `ucfirst()` | Viết hoa chữ cái đầu tiên | `ucfirst("khánh") // Khánh` |
| `str_replace()` | Thay thế chuỗi | `str_replace("a","b","banana") // bbnbnb` |
| `strpos()` | Vị trí xuất hiện đầu tiên | `strpos("abc","b") // 1` |
| `substr()` | Cắt chuỗi | `substr("Hello",0,3) // Hel` |
| `trim()` | Xóa khoảng trắng 2 đầu | `trim("  abc  ") // abc` |

## 5. Lệnh thao tác mảng
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `array()` | Tạo mảng | `$arr = array(1,2,3);` |
| `count()` | Đếm phần tử mảng | `count($arr);` |
| `array_push()` | Thêm phần tử cuối mảng | `array_push($arr, "new");` |
| `array_pop()` | Xóa phần tử cuối mảng | `array_pop($arr);` |
| `array_shift()` | Xóa phần tử đầu mảng | `array_shift($arr);` |
| `array_unshift()` | Thêm phần tử đầu mảng | `array_unshift($arr, "first");` |
| `in_array()` | Kiểm tra giá trị có trong mảng | `in_array("apple",$arr)` |
| `array_merge()` | Gộp 2 mảng | `array_merge($a,$b)` |
| `array_keys()` | Lấy danh sách key | `array_keys($arr)` |
| `array_values()` | Lấy danh sách value | `array_values($arr)` |
| `sort()` | Sắp xếp tăng dần | `sort($arr)` |
| `rsort()` | Sắp xếp giảm dần | `rsort($arr)` |
| `asort()` | Sắp xếp tăng theo value, giữ key | `asort($arr)` |
| `ksort()` | Sắp xếp tăng theo key | `ksort($arr)` |

## 6. Lệnh làm việc với file
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `fopen()` | Mở file | `fopen("data.txt","r");` |
| `fwrite()` | Ghi dữ liệu vào file | `fwrite($f, "Hello");` |
| `fread()` | Đọc dữ liệu từ file | `fread($f, filesize("data.txt"));` |
| `fclose()` | Đóng file | `fclose($f);` |
| `file_get_contents()` | Đọc toàn bộ file | `file_get_contents("data.txt");` |
| `file_put_contents()` | Ghi dữ liệu vào file | `file_put_contents("data.txt", "Hello");` |
| `unlink()` | Xóa file | `unlink("data.txt");` |
| `copy()` | Sao chép file | `copy("a.txt", "b.txt");` |

## 7. Lệnh thao tác với HTTP và form
| Lệnh | Ý nghĩa | Ví dụ |
|------|---------|-------|
| `$_GET` | Nhận dữ liệu từ URL | `$_GET['id']` |
| `$_POST` | Nhận dữ liệu từ form POST | `$_POST['username']` |
| `$_REQUEST` | Nhận từ GET + POST + COOKIE | `$_REQUEST['data']` |
| `$_FILES` | Nhận dữ liệu upload | `$_FILES['file']['name']` |
| `$_COOKIE` | Lấy cookie | `$_COOKIE['user']` |
| `$_SESSION` | Lấy session | `$_SESSION['user']` |
| `header()` | Gửi header HTTP | `header("Location: home.php");` |
| `setcookie()` | Tạo cookie | `setcookie("user","Khánh",time()+3600);` |
| `session_start()` | Bắt đầu session | `session_start();` |
| `session_destroy()` | Xóa session | `session_destroy();` |

## 8. Lệnh kết nối MySQL (MySQLi & PDO)
### MySQLi
```php
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM users");

while($row = $result->fetch_assoc()) {
    echo $row['name'];
}
$conn->close();
```

### PDO
```php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công!";
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
```

## 9. Lệnh chạy PHP từ CLI
```bash
php index.php
php -S localhost:8000
php -v
php -r "echo 'Hello CLI';"
```

## 10. Các lệnh Composer
| Lệnh | Ý nghĩa |
|------|---------|
| `composer init` | Tạo file composer.json |
| `composer install` | Cài đặt thư viện từ composer.json |
| `composer update` | Cập nhật thư viện |
| `composer require vendor/package` | Thêm thư viện mới |
| `composer dump-autoload` | Tải lại autoload |

---
**Tài liệu chính thức:**  
- [PHP Manual](https://www.php.net/manual/en/)  
- [Composer](https://getcomposer.org/)
