{{-- <div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 col-xl-6 grid-margin stretch-card">
        <div class="row w-100 flex-grow">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Website Audience Metrics</p>
                <p class="text-muted">25% more traffic than previous week</p>
                <div class="row mb-3">
                  <div class="col-md-7">
                    <div class="d-flex justify-content-between traffic-status">
                      <div class="item">
                        <p class="mb-">Users</p>
                        <h5 class="font-weight-bold mb-0">93,956</h5>
                        <div class="color-border"></div>
                      </div>
                      <div class="item">
                        <p class="mb-">Bounce Rate</p>
                        <h5 class="font-weight-bold mb-0">58,605</h5>
                        <div class="color-border"></div>
                      </div>
                      <div class="item">
                        <p class="mb-">Page Views</p>
                        <h5 class="font-weight-bold mb-0">78,254</h5>
                        <div class="color-border"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <ul class="nav nav-pills nav-pills-custom justify-content-md-end" id="pills-tab-custom"
                      role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab-custom" data-toggle="pill"
                          href="#pills-health" role="tab" aria-controls="pills-home" aria-selected="true">
                          Day
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab-custom" data-toggle="pill" href="#pills-career"
                          role="tab" aria-controls="pills-profile" aria-selected="false">
                          Week
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab-custom" data-toggle="pill" href="#pills-music"
                          role="tab" aria-controls="pills-contact" aria-selected="false">
                          Month
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <canvas id="audience-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                  <p class="card-title">Weekly Balance</p>
                  <p class="text-success font-weight-medium">20.15 %</p>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-3">
                  <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">$22.736</h5>
                  <p class="text-muted mb-0">Avg Sessions</p>
                </div>
                <canvas id="balance-chart" height="130"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                  <p class="card-title">Today Task</p>
                  <p class="text-success font-weight-medium">45.39 %</p>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-3">
                  <h5 class="font-weight-normal mb-0 mb-md-1 mb-lg-0 mr-3">17.247</h5>
                  <p class="text-muted mb-0">Avg Sessions</p>
                </div>
                <canvas id="task-chart" height="130"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-6 grid-margin stretch-card">
        <div class="row w-100 flex-grow">
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Regional Load</p>
                <p class="text-muted">Last update: 2 Hours ago</p>
                <div class="regional-chart-legend d-flex align-items-center flex-wrap mb-1"
                  id="regional-chart-legend"></div>
                <canvas height="280" id="regional-chart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body pb-0">
                <div class="d-flex align-items-center mb-4">
                  <p class="card-title mb-0 mr-1">Today activity</p>
                  <div class="badge badge-info badge-pill">2</div>
                </div>
                <div class="d-flex flex-wrap pt-2">
                  <div class="mr-4 mb-lg-2 mb-xl-0">
                    <p>Time On Site</p>
                    <h4 class="font-weight-bold mb-0">77.15 %</h4>
                  </div>
                  <div>
                    <p>Page Views</p>
                    <h4 class="font-weight-bold mb-0">14.15 %</h4>
                  </div>
                </div>
              </div>
              <canvas height="150" id="activity-chart"></canvas>
            </div>
          </div>
          <div class="col-md-12 stretch-card">
            <div class="card">
              <div class="card-body pb-0">
                <p class="card-title">Server Status 247</p>
                <div class="d-flex justify-content-between flex-wrap">
                  <p class="text-muted">Last update: 2 Hours ago</p>
                  <div class="d-flex align-items-center flex-wrap server-status-legend mt-3 mb-3 mb-md-0">
                    <div class="item mr-3">
                      <div class="d-flex align-items-center">
                        <div class="color-bullet"></div>
                        <h5 class="font-weight-bold mb-0">128GB</h5>
                      </div>
                      <p class="mb-">Total Usage</p>
                    </div>
                    <div class="item mr-3">
                      <div class="d-flex align-items-center">
                        <div class="color-bullet"></div>
                        <h5 class="font-weight-bold mb-0">92%</h5>
                      </div>
                      <p class="mb-">Memory Usage</p>
                    </div>
                    <div class="item mr-3">
                      <div class="d-flex align-items-center">
                        <div class="color-bullet"></div>
                        <h5 class="font-weight-bold mb-0">16%</h5>
                      </div>
                      <p class="mb-">Disk Usage</p>
                    </div>
                  </div>
                </div>
              </div>
              <canvas height="170" id="status-chart"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Financial management review</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>
                      User
                    </th>
                    <th>
                      First name
                    </th>
                    <th>
                      Progress
                    </th>
                    <th>
                      Amount
                    </th>
                    <th>
                      Deadline
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-1">
                      <img src="assets/images/faces/face1.jpg" alt="image"/>
                    </td>
                    <td>
                      Herman Beck
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 77.99
                    </td>
                    <td>
                      May 15, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="assets/images/faces/face2.jpg" alt="image"/>
                    </td>
                    <td>
                      Messsy Adam
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $245.30
                    </td>
                    <td>
                      July 1, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="images/faces/face3.jpg" alt="image"/>
                    </td>
                    <td>
                      John Richards
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $138.00
                    </td>
                    <td>
                      Apr 12, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="images/faces/face4.jpg" alt="image"/>
                    </td>
                    <td>
                      Peter Meggik
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 77.99
                    </td>
                    <td>
                      May 15, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="images/faces/face5.jpg" alt="image"/>
                    </td>
                    <td>
                      Edward
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 160.25
                    </td>
                    <td>
                      May 03, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="images/faces/face6.jpg" alt="image"/>
                    </td>
                    <td>
                      John Doe
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 123.21
                    </td>
                    <td>
                      April 05, 2015
                    </td>
                  </tr>
                  <tr>
                    <td class="py-1">
                      <img src="images/faces/face7.jpg" alt="image"/>
                    </td>
                    <td>
                      Henry Tom
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>
                      $ 150.00
                    </td>
                    <td>
                      June 16, 2015
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->
    <div class="row">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-facebook d-flex align-items-center">
          <div class="card-body py-5">
            <div
              class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
              <i class="mdi mdi-facebook text-white icon-lg"></i>
              <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">2.62 Subscribers</h5>
                <p class="mt-2 text-white card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-google d-flex align-items-center">
          <div class="card-body py-5">
            <div
              class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
              <i class="mdi mdi-google-plus text-white icon-lg"></i>
              <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">3.4k Followers</h5>
                <p class="mt-2 text-white card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-twitter d-flex align-items-center">
          <div class="card-body py-5">
            <div
              class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
              <i class="mdi mdi-twitter text-white icon-lg"></i>
              <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">3k followers</h5>
                <p class="mt-2 text-white card-text">You main list growing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- row end -->
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:./partials/_footer.html -->
  <footer class="footer">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Distributed By: <a href="https://www.themewagon.com/" target="_blank">ThemeWagon</a></span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </div>
    </div>
  </footer>
  <!-- partial -->
</div> --}}


