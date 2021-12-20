@php
$main_menu =[
    'CHARACTERS',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP',
]    
@endphp

<div class="container">
  <header>
    <nav>
      <div class="logo-container">
        <img src="{{asset('img/dc-logo.png')}}" alt="" />
      </div>
      <ul class="main-menu">
        @foreach ($main_menu as $single_menu)
            
        <li class="item">
          <a class="link-menu" href="#">{{ $single_menu }}</a>
        </li>
        @endforeach
      </ul>
    </nav>
  </header>
</div>