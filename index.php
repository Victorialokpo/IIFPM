<?php
    include "layout/header.php";
?>

<div class="container">
        <section class="hero">
                <div class="carousel">
                    <div class="slides">
                      <div class="slide active">
                <img class="img-carousel" src="images/photo ong.jpeg" alt="image 1">
                      </div>

                      <div class="slide">
                        <img class="img-carousel" src="images/solidaires.jpg" alt="Image 2">
                      </div>

                      <div class="slide">
                        <img class="img-carousel" src="images/ong 2.jpg" alt="Image 3">
                      </div>
                </div>
               </div>

            <div class="hero-text">
                <h1>Aidez, c'est notre mission</h1>
                <p>Rejoignez notre cause pour aider des milliers d'enfants à grandir dans l'amour et la sécurité.</p>
                <a href="#donate" class="btn">Faire un don</a>
            </div>
        </section>

        <section class="action">
            <h2>Nos Actions</h2>
            <div class="action-cards">
                <div class="action-card">
                    <img src="images/repas website.jpeg" alt="programme cantine scolaire">
                    <h3>Programme Nutritionnel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ratione neque dolor quidem esse at, quibusdam voluptatibus voluptate, dolore ducimus maxime quod error eaque ut eum veritatis, quos vero dolores.</p>
                     <a href="#nutrition" class="btn">En savoir plus</a>
                </div>

                <div class="action-card">
                    <img src="images/images (1).jpeg" alt="Soutien psychologique">
                    <h3>Soutien Psychologique</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores tempora necessitatibus expedita odit, corporis dolorem porro, reprehenderit ducimus sit quidem non recusandae dolor fugit! Eius error alias dolore adipisci. Magnam.</p>
                    <a href="#psychology" class="btn">En savoir plus</a>
                  </div>

                  <div class="action-card">
                    <img src="images/edcuc.jpeg" alt="programme d'education">
                    <h3>Soutien Psychologique</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo autem ad provident maxime et perferendis eos, placeat suscipit ratione ullam facere accusamus delectus recusandae laborum ab tempore minus repudiandae alias.</p>
                    <a href="#education" class="btn">En savoir plus</a>
                  </div>
               </div>
        </section>

        <section class="testimonials">
    <h2>Temoignages</h2>
    <div class="testimonial-carousel">
        <!-- Conteneur des slides -->
        <div class="slides">
            <!-- Carte de témoignage 1 -->
            <article class="testimonial-card">
                <img src="images/istockphoto-1389348844-612x612.jpg" alt="Photo de Jane Doe">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                <h4>Jane Doe</h4>
            </article>

            <!-- Carte de témoignage 2 -->
            <article class="testimonial-card">
                <img src="images/istockphoto-1171169099-612x612.jpg" alt="Photo de John Smith">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                <h4>John Smith</h4>
            </article>

            <!-- Carte de témoignage 3 -->
            <article class="testimonial-card">
                <img src="images/positive-african-man-beard-looks-260nw-2087618245.webp" alt="Photo de témoignage">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                <h4>Unknown</h4>
            </article>

            <!-- Carte de témoignage 4 -->
            <article class="testimonial-card">
                <img src="images/femme.jpeg" alt="Photo de témoignage">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                <h4>Unknown</h4>
            </article>

            <!-- Carte de témoignage 5 -->
            <article class="testimonial-card">
                <img src="images/ong3.jpg" alt="Photo de témoignage">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit...</p>
                <h4>Unknown</h4>
            </article>
        </div>

        <!-- Contrôles du carrousel -->
        <div class="carousel-controls">
            <button class="prev" aria-label="Témoignage précédent">❮</button>
            <button class="next" aria-label="Témoignage suivant">❯</button>
        </div>
    </div>
</section>



        <section class="partenaires">
            <h2>Nos partenaires</h2>
            <div class="partners-logos">
                <img src="/" alt="logo partnaire 1">
                <img src="/" alt="logo partnaire 2">
                <img src="/" alt="logo partenaire 3">
            </div>
        </section>

        <section class="cta-newletter">
            <h2>Restez informé</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime dicta deleniti temporibus dolorem at? Consequatur cumque incidunt, quos, est obcaecati facere nihil quae odio non dicta mollitia doloremque! Unde, voluptatem.*</p>
            <form>
                <input type="Email" placeholder="Entrez votre email" required>
                <button type="submit" class="btn">S'inscrire</button>
            </form>
        </section>
</div>

<script src="js/main.js"></script>

    <?php
    include "layout/footer.php";
    ?>