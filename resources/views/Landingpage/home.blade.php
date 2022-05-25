<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="v2_6">
        <div class="v7_9">
        <a class="v7_8"><span class="logo-kiri">Alkes</span><span class="logo-kanan">logy</span></div>
        <div class="v7_12">
        <a class="v7_11" href="/" >Home</a>
        <a class="v7_13" href="/about">About Us</a>
        <a class="v7_15" href="/contact">Contact</a>
        </div>
        <div class="v7_20">
            <a href="login" class="v7_19">Login</a>
        </div>
        <div class="v7_21">
            <a href="{{ route("register") }}" class="v7_23">
                Sign Up
            </a>
        </div>
        <div class="v7_33"><span class="v7_34">Get Started</span></div>
        <div class="name"></div>
        <div class="v7_27">
            <div class="v7_30"></div>
        </div>
        <div class="v7_31"></div>
        <div class="v7_35"><span class="v7_28">Dapatkan Peralatan Penunjang
                Kesehatan Terbaik Disini
            </span><span class="v7_32">Disini tempat mencari segala kebutuhan kesehatan anda. Pelopor kesehatan dimulai
                dari anda. Demi kesehatan dunia yang lebih sehat. Hidup Kesehatan</span></div>
    </div>
</body>

</html> <br /><br />
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-size: 14px;
    }

    .v2_6 {
        width: 100%;
        height: 1024px;
        background: rgba(255, 255, 255, 1);
        opacity: 1;
        position: relative;
        top: 0px;
        left: 0px;
        overflow: hidden;
    }

    .v7_9 {
        width: 192px;
        height: 68px;
        background: url("../images/v7_9.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 30px;
        left: 99px;
        overflow: hidden;
    }

    .v7_8 {
        width: 172px;
        color: url("../images/v7_8.png");
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Poppins;
        font-weight: Bold;
        font-size: 32px;
        opacity: 1;
        text-align: center;
    }

    .v7_12 {
        width: 419px;
        height: 50px;
        background: url("../images/v7_12.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 48px;
        left: 463px;
        overflow: hidden;
    }

    .v7_11 {
        width: 125px;
        color: rgba(28, 83, 131, 1);
        position: absolute;
        top: 10px;
        left: 10px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v7_13 {
        width: 125px;
        color: rgba(196, 196, 196, 1);
        position: absolute;
        top: 10px;
        left: 145px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v7_15 {
        width: 125px;
        color: rgba(196, 196, 196, 1);
        position: absolute;
        top: 10px;
        left: 280px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v7_20 {
        width: 95px;
        height: 35px;
        background: rgba(255, 255, 255, 0);
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 56px;
        left: 1120px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        overflow: hidden;
    }

    .v7_19 {
        width: 53px;
        color: rgba(28, 83, 131, 1);
        position: absolute;
        top: 2px;
        left: 21px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v7_21 {
        width: 95px;
        height: 35px;
        background: rgba(28, 83, 131, 1);
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 56px;
        left: 1000px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        overflow: hidden;
    }

    .v7_23 {
        width: 76px;
        color: rgba(255, 255, 255, 1);
        position: absolute;
        top: 2px;
        left: 10px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .v7_33 {
        width: 150px;
        height: 60px;
        background: rgba(28, 83, 131, 1);
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 647px;
        left: 188px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        overflow: hidden;
    }

    .v7_34 {
        width: 114px;
        color: rgba(255, 255, 255, 1);
        position: absolute;
        top: 15px;
        left: 18px;
        font-family: Poppins;
        font-weight: Regular;
        font-size: 20px;
        opacity: 1;
        text-align: center;
    }

    .name {
        color: #fff;
    }

    .v7_27 {
        width: 486px;
        height: 532px;
        background: url("../images/v7_27.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        padding: 10px 10px;
        margin: 10px;
        opacity: 1;
        position: absolute;
        top: 246px;
        left: 884px;
        overflow: hidden;
    }

    .v7_30 {
        width: 466px;
        height: 512px;
        background: url("../images/v7_30.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 10px;
        left: 10px;
        overflow: hidden;
    }

    .v7_31 {
        width: 194px;
        height: 6px;
        background: rgba(208, 111, 29, 1);
        opacity: 1;
        position: absolute;
        top: 437px;
        left: 203px;
        border-radius: 50%;
        transform: rotate(-4deg);
    }

    .v7_35 {
        width: 729px;
        height: 324px;
        background: url("../images/v7_35.png");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        opacity: 1;
        position: absolute;
        top: 363px;
        left: 188px;
        overflow: hidden;
    }

    .v7_28 {
        width: 706px;
        color: url("../images/v7_28.png");
        position: relative;
        top: 0px;
        left: 0px;
        font-size: 40px;
        opacity: 1;
        text-align: left;
    }

    .v7_32 {
        width: 729px;
        color: rgba(196, 196, 196, 1);
        position: absolute;
        top: 144px;
        left: 0px;
        font-family: Poppins;
        font-weight: Light;
        font-size: 16px;
        opacity: 1;
        text-align: left;
    }
</style>