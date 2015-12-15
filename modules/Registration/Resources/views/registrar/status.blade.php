@extends('layouts.registered')
@section('content')
<div class="x_panel">
    <div class="x_title">
        <h2>حالة الطلب</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <div>
          
            <!-- end of user messages -->
            <ul class="messages">
                @each('registration::registrar._statu',$histories->reverse(),'history','registration::registrar._no_status')
        </ul>
        <!-- end of user messages -->
    </div>
</div>
</div>
@stop