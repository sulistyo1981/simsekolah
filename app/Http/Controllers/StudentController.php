<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
use App\Models\jurusan;
use Illuminate\Support\Facades\Log;
use function Sentry\captureMessage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = students::all();
        return view ('students.index',$data);
    }

    public function create()
    {
        $data['jurusan'] = jurusan::all();
        return view ('students.create',$data);
    }

    public function store(Request $request)
    {
        Log::debug($request);
        Log::info("ini proses insert data");
        //insert data ke database
        $students = new students;
        $students->nis = $request->nis;
        $students->name = $request->name;
        $students->tanggal = $request->tanggal;
        $students->jurusan_id = $request->jurusan_id;
        $students->save();
        return redirect ('students')->with('message',"Data Atas Nama {$students->name} Berhasil Ditambahkan");
    }

    public function edit($id)
    {
        //edit data ke database

        $student = students::find($id);
        if ($student==null){
            \Sentry\captureMessage('Data Tidak Ditemukan');
            return 'Data Tidak Ditemukan';
        }else{
            $data['students'] = students::find($id);
            return view ('students.edit',$data);
         }
        }
    public function update(Request $request)
    {
        //update data ke database
        $students = students::find($request->id);
        $students->nis = $request->nis;
        $students->name = $request->name;
        $students->tanggal = $request->tanggal;
        $students->save();
        return redirect ('students')->with('message',"Data Atas Nama {$students->name} Berhasil Diubah");
    }

    public function destroy($id)
    {
        $students = students::find($id);
        $students->delete();
        return redirect ('students')->with('message',"Data Atas Nama {$students->name} Berhasil Dihapus");
    }
}


