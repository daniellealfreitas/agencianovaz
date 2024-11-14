@extends('layouts.app')

@section('title', 'Novaz - Criação de Logotipos, Websites e Publicidade na Internet - Curitiba 55+ 48 9 8828-8309')

@section('header')
 <!-- Start header section -->


 <header id="header">
    <div class="header-inner">
        <!-- Header image -->
        <img src="{{  asset('images/header-bg.jpg') }}" alt="img" />
        <div class="header-overlay">
            <div class="header-content">
                <!-- Start header content slider -->
                <h2 class="header-slide">
                    GERANDO   
                    <span>RESULTADOS</span>
                    <span>VENDAS</span>
                    <span>SOLUÇÕES</span>
                    <span>ATRAVÉS</span> DO MARKETING</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a class="knowmore-btn" href="{{ url('/#about')}}">Saiba Mais</a>
                    <a class="download-btn" href="{{ url('/#contact') }}">Solicite Orçamento</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->
@endsection

@section('content')



@endsection