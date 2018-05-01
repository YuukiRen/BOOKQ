<!DOCTYPE html>
<html lang="en">
<head>
    <title>BookQ Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
             <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Title</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $counter=0;
                ?>
                @if(count($books)>0)
                    @foreach($books->all() as $book)
                <?php
                $counter++;
                ?>  
                    
                <tr class="table-active">
                  <th scope="row">{{ $counter }}</th>
                  <td>{{ $book->title }}</td>
                  <td>{{ $book->description }}</td>
                  
                </tr>
                    @endforeach
                @endif
              </tbody>
            </table>
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
