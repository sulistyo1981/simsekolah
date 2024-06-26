@extends('template')
@section('content')
<main class="container" style="margin-top: 30px">
    <div class="p-5 rounded">
      <h1>Tambah Siswa</h1>
      <form action="/students" method="POST">
        @csrf
      <table class="table table-bordered">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" placeholder="NIS" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" placeholder="Nama Lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>
            <select name="jurusan_id" class="form-control">
            @foreach ($jurusan as $j)
                <option value="{{ $j->id}}">{{ $j->nama_jurusan}}</option>
            @endforeach
            </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal" placeholder="Tanggal Lahir" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-danger">Simpan</button>
                <a class="btn btn-success" href="/students">Kembali</a>
            </td>
        </tr>
      </table>
    </div>
</form>
</main>
@endsection
