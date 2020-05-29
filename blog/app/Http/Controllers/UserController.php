<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller {
    /**
     * Hàm hiển thị danh sách tài khoản
     */
    public function index(){
        $query  = DB::table('users');
        // các lệnh xây dựng truy vấn viết ở đây...


        $list_user = $query->get(); // lệnh lấy dữ liệu.
        return view('user.index',
            ['list_user'=>$list_user]);
    }
    // hàm thêm user
    public function add(){
//        echo "<h2>Thêm mới </h2>";
        return view("user.add");
    }
    // hàm sửa user
    public function edit(){
    }
}
