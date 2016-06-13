<?php
if (key_exists('HTTP_ORIGIN', $_SERVER) && !stripos($_SERVER['HTTP_ORIGIN'], $_SERVER ['HTTP_HOST'])) {
    die();
}
/*
 * Debugger tool for php https://tracy.nette.org/
 * It may stay enabled all the time since it can handle autodetection for development(local) or production environment
 *
 * You can dump any variable to bebug bar using:
 * Tracy\Debugger::barDump($variable);
 *
 * If you print more variables you may use the 2nd parameter to give a title:
 * Tracy\Debugger::barDump($variable, 'Custom fields');
 */

require('tracy/src/tracy.php');

use Tracy\Debugger;

Debugger::enable();

Tracy\Debugger::barDump($_POST, 'POST');
Tracy\Debugger::barDump($_FILES, 'FILES');

$expectedFields = array(
    'job_type' => array(
        'label' => 'Job type',
        'required' => false,
    ),
    'your-name' => array(
        'label' => 'Your name',
        'required' => true,
        'type' => 'text',
        'minlength' => 5,
        'error' => 'Please fill in your name'
    ),
    'your-email' => array(
        'label' => 'Your email',
        'required' => true,
        'type' => 'email',
        'minlength' => 5,
        'error' => 'E-mail must be a valid e-mail address!'
    ),
    'cv' => array(
        'label' => 'CV',
        'required' => true,
        'type' => 'file',
        'error' => 'Select a file from your computer!'
    ),
    'your-subject' => array(
        'label' => 'Subject',
        'required' => true,
        'type' => 'text',
        'minlength' => 5,
        'error' => 'Write a subject for your e-mail!'
    ),
    'your-message' => array(
        'label' => 'Your message',
        'required' => true,
        'type' => 'text',
        'minlength' => 10,
        'error' => 'Write a message!'
    ),
);

$errors = false;

foreach ($_POST as $field => $value) {
    if (isset($expectedFields[$field])) {
        if ($expectedFields[$field]['required']) {
            switch ($expectedFields[$field]['type']) {
                case 'text':
                    if (empty($value)) {
                        $errors[$field] = $expectedFields[$field]['error'];
                    } elseif (strlen($value) < $expectedFields[$field]['minlength']) {
                        $errors[$field] = 'Value is too short.';
                    }
                    break;
                case 'email':
                    if (empty($value)) {
                        $errors[$field] = $expectedFields[$field]['error'];
                    } elseif (strlen($value) < $expectedFields[$field]['minlength']) {
                        $errors[$field] = 'Value is too short.';
                    } elseif (!isEmail($value)) {
                        $errors[$field] = $expectedFields[$field]['error'];
                    }
                    break;
            }
        }
    }
}

foreach ($_FILES as $field => $value) {
    if (isset($expectedFields[$field])) {
        if ($expectedFields[$field]['required']) {
            if (empty($value['name'])) {
                $errors[$field] = $expectedFields[$field]['error'];
            } elseif (!in_array($value['type'], array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.oasis.opendocument.text'))) {
                $errors[$field] = 'File format is wrong. We accept: PDF, DOC, DOCX, ODT';
            }
        }
    }
}

if ($errors) {
    echo json_encode(array('error' => $errors));
    exit();
} else {
    // send email
    require_once 'swiftmailer/swift_required.php';

    $transport = Swift_MailTransport::newInstance();

    //SMTP
    /*$transport = Swift_SmtpTransport::newInstance('mail.server.ro', 25)
        ->setUsername('info@server.ro')
        ->setPassword('passhere')
    ;*/

    // Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    $messageBody = '<html><body>';
    foreach ($_POST as $field => $value){
        $messageBody .= '<p><strong>'.$expectedFields[$field]['label'].':</strong> '.$value.'</p>';
    }
    $messageBody .= '</body></html>';

    // Create the message
    $message = Swift_Message::newInstance()

        // Give the message a subject
        ->setSubject($_POST['your-subject'] . ' from intechdynamics.com')

        // Set the From address with an associative array
        ->setFrom(array($_POST['your-email'] => $_POST['your-name']))

        // Set the To addresses with an associative array
        ->setTo(array('backupleads.insegment@gmail.com' => 'InTechDynamics Backup', 'careers@intechdynamics.com'=>'InTechDynamics Careers'))

        // Give it a body
        ->setBody($messageBody, 'text/html')
    ;

    if ($_FILES['cv']['tmp_name']) {
        $message->attach(Swift_Attachment::fromPath($_FILES['cv']['tmp_name'])->setFilename($_FILES['cv']['name']));
    }

    if (!$mailer->send($message, $failures)) {
        Tracy\Debugger::barDump($failures);
    }

    echo json_encode(array('success' => true));
    exit();
}

function isEmail($value) {
    $atom = "[-a-z0-9!#$%&'*+/=?^_`{|}~]"; // RFC 5322 unquoted characters in local-part
    $localPart = "(?:\"(?:[ !\\x23-\\x5B\\x5D-\\x7E]*|\\\\[ -~])+\"|$atom+(?:\\.$atom+)*)"; // quoted or unquoted
    $alpha = "a-z\x80-\xFF"; // superset of IDN
    $domain = "[0-9$alpha](?:[-0-9$alpha]{0,61}[0-9$alpha])?"; // RFC 1034 one domain component
    $topDomain = "[$alpha](?:[-0-9$alpha]{0,17}[$alpha])?";
    return (bool) preg_match("(^$localPart@(?:$domain\\.)+$topDomain\\z)i", $value);
}
