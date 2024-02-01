
    <h1> Affichage du détail du produit</h1>

      <div class="starter-template">

      <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                <th scope="row">1</th>
                <td><?php echo htmlspecialchars($Products['title']); ?></td>
                <td><?php echo htmlspecialchars($Products['descr']); ?></td>
                <td>@<?php echo htmlspecialchars($Products['price']); ?></td>
                </tr>
        </tbody>
        </table>

      </div>
