<?php
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
/////// SISFOKOL_SD_v4.0_(NyurungBAN)                           ///////
/////// (Sistem Informasi Sekolah untuk SD)                     ///////
///////////////////////////////////////////////////////////////////////
/////// Dibuat oleh :                                           ///////
/////// Agus Muhajir, S.Kom                                     ///////
/////// URL 	:                                               ///////
///////     * http://sisfokol.wordpress.com/                    ///////
///////     * http://hajirodeon.wordpress.com/                  ///////
///////     * http://yahoogroup.com/groups/sisfokol/            ///////
///////     * http://yahoogroup.com/groups/linuxbiasawae/       ///////
/////// E-Mail	:                                               ///////
///////     * hajirodeon@yahoo.com                              ///////
///////     * hajirodeon@gmail.com                              ///////
/////// HP/SMS	: 081-829-88-54                                 ///////
///////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////


//nilai
$maine = "$sumber/psb/ppd/index.php";


//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<table bgcolor="#E4D6CC" width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td>';
//view //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<a href="'.$maine.'" title="Home" class="menuku"><strong>HOME</strong>&nbsp;&nbsp;</a> | ';
//home //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu1"><strong>SETTING</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu1" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/psb/ppd/s/pass.php" title="Ganti Password">Ganti Password</a>
</LI>
<LI>
<a href="'.$sumber.'/psb/ppd/s/reg.php" title="Set Data Diri...">Set Data Diri</a>
</LI>
</UL>';
//setting ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//ujian /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu2"><strong>UJIAN</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu2" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/psb/ppd/ujian/mapel.php" title="Ujian Mata Pelajaran">Ujian Mata Pelajaran</a>
</LI>
<LI>
<a href="'.$sumber.'/psb/ppd/ujian/wawancara.php" title="Ujian Wawancara">Ujian Wawancara</a>
</LI>
</UL>';
//ujian /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//laporan ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<A href="#" class="menuku" data-flexmenu="flexmenu3"><strong>LAPORAN</strong>&nbsp;&nbsp;</A> |
<UL id="flexmenu3" class="flexdropdownmenu">
<LI>
<a href="'.$sumber.'/psb/ppd/lap/daftar.php" title="Formulir Pendaftaran">Formulir Pendaftaran</a>
</LI>
<LI>
<a href="'.$sumber.'/psb/ppd/lap/nilai.php" title="Nilai - Nilai">Nilai - Nilai</a>
</LI>
</UL>';
//ujian /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





//logout ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo '</td>
<td width="10%" align="right">
<A href="'.$sumber.'/psb/ppd/logout.php" class="menuku" title="Logout / KELUAR"><strong>LogOut</strong></A>
</td>
</tr>
</table>';
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>