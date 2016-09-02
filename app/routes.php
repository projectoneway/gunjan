<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array(	
	'as' => 'home',
	'uses' => 'HomeController@home'

	/*'as'=> 'account-sign-in',
	'uses'=> 'AccountController@getSignIn'*/
));

/*
/ Authenticated group
*/
Route::group(array('before' => 'auth'), function() {

    /*
     | Sign Out (GET)
     | --
     */
    Route::get('/account/sign-out', array(
        'as' => 'account-sign-out',
        'uses' => 'AccountController@getSignOut'
    ));
});

/*
/ unauthenticated group
*/

Route::group(array('before' => 'guest'), function(){
		/*
		/ CSRF protection group
		*/	
	Route::group(array('before'=>'csrf'), function(){


				Route::post('/account/create', array(
						'as'=> 'account-create-post',
						'uses'=> 'AccountController@postCreate'
					));
	});

		/*
		/ Sign In account (GET)
		*/

		Route::get('/account/sign-in', array(
			'as'=> 'account-sign-in',
			'uses'=> 'AccountController@getSignIn'
		));

		/*
		/ Sign In account (POST)
		*/

		Route::post('/account/sign-post', array(
			'as'=> 'account-sign-post',
			'uses'=> 'AccountController@postSignIn'
		));

		/*
		/ Create account (GET)
		*/
	
	Route::get('/account/create', array(
			'as'=> 'account-create',
			'uses'=> 'AccountController@getCreate'
		));

	Route::get('/account/activate/{code}', array(
				'as'   => 'account-activate',
				'uses' =>'AccountController@getActivate'
		));

	Route::get('/account/forgotpassword', array(
			'as'=> 'account-forgotpassword',
			'uses'=> 'AccountController@getNewPassword'
		));	

	Route::post('/account/account-forgotpassword-post', array(
			'as'=> 'account-forgotpassword-post',
			'uses'=> 'AccountController@postNewPassword'
		));
});

Route::get('/home', array(
		'as' => 'user-home',
		'uses' => 'UserHomeController@userHome'
	));

// start of Bookkeeper menu list
Route::get('/mktmgr/bookkeeper', array(
		'as' => 'mktmgr-bookkeeper',
		'uses' => 'UserHomeController@bookkeeper'
	));

Route::get('/mktmgr/bookkeeperregister', array(
		'as' => 'mktmgr-bookkeeperregister',
		'uses' => 'UserHomeController@getbookkeeperRegister'
	));
Route::get('/mktmgr/bookkeeperregistertotal', array(
		'as' => 'mktmgr-bookkeeperregistertotal',
		'uses' => 'UserHomeController@getbookkeeperRegistertotal'
	));
Route::get('/mktmgr/bookkeeperregistercmt', array(
		'as' => 'mktmgr-bookkeeperregistercmt',
		'uses' => 'UserHomeController@getbookkeeperRegistercmt'
	));
	Route::get('/mktmgr/bookloanrregister', array(
		'as' => 'mktmgr-bookloanrregister',
		'uses' => 'UserHomeController@getbookloanRegister'
	));
	Route::get('/mktmgr/bookloanrregtotal', array(
		'as' => 'mktmgr-bookloanrregtotal',
		'uses' => 'UserHomeController@getbookloanregTotal'
	));
	
	Route::get('/mktmgr/bookloanrregcmt', array(
		'as' => 'mktmgr-bookloanrregcmt',
		'uses' => 'UserHomeController@getbookloanregCmt'
	));

