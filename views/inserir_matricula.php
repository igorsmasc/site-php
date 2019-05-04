<h1>Inserir nova matrícula</h1>
<br>
<form method="post" action="processa_matricula.php">
<p>Selecione o aluno</p>
	<select class="form-control" name="escolha_aluno">
	<option class="badge badge-secondary">Selecione um aluno</option>
    <?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno']."</option>";
		}
    ?>
    </select>
    <br><br>
<p>Selecione o curso</p>
    <select class="form-control" name="escolha_curso">
<br>
    <option class="badge badge-secondary">Selecione um curso</option>
    <?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso']."</option>";
		}
    ?>
    </select>
	<br><br>
	<input class="btn btn-success" type="submit" name="matricular_aluno" value="Matricular aluno">	

</form>