<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('create') }}">Create</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        @foreach ($produk as $produks)
            <form action="{{ url('update', [$produks->id]) }}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" value="{{$produks->nama_produk}}" class="form-control" id="nama_produk" name="nama_produk" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" style="height: 100px" required>{{$produks->keterangan}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" value="{{$produks->harga}}" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" value="{{$produks->jumlah}}" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endforeach
    </div>
</body>
