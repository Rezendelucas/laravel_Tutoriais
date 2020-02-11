<HTML>
    <HEAD>
        <TITLE>TI Expert</TITLE>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</HEAD>
<BODY>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container" align="center">
    <div class="row" style="display:flex;justify-content:center;align-items:center;">
        <h4>Testando pagina de Jobs</h4>
    </div>

    <!------Prototypo Email Contato-------->
    <div class="row">
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Projeto - E-mail de Contato</h5>
                    <p class="card-text">Protótipo desenvolvido para formulário de e-mail de contato simples para websites</p>
                    <a href="/email_Contato" class="btn btn-primary">Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">CRUD Com tela de login autenticado</h5>
                    <p class="card-text">Protótipo desenvolvido para uma tela de login com autenticaçao em banco com CRUD</p>
                    <a href="/login" class="btn btn-primary">Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Joguinho de Jokempo aleatorio.</h5>
                    <p class="card-text">Protótipo desenvolvido para treinar a passagem de parametros entre views</p>
                    <a href="/jokenpo_game" class="btn btn-primary">Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Leitor de TXT.</h5>
                    <p class="card-text">Protótipo desenvolvido paraler txt e manipular os dados para inclusao ou modificaçao</p>
                    <a href="/" class="btn btn-primary">Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Job Processor - teste de jobs</h5>
                    <p class="card-text">Protótipo desenvolvido para disparar um job de relatorio</p>
                    <a href="/job_view" class="btn btn-primary">Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
        <div class="col-sm">
            <!------Card Begin-------->
            <div class="card" style="width: 18rem;">
                <img src="{{asset('imagens/thumbs.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Erro 404 esse projeto ainda nao existe.</h5>
                    <p class="card-text">Protótipo desenvolvido para ... Ops erro 404, prototipo nao encontrado</p>
                    <a href="/" class="btn btn-primary">Não Ver Projeto</a>
                </div>
            </div>
            <!------Card End-------->
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            <h4>Testando pagina de Jobs</h4>
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>

</BODY>
</HTML>
