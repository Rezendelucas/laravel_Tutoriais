<!doctype html>
<html lang="pt">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ambiente teste Bootstrap</title>
</head>
<body>

<div  class="panelButtonsTop">
</div>

<div class="containerBannerApogeu">
    <div class="container"  >
        <div class="row">
            <div class="col-xs-12">
                <div class="bannerApogeu">
                    <!--<p>Teste Imagem sem png</p>  -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" align="center">

        <div class="col-md-6-">
            <div class="BannerEsquerdo">
                <img src=""> <!-- sem imagem--->
            </div>
        </div>

        <div class="col">
            <div class="formStyle">
                <div class="container" style="align-content: center;height: 400px ;padding-top: 150px">
                    <div class="spinner-border" role="status">
                        <span class="sr-only" style="">Loading...</span>
                    </div>

                </div>
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
        </div>

        <div class="col-md-6-">
            <div class="BannerDireito">
                <img src=""><!-- sem imagem--->
            </div>
        </div>

    </div>
</div>

<div  class="panelButtonsBottom">
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<style type="text/css">
body{
background-image: url({{asset('imagens/paper.jpg')}});
}
.bannerApogeu{
background-image: url({{asset('imagens/apogeu.png')}});
background-repeat: no-repeat;
background-size: 50%;
background-position: center;
width: 1080px;
height: 200px;
margin-top: 20px;
margin-bottom: 20px;
}

.BannerDireito{
width: 150px;
height: auto;
margin-top: 0px;
margin-bottom: 0px;
}

.BannerEsquerdo{
width: 150px;
height: auto;
margin-top: 0px;
margin-bottom: 0px;
padding: 0px
}

.formStyle{
background-color: white;
margin-top: 20px;
margin-bottom: 20px;
height: 500px;
border-radius: 10px;
padding-top: 20px;
}

.FormAdap{
padding-top: 10px;
}

.containerBannerApogeu{
align-content: center;

}
.panelButtonsBottom{
align-content: center;
background-color:#000080;
height: 40px;
text-align: center ;
color: white;
}
.panelButtonsTop{
align-content: center;
background-color:#000080;
height: 40px;
text-align: center ;
color: white;
}
</style>
