<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Messages</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/agency.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <style>
            /* width */
            ::-webkit-scrollbar {
                width: 10px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                box-shadow: inset 0 0 5px white; 
                border-radius: 10px;    
            }
             
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: lightgrey; 
                border-radius: 10px;
                transition: 0.7s;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: grey; 
            }
            </style>
  </head>
  <body style="min-height: 100%;">
      <!-- Navigation -->
      @include('layouts.partial.header')
      <div class="container">
          <div class="row">
              <div class="col-md-12 center card mt-3">
                <div class="row">
                    <div class="col-md-4 bg-light">
                        <h5 class="pt-2 text-dark text-center thick">Chat Messages</h5> <hr style="background-color:white">
                        <div class="nav flex-column nav-pills row" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($arr as $box)
                            @if($loop->first)
                            <a class="nav-link active" id="v-pills-user{{$box->other_id}}-tab" data-toggle="pill" href="#v-pills-user{{$box->other_id}}" role="tab" aria-controls="v-pills-user{{$box->other_id}}" aria-selected="true">
                                <div class="row">
                                    <div class="col-md-3">
                                            <img class="img-responsive img-user-message" src="{{asset(App\User::find($box->other_id)->user_image)}}" alt=""> 
                                    </div>
                                    <div class="col-md-9">
                                            <p class="thick">{{App\User::find($box->other_id)->complete_name}}</p>
                                            <small style="position:relative;top:-15px">{{str_limit($box->messages, 70, '...')}}</small>
                                    </div>
                                </div>   
                            </a>
                            @else
                                <a class="nav-link" id="v-pills-user{{$box->other_id}}-tab" data-toggle="pill" href="#v-pills-user{{$box->other_id}}" role="tab" aria-controls="v-pills-user{{$box->other_id}}" aria-selected="false">
                                    <div class="row">
                                        <div class="col-md-3">
                                                <img class="img-responsive img-user-message" src="{{asset(App\User::find($box->other_id)->user_image)}}" alt=""> 
                                        </div>
                                        <div class="col-md-9">
                                                <p class="thick">{{App\User::find($box->other_id)->complete_name}}</p>
                                                <small style="position:relative;top:-15px">{{str_limit($box->messages, 70, '...')}}</small>
                                        </div>
                                    </div>   
                                </a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-8" style="border-left:1px solid #dfdfdf;">
                            <div class="tab-content" id="v-pills-tabContent" >
                            @foreach($arr as $box)
                                @if($loop->first)
                                    <div class="tab-pane fade show active" id="v-pills-user{{$box->other_id}}" role="tabpanel" aria-labelledby="v-pills-user{{$box->other_id}}-tab" >
                                        <div style="overflow-y:scroll;min-height:400px;max-height:400px">
                                        @foreach($box->sebagian->reverse()->all() as $chat)
                                            @if($chat->from == $box->other_id)
                                            <div class="row m-1 p-2">
                                                    <div class="col-md-2">
                                                        <img class="img-responsive img-center img-user-message" src="{{asset(App\User::find($box->other_id)->user_image)}}" alt=""> 
                                                    </div>
                                                    <div class="col-md-8 chatbox">
                                                        <p class="v-center">{{$chat->messages}}</p>                                                   
                                                    </div>
                                                </div>
                                            @endif
                                            @if($chat->from == $self_id)
                                            <div class="row m-1 p-2">
                                                <div class="col-md-8 offset-md-2 chatbox">
                                                    <p class="v-center" style="text-align:right">{{$chat->messages}}</p>
                                                    </div>
                                                <div class="col-md-2">
                                                    <img class="img-responsive img-user-message img-center" src="{{asset(App\User::find($self_id)->user_image)}}" alt=""> 
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                        <div>
                                            <form class="form-horizontal" method="POST"  action='{{ url("/messages/send") }}' >
                                                {{csrf_field()}}
                                                <input type="hidden" name="other_id" value="{{$box->other_id}}">
                                                <div class="row" style="border-top:1px solid #dfdfdf">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <textarea name="message" rows="2" class="form-control" style="overflow:auto;resize:none" placeholder="Type a message.."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-primary btn-lg btn-block mt-2">SEND</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                   
                                @else
                                <div class="tab-pane fade" id="v-pills-user{{$box->other_id}}" role="tabpanel" aria-labelledby="v-pills-user{{$box->other_id}}-tab" >
                                        <div style="overflow-y:scroll;min-height:400px;max-height:400px">
                                        @foreach($box->sebagian->reverse()->all() as $chat)
                                            @if($chat->from == $box->other_id)
                                            <div class="row m-1 p-2">
                                                    <div class="col-md-2">
                                                        <img class="img-responsive img-center img-user-message" src="{{asset(App\User::find($box->other_id)->user_image)}}" alt=""> 
                                                    </div>
                                                    <div class="col-md-8 chatbox">
                                                        <p class="v-center">{{$chat->messages}}</p>                                                   
                                                    </div>
                                                </div>
                                            @endif
                                            @if($chat->from == $self_id)
                                            <div class="row m-1 p-2">
                                                <div class="col-md-8 offset-md-2 chatbox">
                                                    <p class="v-center" style="text-align:right">{{$chat->messages}}</p>
                                                    </div>
                                                <div class="col-md-2">
                                                    <img class="img-responsive img-user-message img-center" src="{{asset(App\User::find($self_id)->user_image)}}" alt=""> 
                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                        <div>
                                            <form class="form-horizontal" method="POST"  action='{{ url("/messages/send") }}' >
                                                {{csrf_field()}}
                                                <input type="hidden" name="other_id" value="{{$box->other_id}}">
                                                <div class="row" style="border-top:1px solid #dfdfdf">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <textarea name="message" rows="2" class="form-control" style="overflow:auto;resize:none" placeholder="Type a message.."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-primary btn-lg btn-block mt-2">SEND</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                   
                                @endif
                            @endforeach
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
      </div>



  </body>
</html>