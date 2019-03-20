<?php
//link stock and collect and print data 
include "./include/stock.php";
include "./include/collect-and-print-data.php";

//check if the user click on the link 
$selectedItems = [];
if(sizeof($_GET) > 0){
    for($i = 0; $i < sizeof($products); $i++){
        if(isset($_GET['data-prod']) && $_GET['data-prod'] === $products[$i]['code']){
            array_push($selectedItems, $products[$i]);
        }
    }

}

$markup = null;
if(sizeof($selectedItems > 0)){
      for($a = 0; $a < sizeof($selectedItems); $a++) {
        $markup .= "<figure>
                        <img src=\"{$selectedItems[$a]["thumbnail"]}\" alt=\"{$selectedItems[$a]["type"]}\">
                        <figcaption>
                            <ul>
                                <li>Number: {$selectedItems[$a]["number"]}</li>
                                <li>Price: {$selectedItems[$a]["price"]}</li>
                            </ul>
                        </figcaption>
                    </figure>";
    } 
} else {
    for($c = 0; $c < sizeof($products); $c++) {
        $markup .= "<figure>
                        <img src=\"{$products[$b]["thumbnail"]}\" alt=\"{$products[$b]["type"]}\">
                        <figcaption>
                            <ul>
                                <li>Number: {$products[$b]["number"]}</li>
                                <li>Price: {$products[$b]["price"]}</li>
                            </ul>
                        </figcaption>
                    </figure>";
    }
}
 
                        
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Midterm - PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Anton|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Great+Vibes" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css">  
        <link rel="stylesheet" href="css/style.css">  
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="intro">
                    <img src="img/intro.jpg" alt="jason's house">
                    <div class="hambuger-bar">
                        <div class="bar-1"></div>
                        <div class="bar-2"></div>
                        <div class="bar-3"></div>
                    </div>
                    <div class="mob-nav">
                        <nav>
                            <ul>
                                <li><a id="red" href="index.php">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a class="drop-down" href="./store.php">Products <i class="fas fa-arrow-circle-down"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="line-mob"></div>
                    <div class="select-product">
                        <nav>
                            <ul>
                                <li><a href="./index.php?data-prod=shoes">Shoes</a></li>
                                <li><a href="./index.php?data-prod=s">Shocks</a></li>
                                <li><a href="./index.php?data-prod=h">Hats</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="logo" alt="jason's house">
                        <img src="img/logo.png">
                    </div>
                    <div class="call-to-action">
                        <a href="#">Purchase</a>
                    </div>
                </div>
            </header>
            <section>
                <div class="feedback">
                    <div class="feedback-wrapper">
                        <h1>What customers talked about us</h1>
                        <div class="feedaback-icon">
                            <div class="feedaback-icon-col-1">
                                <i class="fas fa-leaf"></i>
                                <p>Evironmental friendly</p>
                            </div>
                            <div class="feedaback-icon-col-2">
                                <i class="fas fa-thumbs-up"></i>
                                <p>High quality</p>
                            </div>
                            <div class="feedaback-icon-col-3">
                                <i class="fas fa-hand-holding-usd"></i>
                                <p>Affordability</p>
                            </div>
                        </div>
                        <div class="see-more">
                            <div class="see-more-linetop"></div>
                            <a href="#">See more</a>
                            <div class="see-more-linebottom"></div>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="product-content">
                    <h1>Products</h1>
                   <?php
                    if(isset($markup)){
                        echo $markup;
                     }
                ?>
                
                    </div>
                    
                </div>
                <div class="promotion">
                    <div class="promotion-content">
                        <h1>Sale Of 50%</h1>
                        <p>For The First Purchase</p>
                        <a href="#">Take me in</a>
                    </div>
                    
                </div>
                <footer>
                    <div class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                    </div>
                </footer>
            </section>
















            
         </div>  
         <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script> 
       <script src="js/main.js"></script>
    </body>
</html>
