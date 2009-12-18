
<img src='<?php echo base_url()?>img/cog.png'> <span class='head'>General Settings</span><br/><br/>

<form action='<?php echo site_url('admin/settings/save/general')?>' method='post'>
<table cellpadding=10 cellspacing=0 width='90%'>
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%'><B>Site Name</b></td>
  		<td bgcolor='#dfefff'><input type='text' name='site_name' value="<?php echo $site_name['option_value']?>" size='50'></td></tr>
  	<tr height=5><Td></td></tr><tr>
			
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%'><B>Site Title</b></td>
  		<td bgcolor='#dfefff'><input type='text' name='site_title' value="<?php echo $site_title['option_value']?>" size='50'></td></tr>
  	<tr height=5><Td></td></tr><tr>
			
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%'><B>Site URL</b></td>
  		<td bgcolor='#dfefff'><input type='text' name='site_url' value="<?php echo $site_url['option_value']?>" size='50'></td></tr>
  	<tr height=5><Td></td></tr><tr>
			
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%'><B>Admin Email</b></td>
  		<td bgcolor='#dfefff'><input type='text' name='admin_email' value="<?php echo $admin_email['option_value']?>" size='50'></td></tr>
  	<tr height=5><Td></td></tr><tr>
			
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%'><B>Registration</b></td>
  		<td bgcolor='#dfefff'><input type='hidden' name='anyone_can_register'>
			<input type='checkbox' name='anyone_can_register' <?php if($anyone_can_register['option_value'] == 'on') echo 'checked';?>> Anyone can register and login.</td></tr>
  	<tr height=5><Td></td></tr><tr>		
  							
	<tr><Td bgcolor='#dfefff' style='font-size: 12px' width='25%' valign='top'><B>Upload Settings</b></td>
  		<td bgcolor='#dfefff'><input type='text' name='file_upload_path' value="<?php echo $file_upload_path['option_value']?>"  size='50'/><br/>
  		<?php echo $file_upload_path['descrip']?><br/><br/></td></tr>
  	<tr><Td bgcolor='#dfefff'></td>
  		<td bgcolor='#dfefff'><input type='text' name='file_upload_types' value="<?php echo $file_upload_types['option_value']?>"  size='50'/><br/>
  		<?php echo $file_upload_types['descrip']?><br/><br/></td></tr>
  	<tr height=5><Td></td></tr><tr>
</table><input type='submit' value='SAVE'></form>