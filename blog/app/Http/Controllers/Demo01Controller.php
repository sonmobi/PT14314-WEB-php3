<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class Demo01Controller extends  Controller{
    public function BangDemo(){
        echo __METHOD__ .'<br>';
        $query = DB::table('bang_demo'); // tạo câu truy vấn
        $query->orderBy('id','desc');
        $query->where('id','>=',2);


        echo '<br> SQL= '. $query->toSql(); // in ra màn hình cấu trúc câu lệnh SQL
        //gọi lệnh lấy dữ liệu:
        $bang = $query->get();

        echo '<pre>';
        print_r($bang);

        return view('demo01.bang-demo', ['bang_dulieu'=>$bang]);
    }



    public function add(){
        echo "<br>Gọi hàm: " . __METHOD__;

        $hoTen = "<b>Nguyen Van A</b>";

        return view( 'demo01.add',['ten'=>$hoTen]);
    }

    public function edit($iduser){
        $dataView = []; // khai báo mảng để chứa dữ liệu sẽ truyền ra view
        echo "<br>Gọi hàm: " . __METHOD__;

        $hoTen = "<b>Nguyen Van A</b>";

        $dataView['ten'] = $hoTen;
        $dataView['user'] = $iduser;

        return view('demo01.edit', $dataView  );
    }
}
