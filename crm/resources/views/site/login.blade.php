@extends('common.mdb-fullpage')

@section('title', 'LPII Login')

@section('content')
<div class="container"> 

    <div class="row mt-5"><p class="text-center col">{{ "Guarulhos, $dia/$mes/$ano" }}</p></div>

    <div class="row">
        <div class="col-md-5 mx-auto mt-4">

            <form class="text-center border border-light p-5" action="#!">
                <p class="h4 mb-4">Fazer Login</p>
                <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
                <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Senha">
                <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>
            </form>

        </div>
    </div>
</div>
@endsection