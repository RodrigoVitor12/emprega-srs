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
        return view('show-resume');
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