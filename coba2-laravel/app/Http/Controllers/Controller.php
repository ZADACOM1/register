<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * File controller ini berperan sebagai file index controller
 * Juga sebagai pengatur controller lain. tanpa file ini proses import dan eksekusi controller tidak dapat dilakukan
 * Jadi buat controller lain untuk fungsi lain, file ini jangan diubah
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
