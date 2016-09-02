<?php 

/**
* 
*/
/*namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;*/

class ReceivingsMenuController extends BaseController
{
	
	public function receivings()
	{
		return View::make('mktmgr.receivings');
	}

	public function receivingsQuery()
	{
        $dept_list = DB::table('sodsddpt')->get();
        $transporter_list = DB::table('sodsdtrn')->get();
        //return View::make('mktmgr.receivingsofflinereceiving', compact('dept_list', 'transporter_list'));
        return View::make('mktmgr.receivingsquery', compact('dept_list', 'transporter_list'));//->with('data', $dept_list);
		//return View::make('mktmgr.receivingsquery');
	}

	public function receivingsBrowse()
	{
	   return View::make('mktmgr.receivingsbrowse');	
	}

	public function receivingsUpdate()
	{
		return View::make('mktmgr.receivingsupdate');
	}

	public function receivingsItems()
	{
		 $vendors = DB::table('sodsddtl')->select('store_qty', 'upc_number', 'delvry_unt_ovrd', 'store_cost', 'store_allow', 'vendor_cost', 'vendor_allow')->orderBy('upc_number', 'asc')->paginate(10);;
       
        return View::make('mktmgr.receivingsitems', compact('vendors'));
	}

	public function receivingsOfflinereceiving()
	{
		//SELECT * FROM raleys.;
		$dept_list = DB::table('sodsddpt')->get();
        $transporter_list = DB::table('sodsdtrn')->get();
		return View::make('mktmgr.receivingsofflinereceiving', compact('dept_list', 'transporter_list'));//->with('data', );
	}

	public function receivingsSeQuery()
	{
		return View::make('mktmgr.sequery');
	}

	public function receivingsSeBrowse()
	{
		return View::make('mktmgr.sebrowse');
	}
    
    public function viewReceivingsSeQuery()
	{ 
        if(Input::has('id')) {
            $rcv_data = Socadm00Sodsdhdr::where('seq_number',Input::get('id'))->leftJoin('sodsdvnd', 'sodsdhdr.vendor_number', '=', 'sodsdvnd.vendor_number')->select('sodsdhdr.*','sodsdvnd.name')->first();
            return View::make('mktmgr.viewsequery')->with('rcv_data',$rcv_data);
        }
        else {
            return Redirect::to('/mktmgr/receivings-sequery');
        }
        return View::make('mktmgr.viewsequery');

	}

	public function updateReceivingsSeQuery()
	{  
        if(Input::has('id')) { //echo "Hit ID"; exit;
            $rcv_data = Socadm00Sodsdhdr::where('seq_number',Input::get('id'))->leftJoin('sodsdvnd', 'sodsdhdr.vendor_number', '=', 'sodsdvnd.vendor_number')->select('sodsdhdr.*','sodsdvnd.name')->first();
            return View::make('mktmgr.updatesequery')->with('rcv_data',$rcv_data);
        }
        //echo "Not Hit ID"; exit;
		return View::make('mktmgr.updatesequery');
	}


	public function receivingsSeUpdate()
	{
		return View::make('mktmgr.receivingsseupdate');
	}

	public function shrinkCaptureReview()
	{
		return View::make('mktmgr.shrinkcapturereview');
	}

	public function postshrinkCaptureReviewDate()
	{
		echo $shrinkdate=Input::get('shrinkdate'); //exit;
		/*return Redirect::intended('/user/user');*/

		return Redirect::to('/mktmgr/shrinkcapturereviewdate');

		//return View::make('mktmgr/shrinkcapturereviewdate');
		//return Redirect::to('mktmgr/shrinkcapturereviewdate')->with('values', $shrinkdate);

		//echo $shrinkdate=Input::get('shrinkdate');
		//return Redirect::to('mktmgr.shrinkcapturereviewdate');
		/*return View::make('mktmgr.shrinkcapturereviewdate');*/
		/*return Redirect::to('/shrinkcapturereviewdate')->with('values', $shrinkdate);*/
	   /* return Redirect::to('/shrinkcapturereviewdate');*/
		/*return Redirect::intended('/shrinkcapturereviewdate');*/
		/*return Redirect::route('mktmgr-shrinkcapturereviewdate');*/
		/*return View::make('mktmgr.shrinkcapturereviewdate');*/
	}

