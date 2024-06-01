<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFDataController extends Controller
{
    public function downloadPDF() {
        $events = Event::all()->sortBy('start_date');


        $pdf = PDF::loadView('pdf', compact('events'))->save('timeline.pdf');
        return $pdf->download('timeline.pdf');
    }
}
