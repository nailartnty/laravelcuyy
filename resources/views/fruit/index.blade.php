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
          <h1 class="mb-3">List Buah</h1>
          @foreach($buah as $row)
          <div class="card mt-3">
               <div class="card-body">

                    <div class="d-flex justify-content-between">
                         <!-- untuk menampilkan data, harus sama colomnya -->
                         <span>{{ $row->{'nama_buah'} }}</span>
                         <div>
                              <!-- lihat detail -->
                              <a href="{{ route('fruit.show', $row->id) }}" class="btn btn-success">
                                   <i class="fa-solid fa-eye"></i>
                              </a>
                              <!-- edit -->
                              <a href="{{ route('fruit.edit', $row->id) }}" class="btn btn-primary">
                                   <i class="fa-solid fa-pen-nib"></i>
                              </a>
                              <!-- hapus -->
                              <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$row->id}}">
                                   <i class="fa-solid fa-trash-can"></i>
                              </a>
                         </div>
                    </div>

               </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="delete{{$row->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body">
                              <p class="text-center">Yakin nihh mau <span class="text-danger">HAPUS</span> data <strong> {{ $row->nama_buah}}</strong> ??</p>
                         </div>
                         <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <a href="{{ route('fruit.destroy', $row->id) }}" class="btn btn-primary">
                                   Delete kuyy!
                              </a>
                         </div>
                    </div>
               </div>
          </div>
          @endforeach

          <a href="{{ route('fruit.create') }}" class="btn btn-warning mt-3">Tambah</a>
     </div>
     <!-- script js bootstrap -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>