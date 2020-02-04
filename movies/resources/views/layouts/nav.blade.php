<div class="bg-dark" id="navBarHeader">
    <div class="container">
        <nav class="nav blog-nav py-2">
            @if ( ! auth()->check())
                <a class="nav-link" href=" {{ url('signin') }} "> Sign In </a>
                <a class="nav-link" href=" {{ url('signup') }} "> Sign Up </a>
            @endif
            
            @if (auth()->check())
                <a class="nav-link" href="{{ url('/') }}"> Home </a>
                <a class="nav-link" href=" {{ url('/edit') }} "> Edit Movies </a>
                <a class="nav-link ml-auto" href=" {{ url('/signout') }} "> Logout </a>
            @endif
        </nav>
    </div>
</div>