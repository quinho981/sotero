<?php
	require('conexao.php');

	$sql = "SELECT * FROM soterotech";
	$result = $conn->query( $sql );
	$rows = $result->fetchAll( PDO::FETCH_ASSOC );

	for ($i = 0; $i < count($rows) ; $i++) { 
		echo "
			<tr>
				<td class='id'>".$rows[$i]['id']."</td>
				<td class='nome'>".$rows[$i]['nome']."</td>
				<td class='sobrenome'>".$rows[$i]['sobrenome']."</td>
				<td class='participacao'>".$rows[$i]['participacao']."</td>
			</tr>
		";
	}