<?php
namespace App\Controllers;

use Laminas\Diactoros\ServerRequest;
use MiladRahimi\PhpContainer\Container;

use DB\Models\User;

class AuthController
{
	
	public function loginView(ServerRequest $r, Container $container){
		$blade = $container->get("blade");
		return $blade->run("auth.login", ["notify" => self::notify()]);
	}
	
	public function registerView(ServerRequest $r, Container $container){
		$blade = $container->get("blade");
		return $blade->run("auth.register", ["notify" => self::notify()]);
	}
	
	public function login(ServerRequest $r)
    {
		$data = $r->getParsedBody();
		$errors = [];
    $email = isset($data['email']) ? trim($data['email']) : null;
    if (empty($email)) {
        $errors[] = 'Введите email';
    }
    $password = isset($data['password']) ? trim($data['password']) : null;
    if (empty($password)) {
        $errors[] = 'Введите пароль';
    }
    if (empty($errors)) {
            $user = User::where("email", $email)->first();
			
            if ($user) {
                // Если пароли совпадают, сохраняем данные пользователя в сессию и редиректим на главную страницу
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['name'] = $user['name'];
                    header('location: /');
                    exit;
                }
                // В случае несовпадения паролей выводим сообщение, что нет пользователя с такой комбинацией
                // Не стоит выводить сообщение о том, что только пароль неверный - это усиливает уязвимость сайта к взлому
                self::notify('Пользователь с такой комбинацией email и пароля не существует', $r->getUri()->getPath());
            } else {
                // Такое же сообщение выведем, если email неверный
                self::notify('Пользователь с такой комбинацией email и пароля не существует', $r->getUri()->getPath());
            }
    } else {
        self::notify(implode('<br>', $errors), $r->getUri()->getPath());
    }
	}
	
    public function register(ServerRequest $r)
    {
		$data = $r->getParsedBody();
		
		 // В этот массив будем собирать возможные ошибки
    $errors = [];
    // Валидируем email
    $email = isset($data['email']) ? trim($data['email']) : null;
	
    $name = isset($data['name']) ? trim($data['name']) : null;
    if (empty($email)) {
        $errors[] = 'Введите email';
    } 
	
	if (empty($name)) {
        $errors[] = 'Введите Имя';
    }
	
    if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $errors[] = 'Неверный email';
    }
    // Валидируем пароль
    $password = isset($data['password']) ? trim($data['password']) : null;
    if (empty($password)) {
        $errors[] = 'Введите пароль';
    }
    if (strlen(trim($password)) < 6 || strlen(trim($password)) > 50) {
        $errors[] = 'Пароль должен содержать не менее 6 и не более 50 символов';
    }
    // Проверяем, правильно ли пользователь подтвердил пароль
    $passwordRepeat = isset($data['password_repeat']) ? trim($data['password_repeat']) : null;
    if ($password !== $passwordRepeat) {
        $errors[] = 'Пароль подвержден неверно';
    }
    // Если ошибок нет, продолжаем
    if (empty($errors)) {

            // Делаем запрос в базу, проверяя, существует ли уже зарегистрированный пользователь с таким email
			$user = User::where("email", $email)->first();
            // Если такой пользователь есть, выводим сообщение
            if ($user) {
                self::notify('Пользователь с таким email уже существует', $r->getUri()->getPath());
            } else { // Иначе создаем запись в базе данных с новым пользователем
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
				User::create([
					"name" => $name,
					"email" => $email,
					"password" => $passwordHash
				]);
                // После создания нового пользователя редиректим на страницу авторизации
                header('location: /login');
                exit;
            }
    } else { // В случае наличия ошибок выводим их на страницу
         self::notify(implode('<br>', $errors), $r->getUri()->getPath());
    }
}

	
	private function notify(?string $message = null, ?string $path = null)
{
    // Если передаем сообщение, то устанавливаем его в сессию
    if ($message) {
        $_SESSION['notification'] = $message;
		header('location: '.$path);exit;
    } else {
        // При вызове функции без параметра отобразим сообщение на странице, если в сессии есть это сообщение
        if (!empty($_SESSION['notification'])) { 
				$err =  $_SESSION['notification'];
			 // Затем просто удалим нотификацию из сессии
				unset($_SESSION['notification']);
				return $err;
         }
    }
}
	
}