<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DefaultLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '' ,
        public  $categories = []
    )
    {
        $this->getCategories();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.default-layout');
    }

    private function getCategories() : void
    {
        $this->categories = Category::GetParents()->take(10)->get();
    }

}
