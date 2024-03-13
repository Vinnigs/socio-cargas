<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\User;

class SubscribeController extends Controller
{
    public function index(){
        //
    }


    public function prata(){
        
        $user = User::findOrFail(auth()->user()->id);

        //Verificando se o usuário já possui assinatura ativa.
        if($user->subscribed('prata') || $user->subscribed('ouro') || $user->subscribed('diamante')){
            $user->redirectToBillingPortal();
        }

        $user->createOrGetStripeCustomer();

        return $user->newSubscription('prata', 'price_1OE1nkCnWEQVTak5Uq4o8UPn')
               ->checkout()
               ->redirect();
    }


    public function ouro(){
        $user = User::findOrFail(auth()->user()->id);

        //Verificando se o usuário já possui assinatura ativa.
        if($user->subscribed('prata') || $user->subscribed('ouro') || $user->subscribed('diamante')){
            $user->redirectToBillingPortal();
        }

        $user->createOrGetStripeCustomer();

        return $user->newSubscription('ouro', 'price_1OE2PaCnWEQVTak5ecFMwPNv')
               ->checkout()
               ->redirect();
    }


    public function diamante(){
        $user = User::findOrFail(auth()->user()->id);

        //Verificando se o usuário já possui assinatura ativa.
        if($user->subscribed('prata') || $user->subscribed('ouro') || $user->subscribed('diamante')){
            $user->redirectToBillingPortal();
        }

        $user->createOrGetStripeCustomer();

        return $user->newSubscription('diamante', 'price_1OE2PuCnWEQVTak5anR07uqw')
               ->checkout()
               ->redirect();
    }
}
