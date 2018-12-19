@extends('layouts.app')

@section('content')
    <section class="home">
        <h1 id="branding" align="center">Testx<sup><span id="num">3</span></sup></h1>
        <p id="short-abot" align="center">Sustav za online provjeru znanja</p>
        <div class="home-row">
            <div class="home-column">
                <img src="{{ asset('img/click-finger.png') }}" alt="Brzo i jednostavno">
                <h2 align="center">Brzo i jednostavno</h2>
                <p align="center">Brzo i jednostavno postaljvanje uz samo par klikova i spremni se da pravite nove provjere znanja za vase ucenike!</p>
            </div>
            <div class="home-column">
                <img src="{{ asset('img/cloud.png') }}" alt="Oblak">
                <h2 align="center">Sve u oblaku</h2>
                <p align="center">Sve je u oblaku, pa mozete od kuce, iz skole, sa mora ili iz inozemstva pristupiti i uciti kroz testove.</p>
            </div>
            <div class="home-column">
                <img src="{{ asset('img/progress-icon-21.jpg') }}" alt="Pratite napredak">
                <h2 align="center">Pratite napredak ucenika</h2>
                <p align="center">Pratite kako vasi ucenici napreduju kroz zadatke koje im zadajete kroz samoprovjere ili ocjenite njihovo znanje sa provjerama znanja.</p>
            </div>
        </div>
    </section>
    <!--
    <fieldset>
                <ul>
                    <li>jednostavna i brza izrada provjere znanja</li>
                    <li>odabir razlicitih vrsta pitanja</li>
                    <li>Automatska provjera odgovora</li>
                    <li>Zadaci za samoprovjeru</li>
                    <li>Prilagoden za sve uredaje</li>
                    <li>Stalna podrska</li>
                </ul>
            </fieldset>
    -->
@endsection
