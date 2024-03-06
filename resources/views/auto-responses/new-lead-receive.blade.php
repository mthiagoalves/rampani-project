<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Rampani</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            background-color: #e4a2a3;
        }

        .header img {
            max-width: 20%;
            height: auto;
            margin-top: 10px;
        }

        .title {
            font-size: 20px;
            padding-bottom: 10px;
            color: #f4f4f4;
        }

        .content {
            margin-top: 20px;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="title">Uma nova lead recebida - Agendamento de {{ $emailData['selectedDeal'] }}</div>
        </div>
        <div class="content">
            <p>
                Nome do cliente: <b>{{ $emailData['first_name'] }} {{ $emailData['last_name'] }}</b>
            </p>
            <p>
                Telefone: <b>{{ $emailData['date'] }}</b>
            </p>
            <p>
                Telefone: <b>{{ $emailData['phone'] }}</b>
            </p>
            <p>
                Email: <b>{{ $emailData['email'] }}</b>
            </p>
            <p>
                Procedimento escolhido: <b>{{ $emailData['selectedDeal'] }}</b>
            </p>
        </div>
        <div class="footer">
            <p>© 2024 Clinica Rampani. Todos os direitos reservados.</p>
        </div>
    </div>
</body>

</html>
