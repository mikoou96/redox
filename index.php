<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Redox PROD</title>
  <?php include 'head.php'; ?>
</head>
<body>
  <nav id="navbar">
    <ul>
      <li><a href="#home">Accueil</a></li>
      <li><a href="#presentation-anchor">Services</a></li>
      <li><a href="#team-anchor">Team</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Travaux   <span class="chevron"></span></a>
        <div class="dropdown-content">
          <a href="#projects">Vidéos</a>
          <a href="#web-anchor">Web design</a>
          <a href="#pics-anchor">Images</a>
        </div>
      </li>


      <li><a href="#contact-anchor">Contact</a></li>
    </ul>
  </nav>
  <section id="home" class="double-height">
    <div class="content">
      <img class="logo" src="./assets/images/home/logo_trans.png">
      <img class="logo-text" src="./assets/images/home/redox_text.png">
      <div class="bullet">
        <a href="https://www.instagram.com/redox_mikael/" target="_blank">
          <img src="./assets/images/home/instagram.png" >
        </a>
        <a href="https://vimeo.com/user65773366" target="_blank">
          <img src="./assets/images/home/vimeo.png" >
        </a>
        <a href="" target="_blank">
          <img src="./assets/images/home/youtube.png">
        </a>
      </div>
    </div>
  </section>
  <div id="presentation-anchor"></div> <!-- Ancre pour la navbar -->
  <section id="presentation" class="section-content">
    <section class="half-height">
    <h1>Services</h1>
    <section id="services" class="flex-box">
      <div class="skills">
        <img src="./assets/images/about/camera.png">
        <p>PHOTOGRAPHIE / VIDÉO<br>-<br>Nous nous occupons de la couverture photo et vidéo de vos événements.</p>
      </div>

       <div class="skills">
        <img src="./assets/images/about/clapperboard.png">
        <p>PUBLICITÉ VIDÉO<br>-<br>Que ce soit pour la promotion d'un produit, d'un événement, ou de votre organisation en général, nous nous occupons de la création de votre spot publicitaire de A à Z.</p>
      </div>
      <div class="skills">
        <img src="./assets/images/about/flyer.png">
        <p>CRÉATIONS GRAPHIQUES<br>-<br>Flyers, logo, booklet, ... La création graphique de vos futurs projets imprimés, afin d'atteindre votre public cible.</p>
      </div>
      <div class="skills">
        <img src="./assets/images/about/computer-graphic.png">
        <p>CRÉATION DE SITE WEB<br>-<br>Nous nous occupons de mettre à jour votre site internet, ou d'en créer un nouveau, selon vos besoins et budgets, en vous offrant toutes les dernières technologies web du moment.</p>
      </div>
    </section>
    </section>
    <section class="full-height" style="border-top:solid white 1px" id="team-anchor">
    <h1 style="text-align:right">Team</h1>
    <div align="center">
      <p style="text-align:justify;width:80%">Redox Prod: une petite équipe qui voit les choses en grand ! Le label rassemble trois étudiants en informatique et communication, mais qui sont avant tout de grands passionnés dans leurs domaines respectifs. Notre but est d'offrir un service de qualité, et à petit prix. Redox Prod offre à votre organisation un service très complet et tout à fait compétent par rapport à notre statut.<br><br>Notre équipe : </p>
  </div>
    <section id="team" class="flex-box">
      <div class="member"><img src="assets/images/team/mika.JPG"><p>MIKAËL RUFFIEUX<br>-<br>
      Vidéaste, graphiste et web-designer</p></div>
      <div class="member"><img src="assets/images/team/keran.jpg"><p>KERAN KOCHER<br>-<br>
      Photographe, front & back end programmeur</p></div>
      <div class="member"><img src="assets/images/team/blm.jpg"><p>BENOÎT LÉO MAILLARD<br>-<br>
      Back end programmeur</p></div>
    </section>
    </section>
  </section>

  <section id="projects-intro" class="full-height">
    <!--<div class="video-background" id="work">
      <video autoplay muted loop>
        <source src="./assets/videos/work.mp4" type="video/mp4">
      </video>
    </div>-->
    <div class="title">
      <h2>Travaux</h2>
    </div>
  </section>

  <section id="projects" class="section-content auto-height" style="margin-top:20vh">
    <h1>Projet le plus récent</h1>
    <div class="showreel">
      <iframe src="https://player.vimeo.com/video/267380360?portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <h1 class="right" id="video-anchor">Vidéos</h1>
    <section id="gallery-video" style="border-bottom:solid white 1px" class="flex-gallery">
      <div class="gallery-item">
        <a data-fancybox href="https://vimeo.com/266120847">
          <img src="./assets/images/projects/min_bullebox.png">
          <p>Bulle Box - Service de la Jeunesse</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://vimeo.com/247694127">
          <img src="./assets/images/projects/min_buda.png">
          <p>Sziget Festival 2017 - Budapest</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://vimeo.com/220195324">
          <img src="./assets/images/projects/min_dentdebroc.png">
          <p>Dent de Broc 2017</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://vimeo.com/214376110">
          <img src="./assets/images/projects/min_showreel16.png">
          <p>Showreel 2016</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://vimeo.com/214411319">
          <img src="./assets/images/projects/min_gym.png">
          <p>Soirée de gym 2016 - FSG Bulle</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://www.youtube.com/watch?v=AkiyKayBtD0">
          <img src="http://img.youtube.com/vi/AkiyKayBtD0/mqdefault.jpg">
          <p>Alpha Youth Training 2016</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://www.youtube.com/watch?v=iw9aRkh6fGE">
          <img src="http://img.youtube.com/vi/iw9aRkh6fGE/mqdefault.jpg">
          <p>Alpha Story - Christo</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://www.youtube.com/watch?v=4gGOsYrpLY4">
          <img src="assets/images/projects/min_SH.png">
          <p>Soirée humoristique 2016 - CSud</p>
        </a>
      </div>
      <div class="gallery-item">
        <a data-fancybox href="https://www.youtube.com/watch?v=w0GQ2Vjvtyc" data-caption="Description">
          <img src="assets/images/projects/min_maxicamp.png">
          <p>Maxi Camp 2015</p>
        </a>
      </div>
    </section>
    <div id="web-anchor"></div>
    <h1>Web design</h1>
    <section id="gallery-web" class="flex-gallery" style="border-bottom:solid white 1px">
      <div class="gallery-item">
        <a href="./assets/images/screenshots/bullebox.PNG" data-fancybox data-caption="Adresse de la page : http://centranim.ch/bullebox/order.html">
          <img src="assets/images/projects/min_bulleboxweb.png">
          <p>Formulaire de commande - Bulle Box</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="./assets/images/screenshots/promyana.png" data-fancybox data-caption="Adresse du site : http://promyana.org/">
          <img src="assets/images/projects/min_promyana.png">
           <p>promyana.org</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="./assets/images/screenshots/stiftung-mehrwert.png" data-fancybox data-caption="Adresse du site : http://stiftung-mehrwert.ch">
          <img src="assets/images/screenshots/stiftung-mehrwert.png">
          <p>stiftung-mehrwert.ch</p>
        </a>
      </div>
    </section>
    <div id="pics-anchor"></div>
    <h1 class="right">Images</h1>
    <section id="gallery-images" class="flex-gallery">
      <div class="gallery-item">
        <a href="./gallery1.html">
          <img src="assets/images/projects/min_photo.jpg">
          <p>Photographies</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="./gallery2.html">
          <img src="assets/images/projects/min_r2d2.png">
          <p>Créations graphiques</p>
        </a>
      </div>
    </section>
  </section>
  <section id="contact">
    <div class="section-content" id="contact-anchor">
      <h1> Contact</h1>
      <p>Pour plus d'informations, pour un devis ou tout simplement pour dire bonjour, contactez-nous via ce formulaire, ou directement par téléphone ou courriel.</p>
      <div class="contact-box">
        <div class="box">
          <img src="./assets/images/contact/phone.png ">
          <p>Téléphone :</p><i>+41 79 108 66 18</i>
        </div>
        <div class="box">
          <img src="./assets/images/contact/mail.png">
          <p>Mail :</p><i>ruffieux.mikael @ gmail.com</i>
        </div>
      </div>
      <form action="contact.php" method="post" align="center">
        <input type="text" name="name" maxlength="60" size="30" placeholder="Votre nom, prénom..*"></input>
        <input type="email" name="email" maxlength="60" size="30" placeholder="Votre e-mail..*"></input>
        <input type="text" name="subject" maxlength="60" size="30" placeholder="Sujet.."></input>
        <textarea name="message" maxlength="1000" rows="6" cols="25" placeholder="Votre message..*"></textarea>
        <input type="submit" value="Envoyer" name="contact">
      </form>
    </div>
  </section>

  <footer>
    <div class="bullet">
      <a href="https://www.instagram.com/redox_mikael/" target="_blank">
        <img src="./assets/images/home/instagram.png" >
      </a>
      <a href="https://vimeo.com/user65773366" target="_blank">
        <img src="./assets/images/home/vimeo.png" >
      </a>
      <a href="" target="_blank">
        <img src="./assets/images/home/youtube.png">
      </a>
    </div>
    <p>© Cool Kids Crew 2018</p>
  </footer>
</body>

<!-- SCRIPTS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="order.js"></script>
<script src="./assets/fancybox-master/dist/jquery.fancybox.min.js"></script>
<link rel="manifest" href="./assets/images/favicon/manifest.json">

</html>