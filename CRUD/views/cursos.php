<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<table class="table table-hover table-striped" id="cursos">
    <thead>
        <tr>
            <th>Nome Curso</th>
            <th>Carga horária</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $query = 'SELECT * FROM CURSOS';
        $consulta = mysqli_query($conexao, $query);
        
        while($linha = mysqli_fetch_array($consulta)){
            echo '<tr>';
            echo '<td>'.$linha['nome_curso'].'</td>';
            echo '<td>'.$linha['carga_horaria'].'</td>';
            echo '<td><a href="?pagina=inserir_curso&editar='.$linha['id_curso'].'"><i class="fa fa-pencil-square-o"></i></a></td>';
			echo '<td><a href="deleta_curso.php?id_curso='.$linha['id_curso'].'"><i class="fa fa-trash"></i></a></td></tr>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>