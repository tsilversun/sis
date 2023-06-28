<!DOCTYPE html>
<html>
<head>
    <title>School Fee System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>
    @yield('content')
    @component('components.logo', [
    'url' => route('home'),
    'image' => asset('sis-logo.png'),
    'alt' => 'Logo',
    'width' => '100',
    'height' => '50',
    'name' => 'School Fee System',
])
@endcomponent

</body>
</html>
