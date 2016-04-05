@extends('app')
@section('html-class', 'class="landing"')

@section('content')
@include('partials.navbar')

<div class="container">
    <div class="row">
        <div class="col s12 m12">
            <div class="card darken-1">
                <div class="card-content">
                    <span class="card-title">Adicionar livro</span>
                    <div class="row">
                        <form class="col s12">
                        {{ csrf_field() }}
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                    <label for="first_name">Título</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="last_name" type="text" class="validate">
                                    <label for="last_name">Descrição</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                    <label for="first_name">Cidade</label>
                                </div>
                                <div class="input-field col s6">
                                    <select>
                                        <option value="" disabled selected>Estado</option>
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    <label>Estado</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection


@section('scripts')
 <script>
     $(document).ready(function() {
        $('select').material_select();
    });
  </script>
 @endsection
