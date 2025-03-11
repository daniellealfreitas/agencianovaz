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
                    CRIAÇÃO GRÁFICA   
                    <span>IDENTIDADE VISUAL</span>
                    <span>IMPRESSOS</span>
                    <span>PLACAS </span>
                    <span>COMUNIQUE</span> MELHOR</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a class="knowmore-btn" href="#about">Saiba Mais</a>
                    <a class="download-btn" href="#contact">Solicite Orçamento</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End header section -->
@endsection

@section('content')
    <!-- Start about section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start welcome area -->
                    <div class="welcome-area">
                        <div class="title-area">
                            <h2 class="tittle">Criação Gráfica</h2>
                            <span class="tittle-line">A imagem da sua empresa!</span>
                            <p>Representamos a sua empresa de forma única e marcante, assim, além de uma primeira impressão consolidada, você terá a longo prazo um reconhecimento de marca. </p>
                        </div>

                        <div class="welcome-content">
                            <ul class="wc-table">
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-users wc-icon"></span>
                                        <h4 class="wc-tittle">Briefing</h4>
                                        <p>Nossa equipe irá entender seu projeto, marca e objetivo..</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-sellsy wc-icon"></span>
                                        <h4 class="wc-tittle">Criação</h4>
                                        <p>Iremos unir seu briefing ao nosso conhecimento de mercado e criaremos seu material.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-line-chart wc-icon"></span>
                                        <h4 class="wc-tittle">Aprovação</h4>
                                        <p>Enviaremos para sua aprovação.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-calendar wc-icon"></span>
                                        <h4 class="wc-tittle">Resultados</h4>
                                        <p>A Novaz se orgulha do seu grande comprometimento com a qualidade do serviço e do cumprimento de seus prazos.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End welcome area -->
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="about-area">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="about-left wow fadeInLeft">
                                    <img src="{{ asset('images/about-img.jpg') }}" alt="img">
                                    <a class="introduction-btn" href="#">Fundador</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="about-right wow fadeInRight">
                                    <div class="title-area">
                                        <h2 class="tittle">Sobre o <span>Fundador</span></h2>
                                        <span class="tittle-line"></span>
                                        <p>Tenho <span>36 anos</span> nasci em São Paulo Capital. Resido atualmente em <span>Curitiba</span>. Trabalho com <span>Design desde 2003</span>. E sou </span>desenvolvedor web full-stack desde 2007</span> ao longo de meus <span>20 anos de experiência</span> já trabalhei em <span>agências publicitárias, gráficas e Agencias digitais de todos os portes</span>. Passei <span>quatro anos ministrando aulas</span> para cursos de formação de profissionais de <span>Design Gráfico</span>, <span>Desenvolvedor Front e Back-end</span>, fui responsável por <span>palestras no ano de 2009</span> e sou completamente <span>apaixonado</span> pelo que faço. Desenvolvo <span>websites de maneira artesanal</span>, me preocupando com cada detalhe inclusive as <span>Webstandards e SEO</span> resultando em melhores
                                            posições nos sites de busca como <span>Google.</span></p>
                                        <div class="about-btn-area">
                                            <a href="#contact" class="button button-default" data-text="Fale com o Fundador"><span>Fale com o Fundador</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- End about section -->

    <section id="produtos">
        <div class="container">
            <div class="row">
                @php
                    $produtos = [
                        ['nome' => 'Cartão de Visita', 'preco' => 'R$ 50,00', 'descricao' => 'Impressão de cartões de visita personalizados.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Panfletos e Flyers', 'preco' => 'R$ 80,00', 'descricao' => 'Impressão de panfletos promocionais.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Banners e Faixas', 'preco' => 'R$ 60,00/m²', 'descricao' => 'Impressão de banners e faixas em lona.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Adesivos e Etiquetas', 'preco' => 'R$ 90,00', 'descricao' => 'Adesivos personalizados para embalagens.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Envelopes Personalizados', 'preco' => 'R$ 150,00', 'descricao' => 'Impressão de envelopes corporativos.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Papel Timbrado', 'preco' => 'R$ 120,00', 'descricao' => 'Impressão de papel timbrado corporativo.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Pastas Personalizadas', 'preco' => 'R$ 280,00', 'descricao' => 'Pastas para apresentação de documentos.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Talões de Nota e Recibos', 'preco' => 'R$ 80,00', 'descricao' => 'Impressão de talões fiscais personalizados.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Calendários Personalizados', 'preco' => 'R$ 120,00', 'descricao' => 'Calendários personalizados para empresas.', 'img' => 'https://placehold.co/300'],
                        ['nome' => 'Imãs de Geladeira', 'preco' => 'R$ 140,00', 'descricao' => 'Impressão de imãs personalizados.', 'img' => 'https://placehold.co/300']
                    ];
                @endphp
        
                @foreach($produtos as $index => $produto)
                    @if($index % 4 == 0)
                        </div><div class="row">
                    @endif
                    <div class="col-md-3">
                        <div class="panel panel-default animated fadeInUp" style=" transition: 0.3s;">
                            <div class="panel-body text-center">
                                <img src="{{ $produto['img'] }}" class="img-responsive" alt="{{ $produto['nome'] }}">
                                <h4 class="product-title">{{ $produto['nome'] }}</h4>
                                <p>{{ $produto['descricao'] }}</p>
                                <p><strong>{{ $produto['preco'] }}</strong></p>
                                <a href="https://wa.me/5548988288309?text=Gostaria%20de%20solicitar%20o%20produto%20{{ urlencode($produto['nome']) }}%20e%20gerar%20mais%20visibilidade%20a%20minha%20empresa"
                                   class="btn btn-default whatsapp-btn" target="_blank">Solicitar no WhatsApp</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </section>


    <!-- Start call to action -->
    <section id="call-to-action">
        <img src="{{ asset('images/call-to-action-bg.png') }} " alt="img">
        <div class="call-to-overlay">
            <div class="container">
                <div class="call-to-content wow fadeInUp">
                    <h2>Não perca mais oportunidades valiosas.</h2>
                    <a href="#contact" class="button button-default" data-text="Agora."><span>Investir</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End call to action -->


 
     <section id="testimonial">
        <img src=" {{ asset('images/testimonial-bg.jpg') }}" alt="img">
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-area">
                            <div class="title-area">
                                <h2 class="tittle">O que as pessoas dizem sobre a Novaz?</h2>
                                <span class="tittle-line"></span>
                            </div>
                            <div class="testimonial-conten">
                                <!-- Start testimonial slider -->
                                <div class="testimonial-slider">
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Utilizo o Logotipo que a Novaz criou para apresentar meus trabalhos no Facebook. Faço cupcakes personalizados e ter uma marca me ajudou a sair da informalidade.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/paula_moretti.png') }}" alt="img">
                                            <p>Paula Moretti</p>
                                            <span>Cupcakes da Paula</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Contratei em 2012 o serviço de Website da Novaz e mudou meu negócio. Hoje 70% dos meus clientes vem do meu website, Recomendo.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/ivonei_s_cescon.png') }}" alt="img">
                                            <p>Ivonei S. Cescon</p>
                                            <span>WD Wall Divisórias</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>A Novaz desenvolveu o Manual da Marca que irei utilizar na minha ótica. fiquei satisfeito com a qualidade do trabalho.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/lucas_redivo.png') }}" alt="img">
                                            <p>Lucas Redivo</p>
                                            <span>Ótica Redivo</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Através do Website pude ter mais informações de onde os meus clientes vinham e qual o perfil deles. ajudou muito na tomada de decisões da minha empresa.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/fabiano_winiarski.png') }}" alt="img">
                                            <p>Fabiano Winiarski</p>
                                            <span>Performance Academia</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Fiquei impressionado com a agilidade do atendimento, atualizaram meu website antigo e obtive retorno de clientes que elogiaram o site.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/carlos_dropfish.png') }}" alt="img">
                                            <p>Carlos</p>
                                            <span>DropFish</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -

    <!-- End Testimonial section -->


    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="tittle">Clientes</h2>
                    </div>
                    <div class="client-area">
                        <ul class="client-table">
                            <li><img src="{{ asset('images/clientes/cupcakes-da-paula.png') }}" alt="Cupcakes da Paula"></li>
                            <li><img src="{{ asset('images/clientes/wd_wall_divisorias.png') }}" alt="WD Wall Divisórias"></li>
                            <li><img src="{{ asset('images/clientes/otica_redivo.png') }}" alt="Òtica Redivo"></li>
                            <li><img src="{{ asset('images/clientes/hg_solucoes_financeiras2.png') }}" alt="HG Soluções Financeiras"></li>
                            <li><img src="{{ asset('images/clientes/coffee_and_beer.png') }}" alt="Coffee & Beer"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="contact-left wow fadeInLeft">
                        <h2>Contato</h2>
                        <address class="single-address">
                            <h4>Endereço:</h4>
                            <p>R. Adelina Buffara Nasser 100 - CIC , Curitiba - Paraná</p>
                        </address>
                        <address class="single-address">
                            <h4>Telefone</h4>
                            <p>Whatsapp: <a href="https://wa.me/5548988288309?text=Gostaria%20de%20avaliar%20minha%20presen%C3%A7a%20online%20e%20gerar%20mais%20visibilidade%20a%20minha%20empresa">55+ 48 9 9.88288309</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="contact-right wow fadeInRight">
                        <h2>Envie uma mensagem</h2>
                        <x-contact-form />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916576.3811702927!2d-49.5608904954018!3d-26.18442842511162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce24fc0e0abb9%3A0x50ac2619d0ff0c71!2sNovaz+-+Cria%C3%A7%C3%A3o+de+Websites%2C+Logotipos%2C+Publicidade!5e0!3m2!1sen!2sbr!4v1564323270740!5m2!1sen!2sbr" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
@endsection