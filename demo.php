<link rel="stylesheet" href="<?php echo $this->getUrl(); ?>public/mapv1/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->getUrl(); ?>public/mapv1/assets/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo $this->getUrl(); ?>public/mapv1/assets/css/globalview.css">
<link rel="stylesheet" href="<?php echo $this->getUrl(); ?>public/mapv1/assets/css/sidebar.css">
<link href="<?php echo $this->getUrl(); ?>public/mapv1/assets/css/checkbox.css" rel="stylesheet">
<link href="<?php echo $this->getUrl(); ?>public/mapv1/assets/css/searchbox.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">

        <!-- Sidebar Header -->
        <div class="sidebar-header">

            <ul class="nav nav-pills">
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li id="nav-network">Network</li>
                        <li id="nav-incidents">Incidents</li>
                        <li id="nav-census">Census</li>
                        <li id="nav-contest">Contest</li>
                    </ul>
                </li>
            </ul>

            <img src="<?php echo $this->getUrl();?>public/mapv1/assets/images/logo.png" class="sidebar-header-logo" width="40" height="40"/>

        </div>
        <!-- #Sidebar Header -->

        <!-- Sidebar Form -->
        <div id="map-filters-div" class="sidebar-form">

            <input class="col-md-2 hide" type="text" id="address-auto-complete" name="address" placeholder="Please Enter Address " style="margin-left:10px;width: 240px; height: 34px;" onkeydown="if(event.keyCode == 13) getMapData('#map-filters-div', 'map-data-go');"/>
            <button type="button" class="btn hide btn-secondary dropdown-toggle" id="selected_filters_type" style="float: left; padding: 7px;" data-toggle="dropdown">
                <i style="margin-right: 5%;" class="fa fa-map-marker"></i>
                <span style="margin-left: 5%; ">Region search</span>
            </button>
            <ul style="margin-top: 45px;" class="hide dropdown-menu">
                <li style="line-height: 0px;" onclick="toggleFilters(this);" class="active">
                    <a href="#">
                        <strong>
                            &nbsp;&nbsp;<i class="fa fa-map-marker">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Region search
                            </i>
                        </strong>
                    </a>
                </li>
                <li style="line-height: 0px;" onclick="toggleFilters(this);" >
                    <a href="#">
                        <strong>&nbsp;
                            <i class="fa fa-dot-circle-o">
                                &nbsp;&nbsp;&nbsp;&nbsp;Radius search
                            </i>
                        </strong>
                    </a>
                </li>
                <li style=" line-height: 0px;" onclick="toggleFilters(this);">
                    <a href="#">
                        <strong>
                            &nbsp;
                            <i class="fa fa-credit-card">
                                &nbsp;&nbsp;&nbsp;ATM Code search
                            </i>
                        </strong>
                    </a>
                </li>
            </ul>

            <select  class="col-md-3 form-control input-sm input-hero input-region"  id="province_branch" name="province"  onchange="getCityList('branch')">
                <?php echo $this->dataSet['controller']->optionCreator($this->dataSet['provinces'],'province_name','province_name','Province');?>
            </select>
            <select  id="city_branch" name="city" class="col-md-3 form-control input-sm input-hero input-city">
                <option value=""> -- Select City --</option>
            </select>

            <button id="map-data-go" onclick="getMapData('#map-filters-div', 'map-data-go')" type="submit" class="btn btn-sm btn-go">
                <i class="fa fa-search fa-1x"></i>&nbspGO
            </button>
            <button type="submit" id="map-data-reset" onclick="resetMapData('#map-filters-div', 'map-data-reset')" class="btn btn-sm btn-reset"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>&nbspRESET</button>
        </div>
        <!-- #Sidebar Form -->

        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                          Sidebar Landing Page Section
        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <!-- Sidebar Landing page -->
        <div class="sidebar-landing">
            <!-- Sidebar Main Panel -->
            <div class="sidebar-main-panel">
                <div class="sidebar-main-border" data-toggle="tooltip" title="Network">
                    <div class="sidebar-main-action-icon nav-network">
                        <i class="fa fa-podcast fa-2x"></i>
                    </div>
                </div>

                <div class="sidebar-main-border" data-toggle="tooltip" title="Incidents">
                    <div class="sidebar-main-action-icon nav-incidents">
                        <i class="fa fa-warning fa-2x"></i>
                    </div>
                </div>

                <div class="sidebar-main-border" data-toggle="tooltip" title="Census">
                    <div class="sidebar-main-action-icon nav-census">
                        <i class="fa fa-group fa-2x"></i>
                    </div>
                </div>

                <div class="sidebar-main-border" data-toggle="tooltip" title="Contest">
                    <div class="sidebar-main-action-icon nav-contest">
                        <i class="fa fa-gg fa-2x"></i>
                    </div>
                </div>
            </div>
            <!-- #Sidebar MainPanel -->

            <!-- Sidebar Title -->
            <div class="sidebar-title">
                <div class="jumbotron">
                    <h1>Explore!</h1>
                </div>
            </div>
            <!-- #Sidebar Title -->

            <!-- Sidebar Position -->
            <div class="sidebar-position">
                <div class="sidebar-position-border" data-toggle="tooltip" title="Central">
                    <div class="sidebar-position-action-icon">
                        <!--<i class="fa fa-arrows fa-3x"></i>-->
                        <img src="assets/images/map.png" width="120" height="120">
                    </div>
                    <span>&nbspCentral</span>
                </div>

                <div class="sidebar-position-border" data-toggle="tooltip" title="Northern">
                    <div class="sidebar-position-action-icon">
                        <!--<i class="fa fa-hand-o-up fa-3x"></i>-->
                        <img src="assets/images/map.png" width="120" height="120">
                    </div>
                    <span>Northern</span>
                </div>

                <div class="sidebar-position-border" data-toggle="tooltip" title="Eastern">
                    <div class="sidebar-position-action-icon">
                        <!--<i class="fa fa-hand-o-right fa-3x"></i>-->
                        <img src="assets/images/map.png" width="120" height="120">
                    </div>
                    <span>&nbspEastern</span>
                </div>

                <div class="sidebar-position-border" data-toggle="tooltip" title="Western">
                    <div class="sidebar-position-action-icon">
                        <!--<i class="fa fa-hand-o-left fa-3x"></i>-->
                        <img src="assets/images/map.png" width="120" height="120">
                    </div>
                    <span>Western</span>
                </div>

                <div class="sidebar-position-border" data-toggle="tooltip" title="Southern">
                    <div class="sidebar-position-action-icon">
                        <!--<i class="fa fa-hand-o-down fa-3x"></i>-->
                        <img src="assets/images/map.png" width="120" height="120">
                    </div>
                    <span>Southern</span>
                </div>

                <div class="sidebar-position-border" data-toggle="tooltip" title="KPI">
                    <div class="sidebar-position-action-icon">
                        <i class="fa fa-signal fa-5x"></i>
                        <!--<img src="assets/images/map.png" width="120" height="120">-->
                    </div>
                    <span>&nbsp&nbsp&nbsp&nbsp&nbspKPI</span>
                </div>
            </div>
            <!-- #Sidebar position -->
        </div>
        <!-- #Sidebar landing -->

        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                          Sidebar Network Page Section
        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <!-- Sidebar network -->
        <div class="sidebar-network">

            <!-- Sidebar Image -->
            <div class="sidebar-refer-panel">
                <img src="assets/images/street.JPG" class="sidebar-refer-image"/>
            </div>
            <!-- #Sidebar Image -->

            <!-- Sidebar Info -->
            <div class="sidebar-info-panel">
                <p>Terminal ID:</p>
                <h4>RAJHIDOWMDLAM502864HB</h4>
                <p>Brand: <span>Diebold</span></p>
                <p>Address: <span>Balladial Ruwaida</span></p>
                <p>City: <span>Al-reweeda</span></p>

                <div class="sidebar-info-direction">
                    <div class="sidebar-info-direction-btn">
              <span>
                <i class="fa fa-angle-double-left fa-1x"></i>
                <i class="fa fa-angle-double-right fa-1x"></i>
              </span>
                    </div>
                </div>

                <div class="sidebar-action-icon">
                    <i class="fa fa-plus fa-1x"></i>
                </div>

                <div class="sidebar-action-icon">
                    <i class="fa fa-share-alt fa-1x"></i>
                </div>
            </div>
            <!-- #Sidebar Info -->

            <!-- Sidebar Carousel -->
            <div class="sidebar-carousel">
                <div id="showcase" class="noselect">
                    <img src="assets/images/1.jpg" class="cloud9-item", alt="Item #1"/>
                    <img src="assets/images/1.jpg" class="cloud9-item", alt="Item #2"/>
                    <img src="assets/images/1.jpg" class="cloud9-item", alt="Item #3"/>
                    <img src="assets/images/1.jpg" class="cloud9-item", alt="Item #4"/>
                </div>
                <footer>
                    <div id="nav" class="noselect">
                        <button class="left">
                            ←
                        </button>
                        <button class="right">
                            →
                        </button>
                    </div>
                </footer>
            </div>
            <!-- #Sidebar carousel -->

            <!-- Sidebar comment -->
            <div class="sidebar-comment">
                <p>This ATM is located in the xxx region, in the city of xxx. It is a xxxx type and it xxxKm away from you. There are xx ATMs in a 100m radius. In the city selected, there are a total of xxx ATMs and a ratio of xxx ATMs per capita. The ATM has xxx in-cidents and was last visited on xxxx.</p>
            </div>
            <!-- #Sidebar Comment -->

        </div>
        <!-- #Sidebar Network -->

        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                          Sidebar Incident Page Section
        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <!-- Sidebar Incident -->
        <div class="sidebar-incident">

            <!-- Sidebar Title -->
            <div class="sidebar-incident-title">
                <div class="jumbotron">
                    <h4>INCIDENT BY DATA RANGE</h4>
                    <button type="submit" class="btn btn-sm btn-incident-num">1774</button>
                </div>
            </div>
            <!-- #Sidebar Title -->

            <!-- Sidebar Incident form -->
            <div class="sidebar-incident-form">
                <form class="form-horizontal">

                    <div class="form-group">
                        <!--<label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-period" placeholder="Email">
                                <option value="" disabled selected>Period</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-time-of-day" placeholder="Email">
                                <option value="" disabled selected>Time of day</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-atm-type" placeholder="Email">
                                <option value="" disabled selected>ATM type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-category" placeholder="Email">
                                <option value="" disabled selected>Category</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-metrics" placeholder="Email">
                                <option value="" disabled selected>Metrics</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-type" placeholder="Email">
                                <option value="" disabled selected>Type</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <!--<label for="inputPassword3" class="col-sm-2 control-label">Password</label>-->
                        <div class="col-sm-12">
                            <select class="form-control" id="input-region" placeholder="Email">
                                <option value="" disabled selected>Region</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-md btn-incident-reset"><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i>&nbspRESET</button>
                            <button type="submit" class="btn btn-md btn-incident-query"><i class="fa fa-search fa-1x"></i>&nbspRun Query</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- #Sidebar Incident form -->
        </div>
        <!-- #Sidebar Incident -->

        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                          Sidebar Census Page Section
        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <!-- Sidebar Census -->
        <div class="sidebar-census">

            <!-- Sidebar population -->
            <div class="sidebar-population">
                <select class="sidebar-census-select" multiple="multiple" style="width:100%;">
                    <option value="1">15 - 19</option>
                    <option value="1">20 - 24</option>
                    <option value="1">25 - 29</option>
                    <option value="1">30 - 34</option>
                    <option value="1">35 - 39</option>
                    <option value="1">40 - 44</option>
                    <option value="1">45 - 49</option>
                    <option value="1">50 - 54</option>
                    <option value="1">55 - 59</option>
                    <option value="1">60 - 64</option>
                    <option value="1">65 - 69</option>
                    <option value="1">70 - 74</option>
                    <option value="1">75 - 79</option>
                    <option value="1">80 - 84</option>
                    <option value="1">85 - 89</option>
                </select>
            </div>
            <!-- #Sidebar population -->

            <!-- Sidebar census filter -->
            <div class="sidebar-census-filter">
                <div class="sidebar-filter-group col-md-6">
                    <h4 class="text-uppercase">
                        marital status
                    </h4>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox1" type="checkbox" checked="">
                        <label for="checkbox1">Widowed<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox2" type="checkbox" checked="">
                        <label for="checkbox2">Divorced<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox3" type="checkbox" checked="">
                        <label for="checkbox3">Married<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox4" type="checkbox" checked="">
                        <label for="checkbox4">Never married<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox5" type="checkbox" checked="">
                        <label for="checkbox5">All<span>&nbsp(24425363)</span></label>
                    </div>
                </div>

                <div class="sidebar-filter-group col-md-6">
                    <h4 class="text-uppercase">
                        education status
                    </h4>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox6" type="checkbox" checked="">
                        <label for="checkbox6">PHD<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox7" type="checkbox" checked="">
                        <label for="checkbox7">Masters<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox8" type="checkbox" checked="">
                        <label for="checkbox8">University<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox9" type="checkbox" checked="">
                        <label for="checkbox9">Technical Diploma<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox10" type="checkbox" checked="">
                        <label for="checkbox10">Secondary<span>&nbsp(24425363)</span></label>
                    </div>
                </div>

                <div class="sidebar-filter-group col-md-6">
                    <h4 class="text-uppercase">
                        select gender
                    </h4>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox11" type="checkbox" checked="">
                        <label for="checkbox11">Ladies<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox12" type="checkbox" checked="">
                        <label for="checkbox12">Gentlemen<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox13" type="checkbox" checked="">
                        <label for="checkbox13">All<span>&nbsp(24425363)</span></label>
                    </div>
                </div>

                <div class="sidebar-filter-group col-md-6">
                    <h4 class="text-uppercase">
                        nationality
                    </h4>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox14" type="checkbox" checked="">
                        <label for="checkbox14">Saudi<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox15" type="checkbox" checked="">
                        <label for="checkbox15">Non-Saudi<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox16" type="checkbox" checked="">
                        <label for="checkbox16">All<span>&nbsp(24425363)</span></label>
                    </div>
                </div>

                <div class="sidebar-filter-group col-md-6">
                    <h4 class="text-uppercase">
                        activity status
                    </h4>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox17" type="checkbox" checked="">
                        <label for="checkbox17">Housewive<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox18" type="checkbox" checked="">
                        <label for="checkbox18">Retired<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox19" type="checkbox" checked="">
                        <label for="checkbox19">Labor force<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox20" type="checkbox" checked="">
                        <label for="checkbox20">Other<span>&nbsp(24425363)</span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox21" type="checkbox" checked="">
                        <label for="checkbox21">All<span>&nbsp(24425363)</span></label>
                    </div>
                </div>

            </div>
            <!-- #Sidebar Census Filter -->

        </div>
        <!-- #Sidebar Census -->

        <!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                          Sidebar Contest Page Section
        ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

        <!-- Sidebar Contest -->
        <div class="sidebar-contest">

            <!-- Search Form -->
            <form class="form-wrapper cf">
                <input type="text" placeholder="Search here..." required>
                <button type="submit">Search</button>
            </form>
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-md btn-contest-compare text-uppercase" data-toggle="modal" data-target="#modal-compare">
                compare
            </button>
            <!-- #Search Form -->

            <!-- Brand Title -->
            <div class="sidebar-brand-title">
                <div class="jumbotron">
                    <h3 class="text-uppercase">select bank</h3>
                </div>
            </div>
            <!-- #Brand Title -->

            <!-- Contest Selection Group -->
            <div class="selection-group">
                <!-- Group 1 -->
                <div class="col-md-3 sel-group">
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox30" type="checkbox" checked="">
                        <label for="checkbox30"><img src="assets/images/brand/albilad.png" width="70" height="30"></span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox31" type="checkbox" checked="">
                        <label for="checkbox31"><img src="assets/images/brand/alinma.png" width="70" height="30"></span></label>
                    </div>
                </div>
                <!-- # Group 1 -->

                <!-- Group 2 -->
                <div class="col-md-3 sel-group">
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox33" type="checkbox" checked="">
                        <label for="checkbox33"><img src="assets/images/brand/anb-bank.png" width="70" height="30"></span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox34" type="checkbox" checked="">
                        <label for="checkbox34"><img src="assets/images/brand/NCB.png" width="70" height="30"></span></label>
                    </div>
                </div>
                <!-- #Group2 -->

                <!-- Group3 -->
                <div class="col-md-3 sel-group">
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox36" type="checkbox" checked="">
                        <label for="checkbox36"><img src="assets/images/brand/samba.png" width="70" height="30"></span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox37" type="checkbox" checked="">
                        <label for="checkbox37"><img src="assets/images/brand/saudi-hollandi.png" width="70" height="30"></span></label>
                    </div>
                    <!--<div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox38" type="checkbox" checked="">
                        <label for="checkbox38"><img src="assets/images/brand/saudi-invest.png" width="100" height="30"></span></label>
                    </div>-->
                </div>
                <!-- #Group3 -->

                <!-- Group4 -->
                <div class="col-md-3 sel-group">
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox32" type="checkbox" checked="">
                        <label for="checkbox32"><img src="assets/images/brand/alzaria.png" width="70" height="30"></span></label>
                    </div>
                    <div class="checkbox checkbox-info checkbox-circle">
                        <input id="checkbox35" type="checkbox" checked="">
                        <label for="checkbox35"><img src="assets/images/brand/riyard.png" width="70" height="30"></span></label>
                    </div>
                </div>
                <!-- #Group4 -->
            </div>
            <!-- #Contest Selection Group -->

            <!-- Result -->
            <div id="days" class="timer_box"><h1>204039</h1><p class="text-uppercase">Total atms</p></div>
            <div id="days" class="timer_box"><h1>400</h1><p class="text-uppercase">Atms per 1000 resident</p></div>
            <!-- #Result -->

            <!-- Pie Chart -->
            <div class="pie-chart">
                <canvas id="canvas" width="600" height="400">
                    No Love for HTML5 eh?
                </canvas>
                <!--<p>Change the 'myData' values to see the labels dynamically adjust.</p>-->
            </div>
            <!-- #PieChart -->

        </div>
        <!-- #Sidebar contest -->

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" style="padding:0px;">
        <div class="container-fluid" style="padding:0px;">
            <div class="row">
                <div class="col-lg-12">
                    <div style="width:100vw; height:100vh;">
                        <div id="map-container" style="width:100%;height:100%"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal fade" id="modal-compare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <select class="form-control input-sm input-hero input-bank1">
                        <option disabled selected>--Select Bank--</option>
                        <option>ANB Bank</option>
                        <option>NCB Bank</option>
                        <option>Saudi Hollandi Bank</option>
                        <option>Investment Bank</option>
                        <option>Albilad Bank</option>
                        <option>AlJazira Bank</option>
                        <option>Riyad Bank</option>
                        <option>SAMBA Bank</option>
                        <option>Inma Bank</option>
                    </select>

                    <select class="form-control input-sm input-hero input-bank2">
                        <option disabled selected>--Select Bank--</option>
                        <option>ANB Bank</option>
                        <option>NCB Bank</option>
                        <option>Saudi Hollandi Bank</option>
                        <option>Investment Bank</option>
                        <option>Albilad Bank</option>
                        <option>AlJazira Bank</option>
                        <option>Riyad Bank</option>
                        <option>SAMBA Bank</option>
                        <option>Inma Bank</option>
                    </select>

                    <select class="form-control input-sm input-hero input-region">
                        <option disabled selected>--Select Region--</option>
                        <option>Eastern</option>
                        <option>Western</option>
                        <option>Northern</option>
                        <option>Southern</option>
                    </select>

                    <select class="form-control input-sm input-hero input-city">
                        <option disabled selected>--Select City--</option>
                        <option>Abiq</option>
                        <option>Abiq</option>
                        <option>Abiq</option>
                        <option>Abiq</option>
                    </select>

                    <!-- Brand Title -->
                    <div class="sidebar-modal-title">
                        <div class="jumbotron">
                            <h3 class="text-uppercase">Rivad Bank vs NCB Bank</h3>
                        </div>
                    </div>
                    <!-- #Brand Title -->

                    <!-- Statistics Table -->
                    <div class="table-responsive">
                        <table class="table">
                            <col>
                            <colgroup span="2"></colgroup>
                            <colgroup span="2"></colgroup>
                            <tr>
                                <td rowspan="2">Region</td>
                                <td rowspan="2">City</td>
                                <th colspan="2" scope="colgroup">Riyard Bank</th>
                                <th colspan="2" scope="colgroup">Inma Bank</th>
                            </tr>
                            <tr>
                                <th scope="col">Bank</th>
                                <th scope="col">ATM</th>
                                <th scope="col">Bank</th>
                                <th scope="col">ATM</th>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">Eastern</th>
                                <td>Abiq</td>
                                <td>3</td>
                                <td>18</td>
                                <td>0</td>
                                <td>10</td>
                            </tr>
                        </table>
                    </div>
                    <!-- #Statistics Table -->
                </div>

                <!--<div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>-->
            </div>
        </div>
    </div>
    <!-- #Modal -->

    <script>
        var bankLogoList = <?php echo json_encode(array_column($this->dataSet['banks'],null,'bank_name')); ?>;
    </script>

    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/map/gis-cluster.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/map/map-setting/<?php echo $this->getMapJs();?>"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/map/saudi-boundry.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/map/infowindow.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/arbatm-locator-mapv1.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/js/map/oms.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--<script src="--><?php //echo $this->getUrl();?><!--public/mapv1/assets/js/bootstrap.js"></script>-->
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/mapv1/assets/js/carousel.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/mapv1/assets/js/globalview.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/mapv1/assets/js/jquery.reflection.js"></script>
    <script type="text/javascript" src="<?php echo $this->getUrl();?>public/mapv1/assets/js/social.js"></script>
    <script src="<?php echo $this->getUrl();?>public/mapv1/assets/js/action.js"></script>
    <script src="<?php echo $this->getUrl();?>public/mapv1/assets/js/pie.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script>
        $(document).ready(function (e) {
            $("#address-auto-complete").focus();
            $("#map-data-go").trigger('click');
//        myMap();
        });
        function resetSidebarView(){
            $("#firstView").show();
            $("#secondView").hide();
        }
    </script>

    <script type="text/javascript">
        $(".sidebar-census-select").select2({
            placeholder: "Filter age groups here...",
            allowClear: true
        });
    </script>

