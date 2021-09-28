<!doctype html>
<html>

<head>
    <title> &copy; Theater 't Kapelletje</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../CLE3/home.css">
</head>

<body>

<header>
    <div id= "logo"> <img src="https://theaterkapelletje.nl/wp-content/uploads/2018/08/cropped-logo-kapelletje-2018-def_307x70-1.png" width="170"  height="32" class="midden"> </div>
    <nav>
        <div id="emptyspace"></div>
        <div id="navi"><a href="home.php">HOME</a></div>
        <div id="navi"><a href="https://theaterkapelletje.nl/contact/">OVER ONS</a></div>
        <div id="navi"><a href="https://theaterkapelletje.nl/familie/">STEUN ONS</a></div>
    </nav>
</header>

<div class="midden">
    <div class="center">
        <h2> Wonder Lights</h2>
        <p class="p1">Het zijn moeilijke tijden door de pandemie dat er speelt. Nederland kan wel een wonder gebruiken. Daarom introduceren wij U de Wonder Lights! Raak de lamp aan en laat andere mensen weten dat jij er ook bent. Maak een account en connect met mensen door de QR code te scannen onder aan de lamp. Bezoek verschillende kamers en geniet van de artistieke wonderen samen met derest van Nederland! </p>
    </div>

    <div class="extra">
    <h3 id="reg">Registratie</h3>
    <div>
        <form id="form" action="<?= htmlspecialchars($_SERVER['REQUEST_URI']); ?>" method="post" enctype="multipart/form-data">
            <div class="data-field">
                <label for="Username"></label>
                <input id="username" type="text" placeholder="Username"  name="naam" value="<?= (isset($username) ? $username : ''); ?>" />
                <span><?= (isset($errors['Uw Naam']) ? $errors['Uw Naam'] : '') ?></span><br>
                <label for="Leeftijd"></label>
                <input id="age" type="text" placeholder="Leeftijd" name="telefoonnummer" value="<?= (isset($age) ? $age : ''); ?>" required/>
            </div>
        </form>
        <div class="data-submit">
            <form action="rooms.php">
                <input type="submit" class="btn" value="Doe mee!"/>
            </form>
        </div>
        </div>
    </div>
</div>

<footer>
    <p class="p2">© 2021 Theater 't Kapelletje
        <br>
        Van der Sluysstraat 176 - 3033 SR Rotterdam</p>
</footer>

</body>
</html>