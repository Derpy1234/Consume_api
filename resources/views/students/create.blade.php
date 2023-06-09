<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Create API Students</title>
</head>
<body>
    <div class="container">
        <div class="card d-block m-auto bg-info p-4">

            <form action="/siswa/store" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No Hendphone</label>
                    <input type="number" name="no_tlpn" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">linkedin</label>
                    <input type="text" name="linkedin" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">instagram</label>
                    <input type="text" name="instagram" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">facebook</label>
                    <input type="text" name="facebook" class="form-control" id="exampleInputPassword1">
                </div>              
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">twitter</label>
                    <input type="text" name="twitter" class="form-control" id="exampleInputPassword1">
                </div>                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">foto</label>
                    <input type="file" name="file" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 d-flex">
                    <button type="submit" class="btn btn-light">Send</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
