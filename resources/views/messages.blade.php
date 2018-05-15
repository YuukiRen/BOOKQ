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
                            <a class="nav-link" id="v-pills-user{{$box->other_id}}-tab" data-toggle="pill" href="#v-pills-user{{$box->other_id}}" role="tab" aria-controls="v-pills-user{{$box->other_id}}" aria-selected="true">
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
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-8" style="border-left:1px solid #dfdfdf">
                            <div class="tab-content" id="v-pills-tabContent">
                            @foreach($arr as $box)
                            <div class="tab-pane fade show active" id="v-pills-user{{$box->other_id}}" role="tabpanel" aria-labelledby="v-pills-user{{$box->other_id}}-tab">
                                <div class="text-justify-center">
                                        {{$box->sebagian->links()}}  
                                    </div> 
                                    
                                @foreach($box->sebagian->reverse()->all() as $chat)
                                    @if($chat->from == $box->other_id)
                                    <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset(App\User::find($box->other_id)->user_image)}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>{{$chat->messages}}</p>
                                            </div>
                                        </div>
                                    @endif
                                    @if($chat->from == $self_id)

                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-10">
                                                <p>{{$chat->messages}}</p>
                                                </div>
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment pull-right" src="{{asset(App\User::find($self_id)->user_image)}}" alt=""> 
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
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
                            @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
      </div>



  </body>
</html>