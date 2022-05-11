<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    @include('admin.css')
    <style>
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->

        <!-- partial:partials/_navbar.html -->

        <!-- navbar start  -->

        @include('admin.navbar')

        <!-- navbar end  -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px;">

                @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>

                    {{session()->get('message')}}

                </div>

                @endif

                <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="write the name" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" style="color:black;" name="number" placeholder="write the number" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Speciality</label>
                        <select name="speciality" style="color:black; width:200px;" required>
                            <option>--Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>
                    <div style="padding: 15px;">
                        <label>Room No</label>
                        <input type="text" style="color:black;" name="room" placeholder="write the room no" required>
                    </div>
                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>
                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>

        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
</body>

</html>