<div class="row">
  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-1">
                      <i class="pe-7s-cash"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text">$<span class="count">23569</span></div>
                          <div class="stat-heading">Revenue</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-2">
                      <i class="pe-7s-cart"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><span class="count">3435</span></div>
                          <div class="stat-heading">Sales</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-3">
                      <i class="pe-7s-browser"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><span class="count">349</span></div>
                          <div class="stat-heading">Templates</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-lg-3 col-md-6">
      <div class="card">
          <div class="card-body">
              <div class="stat-widget-five">
                  <div class="stat-icon dib flat-color-4">
                      <i class="pe-7s-users"></i>
                  </div>
                  <div class="stat-content">
                      <div class="text-left dib">
                          <div class="stat-text"><span class="count">2986</span></div>
                          <div class="stat-heading">Clients</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- /Widgets -->
<!--  Traffic  -->
<div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-body">
              <h4 class="box-title">Traffic </h4>
          </div>
          <div class="row">
              <div class="col-lg-8">
                  <div class="card-body">
                      <!-- <canvas id="TrafficChart"></canvas>   -->
                      <div id="traffic-chart" class="traffic-chart"></div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="card-body">
                      <div class="progress-box progress-1">
                          <h4 class="por-title">Visits</h4>
                          <div class="por-txt">96,930 Users (40%)</div>
                          <div class="progress mb-2" style="height: 5px;">
                              <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                      <div class="progress-box progress-2">
                          <h4 class="por-title">Bounce Rate</h4>
                          <div class="por-txt">3,220 Users (24%)</div>
                          <div class="progress mb-2" style="height: 5px;">
                              <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                      <div class="progress-box progress-2">
                          <h4 class="por-title">Unique Visitors</h4>
                          <div class="por-txt">29,658 Users (60%)</div>
                          <div class="progress mb-2" style="height: 5px;">
                              <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                      <div class="progress-box progress-2">
                          <h4 class="por-title">Targeted  Visitors</h4>
                          <div class="por-txt">99,658 Users (90%)</div>
                          <div class="progress mb-2" style="height: 5px;">
                              <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                      </div>
                  </div> <!-- /.card-body -->
              </div>
          </div> <!-- /.row -->
          <div class="card-body"></div>
      </div>
  </div><!-- /# column -->
