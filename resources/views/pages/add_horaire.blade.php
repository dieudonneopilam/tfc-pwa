@extends('layouts.app')
@section('main')
    <div class="add-agent-main">
        <div class="div-img">
            <a href="{{ route('horaires') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
            <h2 class="title">nouveelle affectation</h2>
        </div>
        <form action="">
            <div class="group-form">
                <label class="label-form" for="name">date debut</label>
                <input  class="input-form" type="time">
            </div>
            <div class="group-form">
                <label class="label-form" for="name">date fin</label>
                <input class="input-form" type="time">
            </div>
            <div class="group-form">
                <label class="label-form" for="name">type</label>
                <select class="input-form" name="" id="">
                    <option value="">coupure</option>
                    <option value="">retablissement</option>
                </select>
            </div>
            <div class="group-form-btn">
                <button class="btn-submit" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
