<?php 

use App\Entity\Subjects;
use App\Entity\Message;
use App\Core\AbstractModel;
use App\Model\MessageModel;
use App\Model\SubjectModel;

if(isConnected() == true){
    $userFirstname = $userData['firstname'];
}
else{
    echo 'Vous devez être connecté pour envoyer un message !';
    exit;
}
$errors = [];

$today = date("Y-m-d");

$firstname = "";
$email = "";
$subject = "";
$description = "";
$createdAt = $today;
$user_id = $userData['id'];

if(!empty($_POST)){

    $firstname = trim($_POST['firstname']);
    $email = trim($_POST['email']);
    $subject = intval($_POST['subject']);
    $description = $_POST['description'];


    if(!$firstname) {
        $errors['firstname'] = 'Le champ "Prénom" est obligatoire';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le champ "Email" n\'est pas valide';
    }


    if(empty($errors)){

        $messageModel = new MessageModel();
        $messageModel->insertMessage($firstname, $email, $subject, $description, $user_id, $createdAt);

        addFlash("Votre message a bien été envoyé.");

        header('Location: /');
        exit;
    }

}

$subjectModel = new SubjectModel();
$subjects = $subjectModel->getAllSubjects();

$template = "/message";
include "../templates/base.phtml";