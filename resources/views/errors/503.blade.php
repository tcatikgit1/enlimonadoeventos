@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/errorLayout')

{{-- @section('code', '503') --}}
@section('title', 'Estamos en mantenimiento')
@section('message', 'Dentro de poco volveremos.')
@section('boton', 'Recargar pagina')

