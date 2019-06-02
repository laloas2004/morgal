<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Business_One_Page
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script src="https://kit.fontawesome.com/f7a59e2354.js"></script>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div id="page" class="site">
    <?php if( is_front_page() ) echo '<div id="home">'; ?>
        <div class="mobile-site-header" id="mobile-masthead" itemscope itemtype="http://schema.org/WPHeader">
            <div class="container">
                <div class="mobile-site-branding" itemscope itemtype="http://schema.org/Organization">
                    <?php
                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
                            the_custom_logo();
                        }
                    ?>
                </div> <!-- .mobile-site-branding -->
                <div class="mobile-menu-opener">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="mobile-menu">
                    <?php 
                    $enabled_sections = business_one_page_get_sections();
                    $home_link_label  = get_theme_mod( 'business_one_page_home_link_label', __( 'Home', 'business-one-page' ) );
                    $ed_section_menu  = get_theme_mod( 'business_one_page_ed_secion_menu' );
                    
                    if( $enabled_sections && ( 'page' == get_option( 'show_on_front' ) ) && ( $ed_section_menu != 1 ) ){ 
                ?>
                    <nav id="mobile-site-navigation" class="mobile-main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <ul>
                        <?php 
                            if( ! get_theme_mod( 'business_one_page_ed_home_link' ) ){
                                
                                if( is_front_page() ){ ?>
                                    <li class = "<?php echo esc_attr( 'current-menu-item', 'business-one-page' ); ?>"><a href="<?php echo esc_url( home_url( '#home' ) ); ?>"><?php echo esc_html( $home_link_label ); ?></a></li>
                                
                                <?php }else{ ?>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $home_link_label ); ?></a></li>
                        <?php   }
                            }
                            foreach( $enabled_sections as $section ){ 
                                if( $section['menu_text'] ){
                        ?>
                                <li><a href="<?php echo esc_url( home_url( '#' . esc_attr( $section['id'] ) ) ); ?>"><?php echo esc_html( $section['menu_text'] );?></a></li>                        
                        <?php 
                                } 
                            }
                        ?>
                        </ul>
                    </nav>
                <?php }else{ ?>
                    <nav id="mobile-site-navigation" class="mobile-main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                <?php } ?>
                </div>
            </div> <!-- .container -->
        </div> <!-- .mobile-site-header -->

        <header id="masthead" class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            
            <div class="container">
                <div class="site-branding" itemscope itemtype="http://schema.org/Organization">
                    
                    <?php 
                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                            the_custom_logo();
                        } 
                    ?>

                </div><!-- .site-branding -->
                
                <?php 
                    $enabled_sections = business_one_page_get_sections();
                    $home_link_label  = get_theme_mod( 'business_one_page_home_link_label', __( 'Home', 'business-one-page' ) );
                    $ed_section_menu  = get_theme_mod( 'business_one_page_ed_secion_menu' );
                    
                    if( $enabled_sections && ( 'page' == get_option( 'show_on_front' ) ) && ( $ed_section_menu != 1 ) ){ 
                ?>
                    <nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <ul>
                        <?php 
                            if( ! get_theme_mod( 'business_one_page_ed_home_link' ) ){
                                
                                if( is_front_page() ){ ?>
                                    <li class = "<?php echo esc_attr( 'current-menu-item', 'business-one-page' ); ?>"><a href="<?php echo esc_url( home_url( '#home' ) ); ?>"><?php echo esc_html( $home_link_label ); ?></a></li>
                                
                                <?php }else{ ?>
                                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $home_link_label ); ?></a></li>
                        <?php   }
                            }
                            foreach( $enabled_sections as $section ){ 
                                if( $section['menu_text'] ){
                        ?>
                                <li><a href="<?php echo esc_url( home_url( '#' . esc_attr( $section['id'] ) ) ); ?>"><?php echo esc_html( $section['menu_text'] );?></a></li>                        
                        <?php 
                                } 
                            }
                        ?>
                        </ul>
                    </nav>
                <?php }else{ ?>
                    <nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
                    </nav><!-- #site-navigation -->
                <?php } ?>
                
            </div><!-- .container -->
            
        </header><!-- #masthead -->
        
        <?php 
            if( is_front_page() ){      

                $business_one_page_ed_slider = get_theme_mod( 'business_one_page_ed_slider' );

                if( $business_one_page_ed_slider ) do_action( 'business_one_page_slider' );
            } 
            
            if( is_front_page() ) echo '</div>'; ?><!-- #home -->    

    <?php $enabled_sections = business_one_page_get_sections();

    if( is_home() || ! $enabled_sections ||  ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){?>
        <div id="content" class="site-content">
            <div class="container">
                <div class="row">
    <?php } ?>
