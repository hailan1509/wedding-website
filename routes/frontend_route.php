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
        $data['event_time'] = '16:00 PM';
        $data['event_date'] = 'Chủ nhật, NGÀY 01/12/2024';
        $data['event_date_dot'] = '02.12.2024';
        $data['event_address'] = 'Nhà Văn Hóa Thôn Bài Trượng, Xã Hoàng Diệu, Huyện Chương Mỹ, TP Hà Nội';
    }
    else{
        $data['event_name'] = 'LỄ CƯỚI NHÀ NỮ';
        $data['event_time'] = '16:30 PM';
        $data['event_date'] = 'Chủ nhật, NGÀY 01/12/2024';
        $data['event_date_dot'] = '02.12.2024';
        $data['event_address'] = 'Thôn Thành Sơn - Xã Thành Lộc - Hậu Lộc - Thanh';
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
