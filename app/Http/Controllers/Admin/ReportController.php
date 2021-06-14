<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Jimmyjs\ReportGenerator\Facades\PdfReportFacade;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function doctorReport(Request $request)
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $sortBy = $request->input('sort_by');

        $title = 'Registered User Report'; // Report title

        $meta = [ // For displaying filters description on header
            'Registered on' => $fromDate . ' To ' . $toDate,
            'Sort By' => $sortBy
        ];

        $queryBuilder =  Doctor::select(['first_name', 'email', 'created_at']) // Do some querying..

            ->orderBy('created_at');

        $columns = [ // Set Column to be displayed
            'Name' => 'first_name',
            'Created At', // if no column_name specified, this will automatically seach for snake_case of column name (will be registered_at) column from query result
            'Email'
        ];

        // Generate Report with flexibility to manipulate column class even manipulate column value (using Carbon, etc).
        return PdfReportFacade::of($title, $meta, $queryBuilder, $columns)
            ->editColumn('Created Att', [ // Change column class or manipulate its data for displaying to report
                'displayAs' => function ($result) {
                    return $result->created_at->format('d M Y');
                },
                'class' => 'left'
            ])
            ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
                'Total Balance' => 'point' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
            ])
            ->limit(20) // Limit record to be showed
            ->stream(); // other available method: download('filename') to download pdf / make() that will producing DomPDF / SnappyPdf instance so you could do any other DomPDF / snappyPdf method such as stream() or download()
    }
}
