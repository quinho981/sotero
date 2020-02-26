<?php
	require('conexao.php');

	$nome = filters($_POST['nome']);
	$sobrenome = filters($_POST['sobrenome']);
	$participacao = filters($_POST['participacao']);

	try {
		$sql = 'INSERT INTO soterotech (nome, sobrenome, participacao) VALUES (:nome, :sobrenome, :participacao)';
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':sobrenome', $sobrenome);
		$stmt->bindParam(':participacao', $participacao);

		$result = $stmt->execute();

		if(!$result){
			var_dump( $stmt->errorInfo() );
    		exit;
		} else {
			echo "
			<script>
				alert('Cadastro efetuado com sucesso!');
				window.location.href = '../index.php';
			</script>
			";
		}
	} catch (Exception $e) {
		echo 'ERROR: '. $e->getMessage();
	}

	function filters($data){
		$str = trim($data);
		$str = htmlspecialchars($data);
		return $str;
	}