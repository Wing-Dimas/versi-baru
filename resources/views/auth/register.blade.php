<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="page-auth">
    <div class="container-form">
        <h1>Sign Up</h1>
        <form action="{{ route("register") }}" method="post">
            @csrf

            <div class="form-group">
                <div class="icon"><ion-icon name="person-circle"></ion-icon></div>
                <input type="text" name="username" value="{{ old("username") }}" placeholder="Masukan username anda">
                @error('username')
                    <p style="color:red; font-style:italic">  {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <div class="icon"><ion-icon name="key"></ion-icon></div>
                <input type="password" name="password" value="{{ old("password") }}" placeholder="Masukan password">
                <div class="icon-eye"><ion-icon name="eye"></ion-icon></div>
                @error('password')
                    <p style="color:red; font-style:italic">  {{ $message }} </p>
                @enderror
            </div>
            <div class="form-group">
                <div class="icon"><ion-icon name="key"></ion-icon></div>
                <input type="password" name="confirm-password" value="{{ old("confirm-password") }}" placeholder="Masukan password lagi">
                <div class="icon-eye"><ion-icon name="eye"></ion-icon></div>
                @error('confirm-password')
                    <p style="color:red; font-style:italic">  {{ $message }} </p>
                @enderror
            </div>
            <button type="submit" class="btn">
                Daftar
            </button>
        </form>

        <p style="text-align:center">Sudah Memiliki Akun? <span><a style="color:orange" href="{{ route("login") }}">Masuk</a></span></p>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>