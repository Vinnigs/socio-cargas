<?php

namespace App\Policies;

use App\Models\Frete;
use App\Models\User;
use App\Models\Empresa;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Gate;

class FretePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Frete $frete)
    {
        if(Gate::allows('empresa')){
            if($user->empresas->id === $frete->empresa_id && $frete->status == 0){
                return true;
            }

        }elseif(Gate::allows('admin')){
            if($frete->status <= 1){
                return true;
            }
        }

    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Frete $frete)
    {
        if($user->empresas->id === $frete->empresa_id && $frete->status == 0){
            return true;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Frete $frete)
    {
        if($user->empresas->id === $frete->empresa_id && $frete->status == 0){
            return true;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Frete $frete)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Frete  $frete
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Frete $frete)
    {
        //
    }
}
