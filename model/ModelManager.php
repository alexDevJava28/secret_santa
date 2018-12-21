<?php
/**
 * Created by PhpStorm.
 * User: oleksii.khodakivskyi
 * Date: 21.12.18
 * Time: 13:33
 */

class ModelManager {
    private $numbers;

    public function __construct(ModelInterface $model) {
        $this->numbers = $model->getAll();
    }

    public function getNumbers() {
        return $this->numbers;
    }
}