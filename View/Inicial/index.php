<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoTech</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #1f2937;
            color: white;
            padding: 20px 50px;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .inicio {
            min-height: 70vh;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            text-align: center;
            padding: 40px;
        }

        .inicio h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #1f2937;
        }

        .inicio p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
            color: #666;
        }

        .botao {
            background-color: #2563eb;
            color: white;

            padding: 12px 25px;
            border-radius: 5px;

            text-decoration: none;
        }

        .botao:hover {
            background-color: #1d4ed8;
        }

        .servicos {
            background-color: white;
            padding: 50px;
            text-align: center;
        }

        .servicos h2 {
            margin-bottom: 30px;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            padding: 25px;

            background-color: #f4f6f8;
            border-radius: 8px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        footer {
            background-color: #1f2937;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            InfoTech
        </div>

        <nav>
            <a href="#">Início</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>

    <main>

        <section class="inicio">
            <h1>Bem-vindo à InfoTech</h1>

            <p>
                Soluções simples e eficientes em tecnologia
                para empresas e pessoas.
            </p>

            <a href="#servicos" class="botao">
                Conheça nossos serviços
            </a>
        </section>

        <section class="servicos" id="servicos">

            <h2>Nossos Serviços</h2>

            <div class="cards">

                <div class="card">
                    <h3>Desenvolvimento</h3>
                    <p>
                        Desenvolvimento de sistemas e aplicações web.
                    </p>
                </div>

                <div class="card">
                    <h3>Suporte</h3>
                    <p>
                        Suporte e manutenção para soluções de tecnologia.
                    </p>
                </div>

                <div class="card">
                    <h3>Consultoria</h3>
                    <p>
                        Consultoria para projetos e soluções tecnológicas.
                    </p>
                </div>

            </div>

        </section>

    </main>

    <footer id="contato">
        <p>&copy; 2026 InfoTech - Todos os direitos reservados.</p>
    </footer>

</body>
</html>