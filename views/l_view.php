<html lang="fr-FR">

<head>
    <!-- Important meta -->
    <meta charset="utf-8" />
    <title>Luna Narchy - Liens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="referrer" content="no-referrer" />
    <script src="https://kit.fontawesome.com/f222f42b1f.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://miel.lly.fr" />
    <link rel="icon" type="image/png" href="assets/images/logo.png">

    <!-- Stylesheets and scripts -->

    <!-- Icons and PWA -->
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <?php include_once './_config/config.php'; ?>

    <!-- Style -->

    <style>
        /* Color schemes */

        @import "https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css";

        :root {
            --bg: #232344;
            --fg: hsl(10, 25%, 97%);
            --link: #db8fff;
            --secondcolor: #db8fff;
            --secondcolor_transparent: #dc8fff93;
            --text_color: white;
            --firstcolor: #232344;
            --rainbow: linear-gradient(70deg, #FE18D3, #FEFF38, #4206F1);
            --shadow: hsla(300, 35%, 65%, 30%);
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
            quotes: "« "" »""“""”";
        }

        h1 {
            font-weight: 600;
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



        small {
            font-size: 0.75em;
            line-height: 2;
            color: var(--text_color);
        }

        .avi {
            border-radius: 50%;
            border-color: #db8fff;
            border-style:dashed;
            width: 12em;
            transition: .5s;
        }

        .avi img {
            /* width: 200;
      height: 200; */
            border-radius: 50%;
        }

        .flag {
            width: 1.5em;
            border-radius: 4px;
        }

        a.button{
            width: 95%;
            margin: 5px;
        }

        .title{
            color: white;
        }

        .subtitle{
            color: #db8fff;
        }

        .footer-site{
            padding: 20px;
            background-color: black;
        }

        .footer-site > small{
            color: white !important;
        }
    </style>

</head>

<body>

        <section class="hero is-fullheight">

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
        <center>
    <div class="avi">
            <img src="assets/images/odixiz.jpg" width="220" height="220" alt="C'est moi." />
        </div>
    </center>
        <h1 class="title"><?php echo WEBSITE_NAME ?></h1>
        <h1 class="subtitle"><i class="fa-solid fa-camera"></i> Photographe • <i class="fa-solid fa-music"></i> Artiste musicale • <i class="fa-solid fa-hand-back-fist"></i> Militante • <i class="fa-solid fa-code"></i> Développeuse</h1>

        <a class="button is-primary is-medium" href="https://luna.narchy.art"><i class="fab fa-firefox-browser"></i></i>&nbspSite</a>
            </br>
            <a class="button is-primary is-medium" href="https://luna.narchy.art"><i class="fas fa-address-card"></i>&nbspPrésentation rapide</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-soundcloud"></i>&nbspSoundcloud (Odixiz)</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-bandcamp"></i>&nbspBandcamp (Odixiz)</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-mastodon"></i>&nbspMastodon</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-instagram"></i>&nbspInstagram</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-twitter"></i>&nbspTwitter</a>
            </br>
            <a class="button is-link is-medium" href="https://luna.narchy.art"><i class="fa-brands fa-flickr"></i>&nbspFlickr</a>
    </br>

</section>

</body>