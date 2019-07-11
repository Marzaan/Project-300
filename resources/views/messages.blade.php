@extends('layouts.app')

@section('content')
<script>
  function confirmToDelete(){
    var var1 = confirm("Are you sure to delete this item?");
    if(var1 == true){
      return true;
    }
    else{
      return false;
    }
  }
</script>
<nav class="navbar navbar-expand-lg navbar-light btn-success">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home">|         Dashboard     | </a>
  <a class="navbar-brand" href="products">|     Products    | </a>
  <a class="navbar-brand" href="messages">|     Messages    | </a>
  <a class="navbar-brand" href="addproduct">|     Insert Product    |</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href=""><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href=""></a>
      </li>
    </ul>
    <div class="col-md-4">
  <form action="searchMessage" method="get">
    <div class="input-group">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-control-prepend">
        <button type="submit" class="btn btn-primary">Search</button>
      </span>
    </div>
  </form>
</div>
  </div>
</nav>
             <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header"><b><h2>Customers Message</h2></b></div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                          <th scope="col">ID</th>
                                          <th scope="col">FirstName</th>
                                          <th scope="col">LastName</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Message</th>
                                          <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=0;
                                        ?>
                                        @foreach($msg as $message)
                                        <tr>
                                            <th scope="row">{{ ++$i }}</th>
                                            <td>{{ $message->FisrtName }}</td>
                                            <td>{{ $message->LastName }}</td>
                                            <td>{{ $message->Email }}</td>
                                            <td>{{ $message->Message }}</td>
                                            <td>
                                                <!--<a href="{!! route('edit', ['editId'=>$message->ID]) !!}" class="btn btn-primary">Edit</a>-->
                                                <button type="button" class="btn btn-primary">Edit</button>
                                                <a href="{!! route('deleteMessage', ['userId'=>$message->ID]) !!}" class="btn btn-danger" onclick="return confirmToDelete()">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </div>
@endsection