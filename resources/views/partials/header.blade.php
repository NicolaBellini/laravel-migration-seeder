<header class="bg-dark text-warning ">
   <h2>Header</h2>
   <ul>
     <li><a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">home</a></li>
     <li><a class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{ route('trains') }}">trains</a></li>
   </ul>
</header>
