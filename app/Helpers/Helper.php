<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Str;

class Helper
{
    public static function generateRandomString()
    {
        $randomString = 'client_' . Str::random(10); // Menggunakan helper Str untuk menghasilkan string acak sepanjang 10 karakter
        return $randomString;
    }

    public static function generateSalesInvoice()
    {
        $date = date('d');
        $month = date('m');
        $year = date('Y');
        $time = date('H:i:s');
        $timeWithoutColon = str_replace(':', '', $time);
        $prefix = 'S-';
        return $prefix.$date.$month.$year.'-'.$timeWithoutColon.'-'.rand(1, 100);
    }

    public static function formatDate($date, $format = 'j F Y H:i:s') {
        $carbonDate = Carbon::parse($date);
        return $carbonDate->format($format);
    }
}
