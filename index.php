<!DOCTYPE html>
<html lang="pt-br">
    <head> 
        <meta charset="utf-8">
        <title>Registro de Estagiários</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                   <br> <a href="conexao.php"<li>Registro</li></a>
                    <br> <a href="conexao.php"<li>Login</li></a>
                </ul>
            </nav>
            <section>
                <hi>Registro de Estagiários</hi>
                <hr><br><br>

                <form method="post" action="processa.php">
                    <input type="submit" value="Salvar" class="btn">
                    <input type="reset" value="Limpar" class="btn">
                    <br><br>
                    Nome completo<br>
                    <input type="text" name="Nome Completo"class="campo" maxlength="80" required autofocus><br>
                    CPF<br>
                    <input type="text" name="CPF"class="campo" maxlength="80" required autofocus><br>
                    Data de nascimento<br>
                    <input type="text" name=" Data de nascimento"class="campo" maxlength="80" required autofocus><br>
                    Curso de graduação<br>
                    <input type="text" name="Curso de graduação"class="campo" maxlength="80" required autofocus><br>
                    Instituição de ensino<br>
                    <input type="text" name="Instituição de ensino"class="campo" maxlength="80" required autofocus><br>
                    Carga horária semanal<br>
                    <input type="text" name="Carga Horária semanal"class="campo" maxlength="80" required autofocus><br>
                    Setor alocado<br>
                    <input type="text" name="Setor alocado"class="campo" maxlength="80" required autofocus><br>
                    Nome do setor<br>
                    <input type="text" name="Nome do Setor"class="campo" maxlength="80" required autofocus><br>
                    Capacidade do setor<br>
                    <input type="text" name="Capacidade do Setor"class="campo" maxlength="80" required autofocus><br>
                    Chefe do setor<br>
                    <input type="text" name="Chefe do setor"class="campo" maxlength="80" required autofocus><br>

            </section>
        </div>
    </body>
</html>