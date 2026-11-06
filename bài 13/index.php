<?PHP
//nỘI dung php ở vị trí này
echo "xin chào";
//Biến: $tên biến = giá trị;
$hoTen = "Hung";
$tuoi = 29;
//Để nối chuỗi trong php dùng dấu .
echo $hoTen . "tuổi của tôi là: " . $tuoi . "<br>";

//strlen() Độ dài của chuỗi
echo strlen($hoTen) . "<br>";

//Đếm sô từ
echo str_word_count($hoTen) . "<br>";

//Tìm kiếm ký tự trong chuỗi
echo strpos($hoTen, "o") . "<br>";

//Thay thế ký tự trong chuỗi
echo str_replace("Hung", "Hùng", $hoTen) . "<br>";

$soThuNhat = 10;
$soThuHai = 5;
//phép cộng
echo $soThuNhat + $soThuHai;

//- * /
echo $soThuNhat - $soThuHai;
echo $soThuNhat * $soThuHai;
echo $soThuNhat / $soThuHai;

//Toán tử gán
$soThuNhat += $soThuHai; // $soThuNhat = $soThuNhat + $soThuHai;
echo $soThuNhat;

//Toán tử so sánh
echo $soThuNhat == $soThuHai .  "<br>"; //so sánh bằng
echo $soThuNhat != $soThuHai .  "<br>"; //so sánh khác
echo $soThuNhat > $soThuHai .  "<br>"; //so sánh lớn hơn
echo $soThuNhat < $soThuHai .  "<br>"; //so sánh nhỏ hơn
echo $soThuNhat >= $soThuHai .  "<br>"; //so sánh lớn hơn hoặc bằng
echo $soThuNhat <= $soThuHai .  "<br>"; //so sánh nhỏ hơn hoặc bằng

// 7. câu điều kiện
// Kiểm tra tổng số thứ 1 và số thứ 2
// Nếu 15 thì in ra "tổng nhỏ hơn 15" 
// Ngược lại in ra "tổng lớn hơn hoặc bằng 15"
switch($color){
    case "red":
        echo "Bạn chọn màu đỏ";
        break;
    case "blue":
        echo "Bạn chọn màu xanh";
        break;
    default:
        echo "Bạn không chọn màu nào";
}

// 9. for 
for ($i = 0; $i < 10; $i++) {
    echo "Số thứ tự: " . $i . "<br>";
}

// 10. Mảng
echo "<br>";
$mang = array("Hung", "Hùng", "Hưng");
//Đếm số phần tử trong mảng
echo count($mang) . "<br>";
echo $mang[1] . "<br>";

$mang[] = "Hùng";
print_r($mang);
unset($mang[1]);


?>