<?php

$country_allowed = array(
'AW','AL','AD','AE','AR','AM','AU','AT','BE','BG','BA','BY','BM','BR','CA','CH','CL','CN','CI','CO','CR','CY','CZ','DE','DK','DO','EC','ES','EE','FI','FJ','FK','FR','GB','GR','GF','GU','HK','HR','HT','HU','ID','IN','IE','IS','IL','IT','JM','JP','KZ','KN','KR','LB','LC','LT','LU','LV','MC','MG','MX','MT','MY','NL','NO','NZ','PA','PE','PG','PL','PR','PT','QA','RE','RU','SA','SG','SV','SM','SE','TN','TR','TW','VC','ZA','GI','US'
);

if(isset($_POST['card'])) {
    $card = $_POST['card'];
    $card = preg_replace('/\s+/', '', $card);
    $card = substr($card, 0, 6);

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.bincodes.com/bin/json/3e1d16d5f75e4559e65c3150bd8da4f9/$card/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);
    if (!curl_errno($curl)) {
        $result = json_decode($response, JSON_OBJECT_AS_ARRAY);
        $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if ($http_code === 200) {
            if (array_key_exists('countrycode', $result)) {
                if(!in_array($result['countrycode'],$country_allowed)) {
                    echo json_encode(['success' => false, 'message' => "Cards from ".$result['country']." are not accepted", 'api_response' => json_encode($result)]);
                }else{
                    echo json_encode(['success' => true, 'message' => "Card is Valid", 'api_response' => json_encode($result)]);
                }
            }else{
                if (array_key_exists('error', $result)) {
                    if (in_array($result['error'], [1012])) {
                        echo json_encode(['success' => true, 'message' => "Card is Valid", 'api_response' => json_encode($result)]);
                    } else {
                        echo json_encode(['success' => false, 'message' => "Invalid Card Country plese correct this"]);
                    }
                }else{
                    echo json_encode(['success' => false, 'message' => "Invalid Card Country plese correct this"]);
                }
            }
        } else {
            echo json_encode(['success' => false, 'message' => "Invalid Card Country plese correct this"]);
        }
    }else{
        echo json_encode(['success' => false, 'message' => "Invalid Card Country plese correct this"]);
    }
    curl_close($curl);
}
?>