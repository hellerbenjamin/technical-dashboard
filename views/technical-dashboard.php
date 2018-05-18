<h1>Technical Dashboard</h1>


<h3>Core Info</h3>
<ul>
    <li><strong>Uname: </strong><?php echo php_uname(); ?></li>
    <li><strong>PHP Version: </strong><?php echo phpversion(); ?>></li>
    <li><strong>Interface: </strong><?php echo php_sapi_name(); ?></li>
</ul>

<h3>Usage</h3>
<ul>
    <li><strong>Memory Usage: </strong><?php echo memory_get_usage(); ?></li>
    <li><strong>Peak Memory Usage: </strong><?php echo memory_get_peak_usage(); ?></li>
</ul>

<?php if ( is_array( $opcache ) ) : ?>
<h3>OPCache</h3>
<ul>
    <li><strong>Enabled: </strong></li><?php echo $opcache['opcache_enabled']; ?>
    <li><strong>Used Memory: </strong></li><?php echo $opcache['memory_usage']['used_memory']; ?>
    <li><strong>Free Memory: </strong><?php echo $opcache['memory_usage']['free_memory']; ?></li>
    <li><strong>Number of cached scripts: </strong></li><?php echo $opcache['opcache_statistics']['num_cached_scripts']; ?>
    <li><strong>Number of cached keys: </strong></li><?php echo $opcache['opcache_statistics']['num_cached_keys']; ?>
    <li><strong>Max Cached Keys: </strong></li><?php echo $opcache['opcache_statistics']['max_cached_keys']; ?>
    <li><strong>Hit Rate: </strong></li><?php echo $opcache['opcache_statistics']['opcache_hit_rate']; ?>


    <h4>Heaviest Scripts</h4>
    <?php var_dump( max(array_column( $opcache['scripts'], 'memory_consumption') ) ); ?>


</ul>
<?php endif; ?>

<?php if ( $extensions !== false ) : ?>
    <h3>Extensions</h3>
    <ul>
		<?php foreach ( $extensions as $extension ) : ?>
            <li><?php echo $extension; ?></li>
		<?php endforeach; ?>
    </ul>
<?php endif; ?>