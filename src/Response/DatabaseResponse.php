<?php

namespace AcquiaCloudApi\Response;

class DatabaseResponse
{
    public string $id;
    public string $name;
    // Connection details will be missing without the required permission:
    // "View database connection details (username, password, or hostname)"
    public ?string $user_name;
    public ?string $password;
    public ?string $url;
    public string $db_host;
    public ?string $ssh_host;
    public object $flags;
    public object $environment;

    public function __construct(object $database)
    {
        $this->id = $database->id;
        $this->name = $database->name;
        $this->user_name = $database->user_name ?? null;
        $this->password = $database->password ?? null;
        $this->url = $database->url ?? null;
        $this->db_host = $database->db_host;
        $this->ssh_host = $database->ssh_host ?? null;
        $this->flags = $database->flags;
        $this->environment = $database->environment;
    }
}
