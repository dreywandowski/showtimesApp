@extends('layouts.cinemas')
@section('content')

    <div>



            @if(Session::has('message'))

            <p class="alert-warning" > {{ Session::get('message')  }}
            @endif

        <div class="row">
            <div><a href="/cinemas/create_form" class="btn btn-sm btn-primary">
                                Create a new listing
                                </a>
<br><br>
</div>

            @if ($data->count())
                <table class="table">
                    <thead>
                    <tr>
                       <th>
                          
                              &nbsp; &nbsp;   Movie
                            </a>
                        </th>
                       <th>
                        
                                Cinema
                            </a>
                        </th>
                        <th>
                            
                                Showtime
                            </a>
                        </th>
                    
                     <th>
                            View Details
                        </th>

                         <th>
                            Edit
                        </th>
                        <th>
                            Delete
                        </th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $movie)
                        <tr>
                            <td> 
                              &nbsp; &nbsp;  {{ $movie->movie }}</td>
                            <td>{{ $movie->cinema }}</td>
                            <td>{{ date("F jS Y, g:i a", strtotime($movie->showtime)) }}</td>
                            <td>
                                <a href="/cinemas/show/{{$movie->id}}" class="btn btn-sm btn-primary">
                                View Details
                                </a>
                            </td>
        
                            <td>
                                <a href="/cinemas/update_form/{{$movie->id}}" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                            </td>
                               <td>
                              <a href="/cinemas/destroy/{{$movie->id }}" class="btn remove  btn-primary">
                              Delete</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-warning">
                    Your query returned zero results.
                </div>
            @endif
        </div>
</div>
<br><br>


<center>
   <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </div>
                            </center>

@endsection
