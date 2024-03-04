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
     <div class="container mt-5">
               <h1 class="mb-5">Lets Edit Fruit With Me</h1>
               <form action="{{ route('fruit.update', $buah->id) }}" method="POST">
                    <!-- kita akan memasukkan data edit ke datanya lagi makaknya kita pake post -->
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Fruit Name</label>
                         <input name="nama_buah" value="{{ $buah->nama_buah }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                         <label for="exampleInputPassword1" class="form-label">Fruit Price</label>
                         <input name="harga" value="{{ $buah->harga }}" type="number" class="form-control" id="exampleInputPassword1">
                    </div>

                    <!-- <div class="mb-3 form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1">
                         <label class="form-check-label" for="exampleCheck1"> Lets Check out</label>
                    </div> -->
                    <button type="submit" class="btn btn-warning">Update dulu gk siehhh!</button>
               </form>
          </div>
</body>
</html>