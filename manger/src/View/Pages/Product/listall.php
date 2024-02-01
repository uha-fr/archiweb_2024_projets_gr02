
    <h1>Liste de produit</h1>

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

      <?php
         $i=0;
    	foreach ($Products as $post) {
    	?>
                <tr>
                <th scope="row"><?php echo $i; $i++; ?></th>
                <td><?php echo htmlspecialchars($post['title']); ?></td>
                <td><?php echo htmlspecialchars($post['descr']); ?></td>
                <td>@<?php echo htmlspecialchars($post['price']); ?></td>
                </tr>
    	<?php
    	}
    	?>

        </tbody>
        </table>

      </div>

