<?php 


function categoryAll(pdo $db){
    $selectAllCategory = $db->query("SELECT * FROM`category` ORDER BY `title`ASC;");

    $selectAllCategory->execute();
    
    return $selectAllCategory->fetchAll();

};
