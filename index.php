<!DOCTYPE html>
<html lang="ru">
    <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title>Файловый менеджер | Панель управления 
        Спринтхост</title>
        <script src="/js/vuedist/js/chunk-vendors.js?1701693378044"></script>
        <script src="/js/vuedist/js/chunk-common.js?1701693378044"></script>
        <script src="/js/vuedist/js/mainApp.js?1701693378044"></script>
            <meta property="og:title" content="" />
    <meta property="og:description" content="Удобный хостинг с бесподобной техподдержкой. Домены от 149 ₽, SSL-сертификаты и антивирус бесплатно." />
    <meta property="og:image" content="https://cp.sprinthost.ru/img/shares/sph_1200x630.png">
    <meta property="og:url" content="https://cp.sprinthost.ru" />
    <meta property="og:image" content="https://cp.sprinthost.ru/img/shares/sph_90.png">

<link href="/lib/fontawesome/css/font-awesome.css" rel="stylesheet"/>

<link href="/lib/sweetalert/dist/sweetalert.css" rel="stylesheet"/>
<link href="/lib/toastr/toastr.min.css" rel="stylesheet"/>

<link href="/js/vuedist/css/chunk-vendors.css?1701735146" rel="stylesheet"/>
<link href="/js/vuedist/css/chunk-common.css?1701735146" rel="stylesheet"/>
<link href="/js/vuedist/css/mainApp.css?1701735146" rel="stylesheet"/>
<link href="/css/dashboard.min.css?1701735146" rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">

<link rel="icon" href="/favicons/sprinthost/favicon.ico?1701693378044" type="image/x-icon" />
<link rel="shortcut icon" href="/favicons/sprinthost/favicon.ico?1701693378044" type="image/x-icon" />

<script type="text/javascript" src="/lib/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/lib/jquery-ui/ui/minified/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/lib/yepnope/dist/yepnope-2.0.0.js"></script>
<script type="text/javascript" src="/lib/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="/lib/jquery.cookie/jquery.cookie.js"></script>

<script type="text/javascript" src="/js/vendor/parsley.min.js"></script>
<script type="text/javascript" src="/lib/parsleyjs/dist/i18n/ru.js"></script>

<script type="text/javascript" src="/js/libs.min.js?1701693378044"></script>
<script type="text/javascript" src="/js/components.min.js?1701693378044"></script>

<script src="/js/dashboard/tabsync.js"></script>
<script type="text/javascript" src="/js/dashboard/long_task.js?1701693378044"></script>

    <script type="text/javascript" src="/js/dashboard.min.js?1701693378044"></script>


