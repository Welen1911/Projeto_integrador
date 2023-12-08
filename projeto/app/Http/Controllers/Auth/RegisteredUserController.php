<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Laravel\Socialite\Facades\Socialite;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // return view('auth.register');
        return view('cadastro');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function storeProvider()
    {
        $providerUser = Socialite::driver('google')->user();

        $user = User::where('provider_id', $providerUser->getId())->first();

        if ($user) {
            $user->update([
                'provider_token' => $providerUser->token,
                'provider_refresh_token' => $providerUser->refreshToken,
            ]);
        } else {
            $user = User::create([
                'name' => $providerUser->getName(),
                'email' => $providerUser->getEmail(),
                'provider_id' => $providerUser->getId(),
                'provider_token' => $providerUser->token,
                'provider_refresh_token' => $providerUser->refreshToken,
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function setTipoConta(Request $request)
    {
        if ($request->option == 1) {
            $tipo = "candidato";
        } else if ($request->option == 2) {
            $tipo = "empresa";
        } else {
            return response()->json(["Erro" => "Selecione um tipo de conta"], 500);
        }
        $user = User::find(auth()->user()->id);
        $user->update([
            'tipo_conta' => $tipo
        ]);

        return response()->json(["Sucesso" => $user], 200);
    }

    public function informationStore(Request $request)
    {

        $user = User::find(auth()->user()->id);


        $estado = Estado::where('nome', $request->estado)->first();
        

        if (!$estado) {
        
            $estado = Estado::create([
                'nome' => $request->estado,
            ]);
        }

        $cidade = Cidade::where('cep', $request->cep)->first();


        if (!$cidade) {
            
            $cidade = Cidade::create([
                'nome' => $request->cidade,
                'cep' => $request->cep,
                'estado_id' => $estado->id,
            ]);

        }

        $user->endereco()->create([
            'bairro' => $request->bairro,
            'rua' => $request->rua,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade_id' => $cidade->id,
        ]);

        $user->telefones()->create([
            'celular' => $request->celular,
            'fixo' => $request->fixo,
        ]);

        return redirect(RouteServiceProvider::HOME);
    }
}
