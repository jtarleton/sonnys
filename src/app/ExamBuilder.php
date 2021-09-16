<?php

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

$emptyExam = new Exam();
$examBuilder = new ExamBuilder($emptyExam);

$fullyInitializedExam = $examBuilder->initAll($attributes);
$partiallyIntitializedExam = $examBuilder->setTime()->setPlace()->getExam();

