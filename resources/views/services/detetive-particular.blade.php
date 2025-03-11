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
                    INVESTIGAÇÃO    
                    <span>CONJUGAL</span>
                    <span>DOS FILHOS</span>
                    <span>CONTRAESPIONAGEM</span>                    
                     NA INTERNET</h2>
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


<!-- Hero Section -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Transforme Seu Negócio com um Website Profissional</h1>
      <p class="lead">Na NOVAZ, criamos websites que combinam design, funcionalidade e performance para destacar sua marca online.</p>
      <a href="#contato" class="btn btn-light btn-lg">Solicite um Orçamento</a>
    </div>
  </section>

  <!-- Serviços Section -->
  <section id="servicos" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nossos Serviços</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Sites Institucionais</h5>
              <p class="card-text">Criação de sites institucionais para empresas que buscam uma presença online forte e profissional.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Lojas Virtuais</h5>
              <p class="card-text">Desenvolvimento completo de e-commerces integrados com métodos de pagamento e design moderno.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Portfólios Online</h5>
              <p class="card-text">Ideal para profissionais que desejam apresentar seus trabalhos de maneira criativa e impactante.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Processo Section -->
  <section id="processo" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center mb-4">Nosso Processo</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Briefing</h5>
              <p class="card-text">Entendemos suas necessidades e objetivos para criar um site alinhado com sua visão.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Planejamento</h5>
              <p class="card-text">Desenvolvemos o layout e as funcionalidades para garantir uma experiência única.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Desenvolvimento</h5>
              <p class="card-text">Nossos programadores trazem o design à vida com tecnologia de ponta.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Lançamento e Suporte</h5>
              <p class="card-text">Após o lançamento, oferecemos suporte contínuo para garantir o sucesso do site.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vantagens Section -->
<section id="vantagens" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Vantagens de Contratar um Detetive Particular</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Confidencialidade Absoluta</h5>
                <p>Garantimos total sigilo em todas as investigações, preservando a privacidade de nossos clientes.</p>
            </div>
            <div class="col-md-6">
                <h5>Resultados Precisos</h5>
                <p>Com técnicas avançadas e anos de experiência, entregamos informações claras e confiáveis.</p>
            </div>
            <div class="col-md-6">
                <h5>Atendimento 24/7</h5>
                <p>Estamos disponíveis a qualquer hora, prontos para ajudar em situações urgentes e complexas.</p>
            </div>
            <div class="col-md-6">
                <h5>Discrição Profissional</h5>
                <p>Realizamos cada caso com cuidado e discrição, garantindo que suas preocupações sejam tratadas com respeito.</p>
            </div>
        </div>
    </div>
</section>

 
  <!-- FAQ Section -->
  <section id="faq" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Perguntas Frequentes</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Quanto tempo leva para criar um website?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              O tempo de criação varia conforme a complexidade do projeto. Em média, um site institucional simples leva cerca de 3 a 4 semanas para ser desenvolvido.
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
                                        <p>Contratei o serviço de detetive particular para solucionar uma questão pessoal delicada. A Paula foi extremamente discreta e profissional, e as informações que recebi foram cruciais para resolver minha situação.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/paula_moretti.png') }}" alt="img">
                                            <p>Paula Moretti</p>
                                            <span>Cupcakes da Paula</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>O detetive conseguiu desvendar um caso complexo relacionado à minha empresa. A investigação foi conduzida com muito profissionalismo e me ajudou a proteger meu negócio.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/ivonei_s_cescon.png') }}" alt="img">
                                            <p>Ivonei S. Cescon</p>
                                            <span>WD Wall Divisórias</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Contratei os serviços para uma investigação envolvendo minha ótica, e fiquei impressionado com a rapidez e precisão dos resultados. Recomendo a todos que precisam de apoio profissional em situações delicadas.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/lucas_redivo.png') }}" alt="img">
                                            <p>Lucas Redivo</p>
                                            <span>Ótica Redivo</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>O trabalho do detetive foi fundamental para entender melhor um problema que eu enfrentava na minha academia. Com os resultados, tomei as decisões certas para o futuro do meu negócio.</p>
                                        <div class="single-testimonial">
                                            <img class="testimonial-thumb" src="{{ asset('images/testemunhos/fabiano_winiarski.png') }}" alt="img">
                                            <p>Fabiano Winiarski</p>
                                            <span>Performance Academia</span>
                                        </div>
                                    </div>
                                    <!-- single slide -->
                                    <div class="single-slide">
                                        <p>Fiquei impressionado com a atenção aos detalhes e a agilidade no atendimento. O detetive conseguiu informações críticas em um curto período, e isso fez toda a diferença no meu caso.</p>
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
                            <p>Whatsapp: <a href="https://wa.me/5548988288309?text=Gostaria%20de%20avaliar%20minha%20presen%C3%A7a%20online%20e%20gerar%20mais%20visibilidade%20a%20minha%20empresa">55+ 48 9 9.88288309</a></p>
                        </address>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="contact-right wow fadeInRight">
                        <h2>Envie uma mensagem</h2>
                        <x-contact-form />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection