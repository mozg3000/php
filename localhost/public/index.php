<?php
//Точка входа в приложение, сюда мы попадаем каждый раз когда загружаем страницу

//Первым делом подключим файл с константами настроек
include "../config/main.php";

//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'index';
}


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [];
switch ($page) {
    case 'index':
        $params = [

        ];
        break;
    case 'catalog':

        if(isset($_POST["load"])){


            $imgs_path = array_splice(scandir(IMGS_DIR . "small/"),2);
            ;
            $path=IMGS_DIR . "big/" . $_FILES["rfile"]["name"];
            uploadFile("rfile", $path);

            $path2small=IMGS_DIR . "small/" . $_FILES["rfile"]["name"];
            create_thumbnail($path, $path2small, 150, 100);

            header("Location: ?page=catalog");
        }
        $params = [
            "imgs" => $imgs_path
        ];
        break;
//    case 'api_catalog':
//        $params = ["catalog" => [
//            "Спички",
//            "Кружка",
//            "Ведро"
//        ]
//        ];
//
//        echo json_encode($params, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
//        die();

}
//пример использования модуля для логирования данных
//можно использовать для отладки, смотреть результат
//в папке _log в public, она будет создана автоматически
_log($page);
_log($params, 'params');
//Вызываем рендер, и передаем в него имя шаблона и массив подстановок
echo render($page, $params);



