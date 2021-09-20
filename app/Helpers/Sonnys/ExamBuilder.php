<?php
namespace App\Helpers\Sonnys;

use App\Helpers\Sonnys\Exam;
use App\Helpers\Sonnys\ExamBuilderInterface;

/**
 * ExamBuilder to assist in Exam object creation
 */
class ExamBuilder implements ExamBuilderInterface {
    private $exam;
    public function __construct(Exam $exam) {
        $this->exam = $exam;
    }
    public function initAll(array $attributes) {
        $this->exam->setAttributes($attributes);
        return $this;
    }
    // Returns the current instance only to allow method chaining.
    public function setTime($time = NULL) {
        if (!isset($time)) {
            $time = time();
        }
        $this->exam->time = $time;
        return $this;
    } 
    public function setPlace($place) {
        $this->exam->place = $place;
        return $this;
    } 
    public function setTimeLimit($limit) {
        $this->exam->timeLimit = $limit;
        return $this;
    } 
    public function getExam() {
        return $this->exam;
    }
}



