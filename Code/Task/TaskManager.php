<?php

namespace Code\Task;

class TaskManager
{

    /*
     * @var TaskInterface[]
     */
    protected $tasks = [];

    public function addTask(TaskInterface $task)
    {
        $this->tasks[] = $task;
    }

    public function run()
    {
        foreach ($this->tasks as $task) {
            $task->run();
        }
    }

}
