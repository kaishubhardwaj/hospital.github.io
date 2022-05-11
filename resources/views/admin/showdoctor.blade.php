<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        <!-- partial -->

        <!-- partial:partials/_navbar.html -->

        <!-- navbar start  -->

        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">


            <div class="table-responsive table-bordered" style="padding:100px;">
                <table class="table">
                    <thead style="text-align: center;">
                        <tr>
                            <th style="padding:10px; color:white;">Doctor Name</th>
                            <th style="padding:10px; color:white;">Phone</th>
                            <th style="padding:10px; color:white;">speciality</th>
                            <th style="padding:10px; color:white;">Room No</th>
                            <th style="padding:10px; color:white;">Image</th>
                            <th style="padding:10px; color:white;">Update</th>
                            <th style="padding:10px; color:white;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $doctor)
                        <tr style="background-color: green;">
                            <td style="padding:10px; color:white;">{{$doctor->name}}</td>
                            <td style="padding:10px; color:white;">{{$doctor->number}}</td>
                            <td style="padding:10px; color:white;">{{$doctor->specialty}}</td>
                            <td style="padding:10px; color:white;">{{$doctor->room}}</td>
                            <td style="padding:10px; color:white;">
                                <img src="doctorimage/{{$doctor->image}}">
                            </td>
                            <td style="padding:10px; color:white;">
                                      <a href="{{url('update_doctor', $doctor->id)}}" class="btn btn-primary">
                                                Update
                                      </a>
                            </td>
                            <td style="padding:10px; color:white;">
                                      <a onclick="return confirm('Are you sureto delete this')" href="{{url('deletedoctor', $doctor->id)}}" class="btn btn-danger">
                                                Delete
                                      </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
</body>

</html>


<table class="table ">

    <tr style="background-color:black;" align="center">
        <th style="padding:10px; color:white;">Doctor Name</th>
        <th style="padding:10px; color:white;">Phone</th>
        <th style="padding:10px; color:white;">speciality</th>
        <th style="padding:10px; color:white;">Room No</th>
        <th style="padding:10px; color:white;">Image</th>
    </tr>


    @foreach($data as $doctor)
    <tr style="background-color: green;">
        <td style="padding:10px; color:white;">{{$doctor->name}}</td>
        <td style="padding:10px; color:white;">{{$doctor->number}}</td>
        <td style="padding:10px; color:white;">{{$doctor->specialty}}</td>
        <td style="padding:10px; color:white;">{{$doctor->room}}</td>
        <td style="padding:10px; color:white;">{{$doctor->image}}</td>
        <td style="padding:10px; color:white;"></td>
        <td style="padding:10px; color:white;"></td>

    </tr>
    @endforeach


</table>