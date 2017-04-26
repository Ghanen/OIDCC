<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        /*#makeMeDraggable { width: 300px; height: 300px; background: red; }*/
    </style>

    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>--}}
    {{--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>--}}
    <script type="text/javascript">
        {{--function doFirst(){--}}
            {{--pic = document.getElementById('image');--}}
            {{--pic.addEventListener("dragstart", startDrag, false);--}}
            {{--pic.addEventListener("dragend", endDrag, false);--}}
            {{--leftbox = document.getElementById('leftbox');--}}
            {{--leftbox.addEventListener("dragenter", dragenter,false);--}}
            {{--leftbox.addEventListener("dragleave", dragleave,false);--}}
            {{--leftbox.addEventListener("dragover", function(e){e.preventDefault();},false);--}}
            {{--leftbox.addEventListener("drop", dropped,false);--}}
        {{--}--}}

        {{--function endDrag(e) {--}}
            {{--picture = e.target;--}}
            {{--pic.style.visibility = 'hidden';--}}
        {{--}--}}
        {{--function dragenter(e) {--}}
            {{--e.preventDefault();--}}
            {{--leftbox.style.background='SkyBlue';--}}
            {{--leftbox.style.border='1px solid red';--}}
        {{--}--}}

        {{--function dragleave(e) {--}}
            {{--e.preventDefault();--}}
            {{--leftbox.style.background='SkyBlue';--}}
            {{--leftbox.style.border='1px solid black';--}}
        {{--}--}}

        {{--function startDrag(e){--}}
            {{--var code = '<img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}">';--}}
            {{--e.dataTransfer.setData('Text', code);--}}
        {{--}--}}
        {{--function dropped(e){--}}
            {{--e.preventDefault();--}}
            {{--leftbox.innerHTML = e.dataTransfer.getData('Text');--}}
        {{--}--}}

        {{--window.addEventListener("load", doFirst, false);--}}
{{--//        function allowDrop(ev) {--}}
{{--//            ev.preventDefault();--}}
{{--//        }--}}
{{--//--}}
{{--//        function drag(ev) {--}}
{{--//            ev.dataTransfer.setData("text", ev.target.id);--}}
{{--//        }--}}
{{--//--}}
{{--//        function drop(ev) {--}}
{{--//            ev.preventDefault();--}}
{{--//            var data = ev.dataTransfer.getData("text");--}}
{{--//            ev.target.appendChild(document.getElementById(data));--}}
{{--//        }--}}

{{--//new--}}
{{--//        $( init );--}}
{{--//--}}
{{--//        function init() {--}}
{{--//            $('#makeMeDraggable').draggable();--}}
{{--//        }--}}
{{--//        function init() {--}}
{{--//            $('#makeMeDraggable').draggable( {--}}
{{--//                containment: '#content',--}}
{{--//                cursor: 'move',--}}
{{--//                snap: '#content'--}}
{{--//            } );--}}
{{--//        }--}}
    </script>

</head>

{{--<script type="text/javascript" src="{{ URL::asset('js/designing.js') }}"></script>--}}

</head>
<body>

@extends('systemUsers.users_layouts.userNav')

@section('content')

    <div class="jumbotron container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div align="centre">

                            <ul class="nav nav-tabs" role="tablist">

                                <li  role="presentation" class="active"><a href="#detail" aria-controls="home" role="tab"
                                                                          data-toggle="tab"> Horizontal </a></li>
                                <li role="presentation"><a href="#list" aria-controls="home" role="tab"
                                                           data-toggle="tab"> Vertical </a></li>

                            </ul>


                            For the Horizontal Design
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="detail">
                                    <div class="container" style="padding:5px;width:100%">
                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">

                                                    <div class="list-group">
                                                        <p>Select the Employee ID to create ID card:</p>
                                                        <form action="" id="form_id" method="post" class="form-horizontal">
                                                            {{ csrf_field() }}
                                                            <SELECT class="btn btn-info" name="id" value="">
                                                                @if (!empty($Employee))
                                                                <?php foreach($Employee as $employee) { ?>
                                                                <OPTION VALUE="<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                                </OPTION>
                                                                <?php } ?>
                                                                @endif
                                                            </SELECT><br>
                                                            <button style="display: inline" type="submit">Go</button>
                                                        </form>
                                                        {{--<section id="leftbox" class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">--}}
                                                            {{--ID card front design!!!--}}
                                                        {{--</section>--}}

                                                        {{--<section id="rightbox">--}}
                                                            {{--ID card back design!!!--}}
                                                        {{--</section>--}}
                                                        {{--<img id="image" src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" height:100px; width:120px;>--}}
                                                        {{--<div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">--}}
                                                            {{--<input class="form-control" type="text" ondragstart="dragStart(event)" draggable="true" id="dragtarget">--}}
                                                        {{--</div>--}}

                                                        <script>
                                                            function allowDrop(ev) {
                                                                ev.preventDefault();
                                                            }

                                                            function drag(ev) {
                                                                ev.dataTransfer.setData("text", ev.target.id);
                                                            }

                                                            function drop(ev) {
                                                                ev.preventDefault();
                                                                var data = ev.dataTransfer.getData("text");
                                                                ev.target.appendChild(document.getElementById(data));
                                                            }
                                                        </script>
                                                        {{--<script>--}}
                                                            {{--function drag_start(event) {--}}
                                                                {{--var style = window.getComputedStyle(event.target, null);--}}
                                                                {{--event.dataTransfer.setData("text/plain",--}}
                                                                    {{--(parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));--}}
                                                            {{--}--}}

                                                            {{--function drop(event) {--}}
                                                                {{--var offset = event.dataTransfer.getData("text/plain").split(',');--}}
                                                                {{--var dm = document.getElementById('drag1');--}}
                                                                {{--dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';--}}
                                                                {{--dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';--}}
                                                                {{--event.preventDefault();--}}
                                                                {{--return false;--}}
                                                            {{--}--}}
                                                            {{--function drag_over(event) {--}}
                                                                {{--event.preventDefault();--}}
                                                                {{--return false;--}}
                                                            {{--}--}}
                                                            {{--var dm = document.getElementById('drag1');--}}
                                                            {{--dm.addEventListener('drag',drag_start,false);--}}
                                                            {{--document.body.addEventListener('allowDrop',drag_over,false);--}}
                                                            {{--document.body.addEventListener('drop',drop,false);--}}

                                                        {{--</script>--}}
                                                        <div id="leftbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>

                                                        <div id="rightbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>
                                                        <img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" id="drag1" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">
                                                    </div>

                                                    <div>
                                                        <textarea type="text" id="drag20" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;"></textarea>
                                                    </div>


                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr height="40">
                                                                <td width="35%" align="left" id="drag8" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Name</td>
                                                                <td width="02%" align="center" id="drag9" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag2" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                       {{ $Employee->first()->first_name }}
                                                                      @else

                                                                   @endif
                                                                </td>
                                                            </tr><br>
                                                            <tr>
                                                                <td align="" id="drag10" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Company</td>
                                                                <td align="center" id="drag11" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag3" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->company_name }}
                                                                    @else
                                                                    @endif</td>
                                                            </tr><br>
                                                            <tr>
                                                                <td width="35%">Image</td>
                                                                <td width="02%">:</td>
                                                                <td id="drag4" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        <img src="{{ asset('images/emp/')}}/{{ $Employee->first()->image }}" id="drag22" draggable="true" ondragstart="drag(event)" style="height:100px; width:100px;">
                                                                    @else
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag14" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Address</td>
                                                                <td align="center" id="drag15" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag5" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->address }}
                                                                    @else
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag16" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Email</td>
                                                                <td align="center" id="drag17" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag6" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->email }}
                                                                    @else
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag18" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Contact</td>
                                                                <td align="center" id="drag19" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag7" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->contact }}
                                                                    @else
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag26" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Position</td>
                                                                <td align="center" id="drag27" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag7" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->position }}
                                                                    @else
                                                                    @endif</td>
                                                            </tr>
                                                        </table>




                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div role="tabpanel" class="tab-pane" id="list">
                                    For the Vertical Design

                                    <div class="container" style="padding:5px;width:100%">


                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">

                                                    <div class="list-group">
                                                        <p>Select the Employee ID to create ID card:</p>
                                                        <form action="" id="form_id" method="post" class="form-horizontal">
                                                            {{ csrf_field() }}
                                                            <SELECT class="btn btn-info" name="id" value="">
                                                                @if (!empty($Employee))
                                                                <?php foreach($Employee as $employee) { ?>
                                                                <OPTION VALUE="<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                                </OPTION>
                                                                <?php } ?>
                                                                @endif
                                                            </SELECT><br>
                                                            <button style="display: inline" type="submit">Go</button>
                                                        </form>

                                                        <div id="vleftbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>

                                                        <div id="vrightbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>
                                                        <img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" id="drag1" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">
                                                    </div>


                                                    {{--<div id="content" style="height: 400px; border: 1px solid black;">--}}

                                                    {{--<div id="makeMeDraggable"> </div>--}}

                                                    {{--</div>--}}

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tr height="40">
                                                                <td width="35%" align="left" id="drag8" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Name</td>
                                                                <td width="02%" align="center" id="drag9" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag2" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->first_name }}
                                                                    @endif
                                                                </td>
                                                            </tr><br>
                                                            <tr>
                                                                <td align="" id="drag10" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Company</td>
                                                                <td align="center" id="drag11" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag3" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->company_name }}
                                                                    @endif</td>
                                                            </tr><br>
                                                            <tr>
                                                                <td width="35%">Image</td>
                                                                <td width="02%">:</td>
                                                                <td id="drag4" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        <img src="{{ asset('images/emp/')}}/{{ $Employee->first()->image }}" id="drag22" draggable="true" ondragstart="drag(event)" style="height:100px; width:100px;">
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag14" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Address</td>
                                                                <td align="center" id="drag15" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag5" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->address }}
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag16" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Email</td>
                                                                <td align="center" id="drag17" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag6" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->email }}
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag18" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Contact</td>
                                                                <td align="center" id="drag19" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag7" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->contact }}
                                                                    @endif</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="" id="drag26" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">Position</td>
                                                                <td align="center" id="drag27" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">:</td>
                                                                <td id="drag7" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        {{ $Employee->first()->position }}
                                                                    @endif</td>
                                                            </tr>
                                                        </table>



                                                        <div>
                                                            <textarea type="text" id="drag20" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;"></textarea>
                                                        </div>
                                                    </div>



                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>


        </div>
    </div>


    {{--<script>--}}

        {{--$('form#form_id a').click(function(e){--}}
            {{--$('form#form_id').submit();--}}
            {{--e.preventDefault();--}}
            {{--return false;--}}
        {{--});--}}
    {{--</script>--}}


@endsection
</body>
</html>

