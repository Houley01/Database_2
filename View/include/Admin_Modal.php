<!-- Book Information Modal -->
<div class="modal fade" id="AdminBookModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 name="BoldBookTitle" id="BoldBookTitle"></h4>
      </div>
      <form class="" action="../Model/EditBooks.php" method="POST">
        <div class="modal-body" style="padding:40px 50px;">
          <div class="form-group">
            <input hidden type="text" name="BookID" id="BookID">
            <label for="Book Name">Book Title</label>
            <input type="text" class="form-control" name="BookTitle" id="BookTitle">
          </div>
          <div class="form-group">
            <label for="Books Genre">Genre</label>
            <input type="text" class="form-control" name="Genre" id="Genre">
          </div>
          <div class="form-group">
            <label for="">Language Written In</label>
            <input type="text" class="form-control" name="LanguageWrittenIn" id="LanguageWrittenIn">
          </div>
          <div class="form-group">
            <label for="Millions Sold">Millions Sold</label>
            <input type="text" class="form-control" name="MillionsSold" id="MillionsSold">
          </div>
          <div class="form-group">
            <label for="Year Of Publication">Year Of Publication</label>
            <input type="text" class="form-control" name="YearOfPublication" id="YearOfPublication">
          </div>
          <div class="form-group">
            <label for="Book Summary">Book Cover File Name</label>
            <input type="text" class="form-control" name="BookCover" id="BookCover">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success btn-default pull-left" name="EditButton" value="Updated"><span class="glyphicon glyphicon-ok"></span> Updated</button>

          <button type="button" class="btn btn-light btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>

          <button type="submit" class="btn btn-danger btn-default pull-left" name="EditButton" value="Delete"><span class="glyphicon glyphicon-trash"></span> Remove</button>
        </div>
      </form>
    </div>

  </div>
</div>
<script src="../Control/js/ajax.js" defer charset="utf-8"></script>
