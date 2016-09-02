<?php 

/**
* 
*/
class UserHomeController extends BaseController
{
    public $date_stamp = '';
    public $tot_acct = 0;
    public $begin_safe = 0;
    public $del_tranfs = 0;
    public $deposits = 0;
    public $store_tx = 0;
    public $po_types = 0;
    public $safe_os = 0;
    public $safe_cnt = 0;
    public $total = 0;
    public $groc_os = 0;
    public $drug_os = 0; 
    
    
	public function userHome()
	{
	   $username = Auth::user()->username; //exit;
	   if($username === 'mktmgr')
	   {
	   		 return View::make('homepage');
	   }
	   else if($username === 'sign1') { 
	   			return View::make('sign1.homepage'); 
	   		}
	   	 else if($username === 'socscn01') { 
	   			return View::make('socscn01.homepage'); 
	   		}
	    else if($username === 'slcscn01') { 
	   			return View::make('slcscn01.homepage'); 
	   		}
	   	 else if($username === 'slcadm03') { 
 	   			return View::make('slcadm03.homepage'); 
	   		}
	    else if($username === 'bkpfst') { 
	   			return View::make('bkpfst.homepage'); 
	   		}
	   	else if($username === 'slcadm00') { 
	   			return View::make('slcadm00.homepage'); 
	   		}		
	   	else if($username === 'socadm00') { 
	   			return View::make('socadm00.homepage'); 
	   		}									
	}

	public function bookkeeper()
	{
		return View::make('mktmgr.bookkeeper');
	}

	public function getbookkeeperRegister()
    {
    	return View::make('mktmgr.bookkeeperregister');
    }
     public function getbookkeeperRegistertotal()
    {
    	return View::make('mktmgr.bookkeeperregistertotal');
    }
    public function getbookkeeperRegistercmt()
    {
    	return View::make('mktmgr.bookkeeperregistercmt');
    }
	
	 public function getbookloanRegister()
    {
    	return View::make('mktmgr.bookloanrregister');
    }
	 public function getbookloanregTotal()
	 {
		return View::make('mktmgr.bookloanrregtotal'); 
	 }
	  public function getbookloanregCmt()
	 {
		return View::make('mktmgr.bookloanrregcmt'); 
	 }
	/*public function receivings()
	{
		return View::make('mktmgr.receivings');
	}*/

