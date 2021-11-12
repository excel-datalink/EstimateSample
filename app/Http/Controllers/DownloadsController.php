<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
    public function index(){
        return view('downloads.download');
    }

    public function download2(Request $request, Response $response)
    {
        if ($request->has('download')) {
            // ダウンロードするファイル
            $filePath = 'private/EstimateSample.zip';
            $fileName = 'EstimateSample.zip';
            $mimeType = Storage::mimeType($filePath);
            $headers = [['Content-Type' => $mimeType]];

            return Storage::download($filePath, $fileName, $headers);

        } elseif ($request->has('cancel')) {
            return redirect()->route('home');

        } else {
            return redirect()->route('home');
        }
    }
}
