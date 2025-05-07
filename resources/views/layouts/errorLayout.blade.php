@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();

/* Display elements */
$customizerHidden = ($customizerHidden ?? '');
@endphp

@extends('layouts/principalCommonMaster' )

@section('layoutContent')

<div class="error-container">
    @yield('content')
</div>


@endsection

<style>
    .error-container{
        background: linear-gradient(to bottom, #000000 30%, #160b24 100%);
    }
</style>