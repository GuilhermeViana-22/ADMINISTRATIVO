@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

<link rel="stylesheet" href="{{ asset('administrativo/css/login.css') }}">
@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')

    <div style="width: 700px" class="login-box ">
        {{-- Card Header --}}
        @hasSection('auth_header')
            <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                <h3 class="card-title float-none text-center">
                    @yield('auth_header')
                </h3>
            </div>
        @endif
        {{-- Card Body --}}
       @yield('auth_body')
        {{-- Card Footer --}}
    </div>

@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