Route::get('/mktmgr/bookregcheckoutitem', array(
		'as' => 'mktmgr-bookregcheckoutitem',
		'uses' => 'UserHomeController@getbookregcheckoutItem'
	));
	Route::get('/mktmgr/bookregcheckoutreg', array(
		'as' => 'mktmgr-bookregcheckoutreg',
		'uses' => 'UserHomeController@getbookregcheckoutReg'
	));
	
	Route::get('/mktmgr/bookregcheckouttotl', array(
		'as' => 'mktmgr-bookregcheckouttotl',
		'uses' => 'UserHomeController@getbookregcheckoutTotl'
	));
	Route::get('/mktmgr/bookregcheckoutprnt', array(
		'as' => 'mktmgr-bookregcheckoutprnt',
		'uses' => 'UserHomeController@getbookregcheckoutPrnt'
	));
	Route::get('/mktmgr/bookregcheckoutcmt', array(
		'as' => 'mktmgr-bookregcheckoutcmt',
		'uses' => 'UserHomeController@getbookregcheckoutCmt'
	));
	
	
	Route::get('/mktmgr/bookregcmt', array(
		'as' => 'mktmgr-bookregcmt',
		'uses' => 'UserHomeController@getbookregCmt'
	));
	Route::get('/mktmgr/booksafecnt', array(
		'as' => 'mktmgr-booksafecnt',
		'uses' => 'UserHomeController@getbooksafeCnt'
	));
	Route::get('/mktmgr/booksafeprnt', array(
		'as' => 'mktmgr-booksafeprnt',
		'uses' => 'UserHomeController@getbooksafePrnt'
	));
	Route::get('/mktmgr/booksafereport', array(
		'as' => 'mktmgr-booksafereport',
		'uses' => 'UserHomeController@getbooksafeReport'
	));
	Route::get('/mktmgr/booksafereportprnt', array(
		'as' => 'mktmgr-booksafereportprnt',
		'uses' => 'UserHomeController@getbooksafereportPrnt'
	));
	Route::get('/mktmgr/booksafereportcmt', array(
		'as' => 'mktmgr-booksafereportcmt',
		'uses' => 'UserHomeController@getbooksafereportCmt'
	));
	Route::get('/mktmgr/booksafecmt', array(
		'as' => 'mktmgr-booksafecmt',
		'uses' => 'UserHomeController@getbooksafeCmt'
	));
	Route::get('/mktmgr/bookwklycmt', array(
		'as' => 'mktmgr-bookwklycmt',
		'uses' => 'UserHomeController@getbookwklyCmt'
	));
	Route::get('/mktmgr/bookwklyrecap', array(
		'as' => 'mktmgr-bookwklyrecap',
		'uses' => 'UserHomeController@getbookwklyRecap'
	));
	Route::get('/mktmgr/bookwklyprnt', array(
		'as' => 'mktmgr-bookwklyprnt',
		'uses' => 'UserHomeController@getbookwklyPrnt'
	));
	Route::get('/mktmgr/bookwklysales', array(
		'as' => 'mktmgr-bookwklysales',
		'uses' => 'UserHomeController@getbookwklySales'
	));
	Route::get('/mktmgr/bookwklyview', array(
		'as' => 'mktmgr-bookwklyview',
		'uses' => 'UserHomeController@getbookwklyView'
	));
	Route::get('/mktmgr/bookwklyunlock', array(
		'as' => 'mktmgr-bookwklyunlock',
		'uses' => 'UserHomeController@getbookwklyUnlock'
	));
	Route::get('/mktmgr/bookpostageprnt', array(
		'as' => 'mktmgr-bookpostageprnt',
		'uses' => 'UserHomeController@getbookpostagePrnt'
	));
	Route::get('/mktmgr/bookpostageadd', array(
		'as' => 'mktmgr-bookpostageadd',
		'uses' => 'UserHomeController@getbookpostageAdd'
	));
	Route::get('/mktmgr/booklotteryadd', array(
		'as' => 'mktmgr-booklotteryadd',
		'uses' => 'UserHomeController@getbooklotteryAdd'
	));
	Route::get('/mktmgr/booklotterytotl', array(
		'as' => 'mktmgr-booklotterytotl',
		'uses' => 'UserHomeController@getbooklotteryTotl'
	));
	Route::get('/mktmgr/booklotteryprnt', array(
		'as' => 'mktmgr-booklotteryprnt',
		'uses' => 'UserHomeController@getbooklotteryPrnt'
	));
	Route::get('/mktmgr/booklotteryview', array(
		'as' => 'mktmgr-booklotteryview',
		'uses' => 'UserHomeController@getbooklotteryView'
	));
	Route::get('/mktmgr/bookcommuteradd', array(
		'as' => 'mktmgr-bookcommuteradd',
		'uses' => 'UserHomeController@getbookcommuterAdd'
	));
	Route::get('/mktmgr/bookcommuterprnt', array(
		'as' => 'mktmgr-bookcommuterprnt',
		'uses' => 'UserHomeController@getbookcommuterPrnt'
	));
	Route::get('/mktmgr/bookcommutermonthlyadd', array(
		'as' => 'mktmgr-bookcommutermonthlyadd',
		'uses' => 'UserHomeController@getbookcommutermonthlyAdd'
	));
	Route::get('/mktmgr/bookcommutermonthlyprnt', array(
		'as' => 'mktmgr-bookcommutermonthlyprnt',
		'uses' => 'UserHomeController@getbookcommutermonthlyPrnt'
	));
	Route::get('/mktmgr/bookphonecardadd', array(
		'as' => 'mktmgr-bookphonecardadd',
		'uses' => 'UserHomeController@getbookphonecardAdd'
	));
	Route::get('/mktmgr/bookphonecardprnt', array(
		'as' => 'mktmgr-bookphonecardprnt',
		'uses' => 'UserHomeController@getbookphonecardPrnt'
	));
	Route::get('/mktmgr/bookepsadd', array(
		'as' => 'mktmgr-bookepsadd',
		'uses' => 'UserHomeController@getbookepsAdd'
	));
	Route::get('/mktmgr/bookepsprnt', array(
		'as' => 'mktmgr-bookepsprnt',
		'uses' => 'UserHomeController@getbookepsPrnt'
	));
	Route::get('/mktmgr/bookmngmntdaily', array(
		'as' => 'mktmgr-bookmngmntdaily',
		'uses' => 'UserHomeController@getbookmngmntDaily'
	));
	Route::post('/mktmgr/post-bookmngmntdaily', array(
		'as' => 'mktmgr-post-bookmngmntdaily',
		'uses' => 'UserHomeController@postBookmngmntDaily'
	));
	Route::get('/mktmgr/bookmngmntweekly', array(
		'as' => 'mktmgr-bookmngmntweekly',
		'uses' => 'UserHomeController@getbookmngmntWeekly'
	));
	Route::get('/mktmgr/bookmngmntcmt', array(
		'as' => 'mktmgr-bookmngmntcmt',
		'uses' => 'UserHomeController@getbookmngmntCmt'
	));
	Route::get('/mktmgr/bookutilitypymntcnt', array(
		'as' => 'mktmgr-bookutilitypymntcnt',
		'uses' => 'UserHomeController@getbookutilitypymntCnt'
	));
	Route::get('/mktmgr/bookcommentlist', array(
		'as' => 'mktmgr-bookcommentlist',
		'uses' => 'UserHomeController@getbookcommentList'
	));

	Route::get('/mktmgr/bookcommentadd', array(
		'as' => 'mktmgr-bookcommentadd',
		'uses' => 'UserHomeController@bookcommentAdd'
	));

	Route::post('/mktmgr/post-bookcomment', array(
		'as' => 'mktmgr-post-bookcomment',
		'uses' => 'UserHomeController@postBookcomment'
	));

	Route::get('/mktmgr/returnhome', array(
		'as' => 'mktmgr-returnhome',
		'uses' => 'UserHomeController@getBackHome'
	));

	Route::post('/mktmgr/beginloanreg', array(
			'as'   => 'mktmgr-beginloanreg',
			'uses' => 'UserHomeController@postBeginLoanRegister'
		));

	Route::post('/mktmgr/postbeginloanreg', array(
			'as'   => 'mktmgr-postbeginloanreg',
			'uses' => 'UserHomeController@postBeginLoanReg'
		));

	Route::get('/mktmgr/savebeginloanregister', array(
			'as'   => 'mktmgr-savebeginloanregister',
			'uses' =>'UserHomeController@getSaveBeginLoanregister'
		));

	Route::post('/mktmgr/postdategetdata', array(
				'as'   =>'mktmgr-postdategetdata',
				'uses' => 'UserHomeController@postDateGetData'
		));
