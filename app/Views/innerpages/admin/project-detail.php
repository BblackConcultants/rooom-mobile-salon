<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/project-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:38 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Project Detail</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min2167.css?v=3.2.0">
<script nonce="aad245c4-5740-4e55-84e1-64e3d31d4725">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="../../index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-comments"></i>
<span class="badge badge-danger navbar-badge">3</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<a href="#" class="dropdown-item">

<div class="media">
<img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
<div class="media-body">
<h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">Call me whenever you can...</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">I got your message bro</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">

<div class="media">
<img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
<div class="media-body">
<h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
</h3>
<p class="text-sm">The subject goes here</p>
<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
</div>
</div>

</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link" data-toggle="dropdown" href="#">
<i class="far fa-bell"></i>
<span class="badge badge-warning navbar-badge">15</span>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
<span class="dropdown-item dropdown-header">15 Notifications</span>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item">
<i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
</a>
<div class="dropdown-divider"></div>
<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
</div>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>
<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="../../index3.html" class="brand-link">
<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block">Alexander Pierce</a>
</div>
</div>

<div class="form-inline">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div>
</div>

<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Dashboard
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../../index-2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v1</p>
</a>
</li>
<li class="nav-item">
<a href="../../index2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v2</p>
</a>
</li>
<li class="nav-item">
<a href="../../index3.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Dashboard v3</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="../widgets.html" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Widgets
<span class="right badge badge-danger">New</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Layout Options
<i class="fas fa-angle-left right"></i>
<span class="badge badge-info right">6</span>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../layout/top-nav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/top-nav-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Top Navigation + Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/boxed.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Boxed</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-sidebar-custom.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Sidebar <small>+ Custom Area</small></p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-topnav.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Navbar</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/fixed-footer.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Fixed Footer</p>
</a>
</li>
<li class="nav-item">
<a href="../layout/collapsed-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Collapsed Sidebar</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-chart-pie"></i>
<p>
Charts
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../charts/chartjs.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>ChartJS</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/flot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Flot</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/inline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inline</p>
</a>
</li>
<li class="nav-item">
<a href="../charts/uplot.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>uPlot</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tree"></i>
<p>
UI Elements
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../UI/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/icons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Icons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/buttons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Buttons</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/sliders.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sliders</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/modals.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Modals & Alerts</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/navbar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Navbar & Tabs</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/timeline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Timeline</p>
</a>
</li>
<li class="nav-item">
<a href="../UI/ribbons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Ribbons</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-edit"></i>
<p>
Forms
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../forms/general.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>General Elements</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/advanced.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Advanced Elements</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/editors.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Editors</p>
</a>
</li>
<li class="nav-item">
<a href="../forms/validation.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Validation</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-table"></i>
<p>
Tables
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../tables/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Tables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/data.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>DataTables</p>
</a>
</li>
<li class="nav-item">
<a href="../tables/jsgrid.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>jsGrid</p>
</a>
</li>
</ul>
</li>
<li class="nav-header">EXAMPLES</li>
<li class="nav-item">
<a href="../calendar.html" class="nav-link">
<i class="nav-icon far fa-calendar-alt"></i>
<p>
Calendar
<span class="badge badge-info right">2</span>
</p>
</a>
</li>
<li class="nav-item">
<a href="../gallery.html" class="nav-link">
<i class="nav-icon far fa-image"></i>
<p>
Gallery
</p>
</a>
</li>
<li class="nav-item">
<a href="../kanban.html" class="nav-link">
<i class="nav-icon fas fa-columns"></i>
<p>
Kanban Board
</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-envelope"></i>
<p>
Mailbox
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../mailbox/mailbox.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Inbox</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/compose.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Compose</p>
</a>
</li>
<li class="nav-item">
<a href="../mailbox/read-mail.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Read</p>
</a>
</li>
</ul>
</li>
<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="nav-icon fas fa-book"></i>
<p>
Pages
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="invoice.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Invoice</p>
</a>
</li>
<li class="nav-item">
<a href="profile.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Profile</p>
</a>
</li>
<li class="nav-item">
<a href="e-commerce.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>E-commerce</p>
</a>
</li>
<li class="nav-item">
<a href="projects.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Projects</p>
</a>
</li>
<li class="nav-item">
<a href="project-add.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Project Add</p>
</a>
</li>
<li class="nav-item">
<a href="project-edit.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Project Edit</p>
</a>
</li>
<li class="nav-item">
<a href="project-detail.html" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Project Detail</p>
</a>
</li>
<li class="nav-item">
<a href="contacts.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Contacts</p>
</a>
</li>
<li class="nav-item">
<a href="faq.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>FAQ</p>
</a>
</li>
<li class="nav-item">
<a href="contact-us.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Contact us</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-plus-square"></i>
<p>
Extras
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v1
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="login.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v1</p>
</a>
</li>
<li class="nav-item">
<a href="register.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v1</p>
</a>
</li>
<li class="nav-item">
<a href="forgot-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v1</p>
</a>
</li>
<li class="nav-item">
<a href="recover-password.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v1</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Login & Register v2
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="login-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Login v2</p>
</a>
</li>
<li class="nav-item">
<a href="register-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Register v2</p>
</a>
</li>
<li class="nav-item">
<a href="forgot-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Forgot Password v2</p>
</a>
</li>
<li class="nav-item">
<a href="recover-password-v2.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Recover Password v2</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="lockscreen.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Lockscreen</p>
</a>
</li>
<li class="nav-item">
<a href="legacy-user-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Legacy User Menu</p>
</a>
</li>
<li class="nav-item">
<a href="language-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Language Menu</p>
</a>
</li>
<li class="nav-item">
<a href="404.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 404</p>
</a>
</li>
<li class="nav-item">
<a href="500.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Error 500</p>
</a>
</li>
<li class="nav-item">
<a href="pace.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Pace</p>
</a>
</li>
<li class="nav-item">
<a href="blank.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Blank Page</p>
</a>
</li>
<li class="nav-item">
<a href="../../starter.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Starter Page</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-search"></i>
<p>
Search
<i class="fas fa-angle-left right"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../search/simple.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Simple Search</p>
</a>
</li>
<li class="nav-item">
<a href="../search/enhanced.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Enhanced</p>
</a>
</li>
</ul>
</li>
<li class="nav-header">MISCELLANEOUS</li>
<li class="nav-item">
<a href="../../iframe.html" class="nav-link">
<i class="nav-icon fas fa-ellipsis-h"></i>
<p>Tabbed IFrame Plugin</p>
</a>
</li>
<li class="nav-item">
<a href="https://adminlte.io/docs/3.1/" class="nav-link">
<i class="nav-icon fas fa-file"></i>
<p>Documentation</p>
</a>
</li>
<li class="nav-header">MULTI LEVEL EXAMPLE</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-circle nav-icon"></i>
<p>Level 1</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-circle"></i>
<p>
Level 1
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Level 2</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>
Level 2
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-dot-circle nav-icon"></i>
<p>Level 3</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Level 2</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-circle nav-icon"></i>
<p>Level 1</p>
</a>
</li>
<li class="nav-header">LABELS</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-danger"></i>
<p class="text">Important</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-warning"></i>
<p>Warning</p>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon far fa-circle text-info"></i>
<p>Informational</p>
</a>
</li>
</ul>
</nav>

