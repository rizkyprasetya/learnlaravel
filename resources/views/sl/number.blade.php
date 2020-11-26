<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Largest</title>
</head>
<body>
    <form action="/sl-number" method="post">
        @csrf
        <p>Masukkan jumlah komponen:</p>
        <input type="text" name="number" id="number">
        <button type="submit">submit</button>
    </form>
</body>
</html>