<a class="btn btn-success" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome Aluno</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = 'SELECT * FROM ALUNOS';
        $consulta = mysqli_query($conexao, $query);
        
        while($linha = mysqli_fetch_array($consulta)){
            echo '<tr>';
            echo '<td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['data_nascimento'].'</td>';
            echo '<td><a href="?pagina=inserir_aluno&editar='.$linha['id_aluno'].'"><i class="fa fa-pencil-square-o"></i></a></td>';
			echo '<td><a href="deleta_aluno.php?id_curso='.$linha['id_aluno'].'"><i class="fa fa-trash"></i></a></td></tr>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>