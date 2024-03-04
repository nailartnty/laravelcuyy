<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <!-- link css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
     <div class="container">
          <h1>Detail Data Buah</h1>

          <div class="card mt-3">
               <div class="card-body">

               <table class="table table-striped">
                    <tr>
                         <td>Nama</td>
                         <td>:</td>
                         <td>{{ $buah->nama_buah }}</td>
                    </tr>

                    <tr>
                         <td>Harga</td>
                         <td>:</td>
                         <td>{{ $buah->harga }}</td>
                    </tr>
               </table>

               </div>
          </div>
     </div>
</body>
</html>