// end of Bookkeeper menu list

	// Start of receivings menu list

Route::get('/mktmgr/receivings', array(
			'as'   => 'mktmgr-receivings',
			'uses' => 'ReceivingsMenuController@receivings'
	));

Route::get('/mktmgr/receivings-query', array(
			'as'   => 'mktmgr-receivings-query',
			'uses' => 'ReceivingsMenuController@receivingsQuery'
	));

Route::get('/mktmgr/receivings-browse', array(
			'as'   => 'mktmgr-receivings-browse',
			'uses' => 'ReceivingsMenuController@receivingsBrowse'
	));

Route::get('/mktmgr/receivings-update', array(
			'as'   => 'mktmgr-receivings-update',
			'uses' => 'ReceivingsMenuController@receivingsUpdate'
	));

Route::get('/mktmgr/receivings-items', array(
			'as'   => 'mktmgr-receivings-items',
			'uses' => 'ReceivingsMenuController@receivingsItems'
	));

Route::get('/mktmgr/receivings-receivingsofflinereceiving', array(
			'as'   => 'mktmgr-receivings-receivingsofflinereceiving',
			'uses' => 'ReceivingsMenuController@receivingsOfflinereceiving'
	));

Route::get('/mktmgr/receivings-sequery', array(
			'as'   => 'mktmgr-receivings-sequery',
			'uses' => 'ReceivingsMenuController@receivingsSeQuery' 
	));

