<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario;
ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti. -->

<?php
require_once __DIR__ . '/Phone.php';
require_once __DIR__ . '/Television.php';
require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/User.php';

$iphone13 = new Phone('Iphone', '13', 1180, 7, 143265);
$iphone13->category = 'Phone';
$iphone13->memory_in_gb = 128;
// var_dump($iphone13);


$hisense_oled = new Television('Hisense', 'AR45642', 899, 55, 149482);
$hisense_oled->category = 'Tv';
$hisense_oled->type_of_screen = 'Oled';
// var_dump($hisense_oled);

try {
    $lenovo_legion = new Computer('Lenovo', 'Legion', 2500, 16, 134928, 'AMD Ryzen 5');
} catch(Exception $e) {

    error_log($e);

    echo '<div style="text-align: center;">Il Server è attualmente in manutenzione, riprova più tardi.</div>';
    die();
}
$lenovo_legion->category = 'Laptop';
$lenovo_legion->video_board = 'AMD Radeon RX 6600M';
// var_dump($lenovo_legion);

$michael = new User('Michael', 'Scarantino', 'michael.scarantino@email.it');
$michael->addProduct($iphone13);
$michael->addProduct($hisense_oled);
$michael->addProduct($lenovo_legion);
$michael_shopping_cart = $michael->getShoppingCart();
// var_dump($michael_shopping_cart);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
</head>
<body>
    <h2>Benvenuto <?php echo $michael->getFullName(); ?></h2>
    <!-- Shopping cart -->
    <div class="shopping-cart">
        <h3>Il tuo carrello:</h3>
        <?php foreach($michael_shopping_cart as $single_product) { ?>
            <!-- Single product -->
            <div class="single-product">
                <!-- Product name -->
                <div class="product-name">
                    <h4>Nome prodotto: <?php echo $single_product->brand . ' ' . $single_product->model;?></h4>
                </div>
                <!-- Product price -->
                <div class="product-price">
                    Prezzo: <?php echo $single_product->price;?> €
                </div>
                <!-- Inches screen -->
                <div class="inches-screen">
                    Pollici: <?php echo $single_product->inches_screen;?>
                </div>
                <!-- if a variable "$memory_in_gb" is declared and is different than null -->
                <?php if(isset($single_product->memory_in_gb)) { ?>
                    <!-- Type of screen -->
                    <div class="type-of-screen">
                        Memoria: <?php echo $single_product->memory_in_gb;?> GB
                    </div>
                <?php }; ?>
                <!-- if a variable "$type_of_screen" is declared and is different than null -->
                <?php if(isset($single_product->type_of_screen)) { ?>
                    <!-- Type of screen -->
                    <div class="type-of-screen">
                        Tipo di schermo: <?php echo $single_product->type_of_screen;?>
                    </div>
                <?php }; ?>
                <!-- if a variable "$processor" is declared and is different than null -->
                <?php if(isset($single_product->processor)) { ?>
                    <!-- Processor -->
                    <div class="processor">
                        Processore: <?php echo $single_product->processor;?>
                    </div>
                <?php }; ?>
                <!-- if a variable "$video_board" is declared and is different than null -->
                <?php if(isset($single_product->video_board)) { ?>
                    <!-- Video board -->
                    <div class="video-board">
                        Scheda video: <?php echo $single_product->video_board;?>
                    </div>
                <?php }; ?>
            </div>
        <?php }; ?>
    </div>
</body>
</html>