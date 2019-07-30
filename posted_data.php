<?php

 	include 'connectdb.php';

    $type      =  $_GET['type']; 
	

  //  if($type == "display"){

	 //   	$name      =  $_GET['name'];
		// $mobile    =  $_GET['mobile'];
		// $email     =  $_GET['email'];
		// $title     =  $_GET['title'];
		// $message   =  $_GET['message'];
		// $districts =  $_GET['districts']; 

  //  		   $sql = "INSERT INTO meeting_info (name, mobile, email, title, message, districts)
		// VALUES ('$name', '$mobile', '$email', '$title', '$message', '$districts');";
		

		// if ($conn->query($sql) === TRUE) {
		//     echo "New records created successfully";
		// } else {
		//     echo "Error: " . $sql . "<br>" . $conn->error;
		// }
  //  }
    if ($type == "search") {

   	$selected_district = $_GET['selected_district'];
   	  $sql1 = "SELECT * FROM meetings_info where districts = '$selected_district'";
		
   	   
       $res_cmpy1    = $conn->query($sql1);
		  if ($res_cmpy1->num_rows > 0) {
       $i = 0;
      while($row1 = $res_cmpy1->fetch_assoc()) {
      
        $output['name']      = $row1['name'];
        $output['mobile']    = $row1['mobile'];
        $output['email']     = $row1['email'];
        $output['title']     = $row1['title'];
        $output['message']   = $row1['message'];
        $output['districts'] = $row1['districts'];
        $output['image']     = base64_encode($row1['image']);
      
        $data['records'][] = $output;

    }
} else {
    $output['value'] = "0";
    $data['records'][] = $output;
  
}

echo json_encode($data,true);

   }


$conn->close();

?>