<?php
/**
 * Created by PhpStorm.
 * User: oleksii.khodakivskyi
 * Date: 21.12.18
 * Time: 14:02
 */

class PhoneNumbers {
    private $numbers;

    public function __construct(ModelManager $modelManager) {
        $this->numbers = $modelManager->getNumbers();
    }

    public function getNumbers() {
        return $this->numbers;
    }
}