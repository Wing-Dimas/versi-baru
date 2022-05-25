<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="page-auth">
    <div class="container-form">
        <h1>Login</h1>
        <form action="{{ route("login") }}" method="post">
            @csrf
            <div class="form-group">
                <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
                <input type="text" name="username" placeholder="Masukan username anda" value="{{ old("username") }}">
                @error('username')
                    <p style="color:red; font-style:italic">  {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <div class="icon"><ion-icon name="key"></ion-icon></div>
                <input type="password" name="password" placeholder="Masukan password">
                <div class="icon-eye"><ion-icon name="eye"></ion-icon></div>
                @error('password')
                    <p style="color:red; font-style:italic">  {{ $message }} </p>
                @enderror
            </div>
            <button type="submit" class="btn">
                Login
            </button>
        </form>

        <p style="text-align:center">Belum Memiliki Akun? <span><a style="color:orange" href="{{ route("register") }}">Daftar</a></span></p>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>