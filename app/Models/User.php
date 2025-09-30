<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Auth;

/**
 * @property \Illuminate\Database\Eloquent\Collection|Vacancy[] $appliedVacancies
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role',
        'website',
        'address',
        'user_id'
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Um usuario cria varias vagas
    public function vacancies() 
    {
        return $this->hasMany(Vacancy::class);
    }

    // Um usuario aplica a varias vagas
    public function appliedVacancies()
    {
        return $this->belongsToMany(Vacancy::class, 'applies')->withTimestamps();
    }
    
    public function applies()
    {
        return $this->hasManyThrough(Apply::class, Vacancy::class);
    }

    // Retorna minhas candidaturas como usuario candidato
    public function allMyCandidacies () {
        return $this->appliedVacancies()->with('user')->get();
    }

    // Retorna as vagas do usuário com contagem de candidaturas
    public function vacanciesWithCandidacyCount()
    {
        return $this->vacancies()->where('user_id', Auth::id())->withCount('applies')->get();
    }

    // Retorna todas as candidaturas que o usuário empresa recebeu
    public function allApplies()
    {
        return $this->applies()->with('user')->get();
    }
}