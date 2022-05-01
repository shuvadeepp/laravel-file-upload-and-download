<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Page</title>

    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- bootstrap CDN -->
    <!-- DATABLE CSS -->
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <!-- DATABLE CSS -->
</head>
<body>
    
    <div class="container">
    <br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Upload Form</h1>
        </div>
    </div><br><br>
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form action="{{url('uploadfile')}}" method="POST" enctype="multipart/form-data">

                @csrf


                <div class="mb-3">
                    <label for="file_name" class="form-label">File Name</label>
                    <input type="text" class="form-control" name="file_name" id="file_name" placeholder="Enter File Name">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="file_desc" class="form-label">File Description</label>
                    <input type="text" class="form-control" name="file_desc" id="file_desc" placeholder="Enter File Description">
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="file_upload" class="form-label">Upload Your FIle</label>
                    <input type="file" class="form-control" name="file_upload" id="file_upload">
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
    





    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <!-- jquery validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <!-- jquery validation -->


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
    <!-- bootstrap -->


    <!-- data table -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" ></script>

    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" ></script>
    <!-- data table -->
    <!-- data table script -->
    <script type="text/javascript">
    $(document).ready(function() {
        $('#view').DataTable();
    } );
    </script>
    <!-- data table script -->
</body>
</html>