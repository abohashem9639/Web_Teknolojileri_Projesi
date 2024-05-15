<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifreyi aldık
    $email = $_POST["email"];
    $password = $_POST["sifre"];

    // Burada giriş kontrolü yapılabilir
    // Örnek kontrol
    if ($email == "g231210562@sakarya.edu.tr" && $password == "g231210562") {
        // Başarılı giriş durumunda giriş bilgilerini saklayıp bir sonraki sayfaya yönlendirme
        echo "<table border='1' style='width: 50%; margin-top: 20px;'>";
        echo "<tr><th>Email</th><td>$email</td></tr>";
        echo "<tr><th>Şifre</th><td>$password</td></tr>";
        echo "</table>";
    } else {
        // Hatalı giriş durumunda bir hata mesajı verebilirsiniz
        echo "<div style='color: red;'><strong>Kullanıcı adı veya şifre yanlış!</strong></div>";
    }
}
?>
