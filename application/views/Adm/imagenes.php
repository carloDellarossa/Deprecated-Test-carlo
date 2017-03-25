<style>
h1, h2 { font-family: Arial, sans-serif; font-size: 25px; }
h2 { font-size: 20px; }

label { font-family: Verdana, sans-serif; font-size: 12px; display: block; }
input { padding: 3px 5px; width: 250px; margin: 0 0 10px; }
input[type="file"] { padding-left: 0; }
input[type="submit"] { width: auto; }

#files { font-family: Verdana, sans-serif; font-size: 11px; }
#files strong { font-size: 13px; }
#files a { float: right; margin: 0 0 5px 10px; }
#files ul { list-style: none; padding-left: 0; }
#files li { width: 280px; font-size: 12px; padding: 5px 0; border-bottom: 1px solid #CCC; }

</style>
<!doctype html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/ajaxfileupload.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="conteiner-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-offset-1">
        <h1>Subir Imagen</h1>
        </div>
        <div class="col-lg-6 col-md-offset-1">
        <form method="post" action="" id="upload_file">
            <label for="title">Imagen</label>
            <input type="text" name="title" id="title" value="" />

            <label for="userfile">Archivo</label>
            <input type="file" name="userfile" id="userfile" size="20" />

            <input type="submit" name="submit" id="submit" />
        </form>
        <h2>Files</h2>
        <div id="files"></div>
      </div>
      </div>
    </div>
  </div>

</body>
</html>
<script>
$(function() {
	$('#upload_file').submit(function(e) {
		e.preventDefault();
		$.ajaxFileUpload({
			url 			:'./upload/upload_file/',
			secureuri		:false,
			fileElementId	:'userfile',
			dataType		: 'json',
			data			: {
				'title'				: $('#title').val()
			},
			success	: function (data, status)
			{
				if(data.status != 'error')
				{
					$('#files').html('<p>Reloading files...</p>');
					refresh_files();
					$('#title').val('');
				}
				alert(data.msg);
			}
		});
		return false;
	});
});
</script>