<script type="text/javascript" src="/js/dashboard/account_access_widget.js?1701693378044"></script>


    </head>
    <body id="body">
                <script>window.update_usage = 1;
        </script>
                <script type="application/json" id="initial-side-bar">
          {"sections":[{"name":"sites_cards","id":"menu-section-sites_cards","title":"","icon":"sites_cards","type":"item","target":null,"active":null},{"name":"domains_cards","id":"menu-section-domains_cards","title":"","icon":"domains_cards","type":"item","target":null,"active":null},{"name":"databases_cards","id":"menu-section-databases_cards","title":"","icon":"databases_cards","type":"item","target":null,"active":null},{"name":"file_manager","id":"menu-section-file_manager","title":"","icon":"filemanager_icon","type":"item","target":null,"active":null},{"name":"mail","id":"menu-section-mail","title":"","icon":"mail_cards","type":"item","target":null,"active":null},{"name":"partners_new","id":"menu-section-partners_new","title":"","icon":"partner_icon","type":"item","target":null,"active":null},{"name":"hb_games","id":"menu-section-hb_games","title":"","icon":"games","type":"item","target":null,"active":null}],"items":[{"name":"","section":"sites_cards","id":"menu-item-","title":"\u0421\u0430\u0439\u0442\u044b","link":"\/customer\/sites\/index","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"domains_cards","id":"menu-item-","title":"\u0414\u043e\u043c\u0435\u043d\u044b","link":"\/customer\/domain\/main","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"databases_cards","id":"menu-item-","title":"\u0411\u0430\u0437\u044b \u0434\u0430\u043d\u043d\u044b\u0445","link":"\/customer\/databases\/index","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"file_manager","id":"menu-item-","title":"\u0424\u0430\u0439\u043b\u043e\u0432\u044b\u0439 \u043c\u0435\u043d\u0435\u0434\u0436\u0435\u0440","link":"\/customer\/files\/manager","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"mail","id":"menu-item-","title":"\u041f\u043e\u0447\u0442\u0430","link":"\/customer\/mail\/main","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"partners_new","id":"menu-item-","title":"\u0421\u0442\u0430\u0442\u044c \u043f\u0430\u0440\u0442\u043d\u0451\u0440\u043e\u043c","link":"\/customer\/wm-new\/index","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"hb_games","id":"menu-item-","title":"\u041d\u0430\u043c 18 \u043b\u0435\u0442!","link":"\/hb\/games","num":"","freehosting":"","target":null,"label":null,"description":""}]}
        </script>
        <script type="application/json" id="initial-page-side-bar">
          {"sections":[{"name":"account","id":"menu-section-account","title":"\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","icon":"account_icon","type":"section","target":null,"active":null},{"name":"profile","id":"menu-section-profile","title":"\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","icon":"account_icon","type":"section","target":null,"active":null},{"name":"security","id":"menu-section-security","title":"\u0411\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0441\u0442\u044c","icon":"account_icon","type":"section","target":null,"active":null},{"name":"personal_data","id":"menu-section-personal_data","title":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0430\u043d\u043d\u044b\u0435","icon":"account_icon","type":"section","target":null,"active":null},{"name":"finances","id":"menu-section-finances","title":"\u0423\u0441\u043b\u0443\u0433\u0438 \u0438 \u0444\u0438\u043d\u0430\u043d\u0441\u044b","icon":"finance_icon","type":"section","target":null,"active":null}],"items":[{"name":"general_settings","section":"account","id":"menu-item-general_settings","title":"\u041e\u0431\u0449\u0438\u0435 \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438","link":"\/customer\/account\/general-settings","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_info","section":"account","id":"menu-item-account_info","title":"\u0414\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/info","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":"f"},{"name":"reissue_account","section":"account","id":"menu-item-reissue_account","title":"\u0421\u043c\u0435\u043d\u0438\u0442\u044c \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/reissue","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"notifications","section":"account","id":"menu-item-notifications","title":"\u0423\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f","link":"\/notifications\/index","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_access_list","section":"account","id":"menu-item-account_access_list","title":"\u0421\u0432\u044f\u0437\u0430\u043d\u043d\u044b\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u044b","link":"\/customer\/account-access\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_auth_access","section":"account","id":"menu-item-account_auth_access","title":"\u0410\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044f","link":"\/security\/auth-access","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"log_operation","section":"account","id":"menu-item-log_operation","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439","link":"\/security\/log-operation","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"login_history","section":"account","id":"menu-item-login_history","title":"\u0410\u043a\u0442\u0438\u0432\u043d\u044b\u0435 \u0441\u0435\u0430\u043d\u0441\u044b","link":"\/security\/login-history","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"general_settings","section":"profile","id":"menu-item-general_settings","title":"\u041e\u0431\u0449\u0438\u0435 \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438","link":"\/customer\/account\/general-settings","num":"","freehosting":"","target":null,"label":null,"description":"\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f \u043e\u0431 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0435, \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u044f \u0447\u0435\u0440\u0435\u0437 \u0441\u043e\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0435 \u0441\u0435\u0442\u0438, \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u043e\u043f\u044b\u0442\u043d\u043e\u0433\u043e \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f. ","cust_type":""},{"name":"notifications","section":"profile","id":"menu-item-notifications","title":"\u0423\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f","link":"\/notifications\/index","num":"","freehosting":"","target":null,"label":null,"description":"\u041d\u0430\u0441\u0442\u0440\u043e\u0438\u0442\u044c \u0443\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f \u043f\u043e \u0421\u041c\u0421 \u0438 \u043f\u043e\u0447\u0442\u0435.","cust_type":""},{"name":"telegram","section":"profile","id":"menu-item-telegram","title":"\u0423\u043f\u0440\u0430\u0432\u043b\u044f\u0442\u044c \u0447\u0435\u0440\u0435\u0437 \u0422\u0435\u043b\u0435\u0433\u0440\u0430\u043c","link":"\/customer\/account\/telegram","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u043e\u0434\u043a\u043b\u044e\u0447\u0430\u0439\u0442\u0435 \u0431\u043e\u0442\u0430 \u0432 \u0422\u0435\u043b\u0435\u0433\u0440\u0430\u043c \u0438 \u0431\u0443\u0434\u044c\u0442\u0435 \u0443\u0432\u0435\u0440\u0435\u043d\u044b, \u0447\u0442\u043e \u043d\u0435 \u043f\u0440\u043e\u043f\u0443\u0441\u0442\u0438\u0442\u0435 \u0432\u0430\u0436\u043d\u0443\u044e \u0438\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044e \u043e \u0432\u0430\u0448\u0435\u043c \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0435.","cust_type":""},{"name":"account_access_list","section":"profile","id":"menu-item-account_access_list","title":"\u0421\u0432\u044f\u0437\u0430\u043d\u043d\u044b\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u044b","link":"\/customer\/account-access\/list","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u0438\u0442\u044c \u043f\u043e\u043b\u043d\u044b\u0439 \u0438\u043b\u0438 \u0447\u0430\u0441\u0442\u0438\u0447\u043d\u044b\u0439 \u0434\u043e\u0441\u0442\u0443\u043f \u043a\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0443 \u0438 \u0443\u043f\u0440\u0430\u0432\u043b\u044f\u0442\u044c \u0434\u0440\u0443\u0433\u0438\u043c\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430\u043c\u0438.","cust_type":""},{"name":"password","section":"security","id":"menu-item-password","title":"\u0421\u043c\u0435\u043d\u0430 \u043f\u0430\u0440\u043e\u043b\u044f","link":"\/password\/change","num":"","freehosting":"","target":null,"label":null,"description":"\u0418\u0437\u043c\u0435\u043d\u0438\u0442\u044c \u043f\u0430\u0440\u043e\u043b\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430 \u0434\u043b\u044f\u00a0\u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438.","cust_type":""},{"name":"account_auth_access","section":"security","id":"menu-item-account_auth_access","title":"\u0410\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044f","link":"\/security\/auth-access","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u043e\u0434\u043a\u043b\u044e\u0447\u0438\u0442\u044c \u0430\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044e \u043f\u043e\u00a0\u043f\u0440\u0438\u043b\u043e\u0436\u0435\u043d\u0438\u044e, email \u0438\u043b\u0438 \u0421\u041c\u0421. \u041d\u0430\u0441\u0442\u0440\u043e\u0438\u0442\u044c \u043f\u0440\u043e\u0432\u0435\u0440\u043a\u0443 IP-\u0430\u0434\u0440\u0435\u0441\u0430.","cust_type":""},{"name":"login_history","section":"security","id":"menu-item-login_history","title":"\u0410\u043a\u0442\u0438\u0432\u043d\u044b\u0435 \u0441\u0435\u0430\u043d\u0441\u044b","link":"\/security\/login-history","num":"","freehosting":"","target":null,"label":null,"description":"\u0421\u043f\u0438\u0441\u043e\u043a \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0443\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432 \u0438\u00a0\u043f\u043e\u043f\u044b\u0442\u043e\u043a \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438 \u0432\u00a0\u0432\u0430\u0448\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442.","cust_type":""},{"name":"log_operation","section":"security","id":"menu-item-log_operation","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439","link":"\/security\/log-operation","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u043e\u0441\u043c\u043e\u0442\u0440\u0435\u0442\u044c \u0438\u0441\u0442\u043e\u0440\u0438\u044e \u0432\u0441\u0435\u0445\u00a0\u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439 \u0432\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0435.","cust_type":""},{"name":"account_info","section":"personal_data","id":"menu-item-account_info","title":"\u0414\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/info","num":"","freehosting":"","target":null,"label":null,"description":"\u0412\u043d\u0435\u0441\u0442\u0438 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430.","cust_type":"f"},{"name":"reissue_account","section":"personal_data","id":"menu-item-reissue_account","title":"\u0421\u043c\u0435\u043d\u0438\u0442\u044c \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/reissue","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u0435\u0440\u0435\u043e\u0444\u043e\u0440\u043c\u0438\u0442\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442 \u043d\u0430\u00a0\u043d\u043e\u0432\u043e\u0433\u043e \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430.","cust_type":""},{"name":"statements","section":"finances","id":"menu-item-statements","title":"\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u044b\u0439 \u0431\u0430\u043b\u0430\u043d\u0441","link":"\/statm\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"my_package","section":"finances","id":"menu-item-my_package","title":"\u041c\u043e\u0439 \u0442\u0430\u0440\u0438\u0444","link":"\/customer\/load\/index","num":"","freehosting":"n","target":null,"label":null,"description":"","cust_type":""},{"name":"services_custom","section":"finances","id":"menu-item-services_custom","title":"\u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u044b\u0435 \u0443\u0441\u043b\u0443\u0433\u0438","link":"\/customer\/services\/custom","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"withdraws","section":"finances","id":"menu-item-withdraws","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0441\u0447\u0451\u0442\u0430","link":"\/withdraws\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""}]}
        </script>
        <script type="application/json" id="initial-page-info">
          {"login":"a0893058","client_type":"customer","loginBda":null,"help_url":"https:\/\/help.sprinthost.ru","cust_type":"f","isSlave":"n","isAdvanced":"n","can_change_services":true,"current_avatar":"\/ajax\/customer\/avatars\/get?time=1701735145","platform_version":"4.0","dealer":null,"pin":null,"user_from_dealer":"n","is_suspend":"n","suspend_type":null,"resources_blocked":"n","cp_actions_blocked":"n","usergroup":"testers","seller_awstats":"y","seller_mailservice":"y","nemails":"0","package":"plus10","package_type":"shared","package_descr":"\u041f\u043b\u044e\u0441-10","domains_only":"n","freehosting":"n","is_package_changeable":true,"customer_settings":{"login":"a0893058","pwd":null,"pwd_ssl":"KPo4xQsfzRgknGzEp3eV\/w==","pwd_mysql":"*C2176E3DA52A03BA94DFA3D0D6D495FD3A6B245C","pwd_ftp":"$1$giqhmzCK$3rINx9qbL8CgCv5o0rWS0\/","max_vdomains":"0","jur6month":"n","special_domain_price":null,"special_domain_price_mandatory":"n","genact_type":"prepaid","wm_rate":"0.4000","low_wm_rate":null,"low_wm_rate_type":null,"edms":"n","edms_providers_id":"1","send_mail_docs":"n","broken_mail_address":"n","broken_email_address":"n","invoice_to_pay_ts":null,"invoice_to_pay_serialized":null,"prevent_auto_regdom":"n","vip_customer":"n","vip_customer_descr":null,"service_customer":"n","service_customer_descr":null,"check_login_ip":"y","check_balance":"y","payment_dest":null,"collapse_services_in_faktura_to":null,"sites":null,"quota":null,"quota_temporary":null,"max_files":null,"max_files_temporary":null,"prefork_max_clients":null,"login_class":null,"cgroup":null,"boxes_max_count":null,"box_local_network":null,"box_extra_services":null,"can_call":"y","transfer_ticket":null,"transfer_ts":null,"api_key":null,"bot_api_key":null,"reg_category_ts":"2023-12-04 19:06:06","reg_category":"none","moderated":"y","hs_every":null,"hs_info":null,"hs_hour":"6","old_pin":null,"block_custom_services":"n","block_change_package":"n","block_shop":"n","is_frozen":"n","overload_change_package":"n","deployme_token":null,"onboarded":true,"edms_interval":"3","block_third_party_nses":"n"},"server_available":"y","has_login":true,"rub_sign":"<span class=\"rub-sign\">a<\/span>","is_production":true,"memcache":0,"ddos":0,"redis":0,"nemails_count":0,"isFederal":false,"hasEdo":false,"freeSiteBlocked":false,"reqLimit":1000,"is_frozen":"n","block_custom_services":false,"promo_banner_info":[],"isTester":true,"usage":{"login":"a0893058","id":"807987","mysql":"0","mysql_kbytes":null,"ftp":"1","sites_usage":null,"nemails":"0","nemails_aliases":"0","sites":null,"domainptr":0,"nsubdomains":0,"vdomains":1,"quota":0.12,"files_num":19,"files_kbytes":null,"ts_updated":"2023-12-05 01:48:21"},"box_count":0,"quota":"6000","account_access_list":[],"access_routes":[{"docsList":false},{"sitesList":true},{"fileManager":true},{"regDom":true},{"backupsManager":true},{"pma":true},{"packageChange":true},{"customServices":true},{"generalSettings":true},{"generalSettingsMenu":true},{"verification":true},{"accountInfoPerson":true},{"accountInfoIp":true},{"accountInfoOrg":true},{"loadIndex":true},{"loadCpu":true},{"loadRam":true},{"loadReq":true},{"payAdd":true},{"domainAdd":true},{"siteAdd":true}],"line":"plus","created_at":"2023-12-04 20:03:55","showWebServersWidget":false,"statm":"0.00","per_month":319,"paid_days":29,"bonus_statm":"0.0000","real_statm":0,"name":null,"title":"\u0424\u0430\u0439\u043b\u043e\u0432\u044b\u0439 \u043c\u0435\u043d\u0435\u0434\u0436\u0435\u0440","breadcrumbs":[{"title":"\u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u043e"}],"active":"file_manager","paid_today":false,"payments_count":0,"accountErrorsData":{"cancelData":{"isCurrentSuspend":"n","deleteDate":null},"ddosData":{"sites":[],"price":290,"isPremium":"n","isCurrentSuspend":"n"},"debtData":{"isSprintbox":"n","isCurrentSuspend":"n"},"boxData":{"daysLeft":7,"isCurrentSuspend":"n"},"hackedData":{"email":"mhtb@mail.ru","isCurrentSuspend":"n"},"hackscanData":{"isCurrentSuspend":"n"},"inactiveData":{"isCurrentSuspend":"n","deleteDate":null},"mailData":{"isCurrentSuspend":"n"},"overloadData":{"isCurrentSuspend":"n","nextPackage":"plus11"},"overquotaData":{"isCurrentSuspend":"n","nextPackage":"plus11"},"testoverData":{"isPremium":"n","isCurrentSuspend":"n"},"violationData":{"isCurrentSuspend":"n"},"filesLimit":{"isFree":"n","isCurrentSuspend":"n"},"freeRequestsLimit":{"isCurrentSuspend":"n","domain":null},"frozen":{"isCurrentSuspend":"n"},"sitesBlock":{"sitesCount":0,"isCurrentSuspend":"n","siteName":null},"wrongAddress":{"isCurrentSuspend":"n"},"serverStatus":{"serverName":"1","isCurrentSuspend":"n"}}}
        </script>
                        
        
        <div id="cp-wrapper" class="cp-wrapper">            <header id="vue-header"></header>
                            <aside id="v-side-bar-tight"></aside>
            
            <main id="main" class="main--wide">                <div id="bread-crumbs"></div>
                <div id="page-content">
                        <link rel="stylesheet" href="/lib/jquery-file-upload/css/jquery.fileupload.css">
