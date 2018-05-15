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
                            {{-- @foreach(blabla) --}}
                            <a class="nav-link" id="v-pills-user1-tab" data-toggle="pill" href="#v-pills-user1" role="tab" aria-controls="v-pills-user1" aria-selected="true">
                                <div class="row">
                                    <div class="col-md-3">
                                            <img class="img-responsive img-user-message" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                    </div>
                                    <div class="col-md-9">
                                            <p class="thick">Johnny</p>
                                            <small style="position:relative;top:-15px">You want to check that place out?</small>
                                    </div>
                                </div>   
                            </a>
                            {{-- @endforeach --}}
                            <a class="nav-link" id="v-pills-user2-tab" data-toggle="pill" href="#v-pills-user2" role="tab" aria-controls="v-pills-user2" aria-selected="true">
                                    <div class="row">
                                        <div class="col-md-3">
                                                <img class="img-responsive img-user-message" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                        </div>
                                        <div class="col-md-9">
                                                <p class="thick">Emma</p>
                                                <small style="position:relative;top:-15px">Shouldn't you be working?</small>
                                        </div>
                                    </div>   
                                </a>
                        </div>
                    </div>
                    <div class="col-md-8" style=" overflow-y: scroll;">
                        {{-- foreach(blabla) --}}
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-user1" role="tabpanel" aria-labelledby="v-pills-user1-tab">
                                    <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quibusdam soluta impedit! Explicabo accusantium blanditiis soluta placeat omnis distinctio quaerat sapiente alias dolor quam deleniti quos, dicta incidunt, odio quo.</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis soluta quaerat magni, veniam eum atque, molestiae quia corrupti ea et eaque maiores inventore! Ipsam vel eum reprehenderit delectus repellat consequatur.</p>
                                                </div>
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment pull-right" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, aperiam? Incidunt nostrum quasi, quod sed minima veritatis sit reiciendis delectus qui vero, doloribus alias. Quae voluptates qui eligendi officiis. Ducimus.</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia tenetur quae reprehenderit, impedit perspiciatis totam aperiam! Esse quam vero nulla fugit earum consequuntur, incidunt mollitia, dicta sint natus, id culpa?</p>
                                                </div>
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment pull-right" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                    <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident delectus, libero minima harum error sed ea ad est ducimus molestias asperiores nesciunt, dignissimos modi praesentium earum repellendus tempore omnis doloribus!</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                                    
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe illum similique porro temporibus quis? Itaque fugit omnis, vel veniam accusamus laborum possimus dicta animi saepe neque quam beatae incidunt molestiae.</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-user2" role="tabpanel" aria-labelledby="v-pills-user2-tab">
                                    <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad sed nihil ut quo numquam aspernatur sit maxime odit nesciunt omnis. Iste dolorum dicta non, voluptatem ipsum officia magnam possimus enim!</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nostrum ab, cupiditate numquam fuga illo eligendi minima? Sunt, modi ad aliquid provident laboriosam laudantium hic, quo atque error alias repudiandae!</p>
                                                </div>
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment pull-right" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis ab quisquam ut asperiores alias numquam quis laborum nesciunt iste molestiae tempora sapiente unde, sequi, vitae temporibus reprehenderit magni corporis officia!</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia tenetur quae reprehenderit, impedit perspiciatis totam aperiam! Esse quam vero nulla fugit earum consequuntur, incidunt mollitia, dicta sint natus, id culpa?</p>
                                                </div>
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment pull-right" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                    <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident delectus, libero minima harum error sed ea ad est ducimus molestias asperiores nesciunt, dignissimos modi praesentium earum repellendus tempore omnis doloribus!</p>
                                            </div>
                                        </div>
                                        <div class="row chatbox m-1 p-2">
                                            <div class="col-md-2">
                                                <img class="img-responsive img-user-comment" src="{{asset('images/no-cover.jpeg')}}" alt=""> 
                                                    
                                            </div>
                                            <div class="col-md-10">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe illum similique porro temporibus quis? Itaque fugit omnis, vel veniam accusamus laborum possimus dicta animi saepe neque quam beatae incidunt molestiae.</p>
                                            </div>
                                        </div>
                                        {{-- @endforeach --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
          </div>
      </div>



  </body>
</html>