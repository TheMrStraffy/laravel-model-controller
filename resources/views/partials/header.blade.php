<header>
    <nav class="d-flex justify-content-between w-75 mx-auto align-items-center h-100">
        <div class="logo">
            Logo
        </div>

        <ul class="d-flex justify-content-around col-8 p-0 m-0">
            <li>
                <a href="{{route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}" class="{{Route::currentRouteName() === 'about' ? 'active' : ''}}">about</a>
            </li>
            <li>
                <a href="{{route('contacts')}}" class="{{Route::currentRouteName() === 'contacts' ? 'active' : ''}}">contacts</a>
            </li>
        </ul>
    </nav>
</header>
