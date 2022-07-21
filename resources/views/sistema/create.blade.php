


    <!---layout padrão--->
    @include('sweetalert::alert')
    {{-- nsg --}}

    <!-- /.card -->
    <p>teste</p>
    <!--data table sectin-->



@section('css')
    {{-- é necessário importar o arquivo do css do dashboard pois algumas manutenções de divs estão lá dentro --}}
    <link rel="stylesheet" href="{{ asset('administrativo/css/dashboard.css') }}">
@stop

@section('js')
    <script src="{{ asset('administrativo/js/dashboard.js') }}" defer></script>
    <script src="{{ asset('administrativo/js/jquery.mask.js') }}"></script>
@stop
