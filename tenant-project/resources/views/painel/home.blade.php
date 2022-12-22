@extends('template.app')

@section('content')

<div class="content-wrapper pb-0">
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Olá, bem-vindo de volta!
        </h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm ml-3 btn-success"> Add Usuário </button>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
            <div class="row">
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Aguardando</p>
                                    <h2 class="text-white">23
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-clock bg-inverse-icon-warning"></i>
                            </div>
                            <h6 class="text-white">Aguardando atendimento</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Atrasados</p>
                                    <h2 class="text-white"> 2
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-clock-alert bg-inverse-icon-danger"></i>
                            </div>
                            <h6 class="text-white">Atendimentos atrasados</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Em andamento</p>
                                    <h2 class="text-white">18
                                    </h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-clock-fast bg-inverse-icon-primary"></i>
                            </div>
                            <h6 class="text-white">Atendimentos em andamento</h6>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                        <div class="card-body px-3 py-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="color-card">
                                    <p class="mb-0 color-card-head">Encerrados</p>
                                    <h2 class="text-white">2368</h2>
                                </div>
                                <i class="card-icon-indicator mdi mdi-check-circle bg-inverse-icon-success"></i>
                            </div>
                            <h6 class="text-white">Atendimentos encerrados</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-7">
                            <h5>Jornada</h5>
                        </div>
                        <div class="col-sm-5 text-md-right">
                            <button type="button" class="btn btn-icon-text mb-3 mb-sm-0 btn-inverse-primary font-weight-normal">
                                <i class="mdi mdi-email btn-icon-prepend"></i>Baixar relatório </button>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-sm-12">
                            <div class="flot-chart-wrapper">
                                <canvas id="areaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4">Purchase History</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr>
                                    <th>Customer</th>
                                    <th>Project</th>
                                    <th>Invoice</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ env('APP_URL') }}/images/faces/face1.jpg" alt="image" />
                                            <div class="table-user-name ml-3">
                                                <p class="mb-0 font-weight-medium"> Cecelia Cooper </p>
                                                <small> Payment on hold</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Angular Admin</td>
                                    <td>
                                        <div class="badge badge-inverse-success"> Completed </div>
                                    </td>
                                    <td>$ 77.99</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ env('APP_URL') }}/images/faces/face10.jpg" alt="image" />
                                            <div class="table-user-name ml-3">
                                                <p class="mb-0 font-weight-medium"> Victor Watkins </p>
                                                <small>Email verified</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Angular Admin</td>
                                    <td>
                                        <div class="badge badge-inverse-success"> Completed </div>
                                    </td>
                                    <td>$245.30</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ env('APP_URL') }}/images/faces/face11.jpg" alt="image" />
                                            <div class="table-user-name ml-3">
                                                <p class="mb-0 font-weight-medium"> Ada Burgess </p>
                                                <small>Email verified</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>One page html</td>
                                    <td>
                                        <div class="badge badge-inverse-danger"> Declined </div>
                                    </td>
                                    <td>$ 160.25</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ env('APP_URL') }}/images/faces/face13.jpg" alt="image" />
                                            <div class="table-user-name ml-3">
                                                <p class="mb-0 font-weight-medium"> Dollie Lynch </p>
                                                <small>Email verified</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Wordpress</td>
                                    <td>
                                        <div class="badge badge-inverse-success"> Completed </div>
                                    </td>
                                    <td>$ 123.21</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ env('APP_URL') }}/images/faces/face16.jpg" alt="image" />
                                            <div class="table-user-name ml-3">
                                                <p class="mb-0 font-weight-medium"> Harry Holloway </p>
                                                <small>Payment on process</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>VueJs Application</td>
                                    <td>
                                        <div class="badge badge-inverse-danger"> Declined </div>
                                    </td>
                                    <td>$ 150.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a class="text-black mt-3 d-block pl-4" href="#">
                        <span class="font-weight-medium h6">View all order history</span>
                        <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 grid-margin stretch-card">
            <!--activity-->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <span class="d-flex justify-content-between">
                            <span>Activity</span>
                            <span class="dropdown dropleft d-block">
                                <span id="dropdownMenuButton1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span><i class="mdi mdi-dots-horizontal"></i></span>
                                </span>
                                <span class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Contact</a>
                                    <a class="dropdown-item" href="#">Helpdesk</a>
                                    <a class="dropdown-item" href="#">Chat with us</a>
                                </span>
                            </span>
                        </span>
                    </h4>
                    <ul class="gradient-bullet-list border-bottom">
                        <li>
                            <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                            <p class="text-muted">2h ago</p>
                        </li>
                        <li>
                            <h6 class="mb-0">Report has been updated</h6>
                            <p class="text-muted">
                                <span>2h ago</span>
                                <span class="d-inline-block">
                                    <span class="d-flex d-inline-block">
                                        <img class="ml-1" src="{{ env('APP_URL') }}/images/faces/face1.jpg" alt="" />
                                        <img class="ml-1" src="{{ env('APP_URL') }}/images/faces/face10.jpg" alt="" />
                                        <img class="ml-1" src="{{ env('APP_URL') }}/images/faces/face14.jpg" alt="" />
                                    </span>
                                </span>
                            </p>
                        </li>
                        <li>
                            <h6 class="mb-0"> Analytics dashboard has been created#Slack </h6>
                            <p class="text-muted">2h ago</p>
                        </li>
                        <li>
                            <h6 class="mb-0"> It's awesome when we find a new solution </h6>
                            <p class="text-muted">2h ago</p>
                        </li>
                    </ul>
                    <a class="text-black mt-3 mb-0 d-block h6" href="#">View all <i class="mdi mdi-chevron-right"></i></a>
                </div>
            </div>
            <!--activity ends-->
        </div>
        <div class="col-xl-4 col-md-6 grid-margin stretch-card">
            <!--datepicker-->
            <div class="card">
                <div class="card-body">
                    <div id="inline-datepicker" class="datepicker table-responsive"></div>
                </div>
            </div>
            <!--datepicker ends-->
        </div>
        <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
            <!--browser stats-->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Browser stats</h4>
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between pb-3 border-bottom">
                                <div>
                                    <img class="mr-2" src="{{ env('APP_URL') }}/images/browser-logo/opera-logo.png" alt="" />
                                    <span class="p">opera mini</span>
                                </div>
                                <p class="mb-0">23%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between pb-3 border-bottom">
                                <div>
                                    <img class="mr-2" src="{{ env('APP_URL') }}/images/browser-logo/safari-logo.png" alt="" />
                                    <span class="p">Safari</span>
                                </div>
                                <p class="mb-0">07%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between pb-3 border-bottom">
                                <div>
                                    <img class="mr-2" src="{{ env('APP_URL') }}/images/browser-logo/chrome-logo.png" alt="" />
                                    <span class="p">Chrome</span>
                                </div>
                                <p class="mb-0">33%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between pb-3 border-bottom">
                                <div>
                                    <img class="mr-2" src="{{ env('APP_URL') }}/images/browser-logo/firefox-logo.png" alt="" />
                                    <span class="p">Firefox</span>
                                </div>
                                <p class="mb-0">17%</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-12">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img class="mr-2" src="{{ env('APP_URL') }}/images/browser-logo/explorer-logo.png" alt="" />
                                    <span class="p">Explorer</span>
                                </div>
                                <p class="mb-0">05%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--browser stats ends-->
        </div>
    </div>

</div>

@endsection