﻿@extends('admin.publichtml.public')
@section('title','后台首页')
@section('main')
<nav class="breadcrumb"><i class="Hui-iconfont"></i> 首页 <span class="c-gray en">&gt;</span> 用户中心 <span class="c-gray en">&gt;</span> 用户管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont"></i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont"></i> 搜用户</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont"></i> 批量删除</a> <a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')" class="btn btn-primary radius"><i class="Hui-iconfont"></i> 添加用户</a></span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
	<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="DataTables_Table_0_length"><label>显示 <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> 条</label></div><div id="DataTables_Table_0_filter" class="dataTables_filter"><label>从当前数据中检索:<input type="search" class="input-text " aria-controls="DataTables_Table_0"></label></div><table class="table table-border table-bordered table-hover table-bg table-sort dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
		<thead>
			<tr class="text-c" role="row"><th width="25" class="sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 25px;"><input type="checkbox" name="" value=""></th><th width="80" class="sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="descending" aria-label="ID: 升序排列" style="width: 80px;">ID</th><th width="100" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="用户名: 升序排列" style="width: 100px;">用户名</th><th width="40" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="性别: 升序排列" style="width: 40px;">性别</th><th width="90" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="手机: 升序排列" style="width: 89px;">手机</th><th width="150" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="邮箱: 升序排列" style="width: 149px;">邮箱</th><th width="" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="地址: 升序排列" style="width: 345px;">地址</th><th width="130" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="加入时间: 升序排列" style="width: 129px;">加入时间</th><th width="70" class="sorting_disabled" rowspan="1" colspan="1" aria-label="状态" style="width: 69px;">状态</th><th width="100" class="sorting_disabled" rowspan="1" colspan="1" aria-label="操作" style="width: 100px;">操作</th></tr>
		</thead>
		<tbody>
			
		<tr class="text-c odd" role="row">
				<td><input type="checkbox" value="1" name=""></td>
				<td class="sorting_1">1</td>
				<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')">张三</u></td>
				<td>男</td>
				<td>13000000000</td>
				<td>admin@mail.com</td>
				<td class="text-l">北京市 海淀区</td>
				<td>2014-6-11 11:11:42</td>
				<td class="td-status"><span class="label label-success radius">已启用</span></td>
				<td class="td-manage"><a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用"><i class="Hui-iconfont"></i></a> <a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-add.html','4','','510')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a> <a style="text-decoration:none" class="ml-5" onclick="change_password('修改密码','change-password.html','10001','600','270')" href="javascript:;" title="修改密码"><i class="Hui-iconfont"></i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont"></i></a></td>
			</tr></tbody>
	</table><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">显示 1 到 1 ，共 1 条</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">上一页</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">下一页</a></div></div>
	</div>
</div>
@endsection