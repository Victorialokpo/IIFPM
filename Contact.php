<?php include ('layout/header.php') ; ?>


<section class="hero">
            <div class="carousel">
                <div class="slide active">
                    <img class="img-carousel" src="images/photo ong.jpeg" alt="image 1">
                </div>
                <div class="hero-text-about">
                    <h1><strong>NOUS CONTACTEZ</strong></h1>
                <a href="../index.php">Acceuil</a> <span class="separator">|</span> <span class="curent-page">Contact</span>
                </div>
            </div>
        </section>

<section class="contact-form">
    <h2>Envoyez-nous un message</h2>
    <form action="contact-process.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Objet :</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn">Envoyer</button>
    </form>
</section>

<section class="contact-info">
    <h2>Nos coordonnées</h2>
    <p><strong>Adresse :</strong> Rue des Orphelins, Abidjan, Côte d'Ivoire</p>
    <p><strong>Téléphone :</strong> +225 01 02 03 04 05</p>
    <p><strong>Email :</strong> contact@ong.org</p>
    <p><strong>Horaires :</strong> Lundi - Vendredi : 9h00 - 18h00</p>
</section>

<section class="contact-map">
    <h2>Nous trouver</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.879531405501!2d-3.984751985126482!3d5.347472396016465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTLCsDIwJzUwLjYiTiAzwrA1OSczMy4xIlc!5e0!3m2!1sen!2sci!4v1648478446948!5m2!1sen!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<section class="contact-social">
    <h2>Suivez-nous sur les réseaux sociaux</h2>
    <a href="https://www.facebook.com/ong" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
    <a href="https://twitter.com/ong" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
    <a href="https://www.instagram.com/ong" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
</section>

<?php include ('layout/footer.php') ; ?>