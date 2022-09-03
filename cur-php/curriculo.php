<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{% block title %} {% endblock %}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #2F5970;
        }
        h1 {
            text-align: center;
            font-size: 24pt;
            font-weight: 600;
        }
        section.fundo{
            background-color: #a1d9f4;
            padding-bottom: 10px;
        }
        section {
            border-radius: 8px;
            box-shadow: 0px 0px 4px;
            margin: 2px 8px 2px 8px;
            padding: 1px 4px 1px 4px;
            background-color: #5098BF;
        }
        main {
            padding: 0px 12px;
            text-align: left;
            font-size: 16pt;
            line-height: 1;
        }
        h2 { 
            font-weight: 600;
            font-size: 19pt;
        } 
        p {
            font-weight: 500;
        }
        ul {
            font-weight: 400;
            font-size: 13pt;
            line-height: 1.2;
        }
        h2.form {
            font-weight: 600;
            font-size: 20pt;
            padding-top: 2px;
            margin: 4px 0px 8px 0px;
        }
        section.comi {
            background-color: #65C0F0;
            font-size: 14pt;
            min-height: 16em;
            max-height: 60em;
            float: flex;
        }
        div.cont{
            width: 100%;
        }
        span.comi {
            width: 80%;
            height: auto;
            float: right;
            text-align: right;
        }
        h1.comi{     
            text-align: right;
            font-size: 18pt;
            font-weight: 600;
            display: inline-block;
        }
        p.comi {
            display: inline-block;
            width: 80%;
        }
        img.img {
            margin-top: 10px;
            margin-left: 4px;
            float: left;
            width: 15%;
            min-height: 5em;
            max-height: 15em;
        }

        form {
            padding: 8px 6px 10px 6px;
            margin: 2px 8px 2px 8px;
            margin-bottom: 0px;
            box-shadow: 0px 1px 4px; 
            border-radius: 8px 8px;
            background-color: #65C0F0;
            font-weight: 400;
            text-align: left;
            font-size: 14pt;
            line-height: 30px;
        }
    </style>
</head>
<body>
<section class="fundo">
    <h1>Curriculo de Pedro Henrique Botter Vasconcelos Fernandes</h1>
    <main>
    <h2>Redes sociais e contatos do meio profissional:</h2>
    <ul>
        <li>Email: pedrobottersuship@gmail.com</li>
        <li><a href="https://t.me/Sushipl">Telegram</a>: @Sushipl</li>
        <li><a href="https://github.com/Sushipl" rell="_">GitHub</a>: Sushipl</li>
        <li><a href="https://www.linkedin.com/in/suship-l-14474b207">LinkedIn</a>: Suship l</li>
        <li>Glassdoor: Pedro Botter</li>
    </ul>
    <h2>Formações:</h2>
    <p class="main">Estudando no momento:</p>
    <ul>
        <li class="men">Bacharelado de Engenharia de Software</li>
        <li class="men">Curso de Assistente Administrativo</li>
        <li class="men">Curso de Informática Profissional</li>
    </ul>
    <p class="main">Linguagens:</p>
    <ul>
        <li class="men">JavaScript</li>
        <li class="men">Python</li>
        <li class="men">HTML</li>
        <li class="men">CSS</li>
    </ul>
    <p class="main">Conhecimento básico e se necessário posso me aprofundar:</p>
    <ul>
        <li class="men">PHP</li>
        <li class="men">Java</li>
    </ul>
    <p class="main">Terminados:</p>
    <ul>
        <li>Curso de Excel, PowerPoint, Word e Windows</li>
        <li>Ensino médio</li>
    </ul>
</section>
</body>
<script>
    function relo(){
        window.location = window.location.href;
    }
    setInterval('relo(', 2000);
</script>
</html>