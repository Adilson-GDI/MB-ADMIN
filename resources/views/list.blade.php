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
    Lista Produtos
  </div>
  <div class="card-body">


    
<table class="table table-striped">
    <thead>
      <tr>
        <th>Produto</th>
        <th>Preço</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($produtos as $produto )
      <tr>
        <td>{{$produto->name}}</td>
        <td>{{$produto->price}}</td>
        <td>
        <a class="btn btn-sm btn-warning" href="/produtos/edit/{{$produto->id}}">Edit</a>
        <a class="btn btn-sm btn-danger" href="/produtos/delete/{{$produto->id}}">Delete</a>
       </td>
      </tr>
      @endforeach  

    </tbody>
  </table>
</div>


<div class="card-footer">
<a class="btn btn-sm btn-primary" href="{{route('produtos.add')}}">Add Product</a>
</div>

  </div>
</div>
</div>
    </div>
</div>
@endsection