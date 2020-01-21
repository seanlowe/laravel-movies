@extends ('layouts.master')

@section ('content')
    <br><br><br>
    <form class="form-signin">
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1><br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>

        @include ('layouts.errors')
    </form>

@endsection