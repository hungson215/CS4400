<h1>Popular Route</h1>
<table  class="table table-striped">
	<thead>
	  <tr>
	    <th>Month</th>
	    <th>Train Number</th>
        <th># of Reservation</th>
	  </tr>
	 </thead>
	 <tbody>
		<?php foreach ($routes as $route): ?>
		    <tr style = "text-align: left">
		    	<td><?= $route["m"] ?></td>
		        <td><?= $route["t"] ?></td>
                <td><?= $route["c"] ?></td>
		    </tr>
		<?php endforeach ?>
	</tbody>
</table>

<div>
    or <a href="index.php">Back</a>
</div>
