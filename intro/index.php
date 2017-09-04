<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <style>
        body {
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff;
        }
        body {
            margin: 0;
        }   
        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(0,0,0,0);
        }
        header {
            background-image: url(../img/header-bg.jpg);
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
            text-align: center;
            color: #fff;
        }
        @media (min-width: 1200px){
            .container {
                width: 1170px;
            }
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        @media (max-width: 767px) {
            .intropraia .intro-text {
                padding-top: 120px !important;
                padding-bottom: 150px !important;
            }
            .titulo-style-1 {
                font-size: 35px !important;    
                margin-bottom: -10px !important;
            }
            .titulo-style-2 {
                font-size: 40px !important;
            }
        }
        .intropraia .intro-text {
            padding-top: 200px;
            padding-bottom: 160px;
            text-align: left;
        }
        .titulo-style-1{
            font-size: 60px;
            font-weight: 200;
            margin-bottom: -25px;

        }
        .titulo-style-2{
         font-size: 70px;
         font-weight: 400;
     }
     .select2{
        color: #92cbbe;
        text-align: left;
    }
    .elijetupais{
        color: white;
        font-size: 17px;
    }
    .intropraia select{
        border-radius: 4px;
        border: solid white;
        padding: 5px 10px;
    }
    .intropraia button{
        background: #4ac7b7;
        padding: 5px 20px;
        border: solid #4ac7b7;
        border-radius: 4px;
        color: white;
        margin-left: 10px;
    }

    @media screen and (max-width: 767px){
        header.intropraia {
            background-position: 80% center !important;
        }
    }
</style>

</head>

<body id="page-top" class="index">

    <header class="intropraia" style="background-image: url(http://sergiosaavedra.me/praia-brava/media/wysiwyg/intro-back.png);    height: 100vh;">
        <div class="container">
            <div class="intro-text">
                <div class="titulo-style-1">Bienvenidos a:</div>
                <div class="titulo-style-2">PRAIA BRAVA</div>
            </div>
            <div class="select2">
                <p class="elijetupais">Elije tu país</p>
                <form action="http://sergiosaavedra.me/praia-brava/">
                    <select>
                        <option value="">Perú</option>
                        <option value="">Estados Unidos</option>
                    </select>
                    <button>ENTRAR</button>
                </form>
          </div>
      </div>
    </header>

</body>

</html>
