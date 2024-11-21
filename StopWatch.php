<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = round(microtime(true) * 1000); // Lấy thời gian hiện tại (milisecond)
    }

    public function start()
    {
        $this->startTime = round(microtime(true) * 1000);
    }

    public function stop()
    {
        $this->endTime = round(microtime(true) * 1000);
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
