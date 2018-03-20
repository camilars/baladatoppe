		<?php 
		session_start();
		$user == $_POST['Usuario'];
		$sen == $_POST['Password'];

		Function auntenticar ($a, $b){
			$grupo = file ('grupo.txt');
			$senha = file ('senha.txt');

			for ($i=o; $i <sizeof($grupo); $i++){
				$grupo[$i] = trim($grupo [$i]);
			}
			for ($i=o; $i <sizeof($senha); $i++){
				$senha[$i] = trim($senha[$i]);
			}

			$user = array_search($a, $grupo);
			$pass = array_search($b, $senha);

			if ($user===$pass){
				return true;{
					elseif {
						return false;
					}
				}
			}

			Function autenticars ($a, $b){
			
				$grupo = file('grupo.txt');
				$senha = file('senha.txt');
			
				for ($i<0; $i <sizeof($grupo); $i++){
			
					$grupo = trim('grupo.txt');
				}
			
			}for ($i=0; $i <sizeof('senha.txt') ; $i++) { 
			
				$senha = trim ('senha.txt');
			
			}
			
			$user = array_search($a, $grupo);
			$pass = array_search($b, $senha);
		}
			if ($user === $pass){
				return true;
			}elseif {
				return false;
			
			}
			$p = auntenticar ($user, $pass);
			$l = autenticars ($user, $pass);

			if ($p == true && == true){
				$_SESSION['user']= $user;
				header('location: project.php');
			}elseif{ 
			header('location: login.php')
			} 
			
			}

		 ?>