	 public function getbookregcheckoutItem()
	 {
		return View::make('mktmgr.bookregcheckoutitem'); 
	 }
	  public function getbookregcheckoutReg()
	 {
		return View::make('mktmgr.bookregcheckoutreg'); 
	 }
	  public function getbookregcheckoutTotl()
	 {
		return View::make('mktmgr.bookregcheckouttotl'); 
	 }
	   public function getbookregcheckoutPrnt()
	 {
		return View::make('mktmgr.bookregcheckoutprnt'); 
	 }
	 public function getbookregcheckoutCmt()
	 {
		return View::make('mktmgr.bookregcheckoutcmt'); 
	 }
	  public function getbookregCmt()
	 {
		return View::make('mktmgr.bookregcmt'); 
	 }
	 public function getbooksafeCnt()
	 {
		return View::make('mktmgr.booksafecnt'); 
	 }
	 public function getbooksafePrnt()
	 {
		return View::make('mktmgr.booksafeprnt'); 
	 }
	  public function getbooksafeReport()
	 {
		return View::make('mktmgr.booksafereport'); 
	 }
	  public function getbooksafereportPrnt()
	 {
		return View::make('mktmgr.booksafereportprnt'); 
	 }
	  public function getbooksafereportCmt()
	 {
		return View::make('mktmgr.booksafereportcmt'); 
	 }
	  public function getbooksafeCmt()
	 {
		return View::make('mktmgr.booksafecmt'); 
	 }
	  public function getbookwklyUnlock()
	 {
		return View::make('mktmgr.bookwklyunlock'); 
	 }
	  public function getbookwklyCmt()
	 {
		return View::make('mktmgr.bookwklycmt'); 
	 }
	  public function getwklyPrnt()
	 {
		return View::make('mktmgr.bookwklyprnt'); 
	 }
	  public function getbookwklyRecap()
	 {
		return View::make('mktmgr.bookwklyrecap'); 
	 }
	  public function getbookwklySales()
	 {
		return View::make('mktmgr.bookwklysales'); 
	 }
	  public function getbookwklyView()
	 {
		return View::make('mktmgr.bookwklyview'); 
	 }
	  public function getbookpostageAdd()
	 {
		return View::make('mktmgr.bookpostageadd'); 
	 }
	  public function getbookpostagePrnt()
	 {
		return View::make('mktmgr.bookpostageprnt'); 
	 }
	  public function getbooklotteryAdd()
	 {
		return View::make('mktmgr.booklotteryadd'); 
	 } 
	 public function getbooklotteryTotl()
	 {
		return View::make('mktmgr.booklotterytotl'); 
	 }
	  public function getbooklotteryPrnt()
	 {
		return View::make('mktmgr.booklotteryprnt'); 
	 }
	  public function getbooklotteryView()
	 {
		return View::make('mktmgr.booklotteryview'); 
	 }
	  public function getbookcommuteradd()
	 {
		return View::make('mktmgr.bookcommuteradd'); 
	 }
	  public function getbookcommuterPrnt()
	 {
		return View::make('mktmgr.bookcommuterprnt'); 
	 }
	  public function getbookcommutermonthlyPrnt()
	 {
		return View::make('mktmgr.bookcommutermonthlyprnt'); 
	 }
	  public function getbookcommutermonthlyAdd()
	 {
		return View::make('mktmgr.bookcommutermonthlyadd'); 
	 }
	  public function getbookphonecardAdd()
	 {
		return View::make('mktmgr.bookphonecardadd'); 
	 }
	  public function getbookphonecardPrnt()
	 {
		return View::make('mktmgr.bookphonecardprnt'); 
	 }
	  public function getbookepsAdd()
	 {
		return View::make('mktmgr.bookepsadd'); 
	 }
	  public function getbookepsPrnt()
	 {
		return View::make('mktmgr.bookepsprnt'); 
	 }
	  public function getbookmngmntDaily()
	 {
		return View::make('mktmgr.bookmngmntdaily'); 
	 }
	 public function postBookmngmntDaily()
	 {
		if(Input::has('dateofinfo')) {
            $date_stamp = Input::get('dateofinfo');
            //$date_stamp = '1989-11-16';
            $dt = new DateTime($date_stamp);
            $datecheck = new DateTime('1990-01-01');
            if($dt < $datecheck) {
                $dt = new DateTime("yesterday");
                $date_stamp = $dt->format('Y-m-d');
            }
            $this->date_stamp = $date_stamp;
            if(UserHomeController::file_locked()) {
                UserHomeController::calc_debtot();
            }
            UserHomeController::init_rec();
            
            UserHomeController::find_os();
            UserHomeController::calc_totals();
        }
        exit;
        //return View::make('mktmgr.bookmngmntdaily'); 
	 }

