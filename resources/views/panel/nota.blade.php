@extends('panel.plantilla')

@section('section_admin')
        <div id="app" class="content">
            <nota-component></nota-component> <!--Añadimos nuestro componente vuejs-->
        </div>

    <script src="{{asset('js/app.js')}}"></script>
@endsection
