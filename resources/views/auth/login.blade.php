@extends('layouts.app')

@section('content')

<section class="section content">
    <div class="container is-fluid">
        <div class="columns is-marginless is-centered">
            <div class="column is-half has-text-centered">
                <h1 class="title">Sign In</h1>
            </div>
        </div>
    </div>
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form class="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="email" name="email" id="email" placeholder="Email" class="input" value="{{ old('email') }}" required autofocus>
                        </p>

                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                {{ $errors->first('email') }}
                            </p>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" name="password" id="password" placeholder="Password"
                                   class="input" required autofocus>
                        </p>

                        @if ($errors->has('password'))
                            <p class="help is-danger">
                                {{ $errors->first('password') }}
                            </p>
                        @endif
                    </div>


                    <div class="field">
                        <p class="control">
                            <label for="remember" class="checkout">
                                <input type="checkbox" name="remember" id="remember">
                                Remember me
                            </label>
                        </p>
                    </div>

                    <div class="field">
                        <p class="control">
                            <button class="button is-primary">Sign In</button>
                        </p>
                    </div>

                    <p>
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </p>

                </form>

            </div>
        </div>
    </div>
</section>

@endsection
