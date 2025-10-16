@extends('layouts.app')
@section('content')

<div class="container">
  <h2>Edit Data User</h2>
  <form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label>Nama</label>
      <input type="text" name="name" value="{{ $user->name }}" class="form-control">
    </div>
    <div class="mb-3">
      <label>Email</label>
      <input type="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>

@endsection
