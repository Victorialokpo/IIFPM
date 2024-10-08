<?php include ('layout/header.php') ; ?>


<section class="hero">
            <div class="carousel">
                <div class="slide active">
                    <img class="img-carousel" src="image medicales/iifpm.jpeg" alt="image 1">
                </div>
                <div class="hero-text-about">
                    <h1><strong>ACTUALITES</strong></h1>
                <a href="../index.php">Acceuil</a> <span class="separator">|</span> <span class="curent-page">Actualités</span>
                </div>
            </div>
        </section>

<section class="latest-news">
    <h2>Nos actualités</h2>
    <div class="news-container">
        <div class="news-card">
        <h2>Témoignage d'un ancien diplômé</h2>
            <p><strong>Date :</strong> 1er Septembre 2024</p>
            <p>Découvrez le parcours de Marie, ancienne diplômée de notre formation de technicienne pharmaceutique, qui a réussi à décrocher un poste dans une grande pharmacie.</p>
            <a href="article.php?id=1" class="btn">Lire plus</a>
        </div>

        <div class="news-card">
            <h2>Lancement de notre nouvelle formation en gestion des stocks médicaux</h2>
            <p><strong>Date :</strong> 25 Août 2024</p>
            <p>Nous avons le plaisir de vous annoncer le lancement de notre toute nouvelle formation en gestion des stocks médicaux, destinée à répondre aux besoins des professionnels en pharmacie.</p>
            <a href="article.php?id=2" class="btn">Lire plus</a>
        </div>
    </div>
</section>

<section class="news-filters">
    <h2>Filtrer les actualités</h2>
    <form method="GET" action="news.php">
        <label for="category">Catégorie :</label>
        <select name="category" id="category">
            <option value="all">Toutes</option>
            <option value="education">Éducation</option>
            <option value="health">Santé</option>
            <option value="events">Événements</option>
        </select>

        <label for="date">Date :</label>
        <input type="date" name="date" id="date">
        
        <button type="submit" class="btn">Filtrer</button>
    </form>
</section>

<section class="featured-news">
    <h2>À la une</h2>
    <h2>Portes ouvertes de l'IFPM</h2>
            <p><strong>Date :</strong> 12 Octobre 2024</p>
            <p>L’IFPM a organisé une journée portes ouvertes où les futurs étudiants ont pu découvrir nos programmes de formation, rencontrer nos formateurs, et visiter nos installations.</p>
    </div>
</section>

<section class="newsletter">
    <h2>Inscrivez-vous maintenant!</h2>
    <p>Devenez un professionnel de la santé et participez à un avenir meilleur pour vous et votre communauté. Inscrivez-vous à l’Institut dès maintenant !
    </p>
    <form method="POST" action="newsletter.php">
        <input type="email" name="email" placeholder="Votre adresse email" required>
        <button type="submit" class="btn">S'abonner</button>
    </form>
</section>

<?php include ('layout/footer.php') ; ?>