<?php
include_once 'class.user.php';
include 'db.php';
$user = new User();
class DataOperation extends Database
{
    public function insert_record($table,$fields){
        
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        $sql .= " (".implode(",", array_keys($fields)).") VALUES";
        $sql .= "('".implode("','", array_values($fields))."')";
       $query= mysqli_query($this->con,$sql);
       if($query){
           return true;
       }
    }
    
    public function fetch_record($table)
    {
        global $uid;
        $sql= "SELECT * FROM $table where uid = $uid";
        $array =array();
        $query = mysqli_query($this->con, $sql);
        while ($row= mysqli_fetch_assoc($query))
        {
            $array[] = $row;
        }
        return $array;
    }
    
    public function select_record($table,$where)
    {
        $sql="";
        $condition= "";
        foreach ($where as $key => $value)
        {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition,0,-5);
        $sql .= "SELECT * FROM ".$table." WHERE ".$condition;
        $query = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($query);
        return $row;
    }
    
    public function update_record($tabel, array $data){
        mysqli_query($this->con, "UPDATE $tabel SET note='$data[note]' WHERE id='$data[id]'");
        return true;
    }
    
    public function delete_record($table,$where)
    {
        $sql= "";
        $condition = "";
        foreach ($where as $key => $value)
        {
            $condition .= $key . "='" . $value . "' AND ";
        }
         $condition = substr($condition,0,-5);
         $sql = "DELETE FROM ".$table." WHERE ".$condition;
        if(mysqli_query($this->con,$sql))
        {
            return true;
        }
    }
    
}

$obj = new DataOperation;
 if(isset($_POST["submit"]))
 {
     $myArray = array(
         "note" => $_POST["name"],
         "uid" => $_POST["uid"],
     );
     if( $obj->insert_record("comments", $myArray)){
         
         header("location:commentadd.php?msg=Record Inserted");
     }
    
   
     
 }
  if(isset($_POST["edit"]))
     {
        $data = array(
         "note" => $_POST["name"],
          "id" => $_POST["id"]
     ); 
      if( $obj->update_record("comments",$data)){
          header("location:commentadd.php?msg=Record updated successfully");
      }
        
    
     }
     
     if(isset($_GET["delete"]))
     {
         $id = $_GET["id"] ?? null;
         $where = array("id"=>$id);
         if($obj->delete_record("comments", $where))
         {
             
                 header("location:commentadd.php?msg=Record Deleteed");
         
         }
     }
     