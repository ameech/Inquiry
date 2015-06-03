<?php namespace Inquire;

/**
 * Class Inquire
 *
 * @package Inquire
 */
class Inquire {

    /**
     * @var \PDO
     */
    public $pdo;

    /**
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
}