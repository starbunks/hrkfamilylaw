<?php
/**
 * Theme's Footer
 *
 *
 * @file           footer.php
 * @package        WordPress 
 * @subpackage     Shell 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/shell-lite/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
    </div><!-- end of #wrapper -->
    <?php shell_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php shell_container_end(); // after container hook ?>

<div id="footer">
    <div id="footer-wrapper">
        <div class="grid col-300 copyright">
            <?php esc_attr_e('&copy;', 'shell'); ?> <?php _e(date('Y')); ?><a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div><!-- end of .copyright -->
        
    </div><!-- end #footer-wrapper -->
</div><!-- end #footer -->

<?php wp_footer(); ?>
</body>
</html>
