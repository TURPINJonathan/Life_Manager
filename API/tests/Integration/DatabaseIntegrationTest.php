<?php

declare(strict_types=1);

use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase;

class DatabaseIntegrationTest extends TestCase
{
    private $pdo;

    protected function setUp(): void
    {
        if (file_exists(__DIR__ . '/../../.env.test')) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../', '.env.test');
            $dotenv->load();
        }

        $this->pdo = new PDO(
            'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'],
            $_ENV['DB_USER'],
            $_ENV['DB_PASS']
        );
    }

    public function testDatabaseConnection()
    {
        $this->assertInstanceOf(PDO::class, $this->pdo);
    }

    // TODO Uncomment and replace 'your_table_name' with the name of one table
    // public function testTablesExist()
    // {
    //     $result = $this->pdo->query("SHOW TABLES LIKE 'your_table_name'");
    //     $this->assertNotFalse($result->fetch());
    // }
}
