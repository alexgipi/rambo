@extends('layouts.app')
@section('content')
    <a href="{{route('createstadium')}}" class="btn btn-info" style="margin: 0 0 30px;border-radius: 50px;">{{trans('messages.añadirequipo')}}</a>
    
    <ul class="row listado-equipos">
    @forelse($teams as $team)
       <!-- Card -->
        <li class="card">

            <!-- Card image -->
            <img class="card-img-top img-fluid" src="{{$team->img}}" alt="team: {{$team->name}} img">

            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title"><a>{{$team->name}}</a></h4>
                <!-- Button -->
                <a href="{{route('teams.show', $team->id)}}" class="btn btn-primary"><i class="far fa-eye"></i></a>
                @if(Auth::user()->user_type_id === 2 || Auth::user()->user_type_id === 1)
                    <a class="btn btn-warning" href="{{route('teams.edit', $team->id)}}">{{trans('messages.modificar')}}</a>
                    <a href="#{{$team->id}}" type="button" class="btn btn-danger pop" data-toggle="popover" data-placement="bottom" title="{{trans('messages.eliminar_equipo')}}"
                            data-content="">
                        {{trans('messages.eliminar')}}</a>
                @endif

            </div>

        </li>
       <!-- Card -->
    @empty
       <div class="container">
           <p>{{trans('messages.no_teams')}}</p>
       </div>
    @endforelse
    </ul>
    <script>
        $(document).ready(function(){

            $('.pop').on('click', function (el) {

                let team_id = $(el.target).attr('href');
                team_id = team_id.substr(1);
                let popupElement = `{{trans('messages.realmente_eliminar_equipo')}} <a id="delete" class="btn btn-danger" href="teams/`+team_id+`/destroy">{{trans('messages.si')}}</a>`;

                $('[data-toggle="popover"]').popover({
                    animation: true,
                    content: popupElement,
                    html: true
                });
            })
        });
    </script>
@endsection