</div>
<!--  /Traffic -->
<div class="clearfix"></div>
<!-- Orders -->
<div class="orders">
  <div class="row">
      <div class="col-xl-8">
          <div class="card">
              <div class="card-body">
                  <h4 class="box-title">Orders </h4>
              </div>
              <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                      <table class="table ">
                          <thead>
                              <tr>
                                  <th class="serial">#</th>
                                  <th class="avatar">Avatar</th>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Product</th>
                                  <th>Quantity</th>
                                  <th>Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td class="serial">1.</td>
                                  <td class="avatar">
                                      <div class="round-img">
                                          <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                      </div>
                                  </td>
                                  <td> #5469 </td>
                                  <td>  <span class="name">Louis Stanley</span> </td>
                                  <td> <span class="product">iMax</span> </td>
                                  <td><span class="count">231</span></td>
                                  <td>
                                      <span class="badge badge-complete">Complete</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="serial">2.</td>
                                  <td class="avatar">
                                      <div class="round-img">
                                          <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                      </div>
                                  </td>
                                  <td> #5468 </td>
                                  <td>  <span class="name">Gregory Dixon</span> </td>
                                  <td> <span class="product">iPad</span> </td>
                                  <td><span class="count">250</span></td>
                                  <td>
                                      <span class="badge badge-complete">Complete</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="serial">3.</td>
                                  <td class="avatar">
                                      <div class="round-img">
                                          <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                      </div>
                                  </td>
                                  <td> #5467 </td>
                                  <td>  <span class="name">Catherine Dixon</span> </td>
                                  <td> <span class="product">SSD</span> </td>
                                  <td><span class="count">250</span></td>
                                  <td>
                                      <span class="badge badge-complete">Complete</span>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="serial">4.</td>
                                  <td class="avatar">
                                      <div class="round-img">
                                          <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                      </div>
                                  </td>
                                  <td> #5466 </td>
                                  <td>  <span class="name">Mary Silva</span> </td>
                                  <td> <span class="product">Magic Mouse</span> </td>
                                  <td><span class="count">250</span></td>
                                  <td>
                                      <span class="badge badge-pending">Pending</span>
                                  </td>
                              </tr>
                              <tr class=" pb-0">
                                  <td class="serial">5.</td>
                                  <td class="avatar pb-0">
                                      <div class="round-img">
                                          <a href="#"><img class="rounded-circle" src="images/avatar/6.jpg" alt=""></a>
                                      </div>
                                  </td>
                                  <td> #5465 </td>
                                  <td>  <span class="name">Johnny Stephens</span> </td>
                                  <td> <span class="product">Monitor</span> </td>
                                  <td><span class="count">250</span></td>
                                  <td>
                                      <span class="badge badge-complete">Complete</span>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div> <!-- /.table-stats -->
              </div>
          </div> <!-- /.card -->
      </div>  <!-- /.col-lg-8 -->

      <div class="col-xl-4">
          <div class="row">
              <div class="col-lg-6 col-xl-12">
                  <div class="card br-0">
                      <div class="card-body">
                          <div class="chart-container ov-h">
                              <div id="flotPie1" class="float-chart"></div>
                          </div>
                      </div>
                  </div><!-- /.card -->
              </div>

              <div class="col-lg-6 col-xl-12">
                  <div class="card bg-flat-color-3  ">
                      <div class="card-body">
                          <h4 class="card-title m-0  white-color ">August 2018</h4>
                      </div>
                       <div class="card-body">
                           <div id="flotLine5" class="flot-line"></div>
                       </div>
                  </div>
              </div>
          </div>
      </div> <!-- /.col-md-4 -->
  </div>
