@include('includes.adminHeader')
@include('includes.adminSidebar')
@include('includes.adminNav')

<body>

  <div class="container">
  <h1> Beach Details </h1>
  <div>
        <hr />
        <dl class="row">
                @foreach($beach as $beach)
                <dt class = "col-sm-2"> ID</dt>
                <dd class = "col-sm-10">{{$beach->id }}</dd>

                <dt class = "col-sm-2">Name</dt>
                <dd class = "col-sm-10">{{$beach->name }} </dd>

                <dt class = "col-sm-2">Description </dt>
                <dd class = "col-sm-10"> {{$beach->description }}</dd>

                <dt class = "col-sm-2"> Latitude</dt>
                <dd class = "col-sm-10"> {{$beach->latitude }} </dd>

                <dt class = "col-sm-2"> Longitude</dt>
                <dd class = "col-sm-10">{{$beach->longitude }}</dd>

                <dt class = "col-sm-2"> Image</dt>
                <dd class = "col-sm-10">{{$beach->image }}</dd>

                <dt class = "col-sm-2"> User</dt>
                <dd class = "col-sm-10">{{$beach->user_name }}</dd>

                <dt class = "col-sm-2"> City</dt>
                <dd class = "col-sm-10">{{$beach->city_name }}</dd>
                @endforeach
        </dl>
  </div>
  <a href ="{{ action('BeachesController@editView',$beach->id ) }}" method="POST" >Edit</a> |
  <a href="{{ action('BeachesController@index') }}">Back to List</a>
{{-- container --}}


  @include('includes.adminFooter')
