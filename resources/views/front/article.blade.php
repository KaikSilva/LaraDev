 
 @extends('front.master.master')

@section('title' , $post->uri)

@section('content')

 <!-- Begin Main Content Area -->
  <div class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="../assets/images/breadcrumb/bg/1-1920x450.png">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item">
                                <h1 class="breadcrumb-title">Blog</h1>
                                <ul class="breadcrumb-list">
                                    <li>
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li><span>{{ $post->title }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="blog-area blog-detail mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <span class="author"><em>By</em> {{ $post->Users->name }}</span>
                                            <span class="common date">{{ date('d/m/Y H:i:s' , strtotime($post->created_at)) }}</span>
                                        </li>
                                    </ul>
                                    <h2 class="blog-title">{{ $post->title }}</h2>
                                </div>
                                <div class="blog-img">
                                    <img src="../front/assets/images/{{ $post->cover }}" alt="Blog Image">
                                </div>
                            </div>
                            <div class="blog-detail-info">
                                <h2 class="title">{{ $post->title }}
                                </h2>
                                <p class="desc">
                                {{ $post->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="app"></div>         
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


        <script>
            new Vue({
                el: '#app',
                template: `
                        <div class="mb-5">
                            <div class="blog-comment-area ">
                                <div class="container">
                                    <div class="blog-comment-wrap">
                                        <div class="row">
                                            <div class="col-12" v-for="comment as comments">
                                                <h2 class="blog-comment-title">Comentários</h2>
                                                <div class="blog-comment-item">
                                                    <div class="inner-item">
                                                        <div style=" margin: 0px; " class="comment-content">
                                                            <div class="user-info">
                                                                <h2 class="title">nome</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="feedback">
                                                    comentario
                                                    </p>
                                                    <div class="reply-btn-wrap d-block d-sm-none">
                                                        <button class="reply-btn"><i class="icofont-reply"></i>Reply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-area ">
                                <div class="container">
                                    <div class="form-wrap">
                                        <div class="row">
                                            <div class="col-12">
                                                <h2 class="form-title">Deixe um comentário</h2>
                                                <form class="form" action="#">
                                                    <div class="group-input">
                                                        <div class="form-field">
                                                            <input v-model="nome" type="text" name="name" placeholder="Nome" class="input-field">
                                                        </div>
                                                    </div>
                                                    <div class="form-field">
                                                        <textarea v-model="message" name="message" placeholder="Mensagem" class="textarea-field"></textarea>
                                                    </div>
                                                    <div class="form-btn-wrap">
                                                        <button v-on:click="addComment" type="button" value="submit" class="form-btn" name="submit">
                                                            Comentar!
                                                            <i class="icofont-long-arrow-right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `,
              data(){
                  return{
                      comments:[],
                      nome: '', 
                      message: '',
                  }
              },
              methods:{
                  addComment(){
                      console.log(this.nome);
                    //   this.comments.push({
                    //       nome: this.nome, 
                    //       message: this.message, 
                    //   });
                  }
              }
            })
        </script>




        <!-- Main Content Area End Here -->

        @endsection