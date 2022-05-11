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

            <div style="padding-top: 70px;">
                <table class="table-responsive">
                    <thead>
                        <tr style="background-color:black;">
                            <th style="padding:10px; color:white;">Customer Name</th>
                            <th style="padding:10px;color:white;">Email</th>
                            <th style="padding:10px;color:white;">Phone</th>
                            <th style="padding:10px;color:white;">Doctor Name</th>
                            <th style="padding:10px;color:white;">Date</th>
                            <th style="padding:10px;color:white;">Message</th>
                            <th style="padding:10px;color:white;">Status</th>
                            <th style="padding:10px;color:white;">Approve</th>
                            <th style="padding:10px;color:white;">Cancel</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $appoint)
                        <tr style="background-color: green;">
                            <td style="padding:4px; color:white;">{{$appoint->name}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->email}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->phone}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->doctor}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->date}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->message}}</td>
                            <td style="padding:4px; color:white;">{{$appoint->status}}</td>
                            <td>
                                <a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approved</a>
                            </td>
                            <td>
                                <a href="{{url('cancel',$appoint->id)}}" class="btn btn-danger">Cancel</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
</body>

</html>