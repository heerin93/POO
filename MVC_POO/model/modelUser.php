<?php

class ModelUser {
    public ?int $id;
    public ?string $nickname;
    public ?string $email;
    public ?string $password;
    public ?PDO $bdd;

    public function __construct() {
        $this->bdd = connect();
    }
  
    public function getId(): ?int {
        return $this->id;
    }

    public function setId(?int $id): ModelUser {
        $this->id = $id;
        return $this;
    }

    public function getNickname(): ?string {
        return $this->nickname; 
    }

    public function setNickname(?string $nickname): ModelUser {
        $this->nickname = $nickname;
        return $this;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function setEmail(?string $newEmail): ModelUser {
        $this->email = $newEmail;
        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(?string $newPassword): ModelUser {
        $this->password = $newPassword;
        return $this;
    }
}









?>