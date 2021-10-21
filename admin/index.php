<?php
include('templates/header.php')
?>
<div class="container">
    <h2 class="text-center text-danger p-3">QUẢN LÝ NGÂN HÀNG MÁU</h2>
</div>

<div class="container">
    <a class="btn btn-primary m-3" href="them.php" role="button">Thêm mới</a>
    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>
</div>






<?php
include('templates/footer.php')
?>