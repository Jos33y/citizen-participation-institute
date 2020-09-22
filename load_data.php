<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "", "citizenparticipation");
 //$connect = mysqli_connect("127.0.0.1:49841", "azure", "6#vWHD_$", "citizenparticipation");

 $output = '';  
 if(isset($_POST["webgrp"]))  
 {  
      if($_POST["webgrp"] != '')  
      {  
           $sql = "SELECT * FROM governments WHERE webgroup = '".$_POST["webgrp"]."'"; 
           $query = mysqli_query($connect, $sql);  
           while($row_gov = mysqli_fetch_array($query)) {  
           $govid = $row_gov["GovId"];  
        
           $sql = "SELECT * FROM governments WHERE GovId = '".$govid."'"; 
           $query_ktynbr = mysqli_query($connect, $sql);  
           while($row_ktynbr = mysqli_fetch_array($query_ktynbr)){
            $kty_nbr = $row_ktynbr["ElectionAuthority"];

            $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '".$kty_nbr."'"; 
            $query_kty = mysqli_query($connect, $sql);  
            while($row_kty = mysqli_fetch_array($query_kty)){

           $sql = "SELECT * FROM addresses WHERE GovId = '".$govid."'";
           $result = mysqli_query($connect, $sql);  
           while($row = mysqli_fetch_array($result)) {

            $website =$row["WebsiteURL"];


            if($website == ""){
              $pb =   $row["PublicBodyNameFormal"];

            }
            else{
             $pb =  '<a href="//'.$row["WebsiteURL"].'" class="link" target="_blank">'.$row["PublicBodyNameFormal"].'</.$row>';
            }

             $output .= 
             '<tr>
             <td><p><span>'.$pb.'<br>
             <small>'.$row_kty["namesimple"].'</small></span></p></td>
             <td><p><span>'.$row["FoiaPhysicalAddress"].'<br />&#8203;
             <strong>'.$row["FoiaMailingCity"].'</strong>'.' '.$row["FoiaState"].' '.$row["FoiaMailingZip"].'</span></p></td>
             <td><p><span>'.$row["FoiaEmail"].'</span></p></td>
             <td><p><span>'.$row["FoiaPhone"].'</span></p></td>
             </tr>';
             
           }

        }
    }
           }
       
      }
      
      






      else  
      {  
           $output .= "";  
      }  
      
      echo $output;  
 }  
/** 
 $b_name = $row['PublicBodyName'];
            $county = $row['County'];
			$address = $row['Address'];
			$town = $row['Town'];
			$state = $row['State'];
			$zip = $row['Zip'];
			$email =$row['Email'];
            $phone = $row['Phone'];
            //this below are the what generate each rows of data from the database
        echo "
        <tr>
        <td><p><span>".$b_name."<br>
        <small>".$county.' County'."</small></span></p></td>
        <td><p><span>".$address."<br />&#8203;
        <strong>".$town."</strong>".' '.$state.' '.$zip."</span></p></td>
        <td><p><span>".$email."</span></p></td>
        <td><p><span>".$phone."</span></p></td>
        </tr>
            
        ";

        */
 ?>  

