<header>

    <h1 class="logo">Kulinaria</h1>

    <nav>
        <div class="menu">
            <ol class="podstrony">
                <li><a href="<?= Resources::route(); ?>">Strona główna</a></li>
                <li><a href="<?= Resources::route('sniadania'); ?>">Śniadania</a></li>
                <li>
                    <a href="#">Obiady</a>
                    <ul>
                        <li><a href="<?= Resources::route('zupy'); ?>">Zupy</a></li>
                        <li><a href="<?= Resources::route('makarony'); ?>">Makarony</a></li>
                        <li><a href="<?= Resources::route('miesne'); ?>">Dania mięsne</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Zdjęcia</a>
                    <ul>
                        <li><a href="<?= Resources::route('zdjecia/uploadForm'); ?>">Wyślij</a></li>
                        <li><a href="<?= Resources::route('zdjecia/gallery'); ?>">Galeria</a></li>
                        <li><a href="<?= Resources::route('zdjecia/galleryDelete'); ?>">Twoja galeria</a></li>
                    </ul>
                </li>
                <?php if(Session::checkLogged()) {?>
                    <li><a href="<?= Resources::route('zaloguj/wyloguj'); ?>">Wyloguj</a></li>
                <?php
                } else {
                ?>
                    <li><a href="<?= Resources::route('zaloguj/logowanie'); ?>">Zaloguj</a></li>
                <?php
                } ?>
            </ol>
        </div>
    </nav>
</header>