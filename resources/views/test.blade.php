@extends('layouts.app_dash', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content full-height" >
    <div class="container-fluid">
      
      <div class="row">
          <div class="col-lg-6 col-md-12">
              <!-- camera -->
                <div class="card">
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <!-- head name -->
                          <div class="row">
                              <button class="btn btn-just-icon btn-github">
                                  <i class="icon-dome-camera text-white"></i>
                              </button>
                              <h1 class="text_dash" style="">Camera</h1>
                              <hr class="dash">
                          </div>
                        <!--  camera 2 devices -->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="height:290px;text-align:center;vertical-align:middle;">
                                    <iframe id="live360" name="live360" width="200%" height="200%" style="
                                      border:0px;
                                      -webkit-transform: scale(0.56, 0.5) translate(-39%, -50%);
                                      "><p>Your browser does not support iframes.</p>
                                    </iframe>

                                    {{-- <iframe id="live360" name="live360" width="200%" height="200%" style="
                                      zoom: 0.5;
                                      -moz-transform: scale(0.5);
                                      -moz-transform-origin: 0 0;
                                      -o-transform: scale(0.5);
                                      -o-transform-origin: 0 0;
                                      -webkit-transform: scale(0.5);
                                      -webkit-transform-origin: 0 0;">
                                      <p>Your browser does not support iframes.</p>
                                    </iframe> --}}
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                    <script>
                                      $(document).ready(function(){
                                        $('#live360').attr('src', 'http://10.2.4.54:80/ISAPI/Streaming/channels/101/httpPreview');
                                      });
                                    </script>
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera360') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>1</span></div> 
                                    <span class="text_font">{{ __('Speed Dome Camera 360°') }}</span>
                                    <div class="absolute">
                                      <button class="btn btn-success btn-sm1">Online</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="height:290px;text-align:center;vertical-align:middle;">
                                    <img id="interimg" src="http://10.2.4.50:8080/video.cgi" height="290px">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('intercom') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Intercom') }}</span>
                                    <div class="absolute">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- camera 3 device -->
                          <div class="row" style="margin-top:3px;">
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="height:180px;text-align:center;vertical-align:middle;">
                                    <img id="tempimg" src="http://10.2.4.50:8080/video.cgi" height="180px">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_temp') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Camera Temp') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="height:180px;text-align:center;vertical-align:middle;">
                                    <img id="plateimg" src="http://10.2.4.50:8080/video.cgi" height="180px">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_license') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>1</span></div> 
                                    <span class="text_font">{{ __('Licence Plate') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="height:180px;text-align:center;vertical-align:middle;">
                                    <img id="faceimg" src="http://10.2.4.50:8080/video.cgi" height="180px">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_face') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Face') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
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
              <!-- end camera -->
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row">
              <!-- E-save -->
                <div class="col-lg-12 col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                          <!-- head name -->
                            <div class="row">
                              <button class="btn btn-just-icon btn-github">
                                  <i class="icon-light-bulb text-white"></i>
                              </button>
                              <h1 class="text_dash" style="">E-save</h1>
                              <hr class="dash">
                            </div>
                          <!-- esave 4 device -->
                            <div class="row">
                            <!-- 1 -->
                              <div class="col-md-3">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dash" >
                                      <a class="dash-link" href="{{ route('esave_dashboard') }}">
                                        <i class="icon-gauge text-orange"  style="font-size:65px;"></i>
                                        <p style="margin-top:-5px;">{{ __('E-Save Dashboard') }}</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>1</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">{{ ('Online') }}</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 2 -->
                              <div class="col-md-3">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dash" >
                                      <a class="dash-link " href="{{ route('cluster_projector') }}">
                                        <i class="icon-cluster_projectors text-orange"  style="font-size:65px;"></i>
                                        <p style="margin-top:-2px;">Cluster <br> Projectors</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>1</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 3 -->
                              <div class="col-md-3">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dash" >
                                      <a class="dash-link " href="{{ route('cluster_projector_lador') }}">
                                        <i class="icon-cluster_projectors_ladar text-orange"  style="font-size:65px;"></i>
                                        <p style="margin-top:-2px;">{{ __('Cluster Projectors Lador') }}</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                  <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>3</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 4 -->
                              <div class="col-md-3">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dash" >
                                      <a class="dash-link " href="{{ route('meteodata') }}">
                                        <i class="icon-cloudy1 text-orange"  style="font-size:65px;"></i>
                                        <p style="margin-top:-2px;">{{ __('E-Save Meteodata') }}</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>2</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
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
              <!-- end E-save -->
            </div>
            <div class="row">
              <!-- Weather -->
                <div class="col-lg-7 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!-- head name -->
                              <div class="row">
                                <button class="btn btn-just-icon btn-github">
                                    <i class="icon-cloudy  text-white"></i>
                                </button>
                                <h1 class="text_dash" style="">Weather</h1>
                                <hr class="dash">
                              </div>
                            <!--  Weather 1 devices -->
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card-dash">
                                    <div class="card-header card-header-white">
                                      <div class="ct-chart" style="height:105px;">
                                        <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                          src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
                                        </iframe>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>3</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm2 ">Online</button>
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
              <!-- end Weather -->
              <!-- Control  -->
                <div class="col-lg-5 col-md-12">
                  <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!-- head name -->
                              <div class="row">
                                <button class="btn btn-just-icon btn-github">
                                    <i class="icon-equalizer2  text-white"></i>
                                </button>
                                <h1 class="text_dash" style="">Control System</h1>
                                <hr class="dash1">
                              </div>
                            <!--  Control 2 devices -->
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="card-dash ">
                                    <div class="card-header">
                                      <div class="icon_dashCS" >
                                        <a class="dash-link " href="{{ route('occupancy') }}">
                                          <i class="icon-occupancy text-orange"  style="font-size:40px;"></i>
                                          <p class="icon_dashCS">{{ __('Occupancy Sensor') }}</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status3">
                                        <div class="dash-tri"><span>2</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm3">Online</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="card-dash ">
                                    <div class="card-header">
                                      <div class="icon_dashCS" >
                                        <a class="dash-link " href="{{ route('power_socket') }}">
                                          <i class="icon-power-plug text-orange"  style="font-size:40px;"></i>
                                          <p class="icon_dashCS">{{ __('Roud Power Socket') }}</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status3">
                                        <div class="dash-tri"><span>2</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-offline btn-sm3">{{ __('offline') }} </button>
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
              <!-- End control  -->
            </div>
          
            <div class="row">
              <!-- Advertisement -->
                <div class="col-lg-7 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!-- head name -->
                              <div class="row">
                                <button class="btn btn-just-icon btn-github">
                                    <i class="icon-bullhorn   text-white"></i>
                                </button>
                                <h1 class="text_dash" style="">Advertisement</h1>
                                <hr class="dash2">
                              </div>
                            <!--  Advertisement 3 devices -->
                              <div class="row">
                                <div class="col-md-4">
                                  <div class="card-dash ">
                                    <div class="card-header">
                                      <div class="icon_dashAd" >
                                        <a class="dash-link " href="{{ route('ex_speaker') }}">
                                          <i class="icon-bullhorn text-orange"  style="font-size:40px;"></i>
                                          <p class="icon_dashAd">{{ __('Exstreamer Loud Speaker') }}</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                          <hr class="dash_status3">
                                          <div class="dash-tri"><span>4</span></div> 
                                          <div class="absolute1">
                                            <button class="btn btn-success btn-sm3">Online</button>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card-dash">
                                    <div class="card-header ">
                                      <div class="icon_dashAd" >
                                        <a class="dash-link " href="{{ route('in_speaker') }}">
                                          <i class="icon-In-loud text-orange"  style="font-size:40px;"></i>
                                          <p class="icon_dashAd">{{ __('Instreamer Loud Speaker') }}</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status3">
                                        <div class="dash-tri"><span>4</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm3">Online</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="card-dash">
                                    <div class="card-header">
                                      <div class="icon_dashAd" >
                                        <a class="dash-link " href="{{ route('digital_signage') }}">
                                          <i class="icon-Digital_Signage text-orange"  style="font-size:40px;"></i>
                                          <p class="icon_dashAd">{{ __('Digital Signage') }}</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status3">
                                        <div class="dash-tri"><span>4</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm3">Online</button>
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
              <!-- end Advertisement -->
              <!-- Map  -->
                <div class="col-lg-5 col-md-12">
                  <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!--  MAp -->
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card " style="height:190px;">
                                    <div class="absoluteMap">
                                      <button class="btn btn-success btn-sm4">Online</button>
                                    </div>
                                    <div class="text-dash-online"> 11 </div>
                                    <div class="text-dash-onlineall"> /15 </div>
                                    <div class="text-dash-onlinetag"> devices </div>
                                    <iframe width="100%" height="100%" frameborder="0"  
                                      src="//umap.openstreetmap.fr/en/map/poles-map_595016?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#14/18.7968/98.9639">
                                    </iframe>
                                  </div>
                                </div>
                              </div>
                          
                          </div>
                            
                        </div>
                      </div>
                    </div>
                </div>
              <!-- End control  -->
            </div>

          </div> 
      </div>
    </div>
  </div>
@endsection