@extends('app')

@section('html-class', 'class="auth"')
@section('content')

<div class="header">
    <div class="container center-align">
        <a href="/">
            <img style="max-height: 50px" src="/images/logo.png" alt="">
        </a>
    </div>
</div>

<div class="container">
  @if(count($errors) > 0)
      <div class="card col s12">
        @foreach($errors->all() as $error)
          {{ $error }} <br>
        @endforeach
      </div>
  @endif
    <div class="row">
        <div class="card col s12 offset-m3 m6 offset-l4 l4 z-depth-4">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 center-align">
                        <h2>Login</h2>
                    </div>
                </div>
                <form class="form" role="form" method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12 ">
                            <input name="email" id="email" type="email" value="{{ old('email') }}" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 ">
                            <input name="password" id="password" type="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button type="submit" class="pink waves-effect waves-light btn btn-large col s12">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
