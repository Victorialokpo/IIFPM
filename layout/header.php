<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFPM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/action.css">
    <link rel="stylesheet" href="../css/causes.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/engager.css">
    <link rel="stylesheet" href="../css/events.css">
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/index-testimonial.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="/" alt="website logo">
        </div>
        <nav class="navbar">
            <ul class="nav-content">
            <li class="close-menu">
                <span class="close-btn" onclick="toggleMenu()">&times;</span> <!-- Icône de fermeture -->
            </li>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../about.php">A propos</a></li> <!-- Fermeture manquante ajoutée -->
                <li><a href="../action.php">Nos formations</a></li>
                <!--li><a href="../Causes.php">Causes</a></li-->
                <!--li><a href="../engager.php">S'engager</a></li-->

                <!-- Décommenter le menu déroulant si nécessaire -->
                <!--
                <ul class="dropdown">
                    <li><a href="#volunteers">Devenir bénévole</a></li>
                    <li><a href="#Donate" class="donate-btn">Faire un don</a></li>
                </ul>
                -->

                <!--li><a href="../Events.php">Evenements</a></li-->
                <li><a href="../News.php">Actualités</a></li>
                <li><a href="../Contact.php">Nous contacter</a></li> <!-- Orthographe corrigée -->
            </ul>
        </nav>
        <div class="hamburger" onclick="toggleMenu()">&#9776;</div>
    </header>

    <script>
function toggleMenu() {
    const navContent = document.querySelector('.nav-content');
    const mainContent = document.querySelector('.main-content');
    const header = document.querySelector('header');

    // Basculer l'état actif du menu et du contenu principal
    navContent.classList.toggle('active');
    mainContent.classList.toggle('active');
    header.classList.toggle('active');
}
</script>



</body>
</html>
