@extends('layout')
@section('body')

<div id="app" class="app">

@include('header')

        @include('menu')

<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">

    <div class="row">

         
        <div class="col-xl-12">

            <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">TRAFFIC ANALYTICS</span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>


                    <div class="ratio ratio-21x9 mb-3">
                        <div id="world-map" class="jvectormap-without-padding"></div>
                    </div>


                    <div class="row gx-4">

                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <table class="w-100 small mb-0 text-truncate text-white text-opacity-60">
                                <thead>
                                    <tr class="text-white text-opacity-75">
                                        <th class="w-50">COUNTRY</th>
                                        <th class="w-25 text-end">VISITS</th>
                                        <th class="w-25 text-end">PCT%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FRANCE</td>
                                        <td class="text-end">13,849</td>
                                        <td class="text-end">40.79%</td>
                                    </tr>
                                    <tr>
                                        <td>SPAIN</td>
                                        <td class="text-end">3,216</td>
                                        <td class="text-end">9.79%</td>
                                    </tr>
                                    <tr class="text-theme fw-bold">
                                        <td>MEXICO</td>
                                        <td class="text-end">1,398</td>
                                        <td class="text-end">4.26%</td>
                                    </tr>
                                    <tr>
                                        <td>UNITED STATES</td>
                                        <td class="text-end">1,090</td>
                                        <td class="text-end">3.32%</td>
                                    </tr>
                                    <tr>
                                        <td>BELGIUM</td>
                                        <td class="text-end">500</td>
                                        <td class="text-end">3.18%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="col-lg-6">

                            <div class="card">

                                <div class="card-body py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="w-70px">
                                            <div data-render="apexchart" data-type="donut" data-height="70"></div>
                                        </div>
                                        <div class="flex-1 ps-2">
                                            <table class="w-100 small mb-0 text-white text-opacity-60">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-95"></div> FEED
                                                            </div>
                                                        </td>
                                                        <td class="text-end">25.70%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-75"></div> ORGANIC
                                                            </div>
                                                        </td>
                                                        <td class="text-end">24.30%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-55"></div> REFERRAL
                                                            </div>
                                                        </td>
                                                        <td class="text-end">23.05%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-35"></div> DIRECT
                                                            </div>
                                                        </td>
                                                        <td class="text-end">14.85%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-15"></div> EMAIL
                                                            </div>
                                                        </td>
                                                        <td class="text-end">7.35%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>

        </div>


        

    </div>

</div>


<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>


<div class="app-theme-panel">
    <div class="app-theme-panel-container">
        <a href="javascript:;" data-toggle="theme-panel-expand" class="app-theme-toggle-btn"><i class="bi bi-sliders"></i></a>
        <div class="app-theme-panel-content">
            <div class="small fw-bold text-white mb-1">Theme Color</div>
            <div class="card mb-3">

                <div class="card-body p-2">

                    <div class="app-theme-list">
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-warning" data-theme-class="theme-warning" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                        <div class="app-theme-list-item active"><a href="javascript:;" class="app-theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-info" data-theme-class="theme-info" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-primary" data-theme-class="theme-primary" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                        <div class="app-theme-list-item"><a href="javascript:;" class="app-theme-list-link bg-gray-100" data-theme-class="theme-gray-200" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Gray">&nbsp;</a></div>
                    </div>

                </div>


                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
            <div class="small fw-bold text-white mb-1">Theme Cover</div>
            <div class="card">

                <div class="card-body p-2">

                    <div class="app-theme-cover">
                        <div class="app-theme-cover-item active">
                            <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-1.jpg);" data-theme-cover-class="" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
                        </div>
                        <div class="app-theme-cover-item">
                            <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-2.jpg);" data-theme-cover-class="bg-cover-2" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 2">&nbsp;</a>
                        </div>
                        <div class="app-theme-cover-item">
                            <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-3.jpg);" data-theme-cover-class="bg-cover-3" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 3">&nbsp;</a>
                        </div>
                        <div class="app-theme-cover-item">
                            <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-4.jpg);" data-theme-cover-class="bg-cover-4" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 4">&nbsp;</a>
                        </div>
                        <div class="app-theme-cover-item">
                            <a href="javascript:;" class="app-theme-cover-link" style="background-image: url(assets/img/cover/cover-thumb-5.jpg);" data-theme-cover-class="bg-cover-5" data-toggle="theme-cover-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cover 5">&nbsp;</a>
                        </div>
                    </div>

                </div>


                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
@endsection
{{--   --}}
