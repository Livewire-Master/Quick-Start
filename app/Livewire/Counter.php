<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
    /**
     * Count of clicks
     *
     * @var int $count
     */
    public int $count = 0;

    /**
     * Increment the count
     *
     * @return void
     */
    public function increment(): void
    {
        $this->count++;
    }

    /**
     * Decrement the count
     *
     * @return void
     */
    public function decrement(): void
    {
        $this->count--;
    }

    /**
     * Render the component view
     *
     * @return View
     */
    public function render(): View
    {
        return view('livewire.counter');
    }
}
