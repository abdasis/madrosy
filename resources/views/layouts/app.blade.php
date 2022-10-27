<!doctype html>
<html lang="en"
      data-layout="vertical"
      data-topbar="light"
      data-sidebar="light"
      data-sidebar-size="lg"
      data-sidebar-image="true"
      data-preloader="disable"
      data-layout-mode="{{$preferensi->mode_aplikasi ?? 'light'}}"
      data-layout-width="fluid"
      data-layout-position="fixed"
      data-layout-style="default">
<head>
    <x-head/>
</head>
<body>
<div id="layout-wrapper">
    <x-header/>
    <x-navbar/>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                {{Breadcrumbs::render()}}
                {{$slot}}
            </div>
        </div>
        <x-footer/>
    </div>
</div>
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<x-scripts/>
<livewire:mode-aplikasi/>
</body>
</html>
