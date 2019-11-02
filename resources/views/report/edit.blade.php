<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แก้ไขข้อมูลโครงการ</title>

    @include('layout.script_header')
</head>

<body>
    <div class=" container">
        <center>แก้ไขข้อมูลโครงการ</center>

        <form action="{{route('editReport' , ['$model' => $model['idreport']])}}" method="post">
            @csrf

            <div class="form-group">
                    <label>รหัสโครงการ</label>
                    <input type="text" value="{{$model['re_code']}}"  name="re_code" class="form-control">
                </div>

            <div class="form-group">
                <label>ชื่อโครงการ</label>
                <input type="text" value="{{$model['re_name']}}" name="re_name" class="form-control">
            </div>


            <div class="form-group">
                <label>เนื้อหาโครงการ</label>
                <input type="text" value="{{$model['re_content']}}" name="re_content" class="form-control">
            </div>



            <button type="submit" class="btn btn-success">แก้ไขข้อมูลโครงการ</button>
        </form>
    </div>
</body>

</html>