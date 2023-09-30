<?php
class model{
 public $conn="";
 function __construct(){

 $this->conn=new mysqli('localhost','root','','library');
 }
 function select($tbl) //select function Data view
 {
   $sel="SELECT* from $tbl";
   $run =$this->conn->query($sel);
   $arr=[];
   while($fetch=$run->fetch_object()){

   $arr[]=$fetch;

   }

      return $arr;


   }

 function insert($tbl,$arr) //insert function data inserted
 {
   $coll_arr=array_keys($arr);
   $col=implode(",",$coll_arr);

   $value_arr=array_values($arr);
   $value=implode("','",$value_arr);

   $ins="INSERT INTO $tbl($col) values('$value')";
   $run=$this->conn->query($ins);
   return $run;
   }
 function select_where($tbl,$where) //login functiom 
   {

      $col=array_keys($where);
         $value=array_values($where);

      $sel="SELECT* from $tbl where 1=1"; 
      $i=0;
      foreach($where as $w){
      $sel.=" and $col[$i]='$value[$i]'";
      /*echo $sel;
      exit;*/
      $i++;
      }
      $res=$this->conn->query($sel);
      return $res;
      }
   function delete_where($tbl,$arr) //data deleted function
      {
      $col_arr=array_keys($arr);
      $value_arr=array_values($arr);
      $sel="delete from $tbl where 1=1"; 
      // loop $arr 
      $i=0;
      foreach($arr as $w)
      {
         $sel.=" and $col_arr[$i]='$value_arr[$i]'";
         $i++;	
      }
      $run=$this->conn->query($sel);	 // run query database
      return $run;
   }
      function select_search($tbl,$col,$search) //data search function 
      {
         $sel="select * from $tbl where $col like '$search%'"; 
         $run=$this->conn->query($sel);   
         while($fetch=$run->fetch_object())
         {
               $arr[]=$fetch;
         }
         return $arr;
      }
      function update($tbl,$arr,$where) //data search function 
      {
         $col=array_keys($arr);
         $value=array_values($arr);
         $upd="update $tbl set"; 
         // loop $arr 
         $j=0;
         $count=count($arr);

        foreach($arr as $w)
               {
         if($count==$j+1){
            $upd.=" $col[$j]='$value[$j]'";
           /*echo $sel;
                exit;*/}
                else{
            $upd.=" $col[$j]='$value[$j]',";
            $j++;
                }
        }
        $colw=array_keys($where);
        $valuew=array_values($where);
        $upd.=" where 1=1";
        $i=0;
        foreach($where as $w)
        {
       echo $upd.=" and $colw[$i]='$valuew[$i]'";
           $i++;
        }
        $run=$this->conn->query($upd);
        return $run;
        }

    
   
}

$obj=new model;

?>