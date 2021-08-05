@extends('front.master.master')

@section('title' , 'Home')

    @section('content')

        <!-- Begin Hero Area -->
        <div class="hero-area hero-bg hero-style-5" data-bg-image="front/assets/images/hero/bg/5-1-1920x1027.png">
            <div class="container hero-container">
                <div class="hero-item">
                    <div class="hero-content white-text">
                        <h1 class="title">O PHP Framework para Web Artisans</h1>
                        <p class="desc">Laravel é um framework de aplicação web com sintaxe expressiva e elegante. Já estabelecemos a base - liberando você para criar sem se preocupar com as pequenas coisas.
                        </p>
                        <div class="btn-wrap">
                            <a class="btn btn-custom-size btn-lg extbot-primary-5 blackcurrant-hover" href="http://laravel.com">Ver mais</a>
                        </div>
                    </div>
                    <div class="hero-img">
                        <div class="single-img">
                            <img src="front/assets/images/hero/inner-img/bg_1.jpeg" style=" width: 803px; border-radius: 10px; box-shadow: 1px 4px 20px 0px #0c0c0c47; " alt="Hero Image">
                        </div>
                        <div class="hero-sticker-wrap">
                            <div class="scene fill">
                                <div class="expand-width" data-depth="0.2">
                                    <div class="hero-sticker"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End Here -->

        <!-- Begin Banner Area -->
        <div class="banner-area banner-style-10 mb-5">
            <div class="container banner-container-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-img">
                            <img src="front/assets/images/banner/1.jpg" alt="Banner" style="width: 803px;border-radius: 10px;box-shadow: 1px 4px 20px 0px #0c0c0c47;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span class="banner-category">Fácil de gerenciar</span>
                            <h2 class="banner-title">O PHP Framework para Web Artisans.</h2>
                            <p class="banner-desc">Laravel é um framework de aplicação web com sintaxe expressiva e elegante. Já estabelecemos a base - liberando você para criar sem se preocupar com as pequenas coisas.
                            </p>
                            <p class="banner-desc mb-0">Laravel é um framework de aplicação web com sintaxe expressiva e elegante.
                            </p>
                            <div class="banner-btn-wrap">
                                <a class="btn btn-custom-size btn-lg extbot-primary-5 blackcurrant-hover" href="contact.html">
                                    Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->




        <!-- Begin Banner Area -->
        <div class="banner-area banner-style-11">
            <div class="container banner-container-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span class="banner-category">Fácil de gerenciar</span>
                            <h2 class="banner-title">O PHP Framework para Web Artisans.</h2>
                            <p class="banner-desc">Laravel é um framework de aplicação web com sintaxe expressiva e elegante. Já estabelecemos a base - liberando você para criar sem se preocupar com as pequenas coisas.
                            </p>
                            <div class="banner-btn-wrap">
                                <a class="btn btn-custom-size btn-lg extbot-primary-5 blackcurrant-hover" href="contact.html">Ver mais</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img">
                            <div class="banner-sticker-wrap style-1">
                                <div class="scene fill">
                                    <div class="expand-width" data-depth="0.2">
                                        <div class="banner-sticker"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-img">
                            <img src="front/assets/images/banner/2.jpg" alt="Banner" style="width: 803px;border-radius: 10px;box-shadow: 1px 4px 20px 0px #0c0c0c47;">
                            </div>
                            <div class="banner-sticker-wrap style-2">
                                <div class="scene fill">
                                    <div class="expand-width" data-depth="-0.2">
                                        <div class="banner-sticker"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End Here -->

        

        <!-- Begin Pricing Area -->
        <div class="pricing-area pricing-style-5 mb-5">
            <div class="container">
                <div class="section-area">
                    <h2 class="section-title">Preço & Plano</h2>
                    <p class="section-desc">Isso requer uma plataforma robusta de comércio eletrônico que otimiza sua loja e produtos</p>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="pricing-tab">
                            <ul class="nav pricing-tab-nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="tab-btn" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">
                                        Mênsal
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="active tab-btn" id="yearly-tab" data-bs-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="true">
                                        Anual
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content pricing-tab-content">
                            <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                                <div class="pricing-item-wrap row">
                                    <div class="col-lg-4">
                                        <div class="pricing-item mt-0">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$68</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Básico</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-item">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$70</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Avançado</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-item">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$72</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Premium</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                                <div class="pricing-item-wrap row">
                                    <div class="col-lg-4">
                                        <div class="pricing-item mt-0">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$68</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Básico</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-item">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$70</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Avançado</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricing-item">
                                            <div class="pricing-wrap">
                                                <div class="pricing-info">
                                                    <span class="price">$72</span>
                                                    <span class="month">/mênsal</span>
                                                </div>
                                            </div>
                                            <div class="pricing-list-wrap">
                                                <h2 class="pricing-title">Plano Premium</h2>
                                                <ul class="pricing-list style-2">
                                                    <li>
                                                        <a href="contact.html">
                                                        Otimizado para celular
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Domínio personalizado grátis
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">
                                                        Melhor Hospedagem
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="pricing-btn-wrap">
                                                    <a class="btn btn-custom-size btn-outline" href="contact.html">Eu quero</a>
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
        </div>
        <!-- Pricing Area End Here -->

    

        <!-- Begin Newsletter Area -->
        <div class="newsletter-area style-4 newsletter-space-top-n140">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-item" data-bg-image="front/assets/images/newsletter/bg/4-1-1173x373.png">
                            <div class="inner-item">
                                <h2 class="newsletter-title">Junte-se a nós.</h2>
                                <p class="newsletter-desc">Isso requer produtos robuste e de comércio eletrônico</p>
                                <form class="newsletter-form" id="mc-form" action="#">
                                    <input class="input-field" id="mc-email" type="email" autocomplete="off" name="Enter Your Email" value="Enter Your Email" onblur="if(this.value==''){this.value='Enter Your Email'}" onfocus="if(this.value=='Enter Your Email'){this.value=''}">
                                    <div class="btn-wrap">
                                        <button class="btn btn-custom-size blue-color blackcurrant-hover" id="mc-submit">
                                            Se inscrever
                                            <i class="icofont-double-right"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- Mailchimp Alerts -->
                                <div class="mailchimp-alerts text-centre p3-5">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Area End Here -->

        <!-- Begin FAQ Area -->
        <div class="faq-area faq-style-common faq-style-2">
            <div class="container">
                <div class="section-area">
                    <h2 class="section-title">Resposta da questão</h2>
                    <p class="section-desc">Isso requer uma plataforma robusta de comércio eletrônico que otimiza sua loja e produtos
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-item">
                            <h3 class="faq-title">Como que faço para atravessar a rua?</h3>
                            <p class="faq-desc">levanta sua perna direita e direção ao outro lado da rua e com seu calcanhar impulsione o seu corpo para frente e repita o processo até chegar no outro lado
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-item">
                            <h3 class="faq-title">Como faço a instalação do Laravel?</h3>
                            <p class="faq-desc">No seu editor de código abra o terminal e digite esse codigo <br> "composer create-project --prefer-dist laravel/laravel blog "6.*""
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-item">
                            <h3 class="faq-title">Quem é o criador desse framework?</h3>
                            <p class="faq-desc">Taylor B. Otwell
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-item">
                            <h3 class="faq-title">Qual o melhor curso de Laravel?</h3>
                            <p class="faq-desc">Com toda certeza , o melhor curso de laravel é da UpInside! !
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="faq-btn-wrap">
                            <a class="btn btn-custom-size extbot-primary-5 blue-hover" href="contact.html">Outra questão?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Area End Here -->
@endsection