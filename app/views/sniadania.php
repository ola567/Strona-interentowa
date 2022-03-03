<?php require_once APPROOT."/views/header.php"; ?>
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>

<?php require_once APPROOT."/views/nav.php"; ?> 

<main>
    <article>
        <section>

            <a href="#" class="scrollup"></a>

            <div class="tresc">

                <h2>Spis treści: </h2>
                <ul class="spis">
                    <li><a id="link1" href="#">Granola z żurawiną</a></li>
                    <li><a id="link2" href="#">Roladki z tortilli</a></li>
                    <li><a id="link3" href="#">Bułeczki kukurydziane</a></li>
                </ul>

            </div>

        </section>

        <section>

            <div class="glowna">

                <div class="wstepL">
                    <a href="<?= Resources::image('granola.jpg'); ?>" target="_blank"><img class="vector" src="<?= Resources::image('granola.jpg'); ?>" height="200" width="200" alt=""/></a>
                </div>

                <div class="wstepR">
                    <p>
                    <h3 id="granola">Granola z żurawiną</h3>
                    Składniki:
                    <ul>
                        <li>2 łyżki kakao</li>
                        <li>0,5 szklanki żurawuny</li>
                        <li>2 szklanki płatków owsianych</li>
                        <li>2 łyżki miodu</li>
                        <li>0,5 szklanki orzechów włoskich</li>
                    </ul>

                    <script>

                        var el1 = document.getElementById("granola");
                        el1.innerHTML = "Pyszna granola z żurawiną";

                    </script>

                    <p>
                        Nastaw piekarnik na 180 st. C. Blaszkę wyłóż papierem do pieczenia.
                        Orzechy i żurawinę posiekaj na drobne kawałki.
                        W rondelku podgrzej miód oraz kakao. Jak tylko miód się rozpuści i połączy z kakao, zdejmij rondel z ognia.
                        Do rondelka wsyp płatki owsiane oraz pokrojoną żurawinę i orzechy. Mieszaj do połączenia się wszystkich składników i wysyp na przygotowaną wcześniej blaszkę.
                        Piecz w piekarniku przez ok. 20 min. Ostudź i rozdrobnij.
                        Gotową granole przechowuj w szczelnie zamkniętym pojemniku. Idealna z mlekiem, jogurtem czy solo jako przekąska. Smacznego!
                    </p>
                </div>
                <div style="clear:both"></div>

            </div>

        </section>

        <section>

            <div class="glowna">

                <div class="wstepL">
                    <a href="<?= Resources::image('tortilla.jpg'); ?>" target="_blank"><img class="vector" id="rolady" src="<?= Resources::image('tortilla.jpg'); ?>" height="200" width="200" alt=""/></a>
                    <script>
                        document.getElementById("rolady").src = "<?php echo URLROOT; ?>/img/roladki3.jpg";
                    </script>
                </div>

                <div class="wstepR">
                    <p>
                    <h3 id="roladki">Roladki z tortilli</h3>
                    Składniki:
                    <ul>
                        <li>1 puszka Kukurydzy złocistej z czerwoną fasolą Bonduelle 212 ml</li>
                        <li>150 g grillowanej papryki</li>
                        <li>120 g majonezu/li>
                        <li>100 g żółtego sera o intensywnym smaku</li>
                        <li>60 g pikantnego ketchupu</li>
                        <li>3 pszenne tortille</li>
                        <li>1 dymka</li>
                        <li>0,5 główki sałaty</li>
                        <li>0,5 łyżeczki oregano</li>
                        <li>sól i pieprz</li>
                    </ul>

                    <p>
                        Paprykę kroimy w paski, dymkę w talarki. Oddzielamy liście sałaty. Majonez mieszamy z ketchupem. Doprawiamy oregano, solą i pieprzem, jeśli to konieczne.
                        Ser ścieramy na tarce o grubych oczkach. Każdą tortillę smarujemy przygotowanym sosem i posypujemy tartym serem, osączoną z zalewy kukurydzą z fasolą, dymką oraz papryką. Układamy liście sałaty. Rolujemy ściśle tortille i kroimy je na kawałki ostrym nożem. Smacznego!
                    </p>
                </div>
                <div style="clear:both"></div>

            </div>

        </section>

        <section>

            <div class="glowna">

                <div class="wstepL">
                    <a href="<?php echo URLROOT; ?>/img/bułki.jpg" target="_blank"><img class="vector" src="<?php echo URLROOT; ?>/img/bułki.jpg" height="200" width="200" alt=""/></a>
                </div>

                <div class="wstepR">
                    <p>
                    <h3 id="bulki">Bułeczki kukurydziane</h3>
                    Składniki:
                    <ul>
                        <li>1 puszka Kukurydzy Złocistej Bonduelle 425 ml</li>
                        <li>330 g mąki pszennej</li>
                        <li>250 ml mleka</li>
                        <li>100 g bazyliowego pest</li>
                        <li>60 ml ciepłej wody</li>
                        <li>50 g mąki kukurydzianej</li>
                        <li>35 g cukru</li>
                        <li>30 g masła</li>
                        <li>1 jajko</li>
                        <li>1 łyżeczka suszonych drożdży instant</li>
                        <li>1 łyżeczka soli</li>
                    </ul>

                    <p>
                        W niewielkim garnku podgrzewamy wodę z mlekiem, masłem, cukrem, solą oraz mąką kukurydzianą. Doprowadzamy do wrzenia i gotujemy około 3-5 minut do momentu, aż masa zgęstnieje. Lekko studzimy. Do miski wsypujemy mąkę pszenną i drożdże. Dodajemy jajko oraz ciepłą masę kukurydzianą. Wyrabiamy elastyczne ciasto. Przykrywamy i odstawiamy na około 45 min. do wyrośnięcia. Wyrośnięte ciasto krótko zagniatamy. Dodajemy osączoną z zalewy kukurydzę. Wyrobione ciasto dzielimy na 8 części. Z każdej formujemy wałeczki. Robimy pojedynczy supełek. Następnie jeden koniec zawijamy do góry, a drugi pod spód. Odstawiamy na 15 min. do napuszenia. Wyrośnięte bułeczki pieczemy około 15-20 min. w 180℃. Jeszcze ciepłe smarujemy bazyliowym pesto. Smacznego!
                    </p>
                </div>
                <div style="clear:both"></div>
            </div>
        </section>
    </article>
</main>
<?php require_once APPROOT."/views/footer.php"; ?> 