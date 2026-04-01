<?php get_header(); ?>

<div class="middle">
    <div class="bigcolumn">
        <div class="content_center">
            <div class="page-all">
                <div class="page-top">
                    <div class="containerI">
                        <div class="post">
                            <h1><?php the_title(); ?></h1>
                            <div class="post-tags">
                                <span>Рекламное место свободно.</span> | 
                                <a href="/" style="color: #c30909;">
                                    <b>Обсудить на форуме</b>
                                </a>
                            </div>
                            <?php the_content();?>
                            <img alt="Система Orphus" style="margin-top: 10px;" src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/02/orphrbk.png" width="70" height="21">
                            <i style="font-size: 12px;">Ошибка в тексте? Выделите её мышкой и нажмите: Ctrl + Enter</i>
                            <div class="post-tags">Теги: .</div>
                            <div class="post-tags">
                                <a href="/">Постоянный адрес новости</a> | 
                                <a id="link_copy-blog" href="/">Код для вставки в блог</a> | 
                                <a href="/">Отправить другу</a> | 
                                <a href="/">Обсудить на форуме</a> | 
                                <a href="/<?php echo get_page_uri(); ?>">Rss</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="featured2">
                <div class="content">
                    <div class="sm-w">
                        <h2>Работа. <a href="/">Резюме</a> / <a href="/">Вакансии</a></h2>
                        <div class="clear"></div>
                    </div>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="Kot2">
                        <tbody>
                            <tr>
                                <td><a href="/" style="font-size:110%" title="Охранник">Охранник</a><br><span class="SmallGrey"> Резюме:  Москва</span></td>
                                <td> <span style="font-weight:700">от 20000</span><br><span class="SmallGrey"><?php echo get_the_date('j F Y'); ?> </span></td>
                            </tr>
                            <tr>
                                <td><a href="/" style="font-size:110%" title="Работники на вахту в Москву">Работники на вахту в Москву</a><br><span class="SmallGrey"> Вакансии:  Москва</span></td>
                                <td> <span style="font-weight:700">з/п не указана</span><br><span class="SmallGrey"><?php echo get_the_date('j F Y'); ?> </span></td>
                            </tr>
                            <tr>
                                <td><a href="/" style="font-size:110%" title="Сотрудники на производство (вахта в Москве)">Сотрудники на производство (вахта в Москве)</a><br><span class="SmallGrey"> Вакансии:  Москва</span></td>
                                <td> <span style="font-weight:700">з/п не указана</span><br><span class="SmallGrey"><?php echo get_the_date('j F Y'); ?> </span></td>
                            </tr>
                            <tr>
                                <td><a href="/" style="font-size:110%" title="Любая">Любая</a><br><span class="SmallGrey"> Резюме:  Санкт-Петербург</span></td>
                                <td> <span style="font-weight:700">з/п не указана</span><br><span class="SmallGrey"><?php echo get_the_date('j F Y'); ?> </span></td>
                            </tr>
                            <tr>
                                <td><a href="/" style="font-size:110%" title="Методист, специалист отдела">Методист, специалист отдела</a><br><span class="SmallGrey"> Резюме:  Москва</span></td>
                                <td> <span style="font-weight:700">от 45000</span><br><span class="SmallGrey"><?php echo get_the_date('j F Y'); ?> </span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="footer"></div>
            </div>
        </div>
    </div>
    <?php
        get_template_part('templates/sidebar');
    ?>
    <?php
        get_template_part('templates/sidebar-right');
    ?>

<?php get_footer(); ?>
