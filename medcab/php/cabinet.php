<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Медицинский кабинет</title>
</head>
<body>

    <div class="">

        <header class="flex w-full justify-center bg-sky-500">

            <div class="flex items-center justify-between space-x-max text-white w-3/4 py-5">

                <div class="">

                    <p class="text-5xl">Меддоки</p>

                </div>

                <div class="text-2xl flex gap-x-10">

                    <a href="">Главная</a>

                    <?
                    if(isset($_SESSION["user"])) {
                        ?>
                        <a href="./php/reg.php">Личный кабинет</a>
                        <?
                    } else {
                        ?>
                        <a href="./php/reg.php">Зарегистрироваться</a>
                        <?
                    }
                    ?>

                </div>

            </div>

        </header>

        <main>

            <div class="main_container">
                <a href="./logout.php">Выйти из аккаунта</a>
            </div>

        </main>

        <footer>

            <div class="footer_container">

            </div>

        </footer>

    </div>

</body>
</html>