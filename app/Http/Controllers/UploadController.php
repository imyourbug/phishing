<?php

namespace App\Http\Controllers;

use App\Constant\GlobalConstant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

class UploadController extends Controller
{
    //
    public function upload(Request $request)
    {
        $url = '';
        if ($request->hasFile('file')) {
            try {
                $request->validate([
                    'file' =>  'mimes:gif',
                ]);
                $file_name = date('H-i-s') . $request->file('file')->getClientOriginalName();
                $pathFull = 'upload/' . date('Y-m-d');
                $request->file('file')->storeAs(
                    $pathFull,
                    $file_name
                );
                $url = '/storage/' . $pathFull . '/' . $file_name;
            } catch (Throwable $e) {
                return response()->json([
                    'status' => 1,
                    'message' => $e->getMessage()
                ]);
            }
        }

        return response()->json([
            'status' => 0,
            'url' => $url
        ]);
    }
}
