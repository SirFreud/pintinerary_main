@extends('layouts.app')

@section('content')

<section class="section content">
    <div class="container is-fluid">
        <div class="columns is-marginless is-centered">
            <div class="column is-half has-text-centered">
                @if (session('status'))
                    <div class="notification is-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="title">Recover Your Password</h1>
            </div>
        </div>
    </div>
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <form class="form" method="POST" action="{{ route('password.email') }}">
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
                        <p class="control">
                            <button class="button is-primary">Send Reset</button>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>
@endsection
