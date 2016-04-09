<?php
  get_header();

?>

<div class="main">

        <img src="<?php echo get_template_directory_uri().'/images/businessSmall.png' ; ?>">
       
</div>

<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-2">
    <h2 style="text-align:center;">关于百慕</h2>
    <hr>

    <div class="list-group">
      <a href="<?php echo get_page_url("companyintroduction")?>" class="list-group-item list-group-item-success">百慕简介</a>
      <a href="<?php echo get_page_url("businessintroduction")?>" class="list-group-item list-group-item-success">经营业务</a>
      <a href="<?php echo get_page_url("companyshow")?>" class="list-group-item list-group-item-success">企业展示</a>
      <a href="#" class="list-group-item list-group-item-success">管理人员</a>
    </div>
  </div>
  <div class="col-xs-1"></div>
  <div class="col-xs-7">
