<?php

namespace App\Http\Controllers;

use App\Student;
use Hash;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $username = $request->id;
        $password = $request->pass;
        $data = Student::where('id_siswa', $username)->first();

        if ($data) {
            if (Hash::check($password, $data->pass_siswa)) {

                // tambah fungsi bot telegram disini
                $token = ['YOUR_TOKEN'];
                $user_id = $data->id_tele_user; //your id_user on json api telegram
                $msg = "Putra/Putri yang Bernama" . " " . $data->nama_siswa . " " . "Sudah Hadir di Sekolah";

                $data_url = [
                    'chat_id' => $user_id,
                    'text' => $msg
                ];

                $get_request_url = 'https://api.telegram.org/bot' . $token . '/sendMessage?' . http_build_query($data_url);
                $result = file_get_contents($get_request_url);

                if ($result) {
                    return redirect('/')->with('status', 'Selamat Datang' . ' ' . $data->nama_siswa);
                } else {
                    return redirect('/')->with('alert_id', 'gagal mengirim pesan');
                }
            } else {
                return redirect('/')->with('alert', 'password salah ' . Hash::check($password, $data->password));
            }
        } else {
            return redirect('/')->with('alert_id', 'Id Siswa Tidak ditemuka');
        }

        // ! lanjutin bagian ini buat pengecekan login
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new Student;
        $students->id_siswa = $request->username;
        $students->pass_siswa = bcrypt($request->password);
        $students->nama_siswa = $request->name;
        $students->id_tele_user = $request->id_telegram;

        $students->save(); //cara pertama memasukkan data ke database
        return view('adak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
