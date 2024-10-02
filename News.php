<?php include ('layout/header.php') ; ?>


<section class="hero">
            <div class="carousel">
                <div class="slide active">
                    <img class="img-carousel" src="images/photo ong.jpeg" alt="image 1">
                </div>
                <div class="hero-text-about">
                    <h1><strong>ACTUALITES</strong></h1>
                <a href="../index.php">Acceuil</a> <span class="separator">|</span> <span class="curent-page">Actualités</span>
                </div>
            </div>
        </section>

<section class="latest-news">
    <h2>Dernières actualités</h2>
    <div class="news-container">
        <div class="news-card">
            <h3>Nouvelle initiative pour l'éducation des orphelins</h3>
            <p><strong>Date :</strong> 10 octobre 2024</p>
            <p>Nous lançons un nouveau programme pour soutenir l'éducation des enfants orphelins en milieu rural...</p>
            <a href="article.php?id=1" class="btn">Lire plus</a>
        </div>

        <div class="news-card">
            <h3>Rentré scolaire</h3>
            <p><strong>Date :</strong> 20 octobre 2024</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus, odit dolor debitis eaque architecto eligendi officiis aliquid dignissimos maxime quia in commodi libero accusantium magnam amet sunt, corporis ullam minus?</p>
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
    <div class="featured-news-card">
        <img src="featured-news.jpg" alt="Nouvelle en vedette">
        <h3>Le succès de notre dernier projet éducatif</h3>
        <p>Grâce à votre soutien, nous avons réussi à construire une nouvelle école pour les orphelins dans une région isolée...</p>
        <a href="article.php?id=3" class="btn">Lire plus</a>
    </div>
</section>

<section class="newsletter">
    <h2>Inscrivez-vous à notre newsletter</h2>
    <p>Recevez nos dernières actualités et soyez les premiers informés de nos projets et événements.</p>
    <form method="POST" action="newsletter.php">
        <input type="email" name="email" placeholder="Votre adresse email" required>
        <button type="submit" class="btn">S'abonner</button>
    </form>
</section>

<?php include ('layout/footer.php') ; ?>