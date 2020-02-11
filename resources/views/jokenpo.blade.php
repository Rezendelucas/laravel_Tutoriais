<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Jokenpô</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <h1>Jokenpô</h1>
        </div>

        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <h1>Choose one:</h1>
        </div>
        <div class="row" style="display:flex;justify-content:center;align-items:center;">
            <div class="card">
                <div class="card-body" id="player1">
                    <a href="/choose/{{$playerpoints ?? '0'}}/{{$cpupoints ?? '0'}}/1"><img src="{{asset('imagens/paper.png')}}" style="height: 50px ; width: 50px;"></a>
                    <a href="/choose/{{$playerpoints ?? '0'}}/{{$cpupoints ?? '0'}}/2"><img src="{{asset('imagens/stone.png')}}" style="height: 50px ; width: 50px;"></a>
                    <a href="/choose/{{$playerpoints ?? '0'}}/{{$cpupoints ?? '0'}}/3"><img src="{{asset('imagens/tesoura.png')}}" style="height: 50px ; width: 50px;"></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body" id="player1">
                        <p>{{$playerplay ?? ''}}</p>
                        @if(($playerplay ?? '') == 1)
                            <img src="{{asset('imagens/paper.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Papel</h3>
                        @elseif(($playerplay ?? '') == 2)
                            <img src="{{asset('imagens/stone.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Pedra</h3>
                        @elseif(($playerplay ?? '') == 3)
                            <img src="{{asset('imagens/tesoura.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Tesoura</h3>
                        @else
                            <img src="{{asset('imagens/null.png')}}" style="height: 50px ; width: 50px;">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body" id="player2">
                        <p>{{$cpuplay ?? ''}}</p>
                        @if(($cpuplay ?? '') == 1)
                            <img src="{{asset('imagens/paper.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Papel</h3>
                        @elseif(($cpuplay ?? '')   == 2)
                            <img src="{{asset('imagens/stone.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Pedra</h3>
                        @elseif(($cpuplay ?? '')  == 3)
                            <img src="{{asset('imagens/tesoura.png')}}" style="height: 50px ; width: 50px;">
                            <h3>Tesoura</h3>
                        @else
                            <img src="{{asset('imagens/null.png')}}" style="height: 50px ; width: 50px;">
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="card-body" id="player1">
                        <h1 style="height: 50px ; width: 50px;">{{$playerpoints ?? ''}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <div class="card-body" id="player2">
                        <h1 style="height: 50px ; width: 50px;">{{$cpupoints ?? ''}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