<link rel="stylesheet" href="/lib/jquery-file-upload/css/jquery.fileupload-ui.css">

<script src="/lib/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.fileupload.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<script src="/lib/jquery-file-upload/js/jquery.fileupload-ui.js"></script>

<script src="/js/dashboard/file_upload.js?1701693378044"></script>

    <link href="/lib/fancybox/source/jquery.fancybox.css" rel="stylesheet">
<script type="text/javascript" src="/lib/fancybox/source/jquery.fancybox.pack.js"></script>

    <script src="/js/vuedist/js/FilesManager.js?1701693378044"></script>
    <div id="files-manager-app"></div>

    <link rel="stylesheet" type="text/css" href="/lib/fontawesome/css/font-awesome.min.css">
    <script src="/js/ace/ace.min.js?1701693378044"></script>
    <script src="/js/dashboard/files_manager.js?1701693378044"></script>

    <script type="text/javascript" src="/js/dashboard/custom-lib-panel/Modal.js?1701693378044"></script>

    <input id="upload-max-filesize" class="hidden" value="1024" title="">

        
        <div id="file-upload-dialog" class="sph-dropzone hidden">
        <div>
            <input class="hidden" id="fm-upload-panel" title="">
                        <div class="hidden" id="duplicate-check">
                <div class = "content__icon"></div>
                <p>В текущей директории уже есть файл <strong id="duplicate-name">'+ duplicate[k] +'</strong>.</p>
                <div class="container-btns">
                    <button class="upload-act btn btn-sm btn-primary btn-border" data-action="replace">Заменить</button>
                    <button class="upload-act btn btn-sm btn-primary m-r btn-border" data-action="replace-all">Заменить
                        все</button>
                    <button class="upload-act btn btn-sm btn-info" data-action="skip">Пропустить</button>
                    <button class="upload-act btn btn-sm btn-info" data-action="cancel">Пропустить все</button>
                </div>
            </div>

                        <div class="fm-upload-process hidden" id="upload-process"></div>
        </div>
    </div>

        <div class="hidden" id="file-upload-template">
        <div class="row">
            <div class="col-xs-4">
                <div aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" role="progressbar" class="progress progress-striped active">
                    <div style="width:0;" class="progress-bar progress-bar-primary"></div>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="upload-file-name"></div>
            </div>
            <div class="col-xs-2">
                <button class="btn btn-xs btn-warning cancel-upload">Отмена</button>
            </div>
        </div>
    </div>

        <div id="file-upload-skip" class="hidden">
        <div class="row">
            <div class="col-xs-4">
                <div class="upload-file-name text-left"></div>
            </div>
            <div class="col-xs-8">
                <div class="upload-file-reason text-left small"></div>
            </div>
        </div>
    </div>

        <div id="file-creator-dialog" class="hidden">
        <div class="file-creator-container files-actions">
            <form id="file-create-form" class="form-horizontal" onsubmit="pd(event); FileManager.createFileSubmit(this);" autocomplete="off">
                <input type="hidden" name="file_type"/>
                <input type="hidden" name="cur_path"/>
                <input type="hidden" name="panel_side"/>

                <div class="form-group">
                    <label for="create-file-name" class="col-sm-3 control-label">Название:</label>
                    <div class="col-sm-9"><input id="create-file-name" class="form-control" name="file_name" type="text" value=""/>
                        <div class="error-block" style="color: red"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <div class="custom-input custom-input_default custom-input_checkbox custom-input_success"><input type="checkbox"
               id="create-file-open"
               name="file_open"
                value=""                                        /><label class="custom-input__label" for="create-file-open" id="create-file-open_label"><span class="custom-input__main-label">&amp;nbsp;</span></label></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <div id="file-rights-dialog" class="hidden">
        <div class="file-rights-container files-actions">
            <form id="file-rights-form" class="form-horizontal" onsubmit="pd(event); FileManager.chmodSubmit(this);" autocomplete="off">

                <input type="hidden" name="panel_side">
                <input id="file-name" name="file_name" type="hidden"/>

                <div class="form-group">
                    <div class="col-sm-4">
                        <h4>Владелец</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-0-4"
               name="file_rights[0][r]"
                value="4"                                onclick="FileManager.chmodChange(this, 0)"        /><label class="custom-input__label" for="file-right-0-4" id="file-right-0-4_label"><span class="custom-input__main-label">Чтение</span></label></div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-0-2"
               name="file_rights[0][w]"
                value="2"                                onclick="FileManager.chmodChange(this, 0)"        /><label class="custom-input__label" for="file-right-0-2" id="file-right-0-2_label"><span class="custom-input__main-label">Запись</span></label></div>
                                </div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-0-1"
               name="file_rights[0][x]"
                value="1"                                onclick="FileManager.chmodChange(this, 0)"        /><label class="custom-input__label" for="file-right-0-1" id="file-right-0-1_label"><span class="custom-input__main-label">Исполнение</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h4>Группа</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-1-4"
               name="file_rights[1][r]"
                value="4"                                onclick="FileManager.chmodChange(this, 1)"        /><label class="custom-input__label" for="file-right-1-4" id="file-right-1-4_label"><span class="custom-input__main-label">Чтение</span></label></div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-1-2"
               name="file_rights[1][w]"
                value="2"                                onclick="FileManager.chmodChange(this, 1)"        /><label class="custom-input__label" for="file-right-1-2" id="file-right-1-2_label"><span class="custom-input__main-label">Запись</span></label></div>
                                </div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-1-1"
               name="file_rights[1][x]"
                value="1"                                onclick="FileManager.chmodChange(this, 1)"        /><label class="custom-input__label" for="file-right-1-1" id="file-right-1-1_label"><span class="custom-input__main-label">Исполнение</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h4>Другие</h4>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-2-4"
               name="file_rights[2][r]"
                value="4"                                onclick="FileManager.chmodChange(this, 2)"        /><label class="custom-input__label" for="file-right-2-4" id="file-right-2-4_label"><span class="custom-input__main-label">Чтение</span></label></div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-2-2"
               name="file_rights[2][w]"
                value="2"                                onclick="FileManager.chmodChange(this, 2)"        /><label class="custom-input__label" for="file-right-2-2" id="file-right-2-2_label"><span class="custom-input__main-label">Запись</span></label></div>
                                </div>
                                <div class="m-t-5">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="file-right-2-1"
               name="file_rights[2][x]"
                value="1"                                onclick="FileManager.chmodChange(this, 2)"        /><label class="custom-input__label" for="file-right-2-1" id="file-right-2-1_label"><span class="custom-input__main-label">Исполнение</span></label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hr-line-dashed"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="file-chmod">Код доступа:</label>
                    <div class="col-sm-9">
                        <input id="file-chmod" class="form-control" onkeyup="FileManager.chmodCheck(this);" name="file_chmod" maxlength="3" size="5"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <div class="custom-input custom-input_default custom-input_checkbox custom-input_success"><input type="checkbox"
               id="file-rights"
               name="is_recursive"
                value="4"                                class="forward-item"onclick="fieldHelper.selectItem(&#039;.forward-item&#039;, &#039;.forward-all&#039;, &#039;.act-btn&#039;)"        /><label class="custom-input__label" for="file-rights" id="file-rights_label"><span class="custom-input__main-label">Рекурсивно для всех вложенных папок и файлов</span></label></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <div id="secure-webdir-dialog" class="hidden">
        <div class="files-actions">
            <form class="form-horizontal" onsubmit="pd(event); FileManager.secureDirectorySubmit(this);" autocomplete="off">
                <input id="dir-name" type="hidden" name="dir_name">
                <input id="cur-path" type="hidden" name="cur_path">
                <input id="dir-unsecure" type="hidden" name="dir_unsecure">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Путь к папке:</label>
                    <div class="col-sm-9"><label class="control-label" id="dir-label"></label></div>
                </div>
                <div id="dir-wrapper">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Логин:</label>
                        <div class="col-sm-9"><input id="dir-user" class="form-control" name="dir_user" type="text" title=""></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Пароль:</label>
                        <div class="col-sm-9"><input id="dir-pass" class="form-control" name="dir_pass" type="password" title=""></div>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <div id="file-archive-dialog" class="hidden">
        <form class="form-horizontal" onsubmit="pd(event); FileManager.archiveFilesSubmit(this);">
            <input type="hidden" name="panel_side"/>
            <input class="archive-path" type="hidden" name="destination"/>
            <div class="form-group">
                <label class="col-sm-3 control-label">Выбрано:</label>
                <div class="col-sm-9 form-control-static"><span class="file-selected"></span></div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Тип архива:</label>
                <div class="col-sm-9">
                    <select class="archive-select-ext form-control" name="arc_ext" title=""
                            onchange="$('.archive-ext').text('.' + this.value);">
                                                    <option value="tar.gz">tar</option>
                                                    <option value="zip">zip</option>
                                                    <option value="7z">7z</option>
                                                    <option value="bz2">bzip2</option>
                                            </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Название архива:</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <input class="archive-name form-control" name="arc_name" type="text" title="">
                        <span class="input-group-addon archive-ext"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>

        <div id="file-editor-dialog" class="hidden">
        <div class="file-editor-wrap" style="height: 100%;">
            <div class="panel-button-editor clearfix m-b">
                <div class="pull-left">
                    <button class="btn btn-success editor-undo btn-sm" onclick="sphEditor.undo(this);" title="Отменить предыдущее изменение" disabled="disabled"><i class="fa fa-undo"></i></button>
                    <button class="btn btn-success editor-redo btn-sm" onclick="sphEditor.redo(this);" title="Применить предыдущее изменение" disabled="disabled"><i class="fa fa-repeat"></i></button>
                    <button class="btn btn-success editor-save btn-sm" onclick="sphEditor._save(this, false);" title="Сохранить" disabled="disabled"><i class="fa fa-save"></i></button>

                    <button class="btn btn-success editor-search btn-sm" onclick="sphEditor.find(this);" title="Искать в тексте"><i class="fa fa-search"></i></button>
                </div>

                <div class="pull-right m-l">
                    <button class="btn btn-success editor-fullscreen btn-sm" onclick="sphEditor.fullscreen(this);" title="На весь экран"><i class="fa fa-arrows-alt"></i></button>
                </div>
            </div>
            <div id="file-editor-container"></div>
        </div>
    </div>

    <div id="file-rename-dialog" class="hidden">
        <form class="form-horizontal" onsubmit="pd(event); FileManager.renameFileSubmit(this);">
            <input class="file-name" type="hidden" name="old_name"/>
            <input class="file-path" type="hidden" name="cur_path"/>
            <input class="file-name-str" type="hidden" name="old_name_str"/>
            <input type="hidden" name="panel_side"/>
            <div class="form-group">
                <label class="col-sm-3 control-label">Имя:</label>
                <div class="col-sm-9"><input class="new-file-name form-control" name="new_name" type="text" title="" onkeyup="FileManager.editInputHandler(this)"></div>
            </div>
        </form>
    </div>

    <input type="hidden" id="fm-login" value="a0893058">
    <input type="hidden" id="fm-server" value="sigurd">

    <div class="row" id="files-manager">
        <div class="col-xs-12 col-lg-6 pull-left">
            <div class="ibox m-b">
                    <div class="ibox-title clearfix drop-zone-left">
        <div class="fm-dz-buttons">
            <div class="pull-left">
                <div class="panel-button-left">
                    


