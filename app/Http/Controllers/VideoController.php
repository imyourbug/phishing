<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Language;
use App\Models\Setting;
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

class VideoController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('admin.video.list');
    }
}
