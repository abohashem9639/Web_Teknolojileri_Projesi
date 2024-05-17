<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h3 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adiniz = $_POST["adiniz"];
    $soyadiniz = $_POST["soyadiniz"];
    $cinsiyetiniz = $_POST["cinsiyetiniz"];
    $sehiriniz = $_POST["sehiriniz"];
    $numaraniz = $_POST["numaraniz"];
    $emailiniz = $_POST["emailiniz"];
    $universite = $_POST["universite"];
    $diller = isset($_POST["diller"]) ? $_POST["diller"] : [];
    $ozet = $_POST["ozet"];
    $mesajiniz = $_POST["mesajiniz"];

    echo "<h3>Girdiğiniz Bilgiler:</h3>";
    echo "<table>";
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
</body>
</html>
