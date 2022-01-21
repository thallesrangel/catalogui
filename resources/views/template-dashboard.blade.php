<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <link rel='icon' href="{{ asset('img/icon.png') }}" type='image/x-icon' sizes="16x16" />
    <title>Catalogui</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({selector:'#description', menubar:false, plugins: 'emoticons', toolbar: 'emoticons', statusbar: false,});
    </script>
</head>
<body>
    <div class="container">
        @include('alert')
        @yield('content')
        <script src="{{ asset('/js/selectCity.js') }}"></script>
    </div>
</body>
</html>