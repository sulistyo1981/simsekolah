@extends('template')
@section('content')
<main class="container" style="margin-top: 30px">
    <div class="p-5 rounded">
        <form action="/students/{{$students->id}}" method="POST">
            <input type="hidden" name="_method" value="PUT">
            @csrf
        <div class="p-5 rounded">
      <h1>Ubah Siswa</h1>

      <table class="table table-bordered">
        <tr>
            <td>NIS</td>
            <td><input type="text" name="nis" placeholder="NIS" class="form-control" value="{{ $students->nis }}"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="name" placeholder="nama" class="form-control" value="{{ $students->name }}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="date" name="tanggal" placeholder="Tanggal Lahir" class="form-control" value="{{ $students->tanggal }}"></td>
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
