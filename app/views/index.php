<?php require_once APPROOT."/views/header.php"; ?> 

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>

   <?php require_once APPROOT."/views/nav.php"; ?> 

<main>
    <div class="top-info">
        <?php
        if(isset($_SESSION['temp']))
        {
            foreach ($_SESSION['temp'] as $info)
            {
                echo $info.'<br/>';
            }
        }
        Session::flushTemp();
        ?>
    </div>

    <article class="glowna">
        <div class="wstepL">
            <img class="vector" src="<?= Resources::image('logo.svg')?>" alt="logo" />
        </div>

        <div class="wstepR">
            <p>
            <h4>Kilka słów na początek...vw</h4>
            Gotowanie od zawsze było moją pasją. Lubiłam ( i oczywiście nadal lubię :) ) smakować nowe potrawy, próbować nowych przepisów, a nawet wymyślać swoje, autorskie dania. Tworzenie nowych potraw sprawia mi niezwykłą frajdę, co niewątpiliwe przynosi korzyści również moim znajomym i rodzinie, którzy zawsze się załapią na jakiś obiadek i ciastko. Chciałabym na tej stornie internetowej pokazać kilka swoich przepisów, które mam nadzieję trafią w Wasze gusta. Przygotowałam również quiz dotyczący różnych produktów. Serdecznie zapraszam do miłej lektury.
        </div>
        <div style="clear:both"></div>
    </article>

    <article class="tresc">
        <p>
            A oto przed wami 3 ciekawostki dotyczących odżywiania (tak dla rozbudzenia ciekawości :) ). To niewiele, ale zawsze po więcej informacji można sięgnąć do <a href="https://dietetycy.org.pl/20-faktow-mitow-zywieniowych/" target="blank" title="Dowiedz się więcej">dietetycy.org.pl</a> oraz <a href="https://www.elle.pl/sport/artykul/fakty-i-mity-na-talerzu-zielona-herbata-odchudza-a-wegetarianizm-prowadzi-do-niedoboru-zelaza" target="blank" title="Tutaj również możesz sięgnąć po informacje">elle.pl</a>, czy też i innych stron internetowych.
        </p>

        <br />

        <h2><span style="color: orange">1. </span>Jedzenie posiłków z proszku zamiast normalnych dań to skuteczny sposób odchudzania.</h2>

        <p> Fakt, można w ten sposób szybko stracić kilka, a nawet kilkanaście kilogramów, lecz organizm po zakończeniu odchudzania przystąpi do odbudowy zapasów. Efekt jo-jo zapewniony. Długie stosowanie diety proszkowej prowadzi do niedoboru witamin i minerałów, osłabienia organizmu i ciężkich depresji.</p>

        <div class="img">
            <a href="<?= Resources::image('proszek.png'); ?>"><img class="foto" src="<?= Resources::image('proszek.png'); ?>" alt="" /></a>
        </div>

        <h2><span style="color: orange">2. </span>Grillowane mięsa są rakotwórcze</h2>

        <p>Nieprawda. Grillowanie jest jednym z najlepszych sposobów przyrządzania mięsa. Jeśli wybierzemy niezbyt tłuste gatunki, np. polędwicę wołową lub cielęcą, rostbef, łopatkę, udziec cielęcy, karkówkę czy szynkę, i będziemy piekli je bez tłuszczu, z dużą ilością przypraw, danie będzie nie tylko smaczne, ale i dietetyczne. Zioła ułatwiają trawienie i mogą zastąpić sól, której nadmiar jest dla organizmu szkodliwy. Mięso z grilla bywa niebezpieczne jedynie wtedy, gdy tłuszcz wytapiający się z niego kapie bezpośrednio na rozgrzany ruszt. Wtedy właśnie powstają rakotwórcze substancje gazowe, tzw. dioksany. Możemy tego uniknąć, umieszczając mięso na aluminiowej tacce lub w folii. Podobnie powinniśmy postępować z grillowanymi warzywami.</p>

        <div class="img">
            <a href="<?= Resources::image('grill.jpg'); ?>" target="_blank"><img class="foto" src="<?= Resources::image('grill.jpg'); ?>" alt="" /></a>
        </div>

        <h2><span style="color: orange">3. </span>Top 5 najbardziej kalorycznych produktów</h2>

        <table>
            <tr>
                <th>Nazwa produktu</th>
                <th>Liczba kalorii przypadająca na 100g</th>
            </tr>
            <tr>
                <td>Masło orzechowe</td>
                <td>589</td>
            </tr>
            <tr>
                <td>Skwarki</td>
                <td>579</td>
            </tr>
            <tr>
                <td>Big Mac</td>
                <td>550 </td>
            </tr>
            <tr>
                <td>Mocaccino</td>
                <td>461</td>
            </tr>
            <tr>
                <td>Kokos</td>
                <td>370</td>
            </tr>

        </table>

    </article>

</main>
<?php require_once APPROOT."/views/footer.php"; ?> 