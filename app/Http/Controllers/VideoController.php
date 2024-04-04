<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Language;
use App\Models\Setting;
use App\Models\Video;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Throwable;
use Toastr;

class VideoController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $size = 10;

        return view('admin.video.list', [
            'videos' => Video::paginate($size)
        ]);
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'link' => 'required|string',
                'active' => 'required|in:0,1',
            ]);

            Video::create($data);
            Toastr::success('Add successfully', 'Success');
        } catch (Throwable $th) {
            Toastr::error($th->getMessage(), 'Fail');
        }
        return redirect()->back();
    }

    public function update(Request $request)
    {
        try {
            $data = $request->validate([
                'id' => 'required|integer',
                'link' => 'required|string',
                'active' => 'required|in:0,1',
            ]);

            Video::where('id', $data['id'])->update([
                'link' => $data['link'],
                'active' => $data['active'],
            ]);
            Toastr::success('Update successfully', 'Success');
        } catch (Throwable $th) {
            Toastr::error($th->getMessage(), 'Fail');
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $size = 10;

        return view('admin.video.edit', [
            'videos' => Video::paginate($size),
            'video' => Video::firstWhere('id', $id),
        ]);
    }

    public function destroy(Request $request)
    {
        try {
            Video::firstWhere('id', $request->id)->delete();

            return response()->json([
                'status' => 0,
            ]);
        } catch (Throwable $e) {
            return response()->json([
                'status' => 1,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function getActiveVideo()
    {
        return response()->json([
            'status' => 0,
            'videos' => Video::where('active', 1)->get()
        ]);
    }
}
