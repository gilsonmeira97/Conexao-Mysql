<?php
	class db{
		//Host
		private $host = '';

		//Usuario
		private $usuario = '';

		//Senha
		private $password = '';

		//Banco de Dados
		private $database = '';

		public function conecta_mysql(){

			//Cria uma conexão
			$con = mysqli_connect($this->host, $this->usuario, $this->password, $this->database);

			//Seta o banco de dados para UTF-8
			mysqli_set_charset($con, 'utf-8');

			//Verifica se existe erro na conexão
			if(mysqli_connect_errno()){
				echo "Erro ao conectar com o BD MySQL:".mysqli_connect_errno();
			}

			//Retorna a conexão efetuada		
			return $con;
		}
	}

?>
