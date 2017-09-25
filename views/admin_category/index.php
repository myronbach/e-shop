<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель адміністратора</a></li>
                    <li class="active">Керування категоріями</li>
                </ol>
            </div>

            <a href="/admin/category/create" class="btn btn-default back"><i class="fa fa-plus"></i> Додати категорію</a>

            <h4>Список категорій</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID </th>
                    <th>Найменування категорії</th>
                    <th>Порядковий номер</th>
                    <th>Статус</th>
                    <th>Редагувати</th>
                    <th>Видалити</th>
                </tr>
               <?php foreach($categories as $category):?>

                    <tr>
                        <td><?= $category['id']?></td>
                        <td><?= $category['name_category']?></td>
                        <td><?= $category['sort_order']?></td>
                        <td><?= $category['status']?></td>
                        <td>
                            <a href="/admin/category/update/<?= $category['id']?>" title="Редагувати">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/category/delete/<?= $category['id']?>" title="Видалити">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
               <?php endforeach?>

            </table>

        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/footer_admin.php'; ?>



