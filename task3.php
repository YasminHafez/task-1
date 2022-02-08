<?php
// validatie name
$errors = [
    'name' => '',
    'email' => '',
    'password' => '',
    'address' => '',
    'linkedIn' => ''
];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    $address =$_POST["address"];
    $linkedIn =$_POST["linkedIn"];

    if(empty($name)){
    $errors['name'] = "Name Is Required"; 
    }elseif (is_numeric($name)) {
    $errors['name'] = "Name Is Not Valid"; 
   }

   // validatie email
      
   if (filter_var($email, FILTER_VALIDATE_EMAIL)== false) {
        $errors['email'] = "Email Not Valid"; 
   }
   //validatie password 
   if (empty($password)) {
      $errors['password'] = "Password Is Required";
   }elseif (strlen($password) < 6) {
    $errors['password'] = "Password Must be 6 character or more";
   }
   //validatie address 
   if (empty($address)) {
    $errors['address'] = "address Is Required";
    }elseif (strlen($address) != 6) {
    $errors['address'] = "address Must be 6 character ";
    }

   //validatie linkedIn 
   if (empty($linkedIn)) {
    $errors['linkedIn'] = "linkedIn Link Is Required";
    }elseif(filter_var($linkedIn, FILTER_VALIDATE_URL)== false) {
    $errors['linkedIn'] = "linkedIn Must be  URL ";
    }

   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  >

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
                <span style="color:red"><?= $errors['name']; ?></span>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                <span style="color:red"><?= $errors['email']; ?></span>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"   name="password" placeholder="Password">
                <span style="color:red"><?= $errors['password']; ?></span>
                
            </div>

            <div class="form-group">
                <label for="exampleInputName">Address</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="address" placeholder="Enter Address">
                <span style="color:red"><?= $errors['address']; ?></span>
                
            </div>

            <div class="form-group">
                <label for="exampleInputName">LinkedIn Link</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby=""   name="linkedIn" placeholder="Enter LinkedIn link">
                <span style="color:red"><?= $errors['linkedIn']; ?></span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>