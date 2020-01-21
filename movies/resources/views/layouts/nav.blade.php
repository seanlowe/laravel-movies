<div class="bg-dark" id="navBarHeader">
    <div class="container">
        <nav class="nav blog-nav py-2">
            <a class="nav-link" href="{{ url('/') }}">Home</a>
            <a class="nav-link" href=" {{ url('signin') }} ">Sign In</a>
            <a class="nav-link" href=" {{ url('signup') }} ">Sign Up</a>
            
            @if (auth()->check())
                <a class="nav-link ml-auto" href="#">Logout</a>
            @endif
        </nav>
    </div>
</div>