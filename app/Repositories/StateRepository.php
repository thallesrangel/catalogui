<?php

namespace App\Repositories;

use App\Models\State;

class StateRepository
{
    protected $states;

    public function __construct(State $states)
    {
        $this->states = $states;
    }

    public function get()
    {
  
        return $this->states->get();
    }
}