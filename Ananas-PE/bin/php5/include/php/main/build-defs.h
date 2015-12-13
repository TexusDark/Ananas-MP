/*                                                                -*- C -*-
   +----------------------------------------------------------------------+
   | PHP Version 5                                                        |
   +----------------------------------------------------------------------+
   | Copyright (c) 1997-2007 The PHP Group                                |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
   | Author: Stig S�ther Bakken <ssb@php.net>                             |
   +----------------------------------------------------------------------+
*/

/* $Id$ */

#define CONFIGURE_COMMAND " './configure'  '--enable-inline-optimization' '--prefix=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--exec-prefix=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-curl=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-zlib=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-zlib-dir=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-yaml=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-mcrypt=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-gmp=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-png-dir=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--with-gd' '--without-ncurses' '--without-readline' '--with-leveldb=/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5' '--enable-mbstring' '--enable-calendar' '--enable-weakref' '--enable-pthreads' '--disable-fileinfo' '--disable-libxml' '--disable-xml' '--disable-dom' '--disable-simplexml' '--disable-xmlreader' '--disable-xmlwriter' '--disable-cgi' '--disable-session' '--disable-debug' '--disable-pdo' '--without-pear' '--without-iconv' '--without-pdo-sqlite' '--with-pic' '--enable-phar' '--enable-ctype' '--enable-sockets' '--enable-shared=no' '--enable-static=yes' '--enable-shmop' '--enable-maintainer-zts' '--disable-short-tags' '--enable-zend-signals' '--enable-pcntl' '--enable-embedded-mysqli' '--enable-mysqlnd' '--with-mysqli=mysqlnd' '--enable-bcmath' '--enable-cli' '--enable-zip' '--enable-ftp' '--with-zend-vm=GOTO' '--enable-opcache=no' 'CC=gcc' 'CFLAGS=-O2 '-fPIC' '-march=i686' '-mtune=pentium4' '-fno-gcse' '-O2' '-DSQLITE_HAVE_ISNAN' '-fno-math-errno' '-funsafe-math-optimizations' '-fno-signed-zeros' '-fno-trapping-math' '-ffinite-math-only' '-fno-rounding-math' '-fno-signaling-nans' '-ftree-vectorize' '-fomit-frame-pointer' '-funswitch-loops' '-fivopts' '-funsafe-loop-optimizations' '-fpredictive-commoning' '-ftracer' '-ftree-loop-im' '-frename-registers' '-fcx-limited-range' '-m32' 'LDFLAGS=-Wl,-rpath='\''$$ORIGIN/../lib'\'' '-Wl,-rpath-link='\''$$ORIGIN/../lib'\''' 'CPPFLAGS=' 'CXX=g++' 'CXXFLAGS=-O2 '-fPIC' '-march=i686' '-mtune=pentium4' '-fno-gcse' '-O2' '-DSQLITE_HAVE_ISNAN' '-fno-math-errno' '-funsafe-math-optimizations' '-fno-signed-zeros' '-fno-trapping-math' '-ffinite-math-only' '-fno-rounding-math' '-fno-signaling-nans' '-ftree-vectorize' '-fomit-frame-pointer' '-funswitch-loops' '-fivopts' '-funsafe-loop-optimizations' '-fpredictive-commoning' '-ftracer' '-ftree-loop-im' '-frename-registers' '-fcx-limited-range' '-m32''"
#define PHP_ADA_INCLUDE		""
#define PHP_ADA_LFLAGS		""
#define PHP_ADA_LIBS		""
#define PHP_APACHE_INCLUDE	""
#define PHP_APACHE_TARGET	""
#define PHP_FHTTPD_INCLUDE      ""
#define PHP_FHTTPD_LIB          ""
#define PHP_FHTTPD_TARGET       ""
#define PHP_CFLAGS		"$(CFLAGS_CLEAN) -prefer-non-pic -static"
#define PHP_DBASE_LIB		""
#define PHP_BUILD_DEBUG		""
#define PHP_GDBM_INCLUDE	""
#define PHP_IBASE_INCLUDE	""
#define PHP_IBASE_LFLAGS	""
#define PHP_IBASE_LIBS		""
#define PHP_IFX_INCLUDE		""
#define PHP_IFX_LFLAGS		""
#define PHP_IFX_LIBS		""
#define PHP_INSTALL_IT		""
#define PHP_IODBC_INCLUDE	""
#define PHP_IODBC_LFLAGS	""
#define PHP_IODBC_LIBS		""
#define PHP_MSQL_INCLUDE	""
#define PHP_MSQL_LFLAGS		""
#define PHP_MSQL_LIBS		""
#define PHP_MYSQL_INCLUDE	""
#define PHP_MYSQL_LIBS		""
#define PHP_MYSQL_TYPE		""
#define PHP_ODBC_INCLUDE	""
#define PHP_ODBC_LFLAGS		""
#define PHP_ODBC_LIBS		""
#define PHP_ODBC_TYPE		""
#define PHP_OCI8_SHARED_LIBADD 	""
#define PHP_OCI8_DIR			""
#define PHP_OCI8_ORACLE_VERSION		""
#define PHP_ORACLE_SHARED_LIBADD 	"@ORACLE_SHARED_LIBADD@"
#define PHP_ORACLE_DIR				"@ORACLE_DIR@"
#define PHP_ORACLE_VERSION			"@ORACLE_VERSION@"
#define PHP_PGSQL_INCLUDE	""
#define PHP_PGSQL_LFLAGS	""
#define PHP_PGSQL_LIBS		""
#define PHP_PROG_SENDMAIL	""
#define PHP_SOLID_INCLUDE	""
#define PHP_SOLID_LIBS		""
#define PHP_EMPRESS_INCLUDE	""
#define PHP_EMPRESS_LIBS	""
#define PHP_SYBASE_INCLUDE	""
#define PHP_SYBASE_LFLAGS	""
#define PHP_SYBASE_LIBS		""
#define PHP_DBM_TYPE		""
#define PHP_DBM_LIB		""
#define PHP_LDAP_LFLAGS		""
#define PHP_LDAP_INCLUDE	""
#define PHP_LDAP_LIBS		""
#define PHP_BIRDSTEP_INCLUDE     ""
#define PHP_BIRDSTEP_LIBS        ""
#define PEAR_INSTALLDIR         ""
#define PHP_INCLUDE_PATH	".:"
#define PHP_EXTENSION_DIR       "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/lib/php/extensions/no-debug-zts-20131226"
#define PHP_PREFIX              "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5"
#define PHP_BINDIR              "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/bin"
#define PHP_SBINDIR             "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/sbin"
#define PHP_MANDIR              "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/php/man"
#define PHP_LIBDIR              "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/lib/php"
#define PHP_DATADIR             "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/share/php"
#define PHP_SYSCONFDIR          "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/etc"
#define PHP_LOCALSTATEDIR       "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/var"
#define PHP_CONFIG_FILE_PATH    "/var/lib/jenkins/jobs/PHP-PocketMine-Linux/workspace/compile/linux/32bit/bin/php5/lib"
#define PHP_CONFIG_FILE_SCAN_DIR    ""
#define PHP_SHLIB_SUFFIX        "so"
