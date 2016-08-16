<h1>Revenue:</h1>
<table  class="table table-striped">
	<thead>
	  <tr>
	    <th>Month</th>
	    <th>Revenue</th>
	  </tr>
	 </thead>
	 <tbody>
		<?php foreach ($revenues as $revenue): ?>
		    <tr style = "text-align: left">
		    	<td>$ <?= $revenue["m"] ?></td>
		        <td>$ <?= $revenue["s"] ?></td>
		    </tr>
		<?php endforeach ?>
	</tbody>
</table>

<div>
    or <a href="index.php">Back</a>
</div>
