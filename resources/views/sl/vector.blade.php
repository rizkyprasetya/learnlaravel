<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Vector</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <form action="sl-cal" method="post">
        @csrf
        <table>
            @for ($i = 1; $i <= $number; $i++)
                <tr>
                    <td>Masukkan data ke {{ $i }}</td>
                    <td><input type="text" name="data[{{ $i }}]" id="data-{{ $i }}"></td>
                </tr>
            @endfor
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
