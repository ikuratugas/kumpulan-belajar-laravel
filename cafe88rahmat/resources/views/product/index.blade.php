<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CafeIkura</title>
</head>
<body>
  <h1>Home CafeIkura</h1>

  <h2>Data produk</h2>
  @foreach ($all as $produk)
     <h4> {{ $produk->name }}</h4> 
     <p>harga : {{ $produk->price }}</p>
     <p>deskripsi : {{ $produk->description }}</p>
     <a href="{{ route('product.edit', ['id' => $produk->id]) }}">Edit</a> 
     <form method="post" action="{{ route('product.destroy', ["id" =>$produk->id]) }}">
      @method('delete')
      @csrf
      <button>Hapus</button>
     </form>
  @endforeach
</body>
</html>