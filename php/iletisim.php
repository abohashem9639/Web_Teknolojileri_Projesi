<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adiniz = $_POST["adiniz"];
    $soyadiniz = $_POST["soyadiniz"];
    $cinsiyetiniz = $_POST["cinsiyetiniz"];
    $sehiriniz = $_POST["sehiriniz"];
    $numaraniz = $_POST["numaraniz"];
    $emailiniz = $_POST["emailiniz"];
    $universite = $_POST["universite"];
    $diller = $_POST["diller"];
    $ozet = $_POST["ozet"];
    $mesajiniz = $_POST["mesajiniz"];

    echo "<h3>Girdiğiniz Bilgiler:</h3>";
    echo "<p><strong>Adınız:</strong> $adiniz</p>";
    echo "<p><strong>Soyadınız:</strong> $soyadiniz</p>";
    echo "<p><strong>Cinsiyetiniz:</strong> $cinsiyetiniz</p>";
    echo "<p><strong>Şehiriniz:</strong> $sehiriniz</p>";
    echo "<p><strong>Numaranız:</strong> $numaraniz</p>";
    echo "<p><strong>E-mailiniz:</strong> $emailiniz</p>";
    echo "<p><strong>Hangi Üniversitede Okuyorsunuz:</strong> $universite</p>";

    echo "<p><strong>Kullandığınız Diller:</strong> ";
    if (!empty($diller)) {
        foreach ($diller as $dil) {
            echo $dil . ", ";
        }
    } else {
        echo "Dil seçmediniz.";
    }
    echo "</p>";

    echo "<p><strong>Seçtiğiniz Dilleri Bir Cümle ile Özetleyiniz:</strong> $ozet</p>";
    echo "<p><strong>Mesajınız:</strong> $mesajiniz</p>";
}
?>
