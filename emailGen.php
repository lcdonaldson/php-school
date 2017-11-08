<?php
namespace BOSS\API\Mail;

class Generator {
    
    public function generateEmail($email){
        $boss = new \BOSS\Core\BOSS(0);
        $info = ''; // get the user info
        $mailInfo = [
            'first_name' => $info['first_name'],
            'last_name' => $info['last_name'],
            'email' => $email
            ];
        
        $emailHTML = \BOSS\Core\BOSS::getIncludeFile(realpath(__DIR__."/../../components/email/Email.html.php"), $mailInfo);
        $emailTEXT = \BOSS\Core\BOSS::getIncludeFile(realpath(__DIR__."/../../components/email/Email.text.php"), $mailInfo);
        
        $returnEmail = [
            'html' => $emailHTML,
            'text' => $emailTEXT
        ];
        
        return $returnEmail; 
        
    }
    
}
?>
