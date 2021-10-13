@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <div class="card mb-4">
        <h5 class="card-header">
          {{ __('interface.add', ['name' => __('interface.role')]) }}
        </h5>

        <div class="card-body">
          <form action="{{ route('roles.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">
                Role name
              </label>
              <input
                type="text"
                class="form-control form-control-lg @error('name') is-invalid @enderror"
                id="name"
                name="name"
                required
                autofocus
              >

              @error('name')
                @include('includes.error')
              @enderror
            </div>

            <div class="form-group">
              @foreach ($permissions as $permission)
                <div class="form-check form-check-inline">
                  <div class="custom-control custom-checkbox">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="permission-{{ $permission->id }}"
                      name="permission[]"
                      value="{{ $permission->id }}"
                    >
                    <label
                      class="custom-control-label"
                      for="permission-{{ $permission->id }}"
                    >
                      {{ $permission->name }}
                    </label>
                  </div>
                </div>
              @endforeach
            </div>

            <button type="submit" class="btn btn-lg btn-block btn-success">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-center align-items-center mb-3">
            <a href="{{ route('home.index') }}" class="text-dark mr-2">
              <i class="fas fa-user p-3 border rounded-circle"></i>
            </a>

            <h3>{{ Auth::user()->name }}</h3>
          </div>

          <div class="list-group">
            @include('includes.admin.buttons', ['active' => 'home.roles'])
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
