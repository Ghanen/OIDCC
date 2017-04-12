<style type="text/css">
    #container { position: relative; }
    #imageView { border: 1px solid #000; }
    html, body {
        width: 100%;
        height: 100%;
        margin: 0px;
    }
    </style>

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


                            {{--For the Horizontal Design--}}
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="detail">
                                    <div class="container" style="padding:5px;width:100%">
                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">

                                                    <div class="list-group">
                                                        <p>Select the Employee ID to create ID card:</p>
                                                        <SELECT class="btn btn-info" name="empid" value="">
                                                            <?php foreach($Employee as $employee) { ?>
                                                            <OPTION VALUE="{<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                            </OPTION>
                                                            <?php } ?>

                                                        </SELECT>
                                                        <div id="container" style="padding:5px 0px 0px 0px;">
                                                            <SELECT class="btn btn-default" id="colorToolbar" style="border: 1px solid black; float: left;">
                                                            {{--<div id="colorToolbar" style="border: 1px solid black; float: left;">--}}
                                                                <Option id="red" style="background:red; width:50px; height:50px; float:left;"><div style="clear: both;"></div></Option>
                                                                <Option id="pink" style="background:pink; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="fuchsia" style="background:fuchsia; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="orange" style="background:orange; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="yellow" style="background:yellow; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="lime" style="background:lime; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="green" style="background:green; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="blue" style="background:blue; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="purple" style="background:purple; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="black" style="background:black; width:50px; height:50px; float:left; border: 1px dashed white;"></Option><div style="clear: both;"></div></Option>
                                                                <Option id="white" style="background:white; width:50px; height:50px; float:left;"></Option><div style="clear: both;"></div></Option>
                                                            </SELECT>
                                                                <hr/>
                                                                <div id="fill" style="width:50px; height:50px; float:left;"><img src="fill.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="cat" style="width:50px; height:50px; float:left;"><img id="catImg" src="cat.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="dog" style="width:50px; height:50px; float:left;"><img id="dogImg" src="dog.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="dragonfly" style="width:50px; height:50px; float:left;"><img id="dragonFlyImg" src="fly.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="ladybug" style="width:50px; height:50px; float:left;"><img id="ladyBugImg" src="bug.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="heart" style="width:50px; height:50px; float:left;"><img id="heartImg" src="heart.png" width="50" height="50" /></div><div style="clear: both;"></div>
                                                                <div id="save" style="width:50px; height:50px; float:left;">Save</div><div style="clear: both;"></div>
                                                            </div>

                                                            <div id="canvasDiv" style="float: left;">
                                                                <canvas id="imageView">
                                                                    <p>Unfortunately, your browser is currently unsupported by our web
                                                                        application.  We are sorry for the inconvenience. Please use one of the
                                                                        supported browsers listed below, or draw the image you want using an
                                                                        offline tool.</p>
                                                                    <p>Supported browsers: <a href="http://www.opera.com">Opera</a>, <a
                                                                                href="http://www.mozilla.com">Firefox</a>, <a
                                                                                href="http://www.apple.com/safari">Safari</a>, and <a
                                                                                href="http://www.konqueror.org">Konqueror</a>.</p>
                                                                </canvas>
                                                            </div>
                                                            <div id="stats" style="font-size:8pt; padding-left: 50px; float: left;">0 0</div>
                                                        </div>







                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                {{--For the Vertical Design--}}
                                <div role="tabpanel" class="tab-pane" id="list">
                                    <div class="container" style="padding:5px;width:100%">


                                        <div class="list-group">
                                            <div class="panel panel-default">
                                                <div class="panel-body">

                                                    <div class="list-group">

                                                        <p>Select the Employee ID to create ID card:</p>
                                                        <SELECT class="btn btn-info" name="empid" value="">
                                                            <?php foreach($Employee as $employee) { ?>
                                                            <OPTION VALUE="{<?php echo $employee->id ?>" name="country_id"><?php echo $employee->id ?>
                                                            </OPTION>
                                                            <?php } ?>

                                                        </SELECT>










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



@endsection

