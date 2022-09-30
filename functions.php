<?php
// getAllData
function getAllData($table)
{
    global $conn;
    $sql = "SELECT * FROM $table";
    $stmt = $conn->prepare($sql);


    $stmt->execute();
    return $stmt->fetchAll();
}
// getOne
function getOneById($table, $id)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE id= $id";
    $stmt = $conn->prepare($sql);


    $stmt->execute();
    return $stmt->fetch();
}

// getDataByForeignKey
function getDataByForeignKey($table, $foreignKey)
{
    global $conn;
    $sql = "SELECT * FROM $table WHERE category_id= :foreignKey";
    $stmt = $conn->prepare($sql);

    $stmt->execute([":foreignKey" => $foreignKey]);
    return $stmt->fetchAll();
}
