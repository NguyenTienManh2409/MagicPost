<?php
	//calling the config file
	include_once("includes/config.php"); 
	// adding new users code begins here
	if(isset($_POST['add_user'])){
		$fname = htmlspecialchars($_POST['firstname']);
		$lname = htmlspecialchars($_POST['lastname']);
		$username = htmlspecialchars($_POST['username']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
		$confirm_password = htmlspecialchars($_POST['confirm_pass']);
		$phone = htmlspecialchars($_POST['phone']);
		$address = htmlspecialchars($_POST['address']);
		//grabing user profile picture
		$file = $_FILES['picture']['name'];
		$file_loc = $_FILES['picture']['tmp_name'];
		$folder="employees/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file) && ($password == $confirm_password)){
			$image=$final_file;
			$password = password_hash($password,PASSWORD_DEFAULT);
		 }
		$sql = "INSERT INTO `users`(`id`,`FirstName`,`LastName`,`UserName`,`Email`,`Password`,`Phone`,`Address`,`Picture`,`dateTime`)
		VALUES(NULL ,:fname,:lname,:username,:email,:password,:phone,:address,:pic, current_timestamp())";
		$query = $dbh->prepare($sql);
		$query->bindParam(':fname',$fname,PDO::PARAM_STR);
		$query->bindParam(':lname',$lname,PDO::PARAM_STR);
		$query->bindParam(':username',$username,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':password',$password,PDO::PARAM_STR);
		$query->bindParam(':phone',$phone,PDO::PARAM_STR);
		$query->bindParam(':address',$address,PDO::PARAM_STR);
		$query->bindParam(':pic',$image,PDO::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
			if($lastInsert>0){
				echo "<script>alert('New User Has Been Added');</script>";
				echo "<script>window.location.href='users.php';</script>";
			}else{
				echo "<script>alert('Something went wrong.');</script>";
			}
		}
	//adding  users ends here 


	//client adding code starts here
	elseif(isset($_POST['add_client'])){
	   $firstname = htmlspecialchars($_POST['firstname']);
	   $lastname = htmlspecialchars($_POST['lastname']);
	   $username = htmlspecialchars($_POST['username']);
	   $email = htmlspecialchars($_POST['email']);
	   $password = htmlspecialchars($_POST['password']);
	   $confirm_password = htmlspecialchars($_POST['confirmpass']);
	   $client_id = htmlspecialchars($_POST['clientid']);
	   $phone = htmlspecialchars($_POST['phone']);
	   $company = htmlspecialchars($_POST['company']);
	   $address = htmlspecialchars($_POST['address']);
		//grabing user profile picture
		$propic=$_FILES["propic"]["name"];
		$extension = substr($propic,strlen($propic)-4,strlen($propic));
	   
		if($password != $confirm_password){
			echo "<script>alert('Your passwords do not match');</script>";
		}
		else{     
			$propic=md5($propic).time().$extension;  
			move_uploaded_file($_FILES["propic"]["tmp_name"],"clients/".$propic);     
			$password = password_hash($password,PASSWORD_DEFAULT);
			$sql = "INSERT INTO `clients` (`FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ClientId`, `Phone`, `Company`, `Address`, `Status`, `Picture`) 
					VALUES (:fname, :lname, :username, :email, :password, :id, :phone, :company, :address,'1',:pic)";
			$query = $dbh->prepare($sql);
			$query->bindParam(':fname',$firstname,PDO::PARAM_STR);
			$query->bindParam(':lname',$lastname,PDO::PARAM_STR);
			$query->bindParam(':username',$username,PDO::PARAM_STR);
			$query->bindParam(':email',$email,PDO::PARAM_STR);
			$query->bindParam(':password',$password,PDO::PARAM_STR);
			$query->bindParam(':id',$client_id,PDO::PARAM_STR);
			$query->bindParam(':phone',$phone,PDO::PARAM_STR);
			$query->bindParam(':company',$company,PDO::PARAM_STR);
			$query->bindParam(':address',$address,PDO::PARAM_STR);
			$query->bindParam(':pic',$propic,PDO::PARAM_STR);
			$query->execute();
			$lastInsert = $dbh->lastInsertId();
			if($lastInsert>0){
				
				echo "<script>alert('Client Has Been Added');</script>";
				echo "<script>window.location.href='clients.php';</script>";
			}else{
				echo "<script>alert('Something went wrong.');</script>";
			}

		}   
	   
	}//adding client code ends here
	
	//adding departments code starts here
	elseif(isset($_POST['add_department'])){
		$department = htmlspecialchars($_POST['department']);
		$sql = "INSERT INTO departments(Department )VALUES(:name)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':name',$department,pdo::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
		if($lastInsert>0){
			echo "<script>alert('Department Has Been Added');</script>";
			echo "<script>window.location.href='departments.php';</script>";
		}else{
			echo "<script>alert('Something went wrong.');</script>";
		}
	}//adding departments code ends here

	//adding desginations code starts from here
	elseif(isset($_POST['add_designation'])){
		$name = htmlspecialchars($_POST['designation']);
		$department = htmlspecialchars($_POST['department']);
		$sql = "INSERT INTO `designations` (`Designation`, `Department`) VALUES ( :designation, :department)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':designation',$name,PDO::PARAM_STR);
		$query->bindParam(':department',$department,pdo::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
		if($lastInsert>0){
			echo "<script>alert('Designation Has Been Added');</script>";
			echo "<script>window.location.href='designations.php';</script>";
		}else{
			echo "<script>alert('Something Went wrong');</scrip>";
		}
	}//adding designations code ends here
	
	
	//adding employees code starts from here
	elseif(isset($_POST['add_employee'])){
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$username = htmlspecialchars($_POST['username']);
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
		$confirm_password = htmlspecialchars($_POST['confirm_pass']);
		$employee_id = htmlspecialchars($_POST['employee_id']);
		$phone = htmlspecialchars($_POST['phone']);
		$department = htmlspecialchars($_POST['department']);
		$designation = htmlspecialchars($_POST['designation']);
		//grabbing the picture
		$file = $_FILES['picture']['name'];
		$file_loc = $_FILES['picture']['tmp_name'];
		$folder="employees/"; 
		$new_file_name = strtolower($file);
		$final_file=str_replace(' ','-',$new_file_name);

		if(move_uploaded_file($file_loc,$folder.$final_file) && ($password == $confirm_password)){
			$image=$final_file;
			$password = password_hash($password,PASSWORD_DEFAULT);
		 }
		$sql = "INSERT INTO `employees` (`id`, `FirstName`, `LastName`, `UserName`, `Email`, `Password`, `Employee_Id`, `Phone`, `Department`, `Designation`, `Picture`, `DateTime`) 
		VALUES (NULL, :firstname, :lastname, :username, :email,:password, :id, :phone, :department, :designation,  :pic, current_timestamp())";
			$query = $dbh->prepare($sql);
		$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
		$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
		$query->bindParam(':username',$username,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':password',$password,PDO::PARAM_STR);
		$query->bindParam(':id',$employee_id,PDO::PARAM_STR);
		$query->bindParam(':phone',$phone,PDO::PARAM_STR);
		$query->bindParam(':department',$department,PDO::PARAM_STR);
		$query->bindParam(':designation',$designation,PDO::PARAM_STR);
		$query->bindParam(':pic',$image,PDO::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
		if($lastInsert>0){
			echo "<script>alert('Employee Has Been Added.');</script>";
			echo "<script>window.location.href='employees.php';</script>";
		}else{
			echo "<script>alert('Something Went Wrong');</script>";
		}	
		
	}//ading employees code eds here

	//employee overtime code begins here
	elseif(isset($_POST['add_overtime'])){
		$employee = htmlspecialchars($_POST['employee']);
		$ovtime_date = htmlspecialchars($_POST['ov_date']);
		$overtime_hours = htmlspecialchars($_POST['ov_hours']);
		$overtime_type = htmlspecialchars($_POST['ov_type']);
		$description = htmlspecialchars($_POST['description']);
		$sql = "INSERT INTO `overtime` ( `Employee`, `OverTime_Date`, `Hours`, `Type`, `Description`) 
		VALUES ( :name, :date, :hours,:type, :description)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':name',$employee,PDO::PARAM_STR);
		$query->bindParam(':date',$ovtime_date,PDO::PARAM_STR);
		$query->bindParam(':hours',$overtime_hours,PDO::PARAM_STR);
		$query->bindParam(':type',$overtime_type,PDO::PARAM_STR);
		$query->bindParam(':description',$description,PDO::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
		if($lastInsert>0){
			echo "<script>alert('Employee Overtime Has Been Added');</script>";
			echo "<script>window.location.href='overtime.php';</script>";
		}else{
			echo "<script>alert('Somthing Went Wrong');</script>";
		}
	}
	//adding employees leave code starts here
	elseif(isset($_POST['add_leave'])){
		$employee = htmlspecialchars($_POST['employee']);
		$start_date =htmlspecialchars( $_POST['starting_at']);
		$end_date = htmlspecialchars($_POST['ends_on']);
		$days_count = htmlspecialchars($_POST['days_count']);
		$reason = htmlspecialchars($_POST['reason']);
		$sql = "INSERT INTO `leaves` (`Employee`, `Starting_At`, `Ending_On`, `Days`, `Reason`, `Time_Added`)
		 VALUES ( :employee, :start, :end, :days, :reason, current_timestamp())";
		$query = $dbh->prepare($sql);
		$query->bindParam(':employee',$employee,PDO::PARAM_STR);
		$query->bindParam(':start',$start_date,PDO::PARAM_STR);
		$query->bindParam(':end',$end_date,PDO::PARAM_STR);
		$query->bindParam(':days',$days_count,PDO::PARAM_STR);
		$query->bindParam(':reason',$reason,PDO::PARAM_STR);
		$query->execute();
		$lastInsert = $dbh->lastInsertId();
		if($lastInsert>0){
			echo "<script>alert('Employee Leave Has Been Added');</script>";
			echo "<script>window.location.href='leaves-employee.php';</script>";
		}else{
			echo "<script>alert('Something went wrong');</script>";
		}
		

	}



?>
