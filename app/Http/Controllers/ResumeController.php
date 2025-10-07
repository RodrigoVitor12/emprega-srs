<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function create() {
        $data = Resume::where('user_id', Auth::id())->select('user_id')->first();
        return view('create-resume', ['data' => $data]);
    }

    public function pageUpdate() {
        $data = Resume::where('user_id', Auth::id())->first();
        return view('update-resume', ['data' => $data]);
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
            return redirect()->route('show.resume', Auth::id());
        } catch (\Throwable $th) {
            return "Erro ao criar: " . $th->getMessage();
        }
    }

    public function update($id, Request $request) {
        $resume = Resume::find($id);
        $data = $request->all();

        if(!$resume) {
            return redirect()->back();
        }

        try {
            $resume->update($data);
            return redirect()->back()->with('success', 'Currículo atualizado com sucesso!');
        } catch (\Throwable $th) {
            return "erro: " . $th->getMessage();
        }
    }
}