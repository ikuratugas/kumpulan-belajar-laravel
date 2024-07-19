<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>CafeIkura</h1>

  <h3>Tambah Product</h3>

  @if ($errors->any())
     @foreach ($errors-> all() as $e)
        <li>{{ $e }}</li> 
     @endforeach
  @endif

  <form method="post" action=" {{ route('store') }}">
    @csrf
    @method('post')
    <label for="name">Nama Produk</label>
    <input type="text" name="name" id="product">
    <br>
    <label for="price">Harga</label>
    <input type="number" name="price" id="price">
    <br>
    <textarea name="description" placeholder="Masukan Deskripsi" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Send">
  </form>
</body>
</html>