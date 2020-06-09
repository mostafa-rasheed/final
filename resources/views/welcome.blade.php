
<!DOCTYPE html>
@extends('layouts.app')
@section('contact')
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Products - ERP System</a>
    </div>
  </nav>

  <main class="container p-4">
  <div class="row">
      <div class="col-md-4">
      <!-- MESSAGES -->
      @if (isset($contact))

      
      <!-- ADD Product FORM -->
      <div class="card card-body">
          <form action="{{url('update/'.$contact->id)}}" method="POST">
              @csrf
          <div class="form-group">
              <input type="text" name="title" class="form-control" placeholder="Product Title" autofocus value="
              {{$contact->Title}}">
          </div>
          <div class="form-group">
              <textarea name="description" rows="2" class="form-control" placeholder="Product Description" value="{{$contact->Description}}"></textarea>
          </div>
          <div class="form-group">
              <input type="number" name="price" class="form-control" placeholder="Product Price" min="0" value="{{$contact->Price}}">
          </div>
          <input type="submit" name="save_product" class="btn btn-success btn-block" value="updata">
          </form>
      </div>
      </div>
      <div class="col-md-8">
      <table class="table table-bordered">
          <thead>
          <tr>
              <th>Title</th>
              <th>Description</th>
              <th>Price</th>
              <th>Created At</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $contact )

                      <tr>
              <td>{{$contact->Title}}</td>
              <td>{{$contact->Description}}</td>
              <td>{{$contact->Price}}</td>
              <td>{{$contact->created_at}}</td>
              <td>
              <a href="edit" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
              </a>
              <a href="#" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
              </a>
              </td>
          </tr>
          @endforeach
                  </tbody>
      </table>
      </div>
  </div>
  </main>


  @else 

   <!-- ADD Product FORM -->
   <div class="card card-body">
    <form action="store" method="POST">
        @csrf
    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Product Title" autofocus>
    </div>
    <div class="form-group">
        <textarea name="description" rows="2" class="form-control" placeholder="Product Description"></textarea>
    </div>
    <div class="form-group">
        <input type="number" name="price" class="form-control" placeholder="Product Price" min="0">
    </div>
    <input type="submit" name="save_product" class="btn btn-success btn-block" value="Save Product">
    </form>
</div>
</div>
<div class="col-md-8">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact )

                <tr>
        <td>{{$contact->Title}}</td>
        <td>{{$contact->Description}}</td>
        <td>{{$contact->Price}}</td>
        <td>{{$contact->created_at}}</td>
        <td>
        <a href="contact" class="btn btn-secondary">
            <i class="fas fa-marker"></i>
        </a>
        <a href="/delete/{{$contact->id}}" class="btn btn-danger">
            <i class="far fa-trash-alt"></i>
        </a>
        </td>
    </tr>
    @endforeach
            </tbody>
</table>
</div>
</div>
</main>
@endif

@endsection
    

