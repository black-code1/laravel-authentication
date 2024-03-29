<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewFirstComponent extends Component
{
    public $name;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.new-first-component',[
            'tags' => $this->getTags()
        ]);
    }

    public function getTags()
    {
      return [
          'HTML',
          'PHP',
          'Javacript'
      ];  
    }
}
