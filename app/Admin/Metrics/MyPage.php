<?php


namespace App\Admin\Metrics;


use Illuminate\Contracts\Support\Renderable;

class MyPage implements Renderable
{

    public function render()
    {
        $data = ['name'=>'my-page'];
        return view('admin.pages.my-page')->with($data)->render();
    }

}
