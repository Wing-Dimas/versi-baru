<x-app-layout>
    @slot('header')
        <div class="header-nav">
            <div class="left">
                <input type="text" placeholder="Cari di katalog">
            </div>
            <div class="right">
                <a href="/keranjang">
                    <ion-icon name="cart"></ion-icon>
                </a>
                <div class="drop-down">
                    <div class="icon"><ion-icon name="menu"></ion-icon></div>
                    <ul class="menu-item">
                        <li> 
                            <a href="/edit-user">
                                <span class="icon">
                                    <ion-icon name="create"></ion-icon>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                        </li>
                        <li> 
                            <a href="/wishlist">
                                <span class="icon">
                                    <ion-icon name="heart-circle"></ion-icon>
                                </span>
                                <span class="text">Wishlist</span>
                            </a>
                        </li>
                        <li> 
                            <a href="/riwayat-transaksi">
                                <span class="icon">
                                    <ion-icon name="document-attach"></ion-icon>
                                </span>
                                <span class="text">Riwayat transaksi</span>
                            </a>
                        </li>
                        <li> 
                            <a href="/logout">
                                <span class="icon">
                                    <ion-icon name="log-out"></ion-icon>
                                </span>
                                <span class="text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            
            </div>
        </div>

        <div class="header-content mt-2">
            <h1><span class="logo-kiri">Alkes</span><span class="logo-kanan">logy</span></h1>
            <p><ion-icon name="location"></ion-icon> Dikirim ke <span style="color: orange"></span></p>
        </div>
    @endslot


    @slot('content')
        
        <div class="cards">
        @foreach($data as $barang)
            <div class="card">
            <div class="imgBox">
                <img src="/img/{{ $barang->gambar }}" alt="">
            </div>
                <div class="card-content">
                    <h4> {{ $barang->nama_barang }} </h4>
                    <h3> {{  "Rp " . number_format($barang->harga_barang,2,',','.') }} </h3>
                    <a href="{{ route("cart",$barang->id_barang) }}" class="btn btn-add-keranjang">Add keranjang</a>
                </div>
            </div>
        @endforeach
        </div>
    @endslot


</x-app-layout>