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
                    AGÊNCIA DE CRIAÇÃO
                    <span>WEBSITES</span>
                    <span>LOJAS VIRTUAIS</span>
                    <span>REDES SOCIAIS</span>
                    <span>SEO</span>
                    MARKETING</h2>
                <!-- End header content slider -->
                <!-- Header btn area -->
                <div class="header-btn-area">
                    <a class="knowmore-btn" href="https://wa.me/+5548988288309?text=Vi%20seu%20website%20e%20gostaria%20de%20melhorar%20minha%20presen%C3%A7a%20online%20atrav%C3%A9s%20dos%20servi%C3%A7os%20da%20Agencia%20Novaz%20" target="blank">(48)9.8828-8309</a>
                    <a class="download-btn" href="{{ url('/#contact') }}">Solicite Orçamento</a>
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
                            <h2 class="tittle">Bem vindo a <span>Novaz</span></h2>
                            <span class="tittle-line"></span>
                            {{-- <p>A empresa <span>Novaz – Desenvolvendo o futuro da web</span> . Focaliza seu campo de atuação na cidades de <span>Curitiba e região metropolitana</span> desenvolvendo <span>Logotipos, Websites e Publicidade na internet</span>.
                                Atende empresas de <span>pequeno e médio porte</span>, soluciona as necessidades de comunicação de cada um de seus clientes. Acompanha as fases de <span>planejamento, design e produção</span>, oferecendo um produto condizente
                                com a <span>qualidade do projeto</span> inicialmente apresentado. Nos diferenciamos pela <span>criatividade</span> e <span>amor</span> empregado a cada projetos.
                            </p> --}}
                            <p style="font-size: 1.2em">                            
                                  
                                <span>A Novaz</span> é uma <span>agência digital</span> localizada em Curitiba, especializada no desenvolvimento de <span>logotipos, websites e publicidade na internet </span>Atendemos empresas de pequeno e médio porte, com soluções personalizadas para cada cliente, garantindo uma <span>comunicação visual</span> que destaca a marca no mercado. 
                            </p>
                                
                                <p style="font-size: 1.2em">
                                    Nosso processo acompanha cada etapa, desde o <span>planejamento</span>, <span>design</span> e  <span>produção</span>, assegurando que o produto final mantenha o padrão de qualidade proposto inicialmente. Na <span>Novaz</span>, nos diferenciamos pela <span>criatividade, inovação e dedicação</span> em cada projeto. Fazemos muito mais que desenvolver: transformamos sua <span>presença digital</span>     em uma ferramenta de <span>sucesso.</span>

                            </p>


                        </div>
                        <div class="welcome-content">
                            <ul class="wc-table">
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-users wc-icon"></span>
                                        <h4 class="wc-tittle">Experiência</h4>
                                        <p>A Novaz conta com profissionais com 20 anos de experiência. Especializados em suas áreas de atuação. Profissionais que além de tudo. Amam o que fazem.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-sellsy wc-icon"></span>
                                        <h4 class="wc-tittle">Inovação</h4>
                                        <p style="font-size: 1.2em">A Novaz utiliza em seus serviços as últimas tecnologias e tendências de sua área. se preocupando sempre em entregar a melhor solução aos problemas de publicidade de sua empresa.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-line-chart wc-icon"></span>
                                        <h4 class="wc-tittle">Eficiência</h4>
                                        <p style="font-size: 1.2em">Publicidade é muito mais que imagens e textos. é preciso saber diferenciar e identificar a melhor solução para determinado problema. isso é Design isso é o que a Novaz faz.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-wc-content wow fadeInUp">
                                        <span class="fa fa-calendar wc-icon"></span>
                                        <h4 class="wc-tittle">Compromisso</h4>
                                        <p style="font-size: 1.2em">A Novaz se orgulha do seu grande comprometimento com a qualidade do serviço e do cumprimento de seus prazos.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End welcome area -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="about-area">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="about-left wow fadeInLeft">
                                    <img src="{{ asset('images/about-img.jpg') }}" alt="img">
                                    <a class="introduction-btn" href="#">Daniel Novaz</a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="about-right wow fadeInRight">
                                    <div class="title-area">
                                        <h2 class="tittle">Sobre o <span>Profissional</span></h2>
                                        <span class="tittle-line"></span>
                                        <p style="font-size: 1.2em">Trabalho com <span>Design desde 2003</span>. E sou </span>desenvolvedor web full-stack desde 2007</span> ao longo de meus <span>20 anos de experiência</span> já trabalhei em <span>agências publicitárias, gráficas e agencias digitais de todos os portes</span>. Passei <span>quatro anos ministrando aulas</span> para cursos de formação de profissionais de <span>Design Gráfico</span>, <span>Desenvolvedor Front e Back-end</span>, fui responsável por <span>palestras no ano de 2009</span> e sou completamente <span>Apaixonado</span> pelo que faço. Desenvolvo <span>websites de maneira artesanal</span>, me preocupando com cada detalhe inclusive as <span>Webstandards e SEO</span> resultando em melhores
                                            posições nos sites de busca como <span>Google.</span></p>
                                        <div class="about-btn-area">
                                            <a href="{{ url('/#contact') }}" class="button button-default" data-text="Entrar em contato"><span>Entrar em contato</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- Start call to action -->
    <section id="call-to-action">
        <img src="{{ asset('images/call-to-action-bg.png') }} " alt="img">
        <div class="call-to-overlay">
            <div class="container">
                <div class="call-to-content wow fadeInUp">
                    <h2>   Peça uma análise da sua presença online grátis.</h2>
                    <a href="{{ url('/#contact')}} " class="button button-default" data-text="Agora."><span>Solicitar Análise</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End call to action -->

    <!-- Start service section-->
   <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Serviços</h2>
              <span class="tittle-line"></span>
              <p>Oferecemos soluções completas para impulsionar sua presença online.</p>
            </div>
            <div class="service-content">
              <ul class="service-table">
               
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Websites</h4>
                    <p>Desenvolvemos sites com design profissional, personalizado e funcional. Oferecemos registro de domínio e muito mais para garantir sua presença online completa.</p>
                  </div>
                  
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Lojas Virtuais</h4>
                    <p>Desenvolvemos lojas virtuais completas, pensadas para  maximizar suas vendas. Com design moderno, integração de pagamento segura e gerenciamento fácil, criamos plataformas sob medida.</p>
                        </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="single-service wow slideInUp">
                    <span class="fa fa-edit service-icon"></span>
                    <h4 class="service-title">Redes Sociais</h4>
                    <p>Gerenciamos suas redes sociais com estratégias eficazes, conteúdo criativo e engajamento autêntico. Aumente sua visibilidade e conecte-se com o público certo através de campanhas personalizadas.</p>
                </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Criação Gráfica</h4>
                    <p>Desenvolvemos peças gráficas criativas e profissionais.Seja identidade visual ou materiais promocionais, nosso design impactante comunica suas ideias de forma clara e atraente.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 


    <!-- Start Portfolio section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-area">
                        <div class="title-area">
                            <h2 class="tittle">Portfolio</h2>
                            <span class="tittle-line"></span>
                            <p>Nossos ultimos trabalhos</p>
                        </div>
                        <!-- Portfolio content -->
                        <div class="portfolio-content">
                            <!-- portfolio menu -->
                            <div class="portfolio-menu">
                                <ul>
                                    <li class="filter" data-filter="all">Todos</li>
                                    <li class="filter" data-filter=".branding">Logotipos</li>
                                    <li class="filter" data-filter=".websites">Websites</li>
                                    <li class="filter" data-filter=".redes_sociais">Redes Sociais</li>
                                    <li class="filter" data-filter=".outros">Outros</li>
                                </ul>
                            </div>

                            <div id="mixit-container" class="portfolio-container">
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/chico_pizzas-small.jpg') }} " alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/chico_pizzas-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="http://www.agencianovaz.com.br/public/demo/chico_pizzas/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Chico Pizzas - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/oticaredivo-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/oticaredivo-big.jpg') }}"><i class="fa fa-eye"></i></a>
                                                <a class="link-btn" href="{{ asset('/images/portfolio/logos/oticaredivo.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Ótica Redivo - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/inkjet-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/inkjet-big.jpg') }}"><i class="fa fa-eye"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Inkjet - Itajaí-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/cristiano_de_sa_small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <d   iv class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/cristiano_de_sa_big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/cristianodesa.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Cristiano de Sá - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>           
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/cofee_and_beer-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/coffee_and_beer-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/cofeeandbeer.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Coffee & Beer - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                   
                                
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/cupcakes-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/cupcakes-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ url('/demo/cupcakesdapaula/')}}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Cupcakes da Paula - Florianópolis-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix websites">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/website/hotel-zata-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/website/hotel-zata-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ url('/demo/hotel_zata/') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Website</h4>
                                                <span>Hotel Zata - Criciúma-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/o_catarina-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/o_catarina-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/ocatarina.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>O Catarina Florianópolis-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix branding">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/logos/mao_amiga-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/logos/mao_amiga-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="{{ asset('images/portfolio/logos/maoamiga.pdf') }}" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Criação de Logotipo</h4>
                                                <span>Mão Amiga - Laguna-SC</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix redes_sociais">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/redes_sociais/hgsolucoes-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/redes_sociais/hgsolucoes-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                                <a class="link-btn" href="https://www.facebook.com/HG-Solu%C3%A7%C3%B5es-Financeiras-961318787280334/" target="_blank"><i class="fa fa-link"></i></a>
                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Publicidade na Internet</h4>
                                                <span>HG Soluções Financeiras</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix outros">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/manipulacao_de_imagens/bentoloveemaxwell-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/manipulacao_de_imagens/bentoloveemaxwell-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Manipulação de Imagem</h4>
                                                <span>Bento Love And Maxwell</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-portfolio mix outros">
                                    <div class="single-item">
                                        <img src="{{ asset('images/portfolio/manipulacao_de_imagens/pense-sempre-small.jpg') }}" alt="img">
                                        <div class="single-item-content">
                                            <div class="portfolio-social-icon">
                                                <a class="fancybox" data-fancybox-group="gallery" href="{{ asset('images/portfolio/manipulacao_de_imagens/pense_sempre-big.jpg') }}"><i class="fa fa-eye"></i></a>

                                            </div>
                                            <div class="portfolio-title">
                                                <h4>Manipulação de Imagem</h4>
                                                <span>Pense Sempre - Florianópolis</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Portfolio section -->

    <!-- Start counter section -->
    <section id="counter">
        <img src="{{ asset('images/counter-bg.jpg') }}" alt="img">
        <div class="counter-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start counter area -->
                        <div class="counter-area">
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-counter">
                                    <span class="fa fa-users"></span>
                                    <div class="counter-count">
                                        <span class="counter">100</span>
                                        <p>Clientes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-counter">
                                    <span class="fa fa-cog"></span>
                                    <div class="counter-count">
                                        <span class="counter">320</span>
                                        <p>Projetos</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-counter">
                                    <span class="fa fa-twitter"></span>
                                    <div class="counter-count">
                                        <span class="counter">407</span>
                                        <p>Seguidores</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="single-counter">
                                    <span class="fa fa-facebook"></span>
                                    <div class="counter-count">
                                        <span class="counter">115</span>
                                        <p>Curtidas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Pricing Table section -->
    <section id="pricing-table">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pricing-table-area">
                        <div class="title-area">
                            <h2 class="tittle">Investimento</h2>
                            <span class="tittle-line"></span>
                            <p>Conheça e escolha um dos nossos serviços para começarmos a alavancar suas vendas.</p>
                        </div>
                        <!-- service content -->
                        <div class="pricing-table-content">

                            <ul class="price-table">
                                <li class="wow slideInUp">
                                    <div class="single-price">
                                        <h4 class="price-header">Logotipo</h4>
                                        <span class="price-amount">2x de R$250.00</span>
                                        <p>Identidade Visual Completa</p>
                                        <p>1 a 3 esboços no pacote inicial</p>
                                        <p>2 Revisões do esboço</p>
                                        <p>Manual da Marca</p>
                                        <p>Entrega em 5 dias utéis</p>
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="code" value="8E0C8E8D9F9FD111149A6FA3D8827E05" />
                                            <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/assinaturas/120x53-contratar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        </a>
                                    </div>
                                </li>
                                <li class="wow slideInUp">
                                    <div class="single-price standard-price">
                                        <h4 class="price-header">Website</h4>
                                        <span class="price-amount">4x de R$325.00</span>
                                        <p>Layout Personalizado</p>
                                        <p>Website Responsivo</p>
                                        <p>Gerenciador de conteúdo</p>
                                        <p>Sua empresa aberta 24 Horas</p>
                                        <p>Sua Empresa no Google.</p>
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="code" value="69A460813D3DF0E0041FAFB099B76B2E" />
                                            <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/assinaturas/120x53-contratar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </div>
                                </li>
                                <li class="wow slideInUp">
                                    <div class="single-price">
                                        <h4 class="price-header">Registro de Dominio</h4>
                                        <span class="price-amount">A vista R$60.00</span>
                                        <p>www.suaempresa.com.br</p>
                                        <p>contato@suaempresa.com.br</p>
                                        <p>Sua empresa aberta 24 Horas.</p>
                                        <p>Sua Empresa no Google.</p>
                                        <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                                        <form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="code" value="D3C7649A5555438AA497BFBB478FD453" />
                                            <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/assinaturas/120x53-contratar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                        <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
                                    </div>
                                </li>
                                <li class="wow slideInUp">
                                    <div class="single-price">
                                        <h4 class="price-header">Social Media</h4>
                                        <span class="price-amount">2x de R$150.00</span>
                                        <p>Capa para Facebook</p>
                                        <p>Capa para Twitter</p>
                                        <p>Google Meu Negócio</p>
                                        <form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
                                            <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                                            <input type="hidden" name="code" value="B44E53FBE2E2EBA55431FF832AFAC8FE" />
                                            <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/assinaturas/120x53-contratar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    </section> 
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
                            <p>Whatsapp: <a href="https://wa.me/5548988288309?text=Gostaria%20de%20avaliar%20minha%20presen%C3%A7a%20online%20e%20gerar%20mais%20visibilidade%20a%20minha%20empresa" style="color: white">55+ 48 9 9.88288309</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <x-contact-form />
                </div>
            </div>
        </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d916576.3811702927!2d-49.5608904954018!3d-26.18442842511162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce24fc0e0abb9%3A0x50ac2619d0ff0c71!2sNovaz+-+Cria%C3%A7%C3%A3o+de+Websites%2C+Logotipos%2C+Publicidade!5e0!3m2!1sen!2sbr!4v1564323270740!5m2!1sen!2sbr" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
@endsection