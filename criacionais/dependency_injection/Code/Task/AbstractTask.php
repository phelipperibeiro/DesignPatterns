<?php

namespace Code\Task;

abstract class AbstractTask implements TaskInterface
{

    public function setDi($di)
    {
        $this->di = $di;
    }

}
