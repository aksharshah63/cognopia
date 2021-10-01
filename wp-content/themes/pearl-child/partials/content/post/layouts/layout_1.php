<?php
$path = 'partials/content/post/single/';
$parts = 'partials/content/post/parts/';

if (pearl_check_string(pearl_get_option('post_title'))): ?>
	<h1 class="h2 text-transform"><?php the_title(); ?></h1>
<?php endif;

if (pearl_check_string(pearl_get_option('post_info'))) {
	get_template_part("{$parts}/postinfo", 1);
}

if (pearl_check_string(pearl_get_option('post_image')) and has_post_thumbnail()) {
	get_template_part("{$parts}/image");
} else { ?>
	<div class="stm_mgb_40"></div>
<?php } ?>

    <div class="post-content">
        <div class="stm_mgb_20 stm_single_post__content">
            <?php the_content(); ?>
        </div>

        <div id="spopup" style="display: none;">
            <div class="subscriber-form">
                <h3 class="subscribe-heading">Sign up for new Cognopia articles</h3>
                <p class="subscribe-desc">Never miss an insight, We'll email you when new articles are published on this topic. </p>
                <?php //echo do_shortcode('[hubspot type=form portal=6949624 id=07271603-ada3-4d47-9861-a00466081a42]'); ?>
                <style>
                    .popup_form {
                        width: 50% !important;
                        margin: 0 auto !important;
                    }
                    .popup_form .form_wrapper {
                        display: flex !important;
                        justify-content: space-between !important;
                        margin-bottom: 10px !important;
                    }
                    .popup_form .hs_email {
                        width: 70% !important;
                    }
                    .popup_form .hs_submit {
                        width: 25% !important;
                    }
                    form.popup_form input#email-07271603-ada3-4d47-9861-a00466081a42 {
                        font-family: 'Roboto';
                        padding: 10px !important;
                        background-color: #fff;
                        border-bottom: none !important;
                        border: 1px solid #A6A9AA!important;
                        border-radius: 5px;
                        color: #0C2534;
                        width: 100%;
                    }
                    .popup_form .stm_material_form {
                        padding: 0 !important;
                    }
                    .popup_form input.hs-button {
                        width: 100% !important;
                    }
                    .popup_form img.hubspot-link__icon {
                        width: 50px !important;
                    }

                    .popup_form input.hs-button {
                        background-color: #0C2534!important;
                        border-color: #0C2534!important;
                        color: #fff !important;
                        border-radius: 5px !important;
                        padding: 10px 20px !important;
                    }
                    .popup_form input.hs-button:hover {
                        background-color: #FFE808 !important;
                        color: white !important;
                        border-color: #FFE808 !important;
                    }
                    .popup_form .form_wrapper .error {
                        color: red;
                    }
                    @media screen and (max-width:768px) {
                        .popup_form {
                            width: 80% !important;
                        }
                    }
                    @media (max-width:550px) {
                        .cm_form, .popup_form {
                            width: 100% !important;
                        }
                        .popup_form input.hs-button {
                            padding: 10px 0 !important;
                        }
                    }

                </style>
   
                <div class="hbspt-form" id="hbspt-form-1626424623440-3531415882">
                    <form
                        novalidate=""
                        accept-charset="UTF-8"
                        action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/6949624/07271603-ada3-4d47-9861-a00466081a42"
                        enctype="multipart/form-data"
                        id="hsForm_07271603-ada3-4d47-9861-a00466081a42"
                        method="POST"
                        class="hs-form stacked hs-custom-style hs-form-private hsForm_07271603-ada3-4d47-9861-a00466081a42 hs-form-07271603-ada3-4d47-9861-a00466081a42 hs-form-07271603-ada3-4d47-9861-a00466081a42_186e9ad8-5557-45fe-b246-2ab9209d5e29 popup_form"
                        data-form-id="07271603-ada3-4d47-9861-a00466081a42"
                        data-portal-id="6949624"
                        target="target_iframe_07271603-ada3-4d47-9861-a00466081a42"
                        data-reactid=".hbspt-forms-0"
                    >
                        <div class="form_wrapper">
                            <div class="hs_email hs-email hs-fieldtype-text field hs-form-field" data-reactid=".hbspt-forms-0.1:$0">
                                <!-- <label id="label-email-07271603-ada3-4d47-9861-a00466081a42" class="" placeholder="Enter your Email" for="email-07271603-ada3-4d47-9861-a00466081a42" data-reactid=".hbspt-forms-0.1:$0.0">
                                    <span data-reactid=".hbspt-forms-0.1:$0.0.0">Email</span><span class="hs-form-required" data-reactid=".hbspt-forms-0.1:$0.0.1">*</span>
                                </label> -->
                                <legend class="hs-field-desc" style="display: none;" data-reactid=".hbspt-forms-0.1:$0.1"></legend>
                                <div class="input" data-reactid=".hbspt-forms-0.1:$0.$email">
                                    <input
                                        id="email-07271603-ada3-4d47-9861-a00466081a42"
                                        class="hs-input"
                                        type="email"
                                        name="email"
                                        required=""
                                        placeholder=""
                                        value=""
                                        autocomplete="email"
                                        data-reactid=".hbspt-forms-0.1:$0.$email.0"
                                        inputmode="email"
                                    />
                                    <label id="email-07271603-ada3-4d47-9861-a00466081a42-error" class="error" for="email-07271603-ada3-4d47-9861-a00466081a42" style="display:none";>This field is required.</label>
                                </div>
                            </div>
                            <noscript data-reactid=".hbspt-forms-0.2"></noscript>
                            <div class="hs_submit hs-submit" data-reactid=".hbspt-forms-0.5">
                                <div class="hs-field-desc" style="display: none;" data-reactid=".hbspt-forms-0.5.0"></div>
                                <div class="actions" data-reactid=".hbspt-forms-0.5.1"><input type="submit" value="Submit" class="hs-button primary large hubspot_submit_btn" data-reactid=".hbspt-forms-0.5.1.0" /></div>
                            </div>
                        </div>
                        <div class="hubspot-link__container sproket" data-reactid=".hbspt-forms-0.6">
                            <img src="https://js.hsforms.net/sproket.png" class="hubspot-link__icon" data-reactid=".hbspt-forms-0.6.0" />
                            <span data-reactid=".hbspt-forms-0.6.1"><span data-reactid=".hbspt-forms-0.6.1.0">Create your own</span><span data-reactid=".hbspt-forms-0.6.1.1"> </span></span>
                            <a
                                href="https://app.hubspot.com/signup/marketing?hubs_medium=virality&amp;hubs_campaign=hubspot-forms-virality&amp;hubs_id=forms-branding-control&amp;hubs_source=cognopia.com&amp;intent=marketingFreeForms&amp;opt_sidebar=forms&amp;viralSourcePortalId=6949624"
                                target="_blank"
                                class="hubspot-link"
                                data-reactid=".hbspt-forms-0.6.2"
                            >
                                <span class="hubspot-link-text" data-reactid=".hbspt-forms-0.6.2.0">free form with HubSpot</span>
                            </a>
                        </div>
                        <input
                            name="hs_context"
                            type="hidden"
                            value='{"rumScriptExecuteTime":3537,"rumServiceResponseTime":4305.199999999255,"rumFormRenderTime":4,"rumTotalRenderTime":144.19999999925494,"rumTotalRequestTime":598.1000000014901,"lang":"en","embedType":"REGULAR","embedAtTimestamp":"1626424623010","formDefinitionUpdatedAt":"1626264275294","pageUrl":"https://cognopia.com/v2/chief-data-officer/?fdf","pageTitle":"How to Win Big in the First 100 Days as a New CDO | Cognopia","source":"FormsNext-static","timestamp":1626424623013,"userAgent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36","originalEmbedContext":{"portalId":"6949624","formId":"07271603-ada3-4d47-9861-a00466081a42","target":"#hbspt-form-1626424623440-3531415882","shortcode":"wp","hutk":"5d2282ac0d37727926144c485f3aa30a","shellId":0,"shell":true,"pageUrl":"https://cognopia.com/v2/chief-data-officer/?fdf","pageTitle":"How to Win Big in the First 100 Days as a New CDO | Cognopia"},"urlParams":{},"formValidity":{"email":{"valid":true}},"formTarget":"#hbspt-form-1626424623440-3531415882","correlationId":"f5684ff7-4e17-4cb0-94c1-93eaec9045a5","contentType":"blog-post","hutk":"5d2282ac0d37727926144c485f3aa30a","useRecaptchaEnterprise":true}'
                            data-reactid=".hbspt-forms-0.7"
                        />
                        <iframe name="target_iframe_07271603-ada3-4d47-9861-a00466081a42" style="display: none;" data-reactid=".hbspt-forms-0.8"></iframe>
                    </form>
                </div>
    

                <div class="hbspt-form" id="hbspt-form-1626348658378-8970755093" style="display:none;">
                    <div class="submitted-message hs-main-font-element hs-form-07271603-ada3-4d47-9861-a00466081a42 hs-form-07271603-ada3-4d47-9861-a00466081a42_b2babf9e-ee0a-475e-89f2-b81bef9ed17d" data-reactid=".hbspt-forms-0">
                        <p>Thanks for submitting the form.</p>
                    </div>
                </div>

            </div>
        
            <a style="position:absolute;top:14px;right:10px;color:#555;font-size:10px;font-weight:bold;" href="javascript:void(0);" onclick="return closeSPopup();">
              
                <img src="<?= get_site_url()?>/wp-content/uploads/2021/07/download.png" width="18" height="18"/>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php pearl_wp_link_pages(); ?>

<?php get_template_part("{$path}/panel");

if (pearl_check_string(pearl_get_option('post_author'))) {
	get_template_part("{$path}/author");
}

if (pearl_check_string(pearl_get_option('post_comments'))) {
	get_template_part("{$parts}/comments");
}
?>

<script>
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
</script>