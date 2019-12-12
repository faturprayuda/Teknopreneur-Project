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
        // $students = Student::all();
        // $username = $request -> id;
        // $pwd = $request -> pass;
        
        // // cek id dan pass
        // $users_count = \DB::table('students')
        // ->where('id_siswa', '=', $username)
        // ->where('pass_siswa', '=', $pwd)
        // ->count();

        // if( $users_count === 1 )
        // {
        //     // cek password same with username
        //     $row = mysqli_fetch_assoc($users_count);
        //     if( password_verify($password, $row["password"] ) )
        //     {
        //         header("Location: index.php");
        //         exit;
        //     }
        // }

            $username = $request->id;
            $password = $request->pass;
            $data = Student::where('id_siswa',$username)->first();

            if($data)
            {
                if(Hash::check($password, $data->pass_siswa))
                {
                    return redirect('/');
                }
                else
                {
                    return redirect('/')->with('alert', 'password salah ' .Hash::check($password, $data->password));
                }
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

    //*pembuatan fungsi native
    // public function auth(Request $req)
    // {
    //     $id = $req->id_siswa;
    //     $pwd   = $req->pass_siswa;
    //     if (Auth::attempt(['id_siswa' => $id, 'pass_siswa' => $pwd])) {
    //         return "Hai " . Auth::user()->name_siswa;
    //     } else {
    //         return "Maaf email atau password yang anda masukan tidak sesuai.";
    //     }
    // }
}
