<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Carbon;

use App\Models\User;
use App\Models\Frete;
use App\Models\Caminhoneiro;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
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

        Gate::define('user', function(){
            if((auth()->check() && auth()->user()) && !auth()->user()->admin && !auth()->user()->caminhoneiro && !auth()->user()->empresa){
                return true;
            }elseif(auth()->check() && auth()->user()->caminhoneiro){
                $caminhoneiro = Caminhoneiro::where('user_id', auth()->user()->id)->firstOrFail();
                return $caminhoneiro->status != 1;
            }else{
                return false;
            }
        });

        Gate::define('admin', function(){
            return auth()->check() && auth()->user()->admin;
        });

        Gate::define('caminhoneiro', function(){
            if(auth()->check() && auth()->user()->caminhoneiro){
                $caminhoneiro = Caminhoneiro::where('user_id', auth()->user()->id)->firstOrFail();
                if($caminhoneiro->status == 1){
                    return true;
                }else{
                    return false;
                }
            }
        });

        Gate::define('empresa', function(){
            return auth()->check() && auth()->user()->empresa;
        });




        // ~~ CAMINHONEIROS MODEL ~~

        //Checa se o caminhoneiro possui frete em andamento.
        Gate::define('caminhoneiroFreteProgresso', function(User $user, Caminhoneiro $caminhoneiro){
            foreach($caminhoneiro->fretesAtribuidos as $frete){
                if($frete->status == 2){
                    return true;
                }
            }
        });

        //Checa se o caminhoneiro já se candidatou à aquele frete.
        Gate::define('freteCandidatado', function(User $user, Frete $frete){
            foreach($user->caminhoneiros->fretesCandidato as $freteCand){
                if($freteCand->id == $frete->id){
                    return true;
                }
            }
        });

        //Checa se o caminhoneiro possui candidaturas o suficiente para se candidatar à vaga.
        Gate::define('checaCandidaturas', function(User $user, Caminhoneiro $caminhoneiro){
            if($caminhoneiro->candidaturas <= 0){
                return true;
            }
        });




        // ~~ REGRAS ASSINATURA ~~

        // Checando as regras que o caminhoneiro se enquadra.
        Gate::define('candAssinaturaFrete', function(User $user, Frete $frete){

            $data = Carbon::parse($frete->updated_at);
            $agora = Carbon::now();
            $diferencaHoras = $agora->diffInHours($data);

            // Bronze.
            if($user->caminhoneiros->assinatura == 'bronze' && $frete->tipo == 0){
                if($diferencaHoras >= 24){
                    return true;
                }else{
                    return false;
                }

            }elseif($user->caminhoneiros->assinatura == 'bronze' && $frete->tipo == 1){
                return false;

            }elseif($frete->tipo == 2){
                return true;
            }

            // Prata.
            if($user->caminhoneiros->assinatura == 'prata' && $frete->tipo == 0){
                if($diferencaHoras >= 12){
                    return true;
                }else{
                    return false;
                }

            }elseif($user->caminhoneiros->assinatura == 'prata' && $frete->tipo == 1){
                return false;

            }elseif($frete->tipo == 2){
                return true;

            }


            // Ouro.
            if($user->caminhoneiros->assinatura == 'ouro' && $frete->tipo == 0){
                return true;

            }elseif($user->caminhoneiros->assinatura == 'ouro' && $frete->tipo == 1){
                if($diferencaHoras >= 12){
                    return true;
                }else{
                    return false;
                }

            }elseif($frete->tipo == 2){
                return true;

            }

            // Diamante.
            if($user->caminhoneiros->assinatura == 'diamante' && $frete->tipo == 0){
                return true;

            }elseif($user->caminhoneiros->assinatura == 'diamante' && $frete->tipo == 1){
                return true;

            }elseif($frete->tipo == 2){
                return true;

            }

        });
    }
}
