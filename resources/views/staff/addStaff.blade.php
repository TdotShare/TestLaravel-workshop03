<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('layout.script_header')
</head>

<body>
    <div class=" container">
        <center>เพิ่มข้อมูลพนักงาน</center>

        <form action="{{route('InsertStaff')}}" method="post">
            @csrf

            <div class="form-group">
                <label>ชื่อจริง</label>
                <input type="text" name="sf_fname" class="form-control">

            </div>
            <div class="form-group">
                <label>นามสกุล</label>
                <input type="text" name="sf_sname" class="form-control">
            </div>

            <div class="form-group">
                <label>อายุ</label>
                <input type="number" name="sf_age" class="form-control">
            </div>

            <div class="form-group">
                <label>รหัสพนักงาน</label>
                <input type="text" name="sf_code" class="form-control">
            </div>

            <div class="form-group">
                <label>ตำแหน่งงาน</label>
                <input type="text" name="sf_job" class="form-control">
            </div>



            <button type="submit" class="btn btn-primary">เพิ่มข้อมูลพนักงาน</button>
        </form>
    </div>
</body>

</html>