<?php

namespace App\Entity;

use DateTime;
use App\Entity\Subjects;

class Message {

    private ?int $id;
    private string $firstname;
    private string $email;
    private Subjects $subject;
    private string $description;
    private int $user_id;
    private DateTime $createdAt;

    public function __construct(?int $id, string $firstname, string $email, Subjects $subject, string $description, int $user_id, string $createdAt)
    {

        $this->id = $id;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->subject = new Subjects($subject);
        $this->description = $description;
        $this->user_id = $user_id;
        $this->createdAt = new DateTime($createdAt);

    }


    public function getIdRequest(): ?int
     {
		return $this->id;
	}

	public function setIdRequest(?int $id): self
    {
        $this->id = $id;
    }
      

    public function getFirstname(): string
     {
		return $this->firstname;
	}

	public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }


    public function getEmail(): string
     {
		return $this->email;
	}

	public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }


    public function getSubjects(): Subjects
    {
        return $this->$subject;
    }

    public function setSubjects(Subjects $subject): self
    {
        $this->subject = $subject;

        return $this;
    }


    public function getDescription(): string
     {
		return $this->description;
	}

	public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getUserId(): string
     {
		return $this->user_id;
	}

	public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }


    public function getCreatedAt(): DateTime
    {
		return $this->createdAt;
	}

	public function setCreatedAt(DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}