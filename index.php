<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reponsive.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>< Semana Front-End ></title>
</head>

<body>

    <header>
        <div  data-aos="fade-down" data-aos-duration="2000" class="logo" >
            <a href="index.php">
                <i id="html" class="fa-brands fa-html5" style="color: #E24E23;">HTML</i>
                <i id="css" class="fa-brands fa-css3-alt" style="color: #1473B5;">CSS</i><br>
                <i id="js" class="fa-brands fa-js" style="color: #F5E61C;">J<small>ava</small> S<smal>cript</small></i>
            </a>
        </div>
        <div class="title" data-aos="fade-down-left" data-aos-duration="2000" >
        <h2> < Semana Front-End ></h2>
        </div>


        <div data-aos="fade-down-right" data-aos-duration="2000"class="calendario">
            <i class="fa-solid fa-calendar-days" style="color: #fff;"></i>Seg. a Qua.
        </div>
        <div class="calendario_mobile">
            <i class="fa-solid fa-calendar-days" style="color: #fff;"></i>Seg. a Qua.
        </div>


        <div class="logo_txt" data-aos="fade-right"
            data-aos-anchor="#example-anchor"
            data-aos-offset="200"
            data-aos-duration="1000">
            <h2>Comece Sua trilha Por aqui</h2>
            Domine os principais elementos de Densenvolvimento web em <strong>um imesão gigantescas e gratis de 3 dias.</strong><br>

        </div>
        
        
        <div class="logo_txt_mobile" data-aos="fade-right">
            <h3>Comece Sua trilha Por aqui</h3>
            Domine os principais elementos de Densenvolvimento web em <span>um imesão gigantescas e gratis de 3 dias.</span>

        </div>

        

        
    </header>
  
    <div class="imgdescricao">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/51135e6e-79e1-4de7-a6f7-19aae1da9c4f/JJs1B6Cdig.json" background="transparent" speed="1" style="width: 500px; height: 500px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
    </div>
    <div class="imgdescricao_mobile">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/51135e6e-79e1-4de7-a6f7-19aae1da9c4f/JJs1B6Cdig.json" background="transparent" speed="1" style="width: 200px; height: 200px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
    </div>
     
    

    <div class="forminscricao">
        <form action="index.php" method="POST" target="_self" autocomplete="on" >
            <div id="user">
                <i class="fa-solid fa-user"></i>
                <input name='nome' id="input-geral" type="text" maxlength="35" required placeholder="Nome Completo">
            </div>

            <div id="email">
                <i class="fa-regular fa-envelope"></i>
                <input name='email' id="input-geral" required type="email" maxlength="30" placeholder="Digite seu Melhor email">
            </div>

            <div id="tel"><i class="fa-solid fa-phone"></i>
                <input name='phone' id="input-geral" class="phone" type="tel" pattern="\([0-9]{2}\)[9]{1}[0-9]{4}-[0-9]{4}"
                    placeholder="(xx)9xxxx-xxxx">
            </div>

            <input id="input-btn" name='cadastrar' type="submit"value='Confirmar Inscrição'>
            <input type="hidden" name='cadastro' value='form_ok'>

        </form>
    </div>
    <script>$('.phone').mask('(00)00000-0000');</script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
     AOS.init();
    </script>
    
    <script>
    // Adiciona um listener para o clique no botão de fechar
    document.addEventListener('DOMContentLoaded', function() {
        var closeButtons = document.querySelectorAll('.close');
        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                this.parentElement.style.display = 'none'; // Oculta o elemento pai do botão
            });
        });
    });
</script>
    

</body>

</html>