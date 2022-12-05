Route::get('/v2/cmsgtemplate', 'CmsgtemplateController@index')->name('get_cmsgtemplate');
Route::post('/v2/cmsgtemplate', 'CmsgtemplateController@index')->name('post_cmsgtemplate');
Route::get('/v2/cevent/about', 'CeventController@about')->name('get_cevent_about');