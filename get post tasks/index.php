<?php 

$data = file_get_contents('data.json');
$request_method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$parts = parse_url($uri);


parse_str($parts['query'], $params);
print_r($params);

$exploded_part = explode('/', $parts['path']);



// if ( $request_method == 'GET') {
//     echo $data;
// }

switch($request_method) {
    case 'GET':
        get_recipes();
        break;
    case 'POST':
        add_new_recipe();
        break;
    case 'PUT':
        update_recipe();
        break;
    case 'DELETE':
        remove_recipe();
        break;
    default:
        echo json_encode(array('message'=> 'an error has occurres'));
        break;
}

 function get_recipes() {
     if (!isset ($GLOBALS['$exploded_part'][2])) {
         echo $GLOBALS['data'];
     } else {
        echo $GLOBALS['$params']['name'];
     }
 }

 function add_new_recipe() {
     $new_recipe = array (
         "id" => $_POST['id'],
        "name" => $_POST['name'],
        "ingredients" => $_POST['ingredients'],
        "difficulty" => $_POST['difficulty']
     );
     array_push($data, $new_recipes);
     $json_formatted_data= json_encode($data);
     $new_recipe_to_file= file_put_contents('data.json', $json_formatted_data);
 }

 function update_recipe() {
     if(in_array($_POST['id'], $GLOBALS['$params'])) {
        $new_recipe = array (
            "id" => $_POST['id'],
           "name" => $_POST['name'],
           "ingredients" => $_POST['ingredients'],
           "difficulty" => $_POST['difficulty']
        );
        array_push($data, $new_recipe);
        $json_formatted_data= json_encode($data);
        $new_recipe_to_file= file_put_contents('data.json', $json_formatted_data);
     }
 }

?>