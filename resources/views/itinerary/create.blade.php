@extends('layouts.app')

@section('content')
    <section class="section content">
        <div class="container is-fluid">
            <div class="columns is-marginless is-centered">
                <div class="column is-half has-text-centered">
                    <h1 class="title">Create An Itinerary</h1>
                </div>
            </div>
        </div>
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">

                    <form class="form" method="POST" action="{{ route('itinerary.store') }}">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="title" class="label">Title</label>
                            <p class="control">
                                <input type="text" name="title" id="title" placeholder="Title"
                                       class="input{{ $errors->has('title') ? ' is-danger' : '' }}" required autofocus>
                            </p>

                            @if ($errors->has('title'))
                                <p class="help is-danger">
                                    {{ $errors->first('title') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="total_days" class="label">Total Days</label>
                            <p class="control">
                                <input type="text" name="total_days" id="total_days" placeholder="Total Days" class="input{{ $errors->has('total_days') ? ' is-danger' : '' }}" required autofocus>
                            </p>
                        
                            @if ($errors->has('total_days'))
                                <p class="help is-danger">
                                    {{ $errors->first('total_days') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label class="label">Category</label>
                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option value="backpacker">Backpacker</option>
                                        <option value="couple">Couple</option>
                                        <option value="family">Family</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Region</label>
                            <div class="control">

                                <div class="select is-multiple" style="width: 50%">
                                  <select multiple size="8">
                                    <option value="Europe" name="category">Europe</option>
                                    <option value="North America" name="category">North America</option>
                                    <option value="South America" name="category">South America</option>
                                    <option value="Asia" name="category">Asia</option>
                                    <option value="Africa" name="category">Africa</option>
                                    <option value="Australia" name="category">Australia</option>
                                    <option value="Middle East" name="category">Middle East</option>
                                    <option value="Other" name="category">Other</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label for="overview" class="label">Quick Overview</label>
                            <p class="control">
                                <textarea name="overview" id="overview" class="textarea{{ $errors->has('overview') ? ' is-danger' : '' }}" required></textarea>
                            </p>
                        
                            @if ($errors->has('overview'))
                                <p class="help is-danger">
                                    {{ $errors->first('overview') }}
                                </p>
                            @endif
                        </div>
                        
                    </form>
@endsection