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

  <h3>Edit Product</h3>

  @if ($errors->any())
     @foreach ($errors-> all() as $e)
        <li>{{ $e }}</li> 
     @endforeach
  @endif

  <form method="post" action=" {{ route('product.update', ["produk" => $id]) }}">
    @csrf
    @method('put')
    <label for="name">Nama Produk</label>
    <input type="text" name="name" id="product" value="{{ $id->name }}">
    <br>
    <label for="price">Harga</label>
    <input type="number" name="price" id="price" value="{{ $id->price }}">
    <br>
    <textarea name="description" placeholder="Masukan Deskripsi" id="" cols="30"  rows="10" >
      {{ $id->description }}
    </textarea>
    <br>
    <input type="submit" value="update">
  </form>
</body>
</html>