<div class="hidden-xs">

            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-success fm-archive btn-sm" onclick="FileManager.archiveFiles(&quot;left&quot;)" title="Создать архив" disabled>
            <i class="fa fa-archive"></i>
        </button>
    
                        <button class="btn btn-success fm-extract btn-sm" onclick="FileManager.extractFiles(&quot;left&quot;)" title="Извлечь архив" disabled>
            <i class="fa fa-inbox"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-success fm-copy btn-sm" onclick="FileManager.copyFiles(&quot;left&quot;)" title="Копировать" disabled>
            <i class="fa fa-copy"></i>
        </button>
    
                        <button class="btn btn-success fm-move btn-sm" onclick="FileManager.moveFiles(&quot;left&quot;)" title="Переместить" disabled>
            <i class="fa fa-cut"></i>
        </button>
    
                        <button class="btn btn-success fm-paste btn-sm" onclick="FileManager.pasteFiles(&quot;left&quot;)" title="Вставить" disabled>
            <i class="fa fa-paste"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-success fm-rename btn-sm" onclick="FileManager.renameFile(&quot;left&quot;)" title="Переименовать" disabled>
            <i class="fa fa-pencil"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-danger fm-remove btn-sm" onclick="FileManager.removeFiles(&quot;left&quot;)" title="Удалить" disabled>
            <i class="fa fa-trash"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-success fm-secure btn-sm" onclick="FileManager.secureDirectory(&quot;left&quot;)" title="Защитить папку" disabled>
            <i class="fa fa-shield"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-primary fm-file btn-sm" onclick="FileManager.createFile(&quot;left&quot;, &quot;file&quot;)" title="Создать файл" >
            <i class="fa fa-file"></i>
        </button>
    
                        <button class="btn btn-primary fm-directory btn-sm" onclick="FileManager.createFile(&quot;left&quot;, &quot;dir&quot;)" title="Создать папку" >
            <i class="fa fa-folder"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-primary fm-download btn-sm" onclick="FileManager.downloadFile(&quot;left&quot;)" title="Скачать файл" disabled>
            <i class="fa fa-download"></i>
        </button>
    
                        <label class="btn btn-primary fm-upload-left btn-sm upload-label" title="Загрузить файл" >
            <i class="fa fa-upload"></i>
            <input type="file" name="files[]" multiple="" class="hidden">
        </label>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-primary fm-search btn-sm" onclick="searchFileContent.search($(&quot;#current-position-left&quot;).data(&quot;path&quot;), null, &quot;left&quot;)" title="Поиск по содержимому файлов" >
            <i class="fa fa-search"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-primary fm-reload btn-sm" onclick="FileManager.reloadPanel(&quot;left&quot;)" title="Обновить панель" >
            <i class="fa fa-refresh"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs">            <button class="btn btn-primary fm-fullscreen hidden btn-sm" onclick="FileManager.fullScreen(true)" title="На весь экран" >
            <i class="fa fa-arrows-alt"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs">            <button class="btn btn-primary fm-minimize hidden btn-sm" onclick="FileManager.fullScreen(false)" title="Свернуть" >
            <i class="fa fa-compress"></i>
        </button>
    </div>
    </div>

<div class="visible-xs">

            <div class="btn-group btn-group-justified m-b-xs">
            <div class="btn-group">            <button class="btn btn-success fm-archive " onclick="FileManager.archiveFiles(&quot;left&quot;)" title="Создать архив" disabled>
            <i class="fa fa-archive"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-extract " onclick="FileManager.extractFiles(&quot;left&quot;)" title="Извлечь архив" disabled>
            <i class="fa fa-inbox"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-copy " onclick="FileManager.copyFiles(&quot;left&quot;)" title="Копировать" disabled>
            <i class="fa fa-copy"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-move " onclick="FileManager.moveFiles(&quot;left&quot;)" title="Переместить" disabled>
            <i class="fa fa-cut"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-paste " onclick="FileManager.pasteFiles(&quot;left&quot;)" title="Вставить" disabled>
            <i class="fa fa-paste"></i>
        </button>
    </div>
        </div>
    
            <div class="btn-group btn-group-justified m-b-xs">
            <div class="btn-group">            <button class="btn btn-success fm-rename " onclick="FileManager.renameFile(&quot;left&quot;)" title="Переименовать" disabled>
            <i class="fa fa-pencil"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-danger fm-remove " onclick="FileManager.removeFiles(&quot;left&quot;)" title="Удалить" disabled>
            <i class="fa fa-trash"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-secure " onclick="FileManager.secureDirectory(&quot;left&quot;)" title="Защитить папку" disabled>
            <i class="fa fa-shield"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-file " onclick="FileManager.createFile(&quot;left&quot;, &quot;file&quot;)" title="Создать файл" >
            <i class="fa fa-file"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-directory " onclick="FileManager.createFile(&quot;left&quot;, &quot;dir&quot;)" title="Создать папку" >
            <i class="fa fa-folder"></i>
        </button>
    </div>
        </div>
    
            <div class="btn-group btn-group-justified m-b" style="padding-right:20%;">
            <div class="btn-group">            <button class="btn btn-primary fm-download " onclick="FileManager.downloadFile(&quot;left&quot;)" title="Скачать файл" disabled>
            <i class="fa fa-download"></i>
        </button>
    </div>
            <div class="btn-group">            <label class="btn btn-primary fm-upload-m-left upload-label" title="Загрузить файл" >
            <i class="fa fa-upload"></i>
            <input type="file" name="files[]" multiple="" class="hidden">
        </label>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-search " onclick="searchFileContent.search($(&quot;#current-position-left&quot;).data(&quot;path&quot;), null, &quot;left&quot;)" title="Поиск по содержимому файлов" >
            <i class="fa fa-search"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-reload " onclick="FileManager.reloadPanel(&quot;left&quot;)" title="Обновить панель" >
            <i class="fa fa-refresh"></i>
        </button>
    </div>
        </div>
    
</div>
                </div>
            </div>

                                                                                
            <div class="pull-right m-b-xs hidden-xs hidden-sm hidden-md max-width-170 full-width">
                <select class="form-control" onchange="FileManager.goToSite(this, 'left');" title="">
                                                                        <option class="" value="">Переход к сайту</option>
                        
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==">a0893058.xsph.ru</option>
                                            
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhOREF5TXpnME1Ea3lNWEU0TXpBNU5UY3VZMjl0TDNCMVlteHBZMTlvZEcxcyJ9">a4023840921q830957.com</option>
                                    </select>
            </div>
            <div class="visible-xs visible-sm visible-md max-width-170 full-width" style="clear:both;">
                <select class="form-control block" onchange="FileManager.goToSite(this, 'left');" title="">
                                                                        <option class="" value="">Переход к сайту</option>
                        
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==">a0893058.xsph.ru</option>
                                            
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhOREF5TXpnME1Ea3lNWEU0TXpBNU5UY3VZMjl0TDNCMVlteHBZMTlvZEcxcyJ9">a4023840921q830957.com</option>
                                    </select>
            </div>
        </div>

        <div class="fm-dz-message hidden">
            <span class="text-center"><h2>Отпустите файлы для начала загрузки</h2></span>
        </div>
    </div>

    <div class="ibox-content">
        <div id="file-manager-left" class="crutch-loader">
            
<script> FileManager.current_count.left = 6</script>
<div class="block m-b">
    <p id="current-position-left" class="strong" data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ=="><a href="/customer/files/get-files?path[left]=/home/a0893058&p=left&path%5Bright%5D=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0%3D"
                   onclick="pd(event); FileManager.getFiles('left', '/home/a0893058');">/home/a0893058</a>/<a href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==&p=left&path%5Bright%5D=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0%3D"
                   onclick="pd(event); FileManager.getFiles('left', 'eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==');">domains</a>/<a href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMSJ9&p=left&path%5Bright%5D=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0%3D"
                   onclick="pd(event); FileManager.getFiles('left', 'eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMSJ9');">a0893058.xsph.ru</a>/public_html/</p>
</div>

<table class="table table-bordered table-condensed table-hover table-striped table-fixed file-manager">
    <thead>
    <tr>
        <th class="text-center" width="44">
                            <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select_all-left_id"
               name="select_all-left"
                value=""                                title="Выбрать/отменить все элементы"onclick="FileManager.selectAll(this)"        /><label class="custom-input__label" for="select_all-left_id" id="select_all-left_id_label"></label></div>
                    </th>
        <th class="text-left">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==&amp;p=left&sort=name_desc"
       onclick="pd(event); FileManager.current_sort.left = 'name_desc'; FileManager.current_page.left = 1; FileManager.getFiles('left','eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==', null, null, 'name_desc')">
        Имя файла<i class="fa m-l-sm fa-sort-asc"></i></a>        </th>
        <th class="text-center hidden-xs" width="95">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==&amp;p=left&sort=size_asc"
       onclick="pd(event); FileManager.current_sort.left = 'size_asc'; FileManager.current_page.left = 1; FileManager.getFiles('left','eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==', null, null, 'size_asc')">
        Размер<i class="fa m-l-sm fa-sort"></i></a>        </th>
        <th class="text-center hidden-xs" width="80">Права</th>
        <th class="text-center hidden-xs" width="125">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==&amp;p=left&sort=mtime_asc"
       onclick="pd(event); FileManager.current_sort.left = 'mtime_asc'; FileManager.current_page.left = 1; FileManager.getFiles('left','eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==', null, null, 'mtime_asc')">
        Изменен<i class="fa m-l-sm fa-sort"></i></a>        </th>
    </tr>
    </thead>
    <tbody class="file-manager-list-body">
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                            </td>
            <td class="text-left col-name sel-file-show ftype-parent">
                                    <span class="file-rename-list">
                        <a href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMSJ9&p=left&sort=name_asc&path%5Bright%5D=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0%3D"
                           onclick="pd(event); FileManager.getFiles('left', 'eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMSJ9', null, null, 'name_asc', 'scroll');"
                                 title="перейти на уровень выше" class="block" >
                            ..
                        </a>
                    </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMSJ9', '/home/a0893058/domains/a0893058.xsph.ru', 'directory');" title="Изменить права доступа"></a>
            </td>
            <td class="text-center hidden-xs sel-file-show"></td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-left1ea0905eb46b461a_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ=="
               name="select-file-left1ea0905eb46b461a"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ=="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="1ea0905eb46b461a"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTVdWaE1Ea3dOV1ZpTkRaaU5EWXhZUT09In0="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ=="data-path_str="/home/a0893058/domains/a0893058.xsph.ru/public_html/1ea0905eb46b461a"data-type="dir"data-size="4096"        /><label class="custom-input__label" for="select-file-left1ea0905eb46b461a_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ==" id="select-file-left1ea0905eb46b461a_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ==_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-dir">
                                    <span class="file-rename-list">
                        <a href="/customer/files/get-files?path[left]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ==&p=left&sort=name_asc&path%5Bright%5D=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0%3D"
                           onclick="pd(event); FileManager.getFiles('left', 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ==', null, null, 'name_asc', 'scroll');"
                                >
                            1ea0905eb46b461a
                        </a>
                    </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMekZsWVRBNU1EVmxZalEyWWpRMk1XRT0ifQ==', '/home/a0893058/domains/a0893058.xsph.ru/public_html/1ea0905eb46b461a', 'directory');" title="Изменить права доступа">755</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:49</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-left.htaccess_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0="
               name="select-file-left.htaccess"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".htaccess"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG1oMFlXTmpaWE56In0="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0="data-path_str="/home/a0893058/domains/a0893058.xsph.ru/public_html/.htaccess"data-type="file"data-size="214"        /><label class="custom-input__label" for="select-file-left.htaccess_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0=" id="select-file-left.htaccess_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0=_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/.htaccess', 'ASCII');">
                                .htaccess
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.21 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMeTVvZEdGalkyVnpjdz09In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/.htaccess', 'regular file');" title="Изменить права доступа">777</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:49</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-left612fd5c5.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9"
               name="select-file-left612fd5c5.php"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9"                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="612fd5c5.php"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTmpFeVptUTFZelV1Y0dodyJ9"data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9"data-path_str="/home/a0893058/domains/a0893058.xsph.ru/public_html/612fd5c5.php"data-type="file"data-size="23957"        /><label class="custom-input__label" for="select-file-left612fd5c5.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9" id="select-file-left612fd5c5.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file-php">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9', '/home/a0893058/domains/a0893058.xsph.ru/public_html/612fd5c5.php', 'ASCII');">
                                612fd5c5.php
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        23.40 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMell4TW1aa05XTTFMbkJvY0E9PSJ9', '/home/a0893058/domains/a0893058.xsph.ru/public_html/612fd5c5.php', 'regular file');" title="Изменить права доступа">777</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:49</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-leftindex.html_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0="
               name="select-file-leftindex.html"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="index.html"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiYVc1a1pYZ3VhSFJ0YkE9PSJ9"data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0="data-path_str="/home/a0893058/domains/a0893058.xsph.ru/public_html/index.html"data-type="file"data-size="181"        /><label class="custom-input__label" for="select-file-leftindex.html_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0=" id="select-file-leftindex.html_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0=_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file-html">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/index.html', 'ASCII');">
                                index.html
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.18 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExtaDBiV3c9In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/index.html', 'regular file');" title="Изменить права доступа">777</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:49</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-leftindex.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0="
               name="select-file-leftindex.php"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="index.php"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiYVc1a1pYZ3VjR2h3In0="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0="data-path_str="/home/a0893058/domains/a0893058.xsph.ru/public_html/index.php"data-type="file"data-size="40"        /><label class="custom-input__label" for="select-file-leftindex.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0=" id="select-file-leftindex.php_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0=_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file-php">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/index.php', 'ASCII');">
                                index.php
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.04 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXNMMmx1WkdWNExuQm9jQT09In0=', '/home/a0893058/domains/a0893058.xsph.ru/public_html/index.php', 'regular file');" title="Изменить права доступа">777</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:49</td>
        </tr>
        </tbody>
</table>

    <div class="clearfix">
                
    <ul class="pagination pull-right">
        
        <li class="info text-muted disabled">
                                                </li>
            </ul>
    </div>
        </div>
    </div>

            </div>
        </div>

        <div class="hidden-xs hidden-sm hidden-md col-lg-6 pull-right">
            <div class="ibox m-b">
                    <div class="ibox-title clearfix drop-zone-right">
        <div class="fm-dz-buttons">
            <div class="pull-left">
                <div class="panel-button-right">
                    


<div class="hidden-xs">

            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-success fm-archive btn-sm" onclick="FileManager.archiveFiles(&quot;right&quot;)" title="Создать архив" disabled>
            <i class="fa fa-archive"></i>
        </button>
    
                        <button class="btn btn-success fm-extract btn-sm" onclick="FileManager.extractFiles(&quot;right&quot;)" title="Извлечь архив" disabled>
            <i class="fa fa-inbox"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-success fm-copy btn-sm" onclick="FileManager.copyFiles(&quot;right&quot;)" title="Копировать" disabled>
            <i class="fa fa-copy"></i>
        </button>
    
                        <button class="btn btn-success fm-move btn-sm" onclick="FileManager.moveFiles(&quot;right&quot;)" title="Переместить" disabled>
            <i class="fa fa-cut"></i>
        </button>
    
                        <button class="btn btn-success fm-paste btn-sm" onclick="FileManager.pasteFiles(&quot;right&quot;)" title="Вставить" disabled>
            <i class="fa fa-paste"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-success fm-rename btn-sm" onclick="FileManager.renameFile(&quot;right&quot;)" title="Переименовать" disabled>
            <i class="fa fa-pencil"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-danger fm-remove btn-sm" onclick="FileManager.removeFiles(&quot;right&quot;)" title="Удалить" disabled>
            <i class="fa fa-trash"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-success fm-secure btn-sm" onclick="FileManager.secureDirectory(&quot;right&quot;)" title="Защитить папку" disabled>
            <i class="fa fa-shield"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-primary fm-file btn-sm" onclick="FileManager.createFile(&quot;right&quot;, &quot;file&quot;)" title="Создать файл" >
            <i class="fa fa-file"></i>
        </button>
    
                        <button class="btn btn-primary fm-directory btn-sm" onclick="FileManager.createFile(&quot;right&quot;, &quot;dir&quot;)" title="Создать папку" >
            <i class="fa fa-folder"></i>
        </button>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">
                        <button class="btn btn-primary fm-download btn-sm" onclick="FileManager.downloadFile(&quot;right&quot;)" title="Скачать файл" disabled>
            <i class="fa fa-download"></i>
        </button>
    
                        <label class="btn btn-primary fm-upload-right btn-sm upload-label" title="Загрузить файл" >
            <i class="fa fa-upload"></i>
            <input type="file" name="files[]" multiple="" class="hidden">
        </label>
    
        </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-primary fm-search btn-sm" onclick="searchFileContent.search($(&quot;#current-position-right&quot;).data(&quot;path&quot;), null, &quot;right&quot;)" title="Поиск по содержимому файлов" >
            <i class="fa fa-search"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs m-r-xs">            <button class="btn btn-primary fm-reload btn-sm" onclick="FileManager.reloadPanel(&quot;right&quot;)" title="Обновить панель" >
            <i class="fa fa-refresh"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs">            <button class="btn btn-primary fm-fullscreen hidden btn-sm" onclick="FileManager.fullScreen(true)" title="На весь экран" >
            <i class="fa fa-arrows-alt"></i>
        </button>
    </div>
    
            <div class="btn-group m-b-xs">            <button class="btn btn-primary fm-minimize hidden btn-sm" onclick="FileManager.fullScreen(false)" title="Свернуть" >
            <i class="fa fa-compress"></i>
        </button>
    </div>
    </div>

<div class="visible-xs">

            <div class="btn-group btn-group-justified m-b-xs">
            <div class="btn-group">            <button class="btn btn-success fm-archive " onclick="FileManager.archiveFiles(&quot;right&quot;)" title="Создать архив" disabled>
            <i class="fa fa-archive"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-extract " onclick="FileManager.extractFiles(&quot;right&quot;)" title="Извлечь архив" disabled>
            <i class="fa fa-inbox"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-copy " onclick="FileManager.copyFiles(&quot;right&quot;)" title="Копировать" disabled>
            <i class="fa fa-copy"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-move " onclick="FileManager.moveFiles(&quot;right&quot;)" title="Переместить" disabled>
            <i class="fa fa-cut"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-paste " onclick="FileManager.pasteFiles(&quot;right&quot;)" title="Вставить" disabled>
            <i class="fa fa-paste"></i>
        </button>
    </div>
        </div>
    
            <div class="btn-group btn-group-justified m-b-xs">
            <div class="btn-group">            <button class="btn btn-success fm-rename " onclick="FileManager.renameFile(&quot;right&quot;)" title="Переименовать" disabled>
            <i class="fa fa-pencil"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-danger fm-remove " onclick="FileManager.removeFiles(&quot;right&quot;)" title="Удалить" disabled>
            <i class="fa fa-trash"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-success fm-secure " onclick="FileManager.secureDirectory(&quot;right&quot;)" title="Защитить папку" disabled>
            <i class="fa fa-shield"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-file " onclick="FileManager.createFile(&quot;right&quot;, &quot;file&quot;)" title="Создать файл" >
            <i class="fa fa-file"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-directory " onclick="FileManager.createFile(&quot;right&quot;, &quot;dir&quot;)" title="Создать папку" >
            <i class="fa fa-folder"></i>
        </button>
    </div>
        </div>
    
            <div class="btn-group btn-group-justified m-b" style="padding-right:20%;">
            <div class="btn-group">            <button class="btn btn-primary fm-download " onclick="FileManager.downloadFile(&quot;right&quot;)" title="Скачать файл" disabled>
            <i class="fa fa-download"></i>
        </button>
    </div>
            <div class="btn-group">            <label class="btn btn-primary fm-upload-m-right upload-label" title="Загрузить файл" >
            <i class="fa fa-upload"></i>
            <input type="file" name="files[]" multiple="" class="hidden">
        </label>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-search " onclick="searchFileContent.search($(&quot;#current-position-right&quot;).data(&quot;path&quot;), null, &quot;right&quot;)" title="Поиск по содержимому файлов" >
            <i class="fa fa-search"></i>
        </button>
    </div>
            <div class="btn-group">            <button class="btn btn-primary fm-reload " onclick="FileManager.reloadPanel(&quot;right&quot;)" title="Обновить панель" >
            <i class="fa fa-refresh"></i>
        </button>
    </div>
        </div>
    
</div>
                </div>
            </div>

                                                                                
            <div class="pull-right m-b-xs hidden-md hidden-sm hidden-xs max-width-170 full-width">
                <select class="form-control max-width-170" onchange="FileManager.goToSite(this, 'right');" title="">
                                                                        <option class="" value="">Переход к сайту</option>
                        
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==">a0893058.xsph.ru</option>
                                            
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhOREF5TXpnME1Ea3lNWEU0TXpBNU5UY3VZMjl0TDNCMVlteHBZMTlvZEcxcyJ9">a4023840921q830957.com</option>
                                    </select>
            </div>
            <div class="visible-md visible-sm visible-xs max-width-170 full-width" style="clear:both;">
                <select class="form-control block" onchange="FileManager.goToSite(this, 'right');" title="">
                                                                        <option class="" value="">Переход к сайту</option>
                        
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ==">a0893058.xsph.ru</option>
                                            
                        <option value="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhOREF5TXpnME1Ea3lNWEU0TXpBNU5UY3VZMjl0TDNCMVlteHBZMTlvZEcxcyJ9">a4023840921q830957.com</option>
                                    </select>
            </div>
        </div>

        <div class="fm-dz-message hidden">
            <span class="text-center"><h2>Отпустите файлы для начала загрузки</h2></span>
        </div>
    </div>

    <div class="ibox-content">
        <div id="file-manager-right" class="crutch-loader">
            
<script> FileManager.current_count.right = 7</script>
<div class="block m-b">
    <p id="current-position-right" class="strong" data-path="eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=">/home/a0893058/</p>
</div>

<table class="table table-bordered table-condensed table-hover table-striped table-fixed file-manager">
    <thead>
    <tr>
        <th class="text-center" width="44">
                            <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select_all-right_id"
               name="select_all-right"
                value=""                                title="Выбрать/отменить все элементы"onclick="FileManager.selectAll(this)"        /><label class="custom-input__label" for="select_all-right_id" id="select_all-right_id_label"></label></div>
                    </th>
        <th class="text-left">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[right]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=&amp;p=right&sort=name_desc"
       onclick="pd(event); FileManager.current_sort.right = 'name_desc'; FileManager.current_page.right = 1; FileManager.getFiles('right','eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=', null, null, 'name_desc')">
        Имя файла<i class="fa m-l-sm fa-sort-asc"></i></a>        </th>
        <th class="text-center hidden-xs" width="95">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[right]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=&amp;p=right&sort=size_asc"
       onclick="pd(event); FileManager.current_sort.right = 'size_asc'; FileManager.current_page.right = 1; FileManager.getFiles('right','eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=', null, null, 'size_asc')">
        Размер<i class="fa m-l-sm fa-sort"></i></a>        </th>
        <th class="text-center hidden-xs" width="80">Права</th>
        <th class="text-center hidden-xs" width="125">
            <a class="btn btn-link btn-xs btn-sort strong" href="/customer/files/get-files?path[right]=eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=&amp;p=right&sort=mtime_asc"
       onclick="pd(event); FileManager.current_sort.right = 'mtime_asc'; FileManager.current_page.right = 1; FileManager.getFiles('right','eyJlbmNvZGluZyI6IlVURi04IiwiYmFzZTY0IjoiIn0=', null, null, 'mtime_asc')">
        Изменен<i class="fa m-l-sm fa-sort"></i></a>        </th>
    </tr>
    </thead>
    <tbody class="file-manager-list-body">
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-rightdomains_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ=="
               name="select-file-rightdomains"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ=="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="domains"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiWkc5dFlXbHVjdz09In0="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ=="data-path_str="/home/a0893058/domains"data-type="dir"data-size="4096"        /><label class="custom-input__label" for="select-file-rightdomains_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==" id="select-file-rightdomains_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-dir">
                                    <span class="file-rename-list">
                        <a href="/customer/files/get-files?path[right]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==&p=right&sort=name_asc&path%5Bleft%5D=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ%3D%3D"
                           onclick="pd(event); FileManager.getFiles('right', 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==', null, null, 'name_asc', 'scroll');"
                                >
                            domains
                        </a>
                    </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN3PT0ifQ==', '/home/a0893058/domains', 'directory');" title="Изменить права доступа">755</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">05.12.2023 01:42</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-righttmp_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0="
               name="select-file-righttmp"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name="tmp"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiZEcxdyJ9"data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0="data-path_str="/home/a0893058/tmp"data-type="dir"data-size="4096"        /><label class="custom-input__label" for="select-file-righttmp_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0=" id="select-file-righttmp_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0=_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-dir">
                                    <span class="file-rename-list">
                        <a href="/customer/files/get-files?path[right]=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0=&p=right&sort=name_asc&path%5Bleft%5D=eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZaRzl0WVdsdWN5OWhNRGc1TXpBMU9DNTRjM0JvTG5KMUwzQjFZbXhwWTE5b2RHMXMifQ%3D%3D"
                           onclick="pd(event); FileManager.getFiles('right', 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0=', null, null, 'name_asc', 'scroll');"
                                >
                            tmp
                        </a>
                    </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZkRzF3In0=', '/home/a0893058/tmp', 'directory');" title="Изменить права доступа">755</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-right.bash_logout_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0="
               name="select-file-right.bash_logout"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".bash_logout"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG1KaGMyaGZiRzluYjNWMCJ9"data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0="data-path_str="/home/a0893058/.bash_logout"data-type="file"data-size="18"        /><label class="custom-input__label" for="select-file-right.bash_logout_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0=" id="select-file-right.bash_logout_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0=_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0=', '/home/a0893058/.bash_logout', 'ASCII');">
                                .bash_logout
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.02 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmJHOW5iM1YwIn0=', '/home/a0893058/.bash_logout', 'regular file');" title="Изменить права доступа">644</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-right.bash_profile_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9"
               name="select-file-right.bash_profile"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9"                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".bash_profile"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG1KaGMyaGZjSEp2Wm1sc1pRPT0ifQ=="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9"data-path_str="/home/a0893058/.bash_profile"data-type="file"data-size="246"        /><label class="custom-input__label" for="select-file-right.bash_profile_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9" id="select-file-right.bash_profile_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9', '/home/a0893058/.bash_profile', 'ASCII');">
                                .bash_profile
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.24 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoZmNISnZabWxzWlE9PSJ9', '/home/a0893058/.bash_profile', 'regular file');" title="Изменить права доступа">644</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-right.bashrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ=="
               name="select-file-right.bashrc"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ=="                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".bashrc"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG1KaGMyaHlZdz09In0="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ=="data-path_str="/home/a0893058/.bashrc"data-type="file"data-size="393"        /><label class="custom-input__label" for="select-file-right.bashrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ==" id="select-file-right.bashrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ==_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ==', '/home/a0893058/.bashrc', 'ASCII');">
                                .bashrc
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.38 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbUpoYzJoeVl3PT0ifQ==', '/home/a0893058/.bashrc', 'regular file');" title="Изменить права доступа">644</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-right.i18n_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9"
               name="select-file-right.i18n"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9"                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".i18n"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG1reE9HND0ifQ=="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9"data-path_str="/home/a0893058/.i18n"data-type="file"data-size="19"        /><label class="custom-input__label" for="select-file-right.i18n_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9" id="select-file-right.i18n_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9', '/home/a0893058/.i18n', 'ASCII');">
                                .i18n
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.02 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbWt4T0c0PSJ9', '/home/a0893058/.i18n', 'regular file');" title="Изменить права доступа">644</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
            
        
        
                            
        
        <tr class="file-row">
            <td class="text-center" width="44">
                                    <div class="custom-input custom-input_default custom-input_checkbox custom-input_primary"><input type="checkbox"
               id="select-file-right.zshrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9"
               name="select-file-right.zshrc"
                value="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9"                                class="select-files"onclick="FileManager.selectToggle(this)"data-name=".zshrc"data-original="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTG5wemFISmoifQ=="data-path="eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9"data-path_str="/home/a0893058/.zshrc"data-type="file"data-size="658"        /><label class="custom-input__label" for="select-file-right.zshrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9" id="select-file-right.zshrc_eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9_label"></label></div>
                            </td>
            <td class="text-left col-name sel-file-show ftype-file">
                                    <span class="file-rename-list">
                                                    <a href="" title="Открыть для редактирования"
                               onclick="pd(event); FileManager.editFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9', '/home/a0893058/.zshrc', 'ASCII');">
                                .zshrc
                            </a>
                                            </span>
                            </td>
            <td class="text-right hidden-xs sel-file-show">
                                        0.64 Кб
                            </td>
            <td class="text-center hidden-xs sel-file-show col-chmod">
                                <a onclick="pd(event); FileManager.chmodFile(this, 'eyJlbmNvZGluZyI6ImFzY2lpIiwiYmFzZTY0IjoiTDJodmJXVXZZVEE0T1RNd05UZ3ZMbnB6YUhKaiJ9', '/home/a0893058/.zshrc', 'regular file');" title="Изменить права доступа">644</a>
            </td>
            <td class="text-center hidden-xs sel-file-show">04.12.2023 19:06</td>
        </tr>
        </tbody>
</table>

    <div class="clearfix">
                
    <ul class="pagination pull-right">
        
        <li class="info text-muted disabled">
                                                </li>
            </ul>
    </div>
        </div>
    </div>

    <script type="text/javascript">
            //Фикс для пустых блоков ('.btn-group');
            if(window.location.pathname === '/customer/files/manager'){
                let btnGroup = document.querySelectorAll('.btn-group');
                btnGroup.forEach((item)=>{
                    if(item.querySelector('.btn') == null){
                        item.style.display = 'none';
                    }
                });
            }
    </script>

            </div>
        </div>
    </div>


    <div class="classic-overlay hidden" data-modal-type="overlay" data-modal-action="close">
        <div id="js-validate-edit-dir" class="c-modal hidden" data-modal-type = "modal">
            <div class="content-modal cl-flex-col">
                <style>
                    .c-modal{
                        padding-top: 32px;
                        border: 0;
                    }

                    .content-modal{
                        padding: 0;
                    }

                    .content-modal__desc{
                        margin: 0px 0 24px 0;
                        font-family: Open Sans, 'sans-serif';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 15px;
                        line-height: 20px;
                        color: #060614E0;
                    }
                </style>
                <div class="content-modal__desc"></div>
                <button onclick="yandexMetrika.getReachGoals('file_manager_okey'); return true;" data-modal-action="close"  class="cl-v3-btn-base cl-v3-btn-base--main cl-v3-btn-base--lg">
                    Понятно
                </button>
            </div>
        </div>
    </div>
                </div>
                <div id="overlay-alert"></div>
                            </main>
            <div id="shackle-menu"></div>
<script src="https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-with-polyfills-latest.js"></script>
<script src="/js/vuedist/js/shackleMenu.js?1701693378044"></script>
<!--Tippy.js-->



            <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m, e, t, r, i, k, a) {
                m[i]   = m[i] || function() {(m[i].a = m[i].a || []).push(arguments)};
                m[i].l = 1 * new Date();
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "/js/metrika-tag.js", "ym");
            
            ym(19760185, "init", {
                trustedDomains: ["jivochat.com", "jivo.ru", "jivosite.com"],
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                params: {
                    "ip": "78.31.67.163",
                    "login": "a0893058",
                    "type": "test",
                    "package": "plus10"
                },
                childIframe:true
            });
        </script>
        <noscript><div><img src="/img/metrika/metrika-pixel.gif" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->        
    
<script>
    var yandexMetrika = {};

    yandexMetrika.getReachGoals = function (typeGoal){
      if (typeof (ym) !== 'undefined') {
        ym(19760185,'reachGoal', typeGoal)
      }
    }

    window.yandexMetrika = yandexMetrika;

</script>


<script type='text/javascript'>
  window.isSprinthostDomain = '1';
  window.JivoUserToken = 'v13CSBKWcqosReX08szPm+ScW1yXHsEK0bmwzN4EjnDyYJXLoum43b1R+/HC5kD4xkRDkfuiMQRuAXgmEMOzUu9oukBXzDq4GZYR3Ggj1l5uf0gZbhCO9g8yljO6bCeCUbM2C3s3Pho+L3gmts9fOaMkZNStr9UR6H32afNmLh/tV1cl5Kk+tzaTc1wJZC827MofcF4D5ZGC4SUHXv3d8//HloN++/Z/1qf2Aph+fZ/q2qWbCy8d8YbVskagBhDACUdA410+HZNdxq5XGBoLXgd0nu3ykFg4Ai4BJNqMr7j9OCcNWslooHb8bDueMdn7i14al9u4tWNGvDjukXjeaw==';
</script>

    <script type='text/javascript' src="/js/JivoSite.js"></script>
        </div>
        <div id="v-side-bar-overlay"></div>

        <!--Overlays-->
        <div id="overlay-modal"></div>
        <div id="slide-overlay"></div>
        <div id="task-process" class="hidden-simple" data-task=""></div>
        <script type="text/javascript" src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/lib/metisMenu/dist/metisMenu.min.js"></script>
<script type="text/javascript" src="/lib/slimScroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/lib/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="/lib/toastr/toastr.min.js"></script>


        <div
    id="alert_modal"
    class="modal"
    tabindex="-1"
    role="dialog"
    aria-hidden="true"
>
    <div class="modal-dialog modal-xs">
        <div class="modal-content">

                            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
                    <h4 class="modal-title">Сообщение</h4>
                </div>
            
            <div class="modal-body"></div>

                    </div>
    </div>
</div>            <script>
        dr(function() {
            Validator.setErrors('{"defaultMessage":"Некорректное значение","email":"Некорректный адрес электронной почты","url":"Некорректный URL адрес","number":"Значение не является числом","integer":"Значение не является целым числом","digits":"Введите только цифры","alphanum":"Введите буквенно-цифровое значение","notblank":"Это поле должно быть заполнено","required":"Обязательное поле","pattern":"Это значение некорректно","min":"Значение должно быть не менее чем %s","max":"Значение должно быть не более чем %s","range":"Это значение должно быть от %s до %s","minlength":"Введите не менее %s символов","maxlength":"Введите не более %s символов","length":"Введите от %s до %s символов","mincheck":"Выберите не менее %s значений","maxcheck":"Выберите не более %s значений","check":"Выберите от %s до %s значений","equalto":"Значения должны совпадать","full-name":"Некорректное ФИО.","db-name":"Некорректное значение. Допускаются латинские буквы, цифры, нижнее подчеркивание и тире.","db-user":"Некорректное значение. Допускаются латинские буквы, цифры, нижнее подчеркивание и тире.","date":"Некорректная дата","date-birth":"Некорректная дата рождения","password":"Значение пароля содержит недопустимые символы. Допускаются латинские буквы, цифры и спецсимволы ! $ % @ #","phone":"Некорректный номер телефона. Допускаются только цифры и первый знак плюса.","ipv4":"Некорректный IP-адрес","ipv6":"Некорректный IP-адрес"}');
        });
    </script>
        
                
                <div style="display: none" id="checking-pay-result-preloader" class="checkout-result checking-pay-result-preloader">
    <div class="checkout-result__content">
        <div class="checkout-result-loader">
            <p class="checkout-result-loader__title">Проверяем платеж</p>
            <p class="checkout-result-loader__text">Нужно немного подождать...</p>
        </div>
    </div>
</div>

        <script type="text/javascript" src="/js/vuedist/js/Freeze.js?1701693378044"></script>
    </body>
</html>
