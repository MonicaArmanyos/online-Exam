<?php
class mysqliQueryBuilder{
    private $conn;
    public function __construct() {
        $this->connect();
        
    }
    public function connect (){
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        $this->conn=$conn;   
    }
    
    public function insert($table,$record){
        if(is_array($record) && !empty($table))
        {
            $query="insert into `".$table."`(";
           foreach ($record as $key=> $val)
            {
                   $query.="$key,";
            }
                   $query.=") values(";
            foreach ($record as $val)
            {
                if(! is_int($val))
                    $query.=" '$val',";
                else
                   $query.="$val,";
            }
            $query.=")";
            $query= str_replace(",)",")",$query);
            $result= mysqli_query($this->conn,$query);
            if ($result)  return true ;
            else 
            {
              echo  mysqli_error($this->conn); 
               return false ;
            }      
        }
        else {
            return false;  
        }
    }
    public function update($table,$set,$where=''){
        if(is_array($set) && !empty($table))
        {
            $query="update `".$table."` set ";
            $i=0;
           foreach ($set as $key=> $val)
            {
               if($i == count($set)-1){
                    if(is_int($val))
                     $query.="`$key` = $val";
                 else {
                     $query.="`$key` = ".'"'.$val.'"';
                 }
               }
               else
               {
                   if(is_int($val))
                    $query.="$key = $val,";
                else {
                    $query.="$key = ".'"'.$val.'",';
                }
               }
               $i++;
            }
        if($where !=='')
          {
              $query.=" where $where";
          }
            $result= mysqli_query($this->conn,$query);
            if ($result)  return true ;
            else 
            {
              echo  mysqli_error($this->conn); 
               return false ;
            }      
        }
        else {
            return false;  
        }
    }
    public function select($table,$fields,$where='')
    {
      if(is_array($fields) && !empty($table))
      {
          $query="select ";
          for($i=0;$i<count($fields);$i++)
          {
              if($i == count($fields)-1)
                  $query.=$fields[$i];
              else {
                  $query.="$fields[$i],";
              }
          }
          $query.=" from $table";
          if($where !=='')
          {
              $query.=" where $where";
          }
          $result= mysqli_query($this->conn,$query);
          if(mysqli_num_rows($result)>0)
          {
              while ($row= mysqli_fetch_assoc($result))
              {
                   $output['data'][] = $row;
              }
              return $output;
          }
          else
          {
              return NULL;
          }
      }
      return NULL;
    }
  

    public function disconnect() {
        mysqli_close($conn);
    }

}
