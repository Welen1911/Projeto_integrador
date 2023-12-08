<?php

namespace App\Providers;

use App\Models\Candidato;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isEmpresa', function (User $user){
            return $user->tipo_conta == 'empresa';
        });

        Gate::define('empresa_create', function (User $user) {
            return Empresa::where('user_id', $user->id)->first();
        });

        Gate::define('isCandidato', function (User $user){
            return $user->tipo_conta == 'candidato';
        });

        Gate::define('candidato_create', function (User $user) {
            return Candidato::where('user_id', $user->id)->first();
        });
    }
}