	  public function getbookmngmntWeekly()
	 {
		return View::make('mktmgr.bookmngmntweekly'); 
	 }
	  public function getbookmngmntCmt()
	 {
		return View::make('mktmgr.bookmngmntcmt'); 
	 }
	  public function getbookutilitypymntCnt()
	 {
		return View::make('mktmgr.bookutilitypymntcnt'); 
	 }
	 public function getbookcommentList()
	 {
		$comments = new BookkeepComment;
        $comments = $comments->orderBy('date_stamp', 'desc')->paginate(20);
        return View::make('mktmgr.bookcommentlist', compact('comments')); 
	 }
	 public function bookcommentAdd()
	 {
        if(Input::has('dateofinfo')) {
            $date_stamp = Input::get('dateofinfo');
        }
        else {
            $date_stamp = date('Y-m-d');
        }
        if(!is_null($cmt_data = BookkeepComment::where('date_stamp',$date_stamp)->first())) {
            $cmt_data = BookkeepComment::where('date_stamp',$date_stamp)->first();
            $cmt_data->exists = true;
        }
        else {
            $cmt_data = new BookkeepComment;
            $cmt_data->date_stamp = $date_stamp;
            $cmt_data->exists = false;
            $cmt_data->comment_line1 = '';
        }
        
        return View::make('mktmgr.bookcommentadd')->with('cmt_data',$cmt_data);
	 }
	 public function postBookcomment()
	 {
        $validator = Validator::make(Input::all(),
    		array(
    			   'dateofinfo' =>'required',
    			   'commenttext'=>'required'
    			));
		if($validator->fails())
		{
			return Redirect::route('mktmgr-bookcommentadd')
					->withErrors($validator)
					->withInput();
		}
		else
		{
            if(is_null($cmt_data = BookkeepComment::where('date_stamp',Input::get('dateofinfo'))->first())) {
                $addComment = new BookkeepComment;
                if(Input::has('dateofinfo')) {
                    $addComment->date_stamp = Input::get('dateofinfo');
                }
                if(Input::has('commenttext')) {
                    $addComment->comment_line1 = trim(Input::get('commenttext'));
                }
                $addComment->comment_line2 = '';
                $addComment->comment_line3 = '';
                $addComment->comment_line4 = '';
                $addComment->comment_line5 = '';
                $addComment->comment_line6 = '';
                $addComment->comment_line7 = '';
                $addComment->comment_line8 = '';
                $addComment->comment_line9 = '';
                $addComment->save();
                //var_dump($addComment); exit;
            }
            else {
                if(Input::has('dateofinfo')) {
                    $arr['date_stamp'] = Input::get('dateofinfo');
                }
                if(Input::has('commenttext')) {
                    $arr['comment_line1'] = trim(Input::get('commenttext'));
                }
                $arr['comment_line2'] = '';
                $arr['comment_line3'] = '';
                $arr['comment_line4'] = '';
                $arr['comment_line5'] = '';
                $arr['comment_line6'] = '';
                $arr['comment_line7'] = '';
                $arr['comment_line8'] = '';
                $arr['comment_line9'] = '';
    
                BookkeepComment::where('date_stamp',Input::get('dateofinfo'))->update($arr);
            }
            return Redirect::route('mktmgr-bookcommentlist');
        }
    }

	 public function getBackHome()
	 {
	 	return View::make('homepage');
	 }

	 public function getSaveBeginLoanregister()
	 {

	 	/*$data = array('reg_number' => Input::get('reg_number'),
                      'reg_date' => Input::get('dateofreg'));
	 	return View::make('mktmgr.savebeginloanregister')->with('data',$data); */
	 }
	 
	 public function postBeginLoanRegister()
	 {
	 	//$addloanbegin = new User;
	 	//$addloanbegin = Auth::user(); //exit;

	 	/*if(Input::has('reg_number')) {
           $data['reg_number'] = Input::get('reg_number');
        }

        if(Input::has('dateofreg')) {
           $data['dateofreg'] = Input::get('dateofreg');
        }*/

        $data = array('reg_number' => Input::get('reg_number'),
                      'reg_date' => Input::get('dateofreg'));
/*
        $val=DB::table('begin_loan')->insert(
				      array('reg_num' => Input::get('reg_number'), 
							'food_stamps' => '0', 
							'ones' => '0', 
							'fives' => '0', 
							'tens' => '0', 
							'twenties' => '0', 
							'rolled_coins' => '0', 
							'quarters' => '0', 
							'nickles' => '0', 
							'dimes' => '0', 
							'pennies' => '0', 
							'misc' => '0', 
							'bl_total' => '0', 
							'entry_date' => Input::get('dateofreg')
				    	  )
				);
        */
        //$addloanbegin->save();
        	
        //Session::flash('alert-success', 'Record added successfully!'); 
        //return Redirect::route('mktmgr-bookkeeperregister');
		return View::make('mktmgr.savebeginloanregister')->with('data', $data);
	 	//table_loanbegin
	 }