Route::get('/mktmgr/view-receivings-sequery', array(
			'as'   => 'mktmgr-view-receivings-sequery',
			'uses' => 'ReceivingsMenuController@viewReceivingsSeQuery' 
	));

Route::get('/mktmgr/update-receivings-sequery', array(
			'as'   => 'mktmgr-update-receivings-sequery',
			'uses' => 'ReceivingsMenuController@updateReceivingsSeQuery' 
	));

Route::post('/mktmgr/search-receivings-sequery', array(
			'as'   => 'mktmgr-search-receivings-sequery',
			'uses' => 'ReceivingsMenuController@searchReceivingsSeQuery' 
	));

Route::post('/mktmgr/post-receivings-sequery', array(
			'as'   => 'mktmgr-post-receivings-sequery',
			'uses' => 'ReceivingsMenuController@postReceivingsSeQuery' 
	));

Route::get('/mktmgr/receivings-sebrowse', array(
			'as'   => 'mktmgr-receivings-sebrowse',
			'uses' => 'ReceivingsMenuController@receivingsSeBrowse' 
	));

/*
Route::get('/mktmgr/receivings-receivingsseupdate', array(
			'as'   => 'mktmgr-receivings-receivingsseupdate',
			'uses' => 'ReceivingsMenuController@receivingsSeUpdate' 
	));
*/
Route::get('/mktmgr/receivings-sebrowse', array(
			'as'   => 'mktmgr-receivings-sebrowse',
			'uses' => 'ReceivingsMenuController@receivingsSeBrowse' 
	));

Route::get('/mktmgr/receivings-sereports', array(
			'as'   => 'mktmgr-receivings-sereports',
			'uses' => 'ReceivingsMenuController@receivingsSeReports' 
	));

Route::post('/mktmgr/post-receivings-sereports', array(
			'as'   => 'mktmgr-post-receivings-sereports',
			'uses' => 'ReceivingsMenuController@postReceivingsSeReports' 
	));

Route::get('/mktmgr/receivings-receivingsseupdate', array(
			'as'   => 'mktmgr-receivings-receivingsseupdate',
			'uses' => 'ReceivingsMenuController@receivingsSeUpdate' 
	));

/*
Route::get('/mktmgr/receivings-receivingsseupdate', array(
			'as'   => 'mktmgr-receivings-receivingsseupdate',
			'uses' => 'ReceivingsMenuController@receivingsSeUpdate' 
	));
*/
Route::post('/mktmgr/vendorlist', array(
			'as'   => 'vendorlist',
			'uses' => 'ReceivingsMenuController@vendorListByDeptID'
	));

Route::post('mktmgr/vendor-databydate', array(
			'as'	=> 'mktmgr-vendor-databydate',
			'uses'  => 'ReceivingsMenuController@postVendorDataByDate' 
	));

 // end of receivings menu list

// Start of shrinkcapturereview menu list


