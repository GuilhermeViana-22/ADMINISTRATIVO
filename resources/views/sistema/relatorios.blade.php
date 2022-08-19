<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Administrativo</title>
</head>
<style>

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        font-size: 10pt;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    #logo-login {
        width: 100px;
    }
</style>
<body>

<h2 style="text-align: center" class="class-header">Sistema de gerenciamento de usuários</h2>







<h4>Data de geração: @php  echo date('d/m/Y') @endphp</h4>
<h4>Usuários com pendências:</h4>

<table>
    <tr>
        <th>Protocolo</th>
        <th>Nome Sistema</th>
        <th>Datas cadastro</th>
        <th>Situação</th>
        <th>Ativo</th>

    </tr>
    @foreach ($sistemas as $sistema)
        <tr>
            <td class="table-secondary" scope="row dark">{{ $sistema->id }}</td>
            <td scope="row info">{{ $sistema->nome_sistema }}</td>
            <td scope="row info">{{ date('d/m/Y', strtotime($sistema->created_at))  }}</td>
            <td scope="row info">{{ $sistema->sistema->situacao }}</td>
            @if ($sistema->ativo == 1)
                <td scope="row info">Ativo</td>
            @else
                <td scope="row info">Inativo</td>
            @endif
        </tr>
    @endforeach
</table>

</body>
</html>
