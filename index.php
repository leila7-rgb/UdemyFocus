<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UdemyFocus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="logo.png" alt="Udemyfocus">
        </div>
      <nav>
    <ul>

        <li class="dropdown">
            <a href="#">Trouvez des cours</a>

            <ul class="dropdown-menu">
                <li><a href="#">IA</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">C++</a></li>
                <li><a href="#">JS</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">HTML</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Machine Learning</a></li>
                <li><a href="#">Deep Learning</a></li>
                <li><a href="#">Cloud Computing</a></li>
                <li><a href="#">DevOps</a></li>
                <li><a href="#">SQL</a></li>
                <li><a href="#">UML</a></li>
                <li><a href="#">IoT</a></li>
                <li><a href="#">Web Services</a></li>
                <li><a href="#">Et bien plus...</a></li>
            </ul>

        </li>

        <li class="dropdown">
            <a href="#">Enseigner sur Udemy</a>

            <div class="dropdown-box-enseigner">
                <p>
                    Transformez vos connaissances en véritable opportunité
                    et touchez des millions de personnes du monde entier.
                </p>

                <button class="btn-savoir-plus">
                    En savoir plus
                </button>
            </div>
        </li>

        <li>
            <a href="#">S'abonner</a>
        </li>

        <li>
            <a href="#" id="contactBtn">Contact</a>
        </li>

    </ul>
</nav>
        <div class="search-bar">
            <input type="text" placeholder="Que souhaitez-vous apprendre ?">
        </div>
        <div class="auth">

<?php if(isset($_SESSION['user_id'])): ?>

    <span>Bonjour <?php echo $_SESSION['user_name']; ?></span>

    <a href="save.php?logout=1">
        <button type="button">Déconnexion</button>
    </a>

<?php else: ?>

    <button id="loginBtn">Connexion</button>
    <button id="signupBtn">Inscription</button>

<?php endif; ?>

</div>

</div>
    </header>
    

    <section class="hero">
        <h1>Apprenez les compétences qui feront avancer votre carrière</h1>
        <p>Des milliers de cours pour la programmation</p>
        <button>Commencer maintenant</button>
    </section>
    <section class="courses">
    <h1 data-i18n="welcome_title">Bienvenue sur UdemyFocus</h1>
    <h2 data-i18n="section_title">Nos Cours</h2>
     <div class="slider">
    <button class="prev">❮</button>
    <div class="slider-container">
      <div class="course-card"> <h3>IA</h3>
            <a href="https://youtu.be/Oi_sweaa0EE?si=xrRTMBrStH3JSJsH">Voir le cours</a></div>
      <div class="course-card"><h3>Python Full Course for Beginners</h3>
            <a href="https://youtu.be/K5KVEU3aaeQ?si=8O2UoUhLGa-0K0G-">Voir le cours</a></div>
      <div class="course-card"> <h3>Tutoriel C++ pour débutants : apprenez le C++ en 1 heure</h3>
            <a href="https://youtu.be/ZzaPdXTrSb8?si=74NsyvCWIJ8NLaHp">Voir le cours</a></div>
      <div class="course-card"><h3>JavaScript pour débutants</h3>
                <a href="https://youtu.be/Ihy0QziLDf0?si=4jG9E4NC9GzoE-F9">Voir le cours</a> </div>
      <div class="course-card"><h3>Apprendre le CSS en JUSTE 5 minutes</h3>
            <a href="https://youtu.be/_nPOTl-I4cM?si=ehYsFPUOtgn1ppQv">Voir le cours</a></div>
      <div class="course-card">  <h3>HTML Tutorial for Beginners: HTML Crash Course</h3>
                <a href="https://youtu.be/qz0aGYrrlhU?si=71mxgtilpTb-KMVZ">Voir le cours</a> </div>
      <div class="course-card">  <h3>Cours complet de PHP gratuit </h3>
                <a href="https://youtu.be/zZ6vybT1HQs?si=K-W0U-3gNUjBFW3h">Voir le cours</a> </div>
      <div class="course-card">  <h3>Essential Machine Learning and AI Concepts Animated</h3>
                <a href="https://youtu.be/PcbuKRNtCUc?si=9zqb0a-Hv0wzUrNu">Voir le cours</a> </div>
      <div class="course-card">  <h3>FORMATION DEEP LEARNING COMPLETE (2021)</h3>
                <a href="https://youtu.be/XUFLq6dKQok?si=2P4hFSm-0I_ikt1f">Voir le cours</a> </div>
      
    </div>
    <button class="next">❯</button>
  </div>


   <div class="slider">
    <button class="prev">❮</button>
    <div class="slider-container">
      <div class="course-card"><h3>Formation Développeur Android - Introduction au Développement Mobile</h3>
            <a href="https://youtu.be/35Bb2hJIKKg?si=BNe-fzB_TYh7kcjC">Voir le cours</a></div>
      <div class="course-card"><h3> Cloud Computing Explained</h3>
            <a href="https://youtu.be/M988_fsOSWo?si=ibMZvtIIhNFRCwKi">Voir le cours</a></div>
      <div class="course-card"><h3>DevOps Explained</h3>
            <a href="https://youtu.be/Xrgk023l4lI?si=g3_pNSsK2jOLUq4e">Voir le cours</a></div>
      <div class="course-card"><h3>SQL avancé</h3>
            <a href="https://youtu.be/FeBzyiOPF0Y?si=HvFdrNfKcUZ3oKwF">Voir le cours</a></div>
      <div class="course-card"><h3>UML</h3>
            <a href="https://youtu.be/4emxjxonNRI?si=rH0UpDrouvNlPMaz">Voir le cours</a></div>
      <div class="course-card"><h3>Internet des Objets (IoT)</h3>
            <a href="https://youtu.be/64jCRpCEC2g?si=fhhIdAvqaOd7jjuB">Voir le cours</a></div>
      <div class="course-card"><h3>Web servuces REST</h3>
            <a href="https://youtu.be/-mN3VyJuCjM?si=SaNE6mgfX-ciCaDA">Voir le cours</a></div>
    
    </div>
    <button class="next">❯</button>
  </div>

