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
                <div id="cos">
                    <h2>A oto przed państwem galeria kulinarnych arcydzieł!! :)</h2>
                </div>
                <div id="galeria">
                    <?php
                    if($data['type'] == 'delete') {
                        require_once APPROOT."/views/obsluga_galerii_usuwanie.php";
                    } else {
                        require_once APPROOT."/views/obsluga_galerii1.php";
                    }
                    ?>
                </div>

                <div id="pagination">
                    <?php require_once APPROOT."/views/obsluga_paginacji.php"; ?>
                </div>
            </div>
        </article>
    </main>
<?php require_once APPROOT."/views/footer.php"; ?>
