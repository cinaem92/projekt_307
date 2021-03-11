<?php
function build($page)
{
?>

    <!DOCTYPE html>
    <html lang="de">

    <head>
        <title>Vermittlung vereint</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/style_mobile.css">
        <link rel="stylesheet" href="./css/mybootstrap.css">
        <script src="./js/script.js"></script>
        <script src='./js/jquery-3.5.1.min.js'></script>

        <?php
        require_once './sql/database.php';
        ?>

    </head>

    <body>
        <header>
            <?php require_once 'header.php'; ?>
            <script>
                window.onload = setNavActive();
            </script>
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
