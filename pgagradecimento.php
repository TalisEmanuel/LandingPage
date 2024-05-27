<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            height: 100vh;
            background: #0E1113 url('back.jpg') left top no-repeat fixed;
            background-size: cover;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 400;
        }
        .title{
            display: flex;
            justify-content: center;
        }
        .title h1{
            font-size: 30px;
            background-color: #000000cc;
            text-align: center;
            border: 3px outset #0042FF;;
            border-radius: 20px;
            width: 25%;
        }
        .container-geral{
           display: flex;
            justify-content: center;
        }
        .container{
            background-color: #0000007c;
            display:flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
            border: 8px outset #0042FF;
            border-radius: 20px;
            height: 800px;
            width: 800px;

            
        }
        
        .bar{
            height: 30px;
            width: 700px;
            background-color:black;
            border-radius: 20px;
            border: 3px solid rgb(36, 36, 206);
           
        }
        .progress{
            width: 80%;
            height: 30px;
            background-image:linear-gradient( #1045CB,#89a2e096);
            border: 1px solid outset rgb(36, 36, 206);
            border-radius: 20px; 
            animation: progress 3s;     
                   
        } 
        @keyframes progress {
            from{width: 20%;}
            to{width: 80%;}
            
        }
        #txt-progress{
            width: 100%;
            display:flex;
            justify-content: space-between;
        }         
        
        a:hover{
            background-color: #13f713;
        }
        a {  
            display: inline-block;
            background-color: cornsilk;
            width: 400px;
            height: 50px;
            border-radius: 20px;
            border: 3px outset #020202;
            box-shadow: 0px 2px 10px 1px #636161; 
            font-size: 30px;
            color: black;
            text-decoration: none; 
            text-align: center;           
        }
    </style>

    <title> < Semana Front-End ></title>
</head>
<body>
    <div class="title"><h1> < Semana Front-End > </h1></div>
    <div class="container-geral">
        <div class="container">
        <div>
            <h1>INSCRIÇÃO REALIZADA!</h1>
            <h3>AGORA sim você está no caminho certo.</h3>
            
        </div>
        <div class="bar">
        <div class="progress">
            <div id="txt-progress">
            Quase lá
         <strong>80%</strong>
        </div>
        </div>
            <h2 style="color: #7d00f1;">Sua Inscrição ainda não esta finalizada!!</h2><br>
            <h3>Você precisa entrar no grupo do Whatsapp para receber todas as informações e links do evento.</h3><br><br>
            
            <a href="https://web.whatsapp.com/"><i id="i" class="fa-brands fa-whatsapp fa-xl" style="color: black;"></i> <b>Entrar no Grupo</b> </a>
            
        </div>
        
    </div>	
    </div>
</body>
</html>