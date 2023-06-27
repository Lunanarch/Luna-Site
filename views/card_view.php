
<html lang="fr-FR">

<head>
          <!-- Important meta -->
    <meta charset="utf-8" />
    <title>Luna Narchy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="referrer" content="no-referrer" />
    <script src="https://kit.fontawesome.com/f222f42b1f.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://miel.lly.fr" />
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <!-- Inline layout-critical CSS -->

    <!-- Stylesheets and scripts -->
    <link rel="preload" as="font" type="font/woff2" crossorigin href="./assets/fonts/Atkinson-Hyperlegible-Regular-102a.woff2" />
    <link rel="preload" as="font" type="font/woff2" crossorigin href="./assets/fonts/Atkinson-Hyperlegible-Bold-102a.woff2" />
    <!-- Icons and PWA -->
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <?php include_once './_config/config.php' ; ?>

<!-- Style -->

<style>
    /* Color schemes */

  :root {
    --bg: #232344; 
    --fg: hsl(10, 25%, 97%);
    --link: #db8fff;
      --secondcolor: #db8fff;
      --secondcolor_transparent: #dc8fff93;
      --text_color : white;
      --firstcolor : #232344;
      --rainbow: linear-gradient(70deg, #FE18D3, #FEFF38, #4206F1);
      --shadow: hsla(300, 35%, 65%, 30%);
    }

    /* Light Theme */

    /* --bg: rgb(193, 168, 253); 
    --link: #e8b7ff;
      --secondcolor: #e8b7ff;
      --secondcolor_transparent: #e8b7ff93;
      --text_color : black;
      --firstcolor : rgb(193, 168, 253);
      --rainbow: linear-gradient(70deg, #d60270, #fef42f, #00a1e8);
      --shadow: hsla(300, 35%, 65%, 30%); */
    
    @media screen and (prefers-color-scheme: dark) {
      :root {
        --bg: #232344; 
        --fg: hsl(10, 25%, 97%);
        --link: #db8fff;
          --secondcolor: #db8fff;
          --secondcolor_transparent: #dc8fff93;
          --text_color : white;
          --firstcolor : #232344;
      }
    }
    
    html {
      scroll-behavior: smooth;
  }

  /* width */
  ::-webkit-scrollbar {
    width: 10px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: var(--firstcolor);
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
  border-radius: 10px;
    background: rgb(133, 133, 133);
    transition: 0.5s;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: rgb(155, 155, 155);
    transition: 0.5s;
  }

    /* Main formatting */
    
    html {
      scroll-behavior: smooth;
      -webkit-text-size-adjust: 100%;
    }
    
    body {
      background: var(--bg);
      /* background: url('../images/background.png'); */
      background-color: var(--bg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      color: var(--fg);
      quotes: "« " " »" "“" "”";
    }
    
    h1 {
      font-weight: 600;
    }

    .subtitle{
      color: #db8fff;
    }
    
    /* Links */
    
    a.deco {
      color: inherit;
      position: relative;
      text-decoration: none;
      text-shadow: 1px 1px var(--bg);
      z-index: 1;
      border-bottom-style: solid;
      border-color: var(--secondcolor)
    }
    
    a.deco::before {
      background: var(--secondcolor);
      border-radius: 5px;
      content: "";
      height: 0.4em;
      position: absolute;
      bottom: -1px;
      left: 0;
      right: 0;
      transform: rotateZ(-1deg);
      transition: transform 0.2s;
      z-index: -1;
    }
    
    a.deco:hover::before,
    a.deco:focus::before {
      transform: rotateZ(-2deg) scaleY(2) translateY(-0.2em);
    }

    div.btn{
      background: var(--secondcolor);
      width: 350px;
      padding: 10px;
      font-weight: 800;
      font-size: 30px;
      border-radius: 10px;
    }
    
    /* Decorations */
    
    .avi {
      border: 0.5em solid var(--bg);
      box-shadow: inset 0 0 0 0.5em var(--shadow);
      position: relative;
    }
    
    .avi::before {
      content: "";
      background: var(--rainbow);
      border-radius: 50%;
      position: absolute;
      top: -0.65em;
      left: -0.65em;
      bottom: -0.65em;
      right: -0.65em;
      z-index: -2;
    }
    
    .avi img {
      position: relative;
      z-index: -1;
    }
    
    .flag {
      width: 1.5em;
      border-radius: 4px;
    }
    
    svg text {
      -ms-user-select: none;
      -moz-user-select: none;
      -webkit-user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      user-select: none;
    }

    /* Box */

    .box{
      background-color: var(--firstcolor); 
      padding: 20px; 
      border-radius: 20px; 
      border-color: var(--secondcolor); 
      border-style: solid;
    }

    
    /* Font family */
    
    @font-face {
      font-display: fallback;
      font-family: "Atkinson Hyperlegible";
      font-style: normal;
      font-weight: 400;
      src: local("Atkinson Hyperlegible"), local("Atkinson Hyperlegible Regular"),
        url("/frills/fonts/Atkinson-Hyperlegible-Regular-102a.woff2") format("woff2");
    }
    
    @font-face {
      font-display: fallback;
      font-family: "Atkinson Hyperlegible";
      font-style: normal;
      font-weight: 600;
      src: local("Atkinson Hyperlegible Bold"), url("/frills/fonts/Atkinson-Hyperlegible-Bold-102a.woff2") format("woff2");
    }
    
    html {
      font-family: "Atkinson Hyperlegible", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, Cantarell, Lato,
        Helvetica, Arial, sans-serif;
      font-size: 125%;
      font-size-adjust: 0.49;
      height: 100%;
      line-height: 1.5;
    }

    body {
      align-items: center;
      box-sizing: border-box;
      display: grid;
      min-height: 100%;
      margin: 0;
      padding: 1.5em 2em;
    }

    main {
      margin: 0 auto;
      max-width: 80ch;
    }

    h1 {
      font-size: 2em;
      margin: 0 0 0.75em;
      line-height: 1;
      color: var(--text_color);
    }

    p {
      margin: 0 0 1.5em;
      color: var(--text_color);
    }

    small {
      font-size: 0.75em;
      line-height: 2;
      color: var(--text_color);
    }

    .avi {
      border-radius: 50%;
      box-sizing: border-box;
      float: left;
      margin: 0 1em 1em -5em;
      shape-outside: margin-box;
      width: 12em;
      transition: .5s;
    }

    .avi img {
      display: block;
      /* width: 200;
      height: 200; */
      border-radius: 50%;
      transition: .5s;
    }

    .flag {
      width: 1.5em;
      border-radius: 4px;
    }

    @media screen and (max-width: 35rem) {
      body {
        padding: 1em;
        transition: .5s;
      }

      .avi {
        float: none;
        font-size: 0.75em;
        margin: 1em auto 2em;
        width: 15em;
        transition: .5s;
      }
    }

    /* Contact */

    iframe.contact{
      position: relative; 
      border-radius: 10px;
      width: 60%;
      transition: .5s;
    }

    @media screen and (max-width: 1000px) {
      iframe.contact{
        width: 75%;
      }
    }

    @media screen and (max-width: 800px) {
      iframe.contact{
        width: 85%;
      }
    }

    @media screen and (max-width: 600px) {
      iframe.contact{
        width: 100%;
      }
    }
    
    @media print {
    :root {
      --bg: #fff;
      --fg: #222;
    }
  
    html {
      font-size: 11pt;
    }
  
    body {
      display: initial;
      padding: unset;
      margin: unset;
    }
  
    main {
      max-width: unset;
    }
  
    a {
      box-shadow: none;
      color: blue;
    }
  
    a[href]:after {
      content: " (" attr(href) ")";
      color: #222;
      font-size: 75%;
      font-weight: 400;
    }
  
    .avi {
      float: none;
      font-size: 0.75em;
      margin: 1em 0 2em;
    }
  }
  
</style>

</head>

  <body>

    <main>
      <div class="avi">
        <img
          src="assets/images/odixiz.jpg"
          width="220"
          height="220"
          alt="C'est moi."
        />
      </div>
      <h1><?php echo WEBSITE_NAME ?></h1>
      <h4 class="subtitle under"><i class="fa-solid fa-camera"></i> Photographe • <i class="fa-solid fa-music"></i> Artiste musicale • <i class="fa-solid fa-hand-back-fist"></i> Militante • <i class="fa-solid fa-code"></i> Développeuse</h4>
      <p>
        Salut ! Moi, c'est Luna. J'utilise les pronoms <?php include './assets/svg/enbytrans.html' ?> <a href="https://fr.pronouns.page/@odixiz" target="_bank" class="deco"> elle et iel</a>. Je vis en <img src="assets/images/breizh.png" class="flag"></img> Bretagne et j'étudie au
          <img src="assets/images/lxp.jpg" class="flag"></img> Lycée Expérimental de Saint-Nazaire.
      </p>
      <p>Je m'intéresse aux <strong><i class="fas fa-palette" style="color: rgb(255, 198, 41)"></i> arts</strong>, 
        <strong>aux <i class="fas fa-atom" style="color: rgb(251, 4, 210)"></i> sciences</strong>, 
        ainsi que <strong><i class="fas fa-laptop" style="color: rgb(98, 41, 255)"></i> l'informatique</strong>.
      Je défend les droits <?php include './assets/svg/lgbt_flag.html' ?> <strong>Mogai/LGBT+</strong>, <?php include './assets/svg/anarco_flag.html' ?> <strong>l'égalité et la liberté</strong> de tou·te·s, 
        <strong>l'anticlassime</strong>, <strong>l'antivalidisme</strong>, ainsi que <strong>les logiciels et l'internet libre</strong>.</p>
     
     <!-- Contact -->
     
        <p class="box">

        Tu peux me joindre sur
        <strong><a rel="me" href="<?php echo $btn_social_2_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_2_icon ?>" style="color:<?php echo $btn_social_2_color ?>"></i> <?php echo $btn_social_2 ?></a></strong>, 
        
        <strong><a href="<?php echo $btn_social_3_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_3_icon ?>" style="color: <?php echo $btn_social_3_color ?>"></i> <?php echo $btn_social_3 ?></a></strong>, 

        et <strong><a href="<?php echo $btn_social_1_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_1_icon ?>" style="color: <?php echo $btn_social_1_color ?>"></i> <?php echo $btn_social_1 ?></strong></a>. 

        Tu peux aussi me contacter par

        <strong><a href="<?php echo $btn_social_4_link ?>" class="deco"><i class="<?php echo $btn_social_4_icon ?>" style="color: <?php echo $btn_social_4_color ?>"></i> <?php echo $btn_social_4 ?></a></strong> 

        ou par 
        
        <strong><i class="<?php echo $btn_social_5_icon ?>" style="color: <?php echo $btn_social_5_color ?>"></i> <?php echo $btn_social_5 ?></strong>.
      </br>

      <!-- Musique -->
      Je fais de la musique. Tu peux l'écouter sur

      <strong><a href="<?php echo $btn_social_6_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_6_icon ?>" style="color: <?php echo $btn_social_6_color ?>"></i> <?php echo $btn_social_6 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_7_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_7_icon ?>" style="color: <?php echo $btn_social_7_color ?>"></i> <?php echo $btn_social_7 ?></a></strong>, 
      
      <strong><a class="deco" href="<?php echo $btn_social_8_link ?>" target="_blank"><i class="<?php echo $btn_social_8_icon ?>" style="color: <?php echo $btn_social_8_color ?>"></i> <?php echo $btn_social_8 ?></a></strong>.</br>

      <!-- Photo -->
      Ainsi que de la photo, que tu peux voir sur 

      <strong><a href="<?php echo $btn_social_9_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_9_icon ?>" style="color: <?php echo $btn_social_9_color ?>"></i> <?php echo $btn_social_9 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_10_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_10_icon ?>" style="color: <?php echo $btn_social_10_color ?>"></i> <?php echo $btn_social_10 ?></a></strong>, 

      <strong><a href="<?php echo $btn_social_11_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_11_icon ?>" style="color: <?php echo $btn_social_11_color ?>"></i> <?php echo $btn_social_11 ?></a></strong> 
      
      (ou Instagram).

</br>

      Il m'arrive de dev. Tu peux voir ça sur <strong><a href="<?php echo $btn_social_12_link ?>" target="_blank" class="deco"><i class="<?php echo $btn_social_12_icon ?>" style="color: <?php echo $btn_social_12_color ?>"></i> <?php echo $btn_social_12 ?></a></strong>.
      </p>

<!-- Neurodivergence -->

      <p>Je suis une personne <?php include './assets/svg/neurodiv.html' ?> neurodivergente. Merci de communiquer avec moi en utilisant des <a href="https://toneindicators.carrd.co" target="_blank" class="deco">indicateurs de ton</a>.</p>
      
      <footer>
        <span>
        <?php include './assets/svg/enbytrans.html' ?>
        <?php include './assets/svg/anarco_queer_flag.html' ?>
        <?php include './assets/svg/neurodiv.html' ?>
        <?php include './assets/svg/solarpunk.html' ?>
        <?php include './assets/svg/blm.html' ?>
        </span>
        <br />
        <small>
        ©&thinsp;2021&#8209;<?php echo WEBSITE_TIME_YEAR ?> <?php echo WEBSITE_NAME ?>.
</br>
          Développé avec <i class="far fa-heart" style="color: rgb(255, 38, 38)"></i> par <a href="<?php echo WEBSITE_AUTHOR_LINK ?>" class="deco"><?php echo WEBSITE_AUTHOR ?></a>.
          <a href="https://github.com/ODXZ/Odixiz" class="deco">Source</a>. 
          <br>
          Hébergé par <a href="https://inkz.fr/" class="deco">Inakaz</a>.
    
        </small>
      </footer>
    </main>
  </body>