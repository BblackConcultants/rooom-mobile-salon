<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rooom Mobile Hair Salon | Messaging</title>
<link rel="icon" type="image/x-icon" href="assets/images/fav.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="assets/admin/dist/css/adminlte.min2167.css?v=3.2.0">

<link rel="stylesheet" href="assets/admin/plugins/summernote/summernote-bs4.min.css">
<script nonce="95cf77ab-7702-4287-90a9-04c11bec6bed">(function(w,d){!function(a,b,c,d){a[c]=a[c]||{};a[c].executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz._f=function(e){return async function(){var f=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:f})}};for(const g of["track","set","debug"])a.zaraz[g]=a.zaraz._f(g);a.zaraz.init=()=>{var h=b.getElementsByTagName(d)[0],i=b.createElement(d),j=b.getElementsByTagName("title")[0];j&&(a[c].t=b.getElementsByTagName("title")[0].text);a[c].x=Math.random();a[c].w=a.screen.width;a[c].h=a.screen.height;a[c].j=a.innerHeight;a[c].e=a.innerWidth;a[c].l=a.location.href;a[c].r=b.referrer;a[c].k=a.screen.colorDepth;a[c].n=b.characterSet;a[c].o=(new Date).getTimezoneOffset();if(a.dataLayer)for(const n of Object.entries(Object.entries(dataLayer).reduce(((o,p)=>({...o[1],...p[1]})),{})))zaraz.set(n[0],n[1],{scope:"page"});a[c].q=[];for(;a.zaraz.q.length;){const q=a.zaraz.q.shift();a[c].q.push(q)}i.defer=!0;for(const r of[localStorage,sessionStorage])Object.keys(r||{}).filter((t=>t.startsWith("_zaraz_"))).forEach((s=>{try{a[c]["z_"+s.slice(7)]=JSON.parse(r.getItem(s))}catch{a[c]["z_"+s.slice(7)]=r.getItem(s)}}));i.referrerPolicy="origin";i.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a[c])));h.parentNode.insertBefore(i,h)};["complete","interactive"].includes(b.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php 
	require_once "navigation.php";
	require_once "left_sidebar.php";
?>



<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1><?php echo $page_heading; ?></h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active"><?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
<a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
<div class="card">
<div class="card-header">
<h3 class="card-title">Folders</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>
<div class="card-body p-0">
<ul class="nav nav-pills flex-column">
<li class="nav-item active">
<a href="#" class="nav-link">
<i class="fas fa-inbox"></i> Inbox
<span class="badge bg-primary float-right">12</span>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-envelope"></i> Sent
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-file-alt"></i> Drafts
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="fas fa-filter"></i> Junk
<span class="badge bg-warning float-right">65</span>
</a>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="far fa-trash-alt"></i> Trash
</a>
</li>
</ul>
</div>

</div>

<div class="card">
<div class="card-header">
<h3 class="card-title">Labels</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
</div>
</div>

<div class="card-body p-0">
<ul class="nav nav-pills flex-column">
<li class="nav-item">
<a class="nav-link" href="#"><i class="far fa-circle text-danger"></i> Important</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><i class="far fa-circle text-warning"></i> Promotions</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><i class="far fa-circle text-primary"></i> Social</a>
</li>
</ul>
</div>

</div>

</div>

<div class="col-md-9">
<div class="card card-primary card-outline">
<div class="card-header">
<h3 class="card-title">Compose New Message</h3>
</div>

<div class="card-body">
<div class="form-group">
<input class="form-control" placeholder="To:">
</div>
<div class="form-group">
<input class="form-control" placeholder="Subject:">
</div>
<div class="form-group">
<textarea id="compose-textarea" class="form-control" style="height: 300px">
           Start Typing Your Message Here....          
                    </textarea>
</div>
<div class="form-group">
<div class="btn btn-default btn-file">
<i class="fas fa-paperclip"></i> Attachment
<input type="file" name="attachment">
</div>
<p class="help-block">Max. 32MB</p>
</div>
</div>

<div class="card-footer">
<div class="float-right">
<button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
<button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
</div>
<button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
</div>

</div>

</div>

</div>

</div>
</section>

</div>

<footer class="main-footer" style="background-color: #000;">
<strong>Copyright &copy; 2023 <a href="javascript:void(0);" style="color: #fbf000;">Rooom Mobile Salon</a>.</strong>
All rights reserved. System Designed & Developed By <a href="https://bblack.co.za/" target="_blank" style="color: #fbf000;">BrightBlack</a>
<div class="float-right d-none d-sm-inline-block">
<b>Version</b> 1.1.0
</div>
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="assets/admin/plugins/jquery/jquery.min.js"></script>

<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/admin/dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="assets/admin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="assets/admin/dist/js/demo.js"></script>

<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
</body>
</html>
