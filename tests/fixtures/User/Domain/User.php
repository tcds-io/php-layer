<?php

declare(strict_types=1);

namespace Tcds\Io\Player\fixtures\User\Domain;

class User
{
    public string $id;
    public string $name;
    public string $email;
    public string $password;

    public function __construct(string $id, string $email, string $password,)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }
}
