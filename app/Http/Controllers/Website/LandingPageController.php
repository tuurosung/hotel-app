<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Rooms\RoomType;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $this->fetchData();
        return view('website.landing', $data);
    }


    protected function fetchData(): array
    {
        return [
            'roomTypes' => RoomType::all()
        ];
    }
}
