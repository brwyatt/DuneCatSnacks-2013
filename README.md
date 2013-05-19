DuneCat's Snacks (2013) Website [![Build Status](https://jenkins.brwyatt.net/job/DuneCatSnacks-2013/badge/icon)](https://jenkins.brwyatt.net/job/DuneCatSnacks-2013/)
===========================
Website code for [dunecatsnacks.brwyatt.net](http://dunecatsnacks.brwyatt.net/ "Dune Cat's Snacks - 2013")

Database Config
---------------
The database configuration file ( protected/config/database.php ) must be provided separately, as it contains username and password information. It should return a connection array, and look something like this:

<pre>
&lt;?php
return array(
			'connectionString' =&gt; 'mysql:host=HOSTNAME;dbname=DB_NAME',
			'emulatePrepare' =&gt; true,
			'username' =&gt; 'USERNAME',
			'password' =&gt; 'PASSWORD',
			'charset' =&gt; 'utf8',
			'tablePrefix' =&gt; 'tbl_',
		);
?&gt;
</pre>
