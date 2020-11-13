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

        //.....sort desc.................
		$keys = array_column($buyer_info, 'total_item_taken');
    	array_multisort($keys, SORT_DESC, $buyer_info);
    	$buyers = $buyer_info[1];

    	return view('second_buyer', compact('buyers'));
    }

    public function purchaseList()
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

        //.....sort desc.................
        $keys = array_column($buyer_info, 'total_item_taken');
        array_multisort($keys, SORT_ASC, $buyer_info);
        $buyers = $buyer_info;

        return view('purchase_list', compact('buyers'));
    }


    public function recordTransfer()
    {
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
