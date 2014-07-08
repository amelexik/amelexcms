<?
$app->meta["title"] = "Регистрация";

$users_from_list = $db->select("SELECT * FROM users_from_list");
$smarty->assign("users_from_list",$users_from_list);

/*?><pre><? print_r($_POST); ?></pre><?*/

if (isset($_POST['postAction'])){
	
	if ($_POST['postAction'] == 'register'){
		$errors = array();
		
		
		$login = clearvar($_POST['login']);
		$name = clearvar($_POST['name']);
		$city = clearvar($_POST['city']);
		$costumer_type = clearvar($_POST['costumer_type']);
		$company = clearvar($_POST['company']);
		$phone_num = clearvar($_POST['phone_num']);
		$email = clearvar($_POST['email']);
		$password = clearvar($_POST['password']);
		$password2 = clearvar($_POST['password2']);
		$from_user = clearvar($_POST['from_user']);
		$code = clearvar($_POST['code']);
		
		
		if (empty($login)){
			$errors["login"] = "Вы не ввели логин";
		}
		if (empty($name)){
			$errors["name"] = "Вы не ввели имя";
		}
		if (empty($city)){
			$errors["city"] = "Вы не указали свой город";
		}
		if (empty($costumer_type)){
			$errors["costumer_type"] = "Не выбран тип клиента";
		}
		else{
			if($costumer_type == "legal_entity"){
				if (empty($company)){
					$errors["company"] = "Не указано название фирмы";
				}
			}
		}
		if (empty($phone_num)){
			$errors["phone_num"] = "Не введен номер телефона";
		}
		if (empty($email)){
			$errors["email"] = "Не введен E-MAIL адрес";
		}
		if (empty($password)){
			$errors["password"] = "Не введен пароль";
		}
		if (empty($password2)){
			$errors["password2"] = "Не введен повторно пароль";
		}
		if (empty($from_user)){
			$errors["from_user"] = "Не указали откуда вы о нас узнали";
		}
		
		if (empty($code)){
			$errors["code"] = "Не введен проверочный код";
		}
		
		
		if (empty($errors)){
			
			if (checkLogin($login) == false){
				$errors["login"] = "Логин <b>{$login}</b> уже занят. Используйте другой";
			}
			if (check_email($email) == false){
				$errors["email"] = "E-MAIL адрес некоректный";
			}
			if ($password != $password2){
				$errors["password"] = "пароли не совпадают";
			}
			
		}
		
		
		if (empty($errors)){
			//echo $sql = "INSERT INTO users (name,login,city,phone_num,costumer_type,company,password,email,from,activate_code) VALUES ('{$name}','{$login}','{$city}','{$phone_num}','{$costumer_type}','{$company}','".md5($password)."','{$email}','{$from}','".md5(microtime())."')";
			$sql = "INSERT INTO users (name,login,city,phone_num,costumer_type,company,from_user,password,email,activate_code) VALUES ('{$name}','{$login}','{$city}','{$phone_num}','{$costumer_type}','{$company}','{$from_user}','".md5($password)."','{$email}','".md5(microtime())."')";
			$db->query($sql);
			$_SESSION['reg_completed'] = true;
			$back_url = "/user/registrationfinish/";
			header("location:$back_url");
			exit;
		}
		
		
		
		$smarty->assign("errors",$errors);
		
	}

}
if ($app->module["mode"] != ""){
	
	if ($app->module["mode"] == "registrationfinish"){
		$app->meta['title'] = "Регистрация завершена";
		if(!$_SESSION['reg_completed']){
			//header("location:/user/registration/");
			//exit;
		}
	}
}
?>