	public function getReceivingsLogExpense()
	{
		return View::make('mktmgr.receivingslogexpense');
	}

	public function postReceivingsLogExpense()
	{ 
		$addLE = new Socadm00Sodsdhdr;
        if(Input::has('store')) {
            $addLE->store_number = Input::get('store');
        }
        if(Input::has('vendornum')) {
            $addLE->vendor_number = Input::get('vendornum');
        }
        if(Input::has('invdate')) {
            $convert_date = date("Y-m-d", strtotime(Input::get('invdate')));
            $addLE->invoice_date = $convert_date;
        }
        if(Input::has('invnum')) {
            $addLE->id = Input::get('invnum');
        }
        if(Input::has('expensetype')) {
            $addLE->type_code = Input::get('expensetype');
        }
        if(Input::has('amount')) {
            $addLE->tot_vend_cost = Input::get('amount');
        }
        if(Input::has('status')) {
            $addLE->status_code = Input::get('status');
        }
        $addLE->last_updated_by = 'MKTMGR';
        $addLE->last_update = date('Y-m-d G:i:s');
        $addLE->save();
        //,array('id'=>$addLE->id)
        Session::flash('alert-success', 'Record added successfully!'); 
        return Redirect::route('mktmgr-view-receivings-sequery',array('id'=>$addLE->id));
	}

	public function getWeeklyReport()
	{
		return View::make('mktmgr.weeklyreport');
	}
	public function postWeeklyReport()
	{
        if(Input::has('storeno')) {
            $storeno = Input::get('storeno');
        }
        if(Input::has('dept')) {
            $dept = Input::get('dept');
        }
        if(Input::has('fromdate')) {
            $fromdate = Input::get('fromdate');
        }
        if(Input::has('todate')) {
            $todate = Input::get('todate');
        }
        if(Input::has('copies')) {
            $copies = Input::get('copies');
        }
        $results = DB::select('SELECT sodsdhdr . seq_number , sodsdhdr . method_rcvd , sodsdhdr . type_code , sodsdhdr . dept_number , sodsdhdr . delivery_unit , sodsdhdr . id , sodsdhdr . vendor_number , sodsdhdr . tot_vend_cost , sodsdhdr . tot_vend_allow , sodsdhdr . tot_vend_crv , sodsdhdr . invoice_date , sodsdhdr . tot_sell_supply , sodsdhdr . tot_store_supply , sodsdvnd . name FROM sodsdhdr , sodsdvnd WHERE sodsdhdr . store_number = ? AND sodsdhdr . dept_number = ? AND ( sodsdhdr . status_code = "O" OR sodsdhdr . status_code = "A" ) AND sodsdhdr . create_datetime >= ? AND sodsdhdr . create_datetime <= ? AND sodsdvnd . vendor_number = sodsdhdr . vendor_number ORDER BY sodsdvnd . name , sodsdhdr . invoice_date , sodsdhdr . id', array($storeno, $dept, $fromdate, $todate));
        return View::make('mktmgr.browsewrr', compact('results'));
	}
    public function browseWeeklyReport()
    {
    	return View::make('mktmgr.browsewrr');
    }

    public function getStoreInvoice() {
    	return View::make('mktmgr.reportstoreinvoice');
    }
    public function postStoreInvoice() {
        if(Input::has('invoiceno')) {
            $invno = Input::get('invoiceno');
            $storeinv = new Socadm00Sodsddtl;
            $storeinv = $storeinv->select('seq_number' , 'upc_number' , 'case_pack' , 'vendor_qty' , 'vendor_cost' , 'vendor_allow' , 'vendor_crv' , 'store_qty' , 'store_cost' , 'store_allow' , 'store_crv' , 'free_qty' , 'delvry_unt_ovrd' , 'spec_note_cd' , 'active_sw')->where('hdr_seq_number',$invno)->orderBy('seq_number', 'asc')->paginate(10);
            return View::make('mktmgr.browsesir', compact('storeinv'));
        }
    	return View::make('mktmgr.reportstoreinvoice');
    }

