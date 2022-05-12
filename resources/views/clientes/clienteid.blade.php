<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>asds</h1>
    <div class="card-body table-full-width table-responsive">
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Profissão</th>
                <th>Ações</th>
            </thead>
            <tbody>
                @foreach ($apiArray as $api)
                <tr>
                    <td>{{ isset($apiArray['id'])}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

