<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div id="sidebar-nav">
        <?php
        $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_LIST,
            'items' => array_merge(array(
                array('label' => '主菜单'),
//                array('label' => '控制面板', 'icon' => 'home', 'url' => array('/site/index')),
//                array('label' => '内容分类', 'icon' => 'bookmark', 'url' => array('/cms/contentCategory/admin')),
//                array('label' => '单页管理', 'icon' => 'leaf', 'url' => array('/cms/page/admin')),
//                array('label' => '文章管理', 'icon' => 'book', 'url' => array('/cms/article/admin')),
//                array('label' => '新闻管理', 'icon' => 'book','url' => array('/cms/news/admin')),
//                array('label' => '留言管理', 'icon' => 'envelope', 'url' => array('/cms/feedback/admin')),
//                array('label' => '视频管理', 'icon' => 'film','url' => array('/cms/video/admin')),
                array('label' => '广告管理', 'icon' => 'facetime-video', 'url' => array('/cms/ad/admin')),
//                array('label' => '友情链接', 'icon' => 'share', 'url' => array('/cms/friendLink/admin')),
//                array('label' => '邮件订阅', 'icon' => 'envelope', 'url' => array('/cms/newsletterSubscriber/admin')),
//                array('label' => '客服管理', 'icon' => 'user', 'url' => array('/cms/customerService/admin')),
                array('label' => '子目录'),
            ), $this->menu),
        ));
        ?>
    </div>
    <div id="sidebar-content">
        <div class="row-fluid">
            <div class="span12">
                <?php if (isset($this->breadcrumbs)): ?>
                    <?php
                    $this->widget('bootstrap.widgets.TbBreadcrumb', array(
                        'links' => $this->breadcrumbs,
                    ));
                    ?>
                    <!-- breadcrumbs -->
                <?php endif ?>
                <?php echo $content; ?>
            </div>
        </div>
    </div>
<?php $this->endContent(); ?>