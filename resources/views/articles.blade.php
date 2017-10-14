@extends('layouts.app')

@section('content')

    
<!-- Main image -->
  <div class="hero-unit">
    <div class="bunner">
      <img class="img-bunner" src="./blog.jpg" alt="image">
    </div>
  </div>

  <!-- NoTice  -->
  
  <div class="messages">
    @include('includes/messages')
  </div>
  
<!-- All Articles -->
  <div class="container">
    <h1 class="main-title">Мои блоги</h1>
      <div class="row">
        @if(count($articles) > 0)
          @foreach($articles as $article)  
            <div class="col-xs-6 col-sm-6 position">
              <h4 class="article-title"> {{$article->title}}</h4>
              <h5 class="article-date">  {{$article->pubdate->format('h:m, l j F Y ')}}  </h5>
              <div class="well">  <?php echo mb_substr($article['text'], 0, 250, 'utf-8' ); ?> </div>
              <a class="btn" href="/articles/{{$article->id}}"> <button class="btn btn-default">Подробнее... &raquo;</button> </a>
            </div>	
          @endforeach
        @endif
      </div>
  </div> 
       

      <hr>
@endsection

