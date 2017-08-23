<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Custom CSS -->
    <link  href="{{ asset('/font-awesome/font-awesome.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/be999261ea.js"></script>

    {{--Sweet Alert--}}
    <link rel="stylesheet" href="{{ asset('sweetalert/dist/sweetalert.css') }}" type="text/css">
    <script src="{{ asset('sweetalert/dist/sweetalert.min.js') }}"></script>

</head>
<body>
<div class="container">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalAddProduct"><i class="fa fa-plus" aria-hidden="true"></i></button>
    <table class="table table-hover" id="tblProducts">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>
                <button type="button" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
{{--Modal--}}
<div class="modal fade" id="ModalAddProduct" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title">Update</h4></center>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description">
                    </div>
                    <button type="submit" class="btn btn-info">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{--
end Modal
--}}




<script>
    //TODO: Make ajax get data
    function rowUpdate(id) {
        //alert(id);
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

    function rowDelete(id) {
       // alert(id);
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false
        }).then(function () {
            swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'cancel') {
                swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

    $(function () {
        // GET
//			$.ajax({
//				url: "/api/products",
//				method: "GET",
//				success: function(res) {
//					console.log("res :", res);
//				}
//			});

        // POST
//			$.ajax({
//				url: "/api/products",
//				method: "POST",
//				success: function(res) {
//					console.log("res :", res);
//				}
//			});



        $.get("/api/products", function (res) {
            console.log("res :", res);
            var row = [];

            $.each(res.data, function (i, e) {
                row.push('<tr><td>' + e.id + '</td>');
                row.push('<td>' + e.name + '</td>');
                row.push('<td>' + e.description + '</td>');
                row.push('<td><button type="button" onclick="rowUpdate(' + e.id + ')" class="btn btn-info"><i class="fa fa-pencil"></i></button>');
                row.push('<button type="button" onclick="rowDelete(' + e.id + ')" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>');
                row.push('</tr>');
            });
            $("#tblProducts tbody").html(row.join(''))
        });

//			var data = {
//
//			};
//			$.post("/api/products", data, function(res) {
//				console.log("res :", res);
//			});

    });

</script>
</body>
</html>