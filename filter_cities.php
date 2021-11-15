<?php 

    require './file_functions.php'; // throws an error
    require './users_functions.php';

    function getCountryID($name){
        $countries = getDataFromFile("./countries.txt");

        foreach($countries as $country){
            if($country["name"] == $name) return $country["id"];
        }
        return false;
    };

    

    function filterCities($countryName){
        $countryID = getCountryID($countryName);

        $cities = getDataFromFile("./cities.txt");
        $cityNames = []; //prvo mi je prazan niz

        foreach($cities as $city){
            if($city["country_id"] == $countryID){
                $cityNames[] = $city["name"];
            };
        }
        echo json_encode(["data" => $cityNames]);
    }

    filterCities($_GET['cname']);

?>