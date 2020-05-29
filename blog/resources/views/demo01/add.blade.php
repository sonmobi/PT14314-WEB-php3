<h1>Trang thêm mới</h1>
Xin chào: {{$ten}} <br>
Cách khác: {!!   $ten    !!}
<br>
Địa chỉ trang thêm:  {{  route('Demo01.add')  }} <br>
<a href="{{  route('Demo01.add')  }}">Thêm sản phẩm</a>

<br>
Địa chỉ sửa User có ID là 5:  {{ route('Demo01.edit', [ 'iduser' =>5 ]  ) }}
