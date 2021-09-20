<?php

namespace App\Helpers\Sonnys;

interface ExamBuilderInterface {

    public function initAll(array $attributes);

    public function setTime($time = NULL);

    public function setPlace($place);

    public function setTimeLimit($limit);

    public function getExam();

}

