<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body style="background:linear-gradient(90deg,#27ae60,#2980b9);">
      <div class="shadow-lg bg-light container mt-5 p-0">
          <div class="text-center bg-info card-header w-100 p-2">
              <h1>Data Mahasiswa</h1>
          </div>
          <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="border-bottom">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->alamat}}</td>
                    <td>{{$mhs->email}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>