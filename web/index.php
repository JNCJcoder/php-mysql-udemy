<?php

# mysql
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao){
    echo "Conectado com sucesso";
} else {
    echo "Erro ao conectar";
}

$query = "CREATE TABLE CURSOS(
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
)";

$executar = mysqli_query($conexao, $query);
echo "<br> Cursos<br>";
if($executar){
    echo "Executado com sucesso";
} else {
    echo "Falha ao executar";
}

// ALUNOS

$query = "CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
)";

$executar = mysqli_query($conexao, $query);
echo "<br> Alunos<br>";
if($executar){
    echo "Executado com sucesso";
} else {
    echo "Falha ao executar";
}

// ALUNO-CURSOS

$query = "CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao, $query);
echo "<br> Alunos-cursos<br>";
if($executar){
    echo "Executado com sucesso";
} else {
    echo "Falha ao executar";
}

# INSERIR DADOS NAS TABELA

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Jose','1990-01-01')";
$executar = mysqli_query($conexao, $query);
echo "<br> Inserindo Aluno: <br>";
if($executar){
    echo "Executado com sucesso";
} else {
    echo "Falha ao executar";
}

# INSERIR CURSOS NAS TABELA

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('php', 10)";
$executar = mysqli_query($conexao, $query);
echo "<br> Inserindo Curso: <br>";
if($executar){
    echo "Executado com sucesso";
} else {
    echo "Falha ao executar";
}

# Inserir Nota

$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES(8, 1)";
mysqli_query($conexao, $query);

if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID_ALUNO = 9 or ID_ALUNO = 10")){
    echo 'sucesso';
} else {
    echo 'Falha ao apagar dados';
}

if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Jose Miguel' WHERE ID_ALUNO = 7")){
    echo 'sucesso';
} else {
    echo 'Falha ao apagar dados';
}

if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Maria Capitolina' WHERE ID_ALUNO = 8")){
    echo 'sucesso';
} else {
    echo 'Falha ao apagar dados';
}


echo '<table>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
        </tr>';

$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

while($linha = mysqli_fetch_array($consulta)){
    echo '<tr>';
    echo '<td>';
    echo $linha['id_aluno'];
    echo '</td>';
    echo '<td>';
    echo $linha['nome_aluno'];
    echo '</td>';
    echo '<td>';
    echo $linha['data_nascimento'];
    echo '</td>';
    echo '</tr>';
}
echo '</table>';

echo '<table>
        <tr>
            <th>Nome do aluno</th>
            <th>Nome do curso</th>
        </tr>';

$consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, CURSOS.nome_curso FROM ALUNOS, CURSOS, ALUNOS_CURSOS WHERE ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno AND ALUNOS_CURSOS.id_curso = CURSOS.id_curso");

while($linha = mysqli_fetch_array($consulta)){
    echo '<tr>';
    echo '<td>';
    echo $linha['nome_aluno'];
    echo '</td>';
    echo '<td>';
    echo $linha['nome_curso'];
    echo '</td>';
    echo '</tr>';
}
echo '</table>';