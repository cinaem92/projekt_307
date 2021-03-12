    <div class="header">
    </div>
    <div class="container blueBackground">
        <div></div>
        <div class="topnav" id="myTopnav">
            <a href="home">Home</a>
            <div class="dropdown">
                <a class="dropbtn" href="aktuellehunde">Aktuelle Hunde</a>
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-content">
                    <a href="aktuellehunde">Aktuelle Hunde</a>
                    <a href="vermittlung">Vermittlung</a>
                    <?php if (!empty($_SESSION['loggedin'])) { ?>
                        <a href="hundneu">Neuen Hund erfassen</a>
                    <?php } else { ?>
                        <a href="hundneu" style="display:none">Neuen Hund erfassen</a>
                    <?php } ?>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropbtn" href="ueberuns">Über uns</a>
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-content">
                    <a href="ueberuns">Über uns</a>
                    <a href="impressum">Impressum</a>
                    <a href="anfrage">Anfrage</a>
                </div>
            </div>
            <a href="galerie">Galerie</a>
            <div class="dropdown">
                <a class="dropbtn" href="login">Login</a>
                <i class="fa fa-caret-down"></i>
                <div class="dropdown-content">
                    <a href="login">Login</a>
                    <a href="registrierung">Registrierung</a>
                </div>
            </div>
            <?php if (!empty($_SESSION['loggedin'])) { ?>
                        <a href="logout">Logout</a>
                    <?php } else { ?>
                        <a href="logout" style="display:none">Logout</a>
                    <?php } ?>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="hamburgerMenu()">&#9776;</a>
        </div>
        <div></div>
    </div>