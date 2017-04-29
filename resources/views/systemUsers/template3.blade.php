<!DOCTYPE html>
<html lang="en">
<head>

    <style>

    </style>

    <script src="https://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>

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
                                                                <?php foreach($Employee as $employee) { ?>
                                                                <OPTION VALUE="<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                                </OPTION>
                                                                <?php } ?>

                                                            </SELECT><br>
                                                            <button style="display: inline" type="submit">Go</button>
                                                        </form>

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

                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image2" href="#">Front Download</a>
                                                        <a class="btn btn-primary" id="btn-Convert-Html2Image" href="#">Back Download</a>
                                                        <input class="btn btn-info" id="btn-Preview-Image" type="button" value="Preview" />

                                                        <script>
                                                            $(document).ready(function(){


                                                                var element = $("#vleftbox"); // global variable
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


                                                                var element = $("#vrightbox"); // global variable
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

                                                        <div class="btn btn-danger" id="vleftbox" ondrop="drop(event)" ondragover="allowDrop(event)">
                                                            <img src="{{ asset('images/logo/')}}/{{Sentinel::getUser()->logo}}" style="border-radius: 50%; height:50px; width:70px; float: left;">
                                                            <input type="text" class="btn btn-danger" style="height:40px; float:right; font-family: 'Lato', sans-serif;" value="OIDCC"></input>
                                                            <table style="margin-left:2px; margin-right:10px; float:left; font-size: 12px;">
                                                                <tr rowspan="4"><td><div>@if(Sentinel::check())
                                                                            <img src="{{ asset('images/emp/')}}/{{ $Employee->first()->image }}" style="height:80px; width:70px;">
                                                                            @endif</div></td>
                                                                </tr>
                                                                <tr height="40">
                                                                    <td width="35%" align="left">Name</td>
                                                                    <td width="02%" align="center">:</td>
                                                                    <td style="float:left; margin-top:10px;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->first_name }}
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left">Company</td>
                                                                    <td align="center">:</td>
                                                                    <td style="float:left;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->company_name }}
                                                                        @endif</td>
                                                                </tr><br>

                                                                <tr>
                                                                    <td align="left">Address</td>
                                                                    <td align="center">:</td>
                                                                    <td style="float:left;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->address }}
                                                                        @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left">Contact</td>
                                                                    <td align="center">:</td>
                                                                    <td style="float:left;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->contact }}
                                                                        @endif</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left">Position</td>
                                                                    <td align="center">:</td>
                                                                    <td style="float:left;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->position }}
                                                                        @endif</td>
                                                                </tr>

                                                                <tr>
                                                                    <td align="left">Email</td>
                                                                    <td align="center">:</td>
                                                                    <td style="float:left;">@if(Sentinel::check())
                                                                            {{ $Employee->first()->email }}
                                                                        @endif</td>
                                                                </tr>
                                                            </table>
                                                        </div>

                                                        <div class="btn btn-danger" id="vrightbox" ondrop="drop(event)" ondragover="allowDrop(event)">
                                                            <textarea type="text" class="btn btn-danger" style="" value="Online ID Card Creation"></textarea>
                                                        </div>

                                                    </div>

                                                    <div>
                                                        <textarea type="text" id="drag20" draggable="true" ondragstart="drag(event)" style="height:50px; width:70px;"></textarea>
                                                    </div>

                                                    <div id="previewImage"></div>

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

