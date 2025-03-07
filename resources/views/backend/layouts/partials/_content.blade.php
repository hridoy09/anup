<div class="pcoded-content">

    @includeIf('backend.layouts.partials._contentheader')

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">

                        @yield('content')

                        {{-- <div class="col-md-12 col-xl-8">
                            <div class="card sale-card">
                                <div class="card-header">
                                    <h5>Deals Analytics</h5>
                                </div>
                                <div class="card-block">
                                    <div id="sales-analytics" class="chart-shadow" style="height:380px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impressions</h6>
                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Goal</h6>
                                            <h3 class="f-w-700 text-c-green">30,564</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bullseye bg-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impact</h6>
                                            <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-paper bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12">
                            <div class="card proj-progress-card">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Published Project</h6>
                                            <h5 class="m-b-30 f-w-700">532<span
                                                    class="text-c-green m-l-10">+1.69%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-red" style="width:25%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Completed Task</h6>
                                            <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span>
                                            </h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Successfull Task</h6>
                                            <h5 class="m-b-30 f-w-700">89%<span
                                                    class="text-c-green m-l-10">+0.99%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-green" style="width:85%"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6">
                                            <h6>Ongoing Project</h6>
                                            <h5 class="m-b-30 f-w-700">365<span
                                                    class="text-c-green m-l-10">+0.35%</span></h5>
                                            <div class="progress">
                                                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 col-xl-4">
                            <div class="card card-blue text-white">
                                <div class="card-block p-b-0">
                                    <div class="row m-b-50">
                                        <div class="col">
                                            <h6 class="m-b-5">Sales In July</h6>
                                            <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                        </div>
                                        <div class="col-auto text-center">
                                            <p class="m-b-5">Direct Sale</p>
                                            <h6 class="m-b-0">$1768</h6>
                                        </div>
                                        <div class="col-auto text-center">
                                            <p class="m-b-5">Referal</p>
                                            <h6 class="m-b-0">$897</h6>
                                        </div>
                                    </div>
                                    <div id="sec-ecommerce-chart-line" class="" style="height:60px">
                                    </div>
                                    <div id="sec-ecommerce-chart-bar" style="height:195px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card latest-update-card">
                                <div class="card-header">
                                    <h5>What’s New</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i
                                                    class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i>
                                            </li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="scroll-widget">
                                        <div class="latest-update-box">
                                            <div class="row p-t-20 p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <img src="jpg/avatar-4.jpg" alt="user image"
                                                        class="img-radius img-40 align-top m-r-15 update-icon">
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Your Manager Posted.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>You have 3 pending Task.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>New Order Received.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <img src="jpg/avatar-4.jpg" alt="user image"
                                                        class="img-radius img-40 align-top m-r-15 update-icon">
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Your Manager Posted.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Jonny michel</p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>You have 3 pending Task.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>New Order Received.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Hemilton</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card latest-update-card">
                                <div class="card-header">
                                    <h5>Latest Activity</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i
                                                    class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i>
                                            </li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="scroll-widget">
                                        <div class="latest-update-box">
                                            <div class="row p-t-20 p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-primary update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Devlopment & Update</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem ipsum dolor
                                                        sit amet, <a href="#!" class="text-c-blue">
                                                            More</a></p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-primary update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Showcases</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem dolor sit
                                                        amet, <a href="#!" class="text-c-blue">
                                                            More</a></p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-success update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Miscellaneous</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem ipsum dolor
                                                        sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-danger update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Your Manager Posted.</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem ipsum dolor
                                                        sit amet, <a href="#!" class="text-c-red">
                                                            More</a></p>
                                                </div>
                                            </div>
                                            <div class="row p-b-30">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-primary update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Showcases</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem dolor sit
                                                        amet, <a href="#!" class="text-c-blue">
                                                            More</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto text-right update-meta p-r-0">
                                                    <i class="b-success update-icon ring"></i>
                                                </div>
                                                <div class="col p-l-5">
                                                    <a href="#!">
                                                        <h6>Miscellaneous</h6>
                                                    </a>
                                                    <p class="text-muted m-b-0">Lorem ipsum dolor
                                                        sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>New Products</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i
                                                    class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i>
                                            </li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Product Code</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sofa</td>
                                                    <td>#PHD001</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="29484b4a694e44484045074a4644">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Computer</td>
                                                    <td>#PHD002</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="e6858285a6818b878f8ac885898b">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>#PHD003</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="afdfdeddefc8c2cec6c381ccc0c2">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Coat</td>
                                                    <td>#PHD004</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="a7c5c4d4e7c0cac6cecb89c4c8ca">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Watch</td>
                                                    <td>#PHD005</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="5e3d3a3d1e39333f3732703d3133">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shoes</td>
                                                    <td>#PHD006</td>
                                                    <td><a href="https://colorlib.com/cdn-cgi/l/email-protection"
                                                            class="__cf_email__"
                                                            data-cfemail="c5b5b4b785a2a8a4aca9eba6aaa8">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
