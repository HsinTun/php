<!--用prats-->
<?php $title ='我的主頁' ; ?>

<?php
$persons=[
        [
             'name'=>'Bill',
            'age'=>27,
            'gender'=>'male'
        ],

        [
             'name'=>'David',
            'age'=>17,
            'gender'=>'male'
        ] ,
        [
             'name'=>'Marry',
            'age'=>37,
            'gender'=>'female'
        ],
        [
             'name'=>'Lisa',
            'age'=>57,
            'gender'=>'female'
        ]
];

?>


<?php require __DIR__.'/parts/html-header.php'; ?>
<?php require __DIR__.'/parts/navber.php'; ?>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>

            <th scope="col">Name</th>
            <th scope="col">age</th>
            <th scope="col">gender</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($persons as $p): ?>

        <tr>


            <td><?= $p['name'] ?></td>
            <td><?= $p['age'] ?></td>
            <td><?= $p['gender'] ?></td>

        </tr>

         <?php endforeach; ?>

        </tbody>
    </table>
</div>













<?php require __DIR__.'/parts/script.php'; ?>
<?php require __DIR__.'/parts/html-footer.php'; ?>
