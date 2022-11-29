<?php
include('Mailin.php');
// use Sendinblue\Mailin;
// $api_key = file_get_contents('api_key');
$from_email = 'tectignisitsolutions@gmail.com';
$from_name = 'Name of Sender';
$to_email = 'divyanikeshari@tectignis.in';
$to_name = 'Name of Receiver';
$subject = 'This is the subject';
$message = '<h2>Heading 2</h2><p>Here goes the paragraph blah blah blah</p>';
$mailin = new Mailin('https://api.sendinblue.com/v3/smtp/email','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');
$data = array( 
  "to" => array($to_email=>$to_name),
  "from" => array($from_email,$from_name),
  "subject" => $subject,
  "html" => $message,
  "attachment" => array()
);

// require('Mailin.php');
// $mailin = new Mailin("https://api.sendinblue.com/v3/smtp/","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");
// $data = array( "to" => array("divyanikeshari@tectignis.in"=>"to whom!"),
//     "from" => array("tectignisitsolutions@gmail.com", "from email!"),
//     "subject" => "My subject",
//     "html" => "This is the <h1>HTML</h1>",
//     "attachment" => array("https://domain.com/path-to-file/filename1.pdf", "https://domain.com/path-to-file/filename2.jpg")
// );

var_dump($mailin->send_email($data));
$response = $mailin->send_email($data);
// if(isset($response['code']) && $response['code']=='success'){
//   echo 'Email Sent';
// }else{
//   echo 'Email not sent';
// }
exit;