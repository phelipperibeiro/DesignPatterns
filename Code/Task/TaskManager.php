<?php

namespace Code\Task;

class TaskManager
{

    public function __construct($di)
    {
        $this->di = $di;
    }

    /*
     * @var TaskInterface[]
     */
    protected $tasks = [];

    public function addTask(AbstractTask $task)
    {
        $task->setDi($this->di);
        $this->tasks[] = $task;
    }

    public function run()
    {
        foreach ($this->tasks as $task) {
            $task->run();
        }
    }

}
