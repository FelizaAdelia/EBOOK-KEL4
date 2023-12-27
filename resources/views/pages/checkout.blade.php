@extends('layouts.tes')

@section('title')
<title>EBookJunction - Checkout</title>
@endsection

@section('active-menu')

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="home" class="logo">
                                <img src="assets/images/Frame-9.png" />
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                                <li class="scroll-to-section"><a href="home">Home</a></li>
                                <li class="scroll-to-section"><a href="about">About</a></li>
                                 <li class="submenu"><a href="javascript:;">Categories</a><ul>
                                        <li><a href="mens">Fiksi</a></li>
                                        <li><a href="womens">Non Fiksi</a></li>
                                        <li><a href="mens">Sains dan Teknologi</a></li>
                                        <li><a href="womens">Kesehatan</a></li>
                                        <li><a href="kids">Bisnis dan Keuangan</a></li></ul>
                                </li>
                                <li class="scroll-to-section"><a href="contact">Contact</a></li>
                                <li class="scroll-to-section"><a href="products">Product</a></li>
                                <li class="scroll-to-section"><a href="single">Profile</a></li>
                                <li class="scroll-to-section"><a href="#explore">Search</a>
                                </li></ul>
                            <a class="menu-trigger">                                
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->
@endsection

@section('content')
<h2 style="text-align: center;">
Keranjang Belanja Anda</h2>
<h2 style="font-weight: normal; text-align: center;">
<span style="font-size: x-small;">"Mohon Lengkapi Form dan Copy Paste Semua Order di Kolom Message. .!"</span></h2>
<div class="simpleCart_items">
</div>
<div class="clear">
<br />
<br />
<table border="1" style="width: 680px;"><tbody>
<tr><td class="odd">Total Items: </td><td class="even"><span class="simpleCart_quantity">0</span></td></tr>
<tr><td class="odd">SubTotal: </td><td class="even"><span class="simpleCart_total">Rp0.00</span></td></tr>
<tr><td class="odd">Tax Cost: </td><td class="even"><span class="simpleCart_taxCost">Rp0.00</span></td></tr>
<tr><td class="odd">Biaya Kirim: </td><td><a href="http://jne.co.id/" rel="nofollow" target="_blank">Cek di Sini</a></td></tr>
<tr><td class="odd">Final Total: </td><td class="even"><span class="simpleCart_finalTotal">Rp0.00</span></td></tr>
</tbody></table>
</div>
@endsection