Route::get('/mktmgr/shrinkcapturereview', array(
			'as'   => 'mktmgr-shrinkcapturereview',
			'uses' => 'ReceivingsMenuController@shrinkCaptureReview' 
	));

Route::post('/mktmgr/shrinkcapturereviewdate', array(
			'as'   => 'mktmgr-shrinkcapturereviewdate',
			'uses' => 'ReceivingsMenuController@postshrinkCaptureReviewDate' 
	));

Route::get('/mktmgr/receivings-receivingslogexpense', array(
			'as'   => 'mktmgr-receivings-receivingslogexpense',
			'uses' => 'ReceivingsMenuController@getReceivingsLogExpense' 
	));

Route::post('/mktmgr/post-receivings-receivingslogexpense', array(
			'as'   => 'mktmgr-post-receivings-receivingslogexpense',
			'uses' => 'ReceivingsMenuController@postReceivingsLogExpense' 
	));

Route::get('/mktmgr/report-weeklyreport', array(
			'as'   => 'mktmgr-report-weeklyreport',
			'uses' => 'ReceivingsMenuController@getWeeklyReport' 
	));
Route::post('/mktmgr/post-report-weeklyreport', array(
			'as'   => 'mktmgr-post-report-weeklyreport',
			'uses' => 'ReceivingsMenuController@postWeeklyReport' 
	));
Route::get('/mktmgr/report-browse-weeklyreport', array(
			'as'   => 'mktmgr-browse-report-weeklyreport',
			'uses' => 'ReceivingsMenuController@browseWeeklyReport' 
	));

Route::get('/mktmgr/report-storeinvoice', array(
			'as'   => 'mktmgr-report-storeinvoice',
			'uses' => 'ReceivingsMenuController@getStoreInvoice' 
	));
Route::post('/mktmgr/report-post-storeinvoice', array(
			'as'   => 'mktmgr-post-report-storeinvoice',
			'uses' => 'ReceivingsMenuController@postStoreInvoice' 
	));

Route::get('/mktmgr/report-costdiscrepancyreport', array(
			'as'   => 'mktmgr-report-costdiscrepancyreport',
			'uses' => 'ReceivingsMenuController@getCostDiscrepancyReport' 
	));
Route::post('/mktmgr/report-post-costdiscrepancyreport', array(
			'as'   => 'mktmgr-post-report-costdiscrepancyreport',
			'uses' => 'ReceivingsMenuController@postCostDiscrepancyReport' 
	));
Route::get('/mktmgr/report-offlinereport', array(
			'as'   => 'mktmgr-report-offlinereport',
			'uses' => 'ReceivingsMenuController@getOfflineReport' 
	));

Route::post('/mktmgr/report-post-offlinereport', array(
			'as'   => 'mktmgr-post-report-offlinereport',
			'uses' => 'ReceivingsMenuController@postOfflineReport' 
	));

Route::get('/mktmgr/report-browse-offlinereport', array(
			'as'   => 'mktmgr-browse-report-offlinereport',
			'uses' => 'ReceivingsMenuController@browseOfflineReport' 
	));

Route::get('/mktmgr/report-transportlisting', array(
			'as'   => 'mktmgr-report-transportlisting',
			'uses' => 'ReceivingsMenuController@getTransportlistingReport' 
	));

Route::post('/mktmgr/report-costdiscrepancysearchreport', array(
			'as'   => 'mktmgr-report-costdiscrepancysearchreport',
			'uses' => 'ReceivingsMenuController@postCostDiscrepancySearchReport' 
	));

Route::get('/mktmgr/DEX-invoicedate', array(
			'as'   => 'mktmgr-DEX-invoicedate',
			'uses' => 'ReceivingsMenuController@getDexInvoiceDate' 
	));

Route::post('/mktmgr/Offline-Receiving', array(
			'as'   => 'mktmgr-Offline-Receiving',
			'uses' => 'ReceivingsMenuController@postOfflineReceiving' 
	)); 

Route::post('/mktmgr/DEX-post-invoicedate', array(
			'as'   => 'mktmgr-post-DEX-invoicedate',
			'uses' => 'ReceivingsMenuController@postDexInvoiceDate' 
	));

