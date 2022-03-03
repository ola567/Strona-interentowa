<?php require_once APPROOT."/views/header.php"; ?>

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

</head>

<body>
<?php require_once APPROOT."/views/nav.php"; ?>
    <main>
        <article>
            <div class="tresc">
               <section>
			     Oprócz wspaniałego smaku ważne jest, by przygotowane danie dobrze się prezentowało . Jeśli chcesz się podzielić swoją kreatywnością i pokazać mi swoje kulinarne dzieła zapraszam do przesłania zdjęć z daniami w roli głównej. :)

				 <br/><br/><br/>

				<form method="POST" enctype="multipart/form-data" action="<?=Resources::route('zdjecia/upload'); ?>">
                    Tytuł
                    <input type="text" name="tytul">
                    Autor:
                    <?php
                    if(isset($_SESSION['loggedlogin'])) {
                    ?>
                        <input type="text" name="autor" value="<?php echo $_SESSION['loggedlogin']; ?>">
                    <?php
                    } else {
                    ?>
                        <input type="text" name="autor">
                    <?php
                    }
                    ?>
                    Znak wodny:
                    <input type="text" name="znakwodny" required>

                    <?php
                    if(isset($_SESSION['logged'])) {
                    ?>
                    Typ:<br>
                    <input type="radio" name="typ" value="publiczny" id="publiczny"><label for="publiczny">Publiczny</label><br>
                    <input type="radio" name="typ" value="prywatny" id="prywatny"><label for="prywatny">Prywatny</label>
                    <?php
                    } else {
                        echo "Dla niezalogowanych - typ domyślnie publiczny";
                    }
                    ?>
                    <br/><br/><br/><br/>
					<input type="file" name="file">
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
					<input type="submit" value="Wyślij">
				</form>
			   </section>
            </div>
        </article>
    </main>   
<?php require_once APPROOT."/views/footer.php"; ?> 