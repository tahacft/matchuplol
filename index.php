<!DOCTYPE html>
<html>
<head>
    <title>Matchuplol.com | Lol Matchups , Runes , İtems</title>
    
        <link rel="stylesheet" href="./style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap.min.css">
        <meta name="description" content="Matchuplol.com | Lol matchups , lol runes, lol items, probuilds, lol matchups tips , lol matchup tricks and more..">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8093133993636441"
     crossorigin="anonymous"></script>
                
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-YRGQWTJSB1"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                
                  gtag('config', 'G-YRGQWTJSB1');
                </script>





</head>
<body>

    <?php require "navbar.php"; ?>
    <?php require "reklam.php"; ?>
    
    <div class="container">
    <div id="sayfa-icerigi">
    <h1>Choose For Matchups</h1>
    <form action="sonuc.php" method="post">
        <h3>Please Choose 2 Champion:</h3>
        <label for="resim1">
        <input type="checkbox" id="resim1" name="resim[]" value="aatrox" value="aatrox" style="display:none;">
        <img src="img/aatrox.jpg" alt="Resim 1" width="100" height="100" class="img-fluid">
            
        </label>
        <label for="resim2">
        <input type="checkbox" id="resim2" name="resim[]" value="ahri" style="display:none;">
            <img src="img/ahri.jpg" alt="Resim 2" width="100" height="100" class="img-fluid">
            
        </label>
        <label for="resim3">
            <input type="checkbox" id="resim3" name="resim[]" value="akali" style="display:none;">
            <img src="img/akali.jpg" alt="Resim 3" width="100" height="100" class="img-fluid">
        </label>
        <label for="resim4">
            <input type="checkbox" id="resim4" name="resim[]" value="akshan" style="display:none;">
            <img src="img/akshan.jpg" alt="Resim 4" width="100" height="100" class="img-fluid">
        </label>
        <label for="resim5">
            <input type="checkbox" id="resim5" name="resim[]" value="alistar" style="display:none;">
            <img src="img/alistar.jpg" alt="Resim 5" width="100" height="100" class="img-fluid">

        </label>
        <br>
        <button class="btn btn-primary"type="submit">Gönder</button>
    </form>
    </div>
    </div>



   

    
    <div id="bottom">

    <?php require "footer.php"; ?>
        
    </div>
</body>
</html>

