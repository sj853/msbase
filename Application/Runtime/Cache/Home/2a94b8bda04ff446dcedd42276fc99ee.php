<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title id="page-title">Account Manager</title>

    <!-- GC -->
   <link href="/msbase/Public/js/extjs/theme/ext-theme-neptune-touch/ext-theme-neptune-touch-all.css" rel="stylesheet" type="text/css" />
    <!-- <x-compile> -->
    <!-- <x-bootstrap> -->
    <script type="text/javascript" src="/msbase/Public/js/extjs/ext-all.js"></script>
    <script type="text/javascript" src="/msbase/Public/js/extjs/ext-locale-zh_CN.js"></script>
    <!-- </x-bootstrap> -->
    <!--<script type="text/javascript" src="/msbase/Public/js/extjs/js/app.js"></script>-->
    <!-- </x-compile> -->
</head>
<body>
	<script type="text/javascript">
        Ext.onReady(function () {
            //创建一个窗体
            var win = new Ext.Window({
                width: 300,
                height:300,
                items: [
                ],
                modal: true,
                buttonAlign: 'center',
                buttons: [{
                    text: '测试', 
                    id: 'btnTest', 
                    handler: function () {
       					var win = this.up('window');
       					Ext.Ajax.request( {
									  url : '/msbase/index.php/Home/User/getUsers',
									  method : 'post',
									  params : {
									  },
									  success : function(response, options) {
									   var o = Ext.util.JSON.decode(response.responseText);
									   var html = "";
									   Ext.Object.each(o, function(key, value, myself) {
									   		html += value.name;
    										win.update(html);
    										});
									  },
									  failure : function() {
									  }
								 });
                    }
                }
                ]
            });
            win.show();
        });

        
    </script>


</body>
</html>