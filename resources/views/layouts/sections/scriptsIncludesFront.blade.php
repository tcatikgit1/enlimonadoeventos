{{--@php--}}
{{--use Illuminate\Support\Facades\Vite;--}}
{{--@endphp--}}

<!-- laravel style -->
@vite(['resources/assets/vendor/js/helpers.js'])
<!-- beautify ignore:start -->
@if ($configData['hasCustomizer'])
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  {{-- @vite(['resources/assets/vendor/js/template-customizer.js']) --}}
@endif

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  @vite(['resources/assets/js/front-config.js'])

