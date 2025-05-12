@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/errorLayout')

@section('code', '500')
@section('title', 'Error de servidor')
@section('message', 'Hubo algun problema...')
@section('boton', 'Volver al inicio')

