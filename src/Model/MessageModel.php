<?php

namespace App\Model;

use App\Core\AbstractModel;

class MessageModel extends AbstractModel {

    function getMessageInfo(): array{

        $sql = 'SELECT id, firstname, email, subject, description, user_id, createdAt,
                FROM message
                INNER JOIN subject
                ON message.subject = subject.subject_label
                INNER JOIN user
                ON message.user_id = user.id
                ORDER BY createdAt ASC';

        $stmt = self::$pdo->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();

        if(!$results){
            return [];
        }

        $messages = [];

        foreach($results as $result){

            $subject = new SubjectModel(
                $result['id']
            );

            $user = new UserModel(
                $result['id']
            );

            $message = new Message(
                $result['id'],
                $result['firstname'],
                $result['email'],
                $subject,
                $result['description'],
                $user,
                $result['createdAt']
            );
        }
        return $requests;
    }

    function insertMessage(string $firstname, string $email, string $subject, string $description, int $user_id, string $createdAt){

        $sql = 'INSERT INTO message
                (firstname, email, subject, description, user_id, createdAt)
                VALUES (?,   ?,       ?,      ?,          ?,        NOW())
                ';

        $stmt = self::$pdo->prepare($sql);
        $stmt->execute([$firstname, $email, $subject, $description, $user_id]);

        return self::$pdo->lastInsertId();
    }
}