</section>
    <footer>
        <div class="footer-left">
            <img src="logo.png" alt="Logo Udemy Style">
        </div>
        <div class="footer-center">
            © 2026 UdemyFocus, Inc.
        </div>
        <div class="footer-right">
            <span style="font-size:18px;">🌐</span>
            <label for="lang">Choisir la langue :</label>
            <select id="lang">
                <option value="fr">Français</option>
                <option value="en">English</option>
                <option value="ar">العربية</option>
            </select>
        </div>
    </footer>


    
    <div id="loginModal" class="auth-modal">
    <div class="auth-modal-content">
        <span class="close-auth" id="closeLogin">&times;</span>
        <h2>Connexion </h2>
        <p>Connectez-vous à votre compte UdemyFocus</p>
        
        <form action="save.php" method="POST">
            <input type="hidden" name="action_login" value="1">
            <div class="auth-group">
                <label>Adresse Émail :</label>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="auth-group">
                <label>Mot de passe :</label>
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn-auth-submit">Se connecter</button>
        </form>
    </div>
</div>

<div id="signupModal" class="auth-modal">
    <div class="auth-modal-content">
        <span class="close-auth" id="closeSignup">&times;</span>
        <h2>Inscription </h2>
        <p>Créez un compte et commencez à apprendre</p>
        
       <form action="save.php" method="POST">
            <input type="hidden" name="action_signup" value="1">
            <div class="auth-group">
                <label>Nom complet :</label>
                <input type="text" name="nom_complet" placeholder="Nom et Prénom" required>
            </div>
            <div class="auth-group">
                <label>Adresse Émail :</label>
                <input type="email" name="email" placeholder="E-mail" required>
            </div>
            <div class="auth-group">
                <label>Mot de passe :</label>
                <input type="password" name="password" placeholder="Créer un mot de passe" required>
            </div>
            <button type="submit" class="btn-auth-submit">S'inscrire</button>
        </form>
    </div>
</div>

<div id="contactModal" class="auth-modal">
  <div class="auth-modal-content">
    
    <span class="close-auth" id="closeContact">&times;</span>

    <h2>Contact</h2>
    <p>Envoyez-nous un message</p>

    <form action="save.php" method="POST">
        <input type="hidden" name="action_contact" value="1">
      <div class="auth-group">
        <label>Nom :</label>
        <input type="text" name="nom" placeholder="Votre nom" required>
      </div>

      <div class="auth-group">
        <label>Email :</label>
        <input type="email" name="email" placeholder="Votre email" required>
      </div>

      <div class="auth-group">
        <label>Message :</label>
        <textarea name="msg" placeholder="Votre message" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn-auth-submit">Envoyer</button>
    </form>

  </div>
</div>    
    <script src="script.js"></script>
</body>
</html>