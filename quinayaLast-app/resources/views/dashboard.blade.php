<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<div class="main-container">
        <div class="menuBar"> 
            @if (Auth::check())
            <div class="block">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                    <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-dropdown-link>
                </form>
            </div>
            @else
            <div class="block">
                <a href="{{ route('login') }}" class="">unete</a>
            </div>
            @endif
        </div>
        <div class="slider">
            <img class="mySlides frame" src="/assets/image1.jpg" style="width:100%">
            <img class="mySlides frame" src="/assets/image2.jpg" style="width:100%">
            <img class="mySlides frame" src="/assets/image3.jpg" style="width:100%">
        </div>
        <br>
        <div class="quotesMenu">
            <div class="title-quote">
                <h2>Quote of the day</h2>
                <div class="quote">
                    {{$quote}}
                </div>
            </div>
            <div class="publicQuote">
                <div class="counts">{{$counter}} times</div>
                <div class="button-Quote">
                    <button type="submit">Actualizar</button>
                </div>
            </div>
        </div>
        <br>
        @if (Auth::check())
            <div class="quotesMenu">
                <div class="title-quote">
                    <h2>Para los panitas</h2>
                    <div class="quote">
                        {{$newdata}}
                    </div>
                </div>
                <div class="publicQuote">
                    <div class="counts">{{$newCounter}} times </div>
                    <div class="button-Quote">
                        <button type="submit">Actualizar</button>
                    </div>
                </div>
            </div>
        @endif
</div>
<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 8000); 
    }
</script>