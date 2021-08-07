@extends('layouts.dashboard')

@section('content')

  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Store Post</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-8">

          
          {{--  --}}
          
          @include('include.alerts.alerts')

          {{--  --}}
          {{-- Save Post Form --}}
        <div class="card card-gray-dark ">
          <div class="card-header p-4">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- Save Post Form -->
          <form role="form" action="{{ url('posts')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              {{-- Title --}}
              <div class="form-group">
                <label for="title">Title </label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="Enter title" value="{{ old('title') }}"  name="title">
              </div>
              @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              {{-- Body --}}
              <div class="form-group">
                <label for="body">Body </label>
                <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" placeholder="Enter body" value="{{ old('body') }}" name="body">
              </div>
              @error('body')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              {{-- main tag --}}
              <div class="form-group">
                <label for="mainTag">Main Tag </label>
                <input type="text" class="form-control @error('mainTag') is-invalid @enderror" id="mainTag" placeholder="Enter mainTag" value="{{ old('mainTag') }}" name="mainTag">
              </div>
              @error('mainTag')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              {{-- Post Quote --}}
              <div class="form-group">
                <label for="quote">Post Quote </label>
                <input type="text" class="form-control @error('quote') is-invalid @enderror" id="quote" placeholder="Enter quote" value="{{ old('quote') }}" name="quote">
              </div>
              @error('quote')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              {{-- Photo --}}
              <div class="form-group">
                <label for="exampleInputFile">Photo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="exampleInputFile" value="{{ old('photo') }}" name="photo">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                </div>
              </div>
              @error('photo')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-block btn-outline-secondary  ">Save post</button>
            </div>

          </form>
        </div>
        {{--  --}}
        </div>
      </div>
    </div>
  </div>

@endsection