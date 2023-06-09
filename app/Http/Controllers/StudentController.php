<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class StudentController extends Controller
{
    public function index()
    {
        $data = (new BaseApi)->index('/api/students');
        $students = $data->json('data');

        for ($i=0; $i < count($students); $i++) {
            $students[$i]['image_path'] = env('API_HOST') . 'storage/' . $students[$i]['image'];
        }

        return view('students.index')->with('students' , $students);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $payload = [
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlpn' => $request->no_tlpn,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'image' => $request->image,

           ];

           $baseApi = new BaseApi;
           $response = $baseApi->create('/api/students/store', $payload);
            if ($response->failed()) {
                $errors = $response->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }
    return redirect('/siswa')->with('success', 'Success add new Students to API!');

    }

    public function show($id)
    {
        $data = (new BaseApi)->detail('/api/students', $id);
        $students = $data->json();
        return view('students.show')->with('students' , $students['data']);
    }

    public function edit($id)
    {
        $data = (new BaseApi)->detail('/api/students', $id);
        $students = $data->json();
        return view('students.update')->with('students' , $students['data']);
    }

    public function update(Request $request, $id)
    {
        $payload = [
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'no_tlpn' => $request->no_tlpn,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'image' => $request->images,
           ];

           $baseApi = new BaseApi;
           $response = $baseApi->update('/api/students/update',$id, $payload);
            if ($response->failed()) {
                $errors = $response->json('data');
                return redirect()->back()->with(['errors' => $errors]);
            }

    return redirect('/siswa')->with('success', 'Success add new Students to API!');


    //     $payload = [
    //         'nis' => $request->nis,
    //         'nama' => $request->nama,
    //         'rombel' => $request->rombel,
    //         'rayon' => $request->rayon,
    //         'tgl_lahir' => $request->tgl_lahir,
    //        ];

    //        $baseApi = new BaseApi;
    //        $response = $baseApi->update('/api/students/update', $id, $payload);
    //         if ($response->failed()) {
    //             $errors = $response->json('data');
    //             return redirect()->back()->with(['errors' => $errors]);
    //         }

    // return redirect('/siswa')->with('success', 'Success updated API!');
    }

    public function destroy(Request $request, $id)
    {
        $baseApi = new BaseApi;
        $response = $baseApi->delete('/api/students/delete', $id);
        return redirect('siswa');





        // $baseApi = new BaseApi;
        // $data = $baseApi->delete('/api/students/delete', $id);
        // if ($data->failed()) {
        //     return redirect('/siswa')->with('fail', 'Data cant deleted from the API');
        // }

        // return redirect('/siswa')->with('success', 'Data was deleted from the API');
    }
}
