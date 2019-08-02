@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div style="padding: 30px 0;">
        <h1 style="font-weight: 400;font-size: 20px;">Bienvenido a Proyecto Rambo, el sitio web de estadisticas deportivas</h1>
        <p>Enterate de todo lo que rodea el mundo del futbol, con Rambo no te perderás ningún detalle de todos tus equipos y jugadores favoritos. Calendarios y resultados de un sinfin de competiciones, desde la Champions League hasta la liga Jamaicana de 2ª B. Detalles de estadios y entrenadores, estadisticas de jugadores y multitud de noticias relacionadas con el mundo del futbol.</p>

        <div class="col-lg-9" style="padding: 0;float: left;margin-top: 30px;">
            <main class="contenido-pagina" style="margin-right: 30px;">
                <div class="competiciones-inicio">
                    <div class="competicion-inicio">
                        <img src="http://www.deportevalenciano.com/files/champions-league-logo.jpg" alt="">
                    </div>
                    <div class="competicion-inicio">
                        <img src="http://www.brandemia.org/sites/default/files/sites/default/files/uefa-euro-league-logo.jpg" alt="">
                    </div>
                    <div class="competicion-inicio">
                        <img src="http://www.brandemia.org/sites/default/files/logotipos4.jpg" alt="">
                    </div>
                    <div class="competicion-inicio">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjmknF4o0gw6ISueqBngx4nWjg8DmBDoRQRO3OTWrgYQ5yob0A" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="card-body" style="padding: 0;">                        
                        @include('portada/carousel')
                    </div>
                </div>
            </main>            
        </div>

        <div class="col-lg-3 barra-lateral" style="float: left;padding: 0;margin-top: 30px;">
            <div class="card">
                <div class="card-header">Equipos destacados</div>
                <div class="card-body">
                    <ul class="list-group" style="margin-bottom: 22px;">
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/WbvWGBEG-KObIcgKK.png" class="mr-3"> Arsenal
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/KOAaYLwS-tChPwKDr.png" class=" mr-3">Puerto Cabello
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/2wA6F6fM-OEvUUzg1.png" class=" mr-3">Sai Gon FC
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/bmaSNUil-0xNMjEaB.png" class=" mr-3">Cerro Largo
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/nwSRlyWg-rBodzytr.png" class=" mr-3">Manchester Utd
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/WMMX2rZg-WvKb1jNa.png" class=" mr-3">Málaga
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.mismarcadores.com//res/image/data/dvE1YECa-4r1dCUha.png" class=" mr-3">Copenhague
                        </li>
                        <li class="list-group-item">
                            <div class="md-v-line"></div>
                            <img src="https://www.stickpng.com/assets/images/584a9b3bb080d7616d298777.png" class=" mr-3">FC Barcelona
                        </li>
                    </ul>
                    <a href="#!" class="btn btn-info waves-effect waves-light" style="border-radius: 50px;">Ver todos los equipos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
