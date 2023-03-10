<?php

namespace App\Model;

use App\Core\AbstractModel;

class SubjectModel extends AbstractModel{

    function getAllSubjects(): array
    {
        $sql = 'SELECT * FROM subject
                ORDER BY id ASC';
        $stmt = self::$pdo->prepare($sql);

        $stmt->execute();

        $results = $stmt->fetchAll();

        if(!$results){
            return [];
        }

        return $results;
    }
}