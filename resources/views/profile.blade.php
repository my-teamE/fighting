@extends('layouts.profilelayout')
@section('pageTitle','profilepage')
@section('title','Profile')
@section('content')
    <section>
        <div class="profile">
            <div class="avatar-con">
                <div class="avatar">
                <img src="{{ url('/images/upload1.png') }}" alt="">
                 <p > Naoo Sakuta</p>
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>
            <div class="introduction">
                <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                    <p>Full name:</p>
                    <p>Gender:</p>
                    <p>Class:</p>
                    <p>Student ID:</p>
                </div>
                <div style="width:10%"></div>
                <div class="skill text-lg p-4 "  style="background-color:#c8bec6;width:35%">
                    <p>GidHub:</p>
                    <p>Skill:</p>
                    <p>Comment:</p>
                    <p>  </p>
                </div>

            </div>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{route('toppage.index') }}" class="text-lg text-gray-300 dark:text-gray-700 underline">Top Page</a><br>
                <button style='font-size:20px'>編集 <i class='far'>&#xf044; </i></button>
           </div>
        </div>
        {{-- 編集ボタン押したら --}}
        <div class="profile-edit " >
            <div class="avatar-con flex">
                <div class="">
                    {{-- <img src="{{ url('/images/upload1.png') }}" alt=""> --}}
                    <label for="file-upload" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded cursor-pointer">
                        <input type="file" id="file-upload" class="hidden">
                        <img src="{{ url('/images/upload1.png') }}" alt="">
                    </label>
                    <input type="text" class="text-lg" value="Naoo Sakuta">
                </div>
            </div>
            <h1 style="font-size: 30px;color:rgbs146, 15, 15);padding:0 0 10px 110px">紹介</h1>
            <div class="introduction">
                <div class="private text-lg p-4 " style="background-color:#c8bec6;width:35%">
                    <p>Full name:</p>
                    <p>Gender:</p>
                    <p>Class:</p>
                    <p>Student ID:</p>
                </div>
                <div style="width:10%"></div>
                <div class="skill text-lg p-4 "  style="background-color:#c8bec6;width:35%">
                    <p>GidHub:</p>
                    <p>Skill:</p>
                    <p>Comment:</p>
                    <p>  </p>
                </div>

            </div>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                <a href="{{route('toppage.index') }}" class="text-lg text-gray-300 dark:text-gray-700 underline">Top Page</a><br>
                <button style='font-size:20px'>編集 <i class='far'>&#xf044; </i></button>
           </div>
        </div>

    </section>


@endsection
