<html>
<?php include "header.php"; ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Snippet - Bootsnipp.com</title>
    <script type="text/javascript" src="js/001.js"></script>
    <script type="text/javascript" src="js/002.js"></script>
    <script type="text/javascript">$(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');

                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });</script>
    <style>
        .gallery-title
        {
            font-size: 36px;
            color: #787b80;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }
        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }
        .filter-button
        {
            font-size: 18px;
            border: 1px solid #787b80#;
            border-radius: 5px;
            text-align: center;
            color: #000000;
            margin-bottom: 30px;

        }
        .filter-button:hover
        {
            font-size: 18px;
            border: 1px solid #0f0f0f;
            border-radius: 5px;
            text-align: center;
            color: #FFFFFF;
            background-color: #787b80;

        }
        .btn-default:active .filter-button:active
        {
            background-color: #c0c0c0;
            color: white;
        }

        .port-image
        {
            width: 100%;
        }

        .gallery_product
        {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div>
    <center>
        <table width="100%" height="108">
            <tr>
                <td class="fixed" bgcolor="#1C1C1C" >
                    <center>
                        <img src="imagens/civic/civic.jpg"  alt="Cinque Terre" width="1000" height="350">
                    </center>
                </td>
            </tr>
        </table>
    </center>
</div>
<br>
<div>
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Galeria</h1>
            </div>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagens/civic/01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                <img src="imagens/civic/02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                <img src="imagens/civic/03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="imagens/civic/06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/04.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                <img src="imagens/civic/09.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/07.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                <img src="imagens/civic/08.jpg" class="img-responsive">
            </div>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="imagens/civic/10.jpg" alt="" class="img-rounded img-responsive" /> <br>
                        <center>
                            <a href="civic2.php">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Comprar</button>
                            </a>
                        </center>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h3>
                            Honda Civic</h3>
                        <small><cite title="San Francisco, USA">Brasília, BR <i class="glyphicon glyphicon-map-marker">
                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-ok"></i>Motor 1.5l Turbo de 173cv com Injeção Direta
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Transmissão CVT com Paddle Shift de 7 velocidades</a>
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Painel Digital em TFT de alta resolução</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-6 col-md-8">

                        <p>
                            <i class="glyphicon glyphicon-ok"></i>Sistema Honda LaneWatch™. Assistente para redução de pontos cegos
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Botão Start/Stop (Partida sem chave)</a>
                            <br />
                            <i class="glyphicon glyphicon-ok"></i>Teto Solar One-Touch com função antiesmagamento</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br><br><br>
</body>

</html>
