@extends ('layouts.master')

@section ('content')
    {{-- <br><br><br><br><br><br> --}}
    
    <form class="form-signin" method="POST" action="/signin">
        {{ csrf_field() }}

        <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1><br>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

        @include ('layouts.errors')
    </form>

@endsection