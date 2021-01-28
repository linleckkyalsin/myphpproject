<?php
class QueryBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    public function selectAll($tableName)
    {
        $statement=$this->pdo->prepare("select * from $tableName");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);

    }
    public function insert($dataArray,$tableName)
    {
        //insert into $tableName () values (?)
        
        //dd(implode(',',array_values($dataArray)) );
        $getDatakeys= array_keys($dataArray);
        $col=implode(',', $getDatakeys);
        $values=array_values($dataArray) ;
        $questionMark="";
        foreach($getDatakeys as $key)
        {
            $questionMark.="?,";
        }
        $questionMark=rtrim($questionMark,',');
        

        $sql="insert into $tableName ($col) values ($questionMark) ";
       
       
        $statement=$this->pdo->prepare($sql);
        
        $statement->execute($values);
    }
    public function updateAll($dataArray,$tableName,$cond)
    {
        //$sql="UPDATE $tableName SET ";
        $getKeys=array_keys($dataArray);
        $values=array_values($dataArray);

        $cols=[];
        $comma="";
        //$where=$_POST['where'];
        
        foreach($dataArray as $key=>$val) {
            $cols[] = "$key = '$val'";
        }
        //dd($cols);
        $sql = "UPDATE $tableName SET " . implode(', ', $cols) . " WHERE id=$cond";
        //dd($sql);
        $statement=$this->pdo->prepare($sql);
        //dd($statement);

        $statement->execute();
      
        
       //dd($sql);
        
        //dd($sql);
        
        //UPDATE $tableName SET `id`=4,`name`="khin khn" WHERE id=3
    }
    public function deleteAll($cond,$tableName)
    {
        $sql="DELETE FROM $tableName WHERE id=$cond";
        $statement=$this->pdo->prepare($sql);
        $statement->execute();
    }
    
}
?>