    public function getCostDiscrepancyReport()
    {
    	return View::make('mktmgr.costdiscrepancyreport');
    }
    public function postCostDiscrepancyReport() {
        if(Input::has('strno')) {
            $strno = Input::get('strno');
        }
        else {
            $strno = '305';
        }
        if(Input::has('keydate')) {
            $keydate = Input::get('keydate');
            $cdreports = DB::select('SELECT seq_number , store_number , method_rcvd , type_code , dept_number , delivery_unit , id , vendor_number , cost_discrep_sw , status_code , invoice_date , create_datetime FROM sodsdhdr WHERE store_number = ? AND invoice_date = ? AND type_code = "D" AND ( status_code = "O" OR status_code = "A" ) ', array($strno, $keydate));
            return View::make('mktmgr.browsecdr', compact('cdreports'));
        }
        return View::make('mktmgr.costdiscrepancyreport');
    } 

    public function getOfflineReport()
    {
    	return View::make('mktmgr.offlinereport');
    }
    public function postOfflineReport()
    {
        if(Input::has('storeno')) {
            $storeno = Input::get('storeno');
        }
        if(Input::has('dept')) {
            $dept = Input::get('dept');
        }
        if(Input::has('fromdate')) {
            $fromdate = Input::get('fromdate');
        }
        if(Input::has('todate')) {
            $todate = Input::get('todate');
        }
        if(Input::has('copies')) {
            $copies = Input::get('copies');
        }
        $results = DB::select('SELECT sodsdhdr . seq_number , sodsdhdr . method_rcvd , sodsdhdr . type_code , sodsdhdr . dept_number , sodsdhdr . id , sodsdhdr . vendor_number , sodsdhdr . tot_vend_cost , sodsdhdr . invoice_date , sodsdhdr . tot_sell_supply , sodsdhdr . tot_store_supply , sodsdvnd . name FROM sodsdhdr , sodsdvnd WHERE sodsdhdr . store_number = ? AND sodsdhdr . dept_number = ? AND sodsdhdr . method_rcvd = "O" AND sodsdhdr . status_code = "O" AND sodsdhdr . create_datetime >= ? AND sodsdhdr . create_datetime <= ? AND sodsdvnd . vendor_number = sodsdhdr . vendor_number ORDER BY sodsdhdr . dept_number , sodsdvnd . name , sodsdhdr . invoice_date , sodsdhdr . id', array($storeno, $dept, $fromdate, $todate));
        return View::make('mktmgr.browsepor', compact('results'));
    }
    public function browseOfflineReport()
    {
    	return View::make('mktmgr.browsepor');
    }


    public function getTransportlistingReport()
    {
    	$transports = new Socadm00Sodsdtrn;
        $transports = $transports->select('trns_number' , 'name' , 'address' , 'city' , 'state' , 'zip_code' , 'phone')->orderBy('name', 'asc')->paginate(10);
        return View::make('mktmgr.transportlisting', compact('transports'));
    }
	public function getDexInvoiceDate()
	{
		return View::make('mktmgr.invoicedate');
	}
	public function postDexInvoiceDate()
	{
		if(Input::has('keydate')) {
            $keydate = Input::get('keydate');
            $enddate = date('Y-m-d', strtotime("+1 day",strtotime($keydate)));
            
            $dexact = Socadm00Sodexlog::query();
            $dexact->whereBetween('create_datetime', array($keydate, $enddate));
            $dexact->orderBy('create_datetime', 'desc');
            $dexact = $dexact->paginate(10);//get();
            
            return View::make('mktmgr.dexlisting', compact('dexact'));
		}
        return View::make('mktmgr.invoicedate');
	}
    
    public function receivingsSeReports()
	{
		return View::make('mktmgr.sereports');
	}

    public function postReceivingsSeReports() {
        $receivings = Socadm00Sodsdhdr::query();
        if(Input::has('fromdate')) {

            $convert_date = date("Y-m-d", strtotime(Input::get('fromdate')));
            $frmdt = $convert_date;
        }
        else {
            $frmdt = date('Y-m-d', time());
        }
        if(Input::has('todate')) {
            $convert_date = date("Y-m-d", strtotime(Input::get('todate')));
            $todt = $convert_date;
            //$todt = Input::get('todate');
        }
        else {
            $todt = date('Y-m-d', time());
        }
        $receivings->whereBetween('invoice_date', array($frmdt, $todt));
        $receivings->leftJoin('sodsdvnd', 'sodsdhdr.vendor_number', '=', 'sodsdvnd.vendor_number');
        $receivings = $receivings->paginate(10);//get();//$receivings = $receivings->get();
        //var_dump($receivings); exit;
        return View::make('mktmgr.sebrowse', compact('receivings'));
    }
    
