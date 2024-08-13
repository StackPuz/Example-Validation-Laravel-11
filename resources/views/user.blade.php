<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function fill(valid) {
            document.getElementById('id').value = (valid ? '1' : '')
            document.getElementById('name').value = (valid ? 'foo' : 'my name is foo')
            document.getElementById('email').value = (valid ? 'foo@mail.com' : 'mail')
            document.getElementById('age').value = (valid ? '10' : '101')
            document.getElementById('birth_date').value = (valid ? '01/01/2000' : '01012000')
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <form method="post" action="/users">
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label" for="id">Id</label>
                            <input id="id" name="id" class="form-control form-control-sm" value="{{old('id')}}" type="number" />
                            @error('id')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label" for="name">Name</label>
                            <input id="name" name="name" class="form-control form-control-sm" value="{{old('name')}}" />
                            @error('name')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label" for="email">Email</label>
                            <input id="email" name="email" class="form-control form-control-sm" value="{{old('email')}}" />
                            @error('email')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label" for="age">Age</label>
                            <input id="age" name="age" class="form-control form-control-sm" value="{{old('age')}}" />
                            @error('age')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label" for="birth_date">Birth Date</label>
                            <input id="birth_date" name="birth_date" class="form-control form-control-sm" value="{{old('birth_date')}}" />
                            @error('birth_date')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-12">
                            <input type="button" class="btn btn-sm btn-danger" onclick="fill(0)" value="Fill invaid data" />
                            <input type="button" class="btn btn-sm btn-success" onclick="fill(1)" value="Fill vaid data" />
                            <button class="btn btn-sm btn-primary">Submit</button>
                        </div>
                        @isset($pass)
                        <div class="alert alert-success mt-3">
                            Validation success!
                        </div>
                        @endisset
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>