<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacancyApplicationController extends Controller
{
    function apply($id)
    {
        $vacancy = Vacancy::find($id, ['id']);

        try {
            Apply::create([
                'user_id' => Auth::id(),
                'vacancy_id' => $vacancy->id,
                'curriculum' => '0'
            ]);

            return redirect()
                    ->route('vacancies.show')
                    ->with('success', 'Candidatura enviado com sucesso');
        } catch (\Throwable $error) {
            return back()->withErrors(['error' => 'Erro ao se candidatar: ' . $error->getMessage()]);
        }
    }
}