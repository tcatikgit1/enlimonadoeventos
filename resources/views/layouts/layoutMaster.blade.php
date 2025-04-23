@isset($pageConfigs)
{!! Helper::updatePageConfig($pageConfigs) !!}
@endisset
@php
$configData = Helper::appClasses();
@endphp
@if ($configData['hasCustomizer'])
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  @vite(['resources/assets/vendor/js/template-customizer.js'])
@endif

@isset($configData["layout"])
@include((($configData["layout"] === 'horizontal') ? 'layouts.horizontalLayout' :
    (($configData["layout"] === 'blank') ? 'layouts.blankLayout' :
      (($configData["layout"] === 'front') ? 'layouts.layoutFront' : 'layouts.contentNavbarLayout'))))
@endisset
