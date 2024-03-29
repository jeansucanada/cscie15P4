@extends('layouts.master')

@section('homemenu')

@stop
@section('loginmenu')

@stop
@section('registermenu')
    class="active"
@stop

@section('content')

    <p>Already have an account? <a href='/login'>Login here...</a></p>

    <h1>Register</h1>

    @include('layouts.errors')

    <form method='POST' action='/register'>
        {!! csrf_field() !!}

        <div class='form-group'>
            <label for='name'>* Name:</label>
            <input type='text' name='name' id='name' value='{{ old('name') }}'>
        </div>

        <div class='form-group'>
            <label for='email'>* Email:</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>* Password:</label>
            <input type='password' name='password' id='password'>
        </div>

        <div class='form-group'>
            <label for='password_confirmation'>* Confirm Password:</label>
            <input type='password' name='password_confirmation' id='password_confirmation'>
        </div>
        {!! app('captcha')->display(); !!}

        <button type='submit' class='btn btn-primary'>Register</button>

    </form>

@stop
@section('body')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@stop
