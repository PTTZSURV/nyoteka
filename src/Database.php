<?php
/**
 * Database Connection Class
 */

declare(strict_types=1);

namespace App;

class Database
{
    private \mysqli $connection;

    public function __construct(
        string $host,
        string $username,
        string $password,
        string $database
    ) {
        $this->connection = new \mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            throw new \RuntimeException('Database connection failed: ' . $this->connection->connect_error);
        }

        $this->connection->set_charset('utf8mb4');
    }

    public function query(string $sql, array $params = []): \mysqli_result|bool
    {
        if (empty($params)) {
            return $this->connection->query($sql);
        }

        $stmt = $this->connection->prepare($sql);
        if (!$stmt) {
            throw new \RuntimeException('Prepare failed: ' . $this->connection->error);
        }

        $types = $this->getParamTypes($params);
        $stmt->bind_param($types, ...$params);
        
        if (!$stmt->execute()) {
            throw new \RuntimeException('Execute failed: ' . $stmt->error);
        }

        return $stmt->get_result();
    }

    public function exec(string $sql, array $params = []): int
    {
        $result = $this->query($sql, $params);
        return $this->connection->affected_rows;
    }

    public function lastInsertId(): int
    {
        return (int) $this->connection->insert_id;
    }

    private function getParamTypes(array $params): string
    {
        $types = '';
        foreach ($params as $param) {
            if (is_int($param)) {
                $types .= 'i';
            } elseif (is_float($param)) {
                $types .= 'd';
            } else {
                $types .= 's';
            }
        }
        return $types;
    }

    public function getConnection(): \mysqli
    {
        return $this->connection;
    }

    public function close(): void
    {
        $this->connection->close();
    }
}
