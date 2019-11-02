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
                <center>แก้ไขข้อมูลพนักงาน</center>
        
                <form action="{{route('updateStaff' , ['$model' => $model['idstaff']])}}" method="post">
                    @csrf
        
                    <div class="form-group">
                        <label>ชื่อจริง</label>
                    <input type="text" value="{{$model['sf_fname']}}" name="sf_fname" class="form-control">
        
                    </div>
                    <div class="form-group">
                        <label>นามสกุล</label>
                        <input type="text"  value="{{$model['sf_sname']}}" name="sf_sname" class="form-control">
                    </div>
        
                    <div class="form-group">
                        <label>อายุ</label>
                        <input type="number"  value="{{$model['sf_age']}}" name="sf_age" class="form-control">
                    </div>
        
                    <div class="form-group">
                        <label>รหัสพนักงาน</label>
                        <input type="text" value="{{$model['sf_code']}}" name="sf_code" class="form-control">
                    </div>
        
                    <div class="form-group">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" value="{{$model['sf_job']}}" name="sf_job" class="form-control">
                    </div>
        
        
        
                    <button type="submit" class="btn btn-success">ยืนยันแก้ไขข้อมูล</button>
                </form>
            </div>
    
</body>
</html>