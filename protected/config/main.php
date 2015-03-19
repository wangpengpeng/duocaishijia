<?php

/************************
 * Alias Definition Area
 ************************/

define("sql",true);
/*
 *远程开启webservice_url,也就是erp的webservice的url
 * 服务器     http://183.81.182.4:8090/nerp/services/DCService?wsdl
 * 李峰个人   http://183.81.182.11:8080/nerp/services/DCService?wsdl
*/
//define("webservice_url",);
//	$baseurl2 =	Yii::app()->request->hostInfo;
//	$baseurlxml = $baseurl2 ."/DCService.xml";
//	define("webservice_url","$baseurlxml");
define("webservice_url","http://local.dcsj.com/api/DCService.xml");
//define("webservice_url","http://192.168.168.1/nerp/services/DCService?wsdl");
$configDir = dirname(__FILE__);
$frontend = dirname($configDir); //Protected folder
$backend = $frontend . DIRECTORY_SEPARATOR . 'backend';
$rootDir = dirname($frontend);   //Project entry == basePath in Basic Version

$extDir = $frontend . DIRECTORY_SEPARATOR . 'extensions';
Yii::setPathOfAlias('backend', $backend);
Yii::setPathOfAlias('smx', __DIR__ . '/../libshared');
Yii::setPathOfAlias('widgets', $frontend . DIRECTORY_SEPARATOR . 'widgets');
// Yiistrap configuration
Yii::setPathOfAlias('bootstrap', $extDir . DIRECTORY_SEPARATOR . 'bootstrap'); // Change if necessary
// YiiWheels configuration
Yii::setPathOfAlias('yiiwheels', $extDir . DIRECTORY_SEPARATOR . 'yiiwheels'); // Change if necessary
// Xupload configuration
Yii::setPathOfAlias('xupload', $extDir . DIRECTORY_SEPARATOR . 'xupload'); // Change if necessary

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => $frontend,
    'name' => '多彩饰家商城',

    'language' => 'zh_cn',
    'theme' => 'default',
    // preloading 'log' component
    'preload' => array('log'),//, 'translate'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.components.helpers.*',
	    'application.libshared.*',
	    'application.libshared.exceptions.*',
        'application.modules.cms.models.*',
        'application.modules.mall.models.*',
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        'application.modules.alipay.*',
//        'application.modules.translate.TranslateModule',
        'bootstrap.helpers.TbHtml',
        'ext.shoppingCart.*',
        'application.modules.install.models.*',
        'application.modules.install.components.*',
    ),
    // path aliases
    'aliases' => array(
        // Uncomment the following statement to register path alias.
        //    'alias' => realpath(__DIR__ . '/../extensions/aliasRealPath'), // change it to fit your need
    ),
    'modules' => array(
        'plugin' => array(
            'class' => 'application.modules.plugin.PluginModule', # Module path alias
            'pluginRoot' => 'application.plugin',   # Folder for plugins,make sure it is writeable.
            'layout' => '//layouts/main',            # layout of admin control panel.
        ),
        'alipay' => array(
            'class' => 'application.modules.alipay.alipayModule', # Module path alias
            'pluginRoot' => 'application.alipay',   # Folder for plugins,make sure it is writeable.
            'layout' => '//layouts/main',            # layout of admin control panel.
        ),
        'comments' => array(
            //you may override default config for all connecting models
            'defaultModelConfig' => array(
                //only registered users can post comments
                'registeredOnly' => false,
                'useCaptcha' => false,
                //allow comment tree
                'allowSubcommenting' => true,
                //display comments after moderation
                'premoderate' => false,
                //action for postig comment
                'postCommentAction' => 'comments/comment/postComment',
                //super user condition(display comment list in admin view and automoderate comments)
                'isSuperuser' => 'Yii::app()->user->checkAccess("moderate")',
                //order direction for comments
                'orderComments' => 'DESC',
            ),
            //the models for commenting
            'commentableModels' => array(
                //model with individual settings
                'Article' => array(
                    'registeredOnly' => false,
                    'useCaptcha' => true,
                    'allowSubcommenting' => false,
                    //config for create link to view model page(page with comments)
                    'pageUrl' => array(
                        'route' => 'article/view',
                        'data' => array('id' => 'article_id'),
                    ),
                ),
                //model with default settings
                'ImpressionSet',
            ),
            //config for user models, which is used in application
            'userConfig' => array(
                'class' => 'User',
                'nameProperty' => 'username',
                'emailProperty' => 'email',
            ),
        ),
        'install',
        // uncomment the following to enable the Gii tool
        'member',
//        'translate',
        'cms' => array(
            'class' => 'application.modules.cms.CmsModule'
        ),
        'user' => array(
            'class' => 'application.modules.user.UserModule',
            # encrypting method (php hash function)
            'hash' => 'md5',
            # send activation email
            'sendActivationMail' => true,
            # allow access for non-activated users
            'loginNotActiv' => false,
            # activate user on registration (only sendActivationMail = false)
            'activeAfterRegister' => false,
            # automatically login from registration
            'autoLogin' => true,
            # registration path
            'registrationUrl' => array('/user/registration'),
            # recovery password path
            'recoveryUrl' => array('/user/recovery'),
            # login form path
            'loginUrl' => array('/user/login'),
            # page after login
            'returnUrl' => array('/user/profile'),
            # page after logout
            'returnLogoutUrl' => array('/user/login'),
        ),
	    'request' => array(
		    'class' => 'DcsjHttpRequest'
	    ),
        'mall' => array(
            'class' => 'application.modules.mall.MallModule'
        ),
        'review',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array('bootstrap.gii'),
        ),
    ),
    // application components
    'components' => array(
        'plugin' => array(
            'class' => 'application.modules.plugin.components.HookRender', # HookRender path alias
        ),
        'seo' => array(
            'class' => 'application.modules.yiiseo.components.SeoExt',
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'class' => 'WebUser',
            'loginUrl' => array('/user/login'),
            'stateKeyPrefix' => 'front_',
        ),
//        'bootstrap' => array(
//            'class' => 'bootstrap.components.Bootstrap',
//            'responsiveCss' => true,
//            'fontAwesomeCss' => true,
////            'enableCdn' => true,
//        ),
        // yiistrap configuration
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        // yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'ext.yiiwheels.YiiWheels',
        ),
        'cart' => array(
            'class' => 'ext.shoppingCart.EShoppingCart',
        ),
        'mailer' => array(
            'class' => 'ext.mailer.EMailer',
            'pathViews' => 'application.views.email',
            'pathLayouts' => 'application.views.email.layouts'
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
	            '<city:\d+>' => 'site/index',
                'page/<key:\w+>' => 'page/index',
//                'catalog/<cat:\w+>' => 'catalog/index',
//                'catalog/<cat:\w+>/<prop:.*?*>' => 'catalog/index',
                'list/<category_id:\d+>' => 'item/index',
                'item-list-<key:\w+>' => 'item/list',
//                        'item-<id:\d+>' => 'item/view',
                'item/<id:\d+>/<props:\d+:\d+>' => 'item/view',
                'item/<id:\d+>/<title:.*?>' => 'item/view',
                'article/<id:\d+>/<title:.*?>' => 'article/view',
                '<_c:\w+>/<id:\d+>' => '<_c>/view',
                '<_c:\w+>/<_a:\w+>/<id:\d+>' => '<_c>/<_a>',
                '<_c:\w+>/<_a:\w+>' => '<_c>/<_a>',
                '<_m:\w+>/<_c:\w+>/<id:\d+>' => '<_m>/<_c>/view',
                '<_m:\w+>/<_c:\w+>/<_a:\w+>-<id:\d+>' => '<_m>/<_c>/<_a>',
                '<_m:\w+>/<_c:\w+>/<_a:\w+>' => '<_m>/<_c>/<_a>',
            ),
        ),

        /* setup message translation method */
        'messages' => array(
            'class' => 'CPhpMessageSource',
//            'basePath' => 'protected/messages',
//            'onMissingTranslation' => array('Ei18n', 'missingTranslation'),
//            'sourceMessageTable' => 'source_message',
//            'translatedMessageTable' => 'message'
        ),
        /* setup global translate application component */
//        'translate' => array(
//            'class' => 'translate.components.Ei18n',
//            'createTranslationTables' => true,
//            'connectionID' => 'db',
//            'languages' => array(
//                'en' => 'English',
//                'de' => 'German',
//                'zh_cn' => 'Chinese',
//                'en_us' => 'America',
//                'ru' => 'Russian'
//            )
//        ),
        'cache' => array(
            'class' => 'system.caching.CFileCache',
        ),
        'settings' => array(
            'class' => 'ext.CmsSettings',
            'cacheComponentId' => 'cache',
            'cacheId' => 'global_website_settings',
            'cacheTime' => 0,
            'tableName' => '{{settings}}',
            'dbComponentId' => 'db',
            'createTable' => true,
            'dbEngine' => 'InnoDB',
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=lzdcsj',
            'emulatePrepare' => true,
            'username' => 'duocai',
            'password' => 'www!!@@##',
            'charset' => 'utf8',
            'tablePrefix' => ''
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'error, warning',
                    'showInFireBug' => true,
                ),
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
        'trustedIps' => array(
	        '10.*',
	        '192.168.*',
	        'localhost',
	        '127.0.0.1',
			'*',
        ),
    ),
);