<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create Fruit</title>
     <!-- link css bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
     <div class="container mt-5">
          <h1 class="mb-5">Lets Add Fruit With Me</h1>
          <form action="{{ route('fruit.store') }}" method="POST">
               @csrf
               <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Fruit Name</label>
                    <input name="nama_buah" type="text" class="form-control @error('nama_buah') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('nama_buah')
                    <span style="color: red;">{{ $message }}</span>
                    @endError
               </div>

               <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Fruit Price</label>
                    <input name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" id="exampleInputPassword1">
                    @error('harga')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
               </div>

               <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1"> Lets Check out</label>
               </div> -->
               <button type="submit" class="btn btn-warning">Submit</button>
          </form>
     </div>
</body>

</html>