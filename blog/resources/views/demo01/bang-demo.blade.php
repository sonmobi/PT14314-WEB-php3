<h2>Bảng dữ liệu</h2>

@foreach($bang_dulieu as $objRow)
    ID: {{ $objRow->id }} <br>
    Name: {{$objRow->name}} <br>
    Des: {{$objRow->des }}
    <hr>
@endforeach
