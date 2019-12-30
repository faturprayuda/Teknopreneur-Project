<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1> Halaman Registrasi</h1>

    <form action="{{ url('/adak') }}" method="POST">
        @csrf
        <ul>
            <li>
                <label for="name">Nama Siswa :</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="username">Id Siswa :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="id_telegram">Id User Telegram :</label>
                <input type="text" name="id_telegram" id="id_telegram">
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>

    </form>
</body>

</html>