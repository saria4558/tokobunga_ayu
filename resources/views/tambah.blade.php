<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url('/imageStock/background3.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    
    .wrapper {
        width: 420px;
        background: rgba(0, 0, 0, 0.189);
        border: 2px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        color: aliceblue;
        border-radius: 10px;
        padding: 30px 40px;
    }
    
    .wrapper h1 {
        font-size: 36px;
        text-align: center;
    }
    
    .wrapper .input-box {
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }
    
    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 40px;
        font-size: 16px;
        color: aliceblue;
        padding: 20px 45px 20px 45px;
    }
    
    .input-box input::placeholder {
        color: aliceblue;
    }
    
    .input-box i {
        position: absolute;
        left: 20px; 
        top: 50%;
        transform: translateY(-50%);
    }
    
    .wrapper .remember-forgot {
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }
    
    .remember-forgot label input {
        accent-color: aliceblue;
        margin-right: 3px;
    }
    
    .remember-forgot a {
        color: aliceblue;
        text-decoration: none;
    }
    
    .wrapper .btn {
        width: 100%;
        height: 45px;
        background: aliceblue;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 16px;
        color: black;
        font-weight: 600;
    }
    
    .wrapper .register-link {
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
    }
    
    
    
    .wrapper .register-link a.active {
        color: aliceblue;
        text-decoration: none;
        font-weight: 600;
    }
    
    .wrapper .register-link a.active:hover {
        text-decoration: underline;
    }
    </style>
  <body>
   

    <!-- //jarak ke tengah -->
    <div class="container">     
        <div class="row justify-content-center">
          <div class="col-8">

            <div class="wrapper">
              <div class="card-body">
                <form action = "/insert" method="POST" enctype="multipart/form-data">
                  <h1 >Tambah Data Bunga</h1>
                  @csrf
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Bunga</label>
                    <input type="text" name="nama_bunga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">masukkan nama bunga</div>
                  </div>

                  <div class="mb-3">
                    <label for="image" class="form-label">Referensi Bucket Bunga</label>
                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFileMultiple" multiple>
                    @error('image')
                    <div class ="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">masukkan deskripsi singkat</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">cantumkan harga</div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
             </div>
          </div>
          </div>
           
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>