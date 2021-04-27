<html>
<head>
    <style>

        @font-face {
            font-family: 'msyh';
            font-style: normal;
            font-weight: normal;
            src: url({{ storage_path('fonts/msyh.ttf') }}) format('truetype');
        }
        body {
            font-family: msyh, DejaVu Sans,sans-serif;
            color:#00ff00;
        }
    </style>
</head>
<body>

<h1 style="color:red">red</h1>
hello,{{$name}}
</body>
</html>
