<?php

namespace App\Listeners;

use Laravel\Cashier\Events\WebhookReceived;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Caminhoneiro;

class StripeEventListener
{

    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(WebhookReceived $event): void
    {

        $prataPrice = 'price_1OE1nkCnWEQVTak5Uq4o8UPn';
        $ouroPrice = 'price_1OE2PaCnWEQVTak5ecFMwPNv';
        $diamantePrice = 'price_1OE2PuCnWEQVTak5anR07uqw';

        

        // Criando uma nova assinatura.
        if($event->payload['type'] === 'invoice.payment_succeeded'){

            $dataCustomer = $event->payload['data']['object']['customer']; // Encontra o ID do Cliente.
            $dataSubs = $event->payload['data']['object']['id']; // Encontra o ID da Subscription.
            $subsAtual = $event->payload['data']['object']['lines']['data'][1]['plan']['id']; // Encontra o PRICE ID da nova assinatura.

            $user = User::where('stripe_id', $dataCustomer)->firstOrFail();
            $caminhoneiro = Caminhoneiro::where('user_id', $user->id)->firstOrFail();


            // Atualiza a assinatura do Caminhoneiro.
            if($subsAtual == $prataPrice){
                // Assinatura Prata...
                DB::table('subscriptions')->where('stripe_id', $dataSubs)->where('stripe_status', 'active')->update(['name' => 'prata']);
                $caminhoneiro->assinatura = 'prata';
                $caminhoneiro->candidaturas = 50;
                $caminhoneiro->save();

            }elseif($subsAtual == $ouroPrice){
                // Assinatura Ouro...
                DB::table('subscriptions')->where('stripe_id', $dataSubs)->where('stripe_status', 'active')->update(['name' => 'ouro']);
                $caminhoneiro->assinatura = 'ouro';
                $caminhoneiro->candidaturas = 80;
                $caminhoneiro->save();

            }elseif($subsAtual == $diamantePrice){
                // Assinatura Diamante...
                DB::table('subscriptions')->where('stripe_id', $dataSubs)->where('stripe_status', 'active')->update(['name' => 'diamante']);
                $caminhoneiro->assinatura = 'diamante';
                $caminhoneiro->candidaturas = 120;
                $caminhoneiro->save();

            }else{
                // Assinatura Bronze...
                $caminhoneiro->assinatura = 'bronze';
                $caminhoneiro->candidaturas = 20;
                $caminhoneiro->save();
            }

        }


        // Desativando privilégios se a assinatura não for paga.
        if($event->payload['type'] === 'customer.subscription.past_due'){

            $dataCustomer = $event->payload['data']['object']['customer']; // Encontra o ID do Cliente.

            $user = User::where('stripe_id', $dataCustomer)->firstOrFail();
            $caminhoneiro = Caminhoneiro::where('user_id', $user->id)->firstOrFail();

            // Resetando Assinatura.
            $caminhoneiro->assinatura = 'bronze';
            $caminhoneiro->candidaturas = 20;
            $caminhoneiro->save();
        }

        // Desativando privilégios caso a assinatura seja cancelada.
        if($event->payload['type'] === 'customer.subscription.deleted'){

            $dataCustomer = $event->payload['data']['object']['customer']; // Encontra o ID do Cliente.

            $user = User::where('stripe_id', $dataCustomer)->firstOrFail();
            $caminhoneiro = Caminhoneiro::where('user_id', $user->id)->firstOrFail();

            // Resetando Assinatura.
            $caminhoneiro->assinatura = 'bronze';
            $caminhoneiro->candidaturas = 20;
            $caminhoneiro->save();
        }
    }
}
