<?php

//Файл с функциями нашего движка

/*
 * Функция подготовки переменных для передачи их в шаблон
 */
function prepareVariables($page, $action, $id, $category)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
    $allow=false;
    $user='';
    $params = [];

    if (is_auth()) {
        $allow = true;
        $user = get_user();
    }
    $params["allow"]=$allow;
    $params["user"]=$user;

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

            if($action == 'add'){

                $params['new'] = true;
                if($category == 'new'){

                    if($_POST['addProduct']){

//                        var_dump($_GET['img']);die();
                        addProduct($_POST['name'],$_POST['description'],$_POST['price'], $_GET['img']);
                        header("Location: /catalog");
                    }
                }
                if($category == 'img'){

                    if(isset($_POST["load"])){

                        $path=IMGS_DIR . "big/" . $_FILES["rfile"][name];
                        uploadFile("rfile", $path);

                        $path2small=IMGS_DIR . "small/" . $_FILES["rfile"][name];
                        create_thumbnail($path, $path2small, 150, 100);
                    }
                    $img = $_FILES["rfile"][name];
                    header("Location: /catalog/add/new/?img=$img");
                }
            }

            break;
        case 'product':
//            var_dump($_POST);
            if($action=="") {

                if($id){

                    $params=initProduct($id);
                    $params["allow"]=$allow;
                    $params["user"]=$user;
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
                $params["allow"]=$allow;
                $params["user"]=$user;
                header("Location: /product/{$id}");
            }
            break;
        case 'cart':
            //var_dump($id,$action);
            if($action == 'add'){

                addToCart($id, session_id());
//                var_dump($id);
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
//            header("Location: /cart");
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
        case 'showOrder':
            $orders=showOrder($id);
            $params['products']=$orders;
            $params['id'] = $id;


//            header("Location: /order");
            break;
        case 'login':

           //$resonse=auth($_POST['login'], $_POST['pass']);
//           var_dump($resonse);die();
            if($action == "out"){

                session_destroy();

                setcookie("hash", "", -3600, "/");
                //header("Location: /");
            }
            if($_POST['send']){

                logIn($_POST['login'], $_POST['pass'], $_POST['save']);
            }
            //var_dump($user,$allow);die();
           header("Location: /");
            break;
        case 'orders':

            $order_list = ordersList();

            $params['orders'] = $order_list;
//            header("Location: /catalog");

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
        "menu" => renderTamplate("menu", $params)
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