	 public function postBeginLoanReg()
	 {
	 	$addloanbegin = new User;
	 	$addloanbegin = Auth::user();
	 	
	 	$data = array('reg_number' => Input::get('reg_number'),
                      'reg_date' => Input::get('reg_date'));

        $val=DB::table('begin_loan')->insert(
				      array('reg_num' => Input::get('reg_number'), 
							'food_stamps' => Input::get('foodstamps'), 
							'ones' => Input::get('ones'), 
							'fives' => Input::get('fives'), 
							'tens' => Input::get('tens'), 
							'twenties' => Input::get('twenties'), 
							'rolled_coins' => Input::get('quarters'), 
							'quarters' => Input::get('dimes'), 
							'nickles' => Input::get('nickles'), 
							'dimes' => Input::get('dimes'), 
							'pennies' => Input::get('pennies'), 
							'misc' => Input::get('misc'), 
							'bl_total' => Input::get('total'), 
							'entry_date' => Input::get('reg_date')
				    	  )
				);
        $addloanbegin->save();
      //  echo "waht is result ".
        //if($result == 1)
       // {
/*       		Session::flash('alert-success', 'Record added successfully!'); 
            return Redirect::route('mktmgr-receivings-receivingsofflinereceiving');
*/
        	Session::flash('alert-success', 'Record added successfully!'); 
            return View::make('mktmgr.savebeginloanregister')->with('data', $data);
        //}	        	
	 }

