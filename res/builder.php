<?php
function build($page)
{
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Vermittlung vereint</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/style_mobile.css">
        <script type="text/javascript" src="./js/script.js"></script>  
    </head>

    <body>
        <header>
            <?php require_once 'header.php'; ?>
            <script> window.onload=setNavActive </script>
        </header>
        <div class="container">
            <div></div>
            <main>
                <?php require_once './views/' . $page; ?>

            </main>
            <div></div>
        </div>
        <footer>
            <?php require_once 'footer.php'; ?>
        </footer>

    </html>

<?php
}
?>