</div>

</aside>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Project Detail</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Project Detail</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">

<div class="card">
<div class="card-header">
<h3 class="card-title">Projects Detail</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
<div class="row">
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Estimated budget</span>
<span class="info-box-number text-center text-muted mb-0">2300</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Total amount spent</span>
<span class="info-box-number text-center text-muted mb-0">2000</span>
</div>
</div>
</div>
<div class="col-12 col-sm-4">
<div class="info-box bg-light">
<div class="info-box-content">
<span class="info-box-text text-center text-muted">Estimated project duration</span>
<span class="info-box-number text-center text-muted mb-0">20</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<h4>Recent Activity</h4>
<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
</span>
<span class="description">Shared publicly - 7:45 PM today</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
</p>
</div>
<div class="post clearfix">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
<span class="username">
<a href="#">Sarah Ross</a>
</span>
<span class="description">Sent you a message - 3 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
</p>
</div>
<div class="post">
<div class="user-block">
<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
<span class="username">
<a href="#">Jonathan Burke Jr.</a>
</span>
<span class="description">Shared publicly - 5 days ago</span>
</div>

<p>
Lorem ipsum represents a long-held tradition for designers,
typographers and the like. Some people hate it and argue for
its demise, but others ignore.
</p>
<p>
<a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
<h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
<p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
<br>
<div class="text-muted">
<p class="text-sm">Client Company
<b class="d-block">Deveint Inc</b>
</p>
<p class="text-sm">Project Leader
<b class="d-block">Tony Chicken</b>
</p>
</div>
<h5 class="mt-5 text-muted">Project files</h5>
<ul class="list-unstyled">
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
</li>
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
</li>
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
</li>
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
</li>
<li>
<a href class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
</li>
</ul>
<div class="text-center mt-5 mb-3">
<a href="#" class="btn btn-sm btn-primary">Add files</a>
<a href="#" class="btn btn-sm btn-warning">Report contact</a>
</div>
</div>
</div>
</div>

</div>

</section>

</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
</div>
<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io/">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="../../dist/js/demo.js"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/project-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Oct 2023 06:45:38 GMT -->
</html>
