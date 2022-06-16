<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body style="background-color:#d4d0c5;">
    <div class="container mt-5 mb-3">
    <div class="form-group">
    <label for="exampleInputSearch">Search</label>
    <input type="text" id="search" class="form-control"   placeholder="Search name/department/designation">
    <small id="emailHelp" class="form-text text-muted"></small>
    </div><br>
   
        <div class="row mycard">
        @foreach ($users as $user)
        <div class="col-md-6">
            <div class="card  p-3 mb-2">
                <h5 class="card-title">{{ $user->Name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $user->department_name }}</h6>
                    <p class="card-text">{{ $user->designation_name }}</p>
            </div>
        </div>
         @endforeach
    </div>
   
    
    
</div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<script>
    $(document).ready(function () {
        $('#search').on('keyup', function(){
            var value = $(this).val();
            
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    var res = '';
                    
                     $.each (data, function (key, value) {
                        res +='<div class="col-md-6">'+
                                    '<div class="card  p-3 mb-2">'+
                                        '<h5 class="card-title">'+value.Name+' </h5>'+
                                        '<h6 class="card-subtitle mb-2 text-muted">'+value.department_name+'</h6>'+
                                        '<p class="card-text">'+value.designation_name+'</p>'+
                                    '</div>'+ 
                                 '</div>';

                    });
                    $('.mycard').html(res);
                }
            });
        });
    });
</script>
</body>
</html>
