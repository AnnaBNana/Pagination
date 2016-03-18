<h1></h1>
<div class="ui centered grid">
  <div class="twelve wide column">

    <table class="ui inverted teal table">
      <thead>
        <tr>
          <th>Leads ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Registered Datetime</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($leads as $lead) { ?>
        <tr>
          <td><?= $lead['leads_id'] ?></td>
          <td><?= $lead['first_name'] ?></td>
          <td><?= $lead['last_name'] ?></td>
          <td><?= $lead['registered_datetime'] ?></td>
          <td><?= $lead['email'] ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>

</div>
