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

                $id=$_POST['id'];
                if($_POST['name']!='' && $_POST['feedback'] != ''){

                    $name=$_POST['name'];
                    $feedback=$_POST['feedback'];
                    addfeedback($id,$name,$feedback);
                }else{

                }
                $params=initProduct($id);
                header("Location: /product/{$id}");
            }
            break;
        case 'cart':
            //var_dump($id,$action);
            if($action == 'add'){

                addToCart($id, session_id());
                header("Location: /catalog");
            }
            if($action == ''){

//                $content = readCart(session_id());
//                $params['products'] = $content;
//                var_dump($content);die();
            }
            if($action == 'delete'){

                deleteFromCart($id, session_id());
            }
            $content = readCart(session_id());
            $params['products'] = $content;
            break;
        case 'proceed':

            if($action == "proceed"){


            }
            break;
        case 'order':

//            var_dump($action);die();
            if($action == "proceed"){

                proceedOrder(session_id(), $_POST['telefon']);
                session_regenerate_id(true);
                header("Location: /catalog");
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
