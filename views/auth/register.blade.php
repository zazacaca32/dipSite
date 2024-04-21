<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>
<section class="container w-25">
    <h2>Регистрация</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
        </div>
		<div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="password-repeat">Повторите пароль</label>
            <input type="password" name="password_repeat" class="form-control" id="password-repeat"
                   placeholder="Repeat password">
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>
    	@if ($notify)
	<div class="alert alert-danger mt-3">
    {!! $notify !!}
	</div>
	@endif
</section>
</body>
</html>