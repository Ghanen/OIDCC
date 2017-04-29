<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
        }

        .dropdown-content li {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content li:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>--}}
    <script src="https://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
    {{--<script type="text/javascript" src="{{ URL::asset('js/canvas.js') }}"></script>--}}


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
                                                                @if (isset ($Employee))
                                                                <?php foreach($Employee as $employee) { ?>
                                                                <OPTION VALUE="<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                                </OPTION>
                                                                <?php } ?>
                                                                @endif
                                                            </SELECT><br>
                                                            <button style="display: inline" type="submit">Go</button>
                                                        </form>
                                                        {{--<button class="btn btn-success pull-right" type="button" onclick="myFunction()">Set background color</button>--}}

                                                        <div class="dropdown">
                                                            <button class="dropbtn">Select Color</button>
                                                            <div class="dropdown-content">
                                                                <ul>
                                                                    <li onclick="myFunctionb()">Blue</li>
                                                                    <li onclick="myFunctionr()">Red</li>
                                                                    <li onclick="myFunctiony()">Yellow</li>
                                                                    <li onclick="myFunctionp()">Pink</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        {{--Color Picker Script--}}
                                                        <script>
                                                            function myFunctionb() {
                                                                document.getElementById("rightbox").style.backgroundColor = "lightblue";
                                                                document.getElementById("leftbox").style.backgroundColor = "lightblue";
                                                            }
                                                            function myFunctionr() {
                                                                document.getElementById("rightbox").style.backgroundColor = "#ff6666";
                                                                document.getElementById("leftbox").style.backgroundColor = "#ff6666";
                                                            }
                                                            function myFunctiony() {
                                                                document.getElementById("rightbox").style.backgroundColor = "#ffff80";
                                                                document.getElementById("leftbox").style.backgroundColor = "#ffff80";
                                                            }
                                                            function myFunctionp() {
                                                                document.getElementById("rightbox").style.backgroundColor = "#ffcccc";
                                                                document.getElementById("leftbox").style.backgroundColor = "#ffcccc";
                                                            }
                                                        </script>
                                                        {{--end script for color picker--}}


                                                        {{--Start Drag and Drop--}}
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
                                                                document.getElementById("rightbox").style.marginLeft = "10px";
                                                            }
                                                        </script>
                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image2" href="#">Front Download</a>
                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image" href="#">Back Download</a>
                                                        <input class="btn btn-info" id="btn-Preview-Image" type="button" value="Preview" />

                                                        <script>
                                                            $(document).ready(function(){


                                                                var element = $("#leftbox"); // global variable
                                                                var getCanvas; // global variable

                                                                $("#btn-Preview-Image").on('click', function () {
                                                                    html2canvas(element, {
                                                                        onrendered: function (canvas) {
                                                                            $("#previewImage").append(canvas);
                                                                            getCanvas = canvas;
                                                                        }
                                                                    });
                                                                });
                                                                $("#btn-Convert-Html2Image2").on('click', function () {
                                                                    var imgageData = getCanvas.toDataURL("image/png");
                                                                    // Now browser starts downloading it instead of just showing it
                                                                    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                                                    $("#btn-Convert-Html2Image2").attr("download", "ID Card.png").attr("href", newData);
                                                                });

                                                            });
                                                            $(document).ready(function(){


                                                                var element = $("#rightbox"); // global variable
                                                                var getCanvas; // global variable

                                                                $("#btn-Preview-Image").on('click', function () {
                                                                    html2canvas(element, {
                                                                        onrendered: function (canvas) {
                                                                            $("#previewImage").append(canvas);
                                                                            getCanvas = canvas;
                                                                        }
                                                                    });
                                                                });

                                                                $("#btn-Convert-Html2Image").on('click', function () {
                                                                    var imgageData = getCanvas.toDataURL("image/png");
                                                                    // Now browser starts downloading it instead of just showing it
                                                                    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                                                    $("#btn-Convert-Html2Image").attr("download", "ID Card.png").attr("href", newData);
                                                                });

                                                            });

                                                        </script>


                                                        <script>


                                                        </script>

                                                        <div id="leftbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>

                                                        <div id="rightbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>
                                                        <img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" id="drag1" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">
                                                    </div>
                                                    <div id="previewImage">

                                                    <div>
                                                        <textarea type="text" id="drag20" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;"></textarea>
                                                    </div>
                                                    @if  ($Employee->count() != 0)
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
                                                                    @else
                                                                    @endif</td>
                                                            </tr><br>
                                                            <tr>
                                                                <td width="35%">Image</td>
                                                                <td width="02%">:</td>
                                                                <td id="drag4" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">@if(Sentinel::check())
                                                                        <img src="{{ asset('images/emp/')}}/{{ $Employee->first()->image }}" id="drag5" draggable="true" ondragstart="drag(event)" style="height:80px; width:80px;">
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
                                                    @endif
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
                                                                @if (isset ($Employee))
                                                                <?php foreach($Employee as $employee) { ?>
                                                                <OPTION VALUE="<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                                </OPTION>
                                                                <?php } ?>
                                                                @endif
                                                            </SELECT><br>
                                                            <button style="display: inline" type="submit">Go</button>
                                                        </form>


                                                        <div class="dropdown pull-right">
                                                            <button class="dropbtn">Select Color</button>
                                                            <div class="dropdown-content">
                                                                <ul>
                                                                    <li onclick="myFunctionbv()">Blue</li>
                                                                    <li onclick="myFunctionrv()">Red</li>
                                                                    <li onclick="myFunctionyv()">Yellow</li>
                                                                    <li onclick="myFunctionpv()">Pink</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                        <script>
                                                            function myFunctionbv() {
                                                                document.getElementById("vrightbox").style.backgroundColor = "lightblue";
                                                                document.getElementById("vleftbox").style.backgroundColor = "lightblue";
                                                            }
                                                            function myFunctionrv() {
                                                                document.getElementById("vrightbox").style.backgroundColor = "#ff6666";
                                                                document.getElementById("vleftbox").style.backgroundColor = "#ff6666";
                                                            }
                                                            function myFunctionyv() {
                                                                document.getElementById("vrightbox").style.backgroundColor = "#ffff80";
                                                                document.getElementById("vleftbox").style.backgroundColor = "#ffff80";
                                                            }
                                                            function myFunctionpv() {
                                                                document.getElementById("vrightbox").style.backgroundColor = "#ffcccc";
                                                                document.getElementById("vleftbox").style.backgroundColor = "#ffcccc";
                                                            }
                                                        </script>

                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image3" href="#">Front Download</a>
                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image4" href="#">Back Download</a>
                                                        <input class="btn btn-info" id="btn-Preview-Imagev" type="button" value="Preview" />
                                                        {{--<input class="btn btn-info" id="btn-Preview-Image" type="button" value="Preview" />--}}

                                                        <script>
                                                            $(document).ready(function(){


                                                                var element = $("#vleftbox"); // global variable
                                                                var getCanvas; // global variable

                                                                $("#btn-Preview-Imagev").on('click', function () {
                                                                    html2canvas(element, {
                                                                        onrendered: function (canvas) {
                                                                            $("#previewImagev").append(canvas);
                                                                            getCanvas = canvas;
                                                                        }
                                                                    });
                                                                });
                                                                $("#btn-Convert-Html2Image3").on('click', function () {
                                                                    var imgageData = getCanvas.toDataURL("image/png");
                                                                    // Now browser starts downloading it instead of just showing it
                                                                    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                                                    $("#btn-Convert-Html2Image3").attr("download", "ID Card.png").attr("href", newData);
                                                                });

                                                            });
                                                            $(document).ready(function(){


                                                                var element = $("#vrightbox"); // global variable
                                                                var getCanvas; // global variable

                                                                $("#btn-Preview-Imagev").on('click', function () {
                                                                    html2canvas(element, {
                                                                        onrendered: function (canvas) {
                                                                            $("#previewImagev").append(canvas);
                                                                            getCanvas = canvas;
                                                                        }
                                                                    });
                                                                });

                                                                $("#btn-Convert-Html2Image4").on('click', function () {
                                                                    var imgageData = getCanvas.toDataURL("image/png");
                                                                    // Now browser starts downloading it instead of just showing it
                                                                    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                                                                    $("#btn-Convert-Html2Image4").attr("download", "ID Card.png").attr("href", newData);
                                                                });

                                                            });

                                                        </script>

                                                        <div id="vleftbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>

                                                        <div id="vrightbox" ondrop="drop(event)" ondragover="allowDrop(event)">

                                                        </div>
                                                        <img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" id="drag1" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;">
                                                    </div>
                                                    <div id="previewImagev">


                                                    {{--<div id="content" style="height: 400px; border: 1px solid black;">--}}

                                                    {{--<div id="makeMeDraggable"> </div>--}}

                                                    {{--</div>--}}
                                                    @if  ($Employee->count() != 0)
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
                                                                        <img src="{{ asset('images/emp/')}}/{{ $Employee->first()->image }}" id="drag22" draggable="true" ondragstart="drag(event)" style="height:80px; width:80px;">
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
                                                    @endif


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

