# wp_base

<ol>
	<li>Sequel Pro DB Install (root / root)</li>
		<ul>
			<li>
				<a href="https://sequelpro.com/docs/get-started/get-connected/mamp" target="_blank">Connection Help &rarr;</a>
			</li>
		</ul>
	<li>Modify wp-config-sample.php</li>
		<ul>
			<li>Database Name / User / Pass</li>
			<li>Table Prefix</li>
			<li>Unique Phrase: <a href="https://api.wordpress.org/secret-key/1.1/salt/" target="_blank">generated here &rarr;</a></li>
		</ul>
	<li>Rename wp-config-sample.php to wp-config.php</li>
	<li>WP Install</li>
	<li>Check for WP update</li>
		<ul>
			<li>Dashboard > Updates</li>
		</ul>
	<li>Activate Theme</li>
	<li>Go to Settings > General and make appropriate changes</li>
	<li>Go to Settings > Permalinks and change to Post Name</li>
	<li>Go to Users > Your Profile and uncheck Show Toolbar option</li>
	<li>Go to a post, select Screen Options, and check Custom Fields</li>
	<li>Change title and description in style.scss</li>
</ol>