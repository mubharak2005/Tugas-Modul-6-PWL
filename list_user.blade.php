<table class="table">
  <thead>
    <tr>
      <th>Nama</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>
        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@if(session('success'))
  <div class="alert alert-success mt-3">{{ session('success') }}</div>
@endif
