<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')


</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           

            <div class="container" align="center" style="padding:100px">
            @if(session()->has('message'))

<div class="alert alert-success">

    <button type="button" class="close" data-dismiss="alert">
        x
    </button>

    {{session()->get('message')}}

</div>

@endif
                <form action="{{url('editdoctor', $data->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black;" name="name" value="{{$data->name}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color:black;" name="number" value="{{$data->phone}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Speciality</label>
                        <input type="text" name="speciality" style="color:black; width:200px;" value="{{$data->specialty}}" required>

                    </div>
                    <div style="padding: 15px;">
                        <label>Room No</label>
                        <input type="text" style="color:black;" name="room" value="{{$data->room}}" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                        <img width="150px" height="150px" src="doctorimage/{{$data->image}}">
                    </div>
                    <div style="padding: 15px;">
                        <label>Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
        <!-- navbar start  -->

        @include('admin.navbar')

        <!-- navbar end  -->

        <!-- partial -->

        <!-- main-panel ends -->
    </div>

    @include('admin.script')
</body>

</html>