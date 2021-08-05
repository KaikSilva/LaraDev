@extends('front.master.master')

@section('title' , 'Home')

@section('content')


        
        <!-- Begin Main Content Area -->
        <div class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1920x450.png">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h1 class="breadcrumb-title">Blog Page</h1>
                                <ul class="breadcrumb-list">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li><span>Blog</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-area blog-style-1 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-item-wrap row">
                            @if(isset($postsAll))


                                @foreach($postsAll as $post)
                                <div class="col-md-6">
                                    <div class="blog-item">
                                        <a href="{{ route('article' , $post->uri ) }}" class="blog-img">
                                            <img src="front/assets/images/{{ $post->cover }}" alt="Blog Image">
                                        </a>
                                        <div class="blog-content">
                                            <span class="blog-category"><span>By</span>  {{ $post->Users->name }}</span>
                                            <h2 class="blog-title">
                                                <a href="{{ route('article' , $post->uri ) }}">{{ $post->title }}
                                                </a>
                                            </h2>
                                            <p class="blog-desc">{{ $post->subtitle }}
                                            </p>
                                            <ul class="blog-meta">
                                                <li>
                                                    <span class="date">{{ date('d/m/Y H:i:s' , strtotime($post->created_at)) }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            @else

                            <div class="col-md-12">
                                    <div class="blog-item">
                                        <div class="blog-content-center">
                                            <h2 style="color:black;">Nenhum artigo</h2>
                                        </div>
                                    </div>
                                </div>


                            @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-area sidebar-style-1">
                                @isset($posts)

                                <div class="sidebar-item sidebar-post">
                                    <h2 class="sidebar-title">Artigos recentes</h2>
                                    <div class="swiper-slider post-list-slider">
                                        <div class="swiper-wrapper">

                                            @foreach($posts as $post)

                                                <div class="swiper-slide post-list-item">
                                                    <a class="post-list-img" href="{{ route('article' , $post->uri ) }}">
                                                        <img style="width: 803px;border-radius: 10px;" class="imagePosts" src="front/assets/images/{{ $post->cover }}" alt="Post List">
                                                    </a>
                                                    <div class="post-list-content">
                                                        <h2 class="title">
                                                            <a href="{{ route('article' , $post->uri ) }}">
                                                                {{ $post->subtitle }}
                                                            </a>
                                                        </h2>
                                                        <ul class="meta">
                                                            <li>
                                                                <span class="date">
                                                                <i class="icofont-ui-calendar"></i>
                                                                {{ date('d/m/Y H:i:s' , strtotime($post->created_at)) }}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            @endforeach


                                        </div>
                                    </div>
                                </div>

                            @endisset

                                <div class="sidebar-item sidebar-social">
                                    <h2 class="sidebar-title">Redes Sociais</h2>
                                    <ul class="social-list">
                                        <li>
                                            <a class="social-icon" href="#">
                                                <i class="icofont-facebook"></i>
                                                Facebook
                                            </a>
                                            <span class="social-activity">-</span>
                                        </li>
                                        <li>
                                            <a class="social-icon" href="#">
                                                <i class="icofont-twitter"></i>
                                                Twitter
                                            </a>
                                            <span class="social-activity"><a href="#">-</a></span>
                                        </li>
                                        <li>
                                            <a class="social-icon" href="#">
                                                <i class="icofont-instagram"></i>
                                                Instagram
                                            </a>
                                            <span class="social-activity">-</span>
                                        </li>
                                        <li>
                                            <a class="social-icon" href="#">
                                                <i class="icofont-youtube"></i>
                                                YouTube
                                            </a>
                                            <span class="social-activity">-</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-banner">
                                    <div class="sidebar-img">
                                        <img src="front/assets/images/banner/4.jpg" alt="Banner">
                                        <div class="inner-content">
                                            <h2 class="title">
                                                <span>Contato para</span>
                                                Propaganda
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area End Here -->

@endsection