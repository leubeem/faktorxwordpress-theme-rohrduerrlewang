<?php
$columns_content = array();
for ($i = 1; $i <= 4; $i++) {
    $column_content = get_theme_mod('fxwp_custom_section_column_' . $i, '');
    if (!empty($column_content)) {
        $columns_content[] = $column_content;
    }
}

if (!empty($columns_content)) :
    ?>
    <section class="pre-footer-section">
        <div class="flex container mx-auto py-6">
            <?php foreach ($columns_content as $content) : ?>
                <div class="whitespace-pre-line flex-1"><?php echo wp_kses_post($content); ?></div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>


<footer>
    <div class="container mx-auto py-6">
        <nav class="footer-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'container' => false,
            ));
            ?>
        </nav>
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
