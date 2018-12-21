<?php
/**
 * Created by PhpStorm.
 * User: oleksii.khodakivskyi
 * Date: 21.12.18
 * Time: 13:51
 */

class ModelArray implements ModelInterface {
    private $data_path;

    public function __construct(string $path) {
        $this->data_path = __DIR__ . DIRECTORY_SEPARATOR . '..' . $path;
    }

    public function getAll() {
        $numbers = include($this->data_path);

        return $numbers;
    }
}