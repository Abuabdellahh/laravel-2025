<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <h1>contact us</h1>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>contact us form</h2>
            <form action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </form>
        </div>
    </div>
  </div>

  <h2>{{$name}}</h2>
  <h2>{{$email}}</h2>

  @include('SubViews.input' ,[
    "name"=>$name
    ])

    
 
<!-- @if(isset($i) && $i <= 6)
    <h1>{{ $i }}</h1>
@endif
@for ($i = 1; $i <= 5; $i++)
    <p>Iteration {{ $i }}</p>
@endfor

@foreach (['apple', 'banana', 'orange'] as $fruit)
    <p>{{ $fruit }}</p>
@endforeach

@while ($i <= 10)
    <p>While loop iteration {{ $i }}</p>
    @php
        $i++;
    @endphp
@endwhile -->



</body>
</html>