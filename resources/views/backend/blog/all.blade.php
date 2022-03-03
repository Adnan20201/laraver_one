@extends('layouts.app')
@section('content')

<div class="container">

  <div class="card col-12 mx-auto mt-5 px-0 shadow-lg rounded">

    <div class="card-header d-flex justify-content-between" style="background: #265084;">
      <h2 class="text-white">All Banner</h2>
      <a href="{{ route('post.create') }}" class="btn btn-sm text-white" name="submit" style="background:hotpink; padding: 8px 30px; border: 0; font-size: 18px; border-radius: 50px;">Add Blog Post</a>
    </div>
    <div class="card-body" style="background: 49596d;">
      <table class="table table-responsive">
        <tr>
          <th>#</th>
          <th>User_name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Details</th>
        </tr>

     
          <tr>
            <td>1</td>
            <td>Afiful Hoque Adnan</td>
            <td>afifuladnan2020@gmail.com</td>
            <td>afifuladnan</td>
            <td>Google Translatby documents and websites from one language into ...</td>
            <td></td>
        
          </tr>






      </table>
    </div>
  </div>
</div>
@endsection