<html lang="en">
<head>
    <title>Laravel DataTables Tutorial Example</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Laravel DataTables Tutorial Example</h2>

               <div class="panel panel-default">
                     <div class="panel-heading">
                         <h3 class="panel-title">Custom Filter [Case Sensitive]</h3>
                     </div>
                     <div class="panel-body">
                         <form method="POST" id="search-form" class="form-inline" role="form">
                 
                             <div class="form-group">
                                 <label for="name">Name</label>
                                 <input type="text" class="form-control" name="name" id="name" placeholder="search name">
                             </div>
                             <div class="form-group">
                                 <label for="email">Email</label>
                                 <input type="text" class="form-control" name="email" id="email" placeholder="search email">
                             </div>
                 
                             <button type="submit" class="btn btn-primary">Search</button>
                         </form>
                     </div>
                 </div>

            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                  </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
            var oTable = $('#table').DataTable({
               dom: "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
            "<'row'<'col-xs-12't>>"+
            "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
               processing: true,
               serverSide: true,
               //ajax: '{{ url('index') }}',
               ajax: {
                  url: '{{ url('index') }}',
                  data: function (d) {
                     d.name = $('input[name=name]').val();
                     d.email = $('input[name=email]').val();
                  }
            },
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' }
                     ]
            });

            $('#search-form').on('submit', function(e) {
               oTable.draw();
               e.preventDefault();
            });
         });
         </script>
   </body>
</html>