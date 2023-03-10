<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
$body = [
    'title' => 'Settings',
    'desc'   => 'CMSNT Panel',
    'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
];
$body['header'] = '
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
<!-- CodeMirror -->
<link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/theme/monokai.css">
<!-- ckeditor -->
<script src="'.BASE_URL('public/ckeditor/ckeditor.js').'"></script>
<!-- Select2 -->
<link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
';
$body['footer'] = '
<!-- bootstrap color picker -->
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- CodeMirror -->
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/codemirror.js"></script>
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/mode/css/css.js"></script>
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/mode/xml/xml.js"></script>
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
<!-- Select2 -->
<script src="'.BASE_URL('public/AdminLTE3/').'plugins/select2/js/select2.full.min.js"></script>
<script>
$(function () {
    $(".select2").select2()
    $(".select2bs4").select2({
        theme: "bootstrap4"
    });
});
</script>
';
require_once(__DIR__.'/../../../models/is_admin.php');
require_once(__DIR__.'/header.php');
require_once(__DIR__.'/sidebar.php');
require_once(__DIR__.'/nav.php');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Settings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=BASE_URL('views/admin/index.php');?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    if (isset($_POST['SaveSettings'])) {
        if ($CMSNT->site('status_demo') != 0) {
            die('<script type="text/javascript">if(!alert("Kh??ng ???????c d??ng ch???c n??ng n??y v?? ????y l?? trang web demo.")){window.history.back().location.reload();}</script>');
        }
        foreach ($_POST as $key => $value) {
            $CMSNT->update("settings", array(
                'value' => $value
            ), " `name` = '$key' ");
        }
        die('<script type="text/javascript">if(!alert("L??u th??nh c??ng !")){window.history.back().location.reload();}</script>');
    } ?>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12">
                    <div class="card card-dark card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">TH??NG TIN CHUNG</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="bot-telegram-tab" data-toggle="pill" href="#bot-telegram"
                                        role="tab" aria-controls="bot-telegram" aria-selected="false">BOT TELEGRAM</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab10" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">HI???N TH??? S???N PH???M</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab11" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">GIAO D???CH ???O</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">NG??N H??NG AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab3" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">MOMO AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab4" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">ZALO PAY AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab5" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">THESIEURE AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab6" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">PAYPAL AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab7" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">N???P TH??? AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab8" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">PERFECT MONEY AUTO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#tab9" role="tab" aria-controls="custom-tabs-three-profile"
                                        aria-selected="false">CRYPTO AUTO</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title Sidebar</label>
                                                    <input type="text" class="form-control" name="menu_title"
                                                        value="<?=$CMSNT->site('menu_title');?>" placeholder="VD: CMSNT.CO">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Title (ti??u ????? khi share l??n m???ng x?? h???i)</label>
                                                    <input type="text" class="form-control" name="title"
                                                        value="<?=$CMSNT->site('title');?>" placeholder="VD: CMSNT.CO">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Description</label>
                                                    <input type="text" class="form-control" name="description"
                                                        value="<?=$CMSNT->site('description');?>"
                                                        placeholder="VD: H??? th???ng b??n m?? ngu???n website MMO uy t??n">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Keywords</label>
                                                    <input type="text" class="form-control" name="keywords"
                                                        value="<?=$CMSNT->site('keywords');?>"
                                                        placeholder="VD: cmsnt, b??n code, source code mmo">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Author</label>
                                                    <input type="text" class="form-control" name="author"
                                                        value="<?=$CMSNT->site('author');?>" placeholder="VD: CMSNT">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>M??u ch??? ?????o website:</label>
                                                    <div class="input-group my-colorpicker2">
                                                        <input type="text" name="theme_color"
                                                            value="<?=$CMSNT->site('theme_color');?>"
                                                            class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-square"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>M??u ph??? website:</label>
                                                    <div class="input-group my-colorpicker1">
                                                        <input type="text" name="theme_color2"
                                                            value="<?=$CMSNT->site('theme_color2');?>"
                                                            class="form-control">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fas fa-square"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2bs4" name="status">
                                                        <option <?=$CMSNT->site('status') == 1 ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option <?=$CMSNT->site('status') == 0 ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Ch???n OFF website s??? b???t ch??? ????? b???o tr??, ADMIN truy c???p b??nh
                                                        th?????ng.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status Update</label>
                                                    <select class="form-control select2bs4" name="status_update">
                                                        <option
                                                            <?=$CMSNT->site('status_update') == 1 ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option
                                                            <?=$CMSNT->site('status_update') == 0 ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Ch???n OFF website s??? t???t ch??? ????? c???p nh???t phi??n b???n t??? ?????ng</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Status Captcha</label>
                                                    <select class="form-control select2bs4" name="status_captcha">
                                                        <option
                                                            <?=$CMSNT->site('status_captcha') == 1 ? 'selected' : '';?>
                                                            value="1">ON
                                                        </option>
                                                        <option
                                                            <?=$CMSNT->site('status_captcha') == 0 ? 'selected' : '';?>
                                                            value="0">
                                                            OFF
                                                        </option>
                                                    </select>
                                                    <i>Ch???n OFF website s??? t???t Captcha ch???ng SPAM</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Hotline</label>
                                                    <input type="text" class="form-control" name="hotline"
                                                        value="<?=$CMSNT->site('hotline');?>"
                                                        placeholder="S??? ??i???n tho???i li??n h???">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="<?=$CMSNT->site('email');?>" placeholder="Email li??n h???">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email SMTP</label>
                                                    <input type="email" class="form-control" name="email_smtp"
                                                        value="<?=$CMSNT->site('email_smtp');?>"
                                                        placeholder="Nh???p ?????a ch??? Email SMTP">
                                                    <i>H?????ng d???n c???u h??nh SMTP <a target="_blank"
                                                            href="https://youtu.be/oIEeWStR8XI">t???i
                                                            ????y</a></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password Email SMTP</label>
                                                    <input type="text" class="form-control" name="pass_email_smtp"
                                                        value="<?=$CMSNT->site('pass_email_smtp');?>"
                                                        placeholder="Nh???p m???t kh???u Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Gi?? tr??? ????n h??ng t???i thi???u ????? d??ng
                                                        ????nh
                                                        gi??</label>
                                                    <input type="number" class="form-control" name="min_rating"
                                                        value="<?=$CMSNT->site('min_rating');?>"
                                                        placeholder="Nh???p gi?? tr??? ????n h??ng t???i thi???u ????? d??ng ????nh gi??">
                                                    <i>????n h??ng ph???i l???n h??n ho???c b???ng
                                                        <?=format_currency($CMSNT->site('min_rating'));?> m???i c?? th??? s???
                                                        d???ng
                                                        t??nh n??ng ????nh gi?? v?? ph???n h???i.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Th???i gian l??u phi??n ????ng
                                                        nh???p</label>
                                                    <input type="number" class="form-control" name="session_login"
                                                        value="<?=$CMSNT->site('session_login');?>"
                                                        placeholder="Nh???p th???i gian l??u phi??n ????ng nh???p">
                                                    <i>T??nh b???ng gi??y (<?=$CMSNT->site('session_login');?> =
                                                        <?=timeAgo2($CMSNT->site('session_login'));?>)</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">S??? ti???n n???p t???i thi???u</label>
                                                    <input type="number" class="form-control" name="min_recharge"
                                                        value="<?=$CMSNT->site('min_recharge');?>"
                                                        placeholder="VD 10000">
                                                    <i>S??? ti???n n???p t???i thi???u ????? ???????c t???o ho?? ????n n???p ti???n.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Th???i gian check live m???i
                                                        nick</label>
                                                    <input type="number" class="form-control" name="time_check_live"
                                                        value="<?=$CMSNT->site('time_check_live');?>"
                                                        placeholder="VD 1800">
                                                    <i>VD <?=$CMSNT->site('time_check_live');?> t???c m???i
                                                        <?=timeAgo2($CMSNT->site('time_check_live'));?> h??? th???ng m???i
                                                        check live
                                                        l???i nick ????, s??? c??ng cao th?? t??? l??? check live s??t c??ng th???p, n??n
                                                        ????? 1800
                                                        gi??y (30 ph??t)</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Ti???n t???</label>
                                                    <select class="form-control select2bs4" name="currency">
                                                        <option
                                                            <?=$CMSNT->site('currency') == 'VND' ? 'selected' : '';?>
                                                            value="VND"><?=__('VN??');?></option>
                                                        <option
                                                            <?=$CMSNT->site('currency') == 'USD' ? 'selected' : '';?>
                                                            value="USD"><?=__('USD');?></option>
                                                        <option
                                                            <?=$CMSNT->site('currency') == 'RMB' ? 'selected' : '';?>
                                                            value="RMB"><?=__('RMB');?></option>
                                                        <option
                                                            <?=$CMSNT->site('currency') == 'THB' ? 'selected' : '';?>
                                                            value="THB"><?=__('THB');?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">T??? gi?? USD</label>
                                                    <input type="number" class="form-control" name="usd_rate"
                                                        value="<?=$CMSNT->site('usd_rate');?>">
                                                    <i>H??? th???ng s??? quy ?????i 1 USD th??nh
                                                        <?=format_currency($CMSNT->site('usd_rate'));?>.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Th???i gian h???t h???n ho?? ????n</label>
                                                    <input type="number" class="form-control" name="invoice_expiration"
                                                        value="<?=$CMSNT->site('invoice_expiration');?>"
                                                        placeholder="VD 86400">
                                                    <i>VD <?=$CMSNT->site('invoice_expiration');?> t???c ho?? ????n n???p ti???n
                                                        s??? t???n
                                                        t???i trong
                                                        <?=timeAgo2($CMSNT->site('invoice_expiration'));?>.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hi???u ???ng nh???p chu???t</label>
                                                    <select class="form-control select2bs4" name="mouse_click_effect">
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 0 ? 'selected' : '';?>
                                                            value="0">T???t hi???u ???ng</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???u ???ng 1</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 2 ? 'selected' : '';?>
                                                            value="2">Hi???u ???ng 2</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 3 ? 'selected' : '';?>
                                                            value="3">Hi???u ???ng 3</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 4 ? 'selected' : '';?>
                                                            value="4">Hi???u ???ng 4</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 5 ? 'selected' : '';?>
                                                            value="5">Hi???u ???ng 5</option>
                                                        <option
                                                            <?=$CMSNT->site('mouse_click_effect') == 6 ? 'selected' : '';?>
                                                            value="6">Hi???u ???ng 6</option>
                                                    </select>
                                                    <i>Hi???u ???ng khi nh???p chu???t trong trang kh??ch.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF V??ng quay SPIN</label>
                                                    <select class="form-control select2bs4" name="status_spin">
                                                        <option <?=$CMSNT->site('status_spin') == 1 ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option <?=$CMSNT->site('status_spin') == 0 ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                    <i>H??? th???ng s??? t???t t??nh n??ng v??ng quay khi b???n ch???n Off.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Gi?? tr??? ????n h??ng nh???n SPIN</label>
                                                    <input type="number" class="form-control" name="condition_spin"
                                                        value="<?=$CMSNT->site('condition_spin');?>">
                                                    <i>????n h??ng c?? gi?? tr??? l???n h??n ho???c b???ng
                                                        <?=format_currency($CMSNT->site('condition_spin'));?> s??? nh???n
                                                        ???????c 1
                                                        l?????t quay (SPIN).</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Hi???n Th??? Giao D???ch G???n ????y</label>
                                                    <select class="form-control select2bs4"
                                                        name="status_giao_dich_gan_day">
                                                        <option
                                                            <?=$CMSNT->site('status_giao_dich_gan_day') == 1 ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option
                                                            <?=$CMSNT->site('status_giao_dich_gan_day') == 0 ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                    <i>Giao d???ch mua t??i kho???n g???n ????y ???????c hi???n th??? t???i trang home.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Login Tr?????c Khi Xem S???n Ph???m</label>
                                                    <select class="form-control select2bs4" name="sign_view_product">
                                                        <option
                                                            <?=$CMSNT->site('sign_view_product') == 1 ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option
                                                            <?=$CMSNT->site('sign_view_product') == 0 ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                    <i>N???u b???n ch???n ON, kh??ch s??? ph???i ????ng nh???p v??o m???i c?? th??? xem ???????c
                                                        s???n ph???m b???n ??ang b??n.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Font Family</label>
                                                    <input type="text" class="form-control" name="font_family"
                                                        value="<?=$CMSNT->site('font_family');?>">
                                                    <i><a type="button" data-toggle="modal"
                                                            data-target="#modal-hd-font-family" href="#">H?????ng d???n</a>
                                                        thay font website</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Th???i Gian Xo?? ????n H??ng</label>
                                                    <input type="number" class="form-control" name="time_delete_orders"
                                                        value="<?=$CMSNT->site('time_delete_orders');?>">
                                                    <i>H??? th???ng th???c hi???n xo?? ????n h??ng ???? mua sau khi ????? th???i gian b???n
                                                        ??i???u ch???nh, th???i gian t??nh b???ng gi??y 1 = 1 gi??y, SET th??nh 0 ?????
                                                        t???t ch???c n??ng n??y.</i>
                                                </div>
                                            </div>
                                            <?php if(checkAddon(4) == true):?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Top n???p ti???n</label>
                                                    <select class="form-control select2bs4" name="stt_topnap">
                                                        <option <?=$CMSNT->site('stt_topnap') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n th???</option>
                                                        <option <?=$CMSNT->site('stt_topnap') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php endif?>
                                            <?php if(checkAddon(211) == true):?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">S??? l?????ng ???? b??n ???o</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Nh???p s??? l?????ng ???o mu???n t??ng th??m (sl ???o + sl th???t)"
                                                        name="virtual_sold_quantity"
                                                        value="<?=$CMSNT->site('virtual_sold_quantity');?>">
                                                    <i>SET th??nh 0 n???u mu???n t???t ch???c n??ng n??y.</i>
                                                </div>
                                            </div>
                                            <?php endif?>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Duy???t th??nh vi??n khi ????ng k??</label>
                                                    <select class="form-control select2bs4" name="status_active_member">
                                                        <option
                                                            <?=$CMSNT->site('status_active_member') == 1 ? 'selected' : '';?>
                                                            value="1">B???t</option>
                                                        <option
                                                            <?=$CMSNT->site('status_active_member') == 0 ? 'selected' : '';?>
                                                            value="0">T???t</option>
                                                    </select>
                                                    <i>N???u ch???n ON, c??c th??nh vi??n khi ????ng k?? s??? ph???i c???n BQT duy???t m???i
                                                        c?? th??? s??? d???ng.</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Gi???i h???n th???i gian mua m???i
                                                        l?????t</label>
                                                    <input type="number" class="form-control" placeholder="VD: 10"
                                                        name="max_time_buy" value="<?=$CMSNT->site('max_time_buy');?>">
                                                    <i>V?? d??? nh???p v??o s??? <?=$CMSNT->site('max_time_buy');?>: t???c sau khi
                                                        mua h??ng, user ???? ph???i ?????i
                                                        <?=timeAgo2($CMSNT->site('max_time_buy'));?> m???i c?? th??? th???c
                                                        hi???n ti???p giao d???ch mua</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Th???i gian xo?? clone DIE t??nh theo
                                                        gi??y</label>
                                                    <input type="number" class="form-control"
                                                        placeholder="VD: 2592000 = 30 ng??y" name="time_delete_clone_die"
                                                        value="<?=$CMSNT->site('time_delete_clone_die');?>">
                                                    <i>V?? d??? nh???p <?=$CMSNT->site('time_delete_clone_die');?>: t???c h???
                                                        th???ng s??? t??? ?????ng xo?? c??c t??i kho???n DIE n???m tr??n h??? th???ng
                                                        <?=timeAgo2($CMSNT->site('time_delete_clone_die'));?>, ????? 0 ?????
                                                        t???t ch???c n??ng n??y</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Document API</label>
                                                    <select class="form-control select2bs4" name="display_api">
                                                        <option <?=$CMSNT->site('display_api') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n th???</option>
                                                        <option <?=$CMSNT->site('display_api') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Menu Li??n H???</label>
                                                    <select class="form-control select2bs4" name="display_contact">
                                                        <option
                                                            <?=$CMSNT->site('display_contact') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n th???</option>
                                                        <option
                                                            <?=$CMSNT->site('display_contact') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Menu C??ng C???</label>
                                                    <select class="form-control select2bs4" name="display_tool">
                                                        <option
                                                            <?=$CMSNT->site('display_tool') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n th???</option>
                                                        <option
                                                            <?=$CMSNT->site('display_tool') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF Change password ?????nh k???</label>
                                                    <select class="form-control select2bs4" name="status_is_change_password">
                                                        <option
                                                            <?=$CMSNT->site('status_is_change_password') == 1 ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option
                                                            <?=$CMSNT->site('status_is_change_password') == 0 ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Script Header</label>
                                                    <textarea id="codeMirrorDemo"
                                                        placeholder="Ch???a code live chat ho???c jquery trang tr??..."
                                                        name="javascript_header"><?=$CMSNT->site('javascript_header');?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Script Footer</label>
                                                    <textarea id="codeMirrorDemo2"
                                                        placeholder="Ch???a code live chat ho???c jquery trang tr??..."
                                                        name="javascript"><?=$CMSNT->site('javascript');?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="bot-telegram" role="tabpanel"
                                    aria-labelledby="bot-telegram-tab">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Lo???i th??ng b??o</label>
                                            <?php if(checkAddon(112246) == true):?>
                                            <select class="form-control select2bs4" name="type_notification">
                                                <option
                                                    <?=$CMSNT->site('type_notification') == 'telegram' ? 'selected' : '';?>
                                                    value="telegram">Telegram
                                                </option>
                                                <option
                                                    <?=$CMSNT->site('type_notification') == 'off' ? 'selected' : '';?>
                                                    value="off">OFF
                                                </option>
                                            </select>
                                            <?php else:?>
                                            <div class="alert alert-danger" role="alert">
                                                <div class="iq-alert-text">B???n ch??a k??ch ho???t Addon n??y!</div>
                                            </div>
                                            <?php endif?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Token Telegram (<a target="_blank"
                                                    href="https://cmsnt.vn/2022/05/huong-dan-cau-hinh-bot-thong-bao-qua-telegram/">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="token_telegram"
                                                value="<?=$CMSNT->site('token_telegram');?>"
                                                placeholder="5323330732:AAFpurxAdW9vGGPE_cZ2gU_kDP-__kAsOVc">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Chat ID Telegram (<a target="_blank"
                                                    href="https://cmsnt.vn/2022/05/huong-dan-cau-hinh-bot-thong-bao-qua-telegram/">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="chat_id_telegram"
                                                value="<?=$CMSNT->site('chat_id_telegram');?>" placeholder="-788267800">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">N???i dung th??ng b??o mua h??ng</label>
                                            <textarea name="buy_notification"
                                                class="form-control"><?=$CMSNT->site('buy_notification');?></textarea>
                                            <ul>
                                                <li><b>{domain}</b> => T??n website c???a qu?? kh??ch.</li>
                                                <li><b>{username}</b> => T??n kh??ch h??ng mua.</li>
                                                <li><b>{product_name}</b> => T??n s???n ph???m kh??ch h??ng mua.</li>
                                                <li><b>{method}</b> => Ph????ng th???c mua Website ho???c API.</li>
                                                <li><b>{amount}</b> => S??? l?????ng kh??ch h??ng mua.</li>
                                                <li><b>{price}</b> => S??? ti???n kh??ch h??ng thanh to??n.</li>
                                                <li><b>{trans_id}</b> => M?? ????n h??ng.</li>
                                                <li><b>{time}</b> => Th???i gian.</li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">N???i dung th??ng b??o khi ????ng k?? t??i
                                                kho???n</label>
                                            <textarea name="register_notification"
                                                class="form-control"><?=$CMSNT->site('register_notification');?></textarea>
                                            <ul>
                                                <li><b>{domain}</b> => T??n website c???a qu?? kh??ch.</li>
                                                <li><b>{username}</b> => T??n ????ng nh???p.</li>
                                                <li><b>{email}</b> => ?????a ch??? Email.</li>
                                                <li><b>{ip}</b> => ?????a ch??? IP.</li>
                                                <li><b>{device}</b> => Thi???t b???.</li>
                                                <li><b>{time}</b> => Th???i gian.</li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">N???i dung th??ng b??o n???p ti???n</label>
                                            <textarea name="naptien_notification"
                                                class="form-control"><?=$CMSNT->site('naptien_notification');?></textarea>
                                            <ul>
                                                <li><b>{domain}</b> => T??n website c???a qu?? kh??ch.</li>
                                                <li><b>{username}</b> => T??n kh??ch h??ng n???p.</li>
                                                <li><b>{method}</b> => Ph????ng th???c n???p.</li>
                                                <li><b>{amount}</b> => S??? ti???n n???p.</li>
                                                <li><b>{price}</b> => Th???c nh???n.</li>
                                                <li><b>{time}</b> => Th???i gian.</li>
                                            </ul>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-icon-left btn-block m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-profile-tab">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_bank">
                                                <option <?=$CMSNT->site('status_bank') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_bank') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng auto bank.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Server 1</label>
                                            <select class="form-control select2bs4" name="sv1_autobank">
                                                <option <?=$CMSNT->site('sv1_autobank') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('sv1_autobank') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>N???p ti???n theo ho?? ????n, qu??t QR code...</i><br>
                                            <i>??u ??i???m: d??? d??ng qu???n l?? v?? c???ng tay - Nh?????c ??i???m: x??? l?? ch???m h??n v??i
                                                ch???c gi??y.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Server 2</label>
                                            <?php if(checkAddon(24) == true):?>
                                            <select class="form-control select2bs4" name="sv2_autobank">
                                                <option <?=$CMSNT->site('sv2_autobank') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('sv2_autobank') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <?php else:?>
                                            <div class="alert alert-danger" role="alert">
                                                <div class="iq-alert-text">B???n ch??a k??ch ho???t Addon n??y!</div>
                                            </div>
                                            <?php endif?>
                                            <i>N???p ti???n theo n???i dung + id v?? d???:
                                                <?=$CMSNT->site('prefix_autobank').$getUser['id'];?></i><br>
                                            <i>??u ??i???m: x??? l?? nhanh - Nh?????c ??i???m: Kh?? c???ng th??? c??ng khi ng??n h??ng b???o
                                                tr??.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Ng??n h??ng</label>
                                            <select class="form-control select2bs4" name="type_bank">
                                                <?php foreach ($config_listbank as $bank) {?>
                                                <option <?=$CMSNT->site('type_bank') == $bank ? 'selected' : '';?>
                                                    value="<?=$bank;?>"><?=$bank;?>
                                                </option>
                                                <?php }?>
                                            </select>
                                            <i>Ch???n ng??n h??ng b???n c???n s??? d???ng.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Token Bank (<a type="button"
                                                    data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="token_bank"
                                                value="<?=$CMSNT->site('token_bank');?>"
                                                placeholder="Nh???p token ng??n h??ng">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">S??? t??i kho???n (<a type="button"
                                                    data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="stk_bank"
                                                value="<?=$CMSNT->site('stk_bank');?>"
                                                placeholder="Nh???p s??? t??i kho???n ng??n h??ng c???n Auto">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">M???t kh???u Internet Banking (<a type="button"
                                                    data-toggle="modal" data-target="#modal-hd-auto-bank" href="#">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="mk_bank"
                                                value="<?=$CMSNT->site('mk_bank');?>"
                                                placeholder="Nh???p m???t kh???u internet banking">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">N???i dung n???p</label>
                                            <input type="text" class="form-control" name="prefix_autobank"
                                                value="<?=$CMSNT->site('prefix_autobank');?>"
                                                placeholder="Ti???n t??? n???i dung n???p ti???n">
                                            <i>Ch??? ??p d???ng cho server 2</i>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-icon-left btn-block m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_momo">
                                                <option <?=$CMSNT->site('status_momo') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_momo') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng auto momo.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Token MOMO (<a type="button"
                                                    data-toggle="modal" data-target="#modal-hd-auto-momo" href="#">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="token_momo"
                                                value="<?=$CMSNT->site('token_momo');?>"
                                                placeholder="Nh???p token v?? momo">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="exampleInputEmail1">QR CODE (<a type="button"
                                                    data-toggle="modal" data-target="#modal-hd-auto-momo" href="#">Xem
                                                    h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="qr_momo"
                                                value="<?=$CMSNT->site('qr_momo');?>"
                                                placeholder="Nh???p link ???nh QRCODE">
                                        </div> -->
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_zalopay">
                                                <option <?=$CMSNT->site('status_zalopay') == 0 ? 'selected' : '';?>
                                                    value="0">
                                                    OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_zalopay') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng auto zalo pay.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Token Zalo Pay</label>
                                            <input type="text" class="form-control" name="token_zalopay"
                                                value="<?=$CMSNT->site('token_zalopay');?>"
                                                placeholder="Nh???p token zalo pay">
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_thesieure">
                                                <option <?=$CMSNT->site('status_thesieure') == 0 ? 'selected' : '';?>
                                                    value="0">
                                                    OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_thesieure') == 1 ? 'selected' : '';?>
                                                    value="1">
                                                    ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng auto thesieure.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Token THESIEURE</label>
                                            <input type="text" class="form-control" name="token_thesieure"
                                                value="<?=$CMSNT->site('token_thesieure');?>"
                                                placeholder="Nh???p token thesieure.com">
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_paypal">
                                                <option <?=$CMSNT->site('status_paypal') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_paypal') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng n???p paypal.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Client ID</label>
                                            <input type="text" class="form-control" name="clientId_paypal"
                                                value="<?=$CMSNT->site('clientId_paypal');?>"
                                                placeholder="Nh???p Client ID Paypal">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Client Secret</label>
                                            <input type="text" class="form-control" name="clientSecret_paypal"
                                                value="<?=$CMSNT->site('clientSecret_paypal');?>"
                                                placeholder="Nh???p Client Secret Paypal">
                                            <i>C??ch l???y Secret v?? ID Paypal t???i ????y: <a
                                                    href="https://youtu.be/6r17Wj3UlNE?t=13" target="_blank">Xem
                                                    Ngay</a></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rate Paypal</label>
                                            <input type="number" class="form-control" name="rate_paypal"
                                                value="<?=$CMSNT->site('rate_paypal');?>"
                                                placeholder="Nh???p Rate quy ?????i sang VND">
                                            <i>????? <?=$CMSNT->site('rate_paypal');?> t???c kh??ch n???p 1 USD s??? ???????c
                                                <?=format_currency($CMSNT->site('rate_paypal'));?></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ghi ch?? n???p paypal</label>
                                            <textarea id="paypal_notice"
                                                name="paypal_notice"><?=$CMSNT->site('paypal_notice');?></textarea>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_napthe">
                                                <option <?=$CMSNT->site('status_napthe') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_napthe') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng n???p th???.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Partner ID (<a type="button" data-toggle="modal"
                                                    data-target="#modal-hd-nap-the" href="#">Xem h?????ng d???n</a>)</label>
                                            <input type="text" name="partner_id_card"
                                                value="<?=$CMSNT->site('partner_id_card');?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Partner Key (<a type="button" data-toggle="modal"
                                                    data-target="#modal-hd-nap-the" href="#">Xem h?????ng d???n</a>)</label>
                                            <input type="text" name="partner_key_card"
                                                value="<?=$CMSNT->site('partner_key_card');?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ph?? N???p Th???</label>
                                            <input type="text" class="form-control" name="ck_napthe"
                                                value="<?=$CMSNT->site('ck_napthe');?>"
                                                placeholder="Nh???p ph?? n???p th??? n???u c?? n???p th???">
                                            <i>????? <?=$CMSNT->site('ck_napthe');?> t???c kh??ch n???p 100.000?? s??? ???????c
                                                <?=format_currency(100000 - 100000 * $CMSNT->site('ck_napthe') / 100);?></i><br>
                                            <i>????? ph?? = 0 n???u qu?? kh??ch mu???n c???ng cho user gi???ng th???c nh???n t???i h??? th???ng
                                                card24h.com</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ghi ch?? n???p th???</label>
                                            <textarea id="notice_napthe"
                                                name="notice_napthe"><?=$CMSNT->site('notice_napthe');?></textarea>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_perfectmoney">
                                                <option <?=$CMSNT->site('status_perfectmoney') == 0 ? 'selected' : '';?>
                                                    value="0">
                                                    OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_perfectmoney') == 1 ? 'selected' : '';?>
                                                    value="1">
                                                    ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? t???m d???ng n???p perfect money.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">M?? t??i kho???n Perfect Money</label>
                                            <input type="text" class="form-control" name="PAYEE_ACCOUNT_PM"
                                                value="<?=$CMSNT->site('PAYEE_ACCOUNT_PM');?>"
                                                placeholder="VD: U36599443">
                                            <i>V??o ????y ????? l???y m???t m?? t??i kho???n v?? ????n v??? ti???n t???: <a
                                                    href="https://perfectmoney.com/profile.html"
                                                    target="_blank">https://perfectmoney.com/profile.html</a></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">M???t kh???u Thay th??? (Alternate
                                                Passphrase)</label>
                                            <input type="text" class="form-control" name="perfectmoney_pass_pm"
                                                value="<?=$CMSNT->site('perfectmoney_pass_pm');?>"
                                                placeholder="Nh???p m???t kh???u thay th???">
                                            <i>V??o ????y ????? l???y m???t kh???u thay th???: <a
                                                    href="https://perfectmoney.com/settings.html"
                                                    target="_blank">https://perfectmoney.com/settings.html</a></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">????n v??? ti???n t???</label>
                                            <input type="text" class="form-control" name="PAYMENT_UNITS_PM"
                                                value="<?=$CMSNT->site('PAYMENT_UNITS_PM');?>"
                                                placeholder="Nh???p Rate quy ?????i sang VND">
                                            <i>VD: USD, BTC, EUR, GOLD</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rate PM</label>
                                            <input type="text" class="form-control" name="rate_pm"
                                                value="<?=$CMSNT->site('rate_pm');?>"
                                                placeholder="Nh???p Rate quy ?????i sang VND">
                                            <i>????? <?=$CMSNT->site('rate_pm');?> t???c kh??ch n???p 1 USD s??? ???????c
                                                <?=format_currency($CMSNT->site('rate_pm'));?></i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ghi ch?? n???p Perfect Money</label>
                                            <textarea id="perfectmoney_notice"
                                                name="perfectmoney_notice"><?=$CMSNT->site('perfectmoney_notice');?></textarea>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab9">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2bs4" name="status_crypto">
                                                <option <?=$CMSNT->site('status_crypto') == 0 ? 'selected' : '';?>
                                                    value="0">OFF
                                                </option>
                                                <option <?=$CMSNT->site('status_crypto') == 1 ? 'selected' : '';?>
                                                    value="1">ON
                                                </option>
                                            </select>
                                            <i>Ch???n OFF h??? th???ng s??? ???n n???p crypto.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">API Key (<a type="button" data-toggle="modal"
                                                    data-target="#modal-hd-crypto" href="#">Xem h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="apikey_nowpayments"
                                                value="<?=$CMSNT->site('apikey_nowpayments');?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">IPN (<a type="button" data-toggle="modal"
                                                    data-target="#modal-hd-crypto" href="#">Xem h?????ng d???n</a>)</label>
                                            <input type="text" class="form-control" name="ipn_nowpayments"
                                                value="<?=$CMSNT->site('ipn_nowpayments');?>"
                                                placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">S??? ti???n n???p t???i thi???u</label>
                                            <input type="number" class="form-control" name="min_crypto"
                                                value="<?=$CMSNT->site('min_crypto');?>"
                                                placeholder="S??? ti???n n???p t???i thi???u (nh???p USD)">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rate quy ?????i USD sang VN??</label>
                                            <input type="number" class="form-control" name="rate_crypto"
                                                value="<?=$CMSNT->site('rate_crypto');?>"
                                                placeholder="Nh???p m???nh gi?? VND quy ?????i sang 1 USD">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ghi ch?? th??ng tin crypto</label>
                                            <textarea id="notice_crypto"
                                                name="notice_crypto"><?=$CMSNT->site('notice_crypto');?></textarea>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab10">
                                    <form action="" method="POST">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hi???n th??? c???t ????nh gi?? s???n ph???m</label>
                                                    <select class="form-control select2bs4" name="display_rating">
                                                        <option
                                                            <?=$CMSNT->site('display_rating') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n Th???</option>
                                                        <option
                                                            <?=$CMSNT->site('display_rating') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hi???n th??? c???t s??? l?????ng ???? b??n</label>
                                                    <select class="form-control select2bs4" name="display_sold">
                                                        <option
                                                            <?=$CMSNT->site('display_sold') == 1 ? 'selected' : '';?>
                                                            value="1"><?=__('Hi???n th???');?></option>
                                                        <option
                                                            <?=$CMSNT->site('display_sold') == 0 ? 'selected' : '';?>
                                                            value="0"><?=__('???n');?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hi???n th??? c???t qu???c gia</label>
                                                    <select class="form-control select2bs4" name="display_country">
                                                        <option
                                                            <?=$CMSNT->site('display_country') == 1 ? 'selected' : '';?>
                                                            value="1"><?=__('Hi???n th???');?></option>
                                                        <option
                                                            <?=$CMSNT->site('display_country') == 0 ? 'selected' : '';?>
                                                            value="0"><?=__('???n');?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Hi???n th??? c???t xem tr?????c (preview)</label>
                                                    <select class="form-control select2bs4" name="display_preview">
                                                        <option
                                                            <?=$CMSNT->site('display_preview') == 1 ? 'selected' : '';?>
                                                            value="1"><?=__('Hi???n th???');?></option>
                                                        <option
                                                            <?=$CMSNT->site('display_preview') == 0 ? 'selected' : '';?>
                                                            value="0"><?=__('???n');?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Template giao di???n hi???n th??? s???n ph???m</label>
                                                    <select class="form-control select2bs4" name="display_show_product">
                                                        <option
                                                            <?=$CMSNT->site('display_show_product') == 1 ? 'selected' : '';?>
                                                            value="1">Template 1 (LIST, BOX)</option>
                                                        <option
                                                            <?=$CMSNT->site('display_show_product') == 2 ? 'selected' : '';?>
                                                            value="2">Template 2 (LIST, BOX)</option>
                                                        <?php if(checkAddon(1) == true):?>
                                                        <option
                                                            <?=$CMSNT->site('display_show_product') == 3 ? 'selected' : '';?>
                                                            value="3">Template 3 (LIST)</option>
                                                        <?php endif?>
                                                        <?php if(checkAddon(3) == true):?>
                                                        <option
                                                            <?=$CMSNT->site('display_show_product') == 4 ? 'selected' : '';?>
                                                            value="4">Template 4 (BOX)</option>
                                                        <?php endif?>
                                                    </select>
                                                    <i>Ch???n ki???u s???p x???p s???n ph???m</i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Lo???i hi???n th???</label>
                                                    <select class="form-control select2bs4" name="type_showProduct">
                                                        <option
                                                            <?=$CMSNT->site('type_showProduct') == 1 ? 'selected' : '';?>
                                                            value="1">D???ng BOX</option>
                                                        <option
                                                            <?=$CMSNT->site('type_showProduct') == 2 ? 'selected' : '';?>
                                                            value="2">D???ng LIST</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>ON/OFF S???n Ph???m G???i ??</label>
                                                    <select class="form-control select2bs4" name="display_box_shop">
                                                        <option
                                                            <?=$CMSNT->site('display_box_shop') == 1 ? 'selected' : '';?>
                                                            value="1">Hi???n Th???</option>
                                                        <option
                                                            <?=$CMSNT->site('display_box_shop') == 0 ? 'selected' : '';?>
                                                            value="0">???n</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>???n s???n ph???m khi h???t t??i kho???n</label>
                                                    <select class="form-control select2bs4" name="hide_product_empty">
                                                        <option
                                                            <?=$CMSNT->site('hide_product_empty') == 1 ? 'selected' : '';?>
                                                            value="1">ON</option>
                                                        <option
                                                            <?=$CMSNT->site('hide_product_empty') == 0 ? 'selected' : '';?>
                                                            value="0">OFF</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="tab11" role="tabpanel" aria-labelledby="tab10">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label>V??? tr?? hi???n giao d???ch g???n ????y</label>
                                            <select class="form-control select2bs4"
                                                name="position_gd_gan_day">
                                                <option
                                                    <?=$CMSNT->site('position_gd_gan_day') == 1 ? 'selected' : '';?>
                                                    value="1">TR??N S???N PH???M ??ANG B??N</option>
                                                <option
                                                    <?=$CMSNT->site('position_gd_gan_day') == 2 ? 'selected' : '';?>
                                                    value="2">D?????I S???N PH???M ??ANG B??N</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ON/OFF Giao d???ch g???n ????y</label>
                                            <select class="form-control select2bs4"
                                                name="status_giao_dich_gan_day">
                                                <option
                                                    <?=$CMSNT->site('status_giao_dich_gan_day') == 1 ? 'selected' : '';?>
                                                    value="1">ON</option>
                                                <option
                                                    <?=$CMSNT->site('status_giao_dich_gan_day') == 0 ? 'selected' : '';?>
                                                    value="0">OFF</option>
                                            </select>
                                            <i>Giao d???ch mua t??i kho???n g???n ????y ???????c hi???n th??? t???i trang home.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>ON/OFF T???o giao d???ch ???o</label>
                                            <?php if(checkAddon(2) == true):?>
                                            <select class="form-control select2bs4" name="stt_giaodichao">
                                                <option
                                                    <?=$CMSNT->site('stt_giaodichao') == 1 ? 'selected' : '';?>
                                                    value="1">B???t</option>
                                                <option
                                                    <?=$CMSNT->site('stt_giaodichao') == 0 ? 'selected' : '';?>
                                                    value="0">T???t</option>
                                            </select>
                                            <?php else:?>
                                            <div class="alert alert-danger" role="alert">
                                                <div class="iq-alert-text">B???n ch??a k??ch ho???t Addon n??y!</div>
                                            </div>
                                            <?php endif?>
                                            <i>H??? th???ng t??? t???o giao d???ch n???p ti???n v?? mua h??ng ???o ????? t??ng uy
                                                t??n.</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Kh??ng t???o giao d???ch ???o khi s???n ph???m h???t h??ng</label>
                                            <select class="form-control select2bs4"
                                                name="is_account_buy_fake">
                                                <option
                                                    <?=$CMSNT->site('is_account_buy_fake') == 1 ? 'selected' : '';?>
                                                    value="1">ON</option>
                                                <option
                                                    <?=$CMSNT->site('is_account_buy_fake') == 0 ? 'selected' : '';?>
                                                    value="0">OFF</option>
                                            </select>
                                            <i>Ch???n ON ????? ng??ng t???o giao d???ch ???o khi s???n ph???m h???t t??i kho???n (ch??? ??p d???ng cho s???n ph???m up l??n web, kh??ng ??p d???ng cho s???n ph???m API).</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">S??? l?????ng mua t???i thi???u</label>
                                            <input type="number" class="form-control" name="min_gd_ao"
                                                value="<?=$CMSNT->site('min_gd_ao');?>"
                                                placeholder="Nh???p s??? l?????ng mua t???i thi???u ???o">
                                                <i>S??? l?????ng mua ???o t???i thi???u cho 1 ????n h??ng.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">S??? l?????ng mua t???i ??a</label>
                                            <input type="number" class="form-control" name="max_gd_ao"
                                                value="<?=$CMSNT->site('max_gd_ao');?>"
                                                placeholder="Nh???p s??? l?????ng mua t???i ??a ???o">
                                                <i>S??? l?????ng mua ???o t???i ??a cho 1 ????n h??ng.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">T???c ????? t???o giao d???ch mua ???o</label>
                                            <input type="number" class="form-control" name="speed_buy_gd_ao"
                                                value="<?=$CMSNT->site('speed_buy_gd_ao');?>"
                                                placeholder="M???c ?????nh: 10">
                                                <i>T???c ????? t???o giao d???ch mua ???o, s??? c??ng b?? giao d???ch t???o ra c??ng nhanh.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">M???nh gi?? n???p ???o ng???u nhi??n</label>
                                            <textarea class="form-control" rows="4" placeholder="Nh???p s??? ti???n n???p ng???u nhi??n, 1 d??ng 1 m???nh gi?? " name="amount_nap_ao"><?=$CMSNT->site('amount_nap_ao');?></textarea>
                                                <i>T???c ????? t???o giao d???ch mua ???o, s??? c??ng b?? giao d???ch t???o ra c??ng nhanh.</i>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">T???c ????? t???o giao d???ch n???p ???o</label>
                                            <input type="number" class="form-control" name="speed_nap_gd_ao"
                                                value="<?=$CMSNT->site('speed_nap_gd_ao');?>"
                                                placeholder="M???c ?????nh: 10">
                                                <i>T???c ????? t???o giao d???ch n???p ???o, s??? c??ng b?? giao d???ch t???o ra c??ng nhanh.</i>
                                        </div>
                                        <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                            type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="col-lg-12 connectedSortable">
                    <form action="" method="POST">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-cogs mr-1"></i>
                                    C???U H??NH N???I DUNG
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn bg-success btn-sm" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn bg-warning btn-sm" data-card-widget="maximize"><i
                                            class="fas fa-expand"></i>
                                    </button>
                                    <button type="button" class="btn bg-danger btn-sm" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Th??ng b??o to??n h??? th???ng</label>
                                    <textarea id="thongbao" name="thongbao"><?=$CMSNT->site('thongbao');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ghi ch?? n???p ti???n</label>
                                    <textarea id="recharge_notice"
                                        name="recharge_notice"><?=$CMSNT->site('recharge_notice');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ghi ch?? v??ng quay</label>
                                    <textarea id="notice_spin"
                                        name="notice_spin"><?=$CMSNT->site('notice_spin');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ghi ch?? l???ch s??? ????n h??ng</label>
                                    <textarea id="orders_notice"
                                        name="orders_notice"><?=$CMSNT->site('orders_notice');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ch??nh s??ch b???o m???t</label>
                                    <textarea id="chinh_sach_bao_mat"
                                        name="chinh_sach_bao_mat"><?=$CMSNT->site('chinh_sach_bao_mat');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">??i???u kho???n s??? d???ng</label>
                                    <textarea id="dieu_khoan_su_dung"
                                        name="dieu_khoan_su_dung"><?=$CMSNT->site('dieu_khoan_su_dung');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">L??u ?? ti???p th??? li??n k???t</label>
                                    <textarea id="notice_ref"
                                        name="notice_ref"><?=$CMSNT->site('notice_ref');?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Trang li??n h???</label>
                                    <textarea id="contact_page"
                                        name="contact_page"><?=$CMSNT->site('contact_page');?></textarea>
                                </div>
                            </div>
                            <div class="card-footer clearfix">
                                <button name="SaveSettings" class="btn btn-info btn-block btn-icon-left m-b-10"
                                    type="submit"><i class="fas fa-save mr-1"></i>L??u Ngay</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<div class="modal fade" id="modal-hd-font-family">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">H?????NG D???N THAY FONT WEBSITE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>B?????c 1: Truy c???p v??o <a target="_blank"
                            href="https://fonts.google.com/">https://fonts.google.com/</a> t??m v?? ch???n FONT qu?? kh??ch
                        c???n thay.</li>
                    <li>B?????c 2: Qu?? kh??ch nh???n v??o FONT qu?? kh??ch ch???n sau ???? ????? ?? b??n tay ph???i m??n h??nh c?? ?? <b>Use on
                            the web</b>.</li>
                    <li>B?????c 3: Qu?? kh??ch t??ch v??o <b>
                            < link>
                        </b> v?? copy to??n b??? d??? li???u trong ??.</li>
                    <li>B?????c 4: Qu?? kh??ch ch??n d??? li???u ???? copy ph??a tr??n v??o ?? <b>Script Header</b> tr??n website qu??
                        kh??ch.</li>
                    <li>B?????c 5: Qu?? kh??ch nh??n v??o ?? <b>CSS rules to specify families</b> - Copy 1 d??ng
                        <b>font-family</b> qu?? kh??ch mu???n ch???n v?? d??n v??o ?? tr??n (kh??ng b???t bu???c thao t??c n??y, tu??? nhu
                        c???u).
                    </li>
                </ul>
                <h4 class="text-center">Ch??c qu?? kh??ch th??nh c??ng <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-hd-nap-the">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">H?????NG D???N T??CH H???P N???P TH??? C??O</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>B?????c 1: Truy c???p v??o <a target="_blank"
                            href="https://card24h.com/account/login">https://card24h.com/account/login</a> <b>????ng
                            k??</b> t??i kho???n v?? <b>????ng nh???p</b>.</li>
                    <li>B?????c 2: Truy c???p v??o <a target="_blank" href="https://card24h.com/merchant/list">????y</a> ????? ti???n
                        h??nh t???o API m???i.</li>
                    <li>B?????c 3: Nh???p l???n l?????t nh?? sau:</li>
                    <b>T??n m?? t???:</b> => <i><?=check_string($_SERVER['SERVER_NAME']);?> - SHOPCLONE6</i><br>
                    <b>Ch???n v?? giao d???ch:</b> => <i>VND</i><br>
                    <b>Ki???u:</b> => <i>GET</i><br>
                    <b>???????ng d???n nh???n d??? li???u (Callback Url):</b> => <i><?=BASE_URL('api/card.php');?></i><br>
                    <b>?????a ch??? IP (kh??ng b???t bu???c):</b> => <i></i><br>
                    <li>B?????c 4: Th??m th??ng tin k???t n???i v?? <a target="_blank" href="https://zalo.me/0947838128">inbox</a>
                        ngay cho Admin ????? duy???t API.</li>
                    <li>B?????c 5: Copy Partner ID d??n v??o ?? Partner ID tr??n h??? th???ng.</li>
                    <li>B?????c 6: Copy Partner Key d??n v??o ?? Partner Key tr??n h??? th???ng.</li>
                </ul>
                <h4 class="text-center">Ch??c qu?? kh??ch th??nh c??ng <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-hd-crypto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">H?????NG D???N T??CH H???P N???P TI???N T??? ?????NG QUA CRYPTO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>B?????c 1: Truy c???p v??o <a target="_blank"
                            href="https://nowpayments.io/?link_id=4106129067">????y</a> ????? <b>????ng k??</b> t??i kho???n v??
                        <b>????ng nh???p</b>.
                    </li>
                    <li>B?????c 2: Nh??n v??o menu b??n tr??i, nh???n v??o <b>Store Settings</b>.</li>
                    <li>B?????c 3: Nh??n v??o <b>Payout Wallet</b>, b???n nh???n v??o <b>Add another wallet</b>, sau ???? b???n ch???n t??n v?? <b>Currency</b> v?? nh???p ?????a ch??? v?? c???a b???n v??o.</li>
                    <li>B?????c 4: Nh???n v??o <b>API Keys</b>, b???n nh???n v??o <b>Add new key</b> sau ???? copy ??o???n key ???????c t???o ra, truy c???p trang qu???n tr??? c???a b???n, d??n ??o???n key v???a copy v??o ?? API Key.</li>
                    <li>B?????c 5: Nh??n v??o <b>Instant Payment Notifications</b>, b???n th???c hi???n t???o <b>IPN secret key</b> b???ng c??ch nh???n v??o <b>Generate</b>, sau ???? b???n copy ??o???n m?? v???a t???o d??n v??o ?? IPN trong trang qu???n tr??? (vui l??ng b???o m???t th??ng tin n??y tr??nh hacker fake giao d???ch).  </li>
                    <li>B?????c 6: ????n ????y qu?? kh??ch c?? th??? s??? d???ng h??? th???ng, sau khi user n???p ti???n v??o h??? th???ng th??ng qua Crypto, s??? d?? coin c???a qu?? kh??ch s??? ???????c chuy???n th???ng v??o v?? m?? qu?? kh??ch th??m ??? b?????c 3.</li>
                </ul>
                <!-- <p>H?????ng d???n b???ng Video xem t???i <a target="_blank"
                        href="https://www.youtube.com/watch?v=N8CuOJTD6l8">????y</a>.</p> -->
                <h4 class="text-center">Ch??c qu?? kh??ch th??nh c??ng <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-hd-auto-bank">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">H?????NG D???N T??CH H???P N???P TI???N T??? ?????NG QUA NG??N H??NG</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>B?????c 1: Truy c???p v??o <a target="_blank"
                            href="https://api.web2m.com/Register.html?ref=113">????y</a> ????? <b>????ng k??</b> t??i kho???n v??
                        <b>????ng nh???p</b>.
                    </li>
                    <li>B?????c 2: Ch???n ng??n h??ng b???n mu???n k???t n???i Auto, sau ???? nh???n v??o n??t <b>Th??m t??i kho???n {t??n ng??n
                            h??ng}</b>.</li>
                    <li>B?????c 3: Nh???p ?????y ????? th??ng tin ????ng nh???p Internet Banking c???a b???n v??o form ????? ti???n h??nh k???t n???i.
                    </li>
                    <li>B?????c 4: Nh???n v??o <b>L???y Token</b> sau ???? check email ????? copy <b>Token</b> v???a l???y.</li>
                    <li>B?????c 5: D??n <b>Token</b> v??o ?? <b>Token Bank</b> trong website c???a b???n.</li>
                    <li>B?????c 6: Nh???p s??? t??i kho???n c???a b???n v???a k???t n???i v??o ?? <b>S??? t??i kho???n</b>.</li>
                    <li>B?????c 7: Nh???p m???t kh???u Internet Banking v??o ?? <b>M???t kh???u Internet Banking</b> v?? nh???n l??u.</li>
                    <li>B?????c 8: Quay l???i <a target="_blank" href="https://api.web2m.com/Home/nangcap">????y</a> v?? ti???n
                        h??nh gia h???n g??i Bank m?? b???n c???n d??ng ????? b???t ?????u s??? d???ng Auto.</li>
                </ul>
                <p>H?????ng d???n b???ng Video xem t???i <a target="_blank"
                        href="https://www.youtube.com/watch?v=N8CuOJTD6l8">????y</a>.</p>
                <h4 class="text-center">Ch??c qu?? kh??ch th??nh c??ng <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="modal-hd-auto-momo">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">H?????NG D???N T??CH H???P N???P TI???N T??? ?????NG QUA V?? MOMO</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>H?????ng d???n l???y Token MOMO ????? c??i Auto.</p>
                <ul>
                    <li>B?????c 1: Truy c???p v??o <a target="_blank"
                            href="https://api.web2m.com/Register.html?ref=113">????y</a> ????? <b>????ng k??</b> t??i kho???n v??
                        <b>????ng nh???p</b>.
                    </li>
                    <li>B?????c 2: Ch???n ng??n h??ng b???n mu???n k???t n???i Auto, sau ???? nh???n v??o n??t <b>Th??m t??i kho???n MoMo</b>.
                    </li>
                    <li>B?????c 3: Nh???p ?????y ????? th??ng tin ????ng nh???p MoMo c???a b???n v??o form ????? ti???n h??nh k???t n???i.</li>
                    <li>B?????c 4: Nh???n v??o <b>L???y Token</b> sau ???? check email ????? copy <b>Token</b> v???a l???y.</li>
                    <li>B?????c 5: D??n <b>Token</b> v??o ?? <b>Token MOMO</b> trong website c???a b???n v?? nh???n L??u.</li>
                    <li>B?????c 6: Quay l???i <a target="_blank" href="https://api.web2m.com/Home/nangcap">????y</a> v?? ti???n
                        h??nh gia h???n g??i MOMO v?? b???t ?????u s??? d???ng Auto.</li>
                    <li>H?????ng d???n b???ng Video xem t???i <a target="_blank"
                            href="https://www.youtube.com/watch?v=5WRqOmxzBPc">????y</a>.</li>
                </ul>
                <!-- <p>H?????ng d???n l???y m?? QR MOMO</p>
                <ul>
                    <li>B?????c 1: Truy c???p App <b>MOMO</b> -> <b>V?? c???a t??i</b> -> nh???n v??o <b>T??n Ch??? V??</b> ??? d??ng ?????u
                        ti??n trong v?? MOMO c???a b???n.</li>
                    <li>B?????c 2: K??o xu???ng d?????i c??ng ch???n <b>M?? NH???N TI???N c???a t??i</b> -> nh???n <b>l??u h??nh</b>.</li>
                    <li>B?????c 3: Sau khi l??u h??nh b???n v??o <a target="_blank" href="https://imgur.com/upload?beta">????y</a>
                        ????? up h??nh v???a l??u l??n cloud.</li>
                    <li>B?????c 4: Sau khi up l??n cloud imgur b???n r?? chu???t ph???i v??o ???nh ch???n <b>copy ?????a ch??? h??nh ???nh</b>
                        (ho???c ti???ng anh c?? ngh??a t????ng t???) ????? ti???n h??nh copy link ???nh .jpg ho???c .png.</li>
                    <li>B?????c 5: D??n link ???nh v???a copy v??o ?? <b>QR CODE</b>.</li>
                </ul> -->
                <h4 class="text-center">Ch??c qu?? kh??ch th??nh c??ng <img
                        src="https://i.pinimg.com/736x/c4/2c/98/c42c983e8908fdbd6574c2135212f7e4.jpg" width="45px;">
                </h4>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
$(function() {
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo2"), {
        mode: "htmlmixed",
        theme: "monokai"
    });
})
</script>
<!-- ckeditor -->
<script>
CKEDITOR.replace("notice_ref");
CKEDITOR.replace("perfectmoney_notice");
CKEDITOR.replace("notice_spin");
CKEDITOR.replace("notice_napthe");
CKEDITOR.replace("recharge_notice");
CKEDITOR.replace("paypal_notice");
CKEDITOR.replace("orders_notice");
CKEDITOR.replace("thongbao");
CKEDITOR.replace("contact_page");
CKEDITOR.replace("chinh_sach_bao_mat");
CKEDITOR.replace("dieu_khoan_su_dung");
CKEDITOR.replace("notice_crypto");
</script>


<?php
require_once(__DIR__.'/footer.php');
?>