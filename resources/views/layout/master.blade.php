<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css"
rel="stylesheet"
/>
</head>
<body>
    <div class="contaioner">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        All Items
                        <a href="{{url('/create')}}" class="btn btn-sm btn-success ">Create New</a>
                    </div>
                    <div class="card-body">
                       @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script>
</body>
</html>
