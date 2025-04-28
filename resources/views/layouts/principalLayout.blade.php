@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/principalCommonMaster' )
@php

$menuHorizontal = true;
$navbarFull = true;

/* Display elements */
$isNavbar = ($isNavbar ?? true);
$isMenu = ($isMenu ?? false);
$isFlex = ($isFlex ?? false);
$isFooter = ($isFooter ?? true);
$customizerHidden = ($customizerHidden ?? 'true');

/* HTML Classes */
$menuFixed = (isset($configData['menuFixed']) ? $configData['menuFixed'] : '');
$navbarType = (isset($configData['navbarType']) ? $configData['navbarType'] : '');
$footerFixed = (isset($configData['footerFixed']) ? $configData['footerFixed'] : '');
$menuCollapsed = (isset($configData['menuCollapsed']) ? $configData['menuCollapsed'] : '');

/* Content classes */
$container = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
$containerNav = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';

@endphp

@section('layoutContent')
  <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
  <div class="layout-container">

  <!-- BEGIN: Navbar-->
  @if ($isNavbar)
  @include('layouts/sections/navbar/navbar-front')
  @endif
  <!-- END: Navbar-->

  <!-- Layout page -->
  <div class="layout-page">
    <!-- Content wrapper -->


    <!-- Content -->
    <div class="container-container flex-grow-1 w-100 min-vh-100">
    @yield('content')
    </div>

    <!-- / Content -->





    <!-- / Content wrapper -->
  </div>
  <!-- / Layout page -->
  <!-- Footer -->
  @if ($isFooter)
  @include('layouts/sections/footer/footer-front')
  @endif

  </div>
  <!-- / Layout Container -->

  @if ($isMenu)
  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  @endif

  <!-- Drag Target Area To SlideIn Menu On Small Screens -->
  <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
@endsection