    public function searchReceivingsSeQuery() {
        $receivings = Socadm00Sodsdhdr::query();
        if(Input::has('store')) {
            $receivings->where('store_number', Input::get('store'));
        }
        if(Input::has('vendornum')) {
            $receivings->where('sodsdhdr.vendor_number', Input::get('vendornum'));
           
        }
        if(Input::has('invdate')) {
            $convert_date = date("Y-m-d", strtotime(Input::get('invdate')));
            $receivings->where('invoice_date', $convert_date);
        }
        if(Input::has('invnum')) {
            $receivings->where('id', Input::get('invnum'));
        }
        if(Input::has('expensetype')) {
            $receivings->where('type_code', Input::get('expensetype'));
        }
        if(Input::has('amount')) {
            $receivings->where('tot_vend_cost', Input::get('amount'));
        }
        if(Input::has('status')) {
            $receivings->where('status_code', Input::get('status'));
        }
        if(Input::has('by')) {
            $receivings->where('last_updated_by', Input::get('by'));
        }
         $receivings->leftJoin('sodsdvnd', 'sodsdhdr.vendor_number', '=', 'sodsdvnd.vendor_number');
        $receivings = $receivings->get();
        //$receivings = $receivings->orderBy('name', 'asc')->paginate(10);
        return View::make('mktmgr.sebrowse', compact('receivings'));
    }
    
    public function postReceivingsSeQuery() {
        $updRcv = new Socadm00Sodsdhdr;
        if(Input::has('store')) {
            $updRcv->store_number = Input::get('store');
        }
        if(Input::has('vendornum')) {
            $updRcv->vendor_number = Input::get('vendornum');
        }
        if(Input::has('invdate')) {
            $convert_date = date("Y-m-d", strtotime(Input::get('invdate')));
            $updRcv->invoice_date = $convert_date;
        }
        if(Input::has('invnum')) {
            $updRcv->id = Input::get('invnum');
        }
        if(Input::has('expensetype')) {
            $updRcv->type_code = Input::get('expensetype');
        }
        if(Input::has('amount')) {
            $updRcv->tot_vend_cost = Input::get('amount');
        }
        if(Input::has('status')) {
            $updRcv->status_code = Input::get('status');
        }
        $updRcv->last_updated_by = 'MKTMGR';
        $updRcv->create_datetime = date('Y-m-d G:i:s');
        
        $updRcv->save();
        Session::flash('alert-success', 'Record updated successfully!'); 
        return Redirect::to('/mktmgr/receivings-sequery');
    }

    public function browseVendor() {
        $vendors = new Socadm00Sodsdvnd;
        $vendors = $vendors->orderBy('name', 'asc')->paginate(10);
        return View::make('mktmgr.browsevendor', compact('vendors'));
    }

