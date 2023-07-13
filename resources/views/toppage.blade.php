@extends('layouts.layout')
@section('pageTitle','postpage')
{{-- @section('title','ECC コンミュニティ') --}}
@section('content')
         <main>
            <div class="split-container">
                    <div class="location-contr" id="" style="padding:20px 0px">
                        <div id="location" class="text-center py-3">
                            <a href="" >
                              <button class="bg-gray-100 hover:bg-blue-200 focus:bg-blue-300" style="border:solid rgb(69, 41, 134)">開発</button>
                              </a>
                            <a href=""><button class="bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200" style="border:solid rgb(155, 200, 67)">イベント</button></a>
                            <a href=""><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300" style="border:solid rgb(183, 68, 68)">WEB</button></a>
                        </div>
                        <div id="location" class="text-center py-3">
                            <a href=""><button class="bg-gray-100 hover:bg-blue-200 focus:bg-blue-300"style="border:solid rgb(69, 41, 134)">メンバー募集</button></a>
                            <a href=""><button class="bg-gray-100 hover:bg-yellow-100 focus:bg-yellow-200"style="border:solid rgb(155, 200, 67)">アイデア募集</button></a>
                            <a href=""><button class="bg-gray-100 hover:bg-red-200 focus:bg-red-300"style="border:solid  rgb(183, 68, 68)">過去の制作物</button></a>
                        </div>
                   </div>

                <div class="container1 p-2 " style="background: rgb(38, 36, 36)">
                    <p style="font-size: 25px; padding-left:25px">過去の代表制作品</p>
                    <div class="slider flex overflow-hidden ">
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project1.png')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project2.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/project3.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/student1.jpg')}}" alt="Image"/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/aaa.jpg')}}" alt=""/></a>
                        </div>
                        <div class="slick-img">
                            <a href=""><img src="{{url('/images/upload1.png')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
            <h4 class="title" style="font-size:30px;padding:2% 0;width:30%">Project </h4>
             {{-- 検索 --}}
             <div class="relative text-end pt-6 " style="width:70%;">
                <input class="bg-gray-300 px-3 py-1.5 focus:outline-none focus:ring-red-500 focus:border-red-500 rounded-l-full text-black " style="width:36%" type="search" placeholder="検索">
                {{-- <input class="border border-gray-300 rounded-md py-2 px-4 pr-10 focus:outline-none focus:ring-blue-500 focus:border-blue-500" style="width:35%" type="search" placeholder=" 検索"> --}}
                <button id="searchbt" style="" class="bg-blue-300 text-white w-10 py-1.5">
                  <i class="fa fa-search"></i>
                </button>
            </div>
            </div>
    <section class="grid grid-cols-1 lg:grid-cols-4 gap-2 " id="view-index">
        @php
        $count = 0;
        $array=["Naoo","a","b","c","d","e","f","abc"];
        @endphp
        @for ($i = 0; $i < count($array); $i++)
        <!-- 一覧画面 -->
            <article class="photo-list row-span-2 bg-black-300 hover:bg-black-300 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <a href="{{route("toppage.create") }}" class="photo-link ">
                    {{-- {{route("toppage.show .$id") }}  --}}
                    <img
                        class="photo-thumb photo-1 "
                        data-content="1"
                        src="{{url('/images/aaa.jpg')}}" alt=""
                        width="640"
                        height="360"
                        alt="button-open"/>
                        <div class="photo-meta ">
                            <p class="title text-yellow-500 text-2xl ">Project : {{$array[$i]}} </p>
                            <p class="user text-lg pl-2">user name</p>
                        </div>
                        <p class="text-gray-400 text-xs text-end pr-6"><time datetime="投稿記事の⽇時">2023/07/26</time></p>
                </a>

            </article>
            @php
                $count++;
            @endphp
        @endfor
    </section>
          <!-- 詳細画面 -->
        {{-- <div class="view-detail" data-content="1" hidden>
            <div class="detail-action">
                    <p>Giá trị của biến count là: {{ $count }}</p>
              <button class="btn button-close ">一覧へもどる</button>
            </div>
            <div class="detail-layout flex">
                <img class="photo-detail photo-1" src="{{url('/images/aa.jpg')}}" width="100%" height="100%" alt="" />
                <div class="information" style="padding: 10px 20px 10px">
                    <!-- タイトル -->
                    <p class="text-3xl" style="color:red" >計算処理</p>

                    <!-- 小見出し -->
                    <p class="i-sub" style="font-size:20px">使用言語：Java</p>

                    <!-- 本文 -->
                    <p class="i-desc"style="font-size: 20px">
                    Java言語で、ループ処理を１００回行うプログラムをどなたか教えていただきたいです
                    </p>
                    <!-- 送信ボタン -->
                    <div class="subbt" style=" position:fixed; bottom: 120px; right: 20px;">
                    <!-- 発注者 -->
                    <p class="client ">大窪悠也</p>
                        <a class="btn btn-custom01" href="###">
                            <span class="btn-custom01-front">応募する！！</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}
        </main>
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <input style="border-radius: 5px" class="bg-gray-300 justify-center" type="search" placeholder="    検索">
                        <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: yellow" >Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}
                <div class="hidden fixed top-0 right-0  sm:block z-10">
        {{-- login 画面 --}}
                    {{-- login の時 --}}
                    @auth
                    <a href="#"><i class="far fa-comment-dots text-yellow hover:text-blue-600" style='font-size:24px; padding:5px '></i></a>
                    <a href="{{ route('profile') }}" >
                        <i class="fas fa-user text-yellow hover:text-yellow-600" style="font-size: 26px;"></i>
                    </a>
                    {{-- loginされてないとき --}}
                    @else
                        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                        <div id="id01" class="modal">
                            <form class="modal-content animate" action="#" method="post">
                                <h1 class="text-center text-3xl font-semibold pt-3 ">Login</h1>
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                              <div class="imgcontainer">
                                <img src="{{url('/images/upload1.png')}}" alt="Avatar" class="avatar mx-auto my-auto " style="border-radius:50%">
                              </div>
                              <div class="container2">
                                    <label for="uname"><b>User</b></label>
                                        <input type="id" id="id"  placeholder="Student ID"  class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                                    <label for="psw"><b>Password</b></label>
                                        <input type="password" id="password"  class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label><br>
                                    <button type="submit">Login</button>
                              </div>
                              <div class="container-b" style="background-color:#5b5656">
                                <span class="psw underline"> <a href="#">Forgot password?</a></span>
                              </div>
                            </form>
                        </div>
                    {{-- 新規登録 --}}
                        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>
                        <div id="id02" class="modal">
                            <form class="modal-content animate" action="" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>
                            <div class="container2">
                                <h1 class="text-center text-3xl font-semibold pt-3 ">Register</h1>
                                    <hr class="bg-red-20 m-2 p-2">
                                    <label for="uname"><b>User ID</b></label>
                                    <input type="id" id="id" placeholder="Student ID" class="pb-3 border-transparent outline-none bg-aliceblue" title="Student ID" required>
                                    <label for=""><b>Password</b></label>
                                        <input type="password" id="password"  class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="PassWord" required>
                                    <label for=""><b>Repeat Password</b></label>
                                        <input type="password" id="repassword" class="pb-3 border-transparent outline-none bg-aliceblue" placeholder="RepassWord" required>
                                    <button type="submit">Register</button>
                                    <p style="text-align: center ">Login with <a href="">gmail</a>,<a href="">facebook</a></p>
                            </div>

                            </form>
                        </div>
                    {{-- @else
                        <a href="#"><i class="far fa-comment-dots text-yellow hover:text-blue-600" style='font-size:24px; padding:5px '></i></a>
                        <a href="{{ route('profile') }}" >
                            <i class="fas fa-user text-yellow hover:text-yellow-600" style="font-size: 26px;"></i>
                        </a> --}}

                    @endauth
                </div>
</section>


@endsection