Route::get('/mktmgr/browse-vendor', array(
			'as'   => 'mktmgr-browse-vendor',
			'uses' => 'ReceivingsMenuController@browseVendor' 
	));

Route::any('/mktmgr/Query-Receiving', array(
			'as'   => 'mktmgr-Query-Receiving',
			'uses' => 'ReceivingsMenuController@postQueryReceiving' 
	)); 
Route::any('/mktmgr/post-queryresult', array(
			'as'   => 'mktmgr-post-queryresult',
			'uses' => 'ReceivingsMenuController@postQueryReceiving' 
		   ));
// End of shrinkcapturereview menu list

// Start of nonperishableinvprepview menu list

Route::get('/mktmgr/nonperishableinvprepview', array(
			'as'   => 'mktmgr-nonperishableinvprepview',
			'uses' => 'NonPerishableMenuController@nonPerishableInvPrepview'
	));

Route::get('/mktmgr/noninvdeptinfo', array(
			'as'	=>'mktmgr-noninvdeptinfo',
			'uses'  =>'NonPerishableMenuController@getnonPerishableInvDeptInfo'
	));

Route::post('/mktmgr/nonmoreinfoseldate', array(
			'as'	=>'mktmgr-nonmoreinfoseldate',
			'uses'  =>'NonPerishableMenuController@postNonMoreInfoSelDate'
	));

// End of nonperishableinvprepview menu list

Route::get('/mktmgr/storeorderview', array(
			'as'   => 'mktmgr-storeorderview',
			'uses' => 'StoreOrderViewController@storeOrderview'
	));

Route::get('/mktmgr/storetransfersview', array(
			'as'	=> 'mktmgr-storetransfersview',
			'uses'  => 'StoreTransfersControler@storeTransfersview'
	));

Route::get('/mktmgr/aditemordering', array(
		'as'   => 'mktmgr-aditemordering',
		'uses' => 'StoreOrderViewController@getAdItemOrdering'
	));

Route::get('/mktmgr/aditemrelease', array(
		'as'   => 'mktmgr-aditemrelease',
		'uses' => 'StoreOrderViewController@getAdItemRelease'
	));

Route::get('/mktmgr/aditemdsd', array(
		'as'   => 'mktmgr-aditemdsd',
		'uses' => 'StoreOrderViewController@getAdItemDsd'
	));

Route::get('/mktmgr/codeditemquery', array(
		'as'   => 'mktmgr-codeditemquery',
		'uses' => 'StoreOrderViewController@getCodedItemQuery'
	));

Route::get('/mktmgr/codeditembrowser', array(
		'as'   => 'mktmgr-codeditembrowser',
		'uses' => 'StoreOrderViewController@getCodedItemBrowse'
	));

Route::get('/mktmgr/editwarninglimits', array(
		'as'   => 'mktmgr-editwarninglimits',
		'uses' => 'StoreOrderViewController@getEditWarningLimits'
	));

Route::get('/mktmgr/storeholidayorders', array(
		'as'   => 'mktmgr-storeholidayorders',
		'uses' => 'StoreOrderViewController@getStoreHolidayOrders'		
	));

Route::get('/mktmgr/outofstockquery', array(
		'as'   => 'mktmgr-outofstockquery',
		'uses' => 'StoreOrderViewController@getOutOfStockQuery'		
	));

Route::get('/mktmgr/outofstockbrowse', array(
		'as'   => 'mktmgr-outofstockbrowse',
		'uses' => 'StoreOrderViewController@getOutOfStockBrowse'		
	));

Route::get('/mktmgr/plusoutbrowse', array(
		'as'   => 'mktmgr-plusoutbrowse',
		'uses' => 'StoreOrderViewController@getPlusOutBrowse'		
	));

Route::get('/mktmgr/plusoutitem', array(
		'as'   => 'mktmgr-plusoutitem',
		'uses' => 'StoreOrderViewController@getPlusOutItem'		
	));

Route::get('/mktmgr/printorderquery', array(
		'as'   => 'mktmgr-printorderquery',
		'uses' => 'StoreOrderViewController@getPrintOrderQuery'		
	));