	public function vendorListByDeptID()
	{
		//return "done with ajax call";
		//return View::make('mktmgr.vendorlist');
		$updRcv = new Socadm00Sodsdhdr;
		$deptnum=Input::get('deptnumber');

		 /*SELECT * FROM sodsdvnd a, sodsditm b
          WHERE b.active_switch = "Y"
            AND a.vendor_number = b.vendor_number
            AND b.dept_number   = 3
			GROUP BY 1*/
		/*$result = DB::table('sodsdvnd')
            ->join('sodsditm', 'sodsdvnd.vendor_number', '=', 'sodsditm.vendor_number')
            ->select('sodsdvnd.*', 'sodsditm.dept_number')
            ->where('sodsditm.dept_number', '=', $deptnum)
            ->groupBy('status')
            ->get();*/

       /*echo $result = DB::table('sodsdvnd')
        ->join('sodsditm', function ($join) {
            $join->on('sodsdvnd.vendor_number', '=', 'sodsditm.vendor_number')
                 ->where('sodsditm.dept_number', '>', $deptnum);
        })
        ->get();    */
        $vendorlist = '';
        $results = DB::select('SELECT * FROM sodsdvnd a, sodsditm b
          						WHERE b.active_switch = "Y"
                                AND a.vendor_number = b.vendor_number
                                AND b.dept_number   = "'.$deptnum.'" GROUP BY a.vendor_number');
        //$result = $result->toArray();
        foreach ($results as $key) {
        	 $vendorlist .= $key->name.'_'.$key->vendor_number.',';
        }
        return $vendorlist;
	}

	public function postOfflineReceiving()
	{
        $validator = Validator::make(Input::all(),
            array(
                   'storeid' =>'required',
                   'dept_name_number'=>'required',
                   'invoice_date'=>'required',
                   'invoice_number'=>'required',
                   'status'=>'required',
                   'invoice_type'=>'required',
                   'method_received'=>'required',
                   'vendornumber'=>'required',
                   'transporter'=>'required',
                   'number_2'=>'required',
                   'cost_discrepancies'=>'required',
                   'qty_vendor'=>'required',
                   'store_inventory_vendor'=>'required',
                   'selling_supplies_vendor'=>'required',
                   'store_supplies_vendor'=>'required',
                   'vendornumber'=>'required',
                   'number_2'=>'required',
                ));

        //print_r($validator);

        if($validator->fails())
        {
            return Redirect::route('mktmgr-receivings-receivingsofflinereceiving')
                    ->withErrors($validator)
                    ->withInput();
        }
        else
        {
            //echo "Invoice Date : ".Input::get('invoice_date'); exit;
          
		$allpostval=Input::all(); //vendorname
        $addOR = new Socadm00Sodsdhdr;
        if(Input::has('storeid')) {
            $addOR->store_number = Input::get('storeid');
        }
        if(Input::has('dept_name_number')) {
            $addOR->dept_number = Input::get('dept_name_number');
        }
        if(Input::has('invoice_date')) {
           $convert_date = date("Y-m-d", strtotime(Input::get('invoice_date')));
           $addOR->invoice_date  =  $convert_date;
        }
        if(Input::has('invoice_number')) {
            $addOR->id = Input::get('invoice_number');
        }
        if(Input::has('status')) {
            $addOR->status_code = Input::get('status');
        }
        if(Input::has('invoice_type')) {
            $addOR->type_code = Input::get('invoice_type');
        }
        if(Input::has('method_received')) {
            $addOR->method_rcvd = Input::get('method_received');
        }
        if(Input::has('vendornumber')) {
            $addOR->vendor_number = Input::get('vendornumber');
        }
      /*  if(Input::has('number_2')) {
            $addOR->trns_number = Input::get('number_2');
        }*/
        if(Input::has('cost_discrepancies')) {
            $addOR->cost_discrep_sw = Input::get('cost_discrepancies');
        }
        if(Input::has('qty_vendor')) {
            $addOR->tot_vend_qty = Input::get('qty_vendor');
        }
        if(Input::has('net_vendor')) {
            $addOR->tot_vend_cost = Input::get('net_vendor');
        }
        if(Input::has('number_2')) {
            $addOR->trns_number = Input::get('number_2');
        }

         if(Input::has('selling_supplies_vendor')) {
            $addOR->tot_sell_supply = Input::get('selling_supplies_vendor');
        }
        if(Input::has('store_supplies_vendor')) {
            $addOR->tot_store_supply = Input::get('store_supplies_vendor');
        }
      
        /*if(Input::has('vendornumber')) {
            $addOR->vendor_number = Input::get('vendornumber');
        }*/
        
       
        /*if(Input::has('cost_discrepancies')) {
            $addOR->cost_discrep_sw = Input::get('cost_discrepancies');
        }*/
       /* if(Input::has('qty_vendor')) {
            $addOR->tot_vend_qty = Input::get('qty_vendor');
        }*/
       /* if(Input::has('qty_store')) {
            $addOR->tot_store_qty = Input::get('qty_store');
        }*/
        $addOR->delivery_unit = 'E';
        $addOR->tot_vend_allow = '0.0000';
        $addOR->tot_vend_crv = '0.0000';
        $addOR->credit_memo_id='';
        //$addOR->tot_sell_supply='0.0000';
        //$addOR->tot_store_supply='0.0000';
        $addOR->last_updated_by = 'DSD';
       /* $addOR->last_update = Input::get('created_date');
        $addOR->create_datetime = Input::get('updated_date');*/
        
        
        //mktmgr-Offline-Receiving
		/*$id = Socadm00Sodsdhdr::'sodsdhdr'->insert(
											    array('store_number' ,Input::get('storeid'),
											    	   'dept_number',Input::get('dept_name_number'),
  													  'method_rcvd' ,Input::get('method_received'),
  													  'type_code' ,Input::get('invoice_type'),
  													  'delivery_unit',Input::get('number_2'),
  													   'id','1',
  													   'vendor_number',Input::get('vendornumber'),
													  'cost_discrep_sw',Input::get('cost_discrepancies'),
													  'status_code',Input::get('status'),
													  'tot_vend_qty',Input::get('qty_vendor'),
													  'tot_vend_cost',Input::get('store_inventory_vendor'),
													  'tot_vend_allow',Input::get('store_inventory_vendor'),
													  'tot_vend_crv',Input::get('store_inventory_vendor'),
													  'invoice_date',Input::get('invoice_date'),
													  'credit_memo_id',Input::get('store_inventory_vendor'),
													  'create_datetime',Input::get('created_date'),
													  'trns_number',Input::get('number_2'),
													  'tot_sell_supply',Input::get('net_vendor'),
													  'tot_store_supply',Input::get('net_store'),
											    	  )
											);*/

        if($addOR->save())
        {    
          Session::flash('alert-success', 'Record added successfully!'); 
          return Redirect::route('mktmgr-receivings-receivingsofflinereceiving',array('id'=>$addOR->id));
        }  
    }
	}

    public function postQueryReceiving()
    { 
        $allpostval=Input::all();

        $receivings = Socadm00Sodsdhdr::query();

        if(Input::has('storeid')) {
              $storeID=Input::get('storeid');
       /* $receivings = DB::table(DB::raw('`sodsdhdr` , `sodsddpt`, `sodsdtrn`'))
                     ->select('sodsdhdr. dept_number', 'sodsddpt. retail_dept',               
                                 'sodsdtrn. trns_number')
                     ->join('sodsdtrn', 'sodsdhdr.trns_number', '=', 'sodsdtrn.trns_number')
                     ->join('sodsddpt', 'sodsdhdr.dept_number', '=', 'sodsddpt.retail_dept')
                     ->where('sodsdhdr. store_number', $storeID)
                     ->orderBy('sodsdhdr. store_number', 'desc')
                     ->paginate(10);*/
   
             $receivings = DB::select('SELECT t1.*, t2. retail_dept, t2. name,  t1. trns_number, t3. name, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. store_number ='.$storeID);
                            //->orderBy('t1. invoice_date', 'desc')
                            //->paginate(10);
            //$receivings->where('sodsdhdr.store_number', Input::get('storeid'));
        }
        if(Input::has('dept_name_number')) {
            $deptnum = Input::get('dept_name_number');
            $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. trns_number, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. store_number ='.$storeID .' AND t1. dept_number='.$deptnum);
            //$receivings->where('sodsdhdr.dept_number', Input::get('dept_name_number'));
        }
        if(Input::has('invoice_date')) {
            $convert_date = date("Y-m-d", strtotime(Input::get('invoice_date')));
            $convert_date_end = date("Y-m-d", strtotime(Input::get('invoice_end_date')));
            //$receivings->where('sodsdhdr.invoice_date', $convert_date);
            $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. trns_number, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. store_number ='.$storeID .' AND 
                                             t1. invoice_date between "'.$convert_date .'" AND "'.$convert_date_end.'"');
        }
        if(Input::has('invoice_number')) {

            //$receivings->where('sodsdhdr.id', Input::get('invoice_number'));
             $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. trns_number, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. store_number ='.$storeID .' AND 
                                             t1. id='.Input::get('invoice_number'));
        }
        if(Input::has('number_2')) {
           // $receivings->where('sodsdhdr.trns_number', Input::get('number_2'));
             $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. trns_number, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. store_number ='.$storeID .' AND 
                                             t1. trns_number='.Input::get('number_2'));
        }

         /*$vendors = $vendors->orderBy('name', 'asc')->paginate(10);
        return View::make('mktmgr.browsevendor', compact('vendors'));*/
/*echo '<pre>';
		print_r($receivings);exit;
        $receivings = $receivings[0]->orderBy('invoice_date', 'desc')->paginate(10);*/
		
		
	

	return View::make('mktmgr.queryresult', compact('receivings'));

    }

    public function postCostDiscrepancySearchReport()
    {
        return View::make('mktmgr.costdiscrepancysearchreport');
    }
    
    function postVendorDataByDate()
    {
        $selectedate= Input::has('invoice_date');
       // Session::flash('alert-success', 'Inserted Date'.$selectedate); 
        return Redirect::route('mktmgr-DEX-invoicedate');
    }

    function getAllQueryInformation()
    {
        $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. name vname, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. seq_number='.Input::get('seq_number'));
        return View::make('mktmgr.selectedquery', compact('receivings'));
    }

    public function receivingsQueryUpdate()
    {
        //SELECT * FROM raleys.sodsddtl where hdr_seq_number = 94173
        $allpostval=Input::all(); //vendorname
        /*$addOR = new Socadm00Sodsdhdr;
        if(Input::has('storeid')) {
            $addOR->store_number = Input::get('storeid');
        }
        if(Input::has('dept_name_number')) {
            $addOR->dept_number = Input::get('dept_name_number');
        }
        if(Input::has('invoice_date')) {
           $convert_date = date("Y-m-d", strtotime(Input::get('invoice_date')));
           $addOR->invoice_date  =  $convert_date;
        }
        if(Input::has('invoice_number')) {
            $addOR->id = Input::get('invoice_number');
        }
        if(Input::has('status')) {
            $addOR->status_code = Input::get('status');
        }
        if(Input::has('invoice_type')) {
            $addOR->type_code = Input::get('invoice_type');
        }
        if(Input::has('method_received')) {
            $addOR->method_rcvd = Input::get('method_received');
        }
        if(Input::has('vendornumber')) {
            $addOR->vendor_number = Input::get('vendornumber');
        }
        if(Input::has('cost_discrepancies')) {
            $addOR->cost_discrep_sw = Input::get('cost_discrepancies');
        }
        if(Input::has('qty_vendor')) {
            $addOR->tot_vend_qty = Input::get('qty_vendor');
        }
        if(Input::has('net_vendor')) {
            $addOR->tot_vend_cost = Input::get('net_vendor');
        }
        if(Input::has('number_2')) {
            $addOR->trns_number = Input::get('number_2');
        }

         if(Input::has('selling_supplies_vendor')) {
            $addOR->tot_sell_supply = Input::get('selling_supplies_vendor');
        }
        if(Input::has('store_supplies_vendor')) {
            $addOR->tot_store_supply = Input::get('store_supplies_vendor');
        }*/

       
       
       /* if($addOR->save())
        {    
            Session::flash('alert-success', 'Record updated successfully!'); 
            $receivings = DB::select('SELECT t1.* , t2. retail_dept, t2. name,  t1. trns_number, t3. name vname, 
                                       t3. name as vname FROM sodsdhdr t1, sodsddpt t2, sodsdtrn t3 
                                       WHERE t1. trns_number = t3. trns_number AND t1. dept_number=t2. retail_dept AND
                                             t1. seq_number='.Input::get('seq_number'));
            return View::make('mktmgr.selectedquery', compact('receivings'));
       } */
    
       echo "Updated need to find!";
    }

    public function getItemsById()
    {
         $vendors = DB::table('sodsddtl')->select('store_qty', 'upc_number', 'delvry_unt_ovrd', 'store_cost', 'store_allow', 'vendor_cost', 'vendor_allow')
             ->where('hdr_seq_number',Input::get('seq_number'))
             ->orderBy('upc_number', 'asc')
             ->paginate(10);;
       
        return View::make('mktmgr.receivingsitems', compact('vendors'));
    }
}