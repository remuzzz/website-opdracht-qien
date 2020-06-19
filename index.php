<!DOCTYPE html>
<html lang=”nl”>

<head>
    
    <title>Qien Coding Institute</title>
    <link rel="stylesheet" href="css/styling.css">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>

</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <a class="nav-logo">
                        <span class="logo-first" onclick="location.href='index.php';" style="cursor:pointer;">Qien Coding</span>
                        <span class="logo-second">institute</span> 
                    </a>
                    
                    <ul class="nav-list">
                        <li class="nav-list-item"><a href="?pagina=html">HTML</a>
                            <ul class="nav-inner-list">
                                <li class="nav-inner-list-item"><a href="index.php?pagina=html#about">Wat is het?</a></li>
                                <li class="nav-inner-list-item"><a href="index.php?pagina=html#cursussen">Cursussen</a></li>
                                <li class="nav-inner-list-item"><a href="index.php?pagina=tabellen">Tabellen</a></li>
                            </ul>
                        </li>
                        <li class="nav-list-item"><a href="?pagina=html">CSS</a>
                            <ul class="nav-inner-list">
                                <li class="nav-inner-list-item">Wat is het?</li>
                                <li class="nav-inner-list-item">Cursussen</li>
                                <li class="nav-inner-list-item">Quizes</li>
                            </ul>
                        </li>
                        <li class="nav-list-item"><a href="?pagina=html">JS</a>
                            <ul class="nav-inner-list">
                                <li class="nav-inner-list-item">Wat is het?</li>
                                <li class="nav-inner-list-item">Cursussen</li>
                                <li class="nav-inner-list-item">Quizes</li>
                            </ul>
                        </li>
                        <li class="nav-list-item"><a href="?pagina=html">Quizes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <?php
         if(!isset($_GET["pagina"]))
    require_once("main.php");
elseif(isset($_GET["pagina"]) && file_exists($_GET["pagina"].".php"))
    require_once($_GET["pagina"].".php");
else
    echo "<section class=\"header-section\">
    <div class=\"container\" style=\"height:500px\"><h1>Fout:</h1> De opgevraagde pagina bestaat niet.</div></div>";
           ?>
    
    <footer>
        <div class="footer">
            <small>&#169; 2020 Maurice </small>
        </div>
    </footer>

</body>

</html>

