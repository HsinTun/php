<!--用prats-->
<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '列表';

$perPage = 5; //每一頁設定五筆資料
$t_sql = "SELECT COUNT(1) FROM address_book";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage); //取進位數(總數/每一頁的數量)

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) $page = 1;
if ($page > $totalPages) $page = $totalPages;



$sql = sprintf("SELECT * FROM address_book ORDER BY sid DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);


$rows = $pdo->query($sql)->fetchAll();

?>
<?php include __DIR__ . '/parts/html-header.php'; ?>
<?php include __DIR__ . '/parts/navber.php'; ?>
<div class="container">
    <table class="table table-striped">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>

                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>

                    <li class="page-item <?= $i == $page ? 'active' : '' ?>">

                        <a class="page-link" href="?page=<?= $i ?>"> <?= $i ?> </a>
                    </li>

                <?php endfor; ?>


                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Birthday</th>
                <th scope="col">Address</th>

                <th class="allclear" scope="col">
                    <a href="javascript:">刪除全部</a>
                </th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) : ?>
                <tr>
                    <td><?= $r['sid'] ?></td>
                    <td><?= $r['name'] ?></td>
                    <td><?= $r['email'] ?></td>
                    <td><?= $r['mobile'] ?></td>
                    <td><?= $r['birthday'] ?></td>
                    <td><?= $r['address'] ?></td>
                    <td class="trash">
                        <a href="javascript:">刪除</a>
                    </td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?php include __DIR__ . '/parts/script.php'; ?>
<script>
    $('.trash').click(function() {
        $(this).parent().remove();
    })
    $('.allclear').click(function() {
        $(this).closest('tr').remove()
    })
</script>


<?php include __DIR__ . '/parts/html-footer.php'; ?>