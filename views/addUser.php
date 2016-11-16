<html>
<head> 
<title>Expert Trainers Locator </title>
</head>
<body>

<table width='1000' align='center' border='0' cellpadding='0' cellspacing='0'>
	<tr><td>OUR BANNER HERE</td></tr>
    <tr><td>
    <table width='100%' cellpadding='10' cellspacing='0' ><tr bgcolor='#6699CC'><td bgcolor='#6699CC' width='200'><strong>Selamat Datang <?php
	echo "<br/>";
	//foreach($userdetail as $row) echo $row['Nama'];
	echo $this->session->userdata('session_Nama');
	?></strong> </td><td><a href="http://localhost/etloc/index.php/newUser">Pengguna Baharu</</td></tr>
    </table>    
    </td></tr>
    <tr><td bgcolor='#FFFF99'>&nbsp;</td></tr>
    <tr><td bgcolor='#FFFF99'>
    <!-- add user table-->
    <table border='1' cellspacing='0' cellpadding='15' width='80%' align='center'>
    <tr><td>Arahan: Sila isi maklumat pengguna.</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td align="center">
    <?php echo form_open('User/addUser'); ?>
    <table width='100%' cellspacing='0' cellpadding='5' border='0'>
    <tr><td>No Kad Pengenalan</td><td align='right'>:</td><td><input type='text' length='100'  maxlength='12' name='No_Kp' /></td></tr>
    <tr><td>Nama</td><td align='right'>:</td><td><input type='text' length='100'  maxlength='30' name='Nama' /></td></tr>
    <tr><td>Kata Laluan</td><td align='right'>:</td><td><input type='password' length='100'  maxlength='12' name='Password1' /></td></tr>
    <tr><td>Ulang Kata Laluan</td><td align='right'>:</td><td><input type='password' length='100'  maxlength='12' name='Password2' /></td></tr>
    <tr><td>Alamat</td><td align='right'>:</td><td><input type='text' length='100'  maxlength='30' name='alamat1' /></td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td> <input type='text' length='100'  maxlength='30' name='alamat2' /></td></tr>
    <tr><td>&nbsp;</td><td>&nbsp;</td><td> <input type='text' length='100'  maxlength='30' name='alamat3' /></td></tr>
    </td></tr>
    <tr><td>Poskod</td><td align='right'>:</td><td><input type='text' length='100'  maxlength='30' name='Poskod' /></td></tr>
    <tr><td>Negeri</td><td align='right'>:</td><td><?php 
	//echo form_dropdown( 'List Negeri',$negeri_list);
	echo form_dropdown($name = 'Negeri',$negeri_list);
	?></td></tr>
    <tr><td>No Telefon</td><td align='right'>:</td><td><input type='text' length='100'  maxlength='30' name='noTel' /></td></tr>    
    </table>
    <input type="submit" value="Tambah" />
    
    
    </td></tr>
    </table>
    
    </td></tr>
    <tr><td bgcolor='#FFFF99'>&nbsp;</td></tr>
    <tr><td bgcolor='#FFFF99'>Footer here</td></tr></table>
    
</body></html>