Route::get('/mktmgr/printorderbrowser', array(
		'as'   => 'mktmgr-printorderbrowser',
		'uses' => 'StoreOrderViewController@getPrintOrderBrowse'		
	));

Route::get('/mktmgr/printorderdetails', array(
		'as'   => 'mktmgr-printorderdetails',
		'uses' => 'StoreOrderViewController@getPrintOrderdetails'		
	));

Route::get('/mktmgr/storetransfersquery', array(
		'as'   => 'mktmgr-storetransfersquery',
		'uses' => 'StoreTransfersControler@getStoreTransfersQuery'		
	));

Route::get('/mktmgr/storetransfersbrowse', array(
		'as'   => 'mktmgr-storetransfersbrowse',
		'uses' => 'StoreTransfersControler@getStoreTransfersBrowse'		
	));

Route::get('/mktmgr/storetransfersupdate', array(
		'as'   => 'mktmgr-storetransfersupdate',
		'uses' => 'StoreTransfersControler@getStoreTransfersUpdate'		
	));

Route::get('/mktmgr/storetransfersitems', array(
		'as'   => 'mktmgr-storetransfersitems',
		'uses' => 'StoreTransfersControler@getStoreTransfersItems'		
	));

Route::get('/mktmgr/storetransfersoperators', array(
		'as'   => 'mktmgr-storetransfersoperators',
		'uses' => 'StoreTransfersControler@getStoreTransfersOperators'		
	));
Route::get('/mktmgr/storetransferweeklyreport', array(
		'as'   => 'mktmgr-storetransferweeklyreport',
		'uses' => 'StoreTransfersControler@getStoreTransfersWeeklyreport'		
	));

Route::get('/mktmgr/storetransferhardcopy', array(
		'as'   => 'mktmgr-storetransferhardcopy',
		'uses' => 'StoreTransfersControler@getStoreTransferHardcopy'		
	));

Route::get('/mktmgr/storetransfersweeklystatus', array(
		'as'   => 'mktmgr-storetransfersweeklystatus',
		'uses' => 'StoreTransfersControler@getStoreTransfersWeeklyStatus'		
	));

Route::get('/mktmgr/storetransfersoperators', array(
		'as'   => 'mktmgr-storetransfersoperators',
		'uses' => 'StoreTransfersControler@getStoreTransfersOperators'		
	));

Route::get('/sign1/signs', array(
		'as'   => 'sign1-signs',
		'uses' => 'SignsController@getSigns'		
	));



// start of the user socscn01

Route::get('/socscn01/socdeptfunctions', array(
		'as'   => 'socscn01-socdeptfunctions',
		'uses' => 'UserSocscn01Controller@getsocDeptfunctions'		
	));
Route::get('/socscn01/socreports', array(
		'as'   => 'socscn01-socreports',
		'uses' => 'UserSocscn01Controller@getsocReports'		
	));

Route::get('/socscn01/socdsdreceiving', array(
		'as'   => 'socscn01-socdsdreceiving',
		'uses' => 'UserSocscn01Controller@getsocdsdReceiving'		
	));

Route::get('/socscn01/socretailpricechk', array(
		'as'   => 'socscn01-socretailpricechk',
		'uses' => 'UserSocscn01Controller@getsocRetailpricechk'		
	));
Route::get('/socscn01/socqueryitem', array(
		'as'   => 'socscn01-socqueryitem',
		'uses' => 'UserSocscn01Controller@getsocQueryitem'		
	));
Route::get('/socscn01/socstoretransfer', array(
		'as'   => 'socscn01-socstoretransfer',
		'uses' => 'UserSocscn01Controller@getsocStoretransfer'		
	));
Route::get('/socscn01/socpricesaleschk', array(
		'as'   => 'socscn01-socpricesaleschk',
		'uses' => 'UserSocscn01Controller@getsocPricesaleschk'		
	));
Route::get('/socscn01/returnhome', array(
		'as'   => 'socscn01-returnhome',
		'uses' => 'UserSocscn01Controller@getReturnhome'		
	));
// end of the user socscn01

//start of  user slcadm03
Route::get('/slcadm03/returnhome', array(
			'as'	=>'slcadm03-returnhome',
			'uses'  =>'UserSlcadm03Controller@getReturnHome'
	));

