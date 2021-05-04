<?php
    $data = file_get_contents('data.json');

    // echo '<pre>';
    $formatted_data = json_decode($data, true);
    $results = $formatted_data['results'];
    $formatted_results = array();

    for ($i = 0; $i < count($results); $i++){
        // $results[$i]['name'] = strtoupper($results[$i]['name']); Notice that this is illegal 
        $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
        $formatted_results[$i]['url'] = $results[$i]['url'];
    }

    $chunks = (array_chunk($formatted_results, 50));

    if ($_SERVER['REQUEST_METHOD']==='POST') {
        if (!in_array($_POST['name'], $formatted_data['results']) && !in_array($_POST['id'], $formatted_data['results'])) {
        $new_pokemons = array(
            "name" => $_POST['name'],
            "url" => $_POST['type'],
        );
        array_push($formatted_results, $new_pokemons);
        $formatted_data['results']= $formatted_results;
        $json_formatted_data=json_encode($formatted_data);
        $new_pokemon_to_file= file_put_contents('data.json', $json_formatted_data);
        $response = ["status"=>200, "message" => "Pokemon added."];
        echo json_encode($response);
        } else {
            $response = ["status"=>500, "message" => "Error saving new pokemon. Duplication found"];
            echo json_encode($response);
        }
        // file_put_contents('data.json', $data);
    } else if ($_SERVER['REQUEST_METHOD']==='GET') {
        $page = $_GET["page"]; 
        
        $json_formatted_results = json_encode($chunks[$page]);
        echo $json_formatted_results;
        $write_file_result = file_put_contents('formatted_data.json', $json_formatted_results);
    }

  

   
    // print_r($chunks[2]);
    // print_r($chunks[($_GET["page"])]);
    // $end_results = ($chunks[($_GET["page"])]);
    // $page = $_GET["page"];   tämä pitä palauttaa takaisin jos haluaaa toisen toimivan

    // print_r($formatted_data);
    // echo '</pre>';
    // $json_formatted_results = json_encode($chunks[$page]); tämä pitää myös palauttaa jos haluaau eka sivun toimivan
    
    // echo $json_formatted_results;

    /**
     * Create new JSON file
     */
    
    

?>