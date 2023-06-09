<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="/siswa/update/{{ $students['id'] }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{ $students['nama'] }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="text" class="form-control" name="email" value="{{ $students['email'] }}" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tanggal lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="exampleInputPassword1" value="{{ $students['tgl_lahir'] }}">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">NO HP</label>
                <input type="number" class="form-control" name="no_tlpn" value="{{ $students['no_tlpn'] }}" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" value="{{ $students['linkedin'] }}" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{ $students['instagram'] }}" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rayon</label>
                <input type="text" class="form-control" name="facebook" value="{{ $students['facebook'] }}" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rayon</label>
                <input type="text" class="form-control" name="twitter" value="{{ $students['twitter'] }}" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Rayon</label>
                <input type="file" class="form-control" name="file" value="{{ $students['image'] }}" id="exampleInputPassword1">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
