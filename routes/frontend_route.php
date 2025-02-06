<?php

use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Guest;
use App\Library\Helpers;


Route::get('/', function () {
    return view('index');
});
Route::get('/photo-album', function () {
    return view('slider');
});
Route::get('/invitation/{id}',function(Request $request,$id){
    $data = array();
    $user = Guest::where('link',$id)->firstOrFail();
    $data['guest_name'] = $user->name;
    if($user->type == 0){
        $data['event_name'] = 'LỄ CƯỚI NHÀ NAM';
        $data['event_time'] = '10:00 AM';
        $data['event_date'] = 'Chủ nhật, NGÀY 16/02/2025';
        $data['event_date_dot'] = '16.02.2025';
        $data['event_address'] = '156 Ngô Quyền - TP Hải Dương - Hải Dương';
    }
    else{
        if($user->type == 3) {
            $data['event_name'] = 'TIỆC CƯỚI NHÀ NAM';
            $data['event_time'] = '17:00 PM';
            $data['event_date'] = 'Thứ bảy, NGÀY 15/02/2025';
            $data['event_date_dot'] = '16.02.2025';
            $data['event_address'] = '156 Ngô Quyền - TP Hải Dương - Hải Dương';
        }
        else {

            $data['event_name'] = 'LỄ CƯỚI NHÀ NỮ';
            $data['event_time'] = '17:00 PM';
            $data['event_date'] = 'Thứ bảy, NGÀY 15/02/2025';
            $data['event_date_dot'] = '16.02.2025';
            $data['event_address'] = 'Thôn Kim Đôi - Xã Cẩm Hoàng - Cẩm Giàng - HD';
        }
    }
    return view('thiepmoi',compact('data'));
});
Route::get('/rsvp',function(){
    return view('xacnhan');
});
Route::get('/search-guests',function(Request $request){
     $name = $request->name;
     $data = Guest::where('name', 'LIKE', "%$name%")->get();
     return response()->json([
        'status' => 1,
        'data' => $data
    ], 200);
});
Route::post('/wish',function(Request $request){
    dd($request->all());
});
