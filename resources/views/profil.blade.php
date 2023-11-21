{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantai Cacalan | Profile </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
        background-image: url('https://cdn1.katadata.co.id/media/images/temp/2023/05/23/Ilustrasi_Bunga_Daisy-2023_05_23-16_41_45_f18c337162ddcafb426a9ff04b713968.jpg');
        background-size: cover;
        background-position: center;
        color: #000;
        /* border: 1px solid #2c3e50; */
        height: 100%;
    }
      /* .bawah-container {
            width: 100%;
            height: 100px;
            flex-shrink: 0;
            background-color: #355587;
            color: #FFF;
            font-family: Poppins;
            font-size: 24px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
            text-align: center;
            padding-top: 30px;
        } */
        .card {
          background-color: rgba(255, 255, 255, 0.69);

        }   
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
    background: #006c84;
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
    /* Mengurangi kecerahan ke sekitar 90% */
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
    background: #fff;
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}
.header--title {
    color: #006c84;
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
    background: #fff;
    padding: 2rem;
    border-radius: 10px;
}
.card--wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}
.main--title {
    color: #006c84;
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
    color: #777777;
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


/* *** tabular section *** */
.tabular--wrapper {
    background: #fff;
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

tfoot td {
    padding: 15px;
    color: #fff;
}

    </style>
</head>
<body>
    <!-- <nav class="navbar navbar-light" style="background-color: #98C1FE; border-radius: 35px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="https://s3-alpha-sig.figma.com/img/cbf8/290e/366134cb6f87b7354514926aba8eecc2?Expires=1699833600&Signature=U9ae-cP0lgGJaKpIBf5iBozxl7PrNQYH~dafNqnz3DhMyR7UYTKntx7~B36zvaSv~82GcuGc~6bfvEON0qX7nF5UoaZnqcuN3gdIXu6cnN6AnuAGeF3kvFAQiK2eruTjPdv7UyMgVgyjH0XJslIEz6bwsCp4xOGyQrAJtrzApxkbb2vNgO1GhujRvfZaBCb1dczcAAgfevmWIyFPl384mD7hnBqrojNqY9vLttXK-rQJcSbYS5hFHZUsVuUbbjYI4y8lo6mP5vvtzkUlgkKjllJSQgaT6BY30MElIkPbjYAx-sMdqrLzJZnzJw~MXNZcFFfFNXB41gSrdIcG0wUaIA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" width="29" height="33" flex-shrink: 0; class="d-inline-block align-text-top">
        <img src="https://s3-alpha-sig.figma.com/img/12ce/7f0f/ab1f1cd46c21af01901f1c35b9d68917?Expires=1699833600&Signature=NKGp7K0UhUXBXTcA0O4u6jTteSUc390EjCK7HQERnrDUcED9Zkz3VgZswpTxFEoFBBYznQaaFjsaf6tQpD3arla1nWkRqG7mcGPrDZpHcj4L6cuTU1UF30Kp5RdQxmGtTeoekjqUSMHVUMGeegWI9EaliE7MoyRvsLJzEWC7vM7BhMd-ppaPqOOJFeTnddnry8sTQ9pW5oPj3QO~L4CJ2Fqx3XWxwHh1XxsZCMQbD0Yz43F4V~nvx7ZCw6rUwhVJd1m3l2GlVkb0e5m-18QW39QECq1n84FdKh9r-iASG3ePGPWw6kU6R05n~EaXdV5DHYyJor0FCfhmCCC7f7pzqg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" width="40" height="34" flex-shrink: 0; class="d-inline-block align-text-top">
          Pantai Cacalan Banyuwangi
          <p class="card-text"></p>
          
          <a class="nav-link active ms-0" href="/profile" target="__blank">Profile</a>
        </a>
      </div>  
    </nav> -->
    

        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <!-- <span>edit</span> -->
                    <h2>Edit Profil</h2>
                </div>
                <div class="user--info">
                    <div class="searh--box">
                    <i class="fa-solid fa-search"></i>
                        <input type="text" placeholder="Search" />
                    </div>
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                </div>
            </div>
        <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->
       
            
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <input type="file" id="profilePictureInput" accept="image/*" style="display:none">
                                
                                <!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form 
                                
                                id="formAccountSettings" 
                                method="POST" 
                                action="<?php echo e(route('profil.update', ['user' => auth()->user() ? auth()->user()->id : null])); ?>" 
                                enctype="multipart/form-data" 
                                class="needs-validation" 
                                role="form" 
                                novalidate>

                               <?php echo csrf_field(); ?>
                                   
                                    <div class="mb-3">
                                        <label for="name" class="form-label" for="inputUsername">nama_lengkap (how your name will appear to other users on the site)</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="<?php echo e(auth()->user() ? auth()->user()->nama_lengkap : ''); ?>"autofocus="" required>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="form-label" for="inputFirstName">First name</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo e(auth()->user() ? auth()->user()->first_name : ''); ?>"autofocus="" required>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="form-label" for="inputLastName">Last name</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="<?php echo e(auth()->user() ? auth()->user()->last_name : ''); ?>"autofocus="" required>
                                        </div>
                                    </div>
                                    <!-- Form Row -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Food Preference-->
                                        <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputFood">Food Preference</label>
                                            <input class="form-control" id="inputFood" type="text" placeholder="Enter Food Preference" value="Seafood">
                                        </div> -->
                                        <!-- Form Activity Preference-->
                                        <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputActivity">Activity Preference</label>
                                            <input class="form-control" id="inputActivity" type="text" placeholder="Enter Activity Preference" value="Snorkeling">
                                        </div> -->
                                        <!-- Form Favorite Season-->
                                        <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputSeason">Favorite Season</label>
                                            <input class="form-control" id="inputSeason" type="text" placeholder="Enter Favorite Season" value="Summer">
                                        </div> -->
                                        <!-- Form Group (location)-->
                                        <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Location</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                        </div> -->
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="form-label" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?php echo e(auth()->user() ? auth()->user()->email : ''); ?>"autofocus="" required>
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="form-label" for="inputPhone">Phone Number</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?php echo e(auth()->user() ? auth()->user()->telepon : ''); ?>"autofocus="" required>
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <!-- <div class="col-md-6">
                                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                        </div> -->
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Tambahkan Foto Profile</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                      </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="button">Save changes</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                 
        </div>
    
    
    <!-- <div class="bawah-container">
    <p class = "pull-left">Copyright 2023 ©
    <img src="https://s3-alpha-sig.figma.com/img/cbf8/290e/366134cb6f87b7354514926aba8eecc2?Expires=1699833600&Signature=U9ae-cP0lgGJaKpIBf5iBozxl7PrNQYH~dafNqnz3DhMyR7UYTKntx7~B36zvaSv~82GcuGc~6bfvEON0qX7nF5UoaZnqcuN3gdIXu6cnN6AnuAGeF3kvFAQiK2eruTjPdv7UyMgVgyjH0XJslIEz6bwsCp4xOGyQrAJtrzApxkbb2vNgO1GhujRvfZaBCb1dczcAAgfevmWIyFPl384mD7hnBqrojNqY9vLttXK-rQJcSbYS5hFHZUsVuUbbjYI4y8lo6mP5vvtzkUlgkKjllJSQgaT6BY30MElIkPbjYAx-sMdqrLzJZnzJw~MXNZcFFfFNXB41gSrdIcG0wUaIA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" width="29" height="33" flex-shrink: 0; class="d-inline-block align-text-top">
    <img src="https://s3-alpha-sig.figma.com/img/12ce/7f0f/ab1f1cd46c21af01901f1c35b9d68917?Expires=1699833600&Signature=NKGp7K0UhUXBXTcA0O4u6jTteSUc390EjCK7HQERnrDUcED9Zkz3VgZswpTxFEoFBBYznQaaFjsaf6tQpD3arla1nWkRqG7mcGPrDZpHcj4L6cuTU1UF30Kp5RdQxmGtTeoekjqUSMHVUMGeegWI9EaliE7MoyRvsLJzEWC7vM7BhMd-ppaPqOOJFeTnddnry8sTQ9pW5oPj3QO~L4CJ2Fqx3XWxwHh1XxsZCMQbD0Yz43F4V~nvx7ZCw6rUwhVJd1m3l2GlVkb0e5m-18QW39QECq1n84FdKh9r-iASG3ePGPWw6kU6R05n~EaXdV5DHYyJor0FCfhmCCC7f7pzqg__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt="" width="40" height="34" flex-shrink: 0; class="d-inline-block align-text-top">
    Pantai Cacalan Banyuwangi
    </p>
</div> -->
<!-- ... (code sebelumnya) -->




</body>
</html><?php /**PATH D:\laravel\profile\resources\views/profil.blade.php ENDPATH**/ ?> --}}


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container rounded bg-white mt-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold">John Doe</span><span class="text-black-50">john_doe12@bbb.com</span><span>United States</span></div>
            </div>
            <div class="col-md-8">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Back to home</h6>
                        </div>
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="first name" value="John"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="Doe" placeholder="Doe"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Email" value="john_doe12@bbb.com"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="+19685969668" placeholder="Phone number"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="address" value="D-113, right avenue block, CA,USA"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="USA" placeholder="Country"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Bank Name" value="Bank of America"></div>
                        <div class="col-md-6"><input type="text" class="form-control" value="043958409584095" placeholder="Account Number"></div>
                    </div>
                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>

