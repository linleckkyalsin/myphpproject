<?php
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}

function dbconnection()
{
    try{
    
        return $pdo=new PDO("mysql:host=localhost;dbname=todo","root","");
        
            
        }
        catch(PDOException $E)
        {
           echo $e->getMessage();
        }
}
function fetching($pdo)
{
    
$statement=$pdo->prepare("select * from mytasks");
$statement->execute();
return $statement->fetchAll(PDO::FETCH_OBJ);

}
function view($name,$dataa=[])
{
    extract($dataa);
    return require "view/$name.view.php";
}
?>