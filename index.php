<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Funcionario.php';
            require_once './Aluno.php';
            require_once './Professor.php';
            require_once './Pessoa.php';
            
            $p[0] = new Pessoa();
            $p[1] = new Aluno();
            $p[2] = new Professor();
            $p[3] = new funcionario();
            
            $p[0]->setNome("Pedro");
            $p[1]->setNome("Maria");
            $p[2]->setNome("Claudia");
            $p[3]->setNome("fabiana");
            
            $p[1]->setCurso("Informatica");
            $p[2]->setSalario(2500.75);
            $p[3]->setSetor("Estoque");
            
            $p[2]->receberAum(550.75);
            $p[3]->mudarTrabalho("Mecanico");
            $p[1]->CancelarMatr();
            
            print_r($p[0]);
            print_r($p[1]);
            print_r($p[2]);
            print_r($p[3]);
            
            
            
        ?>
        </pre>
    </body>
</html>
