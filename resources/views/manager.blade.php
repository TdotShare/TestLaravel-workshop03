<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้ามอบหมายงาน</title>
    @include('layout.script_header')
</head>

<body>

    <div class="container">

        <center>
            <h4> สวัสดีคุณ {{session('username')}} สถานะคุณคือ {{session('ac_status')}} </h4>
        </center>
        <hr>
        <br>
        <center>รายชื่อพนักงานทั้งหมดที่จะมอบหมายงาน</center>
        <br>
        <div class='row'>
            <div class="col">
                <center>
                    <form action="/clearSS" method="get">
                        <button type="submit" class="btn btn-danger">ออกจากระบบ</button>
                    </form>
                </center>
            </div>
        </div>
        <br>

        <table class="table table-striped" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อจริง</th>
                    <th scope="col">ชื่อสกุล</th>
                    <th scope="col">อายุ</th>
                    <th scope="col">รหัสพนักงาน</th>
                    <th scope="col">ตำแหน่ง</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach (\App\Staff::all() as $index => $item)
            <tbody>
                <tr>
                    <th scope="row">{{$index + 1}}</th>
                    <td>{{$item['sf_fname']}}</td>
                    <td>{{$item['sf_sname']}}</td>
                    <td>{{$item['sf_age']}}</td>
                    <td>{{$item['sf_code']}}</td>
                    <td>{{$item['sf_job']}}</td>

                    <td>

                        <button type="button" class="btn btn-success">มอบหมายงาน</button>

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