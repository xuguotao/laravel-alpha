<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test_a', function(\Illuminate\Http\Request $request) {
    xhprof_enable();
    print_r($request->input());
    $xhprofData = xhprof_disable();
    require '/Users/xuguotao/www/xhprof/xhprof_lib/utils/xhprof_lib.php';
    require '/Users/xuguotao/www/xhprof/xhprof_lib/utils/xhprof_runs.php';

    $xhprofRuns = new XHProfRuns_Default();
    $runId = $xhprofRuns->save_run($xhprofData, 'xhprof_test');

    echo 'http://localhost/xhprof/xhprof_html/index.php?run=' . $runId . '&source=xhprof_test';
    return "this is test_a for get";
});

Route::post('/test_a', function(\Illuminate\Http\Request $request) {
    print_r($request->input());
    return "this is test_a for post";
});

Route::get('/test_b', function(\Illuminate\Http\Request $request) {
    print_r($request->input());
    return "this is test_b for post";
});

Route::get('/test_c', function(\Illuminate\Http\Request $request) {
    print_r($request->input());
    return "this is test_c for post";
});

Route::group(['namespace' => 'Cookbook', 'prefix' => 'cookbook'], function(){
    Route::get('config', 'ConfigController@index');
});
