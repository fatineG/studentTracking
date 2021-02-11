<x-guest-layout>
<x-slot name="slot">

    
            
                
           
     
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="container" action="{{ route('students.store') }}" method="POST" >
        @csrf
        <div class="">
        <h2 class="text-center">Add attendance</h2>
        <div class="row justify-content-center">
            <div class="col-xs-10 col-sm-10 col-md-6 ">
                <div class="">
                    <strong>Room Number:</strong>
                    <input  readonly type="number" class="form-control" name="roomnumber" class="form-control" placeholder="Name" value="{{$_GET['roomnumber']}}">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-6">
                <div class="form-group ">
                    <strong>Telephone:</strong>
                    <input type="text" class="form-control" required  name="telephone"
                        placeholder="telephone">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-6">
                <div class="form-group ">
                    <strong>Student ID:</strong>
                    <input type="text" name="studentid" required class="form-control" placeholder="studentid">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-6">
                <div class="form-group ">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-6">
                <div class="form-group ">
                    <strong>Surname:</strong>
                    <input type="text" name="surname" class="form-control" placeholder="surname">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </div>

    </form>
    </x-slot>

    </x-guest-layout>