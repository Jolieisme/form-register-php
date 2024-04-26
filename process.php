<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "baitap2"; 

$conn = new mysqli($servername, $username, $password, $dbname);

$ho = $_POST['ho'];
$ten = $_POST['ten'];
$matkhau = $_POST['matkhau'];
$email = $_POST['email'];
$ngaysinh = $_POST['ngaysinh'];
$gioitinh = $_POST['gioitinh'];
$thanhpho = $_POST['thanhpho'];
$sothich = isset($_POST['sothich']) ? implode(", ", $_POST['sothich']) : ""; 
$mota = $_POST['mota'];


$sql = "INSERT INTO users (ho, ten, matkhau, email, ngaysinh, gioitinh, thanhpho, sothich, mota)
        VALUES ('$ho', '$ten', '$matkhau', '$email', '$ngaysinh', '$gioitinh', '$thanhpho', '$sothich', '$mota')";

if ($conn->query($sql) === TRUE) {
    echo "<div style='text-align: center;'>";
    echo "<h3 style='color: #333; text-decoration: underline;'>Thông tin đã nhập:</h3>";
    echo "<ul style='list-style-type: none; padding-left: 0;'>";
    echo "<li><b>Họ:</b> $ho</li>";
    echo "<li><b>Tên:</b> $ten</li>";
    echo "<li><b>Mật khẩu:</b> $matkhau</li>";
    echo "<li><b>Email:</b> $email</li>";
    echo "<li><b>Ngày sinh:</b> $ngaysinh</li>";
    echo "<li><b>Giới tính:</b> $gioitinh</li>";
    echo "<li><b>Thành phố:</b> $thanhpho</li>";
    echo "<li><b>Sở thích:</b> $sothich</li>";
    echo "<li><b>Mô tả bản thân:</b> $mota</li>";
    echo "</ul>";
    echo "<p style='color: green;'><strong>Dữ liệu đã được lưu thành công</strong></p>";
    echo "</div>";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
