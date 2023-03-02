<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Halo ',
        ];

        return view('admin.pages.dashboard');
    }

    public function autocomplete(Request $request)
    {

        if ($request->ajax()) {
            $output = "";
            $data = Biro::select('biro')->where("biro", "LIKE", "%" . $request->search . "%")->limit(5)->get();
            if ($data) {
                foreach ($data as $key => $item) {
                    $output .= "
                    <div class='search-item'><a href='#'>" . $item->biro . "</a></a></div>
                    ";
                }
            } else {
                $output = "";
            }
        }
        return Response($output);
    }
}
