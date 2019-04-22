<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id)
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

            $content = getPicture($id);
            $params['name'] = $content['name'];
            $params['show_number'] = $content['show_number'];

            break;
        case 'catalog':

            $params["catalog"] = readCatalog();

            break;
        case 'product':
//            var_dump($_POST);
            if($action=="") {

                if($id){

                    $params=initProduct($id);
                }

            }elseif ($action=='add'){
                //echo "POST";
//                var_dump($_POST);
                if($_POST['name']!=''){

                    extract($_POST);
                    $params=initProduct($id);
                    addfeedback($id,$name,$feedback);
                    header('Location: /product/add');
                }else{

                    $params=initProduct($id);
                }
            }
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
