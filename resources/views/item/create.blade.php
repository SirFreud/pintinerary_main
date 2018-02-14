@extends('layouts.app')

@section('content')
<section class="section content is-marginless" style="padding-bottom: 0px;">
    <div class="container is-fluid">
        <div class="columns is-marginless is-centered">
            <div class="column is-half has-text-centered">
                <h1 class="title">Day</h1>
            </div>
        </div>
    </div>
</section>
    <div class="breadcrumb has-arrow-separator is-centered">
        <ul>
            <li><a href="#">Main</a></li>
            <li class="is-active"><a href="#">Details</a></li>
        </ul>
    </div>
    <section class="section content" style="padding-top: 0px">
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
                                <input type="text" name="total_days" id="total_days" placeholder="Total Days"
                                       class="input{{ $errors->has('total_days') ? ' is-danger' : '' }}" required
                                       autofocus>
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
                                    <select name="category" id="category">
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

                                <div class="select is-multiple">
                                    <select multiple size="8" name="region" id="region">
                                        <option value="Europe">Europe</option>
                                        <option value="North America">North America</option>
                                        <option value="South America">South America</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Africa">Africa</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Middle East">Middle East</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                            <label for="total_price" class="label">Total total_price</label>
                            <p class="control">
                                <input type="text" name="total_price" id="total_price" placeholder="In USD"
                                       class="input{{ $errors->has('total_price') ? ' is-danger' : '' }}" required
                                       autofocus>
                            </p>

                            @if ($errors->has('total_price'))
                                <p class="help is-danger">
                                    {{ $errors->first('total_price') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <label for="overview" class="label">Quick Overview</label>
                            <p class="control">
                                <textarea name="overview" id="overview"
                                          class="textarea{{ $errors->has('overview') ? ' is-danger' : '' }}"
                                          required></textarea>
                            </p>

                            @if ($errors->has('overview'))
                                <p class="help is-danger">
                                    {{ $errors->first('overview') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control">
                                <button class="button is-primary">Next</button>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection