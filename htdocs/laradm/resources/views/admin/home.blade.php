@extends('admin.layouts.app')

@section('content')
    <aside class="sidebar">
        <div class="sidebar-container">
            <div class="sidebar-header">
                <div class="brand">Kuali Admin Panel</div>
            </div>
            <nav class="menu">
                <ul class="nav metismenu" id="sidebar-menu">
                    <li class="active"> <a href="{{ route('admpanel') }}"><i class="fa fa-home"></i> Dashboard </a> </li>
                    <li> <a href=""><i class="fa fa-envelope"></i> Messages <i class="fa arrow"></i></a>
                        <ul>
                            <li> <a href="">Inbox</a> </li>
                            <li> <a href="">Outbox</a> </li>
                            <li> <a href="">Compose</a> </li>
                        </ul>
                    </li>
                    <li> <a href=""><i class="fa fa-table"></i>Tables<i class="fa arrow"></i></a>
                        <ul>
                            <li> <a href="">Static Tables</a> </li>
                            <li> <a href="">Responsive Tables</a> </li>
                        </ul>
                    </li>
                    <li> <a href=""><i class="fa fa-file-text-o"></i> Pages <i class="fa arrow"></i></a>
                        <ul>
                            <li> <a href=""> Reset Password </a></li>
                            <li> <a href=""> Error 404 App </a> </li>
                            <li> <a href=""> Error 404 Global </a> </li>
                            <li> <a href=""> Error 500 App </a> </li>
                            <li> <a href=""> Error 500 Global </a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-5 stats-col">
                    <div class="card sameheight-item stats" data-exclude="xs">
                        <div class="card-block">
                            <div class="title-block">
                                <h4 class="title"> Stats </h4>
                                <p class="title-description"> Website metrics for your awesome project </p>
                            </div>
                            <div class="row row-sm stats-container">
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-rocket"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 5407 </div>
                                        <div class="name"> Active items </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="75" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 75%;"></span>
                                        </div>
                                    </progress> 
                                </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-shopping-cart"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 78464 </div>
                                        <div class="name"> Items sold </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="25" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 25%;"></span>
                                        </div>
                                    </progress>
                                    </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-line-chart"></i> </div>
                                    <div class="stat">
                                        <div class="value"> $80.560 </div>
                                        <div class="name"> Monthly income </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="60" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 60%;"></span>
                                        </div>
                                    </progress>
                                </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-users"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 359 </div>
                                        <div class="name"> Total users </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="34" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 34%;"></span>
                                        </div>
                                    </progress> 
                                </div>
                                <div class="col-xs-12 col-sm-6  stat-col">
                                    <div class="stat-icon"> <i class="fa fa-list-alt"></i> </div>
                                    <div class="stat">
                                        <div class="value"> 59 </div>
                                        <div class="name"> Tickets closed </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="49" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 49%;"></span>
                                        </div>
                                    </progress> </div>
                                <div class="col-xs-12 col-sm-6 stat-col">
                                    <div class="stat-icon"> <i class="fa fa-dollar"></i> </div>
                                    <div class="stat">
                                        <div class="value"> $780.064 </div>
                                        <div class="name"> Total income </div>
                                    </div> 
                                    <progress class="progress stat-progress" value="15" max="100">
                                        <div class="progress">
                                            <span class="progress-bar" style="width: 15%;"></span>
                                        </div>
                                    </progress> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-6 col-xl-7 history-col">
                    <div class="card sameheight-item" data-exclude="xs">
                        <div class="card-header card-header-sm bordered">
                            <div class="header-block">
                                <h3 class="title">History</h3>
                            </div>
                            <ul class="nav nav-tabs pull-right" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" href="#visits" role="tab" data-toggle="tab">Visits</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#downloads" role="tab" data-toggle="tab">Downloads</a> </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="visits">
                                    <p class="title-description"> Number of unique visits last 30 days </p>
                                    <div id="dashboard-visits-chart"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="downloads">
                                    <p class="title-description"> Number of downloads last 30 days </p>
                                    <div id="dashboard-downloads-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="row sameheight-container">
                <div class="col-xl-8">
                    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                        <div class="card-header bordered">
                            <div class="header-block">
                                <h3 class="title"> Message </h3> 
                                <a href="" class="btn btn-primary btn-sm rounded">Add new</a> 
                            </div>
                            <div class="header-block pull-right"> 
                                <label class="search">
                                    <input class="search-input" placeholder="search...">
                                    <i class="fa fa-search search-icon"></i>
                                </label>
                                <div class="pagination">
                                    <a href="" class="btn btn-primary btn-sm rounded">
                                        <i class="fa fa-angle-up"></i>
                                    </a> <a href="" class="btn btn-primary btn-sm rounded">
                                        <i class="fa fa-angle-down"></i>
                                    </a> 
                                </div>
                            </div>
                        </div>
                        <ul class="item-list striped">
                            <li class="item item-list-header hidden-sm-down">
                                <div class="item-row">
                                    <div class="item-col item-col-header fixed item-col-img xs"></div>
                                    <div class="item-col item-col-header item-col-title">
                                        <div> <span>Name</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-sales">
                                        <div> <span>Sales</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-stats">
                                        <div class="no-overflow"> <span>Stats</span> </div>
                                    </div>
                                    <div class="item-col item-col-header item-col-date">
                                        <div> <span>Published</span> </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> 12 Myths Uncovered About IT &amp; Software </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 4958 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/_everaldo/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> 50% of things doesn&#x27;t really belongs to you </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 192 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/eduardo_olv/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> Vestibulum tincidunt amet laoreet mauris sit sem aliquam cras maecenas vel aliquam. </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 2143 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/why_this/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> 10 tips of Object Oriented Design </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 124 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/w7download/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> Sometimes friend tells it is cold </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 10214 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col fixed item-col-img xs">
                                        <a href="">
                                            <div class="item-img xs rounded" style="background-image: url(https://s3.amazonaws.com/uifaces/faces/twitter/pankogut/128.jpg)"></div>
                                        </a>
                                    </div>
                                    <div class="item-col item-col-title no-overflow">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title no-wrap"> New ways of conceptual thinking </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-sales">
                                        <div class="item-heading">Sales</div>
                                        <div> 3217 </div>
                                    </div>
                                    <div class="item-col item-col-stats">
                                        <div class="item-heading">Stats</div>
                                        <div class="no-overflow">
                                            <div class="item-stats sparkline" data-type="bar"></div>
                                        </div>
                                    </div>
                                    <div class="item-col item-col-date">
                                        <div class="item-heading">Published</div>
                                        <div> 21 SEP 10:45 </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card sameheight-item sales-breakdown" data-exclude="xs,sm,lg">
                        <div class="card-header">
                            <div class="header-block">
                                <h3 class="title"> Sales breakdown </h3>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="dashboard-sales-breakdown-chart" id="dashboard-sales-breakdown-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <footer class="footer">
        <div class="footer-block buttons">
        </div>
        <div class="footer-block author">
            <ul>
                <li> created by <a href="{{ url('/') }}">Kuali</a> </li>
                <li> <a href="{{ url('/') }}">Get in touch</a> </li>
            </ul>
        </div>
    </footer>

        <div class="modal fade" id="confirm-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><i class="fa fa-warning"></i> Alert</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to do this?</p>
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button> 
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button> 
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <script src="{{ asset('js/vendor.js') }}"></script>
@endsection
