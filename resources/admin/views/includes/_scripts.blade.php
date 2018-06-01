<script src="/assets/admin/vendor/babel-external-helpers/babel-external-helpers.js"></script>
<script src="/assets/admin/vendor/jquery/jquery.js"></script>
<script src="/assets/admin/vendor/popper-js/umd/popper.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/bootstrap.js"></script>
<script src="/assets/admin/vendor/animsition/animsition.js"></script>
<script src="/assets/admin/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/admin/vendor/asscrollbar/jquery-asScrollbar.js"></script>
<script src="/assets/admin/vendor/asscrollable/jquery-asScrollable.js"></script>
<script src="/assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<script src="/assets/admin/vendor/waves/waves.js"></script>

<!-- Plugins -->
<script src="/assets/admin/vendor/switchery/switchery.js"></script>
<script src="/assets/admin/vendor/intro-js/intro.js"></script>
<script src="/assets/admin/vendor/screenfull/screenfull.js"></script>
<script src="/assets/admin/vendor/slidepanel/jquery-slidePanel.js"></script>

<!-- Scripts -->
<script src="/assets/admin/js/Component.js"></script>
<script src="/assets/admin/js/Plugin.js"></script>
<script src="/assets/admin/js/Base.js"></script>
<script src="/assets/admin/js/Config.js"></script>

<script src="/assets/admin/assets/js/Section/Menubar.js"></script>
<script src="/assets/admin/assets/js/Section/GridMenu.js"></script>
<script src="/assets/admin/assets/js/Section/Sidebar.js"></script>
<script src="/assets/admin/assets/js/Section/PageAside.js"></script>
<script src="/assets/admin/assets/js/Plugin/menu.js"></script>

<script src="/assets/admin/js/config/colors.js"></script>
<script src="/assets/admin/assets/js/config/tour.js"></script>
<script>Config.set('assets', '/assets/admin/assets');</script>

<!-- Page -->
<script src="/assets/admin/assets/js/Site.js"></script>
<script src="/assets/admin/js/Plugin/asscrollable.js"></script>
<script src="/assets/admin/js/Plugin/slidepanel.js"></script>
<script src="/assets/admin/js/Plugin/switchery.js"></script>

<script>
    (function (document, window, $) {
        'use strict';

        var Site = window.Site;
        $(document).ready(function () {
            Site.run();
        });
    })(document, window, jQuery);
</script>