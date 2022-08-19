<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo '<link rel="stylesheet" href="../app/css/tabla.css">'
?>
<div class="fluid-container" style="margin-bottom: 10em;">
  <form>
  <h3>DataTable with built-in buttons</h3>
  <hr/>
  <table id="example" class="dataTable table table-hover table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Owner</th>
        <th></th>
        <th>Case Title</th>
        <th>Case Owner</th>
        <th>Created Date</th>
        <th>Modified Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td class="form-actions" colspan="7">
          <input type="submit" name="command" class="btn btn-action btn-primary disabled" disabled="disabled" value="Copy" data-loading-text="Copying..." />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" data-loading-text="Archiving..." disabled="disabled" value="Archive" />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" disabled="disabled" data-ui="confirm" value="Delete" />
        </td>
      </tr>
    </tfoot>
  </table>
</form>
  
  <br/>
  
  <form>
    
  <h3>DataTable with external buttons</h3>
  <hr/>
    <div class="btn-group">
    <a id="my-cases" href="#" class="action active btn btn-primary filter-btn">My Cases</a>
    <a id="all-cases" class="action btn btn-primary filter-btn" href="#">All Cases in My Institution</a>
    <a id="custom-cases" id="customized-cases" class="action btn btn-primary" data-url="/Scenario/LoadCustomCases">Customized Cases</a>
  </div>
  <table id="example2" class="dataTable table table-hover table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Owner</th>
        <th><input id="selectall" type="checkbox"></th>
        <th>Case Title</th>
        <th>Case Owner</th>
        <th>Created Date</th>
        <th>Modified Date</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id="second">
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="checkbox" name="Id" value="111"></td>
        <td>AAA</td>
        <td>BBB</td>
        <td>10/21/2016</td>
        <td>10/21/2016</td>
        <td><a class="btn btn-primary">Manage</a></td>
      </tr>
      
    </tbody>
    <tfoot>
      <tr>
        <td class="form-actions" colspan="7">
          <input type="submit" name="command" class="btn btn-action btn-primary disabled" disabled="disabled" value="Copy" data-loading-text="Copying..." />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" data-loading-text="Archiving..." disabled="disabled" value="Archive" />
          <input type="submit" name="command" class="btn btn-action btn-admin-permission disabled" disabled="disabled" data-ui="confirm" value="Delete" />
        </td>
      </tr>
    </tfoot>
  </table>
  </form>
  
  <br/>
  
 
</div>
</body>
</html>