﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Rynokbay Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="admindb/assets/img/favicon.png">
    <!-- Common Styles Starts -->
    <link href="../css2-1?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css">
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css">
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min-1.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ui-elements/pagination.css" rel="stylesheet" type="text/css">
    <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/apps/companies.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->  
</head>
<body>


<!--  Sidebar Start  -->

@include("admin.adminnavbar")
        
<!--  Sidebar Ends  -->

        <!--  Content Area Starts  -->
        <div id="content" class="main-content">
            <!--  Navbar Starts / Breadcrumb Area Starts -->
            <div class="sub-header-container">
                <header class="header navbar navbar-expand-sm">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                        <i class="las la-bars"></i>
                    </a>
                    <ul class="navbar-nav flex-row">
                        <li>
                            <div class="page-header">
                                <nav class="breadcrumb-one" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><span>Companies</span></li>
                                    </ol>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </header>
            </div>
            <!--  Navbar Ends / Breadcrumb Area Ends -->
            <!-- Main Body Starts -->
            <div class="layout-px-spacing">                
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="">
                        <div class="widget-content searchable-container grid">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 filtered-list-search align-self-center w-100">
                                        <form class="form-inline my-2 my-lg-0">
                                            <div class="">
                                                <i class="las la-search toggle-search"></i>
                                                <input type="text" id="input-search" class="form-control search-form-control  ml-lg-auto" placeholder="Search Companies">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-5 text-sm-right text-center align-self-center">
                                        <div class="d-flex justify-content-sm-end justify-content-center contact-options">
                                            <a id="btn-add-company" class="pointer font-25 s-o mr-2">
                                                <i class="las la-plus-circle"></i>
                                            </a>
                                            <a class="pointer font-25 s-o">
                                                <i class="las la-cog"></i>
                                            </a>
                                            <div class="dropdown custom-dropdown-icon mt-1">
                                                <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>Sort By</span> <i class="las la-angle-down"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown" style="will-change: transform;">
                                                    <a class="dropdown-item" href="javascript:void(0);">Name</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Projects</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Team</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add Modal -->
                                        <div class="modal fade" id="addCompanyModal" tabindex="-1" role="dialog" aria-labelledby="addCompanyModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <i class="las la-times pointer" data-dismiss="modal"></i>
                                                        <div class="add-company-box">
                                                            <div class="add-company-content">
                                                                <h5 class="text-center mb-4">Add a Company</h5>
                                                                <form id="addCompanyModalTitle">
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-center">
                                                                            <img id="image" src="../75x75" style="border-radius:50%">
                                                                            <input type="file" id="myfile" style="display: none;">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="company-name">
                                                                                <i class="las la-briefcase"></i>
                                                                                <input type="text" id="c-name" class="form-control" placeholder="Company Name">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="company-email">
                                                                                <i class="las la-map-marker"></i>
                                                                                <input type="text" id="c-email" class="form-control" placeholder="Company Location">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="company-project">
                                                                                <i class="las la-clipboard-list"></i>
                                                                                <input type="text" id="c-designation" class="form-control" placeholder="Project">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="company-team">
                                                                                <i class="las la-user-friends"></i>
                                                                                <input type="text" id="c-contact" class="form-control" placeholder="Team">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="company-description">
                                                                                <i class="las la-pen"></i>
                                                                                <input type="text" id="c-location" class="form-control" placeholder="Description">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-dismiss="modal" class="pointer text-primary font-12 mr-3">Close</a>
                                                        <button class="btn btn-sm btn-primary">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Modal -->
                                        <div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="editContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                <h5 class="text-center mb-4">Edit Contact</h5>
                                                                <form id="addContactModalTitle">
                                                                    <div class="row">
                                                                        <div class="col-md-12 text-center">
                                                                            <img id="image" src="assets/img/profile-5.jpg" style="border-radius:50%">
                                                                            <input type="file" id="myfile" style="display: none;">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="contact-name">
                                                                                <i class="las la-user"></i>
                                                                                <input value="Azeemo Shaan" type="text" id="c-name" class="form-control" placeholder="Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="contact-email">
                                                                                <i class="las la-envelope"></i>
                                                                                <input value="azeemo@mail.com" type="text" id="c-email" class="form-control" placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="contact-designation">
                                                                                <i class="las la-briefcase"></i>
                                                                                <input value="Web Developer" type="text" id="c-designation" class="form-control" placeholder="Designation">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="contact-contact">
                                                                                <i class="las la-phone"></i>
                                                                                <input value="California, USA" type="text" id="c-contact" class="form-control" placeholder="Contact">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="contact-location">
                                                                                <i class="las la-map-marker"></i>
                                                                                <input value="+1 (070) 123-4567" type="text" id="c-location" class="form-control" placeholder="Location">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a data-dismiss="modal" class="pointer text-primary font-12 mr-3">Close</a>
                                                        <button class="btn btn-sm btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="searchable-items grid card-box">
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-5.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-5.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Link Technology</p>
                                                <p class="user-work">California, USA</p>
                                            </div>
                                        </div> 
                                        <p class="font-12 text-center text-muted">Link Technology is an American multinational technology conglomerate headquartered in California.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">12</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">22</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-1.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-1.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Cube House</p>
                                                <p class="user-work">Chicago, USA</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Cube House is an American multinational technology  conglomerate headquartered in California.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">10</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">17</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-2.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-2.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Hightech</p>
                                                <p class="user-work">Sao Paolo, Brazil</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Hightech is an multinational technology company conglomerate headquartered in Brazil.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">10</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">17</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-3.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-3.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Innovation Tech</p>
                                                <p class="user-work">Madrid, Spain</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Innovation Tech is an Spainish multinational technology conglomerate headquartered in Spain.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">2</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">22</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-4.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-4.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Circle Inc.</p>
                                                <p class="user-work">California, USA</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Circle Corporation is an American multinational technology conglomerate headquartered in USA.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">14</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">37</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile">
                                            <img src="assets/img/company-7.jpg" class="light-image" alt="avatar">
                                            <img src="assets/img/company-7.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Hightech Joint</p>
                                                <p class="user-work">Mumbai, India</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Hightech Joint is an Indian multinational technology conglomerate headquartered in India.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">1</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">5</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item-content">
                                        <img src="assets/img/company-8.jpg" class="light-image" alt="avatar">
                                        <div class="user-profile">
                                            <img src="assets/img/company-8.jpg" alt="avatar">
                                            <div class="user-meta-info">
                                                <p class="user-name">Vision Primary</p>
                                                <p class="user-work">California, USA</p>
                                            </div>
                                        </div>
                                        <p class="font-12 text-center text-muted">Vision Primary is an American multinational technology conglomerate headquartered in USA.</p>
                                        <div class="d-flex company-small-details align-center justify-content-around mt-3">
                                            <div class="left text-center">
                                                <p class="font-12 text-muted  mb-0">Projects</p>
                                                <p class="font-25 text-primary strong">8</p>
                                            </div>
                                            <div class="right text-center">
                                                <p class="font-12 text-muted  mb-0">Team</p>
                                                <p class="font-25 text-primary strong">50</p>
                                            </div>
                                        </div>
                                        <div class="action-btn">
                                           <a class="btn btn-sm btn-dark" href="apps_company_details.html">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination p13 text-center mt-4">
                                <ul class="mx-auto">
                                  <a href="#" class="prev"><li>Prev</li></a>
                                  <a class="is-active" href="#"><li>1</li></a>
                                  <a href="#"><li>2</li></a>
                                  <a href="#"><li>3</li></a>
                                  <a href="#" class="next"><li>Next</li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Main Body Ends -->
            <div class="responsive-msg-component">
                <p>
                    <a class="close-msg-component"><i class="las la-times"></i></a>
                    Please reload the page to view the responsive functionalities
                </p>
            </div>
            <!-- Copyright Footer Starts -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2023 <a target="_blank" href="#">Rynokbay</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Crafted with extra <i class="las la-heart text-danger"></i></p>
                </div>
            </div>
            <!-- Copyright Footer Ends -->
            <!-- Arrow Starts -->
            <div class="scroll-top-arrow" style="display: none;">
                <i class="las la-angle-up"></i>
            </div>
            <!-- Arrow Ends -->
        </div>
        <!--  Content Area Ends  -->
        <!--  Rightbar Area Starts -->
        <div class="right-bar">
            <div class="h-100">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link  active" data-toggle="tab" href="#chat-tab" role="tab" aria-selected="true">
                                                <i class="las la-sms"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#status-tab" role="tab" aria-selected="false">
                                                <i class="las la-tasks"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#settings-tab" role="tab" aria-selected="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes starts -->
                                    <div class="tab-content pt-0 rightbar-tab-container">
                                        <div class="tab-pane active rightbar-tab" id="chat-tab" role="tabpanel">
                                            <form class="search-bar p-3">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control search-form-control" placeholder="Search">
                                                    <span class="mdi mdi-magnify"></span>
                                                </div>
                                            </form>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chat Groups</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-success"></i>
                                                    <span class="mb-0 mt-1 text-success">Backend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-warning"></i>
                                                    <span class="mb-0 mt-1 text-warning">Frontend Team</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 mb-2 d-block">
                                                    <i class="las la-dot-circle mr-1 text-danger"></i>
                                                    <span class="mb-0 mt-1 text-danger">Back Office</span>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset group-item pl-3 d-block">
                                                    <i class="las la-dot-circle mr-1 text-info"></i>
                                                    <span class="mb-0 mt-1 text-info">Personal</span>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">My Favourites <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-1.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Andrew Mackie</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-2.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Sophia Garner</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Nice and amazing.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Jackie Smith</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Send me the .pdf files asap.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="right-bar-heading px-3 mt-2 text-uppercase">Chats <a href="javascript: void(0);"><i class="las la-angle-right"></i></a></h6>
                                            <div class="p-2 pb-4">
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media pt-0">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-3.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Owen Hargrieves</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">That's really cool</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-4.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Riyana Giyan</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">When do you send me those files ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-5.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Ryan Timberlake</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Invoice has been generated</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-6.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Julie Roman</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thank you so much.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-7.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Gareth Sarkar</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Thats was awesome</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset">
                                                    <div class="media">
                                                        <div class="position-relative mr-2">
                                                            <img src="assets/img/profile-8.jpg" class="rounded-circle avatar-sm ml-2" alt="user-pic">
                                                            <span class="user-status online"></span>
                                                        </div>
                                                        <div class="media-body overflow-hidden mr-2">
                                                            <h6 class="mt-0 mb-1 font-13">Kylie Roberts</h6>
                                                            <div class="font-12">
                                                                <p class="mb-0 text-truncate">Amazing feature.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="text-center pt-4">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                                                        Load more
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="status-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Order Status </h6>
                                            <div class="px-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Success<span class="float-right">75%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Processing<span class="float-right">37%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Order Initiated<span class="float-right">52%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <h6 class="font-weight-medium px-3 mb-0 mt-4 text-uppercase">Payment Status</h6>
                                            <div class="p-2">
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Failed<span class="float-right">12%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment on hold<span class="float-right">67%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                                <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                                                    <p class="text-muted mb-0">Payment Successful<span class="float-right">84%</span></p>
                                                    <div class="progress mt-2" style="height: 4px;">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <a href="javascript: void(0);" class="btn btn-primary btn-sm">Show All</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane rightbar-tab" id="settings-tab" role="tabpanel">
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Account Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Sync Contacts</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Update</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Recieve Notifications</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Mail Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Mail Auto Responder</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Auto Trash Delete</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Custom Signature</p>
                                                </div>
                                            </div>
                                            <h6 class="right-bar-heading p-2 px-3 mt-2 text-uppercase">Chat Setting </h6>
                                            <div class="px-2">
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Show Online</p>
                                                </div>
                                                <div class="switch-container mb-3 pl-2">
                                                    <label class="switch">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round primary-switch"></span>
                                                    </label>
                                                    <p class="ml-3 text-dark">Chat Notifications</p>
                                                </div>
                                            </div>
                                            <div class="px-2 text-center pt-4">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                                    Set Default
                                                </a>
                                                <button class="ripple-button ripple-button-primary btn-sm" type="button">
                                                    <div class="ripple-ripple js-ripple">
                                                    <span class="ripple-ripple__circle"></span>
                                                    </div>
                                                    Ripple Effect
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab panes ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Rightbar Area Ends --> 
    </div>
    <!-- Main Container Ends -->
    <!-- Common Script Starts -->
    <script src="admindb/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="admindb/bootstrap/js/popper.min.js"></script>
    <script src="admindb/bootstrap/js/bootstrap.min.js"></script>
    <script src="admindb/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admindb/assets/js/app.js"></script>    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="admindb/assets/js/custom.js"></script>
    <!-- Common Script Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="admindb/assets/js/loader.js"></script>
    <script src="admindb/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="admindb/assets/js/apps/companies.js"></script>
    <!-- Page Level Plugin/Script Starts -->
</body>
</html>