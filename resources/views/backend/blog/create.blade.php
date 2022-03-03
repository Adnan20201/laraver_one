@extends('layouts.app')
<style>
  container {
    font-family: sans-serif;
  }

  form {
    width: 500px;
    margin: 8% auto;
    padding: 50px 0;
    text-align: center;
    box-shadow: 0 20px 40px rgb(0, 0, 0);
    background-color: #6610F2;
  }


  .input-box {
    margin: 30px auto;
    width: 80%;
    position: relative;
    box-shadow: 0 8px 10px -10px rgb(0, 0, 0);
  }

  .input-box input {
    width: 100%;
    height: 40px;
    border: none;
    background: #efefef;
    padding-left: 50px;
  }

  textarea {
    width: 80%;
    background: #efefef;
  }

  span {
    position: absolute;
    left: 0;
    top: 0;
    height: 40px;
    width: 40px;
    background: linear-gradient(to right, #4CAF50, #00BCD4);
  }

  span .fa {
    padding: 10px;
    color: #fff;
  }

  button {
    width: 130px;
    height: 40px;
    color: #fff;
    border: 0;
    font-size: 16px;
    outline: none;
    display: block;
    background: linear-gradient(to right, #4CAF50, #00BCD4);
    box-shadow: 0 8px 10px -10px rgb(0, 0, 0);
    cursor: pointer;


  }
</style>






@section('content')
<div class="container">


  <form action="{{ route('store.create')}}" method="POST">
    @csrf

    <div class="card-header  d-flex justify-content-between">
      <h2 class="text-white" style="padding-left:25px;"><b>Add Blog Post</b></h2>
      <a href="{{ route('all.create') }}" class="btn btn-sm text-white" style="background:hotpink; padding: 8px 30px; border: 0; font-size: 18px; border-radius: 50px;">
        All Blog Post
      </a>
    </div>

    <div class="input-box">
      <span><i class="fa fa-user-o"></i></span>
      <input type="text" placeholder="User Name" name="user_name" value="{{ old('user_name')}}">
    </div>
    @error('user_name')
    <span class="text-danger"> {{ $message }}</span>
    @enderror


    <div class="input-box">
      <span><i class="fa fa-envelope-o"></i></span>
      <input type="email" placeholder="Email Id" name="email" value="{{ old('email')}}">
      @error('email')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>

    <div class="input-box">
      <span><i class="fa fa-key"></i></span>
      <input type="password" placeholder="Password" name="password" value="{{ old('password')}}">
    </div>
    @error('password')
    <span class="text-danger"> {{ $message }}</span>
    @enderror

    <textarea class="mb-3" name="detail" placeholder="Blog Detail"  value="{{ old('password')}}"></textarea>
    @error('detail')
    <span class="text-danger">{{ $message }} </span>
    @enderror

    <button type="submit" style="margin-left: 50px;">submit</button>
  </form>
</div>
@endsection