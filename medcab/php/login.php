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

    <form action="./entry.php" method="post" class="text-2xl font-semibold bg-sky-600 p-7 rounded-lg">

        <div class="flex flex-col gap-y-4">

            <div class="flex flex-col">

                <label for="" class="text-white">Введите логин</label>
                <input type="text" name="login" id="" class="outline-none border-none rounded-lg">

            </div>

            <div class="flex flex-col">

                <label for="" class="text-white">Введите пароль</label>
                <input type="password" name="password" id="" class="outline-none border-none rounded-lg">
                
            </div>

            <div class="text-red-700">
                <?if(isset($_SESSION["error"])) {
                    ?>
                    <p><?=$_SESSION["error"]?></p>
                    <?
                }?>
                <?unset($_SESSION["error"]);?>
            </div>

            <div class ="text-white">
                <span>Нет аккаунта? - <a href="./reg.php">Зарегистрируйтесь</a></span>
            </div>

            <button type="submit" class="bg-gray-800 rounded-lg text-white p-3 duration-300 hover:bg-gray-700">Отправить данные</button>

        </div>

    </form>

</body>
</html>