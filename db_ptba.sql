/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.5-10.1.21-MariaDB : Database - db_ptba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ptba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ptba`;

/*Table structure for table `rcd1` */

DROP TABLE IF EXISTS `rcd1`;

CREATE TABLE `rcd1` (
  `tgl` varchar(20) NOT NULL,
  `muat_shiftgroup` varchar(10) NOT NULL,
  `muat_namakapal` varchar(100) NOT NULL,
  `muat_waktu_tiba` varchar(10) NOT NULL,
  `muat_waktu_mulai` varchar(10) NOT NULL,
  `muat_waktu_selesai` varchar(10) NOT NULL,
  `muat_jam` varchar(10) NOT NULL,
  `muat_menit` int(11) NOT NULL,
  `muat_sop` varchar(10) NOT NULL,
  `muat_dev` varchar(10) NOT NULL,
  `muat_jenisbb` varchar(10) NOT NULL,
  `muat_bpass` varchar(10) NOT NULL,
  `muat_sp1` int(11) NOT NULL,
  `muat_ad1` int(11) NOT NULL,
  `muat_ad2` int(11) NOT NULL,
  `muat_ad3` int(11) NOT NULL,
  `muat_ad4` int(11) NOT NULL,
  `muat_al1` int(11) NOT NULL,
  `muat_al2` int(11) NOT NULL,
  `muat_al3` int(11) NOT NULL,
  `muat_al4` int(11) NOT NULL,
  `muat_v0` int(11) NOT NULL,
  `muat_v1` int(11) NOT NULL,
  `muat_v2` int(11) NOT NULL,
  `muat_v3` int(11) NOT NULL,
  `muat_v4` int(11) NOT NULL,
  `muat_v5` int(11) NOT NULL,
  `muat_v6` int(11) NOT NULL,
  `muat_cy1` int(11) NOT NULL,
  `muat_cy2` int(11) NOT NULL,
  `muat_cy3` int(11) NOT NULL,
  `muat_cy4` int(11) NOT NULL,
  `muat_cy5` int(11) NOT NULL,
  `muat_jumlah` int(11) NOT NULL,
  `rawatan_luar_operasi_lptba_pln` int(11) NOT NULL,
  `rawatan_luar_operasi_lptba_ptkai` int(11) NOT NULL,
  `rawatan_luar_operasi_lptba_sys` int(11) NOT NULL,
  `rawatan_luar_operasi_ptba_mek` int(11) NOT NULL,
  `rawatan_luar_operasi_ptba_lis` int(11) NOT NULL,
  `rawatan_luar_operasi_ptba_ops` int(11) NOT NULL,
  `rawatan_luar_operasi_jum` int(11) NOT NULL,
  `hambatan_operasi_lptba_ptkai` int(11) NOT NULL,
  `hambatan_operasi_lptba_pln` int(11) NOT NULL,
  `hambatan_operasi_lptba_kapal` int(11) NOT NULL,
  `hambatan_operasi_lptba_sys` int(11) NOT NULL,
  `hambatan_operasi_sekunder_mek` int(11) NOT NULL,
  `hambatan_operasi_sekunder_lis` int(11) NOT NULL,
  `hambatan_operasi_sekunder_ops` int(11) NOT NULL,
  `hambatan_operasi_primer_mek` int(11) NOT NULL,
  `hambatan_operasi_primer_lis` int(11) NOT NULL,
  `hambatan_operasi_primer_ops` int(11) NOT NULL,
  `hambatan_operasi_jum` int(11) NOT NULL,
  `hambatan_operasi_durasi_waktu_mulai` varchar(10) NOT NULL,
  `hambatan_operasi_durasi_waktu_selesai` varchar(10) NOT NULL,
  `hambatan_operasi_durasi_jam` varchar(10) NOT NULL,
  `hambatan_operasi_keterangan` varchar(300) NOT NULL,
  `standby_waktu` varchar(11) NOT NULL,
  `standby_jam` varchar(10) NOT NULL,
  `standby_menit` int(11) NOT NULL,
  `koding` int(11) NOT NULL,
  PRIMARY KEY (`tgl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rcd1` */

insert  into `rcd1`(`tgl`,`muat_shiftgroup`,`muat_namakapal`,`muat_waktu_tiba`,`muat_waktu_mulai`,`muat_waktu_selesai`,`muat_jam`,`muat_menit`,`muat_sop`,`muat_dev`,`muat_jenisbb`,`muat_bpass`,`muat_sp1`,`muat_ad1`,`muat_ad2`,`muat_ad3`,`muat_ad4`,`muat_al1`,`muat_al2`,`muat_al3`,`muat_al4`,`muat_v0`,`muat_v1`,`muat_v2`,`muat_v3`,`muat_v4`,`muat_v5`,`muat_v6`,`muat_cy1`,`muat_cy2`,`muat_cy3`,`muat_cy4`,`muat_cy5`,`muat_jumlah`,`rawatan_luar_operasi_lptba_pln`,`rawatan_luar_operasi_lptba_ptkai`,`rawatan_luar_operasi_lptba_sys`,`rawatan_luar_operasi_ptba_mek`,`rawatan_luar_operasi_ptba_lis`,`rawatan_luar_operasi_ptba_ops`,`rawatan_luar_operasi_jum`,`hambatan_operasi_lptba_ptkai`,`hambatan_operasi_lptba_pln`,`hambatan_operasi_lptba_kapal`,`hambatan_operasi_lptba_sys`,`hambatan_operasi_sekunder_mek`,`hambatan_operasi_sekunder_lis`,`hambatan_operasi_sekunder_ops`,`hambatan_operasi_primer_mek`,`hambatan_operasi_primer_lis`,`hambatan_operasi_primer_ops`,`hambatan_operasi_jum`,`hambatan_operasi_durasi_waktu_mulai`,`hambatan_operasi_durasi_waktu_selesai`,`hambatan_operasi_durasi_jam`,`hambatan_operasi_keterangan`,`standby_waktu`,`standby_jam`,`standby_menit`,`koding`) values ('26 April 2017','D Josep','SPB Premium Bahari PLTU Pel. Ratu','','23.00','02.30','03.30',210,'','','AL 50','',3394,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,3394,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,'','','','','0','',0,0);

/*Table structure for table `rcd11` */

DROP TABLE IF EXISTS `rcd11`;

CREATE TABLE `rcd11` (
  `tgl` varchar(10) NOT NULL,
  `group` varchar(20) NOT NULL,
  `penerimaan_ka` varchar(30) NOT NULL,
  `penerimaan_jlh` int(11) NOT NULL,
  `penerimaan_stn` varchar(10) NOT NULL,
  `penerimaan_rcd` varchar(10) NOT NULL,
  `pembongkaran_waktu_mulai` varchar(10) NOT NULL,
  `pembongkaran_waktu_selesai` varchar(10) NOT NULL,
  `pembongkaran_jam` varchar(10) NOT NULL,
  `pembongkaran_menit` int(11) NOT NULL,
  `pembongkaran_sop` int(11) NOT NULL,
  `pembongkaran_dev` int(11) NOT NULL,
  `jenisbb` varchar(20) NOT NULL,
  `bp` int(11) NOT NULL,
  `sp_1` int(11) NOT NULL,
  `ad1` int(11) NOT NULL,
  `ad2` int(11) NOT NULL,
  `ad3` int(11) NOT NULL,
  `ad4` int(11) NOT NULL,
  `al1` int(11) NOT NULL,
  `al2` int(11) NOT NULL,
  `al3` int(11) NOT NULL,
  `al4` int(11) NOT NULL,
  `v1` int(11) NOT NULL,
  `v2` int(11) NOT NULL,
  `v3` int(11) NOT NULL,
  `v4` int(11) NOT NULL,
  `v5` int(11) NOT NULL,
  `v6` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `rawatan_lptba_pln` int(11) NOT NULL,
  `rawatan_lptba_ptkai` int(11) NOT NULL,
  `rawatan_lptba_sys` int(11) NOT NULL,
  `rawatan_ptba_mek` int(11) NOT NULL,
  `rawatan_ptba_lis` int(11) NOT NULL,
  `rawatan_ptba_ops` int(11) NOT NULL,
  `rawatan_ptba_jum` int(11) NOT NULL,
  `hambatan_operasi_lptba_` int(11) NOT NULL,
  `hambatan_operasi_lptba_kpl` int(11) NOT NULL,
  `hambatan_operasi_lptba_pln` int(11) NOT NULL,
  `hambatan_operasi_lptba_ptka` int(11) NOT NULL,
  `hambatan_operasi_lptba_sys` int(11) NOT NULL,
  `hambatan_operasi_sekunder_mek` int(11) NOT NULL,
  `hambatan_operasi_sekunder_lis` int(11) NOT NULL,
  `hambatan_operasi_sekunder_ops` int(11) NOT NULL,
  `hambatan_operasi_primer_mek` int(11) NOT NULL,
  `hambatan_operasi_primer_lis` int(11) NOT NULL,
  `hambatan_operasi_primer_ops` int(11) NOT NULL,
  `hambatan_operasi_jum` int(11) NOT NULL,
  `hambatan_operasi_durasi_waktu_mulai` varchar(10) NOT NULL,
  `hambatan_operasi_durasi_waktu_selesai` varchar(10) NOT NULL,
  `hambatan_operasi_durasi_jam` varchar(10) NOT NULL,
  `hambatan_operasi_keterangan` varchar(300) NOT NULL,
  `standby_waktu_mulai` varchar(10) NOT NULL,
  `standby_waktu_selesai` varchar(10) NOT NULL,
  `standby_jam` varchar(10) NOT NULL,
  `standby_menit` int(11) NOT NULL,
  `koding` varchar(20) NOT NULL,
  `jam_kel_rcd` varchar(10) NOT NULL,
  PRIMARY KEY (`tgl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rcd11` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
