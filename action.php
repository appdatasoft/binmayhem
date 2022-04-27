<?php

// session_start();

//require 'phpmailer/class.phpmailer.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require 'vendor/autoload.php';

$mobile = $_POST['email'];
 $check_mail = sendmail($mobile);
if($check_mail){
 echo "<p style='color:green;'>Subscribed Successfully !</p>";

}else{
  echo "<p style='color:red;'>Subscribed Successfully !</p>";
}

    



// $email = "jitendrakhedekar67@gmail.com";



// if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

//    // if($_SESSION['access_token']==$_POST['access_token']){

//     $check_mail = 0;

//     if($check_mail > 0) {

//             echo '<p style="color:red !important;">This email is already signed up for bin mania</p>';

//       } else {
//         sendmail($email);
        
//            // $data = mailchimp($email);

//            // if($data['error']!=200){

//            //     echo '<p style="color:red !important;">Error While Add Contact!</p>';

//            // }else{

//            //     sendmail($email);

//            //     add_mail($email);

//            //     echo '<p style="color:#30DB00 !important">Contact Added successfully</p>';

//            // }

//       }

//    // }

//    // else{

//    //     echo 'User Athentication failed!'.$_SESSION['access_token'].'--'.$_POST['access_token'];

//    // }

// } else {

//   echo '<p style="color:red !important;">'.$email.' is not a valid email address';

// }





function add_mail($email) {

   $con=mysqli_connect("localhost","dealonio_wp391","8.9S8]pfvi","dealonio_wp391");

   if (mysqli_connect_errno())

     {

        echo "Failed to connect to MySQL: " . mysqli_connect_error();

     }

   $sql="INSERT INTO subscriber_data(email) VALUES('$email')";

   mysqli_query($con,$sql);

   mysqli_close($con);

}



function checkmail($email) {

   $con=mysqli_connect("localhost","dealonio_wp391","8.9S8]pfvi","dealonio_wp391");

   if (mysqli_connect_errno())

     {

        echo "Failed to connect to MySQL: " . mysqli_connect_error();

     }

   $sql="SELECT * FROM subscriber_data WHERE email='$email'";

   if($result = mysqli_query($con,$sql))

     {

       $rowcount = mysqli_num_rows($result);

       return $rowcount;

       mysqli_free_result($result);

     }

   mysqli_close($con);

}



function sendmail($mobile) {

try {

     $mail = new PHPMailer(true);

    $mail->Host = "ssl://gator4202.hostgator.com";
    $mail->SMTPAuth = true;
    $mail->Username = "smtp@ibrinfotech.com";             
    $mail->Password = "Test321$";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;                    
    $mail->From = 'support@menuplease.co.za';
    $mail->FromName = "support@menuplease.co.za";
  
    $mail->setFrom('info@binmania.com', 'Bin Mania');           
    $mail->addAddress('info@binmania.com');
    
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'New Subscribed User From Website';
    $mail->Body    = "<img src=\"cid:logo_2u\" width='230px'/><br><br>

      you have received new subscribed user from website <br> Mobile Number-".$mobile."<br><br><br>

        <br><br>

        -Bin Mania team";

    $mail->AltBody = 'This is a confirmation message ';
    $mail->send();
    
    return true;

} catch (Exception $e) {
    return false;
}
}



function mailchimp($mail){

$data = [

    'email'     => $mail,

    'status'    => 'subscribed'

   

];

   $apiKey = '85a314cb0c22ebacf21451910d319ec6-us19';

    $listId = '90f3b17ca5';



    $memberId = md5(strtolower($data['email']));

    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);

    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

    $json = json_encode([

        'email_address' => $data['email'],

        'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"

       /* 'merge_fields'  => [

            'FNAME'     => $data['firstname'],

            'LNAME'     => $data['lastname']

        ]*/

    ]);

    $ch = curl_init($url);



    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);

    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

    $result = curl_exec($ch);//print_r($result);die;

    $data = json_decode($result);

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    $massage  = array('error' => $httpCode,

                   'massage'=>$data->detail );

    return $massage;

}