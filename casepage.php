<script type="text/javascript">
    var storageUrl = 'https://ilmatieteenlaitos.blob.core.windows.net/fieldobservatory2021-03-19/data';
    var storageUrl2 = 'https://field-observatory.data.lit.fmi.fi';
    var demoStorageUrl = 'https://field-observatory-demo.data.lit.fmi.fi';
    v.fieldobservatoryLanguage = "<?php echo explode("_", get_locale())[0]?>" // fi -> fi, sv_SE -> sv, en_US -> en
    v.fieldobservatoryLanguage = "fi" // Override language
    var fieldobservatoryImagesUrl = "<?php echo get_template_directory_uri(); ?>/assets/images";
    var fieldobservatoryJSUrl = "<?php echo get_template_directory_uri(); ?>/assets/js";
    v.mapEnabled = false;
    v.chartEnabled = {
        "carbonStorage": true
    };
    v.chartContainerElementId = "chart_container";
    v.creditContainerElementId = undefined;
    v.zoomLevel = 11;
    v.manageSiteLinkEnabled = false;
</script>

<div id="loader-wrapper">
        <div id="PopUpMsg" class="popuptext"></div>
        <div id="loader"></div>
</div>
<div id="tooltip" role="tooltip" class="tooltip_hidden"></div>
<?php $version = wp_get_theme()->version; ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewFirstDOM.js?ver=<?php echo $version ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/charts.js?ver=<?php echo $version ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewAllSitesDOM.js?ver=<?php echo $version ?>"></script>
<script type="text/js-worker" id="fieldobservatory-MapViewSiteWorkerJs-js" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewSiteWorker.js?ver=<?php echo $version ?>"></script>
<script type="text/javascript" id="fieldobservatory-MapViewSiteSharedJs-js" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewSiteShared.js?ver=<?php echo $version ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewSiteDOM.js?ver=<?php echo $version ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/MapViewLastDOM.js?ver=<?php echo $version ?>"></script>
