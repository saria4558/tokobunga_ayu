<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charshet="UTF-8" />
        <title> Toko Bunga</title>
        <link rel="stylesheet" href="style.css" />
        <!--Font Awesome Cdn link -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        />
        <style>
            /* Import Google Font cdn link */
@import url("https://font.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
* {
    margin: 0;
    padding: 0;
    border: none;
    outline: none;
    box-sizzing: border-box;
    font-family: "Poppins", sans-serif;
}
body {
    display: flex;
}
.sidebar {
    position: sticky;
    top: 0;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 100vh;
    padding: 0 1.7rem;
    color: #fff;
    overflow: hidden;
    transition: all 0.5s liniar;
    background: #000;
}
.sidebar:hover {
    width: 240px;
    transition: 0.5s;
}
.logo {
    height: 80px;
    padding: 16px;
    color: #fff;
}
.menu {
    height: 88%;
    position: relative;
    list-style: none;
    padding: 0;
}
.menu li{
    padding: 1rem;
    margin: 8px 0;
    border-radius: 8px;
    transition: all 0.5s ease-in-out;
}
.menu li:hover, 
.active{
    background: #e0e0e058;
}
.menu a {
    color: #fff;
    /* font-size: 14px; */
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.menu a span{
    overflow: hidden;
}
.menu a i {
    font-size: 1.2rem;
}
.logout {
    position: absolute;
    bottom: 0;
    left: 0;
    width: max-content;
    align-items: center;
}

.logout a span {
    color: transparent;
}

.sidebar:hover .logout>a>span{
    color: #fff;
}

/* *** main body section *** */
.main--content{
    position: relative;
    background: #000; /* Mengurangi kecerahan ke sekitar 90% */
    width: 100%;
    padding: 1rem;
}

.header--wrapper img {
    width:50px;
    height: 50px;
    cursor: pointer;
    border-radius: 50%;
}
.header--wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    background: rgb(211, 211, 211);
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}
.header--title {
    color: #000;
}
.user--info {
    display: flex;
    align-items: center;
    gap: 1rem;
}
.searh--box {
    background: rgb(211, 211, 211);
    border-radius: 15px;
    color: #006c84;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 4px 12px;
}
.searh--box input {
    background: transparent;
    
    padding: 10px;
}
.searh--box i {
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-out;
}
.searh--box i:hover {
    transform : scale(1.2);
}

/* **** card container **** */
.card--container {
    background: rgb(211, 211, 211);
    padding: 2rem;
    border-radius: 10px;
}
.card--wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}
.main--title {
    color: #000;
    padding-bottom: 15px;
    font-size: 20px;
}
.payment--card {
    background: rgb(229, 223, 223);
    border-radius: 10px;
    padding: 1.2rem;
    width: 290px;
    height: 150px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: all 0.5s ease-in-out;
}

.payment--card:hover {
    transform: translateY(-5px);
}
.card--header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px
}
.amount {
    display: flex;
    flex-direction: column;
}
.title{
    font-size: 18px;
    font-weight: 200;
}
.amount--value {
    font-size: 26px;
    font-family: "Courier New", Courier, monospace;
    font-weight: 600;
}
.icon {
    color: #fff;
    padding: 1rem;
    height: 20px;
    width: 20px;
    text-align: center;
    border-radius: 50%;
    font-size: 1.5rem;
    background: red;
}
.card detail {
    font-size: 14px:
    color: #fff;
    letter-spacing: 2px;
    font-family: "Courier New", Courier, monospace;
}

/* color css*/
.light-red {
    background: rgb(251, 233, 233);
    filter: brightness(80%);
}
.light-purple {
    background: rgb(254, 226, 254);
    filter: brightness(80%);
}
.light-green{
    background: rgb(235, 254, 235);
    filter: brightness(80%);
}
.light-blue {
    background: rgb (236, 236, 254);
    filter: brightness(80%);
}
.dark-red {
    background: red;
}
.dark-purple {
    background: purple;
}
.dark-green {
    background: green;
}
.dark-blue {
    background: blue;
}

/* *** tabular section *** */
.tabular--wrapper {
    background: rgb(211, 211, 211);
    margin-top: 1rem;
    border-radius: 10px;
    padding: 2rem;
}
.table-container {
    width: 100%;
}
table {
    width: 100%;
    border-collapse: collapse;
}
thead {
    background: #006C84;
    color: #fff;
}
th {
    padding: 15px;
    text-align: left;
}
tbody{
    background: #e2e8e4;
}
td {
    padding: 15px;
    font-size: 14px;
    color: #333;
}
tr:nth-child(even) {
    background: #fff;
}
tfoot {
    background: #006c84;
    font-weight: bold;
    color: #fff;
}
tfoot td {
    padding: 15px;
    color: #fff;
}
.table.container button {
    color: green;
    background: none;
    cursor: pointer;
}

        </style>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo"></div>
            <ul class="menu">
                <li class="active">
                    <a href="#" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="/profil">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-book"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-clock"></i>
                        <span>History</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-question"></i>
                        <span>Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <i class="fa-solid fa-gear"></i>
                        <span>Setting</span>
                    </a>
                </li>
                
                <li >
                    <a href="/">
                    <i class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <span>Admin</span>
                    <h2>Flowers Product</h2>
                </div>
                <div class="user--info">
                    <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="Search" />
                    </div>
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                </div>
            </div>

            <div class="card--container">
                <h3 class="main--title">Macam - Macam Bunga Hari Ini</h3>
                <div class="card--wrapper">
                    <div class="payment--card light-red"  >
                    <img src="https://www.quipper.com/id/blog/wp-content/uploads/2023/01/pexels-pixabay-36753.webp" alt="" />
                    </div>
                    <div class="payment--card light-purple">
                    <img src="https://www.konteks.co.id/wp-content/uploads/2023/05/Bunga-Mawar-1.png" alt=""/>
                    </div>
                    <div class="payment--card light-green">
                    <img src="https://www.quipper.com/id/blog/wp-content/uploads/2023/01/pexels-pixabay-36753.webp" alt=""/>
                    </div>
                    <div class="payment--card light-blue">
                    <img src="https://www.konteks.co.id/wp-content/uploads/2023/05/Bunga-Mawar-1.png" alt=""/>
                    </div>
                </div>
            </div>

            <div class="tabular--wrapper">
                <h1 class="main--title">Bunga Tersedia Hari Ini</h1>
                <a href="/tambah" class="btn btn-success">Tambah</a>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Bunga</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        <thead>
                            <tbody>
                            @php
                            $no = 1;
                            @endphp

                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$row->nama_bunga}}</td>
                                <td>
                                    <img src="{{asset('storage/'.$row->image)}}" alt="" style="width:40px;">
                                </td>
                                <td>{{$row->deskripsi}}</td>
                                <td>{{$row->price}}</td>
                                <td>
                                    
                                    <a href="/tampilkandata/{{$row->id}}" class="btn btn-info">Edit</a>
                                    <a href="/deletedata/{{$row->id}}"  class="btn btn-danger">Delete</a>

                                </td>

                            </tr>
              @endforeach
                            </tbody>
                            
                </div>
            </div>
        </div>
    </body>
</html> 