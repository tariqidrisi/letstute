<!DOCTYPE html>
<html lang="en">

<head>
    <!-- BASE CSS -->
	@include('includes.head')
    @include('includes.style')

</head>

<body>
    <div id="page">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
</body>