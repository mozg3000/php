<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $params = [];
    switch ($page) {
        case 'index':
            $params["username"] ="Вася";
            break;
        case 'gallery':

            $params["pictures"] = getPictures();

            break;
        case 'picture':
            $content = getPicture($_GET['id']);
//            var_dump($content);
            $params['name'] = $content['name'];
            $params['show_number'] = $content['show_number'];
            break;
    }
    return $params;
}


//Функция, возвращает текст шаблона $page с подстановкой переменных
//из массива $params, содержимое шабона $page подставляется в
//переменную $content главного шаблона layout для всех страниц
function render($page, $params = [])
{

    return renderTamplate(LAYOUTS_DIR . 'layout', [
        "content" => renderTamplate($page, $params),
        "menu" => renderTamplate("menu")
    ]);
}


//Функция возвращает текст шаблона $page с подставленными переменными из
//массива $params, просто текст
function renderTamplate($page, $params = [])
{
    ob_start();

    if (!is_null($params)) {
        extract($params);
    }


    $fileName = TEMLATES_DIR . $page . '.php';

    if (file_exists($fileName)) {
        include $fileName;
    } else {
        Die("Страницы не существует, 404");
    }


    return ob_get_clean();
}
