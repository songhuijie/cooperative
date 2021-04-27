<?php
use Dompdf\Dompdf;
use Dompdf\Options;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/admin/index');
    return view('welcome');
});
Route::get('/test3','TestController@index');

Route::get('/test2',function(){

    $data = ['name'=>'捷大哥'];


    $pdf = \Illuminate\Support\Facades\App::make('dompdf.wrapper');
    $pdf->loadView('pdf', $data);
    return $pdf->download('invoice.pdf');

});
Route::get('/test', function () {

    // reference the Dompdf namespace


    $options = new Options();
    $options->setDefaultFont('canger');
// instantiate and use the dompdf class
    $dompdf = new Dompdf($options);

    $html = htmlspecialchars_decode(view('pdf',['name'=>'捷大哥']));


    $dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
    $dompdf->render();

// Output the generated PDF to Browser
    $dompdf->stream('test.pdf',array("Attachment"=>false));
});
