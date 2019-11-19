<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- mycss --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>Yuk, Login</title>
</head>

<body>
    {{-- Header --}}
    <div class="header">
        <img src="http://trilogi.ac.id/el/pluginfile.php/1/theme_enlightlite/logo/1561605271/Logo-Universitas-Trilogi.png"
            alt="logo" class="logo">
    </div>
    {{-- End Header --}}

    {{-- Content --}}
    <div class="content">
        <img src="{{asset('img/shcool_kids-removebg-preview.png')}}" alt="kids" class="img_content">
        <div class="container">
            <img src=" {{asset('img/logo_pendidikan-removebg-preview.png')}} " alt="logo_pendidikan" class="logo_pnd">
            <form class="form">
                <div class="form-group">
                    <label for="studentId">ID SISWA</label>
                    <input type="text" class="form-control" id="studentId" aria-describedby="emailHelp"
                        placeholder="Masukkan ID Siswa">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control" id="password" placeholder="Kata Sandi">
                </div>
                <button type="submit" class="btn btn-primary">Hadir</button>
            </form>
        </div>
    </div>
    {{-- End Contente --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>