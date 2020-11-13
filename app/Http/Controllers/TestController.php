<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function iMFunny()
    {
    	return view('iMFunny');
    }

    public function secondBuyerEloquent()
    {
        $buyer_info = $this->buyerInfo();

        //.....sort desc.................
		$keys = array_column($buyer_info, 'total_item_taken');
    	array_multisort($keys, SORT_DESC, $buyer_info);
    	$item_taken = $buyer_info[1];
        $second_total_item_taken = $item_taken['total_item_taken'];

        $buyers = [];
        foreach ($buyer_info as $key=>$value){
            if($second_total_item_taken == $value['total_item_taken']){
                $buyers[$key]['id'] = $value['id'];
                $buyers[$key]['name'] = $value['name'];
                $buyers[$key]['total_diary_taken']= $value['total_diary_taken'];
                $buyers[$key]['total_eraser_taken']= $value['total_eraser_taken'];
                $buyers[$key]['total_pen_taken']= $value['total_pen_taken'];
                $buyers[$key]['total_item_taken']= $value['total_item_taken'];
            }
        }

    	return view('purchase_list', compact('buyers'));
    }

    public function secondBuyerNoEloquent()
    {
        $buyer_info = $this->buyerInfo();

        //.....sort desc.................
        $keys = array_column($buyer_info, 'total_item_taken');
        array_multisort($keys, SORT_DESC, $buyer_info);
        $item_taken = $buyer_info[1];
        $second_total_item_taken = $item_taken['total_item_taken'];

        $buyers = [];
        foreach ($buyer_info as $key=>$value){
            if($second_total_item_taken == $value['total_item_taken']){
                $buyers[$key]['id'] = $value['id'];
                $buyers[$key]['name'] = $value['name'];
                $buyers[$key]['total_diary_taken']= $value['total_diary_taken'];
                $buyers[$key]['total_eraser_taken']= $value['total_eraser_taken'];
                $buyers[$key]['total_pen_taken']= $value['total_pen_taken'];
                $buyers[$key]['total_item_taken']= $value['total_item_taken'];
            }
        }

        return count($buyers);
    }

    public function purchaseList()
    {
        $buyer_info = $this->buyerInfo();

        //.....sort asc.................
        $keys = array_column($buyer_info, 'total_item_taken');
        array_multisort($keys, SORT_ASC, $buyer_info);
        $buyers = $buyer_info;

        return view('purchase_list', compact('buyers'));
    }

    public function purchaseListNoEloquent()
    {
        $buyer_info = $this->buyerInfo();
        return count($buyer_info);
    }

    public function buyerInfo()
    {
        $buyers = Buyer::with('diaries','erasers','pens')->get();

        $buyer_info = [];
        $total_item_taken = 0;
        foreach ($buyers as $key=>$buyer)
        {
            $buyer_info[$key]['id'] = $buyer->id;
            $buyer_info[$key]['name'] = $buyer->name;
            $total_diary_taken = 0;
            $total_eraser_taken = 0;
            $total_pen_taken = 0;

            foreach ($buyer->diaries as $diary)
            {
                $total_diary_taken += $diary->amount;
            }
            $buyer_info[$key]['total_diary_taken'] = $total_diary_taken;

            foreach ($buyer->erasers as $eraser)
            {
                $total_eraser_taken += $eraser->amount;
            }
            $buyer_info[$key]['total_eraser_taken'] = $total_eraser_taken;

            foreach ($buyer->pens as $pen)
            {
                $total_pen_taken += $pen->amount;
            }
            $buyer_info[$key]['total_pen_taken'] = $total_pen_taken;

            $buyer_info[$key]['total_item_taken'] = $total_diary_taken + $total_eraser_taken + $total_pen_taken;
        }

        return $buyer_info;
    }


    public function recordTransfer()
    {
    	Record::truncate();

        $json = Storage::disk('public')->get('records.json');
        $data = json_decode($json, true);

        foreach(array_chunk($data['RECORDS'], 1000) as $key => $smallerArray) {
            Record::insert($smallerArray);
        }

        return "Record is successfully transferred";
    }

    public function defineCallbackJs()
    {
        return view('define_callback');
    }

    public function sortJs()
    {
    	return view('sort_array');
    }

    public function foreachJs()
    {
    	return view('foreach_js');
    }

    public function filterJs()
    {
    	return view('filter_js');
    }

    public function mapJs()
    {
    	return view('map_js');
    }

    public function reduceJs()
    {
    	return view('reduce_js');
    }

    public function animation()
    {
    	return view('animation');
    }





}
