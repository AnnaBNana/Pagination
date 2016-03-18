<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Leads</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../semantic/dist/semantic.min.css">
    <script src="../../semantic/dist/semantic.min.js"></script>
    <link rel="stylesheet" href="../../assets/style.css" media="screen" title="no title" charset="utf-8">
    <script src="../../assets/js/partial_handler.js">
    </script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  </head>
  <body>

  <div class="ui inverted teal segment">

    <h1 class="ui centered header">Leads Index</h1>

    <form class="ui centered grid">

      <div class="ui form">
        <div class="fields">
          <div class="field">
            <label>Name</label>
            <div class="ui icon input">
              <input type="text" placeholder="name" name="name" class="name">
            </div>
          </div>
          <div class="field">
            <label>Date From</label>
            <div class="ui icon input">
              <input type="text" name="from" class="from">
              <i class="calendar icon"></i>
            </div>
          </div>
          <div class="field">
            <label>Date to</label>
            <div class="ui icon input">
              <input type="text" name="to" class="to">
              <i class="calendar icon"></i>
            </div>
          </div>
          <div class="field">
            <div class="ui input">
              <input type="hidden" name="page" class="page">
            </div>
          </div>
        </div>
      </div>
    </form>
    <h1></h1>
  </div>

  <table class="ui inverted grey table">
    <thead>
      <tr>
        <th colspan="5">
          <div class="ui right floated pagination menu">
            <a class="item">1</a>
            <a class="item">2</a>
            <a class="item">3</a>
            <a class="item">4</a>
            <a class="item">5</a>
            <a class="item">6</a>
            <a class="item">7</a>
          </div>
        </th>
      </tr>
    </thead>
  </table>

    <div class="target">

    </div>
  </body>
</html>
