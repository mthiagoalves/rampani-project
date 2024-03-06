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
            <img src="https://clinicarampani.com.br/new-project/imgs/auto-response/logo-white.png" alt="Logo da Newsletter">
            <div class="title">Agradeçoemos pelo contato e agendamento</div>
        </div>
        <div class="content">
            <p>
                Olá, <b>{{ $emailData['first_name'] }} {{ $emailData['last_name'] }}</b>
            </p>
            <p>
                Em breve nosso time entrará em contato no número <b>{{ $emailData['phone'] }}</b> para podermos confirmar os detalhes e o melhor horário para você no dia {{ $emailData['date'] }} para fazer seu <b>{{ $emailData['selectedDeal'] }}</b>.
            </p>
        </div>
        <div class="footer">
            <p>© 2024 Clinica Rampani. Todos os direitos reservados.</p>
        </div>
    </div>
</body>

</html>
