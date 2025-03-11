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
                    TENHA SEU  
                    <span>WEBSITE</span>
                    <span>LOJAS VIRTUAL</span>
                    <span>BLOG</span>                    
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

    <!-- Start about section -->
    <section id="about">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="about-area">
                      <div class="row">
                          <div class="col-md-5 col-sm-6 col-xs-12">
                              <div class="about-left wow fadeInLeft">
                                  <img src="{{ asset('images/about-websites.png') }}" alt="img">
                                  {{-- <a class="introduction-btn" href="#">Daniel Novaz</a> --}}
                              </div>
                          </div>
                          <div class="col-md-7 col-sm-6 col-xs-12">
                              <div class="about-right wow fadeInRight">
                                  <div class="title-area">
                                      <h2 class="tittle">Transforme Seu Negócio </span></h2>
                                      <span class="tittle-line">com um Website Profissional</span>
                                      <p>a NOVAZ, criamos websites que combinam design, funcionalidade e performance para destacar sua marca online.</p>
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


 
  <!-- Start processo section-->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Nosso Processo</h2>
              <span class="tittle-line"></span>
              <p>Oferecemos soluções completas para impulsionar sua presença online.</p>
            </div>
            <div class="service-content">
              <ul class="service-table">
               
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Briefing</h4>
                    <p>Entendemos suas necessidades e objetivos para criar um site alinhado com sua visão.</p>
                  </div>
                  
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Planejamento</h4>
                    <p>Desenvolvemos o layout e as funcionalidades para garantir uma experiência única.</p>

                </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="single-service wow slideInUp">
                        <span class="fa fa-edit service-icon"></span>
                        <h4 class="service-title">Desenvolvimento</h4>
                        <p>Nossos programadores trazem o design à vida com tecnologia de ponta.</p>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Lançamento e Suporte</h4>
                    <p>Após o lançamento, oferecemos suporte contínuo para garantir o sucesso do site.</p>

                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 



  <!-- Start service section-->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Soluções</h2>
              <span class="tittle-line"></span>
              <p>Oferecemos soluções completas para impulsionar sua presença online.</p>
            </div>
            <div class="service-content">
              <ul class="service-table">
               
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Websites Institucionais</h4>
                    <p>Criação de sites institucionais para empresas que buscam uma presença online forte e profissional.</p>
                  </div>
                  
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Lojas Virtuais</h4>
                    <p>Desenvolvimento completo de e-commerces integrados com métodos de pagamento e design moderno.</p>

                </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="single-service wow slideInUp">
                        <span class="fa fa-edit service-icon"></span>
                        <h4 class="service-title">Redes Sociais</h4>
                        <p>Gerenciamos suas redes sociais com estratégias eficazes, conteúdo criativo e engajamento autêntico. </p>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Portfólios Online</h4>
                    <p>Ideal para profissionais que desejam apresentar seus trabalhos de maneira criativa e impactante.</p>

                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 

 
   
  <!-- Start vantagens section-->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="service-area">
            <div class="title-area">
              <h2 class="tittle">Vantagens de Ter um Website Profissional</h2>
              <span class="tittle-line"></span>
              <p></p>
            </div>
            <div class="service-content">
              <ul class="service-table">
               
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-sort-amount-asc service-icon"></span>
                    <h4 class="service-title">Credibilidade</h4>
                    <p>Um site bem desenvolvido transmite confiança para seus clientes, consolidando sua marca no mercado.</p>
                  </div>
                  
                </li>
                <li class="col-md-3 col-sm-6">
                 <div class="single-service wow slideInUp">
                    <span class="fa fa-map-o service-icon"></span>
                    <h4 class="service-title">Acessibilidade 24/7</h4>
                    <p>Com um site, sua empresa estará disponível para todos, a qualquer hora do dia, aumentando suas chances de novos negócios.</p>

                </div>
                </li>
                <li class="col-md-3 col-sm-6">
                    <div class="single-service wow slideInUp">
                        <span class="fa fa-edit service-icon"></span>
                        <h4 class="service-title">Expansão de Alcance</h4>
                        <p>Um site pode ampliar significativamente seu público, atraindo novos clientes em diferentes regiões.</p>
                    </div>
                </li>
                <li class="col-md-3 col-sm-6">
                  <div class="single-service wow slideInUp">
                    <span class="fa fa-rocket service-icon"></span>
                    <h4 class="service-title">Personalização</h4>
                    <p>Um design sob medida permite que seu site reflita fielmente a identidade única do seu negócio.</p>

                  </div>
                </li>

              </ul>
            </div>
          </div>
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
    
@endsection