</div>
<!-- /.orders -->
<!-- To Do and Live Chat -->
<div class="row">
  <div class="col-lg-6">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title box-title">To Do List</h4>
              <div class="card-content">
                  <div class="todo-list">
                      <div class="tdl-holder">
                          <div class="tdl-content">
                              <ul>
                                  <li>
                                      <label>
                                          <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                          <a href='#' class="fa fa-times"></a>
                                          <a href='#' class="fa fa-pencil"></a>
                                          <a href='#' class="fa fa-check"></a>
                                      </label>
                                  </li>
                                  <li>
                                      <label>
                                          <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                          <a href='#' class="fa fa-times"></a>
                                          <a href='#' class="fa fa-pencil"></a>
                                          <a href='#' class="fa fa-check"></a>
                                      </label>
                                  </li>
                                  <li>
                                      <label>
                                          <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                          <a href='#' class="fa fa-times"></a>
                                          <a href='#' class="fa fa-pencil"></a>
                                          <a href='#' class="fa fa-check"></a>
                                      </label>
                                  </li>
                                  <li>
                                      <label>
                                          <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                          <a href='#' class="fa fa-times"></a>
                                          <a href='#' class="fa fa-pencil"></a>
                                          <a href='#' class="fa fa-check"></a>
                                      </label>
                                  </li>

                                  <li>
                                      <label>
                                          <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                          <a href='#' class="fa fa-times"></a>
                                          <a href='#' class="fa fa-pencil"></a>
                                          <a href='#' class="fa fa-check"></a>
                                      </label>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div> <!-- /.todo-list -->
              </div>
          </div> <!-- /.card-body -->
      </div><!-- /.card -->
  </div>

  <div class="col-lg-6">
      <div class="card">
          <div class="card-body">
              <h4 class="card-title box-title">Live Chat</h4>
              <div class="card-content">
                  <div class="messenger-box">
                      <ul>
                          <li>
                              <div class="msg-received msg-container">
                                  <div class="avatar">
                                     <img src="images/avatar/64-1.jpg" alt="">
                                     <div class="send-time">11.11 am</div>
                                  </div>
                                  <div class="msg-box">
                                      <div class="inner-box">
                                          <div class="name">
                                              John Doe
                                          </div>
                                          <div class="meg">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- /.msg-received -->
                          </li>
                          <li>
                              <div class="msg-sent msg-container">
                                  <div class="avatar">
                                     <img src="images/avatar/64-2.jpg" alt="">
                                     <div class="send-time">11.11 am</div>
                                  </div>
                                  <div class="msg-box">
                                      <div class="inner-box">
                                          <div class="name">
                                              John Doe
                                          </div>
                                          <div class="meg">
                                              Hay how are you doing?
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- /.msg-sent -->
                          </li>
                      </ul>
                      <div class="send-mgs">
                          <div class="yourmsg">
                              <input class="form-control" type="text">
                          </div>
                          <button class="btn msg-send-btn">
                              <i class="pe-7s-paper-plane"></i>
                          </button>
                      </div>
                  </div><!-- /.messenger-box -->
              </div>
          </div> <!-- /.card-body -->
      </div><!-- /.card -->
  </div>
</div>
<!-- /To Do and Live Chat -->
<!-- Calender Chart Weather  -->
<div class="row">
  <div class="col-md-12 col-lg-4">
      <div class="card">
          <div class="card-body">
              <!-- <h4 class="box-title">Chandler</h4> -->
              <div class="calender-cont widget-calender">
                  <div id="calendar"></div>
              </div>
          </div>
      </div><!-- /.card -->
  </div>

  <div class="col-lg-4 col-md-6">
      <div class="card ov-h">
          <div class="card-body bg-flat-color-2">
              <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
          </div>
          <div id="cellPaiChart" class="float-chart"></div>
      </div><!-- /.card -->
  </div>
  <div class="col-lg-4 col-md-6">
      <div class="card weather-box">
          <h4 class="weather-title box-title">Weather</h4>
          <div class="card-body">
              <div class="weather-widget">
                  <div id="weather-one" class="weather-one"></div>
              </div>
          </div>
      </div><!-- /.card -->
  </div>
</div>
<!-- /Calender Chart Weather -->
<!-- Modal - Calendar - Add New Event -->
<div class="modal fade none-border" id="event-modal">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><strong>Add New Event</strong></h4>
          </div>
          <div class="modal-body"></div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
              <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
          </div>
      </div>
  </div>
</div>
<!-- /#event-modal -->
<!-- Modal - Calendar - Add Category -->
<div class="modal fade none-border" id="add-category">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title"><strong>Add a category </strong></h4>
          </div>
          <div class="modal-body">
              <form>
                  <div class="row">
                      <div class="col-md-6">
                          <label class="control-label">Category Name</label>
                          <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                      </div>
                      <div class="col-md-6">
                          <label class="control-label">Choose Category Color</label>
                          <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                              <option value="success">Success</option>
                              <option value="danger">Danger</option>
                              <option value="info">Info</option>
                              <option value="pink">Pink</option>
                              <option value="primary">Primary</option>
                              <option value="warning">Warning</option>
                          </select>
                      </div>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
          </div>
      </div>
  </div>
</div>