Route::get('/slcadm03/emailhelpdesk', array(
			'as'   => 'slcadm03-emailhelpdesk',
			'uses' => 'UserSlcadm03Controller@getEmailhelpdesk'
	));

Route::get('/slcadm03/displaybatch', array(
			'as'   => 'slcadm03-displaybatch',
			'uses' => 'UserSlcadm03Controller@getDisplayBatch'
	));

Route::get('/slcadm03/batchtags', array(
			'as'   => 'slcadm03-batchtags',
			'uses' => 'UserSlcadm03Controller@getBatchTags'
	));

Route::get('/slcadm03/batchpos', array(
			'as'   => 'slcadm03-batchpos',
			'uses' => 'UserSlcadm03Controller@getBatchPos'
	));
Route::get('/slcadm03/reprinttags', array(
			'as'   => 'slcadm03-reprinttags',
			'uses' => 'UserSlcadm03Controller@getReprintTags'
	));

Route::get('/slcadm03/summarypage', array(
			'as'   => 'slcadm03-summarypage',
			'uses' => 'UserSlcadm03Controller@getSummaryPage'
	));
Route::get('/slcadm03/restorepage', array(
			'as'   => 'slcadm03-restorepage',
			'uses' => 'UserSlcadm03Controller@getRestorePage'
	));
Route::get('/slcadm03/displayreportcode', array(
			'as'   => 'slcadm03-displayreportcode',
			'uses' => 'UserSlcadm03Controller@getDisplayReportCode'
	));
Route::get('/slcadm03/itemlookup', array(
			'as'   => 'slcadm03-itemlookup',
			'uses' => 'UserSlcadm03Controller@getItemLookup'
	));
//end of user slcadm03

// Start for slcscno1 user //

Route::get('/slcscn01/slcslic', array(
		'as'   => 'slcscn01-slcslic',
		'uses' => 'UserSlcscn01Controller@getslcSlic'		
	));
Route::get('/slcscn01/slcaislescan', array(
		'as'   => 'slcscn01-slcaislescan',
		'uses' => 'UserSlcscn01Controller@getslcAislescan'		
	));
Route::get('/slcscn01/slcqueryitem', array(
		'as'   => 'slcscn01-slcqueryitem',
		'uses' => 'UserSlcscn01Controller@getslcQueryitem'		
	));

Route::get('/slcscn01/slctagupdtqry', array(
		'as'   => 'slcscn01-slctagupdtqry',
		'uses' => 'UserSlcscn01Controller@getslcTagupdtqry'		
	));
Route::get('/slcscn01/slcapplybatch', array(
		'as'   => 'slcscn01-slcapplybatch',
		'uses' => 'UserSlcscn01Controller@getslcApplybatch'		
	));
// End for slcscno1 user //


//start of user bkpfst //

Route::get('/bkpfst/returnhome', array(
		'as' => 'bkpfst-returnhome',
		'uses' => 'UserBkpfstController@getBackHome'
	));

Route::get('/bkpfst/bookkeeper1st', array(
		'as' => 'bkpfst-bookkeeper1st',
		'uses' => 'UserBkpfstController@getBookkeeper1st'
	));
Route::get('/bkpfst/bkpfstfsaisle1', array(
			'as'   => 'bkpfst-bkpfstfsaisle1',
			'uses' => 'BkpfstController@getFsaisle1'
	));
Route::get('/bkpfst/bkpfstfsmainstore', array(
			'as'   => 'bkpfst-bkpfstfsmainstore',
			'uses' => 'BkpfstController@getFsmainstore'
	));
Route::get('/bkpfst/bkpfstlogintoaisle1', array(
			'as'   => 'bkpfst-bkpfstlogintoaisle1',
			'uses' => 'BkpfstController@getLogintoaisle1'
	));
Route::get('/bkpfst/bkpfstreceivings', array(
			'as'   => 'bkpfst-bkpfstreceivings',
			'uses' => 'BkpfstController@getReceivings'
	));
	

/*
Route::post('vendorlist', function(){
	
	if(Request::ajax()){
			return "call made successfully";
	}
});
*///end of user bkpfst //