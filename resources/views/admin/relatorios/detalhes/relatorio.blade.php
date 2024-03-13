<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!--Metas =--=--=-=-=-=--=-=-==-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Links =--=--=-=-=-=--=-=-==-->
    <link rel="stylesheet" href="/assets/css/cms-adm-main.css">
    <link rel="stylesheet" href="/assets/css/cms-adm-dashboard.css">
    <link rel="stylesheet" href="/assets/css/frete-details-dashboard.css">
    <link rel="icon" href="/assets/img/Design sem nome (8).png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Relatório PDF</title>

    <base href="{{ url('/') }}">

    <style>
        div#container{
            width: 90%;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }
        th{
            text-align: left;
        }
        thead{
            border-bottom: 1px solid rgb(169, 169, 169);
        }
        tbody tr:nth-child(even){
            background-color: rgb(240, 240, 240);
        }

        .titulos{
            margin-bottom: 32px;
        }
        .titulo{
            font-size: 32px
        }
        .subtitulo{
            font-size: 14px;
            color: rgb(137, 137, 137);
        }

        .infos,
        .historico{
            margin-top: 32px;
        }
        .titulo-info{
            font-weight: bold;
            border-bottom: 2px solid rgb(169, 169, 169);
        }
    </style>

</head>
<body>

    <div id="container">

        <div class="titulos">
            <h3 class="titulo">Frete #{{ $frete->id }} | {{ $frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : '')))) }}</h3>
            <p class="subtitulo">Gerado em: {{ $hoje }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Endereço de Origem</th>
                    <th>Endereço de Destino</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <p>Estado: {{$frete->atributos->endereco_origem['estado']}}</p>
                        <p>Cidade: {{$frete->atributos->endereco_origem['cidade']}}</p>
                        <p>CEP: {{$frete->atributos->endereco_origem['cep']}}</p>
                        <p>Rua: {{$frete->atributos->endereco_origem['rua']}}</p>
                        <p>Bairro: {{$frete->atributos->endereco_origem['bairro']}}</p>
                        <p>Numero: {{$frete->atributos->endereco_origem['numero']}}</p>
                        <p>Complemento: {{$frete->atributos->endereco_origem['complemento'] == null ? '' : $frete->atributos->endereco_origem['complemento']}}</p>
                        <p>Previsão da Carga: {{date('d/m/Y', strtotime($frete->atributos->endereco_origem['previsao_carga']))}}</p>
                        <p>Hora da Carga: {{$frete->atributos->endereco_origem['hora_carga']}}</p>
                    </td>
                    <td>
                        <p>Estado: {{$frete->atributos->endereco_destino['estado']}}</p>
                        <p>Cidade: {{$frete->atributos->endereco_destino['cidade']}}</p>
                        <p>CEP: {{$frete->atributos->endereco_destino['cep']}}</p>
                        <p>Rua: {{$frete->atributos->endereco_destino['rua']}}</p>
                        <p>Bairro: {{$frete->atributos->endereco_destino['bairro']}}</p>
                        <p>Numero: {{$frete->atributos->endereco_destino['numero']}}</p>
                        <p>Complemento: {{$frete->atributos->endereco_destino['complemento'] == null ? '' : $frete->atributos->endereco_destino['complemento']}}</p>
                        <p class="mt-6">Previsão da Descarga: {{date('d/m/Y', strtotime($frete->atributos->endereco_destino['previsao_descarga']))}}</p>
                        <p>Hora da Descarga: {{$frete->atributos->endereco_destino['hora_descarga']}}</p>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="infos">

            <p class="titulo-info">Informações do frete</p>

            <p><span class="font-bold">KM:</span> {{$frete->atributos->km}}</p>
            <p><span class="font-bold">Valor:</span> {{$frete->atributos->valor}}</p>
            <p><span class="font-bold">Produto:</span> {{$frete->atributos->produto}}</p>
            <p><span class="font-bold">Tipo de Carga:</span> {{$frete->atributos->tipo_carga}}</p>
            <p><span class="font-bold">Espécie:</span> {{$frete->atributos->especie}}</p>

            @if($frete->atributos->veiculos_pesados)
                <p><span class="font-bold">Veículos Pesados:</span>
                @foreach($frete->atributos->veiculos_pesados as $veiculo)
                    <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                @endforeach
                </p>
            @endif
            @if($frete->atributos->veiculos_medios)
                <p><span class="font-bold">Veículos Médios:</span>
                @foreach($frete->atributos->veiculos_medios as $veiculo)
                    <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                @endforeach
                </p>
            @endif
            @if($frete->atributos->veiculos_leves)
                <p><span class="font-bold">Veículos Leves:</span>
                @foreach($frete->atributos->veiculos_leves as $veiculo)
                    <span>{{$veiculo}}{{$loop->last ? '' : ', '}}</span>
                @endforeach
                </p>
            @endif

            <p><span class="font-bold">Carroceria:</span>
            @foreach($frete->atributos->carroceria as $carroceria)
                <span>{{$carroceria}}{{$loop->last ? '' : ', '}}</span>
            @endforeach
            </p>

            <p class="mt-12"><span class="font-bold">Peso da Carga:</span> {{$frete->atributos->peso['total']}}</p>
            <p class="mb-12"><span class="font-bold">Volumes da Carga:</span> {{$frete->atributos->peso['volumes']}}</p>


            <p><span class="font-bold">Lona:</span> {{$frete->atributos->lona == 1 ? 'Sim' : 'Não'}}</p>
            <p><span class="font-bold">Agenciamento:</span> {{$frete->atributos->agenciamento == 1 ? 'Sim' : 'Não'}}</p>
            <p><span class="font-bold">Pedágio:</span> {{$frete->atributos->pedagio == 1 ? 'Sim' : 'Não'}}</p>
            <p><span class="font-bold">Rastreador:</span> {{$frete->atributos->rastreador == 1 ? 'Sim' : 'Não'}}</p>

            <p><span class="font-bold">Pagamento:</span>
                @foreach($frete->atributos->pagamento as $pagamento)
                    <span>{{$pagamento}}{{$loop->last ? '' : ', '}}</span>
                @endforeach
            </p>

            <p><span class="font-bold">Observações:</span> {{$frete->atributos->observacoes}}</p>
        </div>

        <div class="historico">
            <p class="titulo-info">Histórico do Frete</p>
            @isset($frete->data_ativo)
                <p>Ativo: {{date('d/m/Y à\s H:i:s', strtotime($frete->data_ativo))}}</p>
            @endisset
            @isset($frete->data_progresso)
                <p>Em progresso: {{date('d/m/Y à\s H:i:s', strtotime($frete->data_progresso))}}</p>
            @endisset
            @isset($frete->data_concluido)
                <p>Concluído: {{date('d/m/Y à\s H:i:s', strtotime($frete->data_concluido))}}</p>
            @endisset
            @isset($frete->data_cancelado)
                <p>Cancelado: {{date('d/m/Y à\s H:i:s', strtotime($frete->data_cancelado))}}</p>
            @endisset
            @isset($frete->msg_cancelado)
                <p>Motivo do cancelamento: {{ $frete->msg_cancelado }}</p>
            @endisset
        </div>
    </div>



</body>
</html>