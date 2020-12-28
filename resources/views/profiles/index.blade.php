@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
            <img src="https://instagram.fcmb11-1.fna.fbcdn.net/v/t51.2885-19/s150x150/125821082_448987986090703_1612591098712274439_n.jpg?_nc_ht=instagram.fcmb11-1.fna.fbcdn.net&_nc_ohc=M0P5ekU_aY4AX8Bh7vI&tp=1&oh=a5d017c20da621b2a1d3b1e0881e23db&oe=5FF76F42" alt="" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
            <div class=" d-flex justify-content-between">
                <h1>{{ $user->username }}</h1>
                <a href="#"> Add a new post</a>
            </div> 
            <div class="d-flex">
                <div class="pr-3"><strong>153</strong> posts</div>
                <div class="pr-3"><strong>23k</strong> followers</div>
                <div class="pr-3"><strong>212</strong> following</div>
            </div>
            <div class=" pr-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#">{{ $user->profile->url }}</a>     
            </div>
       </div>
   </div>
   <div class="row pt-4">
       <div class="col-4">
           <img src="https://instagram.fcmb11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/125348296_442688343558140_4065751732922878163_n.jpg?_nc_ht=instagram.fcmb11-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=pV0U_YXIlrgAX_UMa9n&tp=1&oh=3c56189ee20b639cf6605e256a601d4e&oe=5FF76398" class=" w-100">
       </div>
       <div class="col-4">
        <img src="https://instagram.fcmb11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.180.1440.1440a/s640x640/123055133_650144062357058_160211718834442071_n.jpg?_nc_ht=instagram.fcmb11-1.fna.fbcdn.net&_nc_cat=102&_nc_ohc=plbVzu2D_dQAX_4nFjx&tp=1&oh=674d99046aaab378778512c305ebfe6c&oe=5FF8A1A8" class=" w-100">
    </div>
    <div class="col-4">
        <img src="https://instagram.fcmb11-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/125348296_442688343558140_4065751732922878163_n.jpg?_nc_ht=instagram.fcmb11-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=pV0U_YXIlrgAX_UMa9n&tp=1&oh=3c56189ee20b639cf6605e256a601d4e&oe=5FF76398" class=" w-100">
    </div>
   </div>
</div>
@endsection
