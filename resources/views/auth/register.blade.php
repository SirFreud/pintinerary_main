@extends('layouts.app')

@section('content')
    
    <section class="section content">
        <div class="container is-fluid">
            <div class="columns is-marginless is-centered">
                <div class="column is-half has-text-centered">
                    <h1 class="title">Register</h1>
                </div>
            </div>
        </div>
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <form class="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
    
                        <div class="field">
                            <label for="name" class="label">Name</label>
                            <p class="control">
                                <input type="name" name="name" id="name" placeholder="Name" class="input" required
                                       autofocus>
                            </p>
    
                            @if ($errors->has('name'))
                                <p class="help is-danger">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                        </div>
    
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" placeholder="Email" class="input" required
                                       autofocus>
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
                            <label class="label">Confirm Password</label>
                            <p class="control">
                                <input class="input" id="password-confirm" type="password"
                                       name="password_confirmation" placeholder="Confirm Password" required>
                            </p>
                        </div>
    
                        <div class="field">
                            <p class="control">
                                <button class="button is-primary">Sign Up</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
