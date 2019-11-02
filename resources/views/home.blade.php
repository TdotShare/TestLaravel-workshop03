<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @extends('layout.script_header')

</head>

<body>
    <div class="container">

        <br>

        <center><button type="button" class="btn btn-primary">หนังสือของฉัน</button></center>

        <hr>

        @if ($payBook != null)

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>การทำงานเสร็จสิน</strong> คุณได้ทำการยืมหนังสือเรียบร้อย
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        @else


        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อภาษาไทย</th>
                    <th scope="col">ชื่อภาษาอังกฤษ</th>
                    <th scope="col">หมวด</th>
                    <th scope="col">ราคา</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($b_book as $index => $item)
            <tbody>
                <tr>
                    <th scope="row">{{$index + 1}}</th>
                    <td>{{$item['name_th']}}</td>
                    <td>{{$item['name_en']}}</td>
                    <td>{{$item['category_name']}}</td>
                    <td>{{$item['price']}}</td>

                    <td>
                        <form action="/payBook/{{$item['idbook']}}" method="get">
                            <button type="submit" class="btn btn-success">ยืมหนังสือ</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</body>

</html>

<script>
    function payBook(id) {
        console.log("test !" + id)


        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/payBook",
            data : { "id" : id },
            success: function (res) {
                console.log(res.data)
            }
        });; 
    }

</script>