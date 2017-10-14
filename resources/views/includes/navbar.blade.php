<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <div class="centered">
        <div class="nav navbar-nav">
         <li class="{{Request::is('/') ? 'active' : ''}}"> <a class="" href="/">Главная страница</a></li>
          <li class="{{Request::is('article_form') ? 'active' : ''}}"><a href="/article_form">Добавить новую статью</a></li>
        </div>
      </div>
    </div>
  </div>
</div>