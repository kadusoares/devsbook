<?php
namespace src;

class Config {
    const BASE_DIR = '/devesbook/public';

    const DB_DRIVER = 'mysql';
    const DB_HOST = 'localhost:3306';
    const DB_DATABASE = 'devsbook';
    CONST DB_USER = 'root';
    const DB_PASS = 'root';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}