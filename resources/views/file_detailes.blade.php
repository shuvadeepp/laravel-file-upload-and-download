<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>View Records Page</title>
      <!-- bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
      <!-- bootstrap CDN -->
      <!-- DATABLE CSS -->
      <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
      <!-- DATABLE CSS -->
   </head>
   <body>
      <br><br><br><br>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-6">
               <h1>View Records</h1>
            </div>
         </div>
      </div>
      <br><br>
      <div class="container">
         <table id="view" class="table table-striped" style="width:100%">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>file_name</th>
                  <th>file_desc</th>
                  <th>file_upload</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
                    
               @foreach($data as $list)
              
               <tr>
                  <td>{{$list->id}}</td>
                  <td>{{$list->file_name}}</td>
                  <td>{{$list->file_desc}}</td>
                  
                  <td><img src="assets/{{$list->file_upload}}" height="50" width="50" style="border-radius:50%;"></td>
                
                  <td>
                     <!-- model -->
                     <!-- Button trigger modal -->
                     <input type="button" class="btn btn-success" value="VIEW" data-bs-toggle="modal" data-bs-target="#model{{$list->id}}">

                    
                     <!-- Modal -->
                     <div class="modal fade" id="model{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalLabel">Image ID: {{$list->id}}</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            
                              <div class="modal-body">
                                 <!-- form -->
                                 <img src="assets/{{$list->file_upload}}" alt="" value="" height="280" width="280" class="text-center">
                                 <!-- form -->
                              </div>
                              <div class="modal-footer">
                                  <a href="{{url('/download', $list->file_upload)}}" class="btn btn-warning">Download</a>
                                  <a href="" class="btn btn-danger">Delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- model -->
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
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



      <script>
          $("#{{$list->id}}")
      </script>
   </body>
</html>