@extends('site.layout.template')

@section('title', 'Sobre nós')

@section('content')


<div class="tabs-wrapper">
    <div class="tabs">
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
          <label for="tab-1" class="tab-label">Missão</label>
          <div class="tab-content">
            My father had a small estate in Nottinghamshire: I was the third of five sons. He sent me to Emanuel College in Cambridge at fourteen years old, where I resided three years, and applied myself close to my studies; but the charge of maintaining me, although I had a very scanty allowance, being too great for a narrow fortune, I was bound apprentice to Mr. James Bates, an eminent surgeon in London, with whom I continued four years. </div>
        </div>
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
          <label for="tab-2" class="tab-label">Visão</label>
          <div class="tab-content">
            My father now and then sending me small sums of money, I laid them out in learning navigation, and other parts of the mathematics, useful to those who intend to travel, as I always believed it would be, some time or other, my fortune to do. </div>
        </div>
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
          <label for="tab-3" class="tab-label">Valores</label>
          <div class="tab-content">When I left Mr. Bates, I went down to my father: where, by the assistance of him and my uncle John, and some other relations, I got forty pounds, and a promise of thirty pounds a year to maintain me at Leyden: there I studied physic two years and seven months, knowing it would be useful in long voyages.</div>
        </div>
    </div>
</div>


<h2>Nossos profissionais</h2>

<div class="card-group">
    <div class="card card-basic-bg">
        <div class="card-header">

        </div>
        <div class="card-content">
            <h3>Eberson Morais</h3>
            <span>
                Possui conhecimento na área com a qual o cliente vai interagir, ou sejam, a tela.
                Ele é nosso profissional front-end, responsável pela experiencia de interface e usuário dos nosos sistemas desenvolvidos.
            </span>
        </div>
    </div>
    <div class="card card-basic-bg">
        <div class="card-header"></div>
        <div class="card-content">
            <h3>Lucas Carvalho</h3>
            <span>
                Possui experiencia com algumas linguagens de programação e criação de telas.
                Seu foco maior é a linguagem de servidor PHP e criação de app mobile com Flutter
            </span>
        </div>
    </div>
    <div class="card card-basic-bg">
        <div class="card-header">

        </div>
        <div class="card-content">
            <h3>Lucas John</h3>
            <span>
                Possui conhecimento com linguagem de servidor como php, assim como trabalhar com Laravel.
                Atualmente está estudando html e css 
            </span>
        </div>
    </div>
</div>


@endsection
