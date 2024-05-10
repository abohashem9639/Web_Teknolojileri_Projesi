<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifreyi aldık
    $email = $_POST["email"];
    $password = $_POST["sifre"];

    // Burada giriş kontrolü yapılabilir
    // Örnek kontrol
    if ($email == "g231210562@sakarya.edu.tr" && $password == "g231210562") {
        // Başarılı giriş durumunda giriş bilgilerini saklayıp bir sonraki sayfaya yönlendirme
        
        echo "<h3>Hoş Geldiniz Can Hocam</h3>";

        echo "<h3>Email:   $email</h3>";
        echo "<h3>Şifre:   $password</h3>";



    } else {
        // Hatalı giriş durumunda bir hata mesajı verebilirsiniz
        echo "Kullanıcı adı veya şifre yanlış!";
    }
}

?>