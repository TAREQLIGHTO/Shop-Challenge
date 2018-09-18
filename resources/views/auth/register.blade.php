@extends('layouts.main')

@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Register!</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" />
                        <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" />
                        <input type="password" name="password" placeholder="Password"/>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section>
@endsection
