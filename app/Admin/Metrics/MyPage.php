<?php


namespace App\Admin\Metrics;


use Illuminate\Contracts\Support\Renderable;

class MyPage implements Renderable
{

    public function render()
    {
        return view('admin.pages.my-page')->render();
    }

}
