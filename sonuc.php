<?php
// Seçilen resimlerin sayısını kontrol etme
if (isset($_POST['resim']) && count($_POST['resim']) == 2) {
    // Seçilen resimlerin değerlerini alıp sonuca yönlendirme
    $resim1 = $_POST['resim'][0];
    $resim2 = $_POST['resim'][1];
    $yeni_url = $resim1 . 'vs' . $resim2 . '.php'; // Yeni URL'yi oluşturma
    header("Location: $yeni_url");
    exit();
} else {
    // Eğer 2 resim seçilmemişse hata sayfasına yönlendirme
    header("Location: hata.php");
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Champion Select Results</title>
</head>
<body>
    <h1>champions of your choice:</h1>
    <?php
    // Sonuç sayfasında seçilen resimleri görüntüleme
    $resim1 = $_GET['resim1'];
    $resim2 = $_GET['resim2'];
    echo "<img src='$resim1' alt='Resim 1' width='200' height='200'>
    <img src='$resim2' alt='Resim 2' width='200' height='200'>";

    // Seçilen resimlere göre yönlendirme
    if (!empty($resim1) && !empty($resim2)) {
        // Resim 1 ve Resim 2 dolu ise
        header("Location: $resim1vs$resim2.php");
        exit();
    } else {
        // Hata sayfasına yönlendirme
        header("Location: hata.php");
        exit();
    }
    ?>
</body>
</html>
