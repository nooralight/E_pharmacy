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

    public function search_Name1(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $drugs = Drug::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('brand', 'LIKE', "%{$search}%")
            ->get();
        print(gettype($drugs));
        // Return the search view with the resluts compacted
        return view('drugs.search_Name1', compact('drugs'));
    }

    public function search_Brand1(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $drugs = Drug::query()
            ->where('brand', 'LIKE', "%{$search}%")
            ->get();
        print(gettype($drugs));
        // Return the search view with the resluts compacted
        return view('drugs.search_Brand1', compact('drugs'));
    }


}


