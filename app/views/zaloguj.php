<?php require_once APPROOT."/views/header.php"; ?>

<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

</head>

<body>

<?php require_once APPROOT."/views/nav.php"; ?>

<main>
   <div class="tresc">
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
       <form action="<?=Resources::route('zaloguj/loguj'); ?>" method="post" class="formularz">
           <div class="imglogowanie">
               <img src="<?= Resources::image('avatar.png'); ?>" alt="Avatar" class="avatar">
           </div>
           <div class="logowanie">
               <label for="login"><b>Login</b></label>
               <input type="text" placeholder="Wpisz Login" name="login" required class="login">

               <label for="haslo"><b>Hasło</b></label>
               <input type="password" placeholder="Wpisz Password" name="haslo" required>

               <input type="submit" value="Zaloguj">
           </div>

           <div class="logowanie" style="background-color:#f1f1f1">
               <span class="haslo"><a href="<?= Resources::route('zaloguj/rejestracja'); ?>">Nie masz jeszcze konta?</a></span>
           </div>

       </form>
   </div>
</main>
<?php require_once APPROOT."/views/footer.php"; ?>