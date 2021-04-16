<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Uploading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<style>
    .container{
            margin-top: 2%;
    }
</style>
</head>
<body>
    @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    <div class="container">
    <div class="row">
    <div class="col-md-2"> <img src="" width="80"></div>
    <div col-md-8><h2>Laravel Multiple File Uploading With Bootstrap Form</h2>
    
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="http://localhost/pro1/public/multiuploads" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    <div class="form-group">
    <label for="Product Name">Product Name</label>
    <input type="text" name="name" class="form-control" placeholder="Product Name">
    </div>
    <label for="Product Name">Product photos (can attach more than one):</label>
    <br />
    <input type="file" class="form-control" name="photos[]" multiple />
    <br/><br />
    <input type="submit" class="btn btn-primary" value="Upload" />
    </form>
    </div>
    </div>
    </div>
    
</body>
</html>