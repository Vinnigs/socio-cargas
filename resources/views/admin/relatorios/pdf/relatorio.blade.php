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
    </style>

</head>
<body>

    <div id="container">

        <div class="titulos">
            <h3 class="titulo">Relatório de Fretes</h3>
            <p class="subtitulo">{{ $data_de }} a {{ $data_a }}</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>KM</th>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Status</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fretes as $frete)
                <tr>
                    <td>{{ $frete->id }}</td>
                    <td>{{ $frete->atributos->endereco_origem['estado'] . '/' . $frete->atributos->endereco_origem['cidade'] }}</td>
                    <td>{{ $frete->atributos->endereco_destino['estado'] . '/' . $frete->atributos->endereco_destino['cidade'] }}</td>
                    <td>{{ $frete->atributos->km }}</td>
                    <td>{{ $frete->atributos->produto }}</td>
                    <td>R${{ $frete->atributos->valor }}</td>
                    <td>{{ $frete->status == 0 ? 'Pendente' : ($frete->status == 1 ? 'Ativo' : ($frete->status == 2 ? 'Em Progresso' : ($frete->status == 3 ? 'Concluído' : ($frete->status == 99 ? 'Cancelado' : '')))) }}</td>
                    <td>{{ $frete->tipo == 0 ? 'Com.' : ($frete->tipo == 1 ? 'Exc.' : ($frete->tipo == 2 ? 'Urg.' : '')) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

</body>
</html>