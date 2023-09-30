@include('doctor.css')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

@include('doctor.header')

@if(session()->has('message'))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
    <strong>{{session()->get('message')}}!</strong>
</div>

@endif
<br>

<div class="container mx-10">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Patient's Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Message</th>
                <th>Edit</th>
                <th>Cancel</th>
            </tr>
        </thead>

        @foreach ($patients as $mypatients)
        <tbody>
            <tr>
                <td>{{$mypatients->name}}</td>
                <td>{{$mypatients->email}}</td>
                <td>{{$mypatients->phone}}</td>
                <td>{{$mypatients->date}}</td>
                <td>{{$mypatients->message}}</td>
                <td><a class="btn btn-outline-primary" href="#">Edit</a></td>

                <td><a class="btn btn-danger" onclick="return confirm('This Action Cant Be Undone')" href="#">Delete</a>
                </td>
        </tbody>
        @endforeach
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>

<br>
@include('doctor.footer')

@include('doctor.script')