	 function postDateGetData()
	 {
	 	$addloanbegin = new User;
	 	$addloanbegin = Auth::user();
        $results = DB::select('select r.reg_num, b.bl_total/100 as total from raley.registers r, 
          					   raley.begin_loan b 
          					   where b.reg_num = r.reg_num
    						   and   b.entry_date = "'.Input::get('dateofinfo').'"
  							   order by r.reg_num');
        return View::make('mktmgr.dategetdata', compact('results'));
	 }

	  public function file_locked() {
        if(is_null(BookkeepLocks::where('date_stamp',$this->date_stamp)->first())) {
            return false;
        }
        else {
            return true;   
        }
    }
    
    public function calc_debtot() {
         $gsubtot = $lr_tot =0;
        $totrs = DB::select('SELECT SUM(entry.item_amt) AS gsubtot FROM entry,items WHERE entry.entry_date = ? AND items.item_type = "D" AND entry.item_id = items.item_id', array($this->date_stamp));
        if($totrs[0]->gsubtot == NULL) {
            $gsubtot = 0;
        }
        else {
            $gsubtot = $totrs[0]->gsubtot;
        }
        
        $sfentryrs = DB::select('SELECT safeentry.item_amt AS td_amt FROM safeentry WHERE safeentry.entry_date = ? AND safeentry.item_id = "TD"', array($this->date_stamp));
        if(count($sfentryrs) < 1) {
            $bse = new BookkeepSafeentry;
            $bse->item_id = 'TD';
            $bse->item_amt = $gsubtot;
            $bse->source_id = 'mktmgr';
            $bse->entry_date = $this->date_stamp;
            $bse->save();
        }
        else {
            $whr = array('item_id'=>'TD','entry_date'=>$this->date_stamp);
            $arr['item_amt'] = $gsubtot;
            $bse = BookkeepSafeentry::where($whr)->update($arr);
        }
         
        $lrtotrs = DB::select('SELECT SUM(entry.item_amt) AS lr_tot FROM entry WHERE entry.entry_date = ? AND entry.item_id = "LR"', array($this->date_stamp));
        if($lrtotrs[0]->lr_tot == NULL) {
            $lr_tot = 0;
        }
        else {
            $lr_tot = ($lrtotrs[0]->lr_tot * (-1));
        }
        
        $sfentryrs = DB::select('SELECT * from safeentry WHERE safeentry.entry_date = ? AND safeentry.item_id = "LR"', array($this->date_stamp));
        if(count($sfentryrs) < 1) {
            $bse = new BookkeepSafeentry;
            $bse->item_id = 'LR';
            $bse->item_amt = $lr_tot;
            $bse->source_id = 'mktmgr';
            $bse->entry_date = $this->date_stamp;
            $bse->save();
        }
        else {
            $whr = array('item_id'=>'LR','entry_date'=>$this->date_stamp);
            $arr['item_amt'] = $lr_tot;
            $bse = BookkeepSafeentry::where($whr)->update($arr);
        }
    }
    
    public function init_rec() {
        if(is_null(BookkeepMainsafe::where('safe_date',$this->date_stamp)->first())) {
            if(!UserHomeController::file_locked()) {
                $addmainsafe = new BookkeepMainsafe;
                $addmainsafe->begin_safe = 0;
                $addmainsafe->del_tranfs = 0;
                $addmainsafe->deposits = 0;
                $addmainsafe->store_tx = 0;
                $addmainsafe->po_types = 0;
                $addmainsafe->tot_acct = 0;
                $addmainsafe->safe_cnt = 0;
                $addmainsafe->safe_os = 0;
                $addmainsafe->groc_os = 0;
                $addmainsafe->drug_os = 0;
                $addmainsafe->total = 0;
                $addmainsafe->safe_date = $this->date_stamp;
                $addmainsafe->save();
            }
        }
        echo "<br />del_tranfs => ".$this->del_tranfs = UserHomeController::total_amt('T');
        echo "<br />deposits => ".$this->deposits = UserHomeController::total_amt('P');
        echo "<br />store_tx => ".$this->store_tx = UserHomeController::total_amt('S');
        echo "<br />po_types => ".$this->po_types = UserHomeController::total_amt('O');
    }
    
    
    public function total_amt($code) {
        $tot = 0;
        $rs = DB::select('SELECT SUM(safeentry.item_amt) AS tot FROM safeentry, safeitems WHERE safeentry.item_id = safeitems.item_id AND safeitems.item_type = ? AND safeentry.entry_date = ?', array($code, $this->date_stamp));
        if($rs[0]->tot == NULL) {
            $tot = 0;
        }
        else {
            $tot = $rs[0]->tot;
        }
        return $tot;
    }
    
    public function find_os() {
        $arrtot = UserHomeController::get_dogo();
        if($arrtot['groctot'] == NULL) {
            $groctot = 0;
        }
        else {
            $groctot = $arrtot['groctot'];
        }
        if($arrtot['drugtot'] == NULL) {
            $drugtot = 0;
        }
        else {
            $drugtot = $arrtot['drugtot'];
        }
        echo "<br />groc_os ==> ".$this->groc_os = $groctot/100;
        echo "<br />drug_os ==> ".$this->drug_os = $drugtot/100;
    }

    public function get_dogo() {
        $subtot1 = $subtot2 = $groctot = $drugtot = 0;
        
        $results = BookkeepRegisters::orderBy('reg_num')->get();
        foreach($results as $row) {
            $rs = DB::select('SELECT SUM(entry.item_amt) AS subtot1 FROM entry, items WHERE entry.reg_num = ? AND entry.entry_date = ? AND items.item_id = entry.item_id AND items.item_type = "D"', array($row->reg_num, $this->date_stamp));
            if(is_null($rs[0]->subtot1)) {
                $rs[0]->subtot1=0;
            }
            $subtot1=$rs[0]->subtot1;

            $rs = DB::select('SELECT SUM(entry.item_amt) AS subtot2 FROM entry, items WHERE entry.reg_num = ? AND entry.entry_date = ? AND items.item_id = entry.item_id AND items.item_type = "C"', array($row->reg_num, $this->date_stamp));
            if(is_null($rs[0]->subtot2)) {
                $rs[0]->subtot2=0;
            }
            $subtot2=$rs[0]->subtot2;
            
            if($row->reg_type == 'G') {
                $groctot = $groctot + ($subtot1 - $subtot2);
            }
            else if($row->reg_type == 'D') {
                $drugtot = $drugtot + ($subtot1 - $subtot2);
            }
            $arrtot['groctot'] = $groctot;
            $arrtot['drugtot'] = $drugtot;
            $subtot1 = $subtot2 = 0;
        }
        return($arrtot);
    }
    
    public function calc_totals() {
        echo "<br />tot_acct ==> ".$this->tot_acct = $this->begin_safe + $this->del_tranfs + $this->deposits + $this->store_tx + $this->po_types;
        echo "<br />safe_os ==> ".$this->safe_os = $this->safe_cnt - $this->tot_acct;
        echo "<br />total ==> ".$this->total = $this->safe_os + $this->groc_os + $this->drug_os;
    }

}

