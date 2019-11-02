<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายชื่อโครงการ</title>
    @include('layout.script_header')
</head>

<body>

    <div class="container">

        <center>
            <h4> สวัสดีคุณ {{session('username')}} สถานะคุณคือ {{session('ac_status')}} </h4>
        </center>
        <hr>

        <br>
        <center>รายชื่อโครงการทั้งหมด</center>
        <br>

        <div class='row'>
            <div class="col">
                <center>
                    <form action="{{route('addReport')}}" method="get">
                        <button type="submit" class="btn btn-primary">เพิ่มข้อมูลโครงการ</button>
                    </form>
                </center>
            </div>
            <div class="col">
                <center>
                    <form action="/admin" method="get">
                        <button type="submit" class="btn btn-primary">จัดการข้อมูลพนักงาน</button>
                    </form>
                </center>
            </div>
        </div>
        <br>

        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">รหัสโครงการ</th>
                    <th scope="col">ชื่อโครงการ</th>
                    <th scope="col">เนื้อหา</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach (\App\Report::all() as $index => $item)
            <tbody>
                <tr>
                    <th scope="row">{{$index + 1}}</th>
                    <td>{{$item['re_code']}}</td>
                    <td>{{$item['re_name']}}</td>
                    <td>{{$item['re_content']}}</td>

                    <td>
                        <form action="/editReport/{{$item['idreport']}}" method="get">
                            <button type="submit" class="btn btn-success">แก้ไขข้อมูลโครงการ</button>
                        </form>
                    </td>
                    <td>
                        <form action="/deleteReport/{{$item['idreport']}}" method="get">
                            <button type="submit" class="btn btn-danger">ลบข้อมูลโครงการ</button>
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


</script>