<?php if (!defined('IN_SITE')) {
    die('The Request Not Found');
}
$body = [
    'title' => 'Translate',
    'desc'   => 'CMSNT Panel',
    'keyword' => 'cmsnt, CMSNT, cmsnt.co,'
];
$body['header'] = '
    <!-- DataTables -->
    <link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
';
$body['footer'] = '
    <!-- DataTables  & Plugins -->
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/jszip/jszip.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/pdfmake/pdfmake.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/pdfmake/vfs_fonts.js"></script>   
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="'.BASE_URL('public/AdminLTE3/').'plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
';
require_once(__DIR__.'/../../../models/is_admin.php');
if (isset($_GET['id'])) {
    $id = check_string($_GET['id']);
    $row = $CMSNT->get_row("SELECT * FROM `languages` WHERE `id` = '$id' ");
    if (!$row) {
        redirect(base_url('admin/language-list'));
    }
} else {
    redirect(base_url('admin/language-list'));
}
require_once(__DIR__.'/header.php');
require_once(__DIR__.'/sidebar.php');
require_once(__DIR__.'/nav.php');
?>
<?php
if (isset($_POST['addTranslate'])) {
    if ($CMSNT->site('status_demo') != 0) {
        die('<script type="text/javascript">if(!alert("Kh??ng ???????c d??ng ch???c n??ng n??y v?? ????y l?? trang web demo.")){window.history.back().location.reload();}</script>');
    }
    foreach ($CMSNT->get_list("SELECT * FROM `languages` WHERE `id` != '".$row['id']."' ") as $lang) {
        if ($CMSNT->num_rows("SELECT * FROM `translate` WHERE `name` = '".check_string($_POST['name'])."' AND `lang_id` = '".$lang['id']."'  ") < 1) {
            $CMSNT->insert("translate", [
                'value' => check_string($_POST['name']),
                'name'  => check_string($_POST['name']),
                'lang_id'   => $lang['id']
            ]);
        }
    }
    if ($CMSNT->num_rows("SELECT * FROM `translate` WHERE `name` = '".check_string($_POST['name'])."' AND `lang_id` = '".$row['id']."' ") < 1) {
        $isInsert = $CMSNT->insert("translate", [
            'value' => check_string($_POST['value']),
            'name'  => check_string($_POST['name']),
            'lang_id'   => $row['id']
        ]);
    }
    if ($isInsert) {
        $Mobile_Detect = new Mobile_Detect();
        $CMSNT->insert("logs", [
            'user_id'       => $getUser['id'],
            'ip'            => myip(),
            'device'        => $Mobile_Detect->getUserAgent(),
            'createdate'    => gettime(),
            'action'        => "Th??m n???i dung ng??n ng??? (".check_string($_POST['value']).") v??o h??? th???ng."
        ]);
        die('<script type="text/javascript">window.history.back().location.reload();</script>');
    } else {
        die('<script type="text/javascript">if(!alert("Tr??ng ng??n ng??? khi th??m !")){window.history.back().location.reload();}</script>');
    }
}
if (isset($_POST['SaveTranslate'])) {
    if ($CMSNT->site('status_demo') != 0) {
        die('<script type="text/javascript">if(!alert("Kh??ng ???????c d??ng ch???c n??ng n??y v?? ????y l?? trang web demo.")){window.history.back().location.reload();}</script>');
    }
    foreach ($_POST as $key => $value) {
        $CMSNT->update("translate", array(
            'value' => check_string($value)
        ), " `id` = '$key' ");
    }
    $Mobile_Detect = new Mobile_Detect();
    $CMSNT->insert("logs", [
        'user_id'       => $getUser['id'],
        'ip'            => myip(),
        'device'        => $Mobile_Detect->getUserAgent(),
        'createdate'    => gettime(),
        'action'        => "Thay ?????i n???i dung ng??n ng???."
    ]);
    die('<script type="text/javascript">if(!alert("L??u th??nh c??ng !")){window.history.back().location.reload();}</script>');
}
if (isset($_POST['updateTranslate'])) {
    if ($row['lang_default'] == 1) {
        die('<script type="text/javascript">if(!alert("B???n kh??ng th??? format v?? ????y l?? ng??n ng??? m???c ?????nh c???a h??? th???ng")){window.history.back().location.reload();}</script>');
    }
    $isDelete = $CMSNT->remove("translate", " `lang_id` = '".$row['id']."' ");
    if ($isDelete) {
        foreach ($CMSNT->get_list("SELECT * FROM `translate` WHERE `lang_id` = '".$CMSNT->get_row("SELECT * FROM `languages` WHERE `lang_default` = 1 ")['id']."' ") as $tran) {
            $CMSNT->insert("translate", [
                'lang_id'   => $row['id'],
                'value'     => $tran['value'],
                'name'      => $tran['name']
            ]);
        }
        $Mobile_Detect = new Mobile_Detect();
        $CMSNT->insert("logs", [
            'user_id'       => $getUser['id'],
            'ip'            => myip(),
            'device'        => $Mobile_Detect->getUserAgent(),
            'createdate'    => gettime(),
            'action'        => "Thay ?????i n???i dung ng??n ng???."
        ]);
        die('<script type="text/javascript">if(!alert("C???p nh???t th??nh c??ng !")){window.history.back().location.reload();}</script>');
    }
}
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Translate</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=BASE_URL('admin/home');?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Translate</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-6">
                    <div class="mb-3">
                        <a class="btn btn-danger" type="button" href="<?=BASE_URL('admin/language-list');?>"><i
                                class="fas fa-undo mr-1"></i>Quay L???i</a>
                    </div>
                </section>
                <section class="col-lg-6">
                    <div class="text-right mb-3">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-add-nd"><i
                                class="fas fa-plus-circle mr-1"></i>Th??m n???i dung</button>
                        <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modal-format"><i
                                class="fas fa-pencil-alt mr-1"></i>Format n???i dung</button>
                    </div>
                </section>
                <section class="col-lg-12 connectedSortable">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h3 class="card-title">
                                <i class="fas fa-language mr-1"></i>
                                TRANSLATE
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
                            <form action="" method="POST">
                            <div class="table-responsive p-0 mb-3">
                                <table id="datatable2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th width="3%">#</th>
                                            <th>Vietnamese</th>
                                            <th><?=$row['lang'];?></th>
                                            <th width="6%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; foreach ($CMSNT->get_list("SELECT * FROM `translate` WHERE `lang_id` = '".$row['id']."' ORDER BY id DESC ") as $trans) {?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><textarea class="form-control" readonly><?=$trans['name'];?></textarea>
                                            </td>
                                            <td>
                                                <textarea name="<?=$trans['id'];?>" class="form-control"><?=$trans['value'];?></textarea>
                                            </td>
                                            <td>
                                            <button style="color:white;" onclick="RemoveRow('<?=$trans['id'];?>', '<?=$trans['name'];?>')"
                                                class="btn btn-danger btn-sm btn-icon-left m-b-10" type="button">
                                                <i class="fas fa-trash mr-1"></i><span class="">Delete</span>
                                            </button>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <button name="SaveTranslate" class="btn btn-info btn-icon-left btn-block m-b-10" type="submit"><i
                                        class="fas fa-save mr-1"></i>L??u Ngay</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-add-nd">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title">Th??m N???i Dung</h4>
                <button type="button" class="btn bg-danger btn-sm" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Vietnamese:</label>
                        <textarea class="form-control" name="name" placeholder="Nh???p n???i dung ti???ng vi???t m???c ?????nh"
                            required></textarea>
                    </div>
                    <div class="form-group">
                        <label><?=$row['lang'];?>:</label>
                        <textarea class="form-control" name="value" placeholder="Nh???p n???i dung c???n d???ch"
                            required></textarea>
                    </div>
                    <i>Ch???c n??ng n??y ch??? d??nh ri??ng cho nh?? ph??t tri???n.</i>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">????ng</button>
                    <button type="submit" name="addTranslate" class="btn btn-primary">Th??m ngay</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="modal fade" id="modal-format">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title">C??i l???i n???i dung m???c ?????nh</h4>
                <button type="button" class="btn bg-danger btn-sm" data-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <p>H??? th???ng s??? c???p nh???t l???i n???i dung gi???ng ng??n ng??? <b><?=$CMSNT->get_row("SELECT * FROM `languages` WHERE `lang_default` = 1")['lang'];?></b>, b???n c?? ch???c ch???n mu???n th???c hi???n thay ?????i n??y kh??ng?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hu???</button>
                    <button type="submit" name="updateTranslate" class="btn btn-primary">X??c nh???n</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?php
require_once(__DIR__.'/footer.php');
?>

<script>
$(function() {
    $('#datatable2').DataTable();
});

function RemoveRow(id, name) {
    cuteAlert({
        type: "question",
        title: "X??c Nh???n X??a Ng??n Ng???",
        message: "B???n c?? ch???c ch???n mu???n x??a ng??n ng??? (" + name + ") kh??ng ?",
        confirmText: "?????ng ??",
        cancelText: "H???y"
    }).then((e) => {
        if (e) {
            $.ajax({
                url: "<?=BASE_URL("ajaxs/admin/removeTranslate.php");?>",
                method: "POST",
                dataType: "JSON",
                data: {
                    id: id
                },
                success: function(respone) {
                    if (respone.status == 'success') {
                        cuteToast({
                            type: "success",
                            message: respone.msg,
                            timer: 5000
                        });
                        location.reload();
                    } else {
                        cuteAlert({
                            type: "error",
                            title: "Error",
                            message: respone.msg,
                            buttonText: "Okay"
                        });
                    }
                },
                error: function() {
                    alert(html(response));
                    location.reload();
                }
            });
        }
    })
}
</script>