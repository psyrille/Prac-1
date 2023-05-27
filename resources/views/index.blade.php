<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIMPLE CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <style>
        .container{
            height: 100vh;
        }
        body{
            font-family: 'Montserrat', sans-serif;
            color:aqua;
        }
    </style>
</head>
<body>
    <div class="container mt-2 d-flex flex-column align-items-center justify-content-center">
        <div class="row">
            <div class="col-lg-12 margin-tb d-flex flex-column align-items-center mb-3">
                <div class="pull-left">
                    <h2><b>SIMPLE CRUD SYSTEM</b></h2>
                </div>
                <div class="pull-right mb-2 mt-3">
                    <a class="btn btn-success" href="{{ route('companies.create') }}"> Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered table-striped mt-5">
            <thead>
                <tr class="table-primary">
                    <th style="text-align: center">Logo</th>
                    <th style="text-align: center">S.No</th>
                    <th style="text-align: center">Company Name</th>
                    <th style="text-align: center">Company Email</th>
                    <th style="text-align: center">Company Address</th>
                    <th width="280px" style="text-align: center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td><img src="{{asset('storage/images/'.$company->logo.'')}}" alt="" style="width: 50px; height: 50px"></td>
                        <td style="text-align: center">{{ $company->id }}</td>
                        <td style="text-align: center">{{ $company->name }}</td>
                        <td style="text-align: center">{{ $company->email }}</td>
                        <td style="text-align: center">{{ $company->address }}</td>
                        <td style="text-align: center">
                            <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $companies->links() !!}
    </div>
</body>
</html>