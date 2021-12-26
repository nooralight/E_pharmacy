<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class SearchController extends Controller
{

    
    public function search_Name(Request $request)
    {
        if($request->ajax())
        {
            $data = Drug::where('name', 'LIKE', $request->search.'%')->get();
       
            $output = '';
            if(count($data)>0)
            {
                foreach ($data as $row) {
                    $output.='<tr>'.
                    '<td>'.$row->id.'</td>'.
                    '<td>'.$row->name.'</td>'.
                    '<td>'.$row->brand.'</td>'.
                    '<td>'.$row->mg.'</td>'.
                    '<td>'.$row->quantity.'</td>'.
                    '</tr>';
                }
                return ($output);
            }
            else{
                $output .= '<p>No result</p>';
                return ($output);
            }
            
        }
    }


    public function search_Brand(Request $request)
    {
        if($request->ajax())
        {
            $data = Drug::where('brand', 'LIKE', $request->search.'%')->get();
       
            $output = '';
            if(count($data)>0)
            {
                foreach ($data as $row) {
                    $output.='<tr>'.
                    '<td>'.$row->id.'</td>'.
                    '<td>'.$row->name.'</td>'.
                    '<td>'.$row->brand.'</td>'.
                    '<td>'.$row->mg.'</td>'.
                    '<td>'.$row->quantity.'</td>'.
                    '</tr>';
                }
                return ($output);
            }
            else{
                $output .= '<p>No result</p>';
                return ($output);
            }
            
        }
    }
}


