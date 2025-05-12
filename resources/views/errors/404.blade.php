@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/errorLayout')

@section('code', '404')
@section('title', 'Pagina no encontrada')
@section('message', 'No pudimos encontrar la página que estás buscando')
@section('boton', 'Volver al inicio')
