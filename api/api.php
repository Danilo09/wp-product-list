<?php 
    $sPath = realpath( __DIR__ . '/../config.php');
    if($sPath) { require_once $sPath; }

    class API {
        function Select () {
            $db = new Connect;
            $products = array();
            $data = $db->prepare('SELECT * FROM wp_custom_add_product ORDER BY productId');
            $data->execute();

            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)) {
                $products[$OutputData['productId']] = array(
                    'productId' => $OutputData['productId'],
                    'displayName' => $OutputData['displayName'],
                    'apiKey' => $OutputData['apiKey']
                );
            }
            return json_encode($products);
        }
    }

    $API = new API;
    
    echo $API->Select()
?>