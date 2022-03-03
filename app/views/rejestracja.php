<?php require_once APPROOT."/views/header.php"; ?>

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

    </head>

    <body>

<?php require_once APPROOT."/views/nav.php"; ?>

    <main>
        <div class="tresc">

            <form action="<?=Resources::route('zaloguj/rejestracjaPost'); ?>" method="post" class="formularz">
                <div class="logowanie">
                    <label for="e-mail"><b>Podaj adres e-mail</b></label>
                    <input type="text" placeholder="e-mail" name="e-mail" required class="login">
                    <label for="login"><b>Podaj swój login</b></label>
                    <input type="text" placeholder="login" name="login" required class="login">
                    <label for="haslo"><b>Podaj swoje hasło</b></label>
                    <input type="password" placeholder="hasło" name="haslo" required>
                    <label for="haslo_powtorzone"><b>Powtórz hasło</b></label>
                    <input type="password" placeholder="powtóz hasło" name="haslo_powtorzone" required>
                    <input type="submit" value="Zapisz się">
                </div>
            </form>

            <div>
                <?php
                if($data['errors'])
                {
                    foreach ($data['errors'] as $error)
                    {
                        echo $error.'<br/>';
                    }
                }
                ?>
            </div>
        </div>
    </main>
<?php require_once APPROOT."/views/footer.php"; ?>