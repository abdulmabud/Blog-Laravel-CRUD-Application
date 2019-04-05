@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')


    <div class="row pt-5">

        <div class="col-8">
        
           @foreach ($posts as $post)
           <div class="row mb-5">
               <div class="mx-5 mb-2">
            
                 <img src="{{asset('images/'.$post->imgName)}}" width="700px" height="400px"  alt="">
                </div>
            <div class="ml-5">
                    <h4>{{ $post->title }}</h4>
                    <small>{{ $post->author }}</small>


                    <small>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}
                    </small>
                    <small>{{ $post->category->name }}</small>

                    <p>{{ str_limit($post->description, 200) }}</p>
                    <a href=""><button class="btn btn-success mb-3">Read More</button></a>

            </div>
                
            
            
           </div>
           @endforeach 

        

         </div>

        <div class="col-3 ml-3">

            <div class="social">
                <div class="socialTilte">
                    <p>Social Plugin</p>
                </div>
                <div class="socialIcon">
                    <ul>
                        <li><a href="" class="fa fa-facebook"></a></li>
                        <li><a href="" class="fa fa-twitter"></a></li>
                        <li><a href="" class="fa fa-google-plus"></a></li>
                        <li><a href="" class="fa fa-linkedin"></a></li>
                        <li><a href="" class="fa fa-instagram"></a></li>
                        
                    </ul>
                </div>
            </div>

            <hr>
            <h3>Popular Post</h3>
            @foreach ($posts as $post)
            <h6>{{ str_limit($post->title, 30) }}</h6>  
            @endforeach
            
            

            <h3>Recent Post</h3>
            @foreach ($posts as $post)
            <h6>{{ str_limit($post->title, 30) }}</h6>  
            @endforeach
            
        </div>
    </div>

    <?php


    for ($i=0; $i < 4 ; $i++) { 
        
    }

    ?>
@endsection