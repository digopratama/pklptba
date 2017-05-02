<?php
include "/connect/koneksi.php";
class shiploader1{
	private $tgl;
	private $muat_shiftgroup;
	private $muat_namakapal;
	private $muat_waktu_tiba;
	private $muat_waktu_mulai;
	private $muat_waktu_selesai;
	private $muat_jam;
	private $muat_menit;
	private $muat_sop;
	private $muat_dev;
	private $muat_jenisbb;
	private $muat_bpass;
	private $muat_sp1;
	private $muat_ad1;
	private $muat_ad2;
	private $muat_ad3;
	private $muat_ad4;
	private $muat_al1;
	private $muat_al2;
	private $muat_al3;
	private $muat_al4;
	private $muat_v0;
	private $muat_v1;
	private $muat_v2;
	private $muat_v3;
	private $muat_v4;
	private $muat_v5;
	private $muat_v6;
	private $muat_cy1;
	private $muat_cy2;
	private $muat_cy3;
	private $muat_cy4;
	private $muat_cy5;
	private $muat_jumlah;
	private $rawatan_luar_operasi_lptba_pln;
	private $rawatan_luar_operasi_lptba_ptkai;
	private $rawatan_luar_operasi_lptba_sys;
	private $rawatan_luar_operasi_ptba_mek;
	private $rawatan_luar_operasi_ptba_lis;
	private $rawatan_luar_operasi_ptba_ops;
	private $rawatan_luar_operasi_jum;
	private $hambatan_operasi_lptba_ptkai;
	private $hambatan_operasi_lptba_pln;
	private $hambatan_operasi_lptba_kapal;
	private $hambatan_operasi_lptba_sys;	
	private $hambatan_operasi_sekunder_mek;
	private $hambatan_operasi_sekunder_lis;
	private $hambatan_operasi_sekunder_ops;
	private $hambatan_operasi_primer_mek;
	private $hambatan_operasi_primer_lis;
	private $hambatan_operasi_primer_ops;
	private $hambatan_operasi_jum;
	private $hambatan_operasi_primer_waktu;
	private $hambatan_operasi_durasi_waktu_selesai;
	private $hambatan_operasi_durasi_waktu_mulai;
	private $hambatan_operasi_durasi_jam;
	private $hambatan_operasi_keterangan;
	private $standby_waktu;
	private $standby_jam;
	private $standby_menit;
	private $koding;
	function addShipl1($tgl,
	$muat_shiftgroup,
	$muat_namakapal,
	$muat_waktu_tiba,
	$muat_waktu_mulai,
	$muat_waktu_selesai,
	$muat_jam,
	$muat_menit,
	$muat_sop,
	$muat_dev,
	$muat_jenisbb,
	$muat_bpass,
	$muat_sp1,
	$muat_ad1,
	$muat_ad2,
	$muat_ad3,
	$muat_ad4,
	$muat_al1,
	$muat_al2,
	$muat_al3,
	$muat_al4,
	$muat_v0,
	$muat_v1,
	$muat_v2,
	$muat_v3,
	$muat_v4,
	$muat_v5,
	$muat_v6,
	$muat_cy1,
	$muat_cy2,
	$muat_cy3,
	$muat_cy4,
	$muat_cy5,
	$muat_jumlah,
	$rawatan_luar_operasi_lptba_pln,
	$rawatan_luar_operasi_lptba_ptkai,
	$rawatan_luar_operasi_lptba_sys,
	$rawatan_luar_operasi_ptba_mek,
	$rawatan_luar_operasi_ptba_lis,
	$rawatan_luar_operasi_ptba_ops,
	$rawatan_luar_operasi_jum,
	$hambatan_operasi_lptba_ptkai,
	$hambatan_operasi_lptba_pln,
	$hambatan_operasi_lptba_kapal,
	$hambatan_operasi_lptba_sys,
	$hambatan_operasi_sekunder_mek,
	$hambatan_operasi_sekunder_lis,
	$hambatan_operasi_sekunder_ops,
	$hambatan_operasi_primer_mek,
	$hambatan_operasi_primer_lis,
	$hambatan_operasi_primer_ops,
	$hambatan_operasi_jum,
	$hambatan_operasi_primer_waktu,
	$hambatan_operasi_durasi_waktu_mulai,
	$hambatan_operasi_durasi_waktu_selesai,
	$hambatan_operasi_durasi_jam,
	$hambatan_operasi_keterangan,
	$standby_waktu,
	$standby_jam,
	$standby_menit,
	$koding)
	{
		$sql=mysql_query("INSERT INTO rcd1 (
		tgl,
		muat_shiftgroup,
		muat_namakapal,
		muat_waktu_tiba,
		muat_waktu_mulai,
		muat_waktu_selesai,
		muat_jam,
		muat_menit,
		muat_sop,
		muat_dev,
		muat_jenisbb,
		muat_bpass,
		muat_sp1,
		muat_ad1,
		muat_ad2,
		muat_ad3,
		muat_ad4,
		muat_al1,
		muat_al2,
		muat_al3,
		muat_al4,
		muat_v0,
		muat_v1,
		muat_v2,
		muat_v3,
		muat_v4,
		muat_v5,
		muat_v6,
		muat_cy1,
		muat_cy2,
		muat_cy3,
		muat_cy4,
		muat_cy5,
		muat_jumlah,
		rawatan_luar_operasi_lptba_pln,
		rawatan_luar_operasi_lptba_ptkai,
		rawatan_luar_operasi_lptba_sys,
		rawatan_luar_operasi_ptba_mek,
		rawatan_luar_operasi_ptba_lis,
		rawatan_luar_operasi_ptba_ops,
		rawatan_luar_operasi_jum,
		hambatan_operasi_lptba_ptkai,
		hambatan_operasi_lptba_pln,
		hambatan_operasi_lptba_kapal,
		hambatan_operasi_lptba_sys,
		hambatan_operasi_sekunder_mek,
		hambatan_operasi_sekunder_lis,
		hambatan_operasi_sekunder_ops,
		hambatan_operasi_primer_mek,
		hambatan_operasi_primer_lis,
		hambatan_operasi_primer_ops,
		hambatan_operasi_jum,
		hambatan_operasi_primer_waktu,
		hambatan_operasi_durasi_waktu_selesai,
		hambatan_operasi_durasi_waktu_mulai,
		hambatan_operasi_durasi_jam,
		hambatan_operasi_keterangan,
		standby_waktu,
		standby_jam,
		standby_menit,
		koding) 
		VALUES 
		('$tgl',
		'$muat_shiftgroup',
		'$muat_namakapal',
		'$muat_waktu_tiba',
		'$muat_waktu_mulai',
		'$muat_waktu_selesai',
		'$muat_jam',
		'$muat_menit',
		'$muat_sop',
		'$muat_dev',
		'$muat_jenisbb',
		'$muat_bpass',
		'$muat_sp1',
		'$muat_ad1',
		'$muat_ad2',
		'$muat_ad3',
		'$muat_ad4',
		'$muat_al1',
		'$muat_al2',
		'$muat_al3',
		'$muat_al4',
		'$muat_v0',
		'$muat_v1',
		'$muat_v2',
		'$muat_v3',
		'$muat_v4',
		'$muat_v5',
		'$muat_v6',
		'$muat_cy1',
		'$muat_cy2',
		'$muat_cy3',
		'$muat_cy4',
		'$muat_cy5',
		'$muat_jumlah',
		'$rawatan_luar_operasi_lptba_pln',
		'$rawatan_luar_operasi_lptba_ptkai',
		'$rawatan_luar_operasi_lptba_sys',
		'$rawatan_luar_operasi_ptba_mek',
		'$rawatan_luar_operasi_ptba_lis',
		'$rawatan_luar_operasi_ptba_ops',
		'$rawatan_luar_operasi_jum',
		'$hambatan_operasi_lptba_ptkai',
		'$hambatan_operasi_lptba_pln',
		'$hambatan_operasi_lptba_kapal',
		'$hambatan_operasi_lptba_sys',
		'$hambatan_operasi_sekunder_mek',
		'$hambatan_operasi_sekunder_lis',
		'$hambatan_operasi_sekunder_ops',
		'$hambatan_operasi_primer_mek',
		'$hambatan_operasi_primer_lis',
		'$hambatan_operasi_primer_ops',
		'$hambatan_operasi_jum',
		'$hambatan_operasi_primer_waktu',
		'$hambatan_operasi_durasi_waktu_mulai',
		'$hambatan_operasi_durasi_waktu_selesai',
		'$hambatan_operasi_durasi_jam',
		'$hambatan_operasi_keterangan',
		'$standby_waktu','$standby_jam',
		'$standby_menit',
		'$koding')");
		if ($sql)
			{
				echo "Data Shiploader 1 Berhasil Ditambah Ke Database";	
			}
		else
			{
				echo "Data Shiploader 1 Gagal Ditambah Ke Database";
			}
	}
	function ViewShipl1(){
		$sql=mysql_query("SELECT * FROM rcd1");
?>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td rowspan="3">Tanggal</td>
    <td colspan="33">Muat</td>
    <td colspan="7">Rawatan Luar Operasi</td>
    <td colspan="15">Hambatan Dalam Pengoperasian</td>
    <td rowspan="2" colspan="3">Stand by</td>
    <td rowspan="3">Koding</td>
  </tr>
  <tr>
    <td rowspan="2">Shift Group</td>
    <td rowspan="2">Kapal</td>
    <td rowspan="2">Tiba</td>
    <td colspan="2">Waktu</td>
    <td rowspan="2">Jam</td>
    <td rowspan="2">Menit</td>
    <td rowspan="2">SOP</td>
    <td rowspan="2">DEV</td>
    <td rowspan="2">Jenis B.Bara</td>
    <td rowspan="2">B.Pass</td>
    <td rowspan="2">Stockpile I</td>
    <td colspan="8">Stockpile II</td>
    <td rowspan="2">V0</td>
    <td colspan="6">Stockpile III</td>
    <td colspan="5">Stockpile IV A</td>
    <td rowspan="2">Jumlah</td>
    <td colspan="3">LPTBA</td>
    <td colspan="3">PTBA</td>
    <td rowspan="2">Jumlah</td>
    <td colspan="4">Luar PTBA</td>
    <td colspan="3">Hal Sekunder PTBA</td>
    <td colspan="3">Hal Primer PTBA</td>
    <td rowspan="2">Jumlah</td>
    <td colspan="3">Durasi</td>
    <td rowspan="2">Keterangan</td>
  </tr>
  <tr>
    <td>Mulai</td>
    <td>Selesai</td>
    <td>AD1</td>
    <td>AD2</td>
    <td>AD3</td>
    <td>AD4</td>
    <td>AL1</td>
    <td>AL2</td>
    <td>AL3</td>
    <td>AL4</td>
    <td>V1</td>
    <td>V2</td>
    <td>V3</td>
    <td>V4</td>
    <td>V5</td>
    <td>V6</td>
    <td>CY1</td>
    <td>CY2</td>
    <td>CY3</td>
    <td>CY4</td>
    <td>CY5</td>
    <td>PLN/PLTU</td>
    <td>PTKAI</td>
    <td>SYS</td>
    <td>MEK</td>
    <td>LIS</td>
    <td>OPS</td>
    <td>PTKAI</td>
    <td>PLN/PLTU</td>
    <td>Kapal</td>
    <td>SYS</td>
    <td>MEK</td>
    <td>LIS</td>
    <td>OPS</td>
    <td>MEK</td>
    <td>LIS</td>
    <td>OPS</td>
    <td colspan="2">WAKTU</td>
    <td>JAM</td>
    <td>Waktu</td>
    <td>Jam</td>
    <td>Menit</td>
  </tr>
<?php
	while ($r=mysql_fetch_array($sql))
	{
?>
  <tr>
    <td><?php echo $r['tgl']; ?></td>
    <td><?php echo $r['muat_shiftgroup']; ?></td>
    <td><?php echo $r['muat_namakapal']; ?></td>
    <td><?php echo $r['muat_waktu_tiba']; ?></td>
    <td><?php echo $r['muat_waktu_mulai']; ?></td>
    <td><?php echo $r['muat_waktu_selesai']; ?></td>
    <td><?php echo $r['muat_jam']; ?></td>
    <td><?php echo $r['muat_menit']; ?></td>
    <td><?php echo $r['muat_sop']; ?></td>
    <td><?php echo $r['muat_dev']; ?></td>
    <td><?php echo $r['muat_jenisbb']; ?></td>
    <td><?php echo $r['muat_bpass']; ?></td>
    <td><?php echo $r['muat_sp1']; ?></td>
    <td><?php echo $r['muat_ad1']; ?></td>
    <td><?php echo $r['muat_ad2']; ?></td>
    <td><?php echo $r['muat_ad3']; ?></td>
    <td><?php echo $r['muat_ad4']; ?></td>
    <td><?php echo $r['muat_al1']; ?></td>
    <td><?php echo $r['muat_al2']; ?></td>
    <td><?php echo $r['muat_al3']; ?></td>
    <td><?php echo $r['muat_al4']; ?></td>
    <td><?php echo $r['muat_v0']; ?></td>
    <td><?php echo $r['muat_v1']; ?></td>
    <td><?php echo $r['muat_v2']; ?></td>
    <td><?php echo $r['muat_v3']; ?></td>
    <td><?php echo $r['muat_v4']; ?></td>
    <td><?php echo $r['muat_v5']; ?></td>
    <td><?php echo $r['muat_v6']; ?></td>
    <td><?php echo $r['muat_cy1']; ?></td>
    <td><?php echo $r['muat_cy2']; ?></td>
    <td><?php echo $r['muat_cy3']; ?></td>
    <td><?php echo $r['muat_cy4']; ?></td>
    <td><?php echo $r['muat_cy5']; ?></td>
    <td><?php echo $r['muat_jumlah']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_lptba_pln']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_lptba_ptkai']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_lptba_sys']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_ptba_mek']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_ptba_lis']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_ptba_ops']; ?></td>
    <td><?php echo $r['rawatan_luar_operasi_jum']; ?></td>
    <td><?php echo $r['hambatan_operasi_lptba_ptkai']; ?></td>
    <td><?php echo $r['hambatan_operasi_lptba_pln']; ?></td>
    <td><?php echo $r['hambatan_operasi_lptba_kapal']; ?></td>
    <td><?php echo $r['hambatan_operasi_lptba_sys']; ?></td>
    <td><?php echo $r['hambatan_operasi_sekunder_mek']; ?></td>
    <td><?php echo $r['hambatan_operasi_sekunder_lis']; ?></td>
    <td><?php echo $r['hambatan_operasi_sekunder_ops']; ?></td>
    <td><?php echo $r['hambatan_operasi_primer_mek']; ?></td>
    <td><?php echo $r['hambatan_operasi_primer_lis']; ?></td>
    <td><?php echo $r['hambatan_operasi_primer_ops']; ?></td>
    <td><?php echo $r['hambatan_operasi_jum']; ?></td>
    <td><?php echo $r['hambatan_operasi_durasi_waktu_mulai']; ?></td>
    <td><?php echo $r['hambatan_operasi_durasi_waktu_selesai']; ?></td>
    <td><?php echo $r['hambatan_operasi_durasi_jam']; ?></td>
    <td><?php echo $r['hambatan_operasi_keterangan']; ?></td>
    <td><?php echo $r['standby_waktu']; ?></td>
    <td><?php echo $r['standby_jam']; ?></td>
    <td><?php echo $r['standby_menit']; ?></td>
    <td><?php echo $r['koding']; ?></td>
  </tr>
<?php
	}
?>
</table>
<?php
	}
}
?>