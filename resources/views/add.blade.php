<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


<div class="card uper">
  <div class="card-header">
    Add Products
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{route('produtos.store')}}">
          <div class="form-group">
              @csrf
              <label for="country_name">Product Name:</label>
              <input type="text" class="form-control" name="name" require/>
          </div>
          <div class="form-group">
              <label for="cases">Product Price :</label>
              <input type="text" class="form-control" name="price" required/>
          </div>
          <div class="form-group">
              <label for="cases">Categoria :</label>
              <input type="text" class="form-control" name="categoria" required/>
          </div>
          <button type="submit" class="btn btn-primary">Add </button>
      </form>
  </div>
</div>
</div>
    </div>
</div>
@endsection