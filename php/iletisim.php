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
    echo "<table border='1' style='width: 100%;'>";
    echo "<tr><th>Alan</th><th>Bilgi</th></tr>";
    echo "<tr><td>Adınız</td><td>$adiniz</td></tr>";
    echo "<tr><td>Soyadınız</td><td>$soyadiniz</td></tr>";
    echo "<tr><td>Cinsiyetiniz</td><td>$cinsiyetiniz</td></tr>";
    echo "<tr><td>Şehiriniz</td><td>$sehiriniz</td></tr>";
    echo "<tr><td>Numaranız</td><td>$numaraniz</td></tr>";
    echo "<tr><td>E-mailiniz</td><td>$emailiniz</td></tr>";
    echo "<tr><td>Hangi Üniversitede Okuyorsunuz</td><td>$universite</td></tr>";

    echo "<tr><td>Kullandığınız Diller</td><td>";
    if (!empty($diller)) {
        echo implode(", ", $diller);
    } else {
        echo "Dil seçmediniz.";
    }
    echo "</td></tr>";

    echo "<tr><td>Seçtiğiniz Dilleri Bir Cümle ile Özetleyiniz</td><td>$ozet</td></tr>";
    echo "<tr><td>Mesajınız</td><td>$mesajiniz</td></tr>";
    echo "</table>";
}
?>
