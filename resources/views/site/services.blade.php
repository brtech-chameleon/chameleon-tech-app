@extends('site.layout.template')

@section('title', 'Nossos serviços')

@section('content')
    <h2>Nossos Serviços</h2>

    <div class="card-group">
        <div class="card card-basic-bg">
            <div class="card-header">
                <img class="avatar" src="{{asset('img/chameleon.jpg')}}">
            </div>
            
            <div class="card-content">
                <h3>Web Site</h3>
                <span>Sua empresa é nova e quer que ela apareça na internet?
                Deseja mostrar seus produtos e ou serviços então conte com a gente,
                desenvolvemos web sites personalizados</span>
            </div>
        </div>
        <div class="card card-basic-bg">
            <div class="card-header">
                <img class="avatar" src="{{asset('img/icon/mobile.png')}}">
            </div>
            <div class="card-content">
                <h3>App Mobile</h3>
                <span>Desenvolvemos Apps Mobile e sobdemanda
                Conheça nossos apps desenvolvidos</span>
            </div>
            
                        

        </div>
        <div class="card card-basic-bg">
            <div class="card-header">
                <img class="avatar" src="{{asset('img/chameleon.jpg')}}">
            </div>
            
            <div class="card-content">
                <h3>Web App</h3>
                <span>Sua empresa precisa de um sistema?
                Não tem problema, pois desenvolvemos também sistemas completos conforme solicitação do cliente</span>
            </div>
        </div>
        <div class="card card-basic-bg">
            <div class="card-header">
                <img class="avatar" src="{{asset('img/chameleon.jpg')}}">
            </div>
            
            <div class="card-content">
                <h3>Manutenção</h3>
                <span>Criamos seu sistema ou site e precisa de manutenção?
                Não tem problema, basta apenas estar cadastrado e abrir um chamado que o atenderemos. </span>
            </div>
        </div>
    </div>
@endsection