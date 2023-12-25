<?
session_start();
?>

<!DOCTYPE html>
<html class="bg-gray-800" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="h-screen flex justify-center items-center">

    <form action="./auth.php" method="post" class="text-2xl font-semibold bg-sky-600 p-7 rounded-lg">

        <div class="flex flex-col gap-y-4">

            <div class="flex flex-col">

                <label for="" class="text-white">Введите фамлиию</label>
                <input type="text" name="lastname" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Введите имя</label>
                <input type="text" name="firstname" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Введите отчество (при наличии)</label>
                <input type="text" name="ochestvo" id="" class="outline-none border-none rounded-lg">
            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Введите E-mail</label>
                <input type="email" name="email" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Придумайте логин</label>
                <input type="text" name="login" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Придумайте пароль</label>
                <input type="password" name="password" id="" class="outline-none border-none rounded-lg">
                
            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Введите пароль ещё раз</label>
                <input type="password" name="password_confirm" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class ="text-red-700">
                <?if(isset($_SESSION["error"])) {
                    ?>
                    <p><?=$_SESSION["error"]?></p>
                    <?
                }?>
                <?unset($_SESSION["error"]);?>
            </div>

            <div class ="text-white">
                <span>Есть аккаунт? - <a href="./login.php">Войдите</a></span>
            </div>

            <button type="submit" class="bg-gray-800 rounded-lg text-white p-3 duration-300 hover:bg-gray-700">Отправить данные</button>

        </div>

    </form>

</body>
</html>