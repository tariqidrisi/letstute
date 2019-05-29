<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BASE CSS -->
	@include('admin/includes.head')
    @include('admin/includes.style')

</head>

<body class="fixed-nav sticky-footer" id="page-top">
    @include('admin/includes.header')
    @yield('content')
    @include('admin/includes.footer')
</body>