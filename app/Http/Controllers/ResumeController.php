<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function create() {
        return view('create-resume');
    }

    public function show($id) {
        $data = Resume::where('user_id', $id)->first();
        if(!$data) {
            return redirect()->back();
        }
        return view('show-resume', ['data' => $data]);
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['user_id'] = Auth::id();

        try {
            Resume::create($data);
            return redirect()->back()->with('success', 'Currículo criado com sucesso!');
        } catch (\Throwable $th) {
            return "Erro ao criar: " . $th->getMessage();
        }
    }
}