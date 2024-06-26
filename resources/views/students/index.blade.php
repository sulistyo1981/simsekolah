@extends('template')
@section('content')
<main class="container">
    <div class="p-5 rounded">
      <h1>Daftar Siswa</h1>
      <a class="btn btn-danger" href="/students/create">Tambah Siswa Baru</a>
      <hr>
      @if(session('message')!='')
      <div class="alert alert-primary" role="alert">
        {{ session('message') }}
      </div>
      @endif

      <table class="table table-bordered">
        <tr>
            <th style="text-align:center;">Nomor</th>
            <th style="text-align:center;">NIS</th>
            <th style="text-align:center;">Nama</th>
            <th style="text-align:center;">Tanggal Lahir</th>
            <th colspan="2" width="40" style="text-align:center;">Action</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td style="text-align:center;">{{ $loop->iteration}}</td>
            <td style="text-align:center;">{{ $student->nis}}</td>
            <td style="text-align:center;">{{ $student->name}}</td>
            <td style="text-align:center;">{{ $student->tanggal}}</td>
            <td style="text-align:center;">
                <a href="/students/{{$student->id}}/edit" class="btn btn-warning">Ubah</a>
            </td>
            <td style="text-align:center;">
            <form action="/students/{{ $student->id }} " method="post">
                <input type="hidden" name="_method" value="delete">
                @csrf
                <button type="submit" class="btn btn-danger" >Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
  </main>
@endsection
