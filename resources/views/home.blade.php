@extends('layouts.master')

@section('title','Home SUP')


@section('content')
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="">
                          <div class="row m-t-25">
                              <div class="col-sm-6 col-lg-3">
                                  <div class="overview-item overview-item--c1">
                                      <div class="overview__inner">
                                          <div class="overview-box clearfix">
                                              <div class="icon">
                                                  <i class="zmdi zmdi-account-o"></i>
                                              </div>
                                              <br>
                                              <div class="text">
                                                  <h2>{{$user->count()}}</h2>
                                                  <span>users</span>
                                              </div>
                                          </div>
                                          <div class="overview-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                              <canvas id="widgetChart1" height="130" style="display: block;" width="187" class="chartjs-render-monitor"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                  <div class="overview-item overview-item--c2">
                                      <div class="overview__inner">
                                          <div class="overview-box clearfix">
                                              <div class="icon">
                                                  <i class="fas fa-plane"></i>
                                              </div>
                                              <div class="text">
                                                  <h2>{{$aircraft->count()}}</h2>
                                                  <span>total aircraft</span>
                                              </div>
                                          </div>
                                          <div class="overview-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                              <canvas id="widgetChart2" height="115" style="display: block; width: 187px; height: 115px;" width="187" class="chartjs-render-monitor"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                  <div class="overview-item overview-item--c3">
                                      <div class="overview__inner">
                                          <div class="overview-box clearfix">
                                              <div class="icon">
                                                  <i class="fas fa-tachometer-alt"></i>
                                              </div>
                                              <div class="text">
                                                  <h2>{{$maintenance->count()}}</h2>
                                                  <span>total maintainance</span>
                                              </div>
                                          </div>
                                          <div class="overview-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                              <canvas id="widgetChart3" height="115" style="display: block; width: 187px; height: 115px;" width="187" class="chartjs-render-monitor"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6 col-lg-3">
                                  <div class="overview-item overview-item--c4">
                                      <div class="overview__inner">
                                          <div class="overview-box clearfix">
                                              <div class="icon">
                                                  <i class="fas fa-ambulance"></i>
                                              </div>
                                              <div class="text">
                                                  <h2>{{$maintenancereserve->count()}}</h2>
                                                  <span>Maintenance Reserve</span>
                                              </div>
                                          </div>
                                          <div class="overview-chart"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                              <canvas id="widgetChart4" height="115" style="display: block;" width="187" class="chartjs-render-monitor"></canvas>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                     

                    </div>
                </div>
@endsection
