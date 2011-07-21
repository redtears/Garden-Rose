<?php 
	require('../xajax/xajax.inc.php');
	require_once('../include/testajax.php');
	require_once('../include/confirmUpload.php');
	$xajax = new xajax();
	require_once("../include/registerFunction.php");
	$xajax->processRequests();
?>
<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>
	<meta charset="utf-8">
	<title>jQuery File Upload Example</title>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/base/jquery-ui.css" id="theme">
	<link rel="stylesheet" href="../css/jquery.fileupload-ui.css">
	<link rel="stylesheet" href="../css/style.css">
	<?php $xajax->printJavascript('../xajax/'); ?>
</head>
<body>
	<div id="fileupload">
	    <form action="../include/upload.php" method="POST" enctype="multipart/form-data">
	        <div class="fileupload-buttonbar">
	            <label class="fileinput-button">
	                <span>Add files...</span>
	                <input type="file" name="files[]" multiple>
	            </label>
	            <button type="submit" class="start">Start upload</button>
	            <button type="reset" class="cancel">Cancel upload</button>
	            <button type="button" class="delete">Delete files</button>
	        </div>
	    </form>
	    <div class="fileupload-content">
	        <table class="files"></table>
	        <div class="fileupload-progressbar"></div>
	    </div>	    
	</div>
	<script id="template-upload" type="text/x-jquery-tmpl">
    <tr class="template-upload{{if error}} ui-state-error{{/if}}">
        <td class="preview"></td>
        <td class="name">${name}</td>
        <td class="size">${sizef}</td>
        {{if error}}
            <td class="error" colspan="2">Error:
                {{if error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
            <td class="progress"><div></div></td>
            <td class="start"><button>Start</button></td>
        {{/if}}
        <td class="cancel"><button>Cancel</button></td>
    </tr>
	</script>
	<script id="template-download" type="text/x-jquery-tmpl">
    <tr class="template-download{{if error}} ui-state-error{{/if}}">
        {{if error}}
            <td></td>
            <td class="name">${name}</td>
            <td class="size">${sizef}</td>
            <td class="error" colspan="2">Error:
                {{if error === 1}}File exceeds upload_max_filesize (php.ini directive)
                {{else error === 2}}File exceeds MAX_FILE_SIZE (HTML form directive)
                {{else error === 3}}File was only partially uploaded
                {{else error === 4}}No File was uploaded
                {{else error === 5}}Missing a temporary folder
                {{else error === 6}}Failed to write file to disk
                {{else error === 7}}File upload stopped by extension
                {{else error === 'maxFileSize'}}File is too big
                {{else error === 'minFileSize'}}File is too small
                {{else error === 'acceptFileTypes'}}Filetype not allowed
                {{else error === 'maxNumberOfFiles'}}Max number of files exceeded
                {{else error === 'uploadedBytes'}}Uploaded bytes exceed file size
                {{else error === 'emptyResult'}}Empty file upload result
                {{else}}${error}
                {{/if}}
            </td>
        {{else}}
            <td class="preview">
                {{if thumbnail_url}}
                    <a href="${url}" target="_blank"><img src="${thumbnail_url}"></a>
                {{/if}}
            </td>
            <td class="name">
                <a href="${url}"{{if thumbnail_url}} target="_blank"{{/if}}>${name}</a>
            </td>
            <td class="size">${sizef}</td>
            <td colspan="2"></td>
        {{/if}}
        <td class="delete" id="${name}">			
			<TEXTAREA Name="comments" rows="4" cols="20"></TEXTAREA> 
            <button data-type="${delete_type}" data-url="${delete_url}">Delete</button>
			<input type="button" value="确定" onclick="confirmUpload('${url}', '${name}');"/>
			<label class="lbl_success" style="display:none">成功</label>
        </td>
    </tr>
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
	<script src="../js/jquery/jquery.iframe-transport.js"></script>
	<script src="../js/jquery/jquery.fileupload.js"></script>
	<script src="../js/jquery/jquery.fileupload-ui.js"></script>
	<script src="../js/upload.js"></script>
</body> 
<script>
	function confirmUpload(url, name){
		//alert();
		xajax_confirmUpload(url, name);
		
		
	}

	function confirmUpload_back(id){
		//var td = $(obj).parent;
		//id of td
		var object = document.getElementById(id);
		var arrTextArea = object.getElementsByTagName("textarea");
		var arrInput = object.getElementsByTagName("input");
		var arrButton = object.getElementsByTagName("button");
		var arrLabel = object.getElementsByTagName("label");
		
		//alert(id);
		//alert(object);
		//object.getElementByTag("textarea");
		//alert(arrTextArea[0]);
		//alert(td);
		arrTextArea[0].style.display="none";
		arrInput[0].style.display="none" ;
		arrButton[0].style.display="none";
		arrLabel[0].style.display="block";
	}
	
</script>

</html>