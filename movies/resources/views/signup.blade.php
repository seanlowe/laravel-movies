@extends ('layouts.master')

@section ('content')
    <br>

    <form class="form-signin" method="POST" action="/signup">
        {{ csrf_field() }}
        
        <h1 class="h3 mb-3 font-weight-normal">Registration</h1><br>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
        
        @include ('layouts.errors')
    </form>

@endsection