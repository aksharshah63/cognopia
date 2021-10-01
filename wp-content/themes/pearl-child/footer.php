                </div> <!--.container-->
            </div> <!-- .site-content -->
        </div> <!-- id wrapper closed-->

        <?php
            //Pre footer settings

            //Global settings
            $page_pre_footer_box = pearl_get_option('page_pre_footer_box');
            $stm_pre_footer_global = pearl_get_option('page_pre_footer');
            //Page settings
            $id = get_the_ID();
            $stm_pre_footer_custom = get_post_meta($id, 'stm_pre_footer', true);
        ?>
        <?php if( $page_pre_footer_box == 'true' ): ?>
            <div class="pre_footer">
                <?php if( empty ($stm_pre_footer_custom) ): ?>
                   <?php pearl_sidebar(false, $stm_pre_footer_global); ?>
                <?php else: ?>
                    <?php pearl_sidebar(false, $stm_pre_footer_custom); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php get_template_part('partials/footer/player'); ?>
        <div class="stm-footer">
			<?php get_template_part('partials/footer/main'); ?>
        </div>

        <?php
        get_template_part('partials/modals/main');
        get_template_part('partials/footer/ga');
        get_template_part('partials/footer/scroll_top');
        get_template_part('partials/modals/product_view');
        do_action('pearl_before_footer');
        wp_footer(); ?>
        <!-- <div data-tf-chat data-tf-tooltip="Hey 👋&nbsp;&nbsp;How can I help you? " data-tf-notification-days="7" data-tf-open="scroll" data-tf-open-value="30" data-tf-popover="U3V0M6Ew" data-tf-button-color="#B93128"></div> -->
        <div data-tf-chat data-tf-tooltip="Hey 👋&nbsp;&nbsp;How can I help you? " data-tf-notification-days="7" data-tf-open-value="30" data-tf-popover="U3V0M6Ew" data-tf-button-color="#B93128"></div>
        <script src="//embed.typeform.com/next/embed.js"></script>
        <script>
                jQuery(document).ready(function(){
                    jQuery("select#cat").change(function(){
                        var cat1 = jQuery(this).children("option:selected").val();
                        var ajax_url = '<?= get_site_url()?>/wp-admin/admin-ajax.php';

                        jQuery.ajax({
                                type: 'POST',
                                url: ajax_url,
                                data: {
                                    action:'get_post1',post_cat1:cat1
                                },
                                success: function(response){
                                    jQuery(".grid").html(response);
                                }
                            });
                    });
                });// jquery for category wise post display

                jQuery(document).ready(function() {
                    jQuery(".name").attr("placeholder", "Name*");  
                    jQuery(".email").attr("placeholder", "Email*");  
                    jQuery(".how-can-we-help-you").attr("placeholder", "how can we help you?");  
                });// jquery for placeholder display

                jQuery('.download a').on('click', function () {
                    jQuery.ajax({
                        url: '<?= get_site_url()?>/wp-content/uploads/2021/07/Cognopia Data Governance Training 2021.pdf',
                        method: 'GET',
                        xhrFields: {
                            responseType: 'blob'
                        },
                        success: function (data) {
                            var a = document.createElement('a');
                            var url = window.URL.createObjectURL(data);
                            a.href = url;
                            a.download = 'Cognopia Data Governance Training 2021.pdf';
                            document.body.append(a);
                            a.click();
                            a.remove();
                            window.URL.revokeObjectURL(url);
                        }
                    });
                });// jquery for download file

                jQuery(window).scroll(function(){
                    if(jQuery(document).scrollTop()>=jQuery(document).height()/5)
                    {
                        if (jQuery.cookie('hide-after-click')) {
                            // Apply rule you want to apply
                            jQuery('#spopup').css("display", "none");
                            // jQuery.cookie('hide-after-click', 'yes', { expires: 1 });
                        }
                        else
                        {
                            jQuery("#spopup").show("slow");
                        }
                    }
                    else
                    {
                        jQuery("#spopup").hide("slow");
                    }
                    
                });
                function closeSPopup(){
                    jQuery.cookie('hide-after-click', 'yes');
                    jQuery('#spopup').hide('slow');
                    if (jQuery.cookie('hide-after-click')) {
                            // Apply rule you want to apply
                            jQuery('#spopup').css("display", "none");
                    }
                    jQuery.cookie('hide-after-click', 'yes', { expires: 1 });
                }// jquery for when page is scroller popup and set cookie


            //     jQuery(".sidebar-cta-expand").click(function(){
            //             jQuery(".sidebar").css("display", "block");
            //             jQuery(".sidebar--half").css("display", "none");
            //         });

            //    jQuery(".sidebar-collapse").click(function(){
            //         jQuery(".sidebar").css("display", "none");
            //         jQuery(".sidebar--half").css("display", "block");
            //         jQuery(".sidebar--half").css("float", "float");
            //         jQuery(".sidebar--half").css("max-width", "50%");
            //         jQuery(".sidebar--half").css("margin-right", "15px");
            //   });// jquery for when click on button div block and none

            jQuery(document).ready(function(){
                jQuery(".sidebar-cta-expand").click(function(){
                    jQuery(".sidebar").slideDown();
                    jQuery(".sidebar--half").slideUp();
                    jQuery(".sidebar").css({"background":"#1f6088","padding" : "20px"});
                    // jQuery(".sidebar h3").css("color", "white");
                    jQuery(".sidebar p").css("color", "white");
                    jQuery(".sidebar h4").css("color", "white");
                    jQuery(".sidebar h5").css("color", "white");
                });

                jQuery(".sidebar-collapse").click(function(){
                    jQuery(".sidebar").slideUp();
                    jQuery(".sidebar--half").slideDown();
                    
                    jQuery(".sidebar--half").css("float", "float");
                    jQuery(".sidebar--half").css("max-width", "50%");
                    jQuery(".sidebar--half").css("margin-right", "15px");
                });
            });// jquery for when click on button section slideup and slidedown
        
            jQuery(document).ready(function() {
                jQuery("#hsForm_07271603-ada3-4d47-9861-a00466081a42").validate({
                    rules: {
                        email: "required"
                    },
                })

                jQuery('.hubspot_submit_btn').click(function() {
                    // e.preventDefault();
                    let result = jQuery("#hsForm_07271603-ada3-4d47-9861-a00466081a42").valid();
                    if(result==false)
                    {
                        jQuery("#hbspt-form-1626424623440-3531415882").css("display","block");
                        jQuery("#email-07271603-ada3-4d47-9861-a00466081a42-error").css("display","block");
                    }
                    else
                    {
                        jQuery("#hbspt-form-1626424623440-3531415882").css("display","none");
                        jQuery("#hbspt-form-1626348658378-8970755093").css("display","block");
                        jQuery('.subscribe-heading').html("Excellent! You're on the list");
                    }
                });
             });// jquery for form validation

             jQuery(document).ready(function() {
                jQuery("#hsForm_07271603-ada3-4d47-9861-a00466081a43").validate({
                    rules: {
                        email: "required"
                    },
                })

                jQuery('.hubspot_submit_btn1').click(function() {
                   
                    // e.preventDefault();
                    let result1 = jQuery("#hsForm_07271603-ada3-4d47-9861-a00466081a43").valid();
                    if(result1==false)
                    {
                        jQuery("#hbspt-form-1626495402080-2155898884").css("display","block");
                        jQuery("#email-07271603-ada3-4d47-9861-a00466081a43-error").css("display","block");
                    }
                    else
                    {   
                        jQuery("#hbspt-form-1626495402080-2155898884").css("display","none");
                        jQuery("#hbspt-form-1626348658378-8970755091").css("display","block");
                    }
                });
             });// jquery for form validation

        </script>
    </body>
</html>